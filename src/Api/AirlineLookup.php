<?php

namespace Ammonkc\SabreApi\Api;

use Ammonkc\SabreApi\AbstractRequest;
use Ammonkc\SabreApi\Exception\AirlinesLookupBadRequestException;
use Ammonkc\SabreApi\Exception\ApiNotAuthorizedException;
use Ammonkc\SabreApi\Exception\ApiTimedOutException;
use Ammonkc\SabreApi\Model\AirlineLookup\AirlinesLookupResponse;
use Ammonkc\SabreApi\Model\AirlineLookup\Normalizer\NormalizerFactory;
use GuzzleHttp\Exception\ClientException;
use GuzzleHttp\Exception\ConnectException;
use GuzzleHttp\Exception\RequestException;
use Symfony\Component\OptionsResolver\OptionsResolver;

/**
 * The Airline Lookup API returns the airline name associated with
 * a specified IATA airline code. If no code is specified, the
 * API returns all codes and their corresponding names.
 *
 * @link   https://beta.developer.sabre.com/sites/default/files/uP0hLeW3.yaml OpenApi Spec
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
        //
    }

    /**
     * Accept a data and sends it as a request.
     *
     * @param array $data
     *
     * @throws \Ammonkc\SabreApi\Exception\ApiTimedOutException
     * @throws \Ammonkc\SabreApi\Exception\ApiNotAuthorizedException
     * @throws \Ammonkc\SabreApi\Exception\AirlinesLookupBadRequestException
     *
     * @returns \Ammonkc\SabreApi\Model\AirlineLookup\AirlinesLookupResponse
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
    protected function getQueryOptionsResolver(): OptionsResolver
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
