<?php

namespace Ammonkc\SabreApi\Model\BargainFinderMax;

use Ammonkc\SabreApi\AbstractModel;

class OrgOpentravelOta200305OTAAirLowFareSearchRQOriginDestinationInformationTPAExtensions extends AbstractModel
{
    /**
     * Maximum time difference/deviation allowed.
     *
     * @var OrgOpentravelOta200305ExchangeOriginDestinationInformationTypeAlternateTime
     */
    protected $alternateTime;
    /**
     * This element allows user to get baggage information,Free baggage piece is required.
     *
     * @var OrgOpentravelOta200305BaggageType
     */
    protected $baggage;
    /**
     * Describes brand filters.
     *
     * @var OrgOpentravelOta200305BrandFiltersType
     */
    protected $brandFilters;
    /**
     * Defines preferred cabin(s) to be used in a search. The Cabin type specified in a OriginDestinationInformation/TPA_Extensions overrides this Cabin type for that specific segment/leg. If a Cabin type is not specified in a OriginDestinationInformation/TPA_Extensions the cabin type in this element will be used as default cabin type for that segment/leg.
     *
     * @var OrgOpentravelOta200305CabinPrefType
     */
    protected $cabinPref;
    /**
     * @var OrgOpentravelOta200305ClassOfServiceElemType[]
     */
    protected $classOfService;
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
     * Specify which days of week to consider for departure.
     *
     * @var OrgOpentravelOta200305DepartureDaysType
     */
    protected $departureDays;
    /**
     * @var OrgOpentravelOta200305FareBasisType[]
     */
    protected $fareBasis;
    /**
     * @var OrgOpentravelOta200305FareTypePrefType[]
     */
    protected $fareType;
    /**
     * @var OrgOpentravelOta200305OriginDestinationFlightType[]
     */
    protected $flight;
    /**
     * @var OrgOpentravelOta200305AllianceType[]
     */
    protected $includeAlliancePref;
    /**
     * @var OrgOpentravelOta200305IncludeVendorPrefType[]
     */
    protected $includeVendorPref;
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
     * @var OrgOpentravelOta200305PassengerPriceAdjustmentType[]
     */
    protected $passengerPriceAdjustment;
    /**
     * @var OrgOpentravelOta200305RoutingDefinitionType[]
     */
    protected $routing;
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
     * Requested stopover informations.
     *
     * @var OrgOpentravelOta200305StopoverType
     */
    protected $stopover;
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
    public function getAlternateTime(): OrgOpentravelOta200305ExchangeOriginDestinationInformationTypeAlternateTime
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
    public function setAlternateTime(OrgOpentravelOta200305ExchangeOriginDestinationInformationTypeAlternateTime $alternateTime): self
    {
        $this->alternateTime = $alternateTime;

        return $this;
    }

    /**
     * This element allows user to get baggage information,Free baggage piece is required.
     *
     * @return OrgOpentravelOta200305BaggageType
     */
    public function getBaggage(): OrgOpentravelOta200305BaggageType
    {
        return $this->baggage;
    }

    /**
     * This element allows user to get baggage information,Free baggage piece is required.
     *
     * @param OrgOpentravelOta200305BaggageType $baggage
     *
     * @return self
     */
    public function setBaggage(OrgOpentravelOta200305BaggageType $baggage): self
    {
        $this->baggage = $baggage;

        return $this;
    }

    /**
     * Describes brand filters.
     *
     * @return OrgOpentravelOta200305BrandFiltersType
     */
    public function getBrandFilters(): OrgOpentravelOta200305BrandFiltersType
    {
        return $this->brandFilters;
    }

    /**
     * Describes brand filters.
     *
     * @param OrgOpentravelOta200305BrandFiltersType $brandFilters
     *
     * @return self
     */
    public function setBrandFilters(OrgOpentravelOta200305BrandFiltersType $brandFilters): self
    {
        $this->brandFilters = $brandFilters;

        return $this;
    }

    /**
     * Defines preferred cabin(s) to be used in a search. The Cabin type specified in a OriginDestinationInformation/TPA_Extensions overrides this Cabin type for that specific segment/leg. If a Cabin type is not specified in a OriginDestinationInformation/TPA_Extensions the cabin type in this element will be used as default cabin type for that segment/leg.
     *
     * @return OrgOpentravelOta200305CabinPrefType
     */
    public function getCabinPref(): OrgOpentravelOta200305CabinPrefType
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
    public function setCabinPref(OrgOpentravelOta200305CabinPrefType $cabinPref): self
    {
        $this->cabinPref = $cabinPref;

        return $this;
    }

    /**
     * @return OrgOpentravelOta200305ClassOfServiceElemType[]
     */
    public function getClassOfService(): array
    {
        return $this->classOfService;
    }

    /**
     * @param OrgOpentravelOta200305ClassOfServiceElemType[] $classOfService
     *
     * @return self
     */
    public function setClassOfService(array $classOfService): self
    {
        $this->classOfService = $classOfService;

        return $this;
    }

    /**
     * Connection time between segments.
     *
     * @return OrgOpentravelOta200305ExchangeOriginDestinationInformationTypeConnectionTime
     */
    public function getConnectionTime(): OrgOpentravelOta200305ExchangeOriginDestinationInformationTypeConnectionTime
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
    public function setConnectionTime(OrgOpentravelOta200305ExchangeOriginDestinationInformationTypeConnectionTime $connectionTime): self
    {
        $this->connectionTime = $connectionTime;

        return $this;
    }

    /**
     * @return OrgOpentravelOta200305ExchangeOriginDestinationInformationTypeDateFlexibility[]
     */
    public function getDateFlexibility(): array
    {
        return $this->dateFlexibility;
    }

    /**
     * @param OrgOpentravelOta200305ExchangeOriginDestinationInformationTypeDateFlexibility[] $dateFlexibility
     *
     * @return self
     */
    public function setDateFlexibility(array $dateFlexibility): self
    {
        $this->dateFlexibility = $dateFlexibility;

        return $this;
    }

    /**
     * Specify which days of week to consider for departure.
     *
     * @return OrgOpentravelOta200305DepartureDaysType
     */
    public function getDepartureDays(): OrgOpentravelOta200305DepartureDaysType
    {
        return $this->departureDays;
    }

    /**
     * Specify which days of week to consider for departure.
     *
     * @param OrgOpentravelOta200305DepartureDaysType $departureDays
     *
     * @return self
     */
    public function setDepartureDays(OrgOpentravelOta200305DepartureDaysType $departureDays): self
    {
        $this->departureDays = $departureDays;

        return $this;
    }

    /**
     * @return OrgOpentravelOta200305FareBasisType[]
     */
    public function getFareBasis(): array
    {
        return $this->fareBasis;
    }

    /**
     * @param OrgOpentravelOta200305FareBasisType[] $fareBasis
     *
     * @return self
     */
    public function setFareBasis(array $fareBasis): self
    {
        $this->fareBasis = $fareBasis;

        return $this;
    }

    /**
     * @return OrgOpentravelOta200305FareTypePrefType[]
     */
    public function getFareType(): array
    {
        return $this->fareType;
    }

    /**
     * @param OrgOpentravelOta200305FareTypePrefType[] $fareType
     *
     * @return self
     */
    public function setFareType(array $fareType): self
    {
        $this->fareType = $fareType;

        return $this;
    }

    /**
     * @return OrgOpentravelOta200305OriginDestinationFlightType[]
     */
    public function getFlight(): array
    {
        return $this->flight;
    }

    /**
     * @param OrgOpentravelOta200305OriginDestinationFlightType[] $flight
     *
     * @return self
     */
    public function setFlight(array $flight): self
    {
        $this->flight = $flight;

        return $this;
    }

    /**
     * @return OrgOpentravelOta200305AllianceType[]
     */
    public function getIncludeAlliancePref(): array
    {
        return $this->includeAlliancePref;
    }

    /**
     * @param OrgOpentravelOta200305AllianceType[] $includeAlliancePref
     *
     * @return self
     */
    public function setIncludeAlliancePref(array $includeAlliancePref): self
    {
        $this->includeAlliancePref = $includeAlliancePref;

        return $this;
    }

    /**
     * @return OrgOpentravelOta200305IncludeVendorPrefType[]
     */
    public function getIncludeVendorPref(): array
    {
        return $this->includeVendorPref;
    }

    /**
     * @param OrgOpentravelOta200305IncludeVendorPrefType[] $includeVendorPref
     *
     * @return self
     */
    public function setIncludeVendorPref(array $includeVendorPref): self
    {
        $this->includeVendorPref = $includeVendorPref;

        return $this;
    }

    /**
     * Maximum number of options to return.
     *
     * @return OrgOpentravelOta200305ExchangeOriginDestinationInformationTypeMaxOneWayOptions
     */
    public function getMaxOneWayOptions(): OrgOpentravelOta200305ExchangeOriginDestinationInformationTypeMaxOneWayOptions
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
    public function setMaxOneWayOptions(OrgOpentravelOta200305ExchangeOriginDestinationInformationTypeMaxOneWayOptions $maxOneWayOptions): self
    {
        $this->maxOneWayOptions = $maxOneWayOptions;

        return $this;
    }

    /**
     * Number of options for requested date.
     *
     * @return OrgOpentravelOta200305ExchangeOriginDestinationInformationTypeNumOneWayOptions
     */
    public function getNumOneWayOptions(): OrgOpentravelOta200305ExchangeOriginDestinationInformationTypeNumOneWayOptions
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
    public function setNumOneWayOptions(OrgOpentravelOta200305ExchangeOriginDestinationInformationTypeNumOneWayOptions $numOneWayOptions): self
    {
        $this->numOneWayOptions = $numOneWayOptions;

        return $this;
    }

    /**
     * @return OrgOpentravelOta200305PassengerPriceAdjustmentType[]
     */
    public function getPassengerPriceAdjustment(): array
    {
        return $this->passengerPriceAdjustment;
    }

    /**
     * @param OrgOpentravelOta200305PassengerPriceAdjustmentType[] $passengerPriceAdjustment
     *
     * @return self
     */
    public function setPassengerPriceAdjustment(array $passengerPriceAdjustment): self
    {
        $this->passengerPriceAdjustment = $passengerPriceAdjustment;

        return $this;
    }

    /**
     * @return OrgOpentravelOta200305RoutingDefinitionType[]
     */
    public function getRouting(): array
    {
        return $this->routing;
    }

    /**
     * @param OrgOpentravelOta200305RoutingDefinitionType[] $routing
     *
     * @return self
     */
    public function setRouting(array $routing): self
    {
        $this->routing = $routing;

        return $this;
    }

    /**
     * @return OrgOpentravelOta200305ExchangeOriginDestinationInformationTypeSegmentType
     */
    public function getSegmentType(): OrgOpentravelOta200305ExchangeOriginDestinationInformationTypeSegmentType
    {
        return $this->segmentType;
    }

    /**
     * @param OrgOpentravelOta200305ExchangeOriginDestinationInformationTypeSegmentType $segmentType
     *
     * @return self
     */
    public function setSegmentType(OrgOpentravelOta200305ExchangeOriginDestinationInformationTypeSegmentType $segmentType): self
    {
        $this->segmentType = $segmentType;

        return $this;
    }

    /**
     * @return OrgOpentravelOta200305RequestSpecifiedLocationType[]
     */
    public function getSisterDestinationLocation(): array
    {
        return $this->sisterDestinationLocation;
    }

    /**
     * @param OrgOpentravelOta200305RequestSpecifiedLocationType[] $sisterDestinationLocation
     *
     * @return self
     */
    public function setSisterDestinationLocation(array $sisterDestinationLocation): self
    {
        $this->sisterDestinationLocation = $sisterDestinationLocation;

        return $this;
    }

    /**
     * @return OrgOpentravelOta200305ExchangeOriginDestinationInformationTypeSisterDestinationMileage
     */
    public function getSisterDestinationMileage(): OrgOpentravelOta200305ExchangeOriginDestinationInformationTypeSisterDestinationMileage
    {
        return $this->sisterDestinationMileage;
    }

    /**
     * @param OrgOpentravelOta200305ExchangeOriginDestinationInformationTypeSisterDestinationMileage $sisterDestinationMileage
     *
     * @return self
     */
    public function setSisterDestinationMileage(OrgOpentravelOta200305ExchangeOriginDestinationInformationTypeSisterDestinationMileage $sisterDestinationMileage): self
    {
        $this->sisterDestinationMileage = $sisterDestinationMileage;

        return $this;
    }

    /**
     * @return OrgOpentravelOta200305RequestSpecifiedLocationType[]
     */
    public function getSisterOriginLocation(): array
    {
        return $this->sisterOriginLocation;
    }

    /**
     * @param OrgOpentravelOta200305RequestSpecifiedLocationType[] $sisterOriginLocation
     *
     * @return self
     */
    public function setSisterOriginLocation(array $sisterOriginLocation): self
    {
        $this->sisterOriginLocation = $sisterOriginLocation;

        return $this;
    }

    /**
     * @return OrgOpentravelOta200305ExchangeOriginDestinationInformationTypeSisterOriginMileage
     */
    public function getSisterOriginMileage(): OrgOpentravelOta200305ExchangeOriginDestinationInformationTypeSisterOriginMileage
    {
        return $this->sisterOriginMileage;
    }

    /**
     * @param OrgOpentravelOta200305ExchangeOriginDestinationInformationTypeSisterOriginMileage $sisterOriginMileage
     *
     * @return self
     */
    public function setSisterOriginMileage(OrgOpentravelOta200305ExchangeOriginDestinationInformationTypeSisterOriginMileage $sisterOriginMileage): self
    {
        $this->sisterOriginMileage = $sisterOriginMileage;

        return $this;
    }

    /**
     * Requested stopover informations.
     *
     * @return OrgOpentravelOta200305StopoverType
     */
    public function getStopover(): OrgOpentravelOta200305StopoverType
    {
        return $this->stopover;
    }

    /**
     * Requested stopover informations.
     *
     * @param OrgOpentravelOta200305StopoverType $stopover
     *
     * @return self
     */
    public function setStopover(OrgOpentravelOta200305StopoverType $stopover): self
    {
        $this->stopover = $stopover;

        return $this;
    }

    /**
     * Total travel time settings.
     *
     * @return OrgOpentravelOta200305ExchangeOriginDestinationInformationTypeTotalTravelTime
     */
    public function getTotalTravelTime(): OrgOpentravelOta200305ExchangeOriginDestinationInformationTypeTotalTravelTime
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
    public function setTotalTravelTime(OrgOpentravelOta200305ExchangeOriginDestinationInformationTypeTotalTravelTime $totalTravelTime): self
    {
        $this->totalTravelTime = $totalTravelTime;

        return $this;
    }
}
