<?php

namespace Ammonkc\SabreApi\Api;

use Ammonkc\SabreApi\AbstractRequest;

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
    protected $api_version = '/v2.1.0';

    /**
     * NormalizerFactory
     *
     * @var Ammonkc\SabreApi\Model\CreatePassengerNameRecord\Normalizer\NormalizerFactory $normalizer
     */
    protected $normalizer = NormalizerFactory::class;

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
        $responseData = $this->post($this->getUri(), $data);

        return $responseData;
    }

    /**
     * @return array
     */
    public function getDefaultQueryParameters()
    {
        return ['mode' => 'create'];
    }

    /**
     * Set mode Value
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
