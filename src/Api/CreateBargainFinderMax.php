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
use Ammonkc\SabreApi\Model\BargainFinderMax\OrgOpentravelOta200305CompanyNameType;
use Ammonkc\SabreApi\Model\BargainFinderMax\OrgOpentravelOta200305NumTripsType;
use Ammonkc\SabreApi\Model\BargainFinderMax\OrgOpentravelOta200305OTAAirLowFareSearchRQOriginDestinationInformation;
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
        $bargainFinderMax = new BargainFinderMaxRequest();
        $oTAAirLowFareSearchRQ = new BargainFinderMaxRequestOTAAirLowFareSearchRQ();
        $originDestinationInformation = new OrgOpentravelOta200305OTAAirLowFareSearchRQOriginDestinationInformation();
        $originLocation = new OrgOpentravelOta200305OriginDestinationInformationTypeOriginLocation();
        $destinationLocation = new OrgOpentravelOta200305OriginDestinationInformationTypeDestinationLocation();
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

        $departInfo = $originDestinationInformation->withDepartureDateTime($this->getParameter('departDate'))
                                                   ->withDestinationLocation($destinationLocation->withLocationCode($this->getParameter('destinationLocation')))
                                                   ->withOriginLocation($originLocation->withLocationCode($this->getParameter('originLocation')))
                                                   ->withRPH("0");
        $returnInfo = $originDestinationInformation->withDepartureDateTime($this->getParameter('returnDate'))
                                                   ->withDestinationLocation($destinationLocation->withLocationCode($this->getParameter('originLocation')))
                                                   ->withOriginLocation($originLocation->withLocationCode($this->getParameter('destinationLocation')))
                                                   ->withRPH("1");
        $requestorID->setCompanyName($companyName->setCode("TN"))
                    ->setID("1")
                    ->setType("1");
        $source->setPseudoCityCode('T6C0')
               ->setRequestorID($requestorID);
        $pOS->setSource([$source]);
        $airTravelerAvail->setPassengerTypeQuantity([$passengerTypeQuantity->setCode('ADT')->setQuantity(1)]);
        $oTAAirLowFareSearchRQ->setOriginDestinationInformation([$departInfo, $returnInfo])
                              ->setPOS($pOS)
                              ->setTPAExtensions($tPAExtensions->withIntelliSellTransaction($intelliSellTransaction->setRequestType($requestType->setName("200ITINS"))))
                              ->setTravelPreferences($travelPreferences->setTPAExtensions($travelPrefsTPAExtensions->setDataSources($tPADataSources->setATPCO("Enable")->setLCC("Disable")->setNDC("Disable"))->setNumTrips(new OrgOpentravelOta200305NumTripsType())))
                              ->setTravelerInfoSummary($travelerInfoSummary->setAirTravelerAvail([$airTravelerAvail])
                                                                           ->setSeatsRequested([1]))
                              ->setVersion(1);
        $bargainFinderMax->setOTAAirLowFareSearchRQ($oTAAirLowFareSearchRQ);

        return $bargainFinderMax;
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
            $response = $this->post($this->getUri(), $data, [], ['timeout' => 1]);
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
}
