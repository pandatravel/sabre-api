<?php

namespace Ammonkc\SabreApi\Api;

use Ammonkc\SabreApi\AbstractRequest;
use Ammonkc\SabreApi\Exception\ApiNotAuthorizedException;
use Ammonkc\SabreApi\Exception\ApiTimedOutException;
use Ammonkc\SabreApi\Exception\InstaFlightsSearchByTagIdBadRequestException;
use Ammonkc\SabreApi\Exception\InstaFlightsSearchByTagIdNotFoundException;
use Ammonkc\SabreApi\Model\InstaFlightsSearch\InstaFlightsSearchByTagIDResponse;
use Ammonkc\SabreApi\Model\InstaFlightsSearch\Normalizer\NormalizerFactory;
use GuzzleHttp\Exception\ClientException;
use GuzzleHttp\Exception\ConnectException;
use GuzzleHttp\Exception\RequestException;
use Symfony\Component\OptionsResolver\OptionsResolver;

/**
 * The InstaFlights Search API retrieves roundtrip or one-way flight
 * itineraries with published fares and fare breakdowns
 * for a given city pair and departure date.
 *
 * @link   https://beta.developer.sabre.com/sites/default/files/t6Abi4RC.yaml OpenApi Spec
 * @link   https://ptagent.com/api/v1/packages/
 *
 * @author Ammon Casey <ammon@caseyohana.com>
 */
class InstaFlightsSearchByTagId extends AbstractRequest
{
    /**
     * Endpoint
     *
     * @var string
     */
    protected $uri = '/shop/flights/tags/{tagid}';

    /**
     * Endpoint Base uri
     *
     * @var string
     */
    protected $api_version = '/v1';

    /**
     * NormalizerFactory
     *
     * @var \Ammonkc\SabreApi\Model\InstaFlightsSearch\Normalizer\NormalizerFactory $normalizer
     */
    protected $normalizer = NormalizerFactory::class;

    /**
     * Response Type
     *
     * @var \Ammonkc\SabreApi\Model\AdvancedCalendarSearch\InstaFlightsSearchByTagIDResponse $responseType
     */
    protected $responseType = InstaFlightsSearchByTagIDResponse::class;

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
     * @throws \Ammonkc\SabreApi\Exception\InstaFlightsSearchByTagIdBadRequestException
     * @throws \Ammonkc\SabreApi\Exception\InstaFlightsSearchByTagIdNotFoundException
     *
     * @return \Ammonkc\SabreApi\Model\AdvancedCalendarSearch\InstaFlightsSearchByTagIDResponse|null
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
                throw new InstaFlightsSearchByTagIdBadRequestException($e);
            }
            if ($e->getCode() === 404) {
                throw new InstaFlightsSearchByTagIdNotFoundException($e);
            }
            throw $e;
        }

        return $this->parseResponse($response);
    }

    /**
     * Deserialze Respose Body
     *
     * @return \Ammonkc\SabreApi\Model\AdvancedCalendarSearch\InstaFlightsSearchByTagIDResponse|null
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
        $optionsResolver->setDefined(['{tagid}'])
                        ->setRequired(['{tagid}'])
                        ->setDefaults([])
                        ->setAllowedTypes('{tagid}', ['string']);

        return $optionsResolver;
    }

    /**
     * Set {tagid} Value
     *
     * The tag ID for the respective itinerary.
     *
     * A tag ID is returned when enabletagging=true is used in a previous
     * InstaFlights Search API request.
     *
     * @param string $value
     * @return $this
     */
    public function setTagid($value)
    {
        return $this->setPathParameter('{tagid}', $value);
    }

    /**
     * @return string
     */
    public function getTagid()
    {
        return $this->getPathParameter('{tagid}');
    }
}
