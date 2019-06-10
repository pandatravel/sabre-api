<?php

namespace Ammonkc\SabreApi\Api;

use Ammonkc\SabreApi\AbstractRequest;
use Ammonkc\SabreApi\Exception\ApiNotAuthorizedException;
use Ammonkc\SabreApi\Exception\ApiTimedOutException;
use Ammonkc\SabreApi\Model\CountriesLookup\CountriesLookupResponse;
use Ammonkc\SabreApi\Model\CountriesLookup\Exception\CountriesLookupBadRequestException;
use Ammonkc\SabreApi\Model\CountriesLookup\Exception\CountriesLookupNotFoundException;
use Ammonkc\SabreApi\Model\CountriesLookup\Exception\CountriesLookupRequestEntityTooLargeException;
use Ammonkc\SabreApi\Model\CountriesLookup\Normalizer\NormalizerFactory;
use GuzzleHttp\Exception\ClientException;
use GuzzleHttp\Exception\ConnectException;
use GuzzleHttp\Exception\RequestException;
use Symfony\Component\OptionsResolver\OptionsResolver;

/**
 * The Countries Lookup API returns a list of origin and
 * destination countries.
 *
 * @link   https://ptagent.com/api/v1/packages/
 *
 * @author Ammon Casey <ammon@caseyohana.com>
 */
class CountriesLookup extends AbstractRequest
{
    /**
     * Endpoint
     *
     * @var string
     */
    protected $uri = '/lists/supported/countries';

    /**
     * Endpoint Base uri
     *
     * @var string
     */
    protected $api_version = '/v1';

    /**
     * NormalizerFactory
     *
     * @var Ammonkc\SabreApi\Model\CountriesLookup\Normalizer\NormalizerFactory $normalizer
     */
    protected $normalizer = NormalizerFactory::class;

    /**
     * Response Type
     *
     * @var Ammonkc\SabreApi\Model\CountriesLookup\CountriesLookupResponse $responseType
     */
    protected $responseType = CountriesLookupResponse::class;


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
     * @throws \Ammonkc\SabreApi\Exception\CountriesLookupBadRequestException
     * @throws \Ammonkc\SabreApi\Exception\CountriesLookupNotFoundException
     * @throws \Ammonkc\SabreApi\Exception\CountriesLookupRequestEntityTooLargeException
     *
     * @returns \Ammonkc\SabreApi\Model\CountriesLookup\CountriesLookupResponse
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
                throw new CountriesLookupBadRequestException($e);
            }
            if ($e->getCode() === 404) {
                throw new CountriesLookupNotFoundException($e);
            }
            if ($e->getCode() === 413) {
                throw new CountriesLookupRequestEntityTooLargeException($e);
            }
            throw $e;
        }

        return $this->parseResponse($response);
    }

    /**
     * Deserialze Respose Body
     *
     * @return \Ammonkc\SabreApi\Model\CountriesLookup\CountriesLookupResponse|null
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
        $optionsResolver->setDefined(['pointofsalecountry'])
                        ->setRequired([])
                        ->setDefaults(['pointofsalecountry' => 'US'])
                        ->setAllowedTypes('pointofsalecountry', ['string']);

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
}
