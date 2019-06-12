<?php

namespace Ammonkc\SabreApi\Api;

use Ammonkc\SabreApi\AbstractRequest;
use Ammonkc\SabreApi\Exception\AirportsAtCityLookupNotFoundException;
use Ammonkc\SabreApi\Exception\ApiNotAuthorizedException;
use Ammonkc\SabreApi\Exception\ApiTimedOutException;
use Ammonkc\SabreApi\Model\AirportsAtCitiesLookup\AirportsAtCitiesLookupResponse;
use Ammonkc\SabreApi\Model\AirportsAtCitiesLookup\Normalizer\NormalizerFactory;
use GuzzleHttp\Exception\ClientException;
use GuzzleHttp\Exception\ConnectException;
use GuzzleHttp\Exception\RequestException;
use Symfony\Component\OptionsResolver\OptionsResolver;

/**
 * The Airports at Cities Lookup API returns the major airport,
 * rail station and other codes that are associated with a
 * single a multi-airport city (MAC) code.
 *
 * @link   https://beta.developer.sabre.com/sites/default/files/wNFnaOgc.yaml OpenApi Spec
 * @link   https://ptpkg.com/api/v1/packages/
 *
 * @author Ammon Casey <ammon@caseyohana.com>
 */
class AirportsAtCitiesLookup extends AbstractRequest
{
    /**
     * Endpoint
     *
     * @var string
     */
    protected $uri = '/lists/supported/cities/{city}/airports';

    /**
     * Endpoint Base uri
     *
     * @var string
     */
    protected $api_version = '/v1';

    /**
     * NormalizerFactory
     *
     * @var Ammonkc\SabreApi\Model\AirportsAtCitiesLookup\Normalizer\NormalizerFactory $normalizer
     */
    protected $normalizer = NormalizerFactory::class;

    /**
     * Response Type
     *
     * @var Ammonkc\SabreApi\Model\AirportsAtCitiesLookup\AirportsAtCitiesLookupResponse $responseType
     */
    protected $responseType = AirportsAtCitiesLookupResponse::class;

    /**
     * Return the complete request object|array
     *
     * @returns array
     */
    protected function getData()
    {
        //
    }

    /**
     * Accept data and sends it as a request.
     *
     * @param $data
     *
     * @throws \Ammonkc\SabreApi\Exception\ApiTimedOutException
     * @throws \Ammonkc\SabreApi\Exception\ApiNotAuthorizedException
     * @throws \Ammonkc\SabreApi\Exception\AirportsAtCityLookupNotFoundException
     *
     * @returns \Ammonkc\SabreApi\Model\AirportsAtCitiesLookup\AirportsAtCitiesLookupResponse|null
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
            if ($e->getCode() === 404) {
                throw new AirportsAtCityLookupNotFoundException($e);
            }
            throw $e;
        }

        return $this->parseResponse($response);
    }

    /**
     * Deserialze Respose Body
     *
     * @throws \Ammonkc\SabreApi\Exception\AirportsAtCityLookupNotFoundException
     *
     * @return \Ammonkc\SabreApi\Model\AirportsAtCitiesLookup\AirportsAtCitiesLookupResponse|null
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
    protected function getPathOptionsResolver(): OptionsResolver
    {
        $optionsResolver = parent::getPathOptionsResolver();
        $optionsResolver->setDefined(['{city}'])
                        ->setRequired([])
                        ->setDefaults([])
                        ->setAllowedTypes('{city}', ['string']);

        return $optionsResolver;
    }

    /**
     * Value must be the MAC code.
     *
     * Retrieves the airport, rail station and other codes associated with the MAC code.
     *
     * @param string $value
     * @return $this
     */
    public function setCity($value)
    {
        return $this->setPathParameter('{city}', strtoupper($value));
    }

    /**
     * @return string
     */
    public function getCity()
    {
        return $this->getPathParameter('{city}');
    }
}
