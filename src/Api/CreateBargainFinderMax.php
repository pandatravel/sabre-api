<?php

namespace Ammonkc\SabreApi\Api;

use Ammonkc\SabreApi\AbstractRequest;
use Ammonkc\SabreApi\Exception\ApiNotAuthorizedException;
use Ammonkc\SabreApi\Exception\ApiTimedOutException;
use Ammonkc\SabreApi\Model\BargainFinderMax\BargainFinderMaxRequest;
use Ammonkc\SabreApi\Model\BargainFinderMax\BargainFinderMaxRequestOTAAirLowFareSearchRQ;
use Ammonkc\SabreApi\Model\BargainFinderMax\GroupedItineraryResponse;
use Ammonkc\SabreApi\Model\BargainFinderMax\Normalizer\NormalizerFactory;
use Ammonkc\SabreApi\Model\BargainFinderMax\OrgOpentravelOta200305AirSearchPrefsType;
use Ammonkc\SabreApi\Model\BargainFinderMax\OrgOpentravelOta200305AirSearchPrefsTypeTPAExtensions;
use Ammonkc\SabreApi\Model\BargainFinderMax\OrgOpentravelOta200305AirSearchPrefsTypeTPAExtensionsDataSources;
use Ammonkc\SabreApi\Model\BargainFinderMax\OrgOpentravelOta200305CabinPrefType;
use Ammonkc\SabreApi\Model\BargainFinderMax\OrgOpentravelOta200305ClassOfServiceElemType;
use Ammonkc\SabreApi\Model\BargainFinderMax\OrgOpentravelOta200305CompanyNameType;
use Ammonkc\SabreApi\Model\BargainFinderMax\OrgOpentravelOta200305ExchangeOriginDestinationInformationTypeSegmentType;
use Ammonkc\SabreApi\Model\BargainFinderMax\OrgOpentravelOta200305NumTripsType;
use Ammonkc\SabreApi\Model\BargainFinderMax\OrgOpentravelOta200305OTAAirLowFareSearchRQOriginDestinationInformation;
use Ammonkc\SabreApi\Model\BargainFinderMax\OrgOpentravelOta200305OTAAirLowFareSearchRQOriginDestinationInformationTPAExtensions;
use Ammonkc\SabreApi\Model\BargainFinderMax\OrgOpentravelOta200305OTAAirLowFareSearchRQTPAExtensions;
use Ammonkc\SabreApi\Model\BargainFinderMax\OrgOpentravelOta200305OriginDestinationInformationTypeDestinationLocation;
use Ammonkc\SabreApi\Model\BargainFinderMax\OrgOpentravelOta200305OriginDestinationInformationTypeOriginLocation;
use Ammonkc\SabreApi\Model\BargainFinderMax\OrgOpentravelOta200305POSType;
use Ammonkc\SabreApi\Model\BargainFinderMax\OrgOpentravelOta200305PassengerTypeQuantityType;
use Ammonkc\SabreApi\Model\BargainFinderMax\OrgOpentravelOta200305SourceType;
use Ammonkc\SabreApi\Model\BargainFinderMax\OrgOpentravelOta200305TransactionType;
use Ammonkc\SabreApi\Model\BargainFinderMax\OrgOpentravelOta200305TransactionTypeRequestType;
use Ammonkc\SabreApi\Model\BargainFinderMax\OrgOpentravelOta200305TravelerInfoSummaryType;
use Ammonkc\SabreApi\Model\BargainFinderMax\OrgOpentravelOta200305TravelerInformationType;
use Ammonkc\SabreApi\Model\BargainFinderMax\OrgOpentravelOta200305UniqueIDType;
use Carbon\Carbon;
use GuzzleHttp\Exception\ClientException;
use GuzzleHttp\Exception\ConnectException;

/**
 * Bargain Finder Max (BFM), our best-in-class low fare search product,
 * is used to search for the lowest available priced itineraries
 * based upon a specific date.
 *
 * @link   https://beta.developer.sabre.com/sites/default/files/eLxEZO8J.yaml OpenApi spec
 * @link   https://api-crt.cert.havail.sabre.com/v1/offers/shop
 *
 * @author Ammon Casey <ammon@caseyohana.com>
 */
class CreateBargainFinderMax extends AbstractRequest
{
    /**
     * Endpoint
     *
     * @var string
     */
    protected $uri = '/offers/shop';

    /**
     * Endpoint Base uri
     *
     * @var string
     */
    protected $api_version = '/v1';

    /**
     * NormalizerFactory
     *
     * @var Ammonkc\SabreApi\Model\BargainFinderMax\Normalizer\NormalizerFactory $normalizer
     */
    protected $normalizer = NormalizerFactory::class;

    /**
     * Response Type
     *
     * @var Ammonkc\SabreApi\Contracts\ResponseInterface $responseType
     */
    protected $responseType = GroupedItineraryResponse::class;

    /**
     * Return the complete request object
     *
     * @returns \Ammonkc\SabreApi\Model\BargainFinderMax\BargainFinderMaxRequest
     */
    protected function getData()
    {
        $bargainFinderMaxRequest = new BargainFinderMaxRequest();
        $oTAAirLowFareSearchRQ = new BargainFinderMaxRequestOTAAirLowFareSearchRQ();
        $originDestinationInformation = new OrgOpentravelOta200305OTAAirLowFareSearchRQOriginDestinationInformation();
        $originLocation = new OrgOpentravelOta200305OriginDestinationInformationTypeOriginLocation();
        $destinationLocation = new OrgOpentravelOta200305OriginDestinationInformationTypeDestinationLocation();
        $originDestinationTpaExtentions = new OrgOpentravelOta200305OTAAirLowFareSearchRQOriginDestinationInformationTPAExtensions();
        $originDestinationSegmentType = new OrgOpentravelOta200305ExchangeOriginDestinationInformationTypeSegmentType();
        $originDestinationClassOfServiceElemType = new OrgOpentravelOta200305ClassOfServiceElemType();
        $cabinPrefType = new OrgOpentravelOta200305CabinPrefType();
        $pOS = new OrgOpentravelOta200305POSType();
        $source = new OrgOpentravelOta200305SourceType();
        $requestorID = new OrgOpentravelOta200305UniqueIDType();
        $companyName = new OrgOpentravelOta200305CompanyNameType();
        $tPAExtensions = new OrgOpentravelOta200305OTAAirLowFareSearchRQTPAExtensions();
        $intelliSellTransaction = new OrgOpentravelOta200305TransactionType();
        $requestType = new OrgOpentravelOta200305TransactionTypeRequestType();
        $travelPreferences = new OrgOpentravelOta200305AirSearchPrefsType();
        $travelPrefsTPAExtensions = new OrgOpentravelOta200305AirSearchPrefsTypeTPAExtensions();
        $tPADataSources = new OrgOpentravelOta200305AirSearchPrefsTypeTPAExtensionsDataSources();
        $travelerInfoSummary = new OrgOpentravelOta200305TravelerInfoSummaryType();
        $airTravelerAvail = new OrgOpentravelOta200305TravelerInformationType();
        $passengerTypeQuantity = new OrgOpentravelOta200305PassengerTypeQuantityType();
        $numTrips = new OrgOpentravelOta200305NumTripsType();

        /* ************************ POS ************************ */

        $source->setPseudoCityCode($this->getPseudoCityCode())
               ->setRequestorID($requestorID->setType("0.AAA.X")
                                            ->setID("REQ.ID")
                                            ->setCompanyName($companyName->setCode("TN")));
        $pOS->setSource([$source]);

        /* ************************ OriginDestination ************************ */

        $departInfo = $originDestinationInformation->withDepartureDateTime($this->getDepartDate())
                                                   ->withDestinationLocation($destinationLocation->withLocationCode($this->getDestinationLocation()))
                                                   ->withOriginLocation($originLocation->withLocationCode($this->getOriginLocation()))
                                                   ->withRPH("1")
                                                   ->withTPAExtensions($originDestinationTpaExtentions->withSegmentType($originDestinationSegmentType->setCode("O")));
        $origDestInfo = [$departInfo];
        if ($this->getTripType() === static::ROUND_TRIP) {
            $returnInfo = $originDestinationInformation->withDepartureDateTime($this->getReturnDate())
                                                       ->withDestinationLocation($destinationLocation->withLocationCode($this->getOriginLocation()))
                                                       ->withOriginLocation($originLocation->withLocationCode($this->getDestinationLocation()))
                                                       ->withRPH("2")
                                                       ->withTPAExtensions($originDestinationTpaExtentions->withSegmentType($originDestinationSegmentType->setCode("O")));
            array_push($origDestInfo, $returnInfo);
        }

        /* ************************ PassengerType ************************ */

        $passengers = [];
        if ($this->getAdultCount() > 0) {
            $passengers[] = $passengerTypeQuantity->withCode('ADT')->withQuantity($this->getAdultCount());
        }
        if ($this->getChildCount() > 0) {
            $passengers[] = $passengerTypeQuantity->withCode('CNN')->withQuantity($this->getChildCount());
        }
        $airTravelerAvail->setPassengerTypeQuantity($passengers);

        /* ************************ TravelPreferences ************************ */

        $travelPreferences->setCabinPref([$cabinPrefType->withCabin($this->getCabinPref())->withPreferLevel("Preferred")])
                          ->setTPAExtensions($travelPrefsTPAExtensions->setNumTrips($numTrips)
                                                                      ->setDataSources($tPADataSources->setATPCO("Enable")
                                                                                                      ->setLCC("Disable")
                                                                                                      ->setNDC("Disable")));

        /* ************************ OTAAirLowFareSearchRQ ************************ */

        $oTAAirLowFareSearchRQ->setTruncateMessages(false)
                              ->setVersion('1')
                              ->setTarget($this->getTarget())
                              ->setMaxResponses($this->getMaxResponses())
                              ->setAvailableFlightsOnly($this->getAvailableFlightsOnly())
                              ->setDirectFlightsOnly($this->getDirectFlightsOnly())
                              ->setPOS($pOS)
                              ->setOriginDestinationInformation($origDestInfo)
                              ->setTravelPreferences($travelPreferences)
                              ->setTravelerInfoSummary($travelerInfoSummary->setAirTravelerAvail([$airTravelerAvail])
                                                                           ->setSeatsRequested([$this->getPassengerCount()]))
                              ->setTPAExtensions($tPAExtensions->withIntelliSellTransaction($intelliSellTransaction->setRequestType($requestType->setName("200ITINS"))));
        $bargainFinderMaxRequest->setOTAAirLowFareSearchRQ($oTAAirLowFareSearchRQ);

        return $bargainFinderMaxRequest;
    }

    /**
     * Accept a transaction and sends it as a request.
     *
     * @param $data
     *
     * @throws \Ammonkc\SabreApi\Exception\ApiTimedOutException
     * @throws \Ammonkc\SabreApi\Exception\ApiNotAuthorizedException
     *
     * @returns \Ammonkc\SabreApi\Model\BargainFinderMax\GroupedItineraryResponse
     */
    public function sendData($data)
    {
        try {
            $response = $this->post($this->getUri(), $data, [], ['timeout' => 10]);
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

    /**
     * Get default parameters as an associative array.
     *
     * @return array
     */
    protected function getDefaultParameters()
    {
        return [
            'maxResponses'          => 10,
            'availableFlightsOnly'  => true,
            'directFlightsOnly'     => true,
            'cabinPref'             => 'Y',
        ];
    }

    /**
     * Set departDate Value
     *
     * @param string $value
     * @return $this
     */
    public function setDepartDate($value)
    {
        return $this->setParameter('departDate', Carbon::createFromFormat('Y-m-d H:i:s', $value . ' 00:00:00')->toDateTimeLocalString());
    }

    /**
     * @return string
     */
    public function getDepartDate()
    {
        return $this->getParameter('departDate');
    }

    /**
     * Set returnDate Value
     *
     * @param string $value
     * @return $this
     */
    public function setReturnDate($value)
    {
        return $this->setParameter('returnDate', Carbon::createFromFormat('Y-m-d H:i:s', $value . ' 00:00:00')->toDateTimeLocalString());
    }

    /**
     * @return string
     */
    public function getReturnDate()
    {
        return $this->getParameter('returnDate');
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
     * Set pseudoCityCode Value
     *
     * @param string $value
     * @return $this
     */
    public function setPseudoCityCode($value)
    {
        return $this->setParameter('pseudoCityCode', $value);
    }

    /**
     * @return string
     */
    public function getPseudoCityCode()
    {
        return $this->getParameter('pseudoCityCode');
    }

    /**
     * Set adultCount Value
     *
     * @param string $value
     * @return $this
     */
    public function setAdultCount($value)
    {
        return $this->setParameter('adultCount', $value);
    }

    /**
     * @return string
     */
    public function getAdultCount()
    {
        return (int) $this->getParameter('adultCount');
    }

    /**
     * Set childCount Value
     *
     * @param string $value
     * @return $this
     */
    public function setChildCount($value)
    {
        return $this->setParameter('childCount', $value);
    }

    /**
     * @return string
     */
    public function getChildCount()
    {
        return (int) $this->getParameter('childCount');
    }

    /**
     * @return int
     */
    public function getPassengerCount()
    {
        return (int) $this->getAdultCount() + $this->getChildCount();
    }

    /**
     * Set maxResponses Value
     *
     * @param string $value
     * @return $this
     */
    public function setMaxResponses($value)
    {
        return $this->setParameter('maxResponses', $value);
    }

    /**
     * @return string
     */
    public function getMaxResponses(): int
    {
        return (int) $this->getParameter('maxResponses');
    }

    /**
     * Set cabinPref Value
     *
     * @param string $value
     * @return $this
     */
    public function setCabinPref($value)
    {
        return $this->setParameter('cabinPref', $value);
    }

    /**
     * @return string
     */
    public function getCabinPref()
    {
        return $this->getParameter('cabinPref');
    }

    /**
     * Set availableFlightsOnly Value
     *
     * @param string $value
     * @return $this
     */
    public function setAvailableFlightsOnly($value)
    {
        return $this->setParameter('availableFlightsOnly', $value);
    }

    /**
     * @return string
     */
    public function getAvailableFlightsOnly()
    {
        return $this->getParameter('availableFlightsOnly');
    }

    /**
     * Set directFlightsOnly Value
     *
     * @param string $value
     * @return $this
     */
    public function setDirectFlightsOnly($value)
    {
        return $this->setParameter('directFlightsOnly', $value);
    }

    /**
     * @return string
     */
    public function getDirectFlightsOnly()
    {
        return $this->getParameter('directFlightsOnly');
    }

    /**
     * Set tripType Value
     *
     * @param string $value
     * @return $this
     */
    public function setTripType($value)
    {
        return $this->setParameter('tripType', $value);
    }

    /**
     * @return string
     */
    public function getTripType()
    {
        return $this->getParameter('tripType');
    }

    /**
     * @return string
     */
    public function getTarget()
    {
        return $this->getDevMode() ? 'Test' : 'Production';
    }
}
