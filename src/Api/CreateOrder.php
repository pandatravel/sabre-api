<?php

namespace Ammonkc\SabreApi\Api;

use Ammonkc\SabreApi\AbstractRequest;
use Ammonkc\SabreApi\Exception\ApiNotAuthorizedException;
use Ammonkc\SabreApi\Exception\ApiTimedOutException;
use Ammonkc\SabreApi\Exception\CreateOrderBadRequestException;
use Ammonkc\SabreApi\Model\OrderManagement\Normalizer\NormalizerFactory;
use Ammonkc\SabreApi\Model\OrderManagement\OrderCreateRequest;
use Ammonkc\SabreApi\Model\OrderManagement\OrderCreateResponse;
use GuzzleHttp\Exception\ClientException;
use GuzzleHttp\Exception\ConnectException;
use GuzzleHttp\Exception\RequestException;

/**
 * The Order Management is used to create, change, cancel and view
 * the content of a specified airline order.
 *
 * Creates an order.
 *
 * @link   https://beta.developer.sabre.com/sites/default/files/a7EWTHOg.yaml OpenApi spec
 * @link   https://ptagent.com/api/v1/packages/
 *
 * @author Ammon Casey <ammon@caseyohana.com>
 */
class CreateOrder extends AbstractRequest
{
    /**
     * Endpoint
     *
     * @var string
     */
    protected $uri = '/orders/create';

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
     * @var Ammonkc\SabreApi\Model\OrderManagement\OrderCreateResponse $responseType
     */
    protected $responseType = OrderCreateResponse::class;

    /**
     * Return the complete request object
     *
     * @returns \Ammonkc\SabreApi\Model\OrderManagement\OrderCreateRequest
     */
    protected function getData()
    {
        $orderCreateRequest = new OrderCreateRequest();

        // build request object

        return $orderCreateRequest;
    }

    /**
     * Accept a OrderCreateRequest object and sends it as a request.
     *
     * @param \Ammonkc\SabreApi\Model\OrderManagement\OrderCreateRequest $data
     *
     * @throws \Ammonkc\SabreApi\Exception\ApiTimedOutException
     * @throws \Ammonkc\SabreApi\Exception\ApiNotAuthorizedException
     * @throws \Ammonkc\SabreApi\Exception\CreateOrderBadRequestException
     *
     * @returns \Ammonkc\SabreApi\Model\OrderManagement\OrderCreateResponse|null
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
                throw new CreateOrderBadRequestException($e);
            }
            throw $e;
        }

        return $this->parseResponse($response);
    }
}
