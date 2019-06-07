<?php

namespace Ammonkc\SabreApi\Api;

use Ammonkc\SabreApi\AbstractRequest;
use Ammonkc\SabreApi\Exception\AdvancedCalendarSearchBadRequestException;
use Ammonkc\SabreApi\Exception\AdvancedCalendarSearchNotFoundException;
use Ammonkc\SabreApi\Model\AdvancedCalendarSearch\AdvancedCalendarSearchRequest;
use Ammonkc\SabreApi\Model\AdvancedCalendarSearch\AdvancedCalendarSearchRequestOTAAirLowFareSearchRQ;
use Ammonkc\SabreApi\Model\AdvancedCalendarSearch\AdvancedCalendarSearchRequestOTAAirLowFareSearchRQOriginDestinationInformationItem;
use Ammonkc\SabreApi\Model\AdvancedCalendarSearch\AdvancedCalendarSearchRequestOTAAirLowFareSearchRQOriginDestinationInformationItemDepartureDates;
use Ammonkc\SabreApi\Model\AdvancedCalendarSearch\AdvancedCalendarSearchRequestOTAAirLowFareSearchRQOriginDestinationInformationItemDepartureDatesDaysRangeItem;
use Ammonkc\SabreApi\Model\AdvancedCalendarSearch\AdvancedCalendarSearchRequestOTAAirLowFareSearchRQOriginDestinationInformationItemDepartureDatesLengthOfStayRangeItem;
use Ammonkc\SabreApi\Model\AdvancedCalendarSearch\AdvancedCalendarSearchRequestOTAAirLowFareSearchRQOriginDestinationInformationItemDestinationLocation;
use Ammonkc\SabreApi\Model\AdvancedCalendarSearch\AdvancedCalendarSearchRequestOTAAirLowFareSearchRQOriginDestinationInformationItemOriginLocation;
use Ammonkc\SabreApi\Model\AdvancedCalendarSearch\AdvancedCalendarSearchRequestOTAAirLowFareSearchRQOriginDestinationInformationItemTPAExtensions;
use Ammonkc\SabreApi\Model\AdvancedCalendarSearch\AdvancedCalendarSearchRequestOTAAirLowFareSearchRQOriginDestinationInformationItemTPAExtensionsSegmentType;
use Ammonkc\SabreApi\Model\AdvancedCalendarSearch\AdvancedCalendarSearchRequestOTAAirLowFareSearchRQPOS;
use Ammonkc\SabreApi\Model\AdvancedCalendarSearch\AdvancedCalendarSearchRequestOTAAirLowFareSearchRQPOSSourceItem;
use Ammonkc\SabreApi\Model\AdvancedCalendarSearch\AdvancedCalendarSearchRequestOTAAirLowFareSearchRQPOSSourceItemRequestorID;
use Ammonkc\SabreApi\Model\AdvancedCalendarSearch\AdvancedCalendarSearchRequestOTAAirLowFareSearchRQPOSSourceItemRequestorIDCompanyName;
use Ammonkc\SabreApi\Model\AdvancedCalendarSearch\AdvancedCalendarSearchRequestOTAAirLowFareSearchRQTPAExtensions;
use Ammonkc\SabreApi\Model\AdvancedCalendarSearch\AdvancedCalendarSearchRequestOTAAirLowFareSearchRQTPAExtensionsIntelliSellTransaction;
use Ammonkc\SabreApi\Model\AdvancedCalendarSearch\AdvancedCalendarSearchRequestOTAAirLowFareSearchRQTPAExtensionsIntelliSellTransactionRequestType;
use Ammonkc\SabreApi\Model\AdvancedCalendarSearch\AdvancedCalendarSearchRequestOTAAirLowFareSearchRQTravelPreferences;
use Ammonkc\SabreApi\Model\AdvancedCalendarSearch\AdvancedCalendarSearchRequestOTAAirLowFareSearchRQTravelerInfoSummary;
use Ammonkc\SabreApi\Model\AdvancedCalendarSearch\AdvancedCalendarSearchRequestOTAAirLowFareSearchRQTravelerInfoSummaryAirTravelerAvailItem;
use Ammonkc\SabreApi\Model\AdvancedCalendarSearch\AdvancedCalendarSearchRequestOTAAirLowFareSearchRQTravelerInfoSummaryAirTravelerAvailItemPassengerTypeQuantityItem;
use Ammonkc\SabreApi\Model\AdvancedCalendarSearch\AdvancedCalendarSearchRequestOTAAirLowFareSearchRQTravelerInfoSummaryPriceRequestInformation;
use Ammonkc\SabreApi\Model\AdvancedCalendarSearch\AdvancedCalendarSearchResponse;
use Ammonkc\SabreApi\Model\AdvancedCalendarSearch\Normalizer\NormalizerFactory;
use Carbon\Carbon;
use GuzzleHttp\Exception\RequestException;

/**
 * The Airline Lookup API returns the airline name associated with
 * a specified IATA airline code. If no code is specified, the
 * API returns all codes and their corresponding names.
 *
 * @link   https://ptagent.com/api/v1/packages/
 *
 * @author Ammon Casey <ammon@caseyohana.com>
 */
class AdvancedCalendarSearch extends AbstractRequest
{
    /**
     * Endpoint
     *
     * @var string
     */
    protected $uri = '/shop/calendar/flights';

    /**
     * Endpoint Base uri
     *
     * @var string
     */
    protected $api_version = '/v4.3.0';

    /**
     * NormalizerFactory
     *
     * @var Ammonkc\SabreApi\Model\AdvancedCalendarSearch\Normalizer\NormalizerFactory $normalizer
     */
    protected $normalizer = NormalizerFactory::class;

    /**
     * Response Type
     *
     * @var Ammonkc\SabreApi\Contracts\ResponseInterface $responseType
     */
    protected $responseType = AdvancedCalendarSearchResponse::class;


    /**
     * Return the complete request object
     *
     * @returns \Ammonkc\SabreApi\Model\AdvancedCalendarSearch\AdvancedCalendarSearchRequest
     */
    protected function getData()
    {
        $advancedCalendarSearch = new AdvancedCalendarSearchRequest();
        $oTAAirLowFareSearchRQ = new AdvancedCalendarSearchRequestOTAAirLowFareSearchRQ();
        $originDestinationInformation = new AdvancedCalendarSearchRequestOTAAirLowFareSearchRQOriginDestinationInformationItem();
        $departureDates = new AdvancedCalendarSearchRequestOTAAirLowFareSearchRQOriginDestinationInformationItemDepartureDates();
        $daysRange = new AdvancedCalendarSearchRequestOTAAirLowFareSearchRQOriginDestinationInformationItemDepartureDatesDaysRangeItem();
        $lengthOfStayRange = new AdvancedCalendarSearchRequestOTAAirLowFareSearchRQOriginDestinationInformationItemDepartureDatesLengthOfStayRangeItem();
        $originLocation = new AdvancedCalendarSearchRequestOTAAirLowFareSearchRQOriginDestinationInformationItemOriginLocation();
        $destinationLocation = new AdvancedCalendarSearchRequestOTAAirLowFareSearchRQOriginDestinationInformationItemDestinationLocation();
        $pOS = new AdvancedCalendarSearchRequestOTAAirLowFareSearchRQPOS();
        $source = new AdvancedCalendarSearchRequestOTAAirLowFareSearchRQPOSSourceItem();
        $requestorID = new AdvancedCalendarSearchRequestOTAAirLowFareSearchRQPOSSourceItemRequestorID();
        $companyName = new AdvancedCalendarSearchRequestOTAAirLowFareSearchRQPOSSourceItemRequestorIDCompanyName();
        $originDestinationTPAExtensions = new AdvancedCalendarSearchRequestOTAAirLowFareSearchRQOriginDestinationInformationItemTPAExtensions();
        $segmentType = new AdvancedCalendarSearchRequestOTAAirLowFareSearchRQOriginDestinationInformationItemTPAExtensionsSegmentType();
        $tPAExtensions = new AdvancedCalendarSearchRequestOTAAirLowFareSearchRQTPAExtensions();
        $intelliSellTransaction = new AdvancedCalendarSearchRequestOTAAirLowFareSearchRQTPAExtensionsIntelliSellTransaction();
        $requestType = new AdvancedCalendarSearchRequestOTAAirLowFareSearchRQTPAExtensionsIntelliSellTransactionRequestType();
        $travelPreferences = new AdvancedCalendarSearchRequestOTAAirLowFareSearchRQTravelPreferences();
        $travelPrefsTPAExtensions = new AdvancedCalendarSearchRequestOTAAirLowFareSearchRQTPAExtensions();
        $travelerInfoSummary = new AdvancedCalendarSearchRequestOTAAirLowFareSearchRQTravelerInfoSummary();
        $priceRequestInformation = new AdvancedCalendarSearchRequestOTAAirLowFareSearchRQTravelerInfoSummaryPriceRequestInformation();
        $airTravelerAvail = new AdvancedCalendarSearchRequestOTAAirLowFareSearchRQTravelerInfoSummaryAirTravelerAvailItem();
        $passengerTypeQuantity = new AdvancedCalendarSearchRequestOTAAirLowFareSearchRQTravelerInfoSummaryAirTravelerAvailItemPassengerTypeQuantityItem();

        $daysRange->setFromDate($this->getParameter('fromDate'))
                  ->setToDate($this->getParameter('toDate'));
        $lengthOfStayRange->setMinDays($this->getParameter('minDays'))
                          ->setMaxDays($this->getParameter('maxDays'));
        $departInfo = $originDestinationInformation->withRPH("1")
                                                   ->withDepartureDates($departureDates->withDaysRange([$daysRange]))
                                                   ->withDestinationLocation($destinationLocation->withLocationCode($this->getParameter('destinationLocation')))
                                                   ->withOriginLocation($originLocation->withLocationCode($this->getParameter('originLocation')))
                                                   ->withTPAExtensions($originDestinationTPAExtensions->withSegmentType($segmentType->withCode('O')));
        $returnInfo = $originDestinationInformation->withRPH("2")
                                                   ->withDepartureDates($departureDates->withLengthOfStayRange([$lengthOfStayRange]))
                                                   ->withDestinationLocation($destinationLocation->withLocationCode($this->getParameter('originLocation')))
                                                   ->withOriginLocation($originLocation->withLocationCode($this->getParameter('destinationLocation')))
                                                   ->withTPAExtensions($originDestinationTPAExtensions->withSegmentType($segmentType->withCode('O')));
        $requestorID->setCompanyName($companyName->setCode("TN"))
                    ->setID("REQ.ID")
                    ->setType("0.AAA.X");
        $source->setPseudoCityCode('T6C0')
               ->setRequestorID($requestorID);
        $pOS->setSource([$source]);
        $airTravelerAvail->setPassengerTypeQuantity([$passengerTypeQuantity->setCode('ADT')->setQuantity(1)]);
        $oTAAirLowFareSearchRQ->setPOS($pOS)
                              ->setOriginDestinationInformation([$departInfo, $returnInfo])
                              ->setTPAExtensions($tPAExtensions->withIntelliSellTransaction($intelliSellTransaction->setRequestType($requestType->setName("ADC1000"))))
                              ->setTravelPreferences($travelPreferences->setTPAExtensions($travelPrefsTPAExtensions))
                              ->setTravelerInfoSummary($travelerInfoSummary->setAirTravelerAvail([$airTravelerAvail])
                                                                           ->setPriceRequestInformation($priceRequestInformation->setTPAExtensions($travelPrefsTPAExtensions))
                                                                           ->setSeatsRequested([1]));
        $advancedCalendarSearch->setOTAAirLowFareSearchRQ($oTAAirLowFareSearchRQ);

        return $advancedCalendarSearch;
    }

    /**
     * Accept a transaction and sends it as a request.
     *
     * @param $data TransactionRequestInterface
     * @returns TransactionResponse
     */
    public function sendData($data)
    {
        try {
            $response = $this->post($this->getUri(), $data);
        } catch (RequestException $e) {
            if ($e->getCode() === 400) {
                throw new AdvancedCalendarSearchBadRequestException($e);
            }
            if ($e->getCode() === 404) {
                throw new AdvancedCalendarSearchNotFoundException($e);
            }
            throw $e;
        }

        return $this->parseResponse($response);
    }

    /**
     * Deserialze Respose Body
     *
     * @throws \Ammonkc\SabreApi\Exception\AdvancedCalendarSearchBadRequestException
     * @throws \Ammonkc\SabreApi\Exception\AdvancedCalendarSearchNotFoundException
     *
     * @return \Ammonkc\SabreApi\Model\AdvancedCalendarSearch\AdvancedCalendarSearchResponse|null
     */
    protected function deserializeResponseBody(string $body, int $status)
    {
        if (200 === $status) {
            return $this->deserialize($body, $this->responseType, 'json');
        }
        if (400 === $status) {
            throw new AdvancedCalendarSearchBadRequestException();
        }
        if (404 === $status) {
            throw new AdvancedCalendarSearchNotFoundException();
        }
    }

    /**
     * @return \Symfony\Component\OptionsResolver\OptionsResolver
     */
    protected function getQueryOptionsResolver(): \Symfony\Component\OptionsResolver\OptionsResolver
    {
        $optionsResolver = parent::getQueryOptionsResolver();
        $optionsResolver->setDefined(['pointofsalecountry', 'view', 'enabletagging', 'limit', 'offset'])
                        ->setRequired([])
                        ->setDefaults(['pointofsalecountry' => 'US', 'enabletagging' => false, 'limit' => 50, 'offset' => 1])
                        ->setAllowedTypes('pointofsalecountry', ['string'])
                        ->setAllowedTypes('view', ['string'])
                        ->setAllowedTypes('enabletagging', ['bool', 'string'])
                        ->setAllowedTypes('limit', ['int'])
                        ->setAllowedTypes('offset', ['int']);

        return $optionsResolver;
    }

    /**
     * Set fromDate Value
     *
     * @param string $value
     * @return $this
     */
    public function setFromDate($value)
    {
        return $this->setParameter('fromDate', Carbon::createFromFormat('Y-m-d', $value)->format('Y-m-d'));
    }

    /**
     * @return string
     */
    public function getFromDate()
    {
        return $this->getParameter('fromDate');
    }

    /**
     * Set toDate Value
     *
     * @param string $value
     * @return $this
     */
    public function setToDate($value)
    {
        return $this->setParameter('toDate', Carbon::createFromFormat('Y-m-d', $value)->format('Y-m-d'));
    }

    /**
     * @return string
     */
    public function getToDate()
    {
        return $this->getParameter('toDate');
    }

    /**
     * Set minDays Value
     *
     * @param string $value
     * @return $this
     */
    public function setMinDays($value)
    {
        return $this->setParameter('minDays', $value);
    }

    /**
     * @return string
     */
    public function getMinDays()
    {
        return $this->getParameter('minDays');
    }

    /**
     * Set maxDays Value
     *
     * @param string $value
     * @return $this
     */
    public function setMaxDays($value)
    {
        return $this->setParameter('maxDays', $value);
    }

    /**
     * @return string
     */
    public function getMaxDays()
    {
        return $this->getParameter('maxDays');
    }

    /**
     * Set destinationLocation Value
     *
     * @param string $value
     * @return $this
     */
    public function setDestinationLocation($value)
    {
        return $this->setParameter('destinationLocation', $value);
    }

    /**
     * @return string
     */
    public function getDestinationLocation()
    {
        return $this->getParameter('destinationLocation');
    }

    /**
     * Set originLocation Value
     *
     * @param string $value
     * @return $this
     */
    public function setOriginLocation($value)
    {
        return $this->setParameter('originLocation', $value);
    }

    /**
     * @return string
     */
    public function getOriginLocation()
    {
        return $this->getParameter('originLocation');
    }

    /**
     * Set pointofsalecountry Value
     *
     * @param string $value
     * @return $this
     */
    public function setPointofsalecountry($value)
    {
        return $this->setQueryParameter('pointofsalecountry', $value);
    }

    /**
     * @return string
     */
    public function getPointofsalecountry()
    {
        return $this->getQueryParameter('pointofsalecountry');
    }

    /**
     * Set view Value
     *
     * @param string $value
     * @return $this
     */
    public function setView($value)
    {
        return $this->setQueryParameter('view', $value);
    }

    /**
     * @return string
     */
    public function getView()
    {
        return $this->getQueryParameter('view');
    }

    /**
     * Set enabletagging Value
     *
     * @param string $value
     * @return $this
     */
    public function setEnabletagging($value)
    {
        return $this->setQueryParameter('enabletagging', $value ? 'true' : 'false');
    }

    /**
     * @return string
     */
    public function getEnabletagging()
    {
        return $this->getQueryParameter('enabletagging');
    }

    /**
     * Set limit Value
     *
     * @param string $value
     * @return $this
     */
    public function setLimit($value)
    {
        return $this->setQueryParameter('limit', $value);
    }

    /**
     * @return string
     */
    public function getLimit()
    {
        return $this->getQueryParameter('limit');
    }

    /**
     * Set offset Value
     *
     * @param string $value
     * @return $this
     */
    public function setOffset($value)
    {
        return $this->setQueryParameter('offset', $value);
    }

    /**
     * @return string
     */
    public function getOffset()
    {
        return $this->getQueryParameter('offset');
    }
}
