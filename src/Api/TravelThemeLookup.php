<?php

namespace Ammonkc\SabreApi\Api;

use Ammonkc\SabreApi\AbstractRequest;
use Ammonkc\SabreApi\Client;
use Ammonkc\SabreApi\Exception\TravelThemeLookupNotFoundException;
use Ammonkc\SabreApi\Model\TravelThemeLookup\Normalizer\NormalizerFactory;
use Ammonkc\SabreApi\Model\TravelThemeLookup\TravelThemeLookupResponse;

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
     * Accept a transaction and sends it as a request.
     *
     * @param $data
     *
     * @return \Ammonkc\SabreApi\Model\TravelThemeLookup\TravelThemeLookupResponse|null
     */
    public function sendData($data)
    {
        $response = $this->get($this->getUri(), $data);

        return $this->parseResponse($response, Client::FETCH_JSON);
    }

    /**
     * Deserialze Respose Body
     *
     * @throws \Ammonkc\SabreApi\Exception\TravelThemeLookupNotFoundException
     *
     * @return \Ammonkc\SabreApi\Model\TravelThemeLookup\TravelThemeLookupResponse|null
     */
    protected function deserializeResponseBody(string $body, int $status)
    {
        if (200 === $status) {
            return $this->deserialize($body, $this->responseType, 'json');
        }
        if (404 === $status) {
            throw new TravelThemeLookupNotFoundException();
        }
    }
}
