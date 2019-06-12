<?php

namespace Ammonkc\SabreApi\Api;

use Ammonkc\SabreApi\AbstractRequest;
use Ammonkc\SabreApi\Exception\ApiNotAuthorizedException;
use Ammonkc\SabreApi\Exception\ApiTimedOutException;
use Ammonkc\SabreApi\Exception\EnhancedAirTicketBadRequestException;
use Ammonkc\SabreApi\Exception\EnhancedAirTicketNotFoundException;
use Ammonkc\SabreApi\Model\EnhancedAirTicket\EnhancedAirTicketRequest;
use Ammonkc\SabreApi\Model\EnhancedAirTicket\EnhancedAirTicketResponse;
use Ammonkc\SabreApi\Model\EnhancedAirTicket\Normalizer\NormalizerFactory;
use GuzzleHttp\Exception\ClientException;
use GuzzleHttp\Exception\ConnectException;
use GuzzleHttp\Exception\RequestException;
use Symfony\Component\OptionsResolver\OptionsResolver;

/**
 * The Enhanced Air Ticket API is used to issue air tickets
 * (paper or electronic), and electronic miscellaneous
 * documents (EMDs) in one request.
 *
 * @link   https://beta.developer.sabre.com/sites/default/files/oQFCUHDB.yaml OpenApi spec
 * @link   https://ptagent.com/api/v1/packages/
 *
 * @author Ammon Casey <ammon@caseyohana.com>
 */
class EnhancedAirTicket extends AbstractRequest
{
    /**
     * Endpoint
     *
     * @var string
     */
    protected $uri = '/air/ticket';

    /**
     * Endpoint Base uri
     *
     * @var string
     */
    protected $api_version = '/v1.2.0';

    /**
     * NormalizerFactory
     *
     * @var Ammonkc\SabreApi\Model\EnhancedAirTicket\Normalizer\NormalizerFactory $normalizer
     */
    protected $normalizer = NormalizerFactory::class;

    /**
     * Response Type
     *
     * @var Ammonkc\SabreApi\Model\EnhancedAirTicket\EnhancedAirTicketResponse $responseType
     */
    protected $responseType = EnhancedAirTicketResponse::class;

    /**
     * Return the complete request object
     *
     * @returns \Ammonkc\SabreApi\Model\EnhancedAirTicket\EnhancedAirTicketRequest
     */
    protected function getData()
    {
        $enhancedAirTicketRequest = new EnhancedAirTicketRequest();

        // build request object

        return $enhancedAirTicketRequest;
    }

    /**
     * Accept a EnhancedAirTicketRequest object and sends it as a request.
     *
     * @param \Ammonkc\SabreApi\Model\EnhancedAirTicket\EnhancedAirTicketRequest $data
     *
     * @throws \Ammonkc\SabreApi\Exception\ApiTimedOutException
     * @throws \Ammonkc\SabreApi\Exception\ApiNotAuthorizedException
     * @throws \Ammonkc\SabreApi\Exception\EnhancedAirTicketBadRequestException
     * @throws \Ammonkc\SabreApi\Exception\EnhancedAirTicketNotFoundException
     *
     * @returns \Ammonkc\SabreApi\Model\EnhancedAirTicket\EnhancedAirTicketResponse|null
     */
    public function sendData($data)
    {
        try {
            $response = $this->post($this->getUri(), $data, $this->getHeaders());
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
                throw new EnhancedAirTicketBadRequestException($e);
            }
            if ($e->getCode() === 404) {
                throw new EnhancedAirTicketNotFoundException($e);
            }
            throw $e;
        }

        return $this->parseResponse($response);
    }

    /**
     * @return \Symfony\Component\OptionsResolver\OptionsResolver
     */
    protected function getHeadersOptionsResolver(): OptionsResolver
    {
        $optionsResolver = parent::getHeadersOptionsResolver();
        $optionsResolver->setDefined(['Accept-Encoding'])
                        ->setRequired([])
                        ->setDefaults([])
                        ->setAllowedTypes('Accept-Encoding', ['string'])
                        ->setAllowedValues('Accept-Encoding', ['gzip']);

        return $optionsResolver;
    }

    /**
     * To reduce network latency for large responses, request a compressed response.
     *
     * Available values : gzip
     *
     * @return array
     */
    public function getDefaultHeaderParameters()
    {
        return ['Accept-Encoding' => 'gzip'];
    }
}
