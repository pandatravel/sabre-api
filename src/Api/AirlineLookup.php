<?php

namespace Ammonkc\SabreApi\Api;

use Ammonkc\SabreApi\AbstractRequest;
use Ammonkc\SabreApi\Exception\AirlinesLookupBadRequestException;
use Ammonkc\SabreApi\Model\AirlineLookup\AirlinesLookupResponse;
use Ammonkc\SabreApi\Model\AirlineLookup\Normalizer\NormalizerFactory;
use GuzzleHttp\Exception\RequestException;

/**
 * The Airline Lookup API returns the airline name associated with
 * a specified IATA airline code. If no code is specified, the
 * API returns all codes and their corresponding names.
 *
 * @link   https://ptagent.com/api/v1/packages/
 *
 * @author Ammon Casey <ammon@caseyohana.com>
 */
class AirlineLookup extends AbstractRequest
{
    /**
     * Endpoint
     *
     * @var string
     */
    protected $uri = '/lists/utilities/airlines';

    /**
     * Endpoint Base uri
     *
     * @var string
     */
    protected $api_version = '/v1';

    /**
     * NormalizerFactory
     *
     * @var Ammonkc\SabreApi\Model\AirlineLookup\Normalizer\NormalizerFactory $normalizer
     */
    protected $normalizer = NormalizerFactory::class;

    /**
     * Response Type
     *
     * @var Ammonkc\SabreApi\Contracts\ResponseInterface $responseType
     */
    protected $responseType = AirlinesLookupResponse::class;


    /**
     * Return the complete request object which will later be wrapped in
     * a \Academe\AuthorizeNet\Request\CreateTransaction object.
     *
     * @returns \Academe\AuthorizeNet\TransactionRequestInterface
     */
    protected function getData()
    {
        return $this->getParameters();
    }

    /**
     * Accept a transaction and sends it as a request.
     *
     * @param $data TransactionRequestInterface
     * @returns TransactionResponse
     */
    public function sendData($data)
    {
        try {
            $response = $this->get($this->getUri(), $data);
        } catch (RequestException $e) {
            if ($e->getCode() === 400) {
                throw new AirlinesLookupBadRequestException($e);
            }
            throw $e;
        }

        return $this->parseResponse($response);
    }

    /**
     * Deserialze Respose Body
     *
     * @throws \Ammonkc\SabreApi\Model\AirlineLookup\Exception\AirlinesLookupBadRequestException
     *
     * @return \Ammonkc\SabreApi\Model\AirlineLookup\AirlinesLookupResponse|null
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
    protected function getQueryOptionsResolver(): \Symfony\Component\OptionsResolver\OptionsResolver
    {
        $optionsResolver = parent::getQueryOptionsResolver();
        $optionsResolver->setDefined(['airlinecode'])
                        ->setRequired([])
                        ->setDefaults([])
                        ->setAllowedTypes('airlinecode', ['string']);

        return $optionsResolver;
    }

    /**
     * Set airlinecode Value
     *
     * @param string $value
     * @return $this
     */
    public function setAirlinecode($value)
    {
        if (is_array($value)) {
            $value = implode(',', $value);
        }
        return $this->setQueryParameter('airlinecode', $value);
    }

    /**
     * @return string
     */
    public function getAirlinecode()
    {
        return $this->getQueryParameter('airlinecode');
    }
}
