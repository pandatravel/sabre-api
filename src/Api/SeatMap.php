<?php

namespace Ammonkc\SabreApi\Api;

use Ammonkc\SabreApi\AbstractRequest;
use Ammonkc\SabreApi\Exception\ApiNotAuthorizedException;
use Ammonkc\SabreApi\Exception\ApiTimedOutException;
use Ammonkc\SabreApi\Exception\SeatMapBadRequestException;
use Ammonkc\SabreApi\Exception\SeatMapNotFoundException;
use Ammonkc\SabreApi\Model\SeatMap\Model\SeatMapRequest;
use Ammonkc\SabreApi\Model\SeatMap\Model\SeatMapResponse;
use Ammonkc\SabreApi\Model\SeatMap\Normalizer\NormalizerFactory;
use GuzzleHttp\Exception\ClientException;
use GuzzleHttp\Exception\ConnectException;
use GuzzleHttp\Exception\RequestException;
use Symfony\Component\OptionsResolver\OptionsResolver;

/**
 * The Seat Map API is used to display seat map with prices,
 * for a given carrier code, flight number, class of
 * service, board point, off point and departure date.
 *
 * @link https://beta.developer.sabre.com/sites/default/files/n3bAQZOs.yaml
 * @link   https://ptagent.com/api/v1/packages/
 *
 * @author Ammon Casey <ammon@caseyohana.com>
 */
class SeatMap extends AbstractRequest
{
    /**
     * Endpoint
     *
     * @var string
     */
    protected $uri = '/book/flights/seatmaps';

    /**
     * Endpoint Base uri
     *
     * @var string
     */
    protected $api_version = '/v4.0.0';

    /**
     * NormalizerFactory
     *
     * @var Ammonkc\SabreApi\Model\SeatMap\Normalizer\NormalizerFactory $normalizer
     */
    protected $normalizer = NormalizerFactory::class;

    /**
     * Response Type
     *
     * @var Ammonkc\SabreApi\Model\SeatMap\SeatMapResponse $responseType
     */
    protected $responseType = SeatMapResponse::class;

    /**
     * Return the complete request object
     *
     * @returns \Ammonkc\SabreApi\Model\SeatMap\SeatMapRequest
     */
    protected function getData()
    {
        $seatMaps = new SeatMapRequest();

        // build request object

        return $seatMaps;
    }

    /**
     * Accept a SeatMapRequest object and sends it as a request.
     *
     * @param \Ammonkc\SabreApi\Model\SeatMap\SeatMapRequest $data
     *
     * @throws \Ammonkc\SabreApi\Exception\ApiTimedOutException
     * @throws \Ammonkc\SabreApi\Exception\ApiNotAuthorizedException
     * @throws \Ammonkc\SabreApi\Exception\SeatMapBadRequestException
     * @throws \Ammonkc\SabreApi\Exception\SeatMapNotFoundException
     *
     * @returns \Ammonkc\SabreApi\Model\SeatMap\SeatMapResponse|null
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
                throw new SeatMapBadRequestException($e);
            }
            if ($e->getCode() === 404) {
                throw new SeatMapNotFoundException($e);
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
                        ->setDefaults([])
                        ->setAllowedTypes('mode', ['string']);

        return $optionsResolver;
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

    /**
     * @return array
     */
    public function getDefaultQueryParameters()
    {
        return ['mode' => 'seatmaps'];
    }

    /**
     * Set an mode
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
