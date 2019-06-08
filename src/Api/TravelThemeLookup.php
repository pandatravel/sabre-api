<?php

namespace Ammonkc\SabreApi\Api;

use Ammonkc\SabreApi\AbstractRequest;
use Ammonkc\SabreApi\Exception\ApiNotAuthorizedException;
use Ammonkc\SabreApi\Exception\ApiTimedOutException;
use Ammonkc\SabreApi\Exception\TravelThemeLookupNotFoundException;
use Ammonkc\SabreApi\Model\TravelThemeLookup\Normalizer\NormalizerFactory;
use Ammonkc\SabreApi\Model\TravelThemeLookup\TravelThemeLookupResponse;
use GuzzleHttp\Exception\ClientException;
use GuzzleHttp\Exception\ConnectException;
use GuzzleHttp\Exception\RequestException;

/**
 * The Travel Theme Lookup API returns a list of supported Sabre themes.
 *
 * A theme is defined as a genre or a category of travel based on
 * geography, point of interest, or recreational activity. For
 * Example: Beaches, National Parks and Skiing.
 *
 * @link   https://ptpkg.com/api/v1/packages/
 *
 * @author Ammon Casey <ammon@caseyohana.com>
 */
class TravelThemeLookup extends AbstractRequest
{
    /**
     * Endpoint
     *
     * @var string
     */
    protected $uri = '/lists/supported/shop/themes';

    /**
     * Endpoint Base uri
     *
     * @var string
     */
    protected $api_version = '/v1';

    /**
     * NormalizerFactory
     *
     * @var Ammonkc\SabreApi\Model\DestinationFinder\Normalizer\NormalizerFactory $normalizer
     */
    protected $normalizer = NormalizerFactory::class;

    /**
     * Response Type
     *
     * @var Ammonkc\SabreApi\Contracts\ResponseInterface $responseType
     */
    protected $responseType = TravelThemeLookupResponse::class;

    /**
     * Return the complete request object|array
     *
     * @returns array
     */
    protected function getData()
    {
        return $this->getParameters();
    }

    /**
     * Accept a data and sends it as a request.
     *
     * @param $data
     *
     * @throws \Ammonkc\SabreApi\Exception\ApiTimedOutException
     * @throws \Ammonkc\SabreApi\Exception\ApiNotAuthorizedException
     * @throws \Ammonkc\SabreApi\Exception\TravelThemeLookupNotFoundException
     *
     * @return \Ammonkc\SabreApi\Model\TravelThemeLookup\TravelThemeLookupResponse|null
     */
    public function sendData($data)
    {
        try {
            $response = $this->get($this->getUri(), $data);
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
            if ($e->getCode() === 404) {
                throw new TravelThemeLookupNotFoundException($e);
            }
            throw $e;
        }

        return $this->parseResponse($response);
    }

    /**
     * Deserialze Respose Body
     *
     * @return \Ammonkc\SabreApi\Model\TravelThemeLookup\TravelThemeLookupResponse|null
     */
    protected function deserializeResponseBody(string $body, int $status)
    {
        if (200 === $status) {
            return $this->deserialize($body, $this->responseType, 'json');
        }
    }
}
