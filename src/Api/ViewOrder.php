<?php

namespace Ammonkc\SabreApi\Api;

use Ammonkc\SabreApi\AbstractRequest;
use Ammonkc\SabreApi\Exception\ApiNotAuthorizedException;
use Ammonkc\SabreApi\Exception\ApiTimedOutException;
use Ammonkc\SabreApi\Model\OrderManagement\Normalizer\NormalizerFactory;
use Ammonkc\SabreApi\Model\OrderManagement\OrderViewRequest;
use Ammonkc\SabreApi\Model\OrderManagement\OrderViewResponse;
use GuzzleHttp\Exception\ClientException;
use GuzzleHttp\Exception\ConnectException;

/**
 * The Order Management is used to create, change, cancel and view
 * the content of a specified airline order.
 *
 * Views a single order.
 *
 * @link   https://beta.developer.sabre.com/sites/default/files/a7EWTHOg.yaml OpenApi spec
 * @link   https://ptagent.com/api/v1/packages/
 *
 * @author Ammon Casey <ammon@caseyohana.com>
 */
class ViewOrder extends AbstractRequest
{
    /**
     * Endpoint
     *
     * @var string
     */
    protected $uri = '/orders/view';

    /**
     * Endpoint Base uri
     *
     * @var string
     */
    protected $api_version = '/v1';

    /**
     * NormalizerFactory
     *
     * @var Ammonkc\SabreApi\Model\OrderManagement\Normalizer\NormalizerFactory $normalizer
     */
    protected $normalizer = NormalizerFactory::class;

    /**
     * Response Type
     *
     * @var Ammonkc\SabreApi\Model\OrderManagement\OrderViewResponse $responseType
     */
    protected $responseType = OrderViewResponse::class;

    /**
     * Return the complete request object
     *
     * @returns \Ammonkc\SabreApi\Model\OrderManagement\OrderViewRequest
     */
    protected function getData()
    {
        $orderViewRequest = new OrderViewRequest();

        // build request object

        return $orderViewRequest;
    }

    /**
     * Accept a OrderViewRequest object and sends it as a request.
     *
     * @param \Ammonkc\SabreApi\Model\OrderManagement\OrderViewRequest $data
     *
     * @throws \Ammonkc\SabreApi\Exception\ApiTimedOutException
     * @throws \Ammonkc\SabreApi\Exception\ApiNotAuthorizedException
     *
     * @returns \Ammonkc\SabreApi\Model\OrderManagement\OrderViewResponse|null
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
        }

        return $this->parseResponse($response);
    }
}
