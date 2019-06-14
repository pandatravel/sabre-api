<?php

namespace Ammonkc\SabreApi\Api;

use Ammonkc\SabreApi\AbstractRequest;
use Ammonkc\SabreApi\Exception\ApiNotAuthorizedException;
use Ammonkc\SabreApi\Exception\ApiTimedOutException;
use Ammonkc\SabreApi\Exception\OrderCancelBadRequestException;
use Ammonkc\SabreApi\Model\OrderManagement\Normalizer\NormalizerFactory;
use Ammonkc\SabreApi\Model\OrderManagement\OrderCancelRequest;
use Ammonkc\SabreApi\Model\OrderManagement\OrderCancelResponse;
use GuzzleHttp\Exception\ClientException;
use GuzzleHttp\Exception\ConnectException;
use GuzzleHttp\Exception\RequestException;

/**
 * The Order Management is used to create, change, cancel and view
 * the content of a specified airline order.
 *
 * Cancels a specified order, and returns confirmation of the cancellation.
 *
 * @link   https://beta.developer.sabre.com/sites/default/files/a7EWTHOg.yaml OpenApi spec
 * @link   https://ptagent.com/api/v1/packages/
 *
 * @author Ammon Casey <ammon@caseyohana.com>
 */
class OrderCancel extends AbstractRequest
{
    /**
     * Endpoint
     *
     * @var string
     */
    protected $uri = '/orders/cancel';

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
     * @var Ammonkc\SabreApi\Model\OrderManagement\OrderCancelResponse $responseType
     */
    protected $responseType = OrderCancelResponse::class;

    /**
     * Return the complete request object
     *
     * @returns \Ammonkc\SabreApi\Model\OrderManagement\OrderCancelRequest
     */
    protected function getData()
    {
        $orderCancelRequest = new OrderCancelRequest();

        // build request object

        return $orderCancelRequest;
    }

    /**
     * Accept a OrderCancelRequest object and sends it as a request.
     *
     * @param \Ammonkc\SabreApi\Model\OrderManagement\OrderCancelRequest $data
     *
     * @throws \Ammonkc\SabreApi\Exception\ApiTimedOutException
     * @throws \Ammonkc\SabreApi\Exception\ApiNotAuthorizedException
     * @throws \Ammonkc\SabreApi\Exception\OrderCancelBadRequestException
     *
     * @returns \Ammonkc\SabreApi\Model\OrderManagement\OrderCancelResponse|null
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
                throw new OrderCancelBadRequestException($e);
            }
            throw $e;
        }

        return $this->parseResponse($response);
    }
}
