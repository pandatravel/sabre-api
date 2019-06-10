<?php

namespace Ammonkc\SabreApi\Api;

use Ammonkc\SabreApi\AbstractRequest;
use Ammonkc\SabreApi\Exception\ApiNotAuthorizedException;
use Ammonkc\SabreApi\Exception\ApiTimedOutException;
use Ammonkc\SabreApi\Model\CreatePassengerNameRecord\CreatePassengerNameRecordRequest;
use Ammonkc\SabreApi\Model\CreatePassengerNameRecord\Exception\CreatePassengerNameRecordBadRequestException;
use Ammonkc\SabreApi\Model\CreatePassengerNameRecord\Normalizer\NormalizerFactory;
use GuzzleHttp\Exception\ClientException;
use GuzzleHttp\Exception\ConnectException;
use GuzzleHttp\Exception\RequestException;
use Symfony\Component\OptionsResolver\OptionsResolver;

/**
 * The Create Passenger Name Record API is an orchestrated API that
 * bundles several functions and operations into a single API
 * call. This API specifically provides the capability to
 * create a Passenger Name Record (PNR) including air
 * segments in a single call.
 *
 * @link   https://ptagent.com/api/v1/packages/
 *
 * @author Ammon Casey <ammon@caseyohana.com>
 */
class CreatePassengerNameRecord extends AbstractRequest
{
    /**
     * Endpoint
     *
     * @var string
     */
    protected $uri = '/passenger/records';

    /**
     * Endpoint Base uri
     *
     * @var string
     */
    protected $api_version = '/v2.2.0';

    /**
     * NormalizerFactory
     *
     * @var Ammonkc\SabreApi\Model\CreatePassengerNameRecord\Normalizer\NormalizerFactory $normalizer
     */
    protected $normalizer = NormalizerFactory::class;

    /**
     * Return the complete request object
     *
     * @returns \Ammonkc\SabreApi\Model\CreatePassengerNameRecord\CreatePassengerNameRecordRequest
     */
    protected function getData()
    {
        $createPassengerNameRecord = new CreatePassengerNameRecordRequest();

        // build request object

        return $createPassengerNameRecord;
    }

    /**
     * Accept a advancedCalendarSearch object and sends it as a request.
     *
     * @param \Ammonkc\SabreApi\Model\CreatePassengerNameRecord\CreatePassengerNameRecordRequest $data
     *
     * @throws \Ammonkc\SabreApi\Exception\ApiTimedOutException
     * @throws \Ammonkc\SabreApi\Exception\ApiNotAuthorizedException
     * @throws \Ammonkc\SabreApi\Exception\CreatePassengerNameRecordBadRequestException
     *
     * @returns \Ammonkc\SabreApi\Model\CreatePassengerNameRecord\CreatePassengerNameRecordResponse|null
     */
    public function sendData($data)
    {
        try {
            $response = $this->post($this->getUri(), $data);
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
                throw new CreatePassengerNameRecordBadRequestException($e);
            }
            throw $e;
        }

        return $this->parseResponse($response);
    }

    /**
     * @return \Symfony\Component\OptionsResolver\OptionsResolver
     */
    protected function getQueryOptionsResolver(): OptionsResolver
    {
        $optionsResolver = parent::getQueryOptionsResolver();
        $optionsResolver->setDefined(['mode'])
                        ->setRequired(['mode'])
                        ->setDefaults(['mode' => 'create'])
                        ->setAllowedTypes('mode', ['string']);

        return $optionsResolver;
    }

    /**
     * @return array
     */
    public function getDefaultQueryParameters()
    {
        return ['mode' => 'create'];
    }

    /**
     * Set an optional search string for looking up inventory
     *
     * @param string $value
     * @return $this
     */
    public function setMode($value)
    {
        return $this->setQueryParameter('mode', $value);
    }

    /**
     * @return string
     */
    public function getMode()
    {
        return $this->getQueryParameter('mode');
    }
}
