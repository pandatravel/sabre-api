<?php

namespace Ammonkc\SabreApi\Api;

use Ammonkc\SabreApi\AbstractRequest;
use Ammonkc\SabreApi\Exception\ApiNotAuthorizedException;
use Ammonkc\SabreApi\Exception\ApiTimedOutException;
use Ammonkc\SabreApi\Exception\InstaFlightsSearchRequestEntityTooLargeException;
use Ammonkc\SabreApi\Model\InstaFlightsSearch\Exception\InstaFlightsSearchNotFoundException;
use Ammonkc\SabreApi\Model\InstaFlightsSearch\InstaFlightsSearchResponse;
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
 * @link   https://ptagent.com/api/v1/packages/
 *
 * @author Ammon Casey <ammon@caseyohana.com>
 */
class InstaFlightsSearch extends AbstractRequest
{
    /**
     * Endpoint
     *
     * @var string
     */
    protected $uri = '/shop/flights';

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
     * @var \Ammonkc\SabreApi\Model\InstaFlightsSearch\InstaFlightsSearchResponse
     */
    protected $responseType = InstaFlightsSearchResponse::class;

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
     * Accept a data and sends it as a request.
     *
     * @param $data
     *
     * @throws \Ammonkc\SabreApi\Exception\ApiTimedOutException
     * @throws \Ammonkc\SabreApi\Exception\ApiNotAuthorizedException
     * @throws \Ammonkc\SabreApi\Exception\InstaFlightsSearchBadRequestException
     * @throws \Ammonkc\SabreApi\Exception\InstaFlightsSearchNotFoundException
     * @throws \Ammonkc\SabreApi\Exception\InstaFlightsSearchRequestEntityTooLargeException
     *
     * @returns \Ammonkc\SabreApi\Model\InstaFlightsSearch\InstaFlightsSearchResponse|null
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
                throw new InstaFlightsSearchBadRequestException($e);
            }
            if ($e->getCode() === 404) {
                throw new InstaFlightsSearchNotFoundException($e);
            }
            if ($e->getCode() === 413) {
                throw new InstaFlightsSearchRequestEntityTooLargeException($e);
            }
            throw $e;
        }

        return $this->parseResponse($response);
    }

    /**
     * Deserialze Respose Body
     *
     * @return \Ammonkc\SabreApi\Model\InstaFlightsSearch\InstaFlightsSearchResponse|null
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
    protected function getQueryOptionsResolver(): OptionsResolver
    {
        $optionsResolver = parent::getQueryOptionsResolver();
        $optionsResolver->setDefined(['origin', 'destination', 'departuredate', 'returndate', 'includedcarriers', 'excludedcarriers', 'outboundflightstops', 'inboundflightstops', 'includedconnectpoints', 'excludedconnectpoints', 'outboundstopduration', 'inboundstopduration', 'outbounddeparturewindow', 'inbounddeparturewindow', 'outboundarrivalwindow', 'inboundarrivalwindow', 'onlineitinerariesonly', 'eticketsonly', 'minfare', 'maxfare', 'limit', 'offset', 'sortby', 'order', 'sortby2', 'order2', 'pointofsalecountry', 'passengercount', 'view', 'enabletagging'])
                        ->setRequired(['origin', 'destination', 'departuredate'])
                        ->setDefaults(['limit' => '50', 'offset' => (float) 1, 'sortby' => 'totalfare', 'order' => 'asc', 'order2' => 'asc', 'pointofsalecountry' => 'US', 'enabletagging' => false])
                        ->setAllowedTypes('origin', ['string'])
                        ->setAllowedTypes('destination', ['string'])
                        ->setAllowedTypes('departuredate', ['string'])
                        ->setAllowedTypes('returndate', ['string'])
                        ->setAllowedTypes('includedcarriers', ['string'])
                        ->setAllowedTypes('excludedcarriers', ['string'])
                        ->setAllowedTypes('outboundflightstops', ['float'])
                        ->setAllowedTypes('inboundflightstops', ['float'])
                        ->setAllowedTypes('includedconnectpoints', ['string'])
                        ->setAllowedTypes('excludedconnectpoints', ['string'])
                        ->setAllowedTypes('outboundstopduration', ['float'])
                        ->setAllowedTypes('inboundstopduration', ['float'])
                        ->setAllowedTypes('outbounddeparturewindow', ['string'])
                        ->setAllowedTypes('inbounddeparturewindow', ['string'])
                        ->setAllowedTypes('outboundarrivalwindow', ['string'])
                        ->setAllowedTypes('inboundarrivalwindow', ['string'])
                        ->setAllowedTypes('onlineitinerariesonly', ['string'])
                        ->setAllowedTypes('eticketsonly', ['string'])
                        ->setAllowedTypes('minfare', ['float'])
                        ->setAllowedTypes('maxfare', ['float'])
                        ->setAllowedTypes('limit', ['string'])
                        ->setAllowedTypes('offset', ['float'])
                        ->setAllowedTypes('sortby', ['string'])
                        ->setAllowedTypes('order', ['string'])
                        ->setAllowedTypes('sortby2', ['string'])
                        ->setAllowedTypes('order2', ['string'])
                        ->setAllowedTypes('pointofsalecountry', ['string'])
                        ->setAllowedTypes('passengercount', ['float'])
                        ->setAllowedTypes('view', ['string'])
                        ->setAllowedTypes('enabletagging', ['bool', 'string']);

        return $optionsResolver;
    }

    /**
     * Set origin Value
     *
     * 3-letter IATA code of the origin airport or multi-airport city (MAC) code
     *
     * @param string $value
     * @return $this
     */
    public function setOrigin($value)
    {
        return $this->setQueryParameter('origin', $value);
    }

    /**
     * 3-letter IATA code of the origin airport or multi-airport city (MAC) code
     *
     * @return string
     */
    public function getOrigin()
    {
        return $this->getQueryParameter('origin');
    }

    /**
     * Set destination Value
     *
     * 3-letter IATA code of the destination airport or multi-airport city (MAC) code code
     *
     * @param string $value
     * @return $this
     */
    public function setDestination($value)
    {
        return $this->setQueryParameter('destination', $value);
    }

    /**
     * 3-letter IATA code of the destination airport or multi-airport city (MAC) code code
     *
     * @return string
     */
    public function getDestination()
    {
        return $this->getQueryParameter('destination');
    }

    /**
     * Set departuredate Value
     *
     * Date of departing flight in the time zone of the origin airport.
     *
     * @param string $value
     * @return $this
     */
    public function setDeparturedate($value)
    {
        return $this->setQueryParameter('departuredate', $value);
    }

    /**
     * Date of departing flight in the time zone of the origin airport.
     *
     * @return string
     */
    public function getDeparturedate()
    {
        return $this->getQueryParameter('departuredate');
    }

    /**
     * Set returndate Value
     *
     * Date of returning flight in the time zone of the destination airport.
     *
     * @param string $value
     * @return $this
     */
    public function setReturndate($value)
    {
        return $this->setQueryParameter('returndate', $value);
    }

    /**
     * Date of returning flight in the time zone of the destination airport.
     *
     * @return string
     */
    public function getReturndate()
    {
        return $this->getQueryParameter('returndate');
    }

    /**
     * Set includedcarriers Value
     *
     * 2-letter IATA airline code of one or more airline. companies.
     *
     * @param string $value
     * @return $this
     */
    public function setIncludedcarriers($value)
    {
        return $this->setQueryParameter('includedcarriers', $value);
    }

    /**
     * 2-letter IATA airline code of one or more airline. companies.
     *
     * @return string
     */
    public function getIncludedcarriers()
    {
        return $this->getQueryParameter('includedcarriers');
    }

    /**
     * Set excludedcarriers Value
     *
     * 2-letter IATA airline code of one or more airline. companies.
     *
     * @param string $value
     * @return $this
     */
    public function setExcludedcarriers($value)
    {
        return $this->setQueryParameter('excludedcarriers', $value);
    }

    /**
     * 2-letter IATA airline code of one or more airline. companies.
     *
     * @return string
     */
    public function getExcludedcarriers()
    {
        return $this->getQueryParameter('excludedcarriers');
    }

    /**
     * Set outboundflightstops Value
     *
     * The maximum quantity of flight connections on all outbound flight
     * segments on an outbound itinerary.
     *
     * @param string $value
     * @return $this
     */
    public function setOutboundflightstops($value)
    {
        return $this->setQueryParameter('outboundflightstops', $value);
    }

    /**
     * The maximum quantity of flight connections on all outbound flight
     * segments on an outbound itinerary.
     *
     * @return float
     */
    public function getOutboundflightstops()
    {
        return $this->getQueryParameter('outboundflightstops');
    }

    /**
     * Set inboundflightstops Value
     *
     * The maximum quantity of flight connections on all inbound
     * flight segments on an inbound itinerary.
     *
     * @param string $value
     * @return $this
     */
    public function setInboundflightstops($value)
    {
        return $this->setQueryParameter('inboundflightstops', $value);
    }

    /**
     * The maximum quantity of flight connections on all inbound
     * flight segments on an inbound itinerary.
     *
     * @return float
     */
    public function getInboundflightstops()
    {
        return $this->getQueryParameter('inboundflightstops');
    }

    /**
     * Set includedconnectpoints Value
     *
     * IATA airport code of connection points that must appear on both
     * the inbound and outbound flight legs on a roundtrip or
     * one-way itinerary with connecting flights.
     *
     * @param string $value
     * @return $this
     */
    public function setIncludedconnectpoints($value)
    {
        return $this->setQueryParameter('includedconnectpoints', $value);
    }

    /**
     * IATA airport code of connection points that must appear on both
     * the inbound and outbound flight legs on a roundtrip or
     * one-way itinerary with connecting flights.
     *
     * @return string
     */
    public function getIncludedconnectpoints()
    {
        return $this->getQueryParameter('includedconnectpoints');
    }

    /**
     * Set excludedconnectpoints Value
     *
     * IATA airport code of connection points that must not appear on
     * either an inbound, an outbound, or both connecting
     * flights on a roundtrip or one-way itinerary
     *
     * @param string $value
     * @return $this
     */
    public function setExcludedconnectpoints($value)
    {
        return $this->setQueryParameter('excludedconnectpoints', $value);
    }

    /**
     * IATA airport code of connection points that must not appear on
     * either an inbound, an outbound, or both connecting
     * flights on a roundtrip or one-way itinerary
     *
     * @return string
     */
    public function getExcludedconnectpoints()
    {
        return $this->getQueryParameter('excludedconnectpoints');
    }

    /**
     * Set outboundstopduration Value
     *
     * The sum of the total waiting time for all connections on an outbound itinerary
     *
     * @param string $value
     * @return $this
     */
    public function setOutboundstopduration($value)
    {
        return $this->setQueryParameter('outboundstopduration', $value);
    }

    /**
     * The sum of the total waiting time for all connections on an outbound itinerary
     *
     * @return float
     */
    public function getOutboundstopduration()
    {
        return $this->getQueryParameter('outboundstopduration');
    }

    /**
     * Set inboundstopduration Value
     *
     * The sum of the total waiting time for all connections on an inbound itinerary
     *
     * @param string $value
     * @return $this
     */
    public function setInboundstopduration($value)
    {
        return $this->setQueryParameter('inboundstopduration', $value);
    }

    /**
     * The sum of the total waiting time for all connections on an inbound itinerary
     *
     * @return float
     */
    public function getInboundstopduration()
    {
        return $this->getQueryParameter('inboundstopduration');
    }

    /**
     * Set outbounddeparturewindow Value
     *
     * Time range during which a first outbound flight segment can depart on the departure date
     *
     * @param string $value
     * @return $this
     */
    public function setOutbounddeparturewindow($value)
    {
        return $this->setQueryParameter('outbounddeparturewindow', $value);
    }

    /**
     * Time range during which a first outbound flight segment can depart on the departure date
     *
     * @return string
     */
    public function getOutbounddeparturewindow()
    {
        return $this->getQueryParameter('outbounddeparturewindow');
    }

    /**
     * Set inbounddeparturewindow Value
     *
     * Time range during which a first inbound flight segment can depart on the return date
     *
     * @param string $value
     * @return $this
     */
    public function setInbounddeparturewindow($value)
    {
        return $this->setQueryParameter('inbounddeparturewindow', $value);
    }

    /**
     * Time range during which a first inbound flight segment can depart on the return date
     *
     * @return string
     */
    public function getInbounddeparturewindow()
    {
        return $this->getQueryParameter('inbounddeparturewindow');
    }

    /**
     * Set outboundarrivalwindow Value
     *
     * Time range during which a last outbound flight segment can arrive, after the departure date
     *
     * @param string $value
     * @return $this
     */
    public function setOutboundarrivalwindow($value)
    {
        return $this->setQueryParameter('outboundarrivalwindow', $value);
    }

    /**
     * Time range during which a last outbound flight segment can arrive, after the departure date
     *
     * @return string
     */
    public function getOutboundarrivalwindow()
    {
        return $this->getQueryParameter('outboundarrivalwindow');
    }

    /**
     * Set inboundarrivalwindow Value
     *
     * Time range during which a last inbound flight segment can arrive on the return date
     *
     * @param string $value
     * @return $this
     */
    public function setInboundarrivalwindow($value)
    {
        return $this->setQueryParameter('inboundarrivalwindow', $value);
    }

    /**
     * Time range during which a last inbound flight segment can arrive on the return date
     *
     * @return string
     */
    public function getInboundarrivalwindow()
    {
        return $this->getQueryParameter('inboundarrivalwindow');
    }

    /**
     * Set onlineitinerariesonly Value
     *
     * An indicator to base the response on online or interline itineraries
     *
     * @param string $value
     * @return $this
     */
    public function setOnlineitinerariesonly($value)
    {
        return $this->setQueryParameter('onlineitinerariesonly', $value);
    }

    /**
     * An indicator to base the response on online or interline itineraries
     *
     * @return string
     */
    public function getOnlineitinerariesonly()
    {
        return $this->getQueryParameter('onlineitinerariesonly');
    }

    /**
     * Set eticketsonly Value
     *
     * Time range during which a last inbound flight segment can arrive on the return date
     *
     * @param string $value
     * @return $this
     */
    public function setEticketsonly($value)
    {
        return $this->setQueryParameter('eticketsonly', $value);
    }

    /**
     * Time range during which a last inbound flight segment can arrive on the return date
     *
     * @return string
     */
    public function getEticketsonly()
    {
        return $this->getQueryParameter('eticketsonly');
    }

    /**
     * Set minfare Value
     *
     * Minimum total itinerary fare.
     *
     * @param string $value
     * @return $this
     */
    public function setMinfare($value)
    {
        return $this->setQueryParameter('minfare', $value);
    }

    /**
     * Minimum total itinerary fare.
     *
     * @return float
     */
    public function getMinfare()
    {
        return $this->getQueryParameter('minfare');
    }

    /**
     * Set maxfare Value
     *
     * Maximum total itinerary fare
     *
     * @param string $value
     * @return $this
     */
    public function setMaxfare($value)
    {
        return $this->setQueryParameter('maxfare', $value);
    }

    /**
     * Maximum total itinerary fare
     *
     * @return float
     */
    public function getMaxfare()
    {
        return $this->getQueryParameter('maxfare');
    }

    /**
     * Set limit Value
     *
     * the number of itineraries to retrieve per request
     *
     * @param string $value
     * @return $this
     */
    public function setLimit($value)
    {
        return $this->setQueryParameter('limit', $value);
    }

    /**
     * the number of itineraries to retrieve per request
     *
     * @return string
     */
    public function getLimit()
    {
        return $this->getQueryParameter('limit');
    }

    /**
     * Set offset Value
     *
     * the starting position in the list of all itineraries that meet the query criteria
     *
     * @param float $value
     * @return $this
     */
    public function setOffset($value)
    {
        return $this->setQueryParameter('offset', $value);
    }

    /**
     * the starting position in the list of all itineraries that meet the query criteria
     *
     * @return float
     */
    public function getOffset()
    {
        return $this->getQueryParameter('offset');
    }

    /**
     * Set sortby Value
     *
     * primary sort object in the response
     *
     * @param string $value
     * @return $this
     */
    public function setSortby($value)
    {
        return $this->setQueryParameter('sortby', $value);
    }

    /**
     * primary sort object in the response
     *
     * @return string
     */
    public function getSortby()
    {
        return $this->getQueryParameter('sortby');
    }

    /**
     * Set order Value
     *
     * Sorting order for the `sortby` primary object.
     *
     * @param string $value
     * @return $this
     */
    public function setOrder($value)
    {
        return $this->setQueryParameter('order', $value);
    }

    /**
     * Sorting order for the `sortby` primary object.
     *
     * @return string
     */
    public function getOrder()
    {
        return $this->getQueryParameter('order');
    }

    /**
     * Set sortby2 Value
     *
     * secondary sort object in the response
     *
     * @param string $value
     * @return $this
     */
    public function setSortby2($value)
    {
        return $this->setQueryParameter('sortby2', $value);
    }

    /**
     * secondary sort object in the response
     *
     * @return string
     */
    public function getSortby2()
    {
        return $this->getQueryParameter('sortby2');
    }

    /**
     * Set order2 Value
     *
     * Sorting order for the `sortby2` secondary sort object.
     *
     * @param string $value
     * @return $this
     */
    public function setOrder2($value)
    {
        return $this->setQueryParameter('order2', $value);
    }

    /**
     * Sorting order for the `sortby2` secondary sort object.
     *
     * @return string
     */
    public function getOrder2()
    {
        return $this->getQueryParameter('order2');
    }

    /**
     * Set pointofsalecountry Value
     *
     * 2-letter ISO 3166 country code.
     *
     * @param string $value
     * @return $this
     */
    public function setPointofsalecountry($value)
    {
        return $this->setQueryParameter('pointofsalecountry', $value);
    }

    /**
     * 2-letter ISO 3166 country code.
     *
     * @return string
     */
    public function getPointofsalecountry()
    {
        return $this->getQueryParameter('pointofsalecountry');
    }

    /**
     * Set passengercount Value
     *
     * limits the response to only those options with enough
     * seats available to support the passenger count
     *
     * @param string $value
     * @return $this
     */
    public function setPassengercount($value)
    {
        return $this->setQueryParameter('passengercount', $value);
    }

    /**
     * limits the response to only those options with enough
     * seats available to support the passenger count
     *
     * @return float
     */
    public function getPassengercount()
    {
        return $this->getQueryParameter('passengercount');
    }

    /**
     * Set view Value
     *
     * The response view definition.
     *
     * @param string $value
     * @return $this
     */
    public function setView($value)
    {
        return $this->setQueryParameter('view', $value);
    }

    /**
     * The response view definition.
     *
     * @return string
     */
    public function getView()
    {
        return $this->getQueryParameter('view');
    }

    /**
     * Set enabletagging Value
     *
     * Returns a TagID for each itinerary and stores in the Sabre cache.
     *
     * @param string $value
     * @return $this
     */
    public function setEnabletagging($value)
    {
        return $this->setQueryParameter('enabletagging', $value ? 'true' : 'false');
    }

    /**
     * Returns a TagID for each itinerary and stores in the Sabre cache.
     *
     * @return string
     */
    public function getEnabletagging()
    {
        return $this->getQueryParameter('enabletagging');
    }
}
