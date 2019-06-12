<?php

namespace Ammonkc\SabreApi\Api;

use Ammonkc\SabreApi\AbstractRequest;
use Ammonkc\SabreApi\Exception\AdvancedCalendarSearchByRequestIdBadRequestException;
use Ammonkc\SabreApi\Exception\AdvancedCalendarSearchByRequestIdNotFoundException;
use Ammonkc\SabreApi\Exception\ApiNotAuthorizedException;
use Ammonkc\SabreApi\Exception\ApiTimedOutException;
use Ammonkc\SabreApi\Model\AdvancedCalendarSearch\AdvancedCalendarSearchByRequestIDResponse;
use Ammonkc\SabreApi\Model\AdvancedCalendarSearch\Normalizer\NormalizerFactory;
use GuzzleHttp\Exception\ClientException;
use GuzzleHttp\Exception\ConnectException;
use GuzzleHttp\Exception\RequestException;
use Symfony\Component\OptionsResolver\OptionsResolver;

/**
 * The Airline Lookup API returns the airline name associated with
 * a specified IATA airline code. If no code is specified, the
 * API returns all codes and their corresponding names.
 *
 * @link   https://beta.developer.sabre.com/sites/default/files/lUDUUr0S.yaml OpenApi Spec
 * @link   https://ptagent.com/api/v1/packages/
 *
 * @author Ammon Casey <ammon@caseyohana.com>
 */
class AdvancedCalendarSearchByRequestId extends AbstractRequest
{
    /**
     * Endpoint
     *
     * @var string
     */
    protected $uri = '/shop/calendar/flights/{requestid}';

    /**
     * Endpoint Base uri
     *
     * @var string
     */
    protected $api_version = '/v4.3.0';

    /**
     * NormalizerFactory
     *
     * @var Ammonkc\SabreApi\Model\AdvancedCalendarSearch\Normalizer\NormalizerFactory $normalizer
     */
    protected $normalizer = NormalizerFactory::class;

    /**
     * Response Type
     *
     * @var Ammonkc\SabreApi\Model\AdvancedCalendarSearch\AdvancedCalendarSearchByRequestIDResponse $responseType
     */
    protected $responseType = AdvancedCalendarSearchByRequestIDResponse::class;

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
     * @throws \Ammonkc\SabreApi\Exception\AdvancedCalendarSearchByRequestIdBadRequestException
     * @throws \Ammonkc\SabreApi\Exception\AdvancedCalendarSearchByRequestIdNotFoundException
     *
     * @returns \Ammonkc\SabreApi\Model\AdvancedCalendarSearch\AdvancedCalendarSearchByRequestIDResponse|null
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
                throw new AdvancedCalendarSearchByRequestIdBadRequestException($e);
            }
            if ($e->getCode() === 404) {
                throw new AdvancedCalendarSearchByRequestIdNotFoundException($e);
            }
            throw $e;
        }

        return $this->parseResponse($response);
    }

    /**
     * Deserialze Respose Body
     *
     * @return \Ammonkc\SabreApi\Model\AdvancedCalendarSearch\AdvancedCalendarSearchByRequestIDResponse|null
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
        $optionsResolver->setDefined(['{requestid}'])
                        ->setRequired(['{requestid}'])
                        ->setDefaults([])
                        ->setAllowedTypes('{requestid}', ['string']);

        return $optionsResolver;
    }

    /**
     * @return \Symfony\Component\OptionsResolver\OptionsResolver
     */
    protected function getQueryOptionsResolver(): OptionsResolver
    {
        $optionsResolver = parent::getQueryOptionsResolver();
        $optionsResolver->setDefined(['view', 'limit', 'offset'])
                        ->setRequired([])
                        ->setDefaults(['limit' => 50, 'offset' => 1])
                        ->setAllowedTypes('view', ['string'])
                        ->setAllowedTypes('limit', ['int'])
                        ->setAllowedTypes('offset', ['int']);

        return $optionsResolver;
    }

    /**
     * Set {requestid} Value
     *
     * @param string $value
     * @return $this
     */
    public function setRequestid($value)
    {
        return $this->setPathParameter('{requestid}', $value);
    }

    /**
     * @return string
     */
    public function getRequestid()
    {
        return $this->getPathParameter('{requestid}');
    }

    /**
     * Set view Value
     *
     * @param string $value
     * @return $this
     */
    public function setView($value)
    {
        return $this->setQueryParameter('view', $value);
    }

    /**
     * @return string
     */
    public function getView()
    {
        return $this->getQueryParameter('view');
    }

    /**
     * Set limit Value
     *
     * @param int $value
     * @return $this
     */
    public function setLimit($value)
    {
        return $this->setQueryParameter('limit', $value);
    }

    /**
     * @return int
     */
    public function getLimit()
    {
        return $this->getQueryParameter('limit');
    }

    /**
     * Set offset Value
     *
     * @param int $value
     * @return $this
     */
    public function setOffset($value)
    {
        return $this->setQueryParameter('offset', $value);
    }

    /**
     * @return int
     */
    public function getOffset()
    {
        return $this->getQueryParameter('offset');
    }
}
