<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Ammonkc\SabreApi\Model\BargainFinderMax;

class OrgOpentravelOta200305ExchangeOriginDestinationInformationType
{
    /**
     * Maximum time difference/deviation allowed.
     *
     * @var OrgOpentravelOta200305ExchangeOriginDestinationInformationTypeAlternateTime
     */
    protected $alternateTime;
    /**
     * This date should be of the form YYYY-MM-DDTHH:MM:SS.
     *
     * @var string
     */
    protected $arrivalDateTime;
    /**
     * Allowed only for Advanced Calendar API.
     *
     * @var OrgOpentravelOta200305TravelDateTimeTypeArrivalDates
     */
    protected $arrivalDates;
    /**
     * This should be of the form HHMMHHMM.
     *
     * @var string
     */
    protected $arrivalWindow;
    /**
     * Defines preferred cabin(s) to be used in a search. The Cabin type specified in a OriginDestinationInformation/TPA_Extensions overrides this Cabin type for that specific segment/leg. If a Cabin type is not specified in a OriginDestinationInformation/TPA_Extensions the cabin type in this element will be used as default cabin type for that segment/leg.
     *
     * @var OrgOpentravelOta200305CabinPrefType
     */
    protected $cabinPref;
    /**
     * Travel Connection Location - for example, air uses the IATA 3 letter code.
     *
     * @var OrgOpentravelOta200305ConnectionType
     */
    protected $connectionLocations;
    /**
     * Connection time between segments.
     *
     * @var OrgOpentravelOta200305ExchangeOriginDestinationInformationTypeConnectionTime
     */
    protected $connectionTime;
    /**
     * @var OrgOpentravelOta200305ExchangeOriginDestinationInformationTypeDateFlexibility[]
     */
    protected $dateFlexibility;
    /**
     * This date should be of the form YYYY-MM-DDTHH:MM:SS.
     *
     * @var string
     */
    protected $departureDateTime;
    /**
     * @var OrgOpentravelOta200305TravelDateTimeTypeDepartureDates
     */
    protected $departureDates;
    /**
     * This should be of the form HHMMHHMM.
     *
     * @var string
     */
    protected $departureWindow;
    /**
     * Travel Destination Location - for example, air uses the IATA 3 letter code.
     *
     * @var OrgOpentravelOta200305OriginDestinationInformationTypeDestinationLocation
     */
    protected $destinationLocation;
    /**
     * @var OrgOpentravelOta200305ExchangeOriginDestinationFlightType[]
     */
    protected $flight;
    /**
     * Maximum number of options to return.
     *
     * @var OrgOpentravelOta200305ExchangeOriginDestinationInformationTypeMaxOneWayOptions
     */
    protected $maxOneWayOptions;
    /**
     * Number of options for requested date.
     *
     * @var OrgOpentravelOta200305ExchangeOriginDestinationInformationTypeNumOneWayOptions
     */
    protected $numOneWayOptions;
    /**
     * Travel Origin Location - for example, air uses the IATA 3 letter code.
     *
     * @var OrgOpentravelOta200305OriginDestinationInformationTypeOriginLocation
     */
    protected $originLocation;
    /**
     * @var OrgOpentravelOta200305ExchangeOriginDestinationInformationTypeSegmentType
     */
    protected $segmentType;
    /**
     * @var OrgOpentravelOta200305RequestSpecifiedLocationType[]
     */
    protected $sisterDestinationLocation;
    /**
     * @var OrgOpentravelOta200305ExchangeOriginDestinationInformationTypeSisterDestinationMileage
     */
    protected $sisterDestinationMileage;
    /**
     * @var OrgOpentravelOta200305RequestSpecifiedLocationType[]
     */
    protected $sisterOriginLocation;
    /**
     * @var OrgOpentravelOta200305ExchangeOriginDestinationInformationTypeSisterOriginMileage
     */
    protected $sisterOriginMileage;
    /**
     * Total travel time settings.
     *
     * @var OrgOpentravelOta200305ExchangeOriginDestinationInformationTypeTotalTravelTime
     */
    protected $totalTravelTime;

    /**
     * Maximum time difference/deviation allowed.
     *
     * @return OrgOpentravelOta200305ExchangeOriginDestinationInformationTypeAlternateTime
     */
    public function getAlternateTime(): ?OrgOpentravelOta200305ExchangeOriginDestinationInformationTypeAlternateTime
    {
        return $this->alternateTime;
    }

    /**
     * Maximum time difference/deviation allowed.
     *
     * @param OrgOpentravelOta200305ExchangeOriginDestinationInformationTypeAlternateTime $alternateTime
     *
     * @return self
     */
    public function setAlternateTime(?OrgOpentravelOta200305ExchangeOriginDestinationInformationTypeAlternateTime $alternateTime): self
    {
        $this->alternateTime = $alternateTime;

        return $this;
    }

    /**
     * This date should be of the form YYYY-MM-DDTHH:MM:SS.
     *
     * @return string
     */
    public function getArrivalDateTime(): ?string
    {
        return $this->arrivalDateTime;
    }

    /**
     * This date should be of the form YYYY-MM-DDTHH:MM:SS.
     *
     * @param string $arrivalDateTime
     *
     * @return self
     */
    public function setArrivalDateTime(?string $arrivalDateTime): self
    {
        $this->arrivalDateTime = $arrivalDateTime;

        return $this;
    }

    /**
     * Allowed only for Advanced Calendar API.
     *
     * @return OrgOpentravelOta200305TravelDateTimeTypeArrivalDates
     */
    public function getArrivalDates(): ?OrgOpentravelOta200305TravelDateTimeTypeArrivalDates
    {
        return $this->arrivalDates;
    }

    /**
     * Allowed only for Advanced Calendar API.
     *
     * @param OrgOpentravelOta200305TravelDateTimeTypeArrivalDates $arrivalDates
     *
     * @return self
     */
    public function setArrivalDates(?OrgOpentravelOta200305TravelDateTimeTypeArrivalDates $arrivalDates): self
    {
        $this->arrivalDates = $arrivalDates;

        return $this;
    }

    /**
     * This should be of the form HHMMHHMM.
     *
     * @return string
     */
    public function getArrivalWindow(): ?string
    {
        return $this->arrivalWindow;
    }

    /**
     * This should be of the form HHMMHHMM.
     *
     * @param string $arrivalWindow
     *
     * @return self
     */
    public function setArrivalWindow(?string $arrivalWindow): self
    {
        $this->arrivalWindow = $arrivalWindow;

        return $this;
    }

    /**
     * Defines preferred cabin(s) to be used in a search. The Cabin type specified in a OriginDestinationInformation/TPA_Extensions overrides this Cabin type for that specific segment/leg. If a Cabin type is not specified in a OriginDestinationInformation/TPA_Extensions the cabin type in this element will be used as default cabin type for that segment/leg.
     *
     * @return OrgOpentravelOta200305CabinPrefType
     */
    public function getCabinPref(): ?OrgOpentravelOta200305CabinPrefType
    {
        return $this->cabinPref;
    }

    /**
     * Defines preferred cabin(s) to be used in a search. The Cabin type specified in a OriginDestinationInformation/TPA_Extensions overrides this Cabin type for that specific segment/leg. If a Cabin type is not specified in a OriginDestinationInformation/TPA_Extensions the cabin type in this element will be used as default cabin type for that segment/leg.
     *
     * @param OrgOpentravelOta200305CabinPrefType $cabinPref
     *
     * @return self
     */
    public function setCabinPref(?OrgOpentravelOta200305CabinPrefType $cabinPref): self
    {
        $this->cabinPref = $cabinPref;

        return $this;
    }

    /**
     * Travel Connection Location - for example, air uses the IATA 3 letter code.
     *
     * @return OrgOpentravelOta200305ConnectionType
     */
    public function getConnectionLocations(): ?OrgOpentravelOta200305ConnectionType
    {
        return $this->connectionLocations;
    }

    /**
     * Travel Connection Location - for example, air uses the IATA 3 letter code.
     *
     * @param OrgOpentravelOta200305ConnectionType $connectionLocations
     *
     * @return self
     */
    public function setConnectionLocations(?OrgOpentravelOta200305ConnectionType $connectionLocations): self
    {
        $this->connectionLocations = $connectionLocations;

        return $this;
    }

    /**
     * Connection time between segments.
     *
     * @return OrgOpentravelOta200305ExchangeOriginDestinationInformationTypeConnectionTime
     */
    public function getConnectionTime(): ?OrgOpentravelOta200305ExchangeOriginDestinationInformationTypeConnectionTime
    {
        return $this->connectionTime;
    }

    /**
     * Connection time between segments.
     *
     * @param OrgOpentravelOta200305ExchangeOriginDestinationInformationTypeConnectionTime $connectionTime
     *
     * @return self
     */
    public function setConnectionTime(?OrgOpentravelOta200305ExchangeOriginDestinationInformationTypeConnectionTime $connectionTime): self
    {
        $this->connectionTime = $connectionTime;

        return $this;
    }

    /**
     * @return OrgOpentravelOta200305ExchangeOriginDestinationInformationTypeDateFlexibility[]
     */
    public function getDateFlexibility(): ?array
    {
        return $this->dateFlexibility;
    }

    /**
     * @param OrgOpentravelOta200305ExchangeOriginDestinationInformationTypeDateFlexibility[] $dateFlexibility
     *
     * @return self
     */
    public function setDateFlexibility(?array $dateFlexibility): self
    {
        $this->dateFlexibility = $dateFlexibility;

        return $this;
    }

    /**
     * This date should be of the form YYYY-MM-DDTHH:MM:SS.
     *
     * @return string
     */
    public function getDepartureDateTime(): ?string
    {
        return $this->departureDateTime;
    }

    /**
     * This date should be of the form YYYY-MM-DDTHH:MM:SS.
     *
     * @param string $departureDateTime
     *
     * @return self
     */
    public function setDepartureDateTime(?string $departureDateTime): self
    {
        $this->departureDateTime = $departureDateTime;

        return $this;
    }

    /**
     * @return OrgOpentravelOta200305TravelDateTimeTypeDepartureDates
     */
    public function getDepartureDates(): ?OrgOpentravelOta200305TravelDateTimeTypeDepartureDates
    {
        return $this->departureDates;
    }

    /**
     * @param OrgOpentravelOta200305TravelDateTimeTypeDepartureDates $departureDates
     *
     * @return self
     */
    public function setDepartureDates(?OrgOpentravelOta200305TravelDateTimeTypeDepartureDates $departureDates): self
    {
        $this->departureDates = $departureDates;

        return $this;
    }

    /**
     * This should be of the form HHMMHHMM.
     *
     * @return string
     */
    public function getDepartureWindow(): ?string
    {
        return $this->departureWindow;
    }

    /**
     * This should be of the form HHMMHHMM.
     *
     * @param string $departureWindow
     *
     * @return self
     */
    public function setDepartureWindow(?string $departureWindow): self
    {
        $this->departureWindow = $departureWindow;

        return $this;
    }

    /**
     * Travel Destination Location - for example, air uses the IATA 3 letter code.
     *
     * @return OrgOpentravelOta200305OriginDestinationInformationTypeDestinationLocation
     */
    public function getDestinationLocation(): ?OrgOpentravelOta200305OriginDestinationInformationTypeDestinationLocation
    {
        return $this->destinationLocation;
    }

    /**
     * Travel Destination Location - for example, air uses the IATA 3 letter code.
     *
     * @param OrgOpentravelOta200305OriginDestinationInformationTypeDestinationLocation $destinationLocation
     *
     * @return self
     */
    public function setDestinationLocation(?OrgOpentravelOta200305OriginDestinationInformationTypeDestinationLocation $destinationLocation): self
    {
        $this->destinationLocation = $destinationLocation;

        return $this;
    }

    /**
     * @return OrgOpentravelOta200305ExchangeOriginDestinationFlightType[]
     */
    public function getFlight(): ?array
    {
        return $this->flight;
    }

    /**
     * @param OrgOpentravelOta200305ExchangeOriginDestinationFlightType[] $flight
     *
     * @return self
     */
    public function setFlight(?array $flight): self
    {
        $this->flight = $flight;

        return $this;
    }

    /**
     * Maximum number of options to return.
     *
     * @return OrgOpentravelOta200305ExchangeOriginDestinationInformationTypeMaxOneWayOptions
     */
    public function getMaxOneWayOptions(): ?OrgOpentravelOta200305ExchangeOriginDestinationInformationTypeMaxOneWayOptions
    {
        return $this->maxOneWayOptions;
    }

    /**
     * Maximum number of options to return.
     *
     * @param OrgOpentravelOta200305ExchangeOriginDestinationInformationTypeMaxOneWayOptions $maxOneWayOptions
     *
     * @return self
     */
    public function setMaxOneWayOptions(?OrgOpentravelOta200305ExchangeOriginDestinationInformationTypeMaxOneWayOptions $maxOneWayOptions): self
    {
        $this->maxOneWayOptions = $maxOneWayOptions;

        return $this;
    }

    /**
     * Number of options for requested date.
     *
     * @return OrgOpentravelOta200305ExchangeOriginDestinationInformationTypeNumOneWayOptions
     */
    public function getNumOneWayOptions(): ?OrgOpentravelOta200305ExchangeOriginDestinationInformationTypeNumOneWayOptions
    {
        return $this->numOneWayOptions;
    }

    /**
     * Number of options for requested date.
     *
     * @param OrgOpentravelOta200305ExchangeOriginDestinationInformationTypeNumOneWayOptions $numOneWayOptions
     *
     * @return self
     */
    public function setNumOneWayOptions(?OrgOpentravelOta200305ExchangeOriginDestinationInformationTypeNumOneWayOptions $numOneWayOptions): self
    {
        $this->numOneWayOptions = $numOneWayOptions;

        return $this;
    }

    /**
     * Travel Origin Location - for example, air uses the IATA 3 letter code.
     *
     * @return OrgOpentravelOta200305OriginDestinationInformationTypeOriginLocation
     */
    public function getOriginLocation(): ?OrgOpentravelOta200305OriginDestinationInformationTypeOriginLocation
    {
        return $this->originLocation;
    }

    /**
     * Travel Origin Location - for example, air uses the IATA 3 letter code.
     *
     * @param OrgOpentravelOta200305OriginDestinationInformationTypeOriginLocation $originLocation
     *
     * @return self
     */
    public function setOriginLocation(?OrgOpentravelOta200305OriginDestinationInformationTypeOriginLocation $originLocation): self
    {
        $this->originLocation = $originLocation;

        return $this;
    }

    /**
     * @return OrgOpentravelOta200305ExchangeOriginDestinationInformationTypeSegmentType
     */
    public function getSegmentType(): ?OrgOpentravelOta200305ExchangeOriginDestinationInformationTypeSegmentType
    {
        return $this->segmentType;
    }

    /**
     * @param OrgOpentravelOta200305ExchangeOriginDestinationInformationTypeSegmentType $segmentType
     *
     * @return self
     */
    public function setSegmentType(?OrgOpentravelOta200305ExchangeOriginDestinationInformationTypeSegmentType $segmentType): self
    {
        $this->segmentType = $segmentType;

        return $this;
    }

    /**
     * @return OrgOpentravelOta200305RequestSpecifiedLocationType[]
     */
    public function getSisterDestinationLocation(): ?array
    {
        return $this->sisterDestinationLocation;
    }

    /**
     * @param OrgOpentravelOta200305RequestSpecifiedLocationType[] $sisterDestinationLocation
     *
     * @return self
     */
    public function setSisterDestinationLocation(?array $sisterDestinationLocation): self
    {
        $this->sisterDestinationLocation = $sisterDestinationLocation;

        return $this;
    }

    /**
     * @return OrgOpentravelOta200305ExchangeOriginDestinationInformationTypeSisterDestinationMileage
     */
    public function getSisterDestinationMileage(): ?OrgOpentravelOta200305ExchangeOriginDestinationInformationTypeSisterDestinationMileage
    {
        return $this->sisterDestinationMileage;
    }

    /**
     * @param OrgOpentravelOta200305ExchangeOriginDestinationInformationTypeSisterDestinationMileage $sisterDestinationMileage
     *
     * @return self
     */
    public function setSisterDestinationMileage(?OrgOpentravelOta200305ExchangeOriginDestinationInformationTypeSisterDestinationMileage $sisterDestinationMileage): self
    {
        $this->sisterDestinationMileage = $sisterDestinationMileage;

        return $this;
    }

    /**
     * @return OrgOpentravelOta200305RequestSpecifiedLocationType[]
     */
    public function getSisterOriginLocation(): ?array
    {
        return $this->sisterOriginLocation;
    }

    /**
     * @param OrgOpentravelOta200305RequestSpecifiedLocationType[] $sisterOriginLocation
     *
     * @return self
     */
    public function setSisterOriginLocation(?array $sisterOriginLocation): self
    {
        $this->sisterOriginLocation = $sisterOriginLocation;

        return $this;
    }

    /**
     * @return OrgOpentravelOta200305ExchangeOriginDestinationInformationTypeSisterOriginMileage
     */
    public function getSisterOriginMileage(): ?OrgOpentravelOta200305ExchangeOriginDestinationInformationTypeSisterOriginMileage
    {
        return $this->sisterOriginMileage;
    }

    /**
     * @param OrgOpentravelOta200305ExchangeOriginDestinationInformationTypeSisterOriginMileage $sisterOriginMileage
     *
     * @return self
     */
    public function setSisterOriginMileage(?OrgOpentravelOta200305ExchangeOriginDestinationInformationTypeSisterOriginMileage $sisterOriginMileage): self
    {
        $this->sisterOriginMileage = $sisterOriginMileage;

        return $this;
    }

    /**
     * Total travel time settings.
     *
     * @return OrgOpentravelOta200305ExchangeOriginDestinationInformationTypeTotalTravelTime
     */
    public function getTotalTravelTime(): ?OrgOpentravelOta200305ExchangeOriginDestinationInformationTypeTotalTravelTime
    {
        return $this->totalTravelTime;
    }

    /**
     * Total travel time settings.
     *
     * @param OrgOpentravelOta200305ExchangeOriginDestinationInformationTypeTotalTravelTime $totalTravelTime
     *
     * @return self
     */
    public function setTotalTravelTime(?OrgOpentravelOta200305ExchangeOriginDestinationInformationTypeTotalTravelTime $totalTravelTime): self
    {
        $this->totalTravelTime = $totalTravelTime;

        return $this;
    }
}