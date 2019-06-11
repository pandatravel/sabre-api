<?php

namespace Ammonkc\SabreApi\Api;

use Ammonkc\SabreApi\AbstractRequest;
use Ammonkc\SabreApi\Exception\ApiNotAuthorizedException;
use Ammonkc\SabreApi\Exception\ApiTimedOutException;
use Ammonkc\SabreApi\Exception\HistoricalFlightsByOriginsDestinationsBadRequestException;
use Ammonkc\SabreApi\Exception\HistoricalFlightsByOriginsDestinationsNotFoundException;
use Ammonkc\SabreApi\Exception\HistoricalFlightsByOriginsDestinationsRequestEntityTooLargeException;
use Ammonkc\SabreApi\Model\CityPairsLookup\HistoricalCityPairLookupResponse;
use Ammonkc\SabreApi\Model\CityPairsLookup\Normalizer\NormalizerFactory;
use GuzzleHttp\Exception\ClientException;
use GuzzleHttp\Exception\ConnectException;
use GuzzleHttp\Exception\RequestException;
use Symfony\Component\OptionsResolver\OptionsResolver;

/**
 * The City Pairs Lookup API returns a list of the city pairs supported
 * by REST Air Shopping APIs. City pairs are combinations of
 * origin and destination airport codes.
 *
 * Fare Range API supported city pairs.
 *
 * @link   https://ptagent.com/api/v1/packages/
 *
 * @author Ammon Casey <ammon@caseyohana.com>
 */
class HistoricalFlightsByOriginsDestinations extends AbstractRequest
{
    /**
     * Endpoint
     *
     * @var string
     */
    protected $uri = '/lists/supported/historical/flights/origins-destinations';

    /**
     * Endpoint Base uri
     *
     * @var string
     */
    protected $api_version = '/v1';

    /**
     * NormalizerFactory
     *
     * @var Ammonkc\SabreApi\Model\CityPairsLookup\Normalizer\NormalizerFactory $normalizer
     */
    protected $normalizer = NormalizerFactory::class;

    /**
     * Response Type
     *
     * @var Ammonkc\SabreApi\Model\CityPairsLookup\HistoricalCityPairLookupResponse $responseType
     */
    protected $responseType = HistoricalCityPairLookupResponse::class;

    /**
     * Available Themes
     *
     * @var array
     */
    protected $available_regions = [
        'Africa',
        'Asia Pacific',
        'Europe',
        'Latin America',
        'Middle East',
        'North America',
    ];

    /**
     * Return the request data
     *
     * @returns void
     */
    protected function getData()
    {
        //
    }

    /**
     * Accept a data and sends it as a request.
     *
     * @param array $data
     *
     * @throws \Ammonkc\SabreApi\Exception\ApiTimedOutException
     * @throws \Ammonkc\SabreApi\Exception\ApiNotAuthorizedException
     * @throws \Ammonkc\SabreApi\Exception\HistoricalFlightsByOriginsDestinationsBadRequestException
     * @throws \Ammonkc\SabreApi\Exception\HistoricalFlightsByOriginsDestinationsNotFoundException
     * @throws \Ammonkc\SabreApi\Exception\HistoricalFlightsByOriginsDestinationsRequestEntityTooLargeException
     *
     * @returns \Ammonkc\SabreApi\Model\CityPairsLookup\HistoricalCityPairLookupResponse
     */
    public function sendData($data)
    {
        try {
            $response = $this->get($this->getUri());
        } catch (ConnectException $e) {
            if ($e->getHandlerContext()['errno'] === 28) {
                throw new ApiTimedOutException($e);
            }
            throw $e;
        } catch (ClientException $e) {
            if ($e->getCode() === 403) {
                throw new ApiNotAuthorizedException($e);
            }
            throw $e;
        } catch (RequestException $e) {
            if ($e->getCode() === 400) {
                throw new HistoricalFlightsByOriginsDestinationsBadRequestException($e);
            }
            if ($e->getCode() === 404) {
                throw new HistoricalFlightsByOriginsDestinationsNotFoundException($e);
            }
            if ($e->getCode() === 413) {
                throw new HistoricalFlightsByOriginsDestinationsRequestEntityTooLargeException($e);
            }
            throw $e;
        }

        return $this->parseResponse($response);
    }

    /**
     * Deserialze Respose Body
     *
     * @return \Ammonkc\SabreApi\Model\CityPairsLookup\HistoricalCityPairLookupResponse|null
     */
    protected function deserializeResponseBody(string $body, int $status)
    {
        if (200 === $status) {
            return $this->deserialize($body, $this->responseType, 'json');
        }
    }

    /**
     * @return \Symfony\Component\OptionsResolver\OptionsResolver
     */
    protected function getQueryOptionsResolver(): OptionsResolver
    {
        $optionsResolver = parent::getQueryOptionsResolver();
        $optionsResolver->setDefined(['pointofsalecountry', 'origincountry', 'destinationcountry', 'originregion', 'destinationregion'])
                        ->setRequired([])
                        ->setDefaults(['pointofsalecountry' => 'US', 'origincountry' => 'US'])
                        ->setAllowedTypes('pointofsalecountry', ['string'])
                        ->setAllowedTypes('origincountry', ['string'])
                        ->setAllowedTypes('destinationcountry', ['string'])
                        ->setAllowedTypes('originregion', ['string'])
                        ->setAllowedValues('originregion', $this->available_regions)
                        ->setAllowedTypes('destinationregion', ['string'])
                        ->setAllowedValues('destinationregion', $this->available_regions);

        return $optionsResolver;
    }

    /**
     * Set pointofsalecountry Value
     *
     * 2-letter ISO 3166 country code.
     *
     * Retrieves data specific to a given point of sale country.
     *
     * Default value : US
     *
     * @param string $value
     * @return $this
     */
    public function setPointofsalecountry($value)
    {
        return $this->setQueryParameter('pointofsalecountry', $value);
    }

    /**
     * @return string
     */
    public function getPointofsalecountry()
    {
        return $this->getQueryParameter('pointofsalecountry');
    }

    /**
     * Set origincountry Value
     *
     * 2-letter ISO 3166 country code.
     *
     * Retrieves supported city pairs with origins located in this specified country.
     * Only one value is accepted.
     *
     * Default value : US
     *
     * @param string $value
     * @return $this
     */
    public function setOrigincountry($value)
    {
        return $this->setQueryParameter('origincountry', $value);
    }

    /**
     * 2-letter ISO 3166 country code.
     *
     * Retrieves supported city pairs with origins located in this specified country.
     * Only one value is accepted.
     *
     * Default value : US
     *
     * @return string
     */
    public function getOrigincountry()
    {
        return $this->getQueryParameter('origincountry');
    }

    /**
     * Set destinationcountry Value
     *
     * 2-letter ISO 3166 country code.
     *
     * Retrieves supported city pairs with destinations located in this specified country.
     * Only one value is accepted.
     *
     * Default: All destination countries.
     *
     * @param string $value
     * @return $this
     */
    public function setDestinationcountry($value)
    {
        return $this->setQueryParameter('destinationcountry', $value);
    }

    /**
     * 2-letter ISO 3166 country code.
     *
     * Retrieves supported city pairs with destinations located in this specified country.
     * Only one value is accepted.
     *
     * Default: All destination countries.
     *
     * @return string
     */
    public function getDestinationcountry()
    {
        return $this->getQueryParameter('destinationcountry');
    }

    /**
     * Set originregion Value
     *
     * 2-letter ISO 3166 country code.
     *
     * Retrieves supported city pairs with origins located in this specified country.
     * Only one value is accepted.
     *
     * Default value : US
     *
     * @param string $value
     * @return $this
     */
    public function setOriginregion($value)
    {
        return $this->setQueryParameter('originregion', $value);
    }

    /**
     * 2-letter ISO 3166 country code.
     *
     * Retrieves supported city pairs with origins located in this specified country.
     * Only one value is accepted.
     *
     * Default value : US
     *
     * @return string
     */
    public function getOriginregion()
    {
        return $this->getQueryParameter('originregion');
    }

    /**
     * Set destinationregion Value
     *
     * Retrieves city pairs with origins based in this region. Only one value is accepted.
     *
     * Available values : Africa, Asia Pacific, Europe, Latin America, Middle East, North America
     *
     * @param string $value
     * @return $this
     */
    public function setDestinationregion($value)
    {
        return $this->setQueryParameter('destinationregion', $value);
    }

    /**
     * Retrieves city pairs with origins based in this region. Only one value is accepted.
     *
     * Available values : Africa, Asia Pacific, Europe, Latin America, Middle East, North America
     *
     * @return string
     */
    public function getDestinationregion()
    {
        return $this->getQueryParameter('destinationregion');
    }
}
