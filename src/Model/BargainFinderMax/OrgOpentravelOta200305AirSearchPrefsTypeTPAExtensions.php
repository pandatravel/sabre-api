<?php

namespace Ammonkc\SabreApi\Model\BargainFinderMax;

use Ammonkc\SabreApi\AbstractModel;

class OrgOpentravelOta200305AirSearchPrefsTypeTPAExtensions extends AbstractModel
{
    /**
     * @var OrgOpentravelOta200305AirSearchPrefsTypeTPAExtensionsAdditionalFareLimit
     */
    protected $additionalFareLimit;
    /**
     * Return air service only.
     *
     * @var OrgOpentravelOta200305AirSearchPrefsTypeTPAExtensionsAirServiceOnly
     */
    protected $airServiceOnly;
    /**
     * @var OrgOpentravelOta200305AirSearchPrefsTypeTPAExtensionsAircraftTypePenalty
     */
    protected $aircraftTypePenalty;
    /**
     * Which (if any) alt cities locations should be handled in a special way (i.e. Validate instead of precomputed path).
     *
     * @var OrgOpentravelOta200305AltCitiesCombinationsType
     */
    protected $altCitiesCombinations;
    /**
     * Alternate airport penalty (in dollars). Used to penalize options with alternate airports.
     *
     * @var OrgOpentravelOta200305AirSearchPrefsTypeTPAExtensionsAlternateAirportPenalty
     */
    protected $alternateAirportPenalty;
    /**
     * This should be of the form HHMMHHMM.
     *
     * @var string
     */
    protected $arrivalWindow;
    /**
     * Budget Shopping settings.
     *
     * @var OrgOpentravelOta200305AirSearchPrefsTypeTPAExtensionsBudget
     */
    protected $budget;
    /**
     * @var OrgOpentravelOta200305ClassOfServiceElemType[]
     */
    protected $classOfService;
    /**
     * @var OrgOpentravelOta200305CodeShareIndicator
     */
    protected $codeShareIndicator;
    /**
     * @var OrgOpentravelOta200305AirSearchPrefsTypeTPAExtensionsContentType
     */
    protected $contentType;
    /**
     * @var OrgOpentravelOta200305AirSearchPrefsTypeTPAExtensionsCountryPref[]
     */
    protected $countryPref;
    /**
     * @var OrgOpentravelOta200305AirSearchPrefsTypeTPAExtensionsDataSources
     */
    protected $dataSources;
    /**
     * This should be of the form HHMMHHMM.
     *
     * @var string
     */
    protected $departureWindow;
    /**
     * @var OrgOpentravelOta200305AirSearchPrefsTypeTPAExtensionsDiversityParameters
     */
    protected $diversityParameters;
    /**
     * Domestic maximum connecting hours.
     *
     * @var OrgOpentravelOta200305AirSearchPrefsTypeTPAExtensionsDomesticLayoverTime
     */
    protected $domesticLayoverTime;
    /**
     * @var OrgOpentravelOta200305AllianceType[]
     */
    protected $excludeAlliancePref;
    /**
     * @var OrgOpentravelOta200305AirSearchPrefsTypeTPAExtensionsExcludeCallDirectCarriers
     */
    protected $excludeCallDirectCarriers;
    /**
     * @var OrgOpentravelOta200305AirSearchPrefsTypeTPAExtensionsExcludeVendorPref[]
     */
    protected $excludeVendorPref;
    /**
     * Exempt all taxes (/TE).
     *
     * @var OrgOpentravelOta200305ExchangeTravelPreferencesTPAExtensionsTypeExemptAllTaxes
     */
    protected $exemptAllTaxes;
    /**
     * Exempt all taxes and fees (/TN).
     *
     * @var OrgOpentravelOta200305ExchangeTravelPreferencesTPAExtensionsTypeExemptAllTaxesAndFees
     */
    protected $exemptAllTaxesAndFees;
    /**
     * @var OrgOpentravelOta200305TaxCodeType[]
     */
    protected $exemptTax;
    /**
     * % ESV value above the lowest itinerary.
     *
     * @var OrgOpentravelOta200305AirSearchPrefsTypeTPAExtensionsFareAmountThreshold
     */
    protected $fareAmountThreshold;
    /**
     * @var OrgOpentravelOta200305FareBasisType[]
     */
    protected $fareBasis;
    /**
     * @var OrgOpentravelOta200305AirSearchPrefsTypeTPAExtensionsFareFocusRules
     */
    protected $fareFocusRules;
    /**
     * @var OrgOpentravelOta200305FareTypePrefType[]
     */
    protected $fareType;
    /**
     * @var OrgOpentravelOta200305FlexibleFaresType
     */
    protected $flexibleFares;
    /**
     * @var OrgOpentravelOta200305AirSearchPrefsTypeTPAExtensionsFlightRepeatLimit
     */
    protected $flightRepeatLimit;
    /**
     * @var OrgOpentravelOta200305AirSearchPrefsTypeTPAExtensionsFlightRestrictions
     */
    protected $flightRestrictions;
    /**
     * Treat all stops as connections.
     *
     * @var OrgOpentravelOta200305FlightStopsAsConnectionsType
     */
    protected $flightStopsAsConnections;
    /**
     * Fail request if keyword validation fails.
     *
     * @var OrgOpentravelOta200305AirSearchPrefsTypeTPAExtensionsForceKeywordRestrictedContent
     */
    protected $forceKeywordRestrictedContent;
    /**
     * @var OrgOpentravelOta200305GoverningCarrierOverrideType
     */
    protected $governingCarrierOverride;
    /**
     * @var OrgOpentravelOta200305AllianceType[]
     */
    protected $includeAlliancePref;
    /**
     * @var OrgOpentravelOta200305AirSearchPrefsTypeTPAExtensionsInterlineIndicator
     */
    protected $interlineIndicator;
    /**
     * Number of preffered/good itins to price.
     *
     * @var OrgOpentravelOta200305AirSearchPrefsTypeTPAExtensionsItineraryNumberThreshold
     */
    protected $itineraryNumberThreshold;
    /**
     * Return jet service only.
     *
     * @var OrgOpentravelOta200305AirSearchPrefsTypeTPAExtensionsJetServiceOnly
     */
    protected $jetServiceOnly;
    /**
     * @var OrgOpentravelOta200305JumpCabinLogicType
     */
    protected $jumpCabinLogic;
    /**
     * @var OrgOpentravelOta200305KeepSameCabinType
     */
    protected $keepSameCabin;
    /**
     * Minimum and maximum number of connection points (not necessarily long) for Long Connections.
     *
     * @var OrgOpentravelOta200305AirSearchPrefsTypeTPAExtensionsLongConnectPoints
     */
    protected $longConnectPoints;
    /**
     * Change minimum and maximum connect time per connection in long connection schedules, specify number or percentage of requested solutions if Long Connect Time logic is enabled. Time values should be less than 1440 minutes (24 hours). If percentage is specified, % symbol should be added after the number, otherwise exact number of solutions should be provided.
     *
     * @var OrgOpentravelOta200305AirSearchPrefsTypeTPAExtensionsLongConnectTime
     */
    protected $longConnectTime;
    /**
     * @var OrgOpentravelOta200305AirSearchPrefsTypeTPAExtensionsLowCostCarriersProcessing
     */
    protected $lowCostCarriersProcessing;
    /**
     * Maximum price returned from LFE service.
     *
     * @var OrgOpentravelOta200305AirSearchPrefsTypeTPAExtensionsMaxPrice
     */
    protected $maxPrice;
    /**
     * Settings specific to Multi Airport Codes processing.
     *
     * @var OrgOpentravelOta200305AirSearchPrefsTypeTPAExtensionsMultiAirportCodes
     */
    protected $multiAirportCodes;
    /**
     * This element allows a user to specify the number of itineraries returned.
     *
     * @var OrgOpentravelOta200305NumTripsType
     */
    protected $numTrips;
    /**
     * This element allows a user to specify the number of itineraries with special routing returned.
     *
     * @var OrgOpentravelOta200305AirSearchPrefsTypeTPAExtensionsNumTripsWithRouting
     */
    protected $numTripsWithRouting;
    /**
     * @var OrgOpentravelOta200305AirSearchPrefsTypeTPAExtensionsOnlineIndicator
     */
    protected $onlineIndicator;
    /**
     * List of dates/date pairs with different requested number of options.
     *
     * @var OrgOpentravelOta200305AirSearchPrefsTypeTPAExtensionsOptionsPerDatePairList
     */
    protected $optionsPerDatePairList;
    /**
     * @var OrgOpentravelOta200305AirSearchPrefsTypeTPAExtensionsPreferNDCSourceOnTie
     */
    protected $preferNDCSourceOnTie;
    /**
     * @var OrgOpentravelOta200305RetailerRulesType
     */
    protected $retailerRules;
    /**
     * Same airport at connection point restriction.
     *
     * @var OrgOpentravelOta200305AirSearchPrefsTypeTPAExtensionsSameConnectionAirportOnly
     */
    protected $sameConnectionAirportOnly;
    /**
     * Same airport at origin point restriction.
     *
     * @var OrgOpentravelOta200305AirSearchPrefsTypeTPAExtensionsSameOriginAirportOnly
     */
    protected $sameOriginAirportOnly;
    /**
     * Same airport at turnaround point restriction.
     *
     * @var OrgOpentravelOta200305AirSearchPrefsTypeTPAExtensionsSameTurnaroundAirportOnly
     */
    protected $sameTurnaroundAirportOnly;
    /**
     * @var OrgOpentravelOta200305AirSearchPrefsTypeTPAExtensionsSellingLevels
     */
    protected $sellingLevels;
    /**
     * Overrides settlement method Supported codes: BSP ARC TCH GEN (Generic TAT) RUT (Russian TAT) PRT (Philippines TAT) SAT (SATA) KRY (Killroy).
     *
     * @var string
     */
    protected $settlementMethod;
    /**
     * Specify Taxes (/TX).
     *
     * @var OrgOpentravelOta200305ExchangeTravelPreferencesTPAExtensionsTypeTaxes
     */
    protected $taxes;
    /**
     * Settings specific to Ticketing Sum of Locals processing.
     *
     * @var OrgOpentravelOta200305AirSearchPrefsTypeTPAExtensionsTicketingSumOfLocals
     */
    protected $ticketingSumOfLocals;
    /**
     * @var OrgOpentravelOta200305AirSearchPrefsTypeTPAExtensionsTripType
     */
    protected $tripType;
    /**
     * @var OrgOpentravelOta200305ValidatingCarrierType
     */
    protected $validatingCarrier;
    /**
     * @var OrgOpentravelOta200305AirSearchPrefsTypeTPAExtensionsValidatingCarrierCheck
     */
    protected $validatingCarrierCheck;
    /**
     * @var OrgOpentravelOta200305AirSearchPrefsTypeTPAExtensionsVerificationItinCallLogic
     */
    protected $verificationItinCallLogic;
    /**
     * Indicator for whether to return only fares with a passenger type the same as the passenger type specified in the request.
     *
     * @var OrgOpentravelOta200305XOFaresType
     */
    protected $xOFares;
    /**
     * AVS penalty carrier list (| delimited) for ESV2.
     *
     * @var OrgOpentravelOta200305AirSearchPrefsTypeTPAExtensionsAvsPenaltyCrrs
     */
    protected $avsPenaltyCrrs;
    /**
     * Departure penalty in dollars for ESV2.
     *
     * @var OrgOpentravelOta200305AirSearchPrefsTypeTPAExtensionsDepPenaltyInUSD
     */
    protected $depPenaltyInUSD;
    /**
     * Duration penalty in dollars for ESV2.
     *
     * @var OrgOpentravelOta200305AirSearchPrefsTypeTPAExtensionsDurPenaltyInUSD
     */
    protected $durPenaltyInUSD;
    /**
     * Low fare search flight option reuse limit for AVS for ESV2.
     *
     * @var OrgOpentravelOta200305AirSearchPrefsTypeTPAExtensionsFltOptLFSReuseLimitForAVS
     */
    protected $fltOptLFSReuseLimitForAVS;
    /**
     * Low fare search flight option reuse limit for non AVS for ESV2.
     *
     * @var OrgOpentravelOta200305AirSearchPrefsTypeTPAExtensionsFltOptLFSReuseLimitForNonAVS
     */
    protected $fltOptLFSReuseLimitForNonAVS;
    /**
     * Flight option reuse limit (must price) for ESV2.
     *
     * @var OrgOpentravelOta200305AirSearchPrefsTypeTPAExtensionsFltOptMustPriceReuseLimit
     */
    protected $fltOptMustPriceReuseLimit;
    /**
     * Low fare search max allowed overage per carrier % for ESV2.
     *
     * @var OrgOpentravelOta200305AirSearchPrefsTypeTPAExtensionsMaxAllowedLFSOveragePerCrrPercent
     */
    protected $maxAllowedLFSOveragePerCrrPercent;
    /**
     * Max allowed must price overage per carrier for ESV2.
     *
     * @var OrgOpentravelOta200305AirSearchPrefsTypeTPAExtensionsMaxAllowedMustPriceOveragePerCrr
     */
    protected $maxAllowedMustPriceOveragePerCrr;
    /**
     * Max number of 2+ stops solutions for ESV2.
     *
     * @var OrgOpentravelOta200305AirSearchPrefsTypeTPAExtensionsMaxNumOf2PlusStpSol
     */
    protected $maxNumOf2PlusStpSol;
    /**
     * Max number of nonstop interline solutions for ESV2.
     *
     * @var OrgOpentravelOta200305AirSearchPrefsTypeTPAExtensionsMaxNumOfNonStpInrlSol
     */
    protected $maxNumOfNonStpInrlSol;
    /**
     * Max number of nonstop online solutions for ESV2.
     *
     * @var OrgOpentravelOta200305AirSearchPrefsTypeTPAExtensionsMaxNumOfNonStpOnlSol
     */
    protected $maxNumOfNonStpOnlSol;
    /**
     * Max number of single stop online solutions for ESV2.
     *
     * @var OrgOpentravelOta200305AirSearchPrefsTypeTPAExtensionsMaxNumOfSingleStpOnlSol
     */
    protected $maxNumOfSingleStpOnlSol;
    /**
     * Max relative fare level of x for carrier for ESV2.
     *
     * @var OrgOpentravelOta200305AirSearchPrefsTypeTPAExtensionsMaxRelFareLvlOfxForCnx
     */
    protected $maxRelFareLvlOfxForCnx;
    /**
     * Max relative fare level of x for nonstops for ESV2.
     *
     * @var OrgOpentravelOta200305AirSearchPrefsTypeTPAExtensionsMaxRelFareLvlOfxForNonStp
     */
    protected $maxRelFareLvlOfxForNonStp;
    /**
     * Min allowed overage per carrier for ESV2.
     *
     * @var OrgOpentravelOta200305AirSearchPrefsTypeTPAExtensionsMinAllowedOveragePerCrr
     */
    protected $minAllowedOveragePerCrr;
    /**
     * Min allowed overage per carrier % for ESV2.
     *
     * @var OrgOpentravelOta200305AirSearchPrefsTypeTPAExtensionsMinAllowedOveragePerCrrPercent
     */
    protected $minAllowedOveragePerCrrPercent;
    /**
     * Number of low fare solutions for ESV2.
     *
     * @var OrgOpentravelOta200305AirSearchPrefsTypeTPAExtensionsNumOfLowFareSol
     */
    protected $numOfLowFareSol;
    /**
     * Number of must price 2+ stops solutions for ESV2.
     *
     * @var OrgOpentravelOta200305AirSearchPrefsTypeTPAExtensionsNumOfMustPrice2PlusStpSol
     */
    protected $numOfMustPrice2PlusStpSol;
    /**
     * Number of must price interline solutions for ESV2.
     *
     * @var OrgOpentravelOta200305AirSearchPrefsTypeTPAExtensionsNumOfMustPriceInrlSol
     */
    protected $numOfMustPriceInrlSol;
    /**
     * Number of must price non-stop/one-stop interline solutions for ESV2.
     *
     * @var OrgOpentravelOta200305AirSearchPrefsTypeTPAExtensionsNumOfMustPriceNStp1StpInrlSol
     */
    protected $numOfMustPriceNStp1StpInrlSol;
    /**
     * Number of must price non-stop/one-stop online solutions for ESV2.
     *
     * @var OrgOpentravelOta200305AirSearchPrefsTypeTPAExtensionsNumOfMustPriceNStp1StpOnlSol
     */
    protected $numOfMustPriceNStp1StpOnlSol;
    /**
     * Number of must price non-stop interline solutions for ESV2.
     *
     * @var OrgOpentravelOta200305AirSearchPrefsTypeTPAExtensionsNumOfMustPriceNStpInrlSol
     */
    protected $numOfMustPriceNStpInrlSol;
    /**
     * Number of must price non-stop online solutions for ESV2.
     *
     * @var OrgOpentravelOta200305AirSearchPrefsTypeTPAExtensionsNumOfMustPriceNStpOnlSol
     */
    protected $numOfMustPriceNStpOnlSol;
    /**
     * Number of must price online solutions for ESV2.
     *
     * @var OrgOpentravelOta200305AirSearchPrefsTypeTPAExtensionsNumOfMustPriceOnlSol
     */
    protected $numOfMustPriceOnlSol;
    /**
     * Number of must price single stop online solutions for ESV2.
     *
     * @var OrgOpentravelOta200305AirSearchPrefsTypeTPAExtensionsNumOfMustPriceSStopOnlSol
     */
    protected $numOfMustPriceSStopOnlSol;
    /**
     * Stop penalty in dollars for ESV2.
     *
     * @var OrgOpentravelOta200305AirSearchPrefsTypeTPAExtensionsStpPenaltyInUSD
     */
    protected $stpPenaltyInUSD;
    /**
     * Low fare search target minimum number of online solutions per carrier for ESV2.
     *
     * @var OrgOpentravelOta200305AirSearchPrefsTypeTPAExtensionsTargetMinNumOfLFSOnlSolPerCrr
     */
    protected $targetMinNumOfLFSOnlSolPerCrr;
    /**
     * Low fare search target minimum number of total online solutions % for ESV2.
     *
     * @var OrgOpentravelOta200305AirSearchPrefsTypeTPAExtensionsTargetMinNumOfLFSTotOnlSolPercent
     */
    protected $targetMinNumOfLFSTotOnlSolPercent;
    /**
     * Low fare search upper bound factor for ESV2.
     *
     * @var OrgOpentravelOta200305AirSearchPrefsTypeTPAExtensionsUpperBoundLFSFactor
     */
    protected $upperBoundLFSFactor;
    /**
     * Upper bound factor for non-stops (must price) for ESV2.
     *
     * @var OrgOpentravelOta200305AirSearchPrefsTypeTPAExtensionsUpperBoundMustPriceFactorForNonStp
     */
    protected $upperBoundMustPriceFactorForNonStp;
    /**
     * Upper bound factor for not non-stops (must price) for ESV2.
     *
     * @var OrgOpentravelOta200305AirSearchPrefsTypeTPAExtensionsUpperBoundMustPriceFactorForNotNonStp
     */
    protected $upperBoundMustPriceFactorForNotNonStp;

    /**
     * @return OrgOpentravelOta200305AirSearchPrefsTypeTPAExtensionsAdditionalFareLimit
     */
    public function getAdditionalFareLimit(): ?OrgOpentravelOta200305AirSearchPrefsTypeTPAExtensionsAdditionalFareLimit
    {
        return $this->additionalFareLimit;
    }

    /**
     * @param OrgOpentravelOta200305AirSearchPrefsTypeTPAExtensionsAdditionalFareLimit $additionalFareLimit
     *
     * @return self
     */
    public function setAdditionalFareLimit(?OrgOpentravelOta200305AirSearchPrefsTypeTPAExtensionsAdditionalFareLimit $additionalFareLimit): self
    {
        $this->additionalFareLimit = $additionalFareLimit;

        return $this;
    }

    /**
     * Return air service only.
     *
     * @return OrgOpentravelOta200305AirSearchPrefsTypeTPAExtensionsAirServiceOnly
     */
    public function getAirServiceOnly(): ?OrgOpentravelOta200305AirSearchPrefsTypeTPAExtensionsAirServiceOnly
    {
        return $this->airServiceOnly;
    }

    /**
     * Return air service only.
     *
     * @param OrgOpentravelOta200305AirSearchPrefsTypeTPAExtensionsAirServiceOnly $airServiceOnly
     *
     * @return self
     */
    public function setAirServiceOnly(?OrgOpentravelOta200305AirSearchPrefsTypeTPAExtensionsAirServiceOnly $airServiceOnly): self
    {
        $this->airServiceOnly = $airServiceOnly;

        return $this;
    }

    /**
     * @return OrgOpentravelOta200305AirSearchPrefsTypeTPAExtensionsAircraftTypePenalty
     */
    public function getAircraftTypePenalty(): ?OrgOpentravelOta200305AirSearchPrefsTypeTPAExtensionsAircraftTypePenalty
    {
        return $this->aircraftTypePenalty;
    }

    /**
     * @param OrgOpentravelOta200305AirSearchPrefsTypeTPAExtensionsAircraftTypePenalty $aircraftTypePenalty
     *
     * @return self
     */
    public function setAircraftTypePenalty(?OrgOpentravelOta200305AirSearchPrefsTypeTPAExtensionsAircraftTypePenalty $aircraftTypePenalty): self
    {
        $this->aircraftTypePenalty = $aircraftTypePenalty;

        return $this;
    }

    /**
     * Which (if any) alt cities locations should be handled in a special way (i.e. Validate instead of precomputed path).
     *
     * @return OrgOpentravelOta200305AltCitiesCombinationsType
     */
    public function getAltCitiesCombinations(): ?OrgOpentravelOta200305AltCitiesCombinationsType
    {
        return $this->altCitiesCombinations;
    }

    /**
     * Which (if any) alt cities locations should be handled in a special way (i.e. Validate instead of precomputed path).
     *
     * @param OrgOpentravelOta200305AltCitiesCombinationsType $altCitiesCombinations
     *
     * @return self
     */
    public function setAltCitiesCombinations(?OrgOpentravelOta200305AltCitiesCombinationsType $altCitiesCombinations): self
    {
        $this->altCitiesCombinations = $altCitiesCombinations;

        return $this;
    }

    /**
     * Alternate airport penalty (in dollars). Used to penalize options with alternate airports.
     *
     * @return OrgOpentravelOta200305AirSearchPrefsTypeTPAExtensionsAlternateAirportPenalty
     */
    public function getAlternateAirportPenalty(): ?OrgOpentravelOta200305AirSearchPrefsTypeTPAExtensionsAlternateAirportPenalty
    {
        return $this->alternateAirportPenalty;
    }

    /**
     * Alternate airport penalty (in dollars). Used to penalize options with alternate airports.
     *
     * @param OrgOpentravelOta200305AirSearchPrefsTypeTPAExtensionsAlternateAirportPenalty $alternateAirportPenalty
     *
     * @return self
     */
    public function setAlternateAirportPenalty(?OrgOpentravelOta200305AirSearchPrefsTypeTPAExtensionsAlternateAirportPenalty $alternateAirportPenalty): self
    {
        $this->alternateAirportPenalty = $alternateAirportPenalty;

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
     * Budget Shopping settings.
     *
     * @return OrgOpentravelOta200305AirSearchPrefsTypeTPAExtensionsBudget
     */
    public function getBudget(): ?OrgOpentravelOta200305AirSearchPrefsTypeTPAExtensionsBudget
    {
        return $this->budget;
    }

    /**
     * Budget Shopping settings.
     *
     * @param OrgOpentravelOta200305AirSearchPrefsTypeTPAExtensionsBudget $budget
     *
     * @return self
     */
    public function setBudget(?OrgOpentravelOta200305AirSearchPrefsTypeTPAExtensionsBudget $budget): self
    {
        $this->budget = $budget;

        return $this;
    }

    /**
     * @return OrgOpentravelOta200305ClassOfServiceElemType[]
     */
    public function getClassOfService(): ?array
    {
        return $this->classOfService;
    }

    /**
     * @param OrgOpentravelOta200305ClassOfServiceElemType[] $classOfService
     *
     * @return self
     */
    public function setClassOfService(?array $classOfService): self
    {
        $this->classOfService = $classOfService;

        return $this;
    }

    /**
     * @return OrgOpentravelOta200305CodeShareIndicator
     */
    public function getCodeShareIndicator(): ?OrgOpentravelOta200305CodeShareIndicator
    {
        return $this->codeShareIndicator;
    }

    /**
     * @param OrgOpentravelOta200305CodeShareIndicator $codeShareIndicator
     *
     * @return self
     */
    public function setCodeShareIndicator(?OrgOpentravelOta200305CodeShareIndicator $codeShareIndicator): self
    {
        $this->codeShareIndicator = $codeShareIndicator;

        return $this;
    }

    /**
     * @return OrgOpentravelOta200305AirSearchPrefsTypeTPAExtensionsContentType
     */
    public function getContentType(): ?OrgOpentravelOta200305AirSearchPrefsTypeTPAExtensionsContentType
    {
        return $this->contentType;
    }

    /**
     * @param OrgOpentravelOta200305AirSearchPrefsTypeTPAExtensionsContentType $contentType
     *
     * @return self
     */
    public function setContentType(?OrgOpentravelOta200305AirSearchPrefsTypeTPAExtensionsContentType $contentType): self
    {
        $this->contentType = $contentType;

        return $this;
    }

    /**
     * @return OrgOpentravelOta200305AirSearchPrefsTypeTPAExtensionsCountryPref[]
     */
    public function getCountryPref(): ?array
    {
        return $this->countryPref;
    }

    /**
     * @param OrgOpentravelOta200305AirSearchPrefsTypeTPAExtensionsCountryPref[] $countryPref
     *
     * @return self
     */
    public function setCountryPref(?array $countryPref): self
    {
        $this->countryPref = $countryPref;

        return $this;
    }

    /**
     * @return OrgOpentravelOta200305AirSearchPrefsTypeTPAExtensionsDataSources
     */
    public function getDataSources(): ?OrgOpentravelOta200305AirSearchPrefsTypeTPAExtensionsDataSources
    {
        return $this->dataSources;
    }

    /**
     * @param OrgOpentravelOta200305AirSearchPrefsTypeTPAExtensionsDataSources $dataSources
     *
     * @return self
     */
    public function setDataSources(?OrgOpentravelOta200305AirSearchPrefsTypeTPAExtensionsDataSources $dataSources): self
    {
        $this->dataSources = $dataSources;

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
     * @return OrgOpentravelOta200305AirSearchPrefsTypeTPAExtensionsDiversityParameters
     */
    public function getDiversityParameters(): ?OrgOpentravelOta200305AirSearchPrefsTypeTPAExtensionsDiversityParameters
    {
        return $this->diversityParameters;
    }

    /**
     * @param OrgOpentravelOta200305AirSearchPrefsTypeTPAExtensionsDiversityParameters $diversityParameters
     *
     * @return self
     */
    public function setDiversityParameters(?OrgOpentravelOta200305AirSearchPrefsTypeTPAExtensionsDiversityParameters $diversityParameters): self
    {
        $this->diversityParameters = $diversityParameters;

        return $this;
    }

    /**
     * Domestic maximum connecting hours.
     *
     * @return OrgOpentravelOta200305AirSearchPrefsTypeTPAExtensionsDomesticLayoverTime
     */
    public function getDomesticLayoverTime(): ?OrgOpentravelOta200305AirSearchPrefsTypeTPAExtensionsDomesticLayoverTime
    {
        return $this->domesticLayoverTime;
    }

    /**
     * Domestic maximum connecting hours.
     *
     * @param OrgOpentravelOta200305AirSearchPrefsTypeTPAExtensionsDomesticLayoverTime $domesticLayoverTime
     *
     * @return self
     */
    public function setDomesticLayoverTime(?OrgOpentravelOta200305AirSearchPrefsTypeTPAExtensionsDomesticLayoverTime $domesticLayoverTime): self
    {
        $this->domesticLayoverTime = $domesticLayoverTime;

        return $this;
    }

    /**
     * @return OrgOpentravelOta200305AllianceType[]
     */
    public function getExcludeAlliancePref(): ?array
    {
        return $this->excludeAlliancePref;
    }

    /**
     * @param OrgOpentravelOta200305AllianceType[] $excludeAlliancePref
     *
     * @return self
     */
    public function setExcludeAlliancePref(?array $excludeAlliancePref): self
    {
        $this->excludeAlliancePref = $excludeAlliancePref;

        return $this;
    }

    /**
     * @return OrgOpentravelOta200305AirSearchPrefsTypeTPAExtensionsExcludeCallDirectCarriers
     */
    public function getExcludeCallDirectCarriers(): ?OrgOpentravelOta200305AirSearchPrefsTypeTPAExtensionsExcludeCallDirectCarriers
    {
        return $this->excludeCallDirectCarriers;
    }

    /**
     * @param OrgOpentravelOta200305AirSearchPrefsTypeTPAExtensionsExcludeCallDirectCarriers $excludeCallDirectCarriers
     *
     * @return self
     */
    public function setExcludeCallDirectCarriers(?OrgOpentravelOta200305AirSearchPrefsTypeTPAExtensionsExcludeCallDirectCarriers $excludeCallDirectCarriers): self
    {
        $this->excludeCallDirectCarriers = $excludeCallDirectCarriers;

        return $this;
    }

    /**
     * @return OrgOpentravelOta200305AirSearchPrefsTypeTPAExtensionsExcludeVendorPref[]
     */
    public function getExcludeVendorPref(): ?array
    {
        return $this->excludeVendorPref;
    }

    /**
     * @param OrgOpentravelOta200305AirSearchPrefsTypeTPAExtensionsExcludeVendorPref[] $excludeVendorPref
     *
     * @return self
     */
    public function setExcludeVendorPref(?array $excludeVendorPref): self
    {
        $this->excludeVendorPref = $excludeVendorPref;

        return $this;
    }

    /**
     * Exempt all taxes (/TE).
     *
     * @return OrgOpentravelOta200305ExchangeTravelPreferencesTPAExtensionsTypeExemptAllTaxes
     */
    public function getExemptAllTaxes(): ?OrgOpentravelOta200305ExchangeTravelPreferencesTPAExtensionsTypeExemptAllTaxes
    {
        return $this->exemptAllTaxes;
    }

    /**
     * Exempt all taxes (/TE).
     *
     * @param OrgOpentravelOta200305ExchangeTravelPreferencesTPAExtensionsTypeExemptAllTaxes $exemptAllTaxes
     *
     * @return self
     */
    public function setExemptAllTaxes(?OrgOpentravelOta200305ExchangeTravelPreferencesTPAExtensionsTypeExemptAllTaxes $exemptAllTaxes): self
    {
        $this->exemptAllTaxes = $exemptAllTaxes;

        return $this;
    }

    /**
     * Exempt all taxes and fees (/TN).
     *
     * @return OrgOpentravelOta200305ExchangeTravelPreferencesTPAExtensionsTypeExemptAllTaxesAndFees
     */
    public function getExemptAllTaxesAndFees(): ?OrgOpentravelOta200305ExchangeTravelPreferencesTPAExtensionsTypeExemptAllTaxesAndFees
    {
        return $this->exemptAllTaxesAndFees;
    }

    /**
     * Exempt all taxes and fees (/TN).
     *
     * @param OrgOpentravelOta200305ExchangeTravelPreferencesTPAExtensionsTypeExemptAllTaxesAndFees $exemptAllTaxesAndFees
     *
     * @return self
     */
    public function setExemptAllTaxesAndFees(?OrgOpentravelOta200305ExchangeTravelPreferencesTPAExtensionsTypeExemptAllTaxesAndFees $exemptAllTaxesAndFees): self
    {
        $this->exemptAllTaxesAndFees = $exemptAllTaxesAndFees;

        return $this;
    }

    /**
     * @return OrgOpentravelOta200305TaxCodeType[]
     */
    public function getExemptTax(): ?array
    {
        return $this->exemptTax;
    }

    /**
     * @param OrgOpentravelOta200305TaxCodeType[] $exemptTax
     *
     * @return self
     */
    public function setExemptTax(?array $exemptTax): self
    {
        $this->exemptTax = $exemptTax;

        return $this;
    }

    /**
     * % ESV value above the lowest itinerary.
     *
     * @return OrgOpentravelOta200305AirSearchPrefsTypeTPAExtensionsFareAmountThreshold
     */
    public function getFareAmountThreshold(): ?OrgOpentravelOta200305AirSearchPrefsTypeTPAExtensionsFareAmountThreshold
    {
        return $this->fareAmountThreshold;
    }

    /**
     * % ESV value above the lowest itinerary.
     *
     * @param OrgOpentravelOta200305AirSearchPrefsTypeTPAExtensionsFareAmountThreshold $fareAmountThreshold
     *
     * @return self
     */
    public function setFareAmountThreshold(?OrgOpentravelOta200305AirSearchPrefsTypeTPAExtensionsFareAmountThreshold $fareAmountThreshold): self
    {
        $this->fareAmountThreshold = $fareAmountThreshold;

        return $this;
    }

    /**
     * @return OrgOpentravelOta200305FareBasisType[]
     */
    public function getFareBasis(): ?array
    {
        return $this->fareBasis;
    }

    /**
     * @param OrgOpentravelOta200305FareBasisType[] $fareBasis
     *
     * @return self
     */
    public function setFareBasis(?array $fareBasis): self
    {
        $this->fareBasis = $fareBasis;

        return $this;
    }

    /**
     * @return OrgOpentravelOta200305AirSearchPrefsTypeTPAExtensionsFareFocusRules
     */
    public function getFareFocusRules(): ?OrgOpentravelOta200305AirSearchPrefsTypeTPAExtensionsFareFocusRules
    {
        return $this->fareFocusRules;
    }

    /**
     * @param OrgOpentravelOta200305AirSearchPrefsTypeTPAExtensionsFareFocusRules $fareFocusRules
     *
     * @return self
     */
    public function setFareFocusRules(?OrgOpentravelOta200305AirSearchPrefsTypeTPAExtensionsFareFocusRules $fareFocusRules): self
    {
        $this->fareFocusRules = $fareFocusRules;

        return $this;
    }

    /**
     * @return OrgOpentravelOta200305FareTypePrefType[]
     */
    public function getFareType(): ?array
    {
        return $this->fareType;
    }

    /**
     * @param OrgOpentravelOta200305FareTypePrefType[] $fareType
     *
     * @return self
     */
    public function setFareType(?array $fareType): self
    {
        $this->fareType = $fareType;

        return $this;
    }

    /**
     * @return OrgOpentravelOta200305FlexibleFaresType
     */
    public function getFlexibleFares(): ?OrgOpentravelOta200305FlexibleFaresType
    {
        return $this->flexibleFares;
    }

    /**
     * @param OrgOpentravelOta200305FlexibleFaresType $flexibleFares
     *
     * @return self
     */
    public function setFlexibleFares(?OrgOpentravelOta200305FlexibleFaresType $flexibleFares): self
    {
        $this->flexibleFares = $flexibleFares;

        return $this;
    }

    /**
     * @return OrgOpentravelOta200305AirSearchPrefsTypeTPAExtensionsFlightRepeatLimit
     */
    public function getFlightRepeatLimit(): ?OrgOpentravelOta200305AirSearchPrefsTypeTPAExtensionsFlightRepeatLimit
    {
        return $this->flightRepeatLimit;
    }

    /**
     * @param OrgOpentravelOta200305AirSearchPrefsTypeTPAExtensionsFlightRepeatLimit $flightRepeatLimit
     *
     * @return self
     */
    public function setFlightRepeatLimit(?OrgOpentravelOta200305AirSearchPrefsTypeTPAExtensionsFlightRepeatLimit $flightRepeatLimit): self
    {
        $this->flightRepeatLimit = $flightRepeatLimit;

        return $this;
    }

    /**
     * @return OrgOpentravelOta200305AirSearchPrefsTypeTPAExtensionsFlightRestrictions
     */
    public function getFlightRestrictions(): ?OrgOpentravelOta200305AirSearchPrefsTypeTPAExtensionsFlightRestrictions
    {
        return $this->flightRestrictions;
    }

    /**
     * @param OrgOpentravelOta200305AirSearchPrefsTypeTPAExtensionsFlightRestrictions $flightRestrictions
     *
     * @return self
     */
    public function setFlightRestrictions(?OrgOpentravelOta200305AirSearchPrefsTypeTPAExtensionsFlightRestrictions $flightRestrictions): self
    {
        $this->flightRestrictions = $flightRestrictions;

        return $this;
    }

    /**
     * Treat all stops as connections.
     *
     * @return OrgOpentravelOta200305FlightStopsAsConnectionsType
     */
    public function getFlightStopsAsConnections(): ?OrgOpentravelOta200305FlightStopsAsConnectionsType
    {
        return $this->flightStopsAsConnections;
    }

    /**
     * Treat all stops as connections.
     *
     * @param OrgOpentravelOta200305FlightStopsAsConnectionsType $flightStopsAsConnections
     *
     * @return self
     */
    public function setFlightStopsAsConnections(?OrgOpentravelOta200305FlightStopsAsConnectionsType $flightStopsAsConnections): self
    {
        $this->flightStopsAsConnections = $flightStopsAsConnections;

        return $this;
    }

    /**
     * Fail request if keyword validation fails.
     *
     * @return OrgOpentravelOta200305AirSearchPrefsTypeTPAExtensionsForceKeywordRestrictedContent
     */
    public function getForceKeywordRestrictedContent(): ?OrgOpentravelOta200305AirSearchPrefsTypeTPAExtensionsForceKeywordRestrictedContent
    {
        return $this->forceKeywordRestrictedContent;
    }

    /**
     * Fail request if keyword validation fails.
     *
     * @param OrgOpentravelOta200305AirSearchPrefsTypeTPAExtensionsForceKeywordRestrictedContent $forceKeywordRestrictedContent
     *
     * @return self
     */
    public function setForceKeywordRestrictedContent(?OrgOpentravelOta200305AirSearchPrefsTypeTPAExtensionsForceKeywordRestrictedContent $forceKeywordRestrictedContent): self
    {
        $this->forceKeywordRestrictedContent = $forceKeywordRestrictedContent;

        return $this;
    }

    /**
     * @return OrgOpentravelOta200305GoverningCarrierOverrideType
     */
    public function getGoverningCarrierOverride(): ?OrgOpentravelOta200305GoverningCarrierOverrideType
    {
        return $this->governingCarrierOverride;
    }

    /**
     * @param OrgOpentravelOta200305GoverningCarrierOverrideType $governingCarrierOverride
     *
     * @return self
     */
    public function setGoverningCarrierOverride(?OrgOpentravelOta200305GoverningCarrierOverrideType $governingCarrierOverride): self
    {
        $this->governingCarrierOverride = $governingCarrierOverride;

        return $this;
    }

    /**
     * @return OrgOpentravelOta200305AllianceType[]
     */
    public function getIncludeAlliancePref(): ?array
    {
        return $this->includeAlliancePref;
    }

    /**
     * @param OrgOpentravelOta200305AllianceType[] $includeAlliancePref
     *
     * @return self
     */
    public function setIncludeAlliancePref(?array $includeAlliancePref): self
    {
        $this->includeAlliancePref = $includeAlliancePref;

        return $this;
    }

    /**
     * @return OrgOpentravelOta200305AirSearchPrefsTypeTPAExtensionsInterlineIndicator
     */
    public function getInterlineIndicator(): ?OrgOpentravelOta200305AirSearchPrefsTypeTPAExtensionsInterlineIndicator
    {
        return $this->interlineIndicator;
    }

    /**
     * @param OrgOpentravelOta200305AirSearchPrefsTypeTPAExtensionsInterlineIndicator $interlineIndicator
     *
     * @return self
     */
    public function setInterlineIndicator(?OrgOpentravelOta200305AirSearchPrefsTypeTPAExtensionsInterlineIndicator $interlineIndicator): self
    {
        $this->interlineIndicator = $interlineIndicator;

        return $this;
    }

    /**
     * Number of preffered/good itins to price.
     *
     * @return OrgOpentravelOta200305AirSearchPrefsTypeTPAExtensionsItineraryNumberThreshold
     */
    public function getItineraryNumberThreshold(): ?OrgOpentravelOta200305AirSearchPrefsTypeTPAExtensionsItineraryNumberThreshold
    {
        return $this->itineraryNumberThreshold;
    }

    /**
     * Number of preffered/good itins to price.
     *
     * @param OrgOpentravelOta200305AirSearchPrefsTypeTPAExtensionsItineraryNumberThreshold $itineraryNumberThreshold
     *
     * @return self
     */
    public function setItineraryNumberThreshold(?OrgOpentravelOta200305AirSearchPrefsTypeTPAExtensionsItineraryNumberThreshold $itineraryNumberThreshold): self
    {
        $this->itineraryNumberThreshold = $itineraryNumberThreshold;

        return $this;
    }

    /**
     * Return jet service only.
     *
     * @return OrgOpentravelOta200305AirSearchPrefsTypeTPAExtensionsJetServiceOnly
     */
    public function getJetServiceOnly(): ?OrgOpentravelOta200305AirSearchPrefsTypeTPAExtensionsJetServiceOnly
    {
        return $this->jetServiceOnly;
    }

    /**
     * Return jet service only.
     *
     * @param OrgOpentravelOta200305AirSearchPrefsTypeTPAExtensionsJetServiceOnly $jetServiceOnly
     *
     * @return self
     */
    public function setJetServiceOnly(?OrgOpentravelOta200305AirSearchPrefsTypeTPAExtensionsJetServiceOnly $jetServiceOnly): self
    {
        $this->jetServiceOnly = $jetServiceOnly;

        return $this;
    }

    /**
     * @return OrgOpentravelOta200305JumpCabinLogicType
     */
    public function getJumpCabinLogic(): ?OrgOpentravelOta200305JumpCabinLogicType
    {
        return $this->jumpCabinLogic;
    }

    /**
     * @param OrgOpentravelOta200305JumpCabinLogicType $jumpCabinLogic
     *
     * @return self
     */
    public function setJumpCabinLogic(?OrgOpentravelOta200305JumpCabinLogicType $jumpCabinLogic): self
    {
        $this->jumpCabinLogic = $jumpCabinLogic;

        return $this;
    }

    /**
     * @return OrgOpentravelOta200305KeepSameCabinType
     */
    public function getKeepSameCabin(): ?OrgOpentravelOta200305KeepSameCabinType
    {
        return $this->keepSameCabin;
    }

    /**
     * @param OrgOpentravelOta200305KeepSameCabinType $keepSameCabin
     *
     * @return self
     */
    public function setKeepSameCabin(?OrgOpentravelOta200305KeepSameCabinType $keepSameCabin): self
    {
        $this->keepSameCabin = $keepSameCabin;

        return $this;
    }

    /**
     * Minimum and maximum number of connection points (not necessarily long) for Long Connections.
     *
     * @return OrgOpentravelOta200305AirSearchPrefsTypeTPAExtensionsLongConnectPoints
     */
    public function getLongConnectPoints(): ?OrgOpentravelOta200305AirSearchPrefsTypeTPAExtensionsLongConnectPoints
    {
        return $this->longConnectPoints;
    }

    /**
     * Minimum and maximum number of connection points (not necessarily long) for Long Connections.
     *
     * @param OrgOpentravelOta200305AirSearchPrefsTypeTPAExtensionsLongConnectPoints $longConnectPoints
     *
     * @return self
     */
    public function setLongConnectPoints(?OrgOpentravelOta200305AirSearchPrefsTypeTPAExtensionsLongConnectPoints $longConnectPoints): self
    {
        $this->longConnectPoints = $longConnectPoints;

        return $this;
    }

    /**
     * Change minimum and maximum connect time per connection in long connection schedules, specify number or percentage of requested solutions if Long Connect Time logic is enabled. Time values should be less than 1440 minutes (24 hours). If percentage is specified, % symbol should be added after the number, otherwise exact number of solutions should be provided.
     *
     * @return OrgOpentravelOta200305AirSearchPrefsTypeTPAExtensionsLongConnectTime
     */
    public function getLongConnectTime(): ?OrgOpentravelOta200305AirSearchPrefsTypeTPAExtensionsLongConnectTime
    {
        return $this->longConnectTime;
    }

    /**
     * Change minimum and maximum connect time per connection in long connection schedules, specify number or percentage of requested solutions if Long Connect Time logic is enabled. Time values should be less than 1440 minutes (24 hours). If percentage is specified, % symbol should be added after the number, otherwise exact number of solutions should be provided.
     *
     * @param OrgOpentravelOta200305AirSearchPrefsTypeTPAExtensionsLongConnectTime $longConnectTime
     *
     * @return self
     */
    public function setLongConnectTime(?OrgOpentravelOta200305AirSearchPrefsTypeTPAExtensionsLongConnectTime $longConnectTime): self
    {
        $this->longConnectTime = $longConnectTime;

        return $this;
    }

    /**
     * @return OrgOpentravelOta200305AirSearchPrefsTypeTPAExtensionsLowCostCarriersProcessing
     */
    public function getLowCostCarriersProcessing(): ?OrgOpentravelOta200305AirSearchPrefsTypeTPAExtensionsLowCostCarriersProcessing
    {
        return $this->lowCostCarriersProcessing;
    }

    /**
     * @param OrgOpentravelOta200305AirSearchPrefsTypeTPAExtensionsLowCostCarriersProcessing $lowCostCarriersProcessing
     *
     * @return self
     */
    public function setLowCostCarriersProcessing(?OrgOpentravelOta200305AirSearchPrefsTypeTPAExtensionsLowCostCarriersProcessing $lowCostCarriersProcessing): self
    {
        $this->lowCostCarriersProcessing = $lowCostCarriersProcessing;

        return $this;
    }

    /**
     * Maximum price returned from LFE service.
     *
     * @return OrgOpentravelOta200305AirSearchPrefsTypeTPAExtensionsMaxPrice
     */
    public function getMaxPrice(): ?OrgOpentravelOta200305AirSearchPrefsTypeTPAExtensionsMaxPrice
    {
        return $this->maxPrice;
    }

    /**
     * Maximum price returned from LFE service.
     *
     * @param OrgOpentravelOta200305AirSearchPrefsTypeTPAExtensionsMaxPrice $maxPrice
     *
     * @return self
     */
    public function setMaxPrice(?OrgOpentravelOta200305AirSearchPrefsTypeTPAExtensionsMaxPrice $maxPrice): self
    {
        $this->maxPrice = $maxPrice;

        return $this;
    }

    /**
     * Settings specific to Multi Airport Codes processing.
     *
     * @return OrgOpentravelOta200305AirSearchPrefsTypeTPAExtensionsMultiAirportCodes
     */
    public function getMultiAirportCodes(): ?OrgOpentravelOta200305AirSearchPrefsTypeTPAExtensionsMultiAirportCodes
    {
        return $this->multiAirportCodes;
    }

    /**
     * Settings specific to Multi Airport Codes processing.
     *
     * @param OrgOpentravelOta200305AirSearchPrefsTypeTPAExtensionsMultiAirportCodes $multiAirportCodes
     *
     * @return self
     */
    public function setMultiAirportCodes(?OrgOpentravelOta200305AirSearchPrefsTypeTPAExtensionsMultiAirportCodes $multiAirportCodes): self
    {
        $this->multiAirportCodes = $multiAirportCodes;

        return $this;
    }

    /**
     * This element allows a user to specify the number of itineraries returned.
     *
     * @return OrgOpentravelOta200305NumTripsType
     */
    public function getNumTrips(): ?OrgOpentravelOta200305NumTripsType
    {
        return $this->numTrips;
    }

    /**
     * This element allows a user to specify the number of itineraries returned.
     *
     * @param OrgOpentravelOta200305NumTripsType $numTrips
     *
     * @return self
     */
    public function setNumTrips(?OrgOpentravelOta200305NumTripsType $numTrips): self
    {
        $this->numTrips = $numTrips;

        return $this;
    }

    /**
     * This element allows a user to specify the number of itineraries with special routing returned.
     *
     * @return OrgOpentravelOta200305AirSearchPrefsTypeTPAExtensionsNumTripsWithRouting
     */
    public function getNumTripsWithRouting(): ?OrgOpentravelOta200305AirSearchPrefsTypeTPAExtensionsNumTripsWithRouting
    {
        return $this->numTripsWithRouting;
    }

    /**
     * This element allows a user to specify the number of itineraries with special routing returned.
     *
     * @param OrgOpentravelOta200305AirSearchPrefsTypeTPAExtensionsNumTripsWithRouting $numTripsWithRouting
     *
     * @return self
     */
    public function setNumTripsWithRouting(?OrgOpentravelOta200305AirSearchPrefsTypeTPAExtensionsNumTripsWithRouting $numTripsWithRouting): self
    {
        $this->numTripsWithRouting = $numTripsWithRouting;

        return $this;
    }

    /**
     * @return OrgOpentravelOta200305AirSearchPrefsTypeTPAExtensionsOnlineIndicator
     */
    public function getOnlineIndicator(): ?OrgOpentravelOta200305AirSearchPrefsTypeTPAExtensionsOnlineIndicator
    {
        return $this->onlineIndicator;
    }

    /**
     * @param OrgOpentravelOta200305AirSearchPrefsTypeTPAExtensionsOnlineIndicator $onlineIndicator
     *
     * @return self
     */
    public function setOnlineIndicator(?OrgOpentravelOta200305AirSearchPrefsTypeTPAExtensionsOnlineIndicator $onlineIndicator): self
    {
        $this->onlineIndicator = $onlineIndicator;

        return $this;
    }

    /**
     * List of dates/date pairs with different requested number of options.
     *
     * @return OrgOpentravelOta200305AirSearchPrefsTypeTPAExtensionsOptionsPerDatePairList
     */
    public function getOptionsPerDatePairList(): ?OrgOpentravelOta200305AirSearchPrefsTypeTPAExtensionsOptionsPerDatePairList
    {
        return $this->optionsPerDatePairList;
    }

    /**
     * List of dates/date pairs with different requested number of options.
     *
     * @param OrgOpentravelOta200305AirSearchPrefsTypeTPAExtensionsOptionsPerDatePairList $optionsPerDatePairList
     *
     * @return self
     */
    public function setOptionsPerDatePairList(?OrgOpentravelOta200305AirSearchPrefsTypeTPAExtensionsOptionsPerDatePairList $optionsPerDatePairList): self
    {
        $this->optionsPerDatePairList = $optionsPerDatePairList;

        return $this;
    }

    /**
     * @return OrgOpentravelOta200305AirSearchPrefsTypeTPAExtensionsPreferNDCSourceOnTie
     */
    public function getPreferNDCSourceOnTie(): ?OrgOpentravelOta200305AirSearchPrefsTypeTPAExtensionsPreferNDCSourceOnTie
    {
        return $this->preferNDCSourceOnTie;
    }

    /**
     * @param OrgOpentravelOta200305AirSearchPrefsTypeTPAExtensionsPreferNDCSourceOnTie $preferNDCSourceOnTie
     *
     * @return self
     */
    public function setPreferNDCSourceOnTie(?OrgOpentravelOta200305AirSearchPrefsTypeTPAExtensionsPreferNDCSourceOnTie $preferNDCSourceOnTie): self
    {
        $this->preferNDCSourceOnTie = $preferNDCSourceOnTie;

        return $this;
    }

    /**
     * @return OrgOpentravelOta200305RetailerRulesType
     */
    public function getRetailerRules(): ?OrgOpentravelOta200305RetailerRulesType
    {
        return $this->retailerRules;
    }

    /**
     * @param OrgOpentravelOta200305RetailerRulesType $retailerRules
     *
     * @return self
     */
    public function setRetailerRules(?OrgOpentravelOta200305RetailerRulesType $retailerRules): self
    {
        $this->retailerRules = $retailerRules;

        return $this;
    }

    /**
     * Same airport at connection point restriction.
     *
     * @return OrgOpentravelOta200305AirSearchPrefsTypeTPAExtensionsSameConnectionAirportOnly
     */
    public function getSameConnectionAirportOnly(): ?OrgOpentravelOta200305AirSearchPrefsTypeTPAExtensionsSameConnectionAirportOnly
    {
        return $this->sameConnectionAirportOnly;
    }

    /**
     * Same airport at connection point restriction.
     *
     * @param OrgOpentravelOta200305AirSearchPrefsTypeTPAExtensionsSameConnectionAirportOnly $sameConnectionAirportOnly
     *
     * @return self
     */
    public function setSameConnectionAirportOnly(?OrgOpentravelOta200305AirSearchPrefsTypeTPAExtensionsSameConnectionAirportOnly $sameConnectionAirportOnly): self
    {
        $this->sameConnectionAirportOnly = $sameConnectionAirportOnly;

        return $this;
    }

    /**
     * Same airport at origin point restriction.
     *
     * @return OrgOpentravelOta200305AirSearchPrefsTypeTPAExtensionsSameOriginAirportOnly
     */
    public function getSameOriginAirportOnly(): ?OrgOpentravelOta200305AirSearchPrefsTypeTPAExtensionsSameOriginAirportOnly
    {
        return $this->sameOriginAirportOnly;
    }

    /**
     * Same airport at origin point restriction.
     *
     * @param OrgOpentravelOta200305AirSearchPrefsTypeTPAExtensionsSameOriginAirportOnly $sameOriginAirportOnly
     *
     * @return self
     */
    public function setSameOriginAirportOnly(?OrgOpentravelOta200305AirSearchPrefsTypeTPAExtensionsSameOriginAirportOnly $sameOriginAirportOnly): self
    {
        $this->sameOriginAirportOnly = $sameOriginAirportOnly;

        return $this;
    }

    /**
     * Same airport at turnaround point restriction.
     *
     * @return OrgOpentravelOta200305AirSearchPrefsTypeTPAExtensionsSameTurnaroundAirportOnly
     */
    public function getSameTurnaroundAirportOnly(): ?OrgOpentravelOta200305AirSearchPrefsTypeTPAExtensionsSameTurnaroundAirportOnly
    {
        return $this->sameTurnaroundAirportOnly;
    }

    /**
     * Same airport at turnaround point restriction.
     *
     * @param OrgOpentravelOta200305AirSearchPrefsTypeTPAExtensionsSameTurnaroundAirportOnly $sameTurnaroundAirportOnly
     *
     * @return self
     */
    public function setSameTurnaroundAirportOnly(?OrgOpentravelOta200305AirSearchPrefsTypeTPAExtensionsSameTurnaroundAirportOnly $sameTurnaroundAirportOnly): self
    {
        $this->sameTurnaroundAirportOnly = $sameTurnaroundAirportOnly;

        return $this;
    }

    /**
     * @return OrgOpentravelOta200305AirSearchPrefsTypeTPAExtensionsSellingLevels
     */
    public function getSellingLevels(): ?OrgOpentravelOta200305AirSearchPrefsTypeTPAExtensionsSellingLevels
    {
        return $this->sellingLevels;
    }

    /**
     * @param OrgOpentravelOta200305AirSearchPrefsTypeTPAExtensionsSellingLevels $sellingLevels
     *
     * @return self
     */
    public function setSellingLevels(?OrgOpentravelOta200305AirSearchPrefsTypeTPAExtensionsSellingLevels $sellingLevels): self
    {
        $this->sellingLevels = $sellingLevels;

        return $this;
    }

    /**
     * Overrides settlement method Supported codes: BSP ARC TCH GEN (Generic TAT) RUT (Russian TAT) PRT (Philippines TAT) SAT (SATA) KRY (Killroy).
     *
     * @return string
     */
    public function getSettlementMethod(): ?string
    {
        return $this->settlementMethod;
    }

    /**
     * Overrides settlement method Supported codes: BSP ARC TCH GEN (Generic TAT) RUT (Russian TAT) PRT (Philippines TAT) SAT (SATA) KRY (Killroy).
     *
     * @param string $settlementMethod
     *
     * @return self
     */
    public function setSettlementMethod(?string $settlementMethod): self
    {
        $this->settlementMethod = $settlementMethod;

        return $this;
    }

    /**
     * Specify Taxes (/TX).
     *
     * @return OrgOpentravelOta200305ExchangeTravelPreferencesTPAExtensionsTypeTaxes
     */
    public function getTaxes(): ?OrgOpentravelOta200305ExchangeTravelPreferencesTPAExtensionsTypeTaxes
    {
        return $this->taxes;
    }

    /**
     * Specify Taxes (/TX).
     *
     * @param OrgOpentravelOta200305ExchangeTravelPreferencesTPAExtensionsTypeTaxes $taxes
     *
     * @return self
     */
    public function setTaxes(?OrgOpentravelOta200305ExchangeTravelPreferencesTPAExtensionsTypeTaxes $taxes): self
    {
        $this->taxes = $taxes;

        return $this;
    }

    /**
     * Settings specific to Ticketing Sum of Locals processing.
     *
     * @return OrgOpentravelOta200305AirSearchPrefsTypeTPAExtensionsTicketingSumOfLocals
     */
    public function getTicketingSumOfLocals(): ?OrgOpentravelOta200305AirSearchPrefsTypeTPAExtensionsTicketingSumOfLocals
    {
        return $this->ticketingSumOfLocals;
    }

    /**
     * Settings specific to Ticketing Sum of Locals processing.
     *
     * @param OrgOpentravelOta200305AirSearchPrefsTypeTPAExtensionsTicketingSumOfLocals $ticketingSumOfLocals
     *
     * @return self
     */
    public function setTicketingSumOfLocals(?OrgOpentravelOta200305AirSearchPrefsTypeTPAExtensionsTicketingSumOfLocals $ticketingSumOfLocals): self
    {
        $this->ticketingSumOfLocals = $ticketingSumOfLocals;

        return $this;
    }

    /**
     * @return OrgOpentravelOta200305AirSearchPrefsTypeTPAExtensionsTripType
     */
    public function getTripType(): ?OrgOpentravelOta200305AirSearchPrefsTypeTPAExtensionsTripType
    {
        return $this->tripType;
    }

    /**
     * @param OrgOpentravelOta200305AirSearchPrefsTypeTPAExtensionsTripType $tripType
     *
     * @return self
     */
    public function setTripType(?OrgOpentravelOta200305AirSearchPrefsTypeTPAExtensionsTripType $tripType): self
    {
        $this->tripType = $tripType;

        return $this;
    }

    /**
     * @return OrgOpentravelOta200305ValidatingCarrierType
     */
    public function getValidatingCarrier(): ?OrgOpentravelOta200305ValidatingCarrierType
    {
        return $this->validatingCarrier;
    }

    /**
     * @param OrgOpentravelOta200305ValidatingCarrierType $validatingCarrier
     *
     * @return self
     */
    public function setValidatingCarrier(?OrgOpentravelOta200305ValidatingCarrierType $validatingCarrier): self
    {
        $this->validatingCarrier = $validatingCarrier;

        return $this;
    }

    /**
     * @return OrgOpentravelOta200305AirSearchPrefsTypeTPAExtensionsValidatingCarrierCheck
     */
    public function getValidatingCarrierCheck(): ?OrgOpentravelOta200305AirSearchPrefsTypeTPAExtensionsValidatingCarrierCheck
    {
        return $this->validatingCarrierCheck;
    }

    /**
     * @param OrgOpentravelOta200305AirSearchPrefsTypeTPAExtensionsValidatingCarrierCheck $validatingCarrierCheck
     *
     * @return self
     */
    public function setValidatingCarrierCheck(?OrgOpentravelOta200305AirSearchPrefsTypeTPAExtensionsValidatingCarrierCheck $validatingCarrierCheck): self
    {
        $this->validatingCarrierCheck = $validatingCarrierCheck;

        return $this;
    }

    /**
     * @return OrgOpentravelOta200305AirSearchPrefsTypeTPAExtensionsVerificationItinCallLogic
     */
    public function getVerificationItinCallLogic(): ?OrgOpentravelOta200305AirSearchPrefsTypeTPAExtensionsVerificationItinCallLogic
    {
        return $this->verificationItinCallLogic;
    }

    /**
     * @param OrgOpentravelOta200305AirSearchPrefsTypeTPAExtensionsVerificationItinCallLogic $verificationItinCallLogic
     *
     * @return self
     */
    public function setVerificationItinCallLogic(?OrgOpentravelOta200305AirSearchPrefsTypeTPAExtensionsVerificationItinCallLogic $verificationItinCallLogic): self
    {
        $this->verificationItinCallLogic = $verificationItinCallLogic;

        return $this;
    }

    /**
     * Indicator for whether to return only fares with a passenger type the same as the passenger type specified in the request.
     *
     * @return OrgOpentravelOta200305XOFaresType
     */
    public function getXOFares(): ?OrgOpentravelOta200305XOFaresType
    {
        return $this->xOFares;
    }

    /**
     * Indicator for whether to return only fares with a passenger type the same as the passenger type specified in the request.
     *
     * @param OrgOpentravelOta200305XOFaresType $xOFares
     *
     * @return self
     */
    public function setXOFares(?OrgOpentravelOta200305XOFaresType $xOFares): self
    {
        $this->xOFares = $xOFares;

        return $this;
    }

    /**
     * AVS penalty carrier list (| delimited) for ESV2.
     *
     * @return OrgOpentravelOta200305AirSearchPrefsTypeTPAExtensionsAvsPenaltyCrrs
     */
    public function getAvsPenaltyCrrs(): ?OrgOpentravelOta200305AirSearchPrefsTypeTPAExtensionsAvsPenaltyCrrs
    {
        return $this->avsPenaltyCrrs;
    }

    /**
     * AVS penalty carrier list (| delimited) for ESV2.
     *
     * @param OrgOpentravelOta200305AirSearchPrefsTypeTPAExtensionsAvsPenaltyCrrs $avsPenaltyCrrs
     *
     * @return self
     */
    public function setAvsPenaltyCrrs(?OrgOpentravelOta200305AirSearchPrefsTypeTPAExtensionsAvsPenaltyCrrs $avsPenaltyCrrs): self
    {
        $this->avsPenaltyCrrs = $avsPenaltyCrrs;

        return $this;
    }

    /**
     * Departure penalty in dollars for ESV2.
     *
     * @return OrgOpentravelOta200305AirSearchPrefsTypeTPAExtensionsDepPenaltyInUSD
     */
    public function getDepPenaltyInUSD(): ?OrgOpentravelOta200305AirSearchPrefsTypeTPAExtensionsDepPenaltyInUSD
    {
        return $this->depPenaltyInUSD;
    }

    /**
     * Departure penalty in dollars for ESV2.
     *
     * @param OrgOpentravelOta200305AirSearchPrefsTypeTPAExtensionsDepPenaltyInUSD $depPenaltyInUSD
     *
     * @return self
     */
    public function setDepPenaltyInUSD(?OrgOpentravelOta200305AirSearchPrefsTypeTPAExtensionsDepPenaltyInUSD $depPenaltyInUSD): self
    {
        $this->depPenaltyInUSD = $depPenaltyInUSD;

        return $this;
    }

    /**
     * Duration penalty in dollars for ESV2.
     *
     * @return OrgOpentravelOta200305AirSearchPrefsTypeTPAExtensionsDurPenaltyInUSD
     */
    public function getDurPenaltyInUSD(): ?OrgOpentravelOta200305AirSearchPrefsTypeTPAExtensionsDurPenaltyInUSD
    {
        return $this->durPenaltyInUSD;
    }

    /**
     * Duration penalty in dollars for ESV2.
     *
     * @param OrgOpentravelOta200305AirSearchPrefsTypeTPAExtensionsDurPenaltyInUSD $durPenaltyInUSD
     *
     * @return self
     */
    public function setDurPenaltyInUSD(?OrgOpentravelOta200305AirSearchPrefsTypeTPAExtensionsDurPenaltyInUSD $durPenaltyInUSD): self
    {
        $this->durPenaltyInUSD = $durPenaltyInUSD;

        return $this;
    }

    /**
     * Low fare search flight option reuse limit for AVS for ESV2.
     *
     * @return OrgOpentravelOta200305AirSearchPrefsTypeTPAExtensionsFltOptLFSReuseLimitForAVS
     */
    public function getFltOptLFSReuseLimitForAVS(): ?OrgOpentravelOta200305AirSearchPrefsTypeTPAExtensionsFltOptLFSReuseLimitForAVS
    {
        return $this->fltOptLFSReuseLimitForAVS;
    }

    /**
     * Low fare search flight option reuse limit for AVS for ESV2.
     *
     * @param OrgOpentravelOta200305AirSearchPrefsTypeTPAExtensionsFltOptLFSReuseLimitForAVS $fltOptLFSReuseLimitForAVS
     *
     * @return self
     */
    public function setFltOptLFSReuseLimitForAVS(?OrgOpentravelOta200305AirSearchPrefsTypeTPAExtensionsFltOptLFSReuseLimitForAVS $fltOptLFSReuseLimitForAVS): self
    {
        $this->fltOptLFSReuseLimitForAVS = $fltOptLFSReuseLimitForAVS;

        return $this;
    }

    /**
     * Low fare search flight option reuse limit for non AVS for ESV2.
     *
     * @return OrgOpentravelOta200305AirSearchPrefsTypeTPAExtensionsFltOptLFSReuseLimitForNonAVS
     */
    public function getFltOptLFSReuseLimitForNonAVS(): ?OrgOpentravelOta200305AirSearchPrefsTypeTPAExtensionsFltOptLFSReuseLimitForNonAVS
    {
        return $this->fltOptLFSReuseLimitForNonAVS;
    }

    /**
     * Low fare search flight option reuse limit for non AVS for ESV2.
     *
     * @param OrgOpentravelOta200305AirSearchPrefsTypeTPAExtensionsFltOptLFSReuseLimitForNonAVS $fltOptLFSReuseLimitForNonAVS
     *
     * @return self
     */
    public function setFltOptLFSReuseLimitForNonAVS(?OrgOpentravelOta200305AirSearchPrefsTypeTPAExtensionsFltOptLFSReuseLimitForNonAVS $fltOptLFSReuseLimitForNonAVS): self
    {
        $this->fltOptLFSReuseLimitForNonAVS = $fltOptLFSReuseLimitForNonAVS;

        return $this;
    }

    /**
     * Flight option reuse limit (must price) for ESV2.
     *
     * @return OrgOpentravelOta200305AirSearchPrefsTypeTPAExtensionsFltOptMustPriceReuseLimit
     */
    public function getFltOptMustPriceReuseLimit(): ?OrgOpentravelOta200305AirSearchPrefsTypeTPAExtensionsFltOptMustPriceReuseLimit
    {
        return $this->fltOptMustPriceReuseLimit;
    }

    /**
     * Flight option reuse limit (must price) for ESV2.
     *
     * @param OrgOpentravelOta200305AirSearchPrefsTypeTPAExtensionsFltOptMustPriceReuseLimit $fltOptMustPriceReuseLimit
     *
     * @return self
     */
    public function setFltOptMustPriceReuseLimit(?OrgOpentravelOta200305AirSearchPrefsTypeTPAExtensionsFltOptMustPriceReuseLimit $fltOptMustPriceReuseLimit): self
    {
        $this->fltOptMustPriceReuseLimit = $fltOptMustPriceReuseLimit;

        return $this;
    }

    /**
     * Low fare search max allowed overage per carrier % for ESV2.
     *
     * @return OrgOpentravelOta200305AirSearchPrefsTypeTPAExtensionsMaxAllowedLFSOveragePerCrrPercent
     */
    public function getMaxAllowedLFSOveragePerCrrPercent(): ?OrgOpentravelOta200305AirSearchPrefsTypeTPAExtensionsMaxAllowedLFSOveragePerCrrPercent
    {
        return $this->maxAllowedLFSOveragePerCrrPercent;
    }

    /**
     * Low fare search max allowed overage per carrier % for ESV2.
     *
     * @param OrgOpentravelOta200305AirSearchPrefsTypeTPAExtensionsMaxAllowedLFSOveragePerCrrPercent $maxAllowedLFSOveragePerCrrPercent
     *
     * @return self
     */
    public function setMaxAllowedLFSOveragePerCrrPercent(?OrgOpentravelOta200305AirSearchPrefsTypeTPAExtensionsMaxAllowedLFSOveragePerCrrPercent $maxAllowedLFSOveragePerCrrPercent): self
    {
        $this->maxAllowedLFSOveragePerCrrPercent = $maxAllowedLFSOveragePerCrrPercent;

        return $this;
    }

    /**
     * Max allowed must price overage per carrier for ESV2.
     *
     * @return OrgOpentravelOta200305AirSearchPrefsTypeTPAExtensionsMaxAllowedMustPriceOveragePerCrr
     */
    public function getMaxAllowedMustPriceOveragePerCrr(): ?OrgOpentravelOta200305AirSearchPrefsTypeTPAExtensionsMaxAllowedMustPriceOveragePerCrr
    {
        return $this->maxAllowedMustPriceOveragePerCrr;
    }

    /**
     * Max allowed must price overage per carrier for ESV2.
     *
     * @param OrgOpentravelOta200305AirSearchPrefsTypeTPAExtensionsMaxAllowedMustPriceOveragePerCrr $maxAllowedMustPriceOveragePerCrr
     *
     * @return self
     */
    public function setMaxAllowedMustPriceOveragePerCrr(?OrgOpentravelOta200305AirSearchPrefsTypeTPAExtensionsMaxAllowedMustPriceOveragePerCrr $maxAllowedMustPriceOveragePerCrr): self
    {
        $this->maxAllowedMustPriceOveragePerCrr = $maxAllowedMustPriceOveragePerCrr;

        return $this;
    }

    /**
     * Max number of 2+ stops solutions for ESV2.
     *
     * @return OrgOpentravelOta200305AirSearchPrefsTypeTPAExtensionsMaxNumOf2PlusStpSol
     */
    public function getMaxNumOf2PlusStpSol(): ?OrgOpentravelOta200305AirSearchPrefsTypeTPAExtensionsMaxNumOf2PlusStpSol
    {
        return $this->maxNumOf2PlusStpSol;
    }

    /**
     * Max number of 2+ stops solutions for ESV2.
     *
     * @param OrgOpentravelOta200305AirSearchPrefsTypeTPAExtensionsMaxNumOf2PlusStpSol $maxNumOf2PlusStpSol
     *
     * @return self
     */
    public function setMaxNumOf2PlusStpSol(?OrgOpentravelOta200305AirSearchPrefsTypeTPAExtensionsMaxNumOf2PlusStpSol $maxNumOf2PlusStpSol): self
    {
        $this->maxNumOf2PlusStpSol = $maxNumOf2PlusStpSol;

        return $this;
    }

    /**
     * Max number of nonstop interline solutions for ESV2.
     *
     * @return OrgOpentravelOta200305AirSearchPrefsTypeTPAExtensionsMaxNumOfNonStpInrlSol
     */
    public function getMaxNumOfNonStpInrlSol(): ?OrgOpentravelOta200305AirSearchPrefsTypeTPAExtensionsMaxNumOfNonStpInrlSol
    {
        return $this->maxNumOfNonStpInrlSol;
    }

    /**
     * Max number of nonstop interline solutions for ESV2.
     *
     * @param OrgOpentravelOta200305AirSearchPrefsTypeTPAExtensionsMaxNumOfNonStpInrlSol $maxNumOfNonStpInrlSol
     *
     * @return self
     */
    public function setMaxNumOfNonStpInrlSol(?OrgOpentravelOta200305AirSearchPrefsTypeTPAExtensionsMaxNumOfNonStpInrlSol $maxNumOfNonStpInrlSol): self
    {
        $this->maxNumOfNonStpInrlSol = $maxNumOfNonStpInrlSol;

        return $this;
    }

    /**
     * Max number of nonstop online solutions for ESV2.
     *
     * @return OrgOpentravelOta200305AirSearchPrefsTypeTPAExtensionsMaxNumOfNonStpOnlSol
     */
    public function getMaxNumOfNonStpOnlSol(): ?OrgOpentravelOta200305AirSearchPrefsTypeTPAExtensionsMaxNumOfNonStpOnlSol
    {
        return $this->maxNumOfNonStpOnlSol;
    }

    /**
     * Max number of nonstop online solutions for ESV2.
     *
     * @param OrgOpentravelOta200305AirSearchPrefsTypeTPAExtensionsMaxNumOfNonStpOnlSol $maxNumOfNonStpOnlSol
     *
     * @return self
     */
    public function setMaxNumOfNonStpOnlSol(?OrgOpentravelOta200305AirSearchPrefsTypeTPAExtensionsMaxNumOfNonStpOnlSol $maxNumOfNonStpOnlSol): self
    {
        $this->maxNumOfNonStpOnlSol = $maxNumOfNonStpOnlSol;

        return $this;
    }

    /**
     * Max number of single stop online solutions for ESV2.
     *
     * @return OrgOpentravelOta200305AirSearchPrefsTypeTPAExtensionsMaxNumOfSingleStpOnlSol
     */
    public function getMaxNumOfSingleStpOnlSol(): ?OrgOpentravelOta200305AirSearchPrefsTypeTPAExtensionsMaxNumOfSingleStpOnlSol
    {
        return $this->maxNumOfSingleStpOnlSol;
    }

    /**
     * Max number of single stop online solutions for ESV2.
     *
     * @param OrgOpentravelOta200305AirSearchPrefsTypeTPAExtensionsMaxNumOfSingleStpOnlSol $maxNumOfSingleStpOnlSol
     *
     * @return self
     */
    public function setMaxNumOfSingleStpOnlSol(?OrgOpentravelOta200305AirSearchPrefsTypeTPAExtensionsMaxNumOfSingleStpOnlSol $maxNumOfSingleStpOnlSol): self
    {
        $this->maxNumOfSingleStpOnlSol = $maxNumOfSingleStpOnlSol;

        return $this;
    }

    /**
     * Max relative fare level of x for carrier for ESV2.
     *
     * @return OrgOpentravelOta200305AirSearchPrefsTypeTPAExtensionsMaxRelFareLvlOfxForCnx
     */
    public function getMaxRelFareLvlOfxForCnx(): ?OrgOpentravelOta200305AirSearchPrefsTypeTPAExtensionsMaxRelFareLvlOfxForCnx
    {
        return $this->maxRelFareLvlOfxForCnx;
    }

    /**
     * Max relative fare level of x for carrier for ESV2.
     *
     * @param OrgOpentravelOta200305AirSearchPrefsTypeTPAExtensionsMaxRelFareLvlOfxForCnx $maxRelFareLvlOfxForCnx
     *
     * @return self
     */
    public function setMaxRelFareLvlOfxForCnx(?OrgOpentravelOta200305AirSearchPrefsTypeTPAExtensionsMaxRelFareLvlOfxForCnx $maxRelFareLvlOfxForCnx): self
    {
        $this->maxRelFareLvlOfxForCnx = $maxRelFareLvlOfxForCnx;

        return $this;
    }

    /**
     * Max relative fare level of x for nonstops for ESV2.
     *
     * @return OrgOpentravelOta200305AirSearchPrefsTypeTPAExtensionsMaxRelFareLvlOfxForNonStp
     */
    public function getMaxRelFareLvlOfxForNonStp(): ?OrgOpentravelOta200305AirSearchPrefsTypeTPAExtensionsMaxRelFareLvlOfxForNonStp
    {
        return $this->maxRelFareLvlOfxForNonStp;
    }

    /**
     * Max relative fare level of x for nonstops for ESV2.
     *
     * @param OrgOpentravelOta200305AirSearchPrefsTypeTPAExtensionsMaxRelFareLvlOfxForNonStp $maxRelFareLvlOfxForNonStp
     *
     * @return self
     */
    public function setMaxRelFareLvlOfxForNonStp(?OrgOpentravelOta200305AirSearchPrefsTypeTPAExtensionsMaxRelFareLvlOfxForNonStp $maxRelFareLvlOfxForNonStp): self
    {
        $this->maxRelFareLvlOfxForNonStp = $maxRelFareLvlOfxForNonStp;

        return $this;
    }

    /**
     * Min allowed overage per carrier for ESV2.
     *
     * @return OrgOpentravelOta200305AirSearchPrefsTypeTPAExtensionsMinAllowedOveragePerCrr
     */
    public function getMinAllowedOveragePerCrr(): ?OrgOpentravelOta200305AirSearchPrefsTypeTPAExtensionsMinAllowedOveragePerCrr
    {
        return $this->minAllowedOveragePerCrr;
    }

    /**
     * Min allowed overage per carrier for ESV2.
     *
     * @param OrgOpentravelOta200305AirSearchPrefsTypeTPAExtensionsMinAllowedOveragePerCrr $minAllowedOveragePerCrr
     *
     * @return self
     */
    public function setMinAllowedOveragePerCrr(?OrgOpentravelOta200305AirSearchPrefsTypeTPAExtensionsMinAllowedOveragePerCrr $minAllowedOveragePerCrr): self
    {
        $this->minAllowedOveragePerCrr = $minAllowedOveragePerCrr;

        return $this;
    }

    /**
     * Min allowed overage per carrier % for ESV2.
     *
     * @return OrgOpentravelOta200305AirSearchPrefsTypeTPAExtensionsMinAllowedOveragePerCrrPercent
     */
    public function getMinAllowedOveragePerCrrPercent(): ?OrgOpentravelOta200305AirSearchPrefsTypeTPAExtensionsMinAllowedOveragePerCrrPercent
    {
        return $this->minAllowedOveragePerCrrPercent;
    }

    /**
     * Min allowed overage per carrier % for ESV2.
     *
     * @param OrgOpentravelOta200305AirSearchPrefsTypeTPAExtensionsMinAllowedOveragePerCrrPercent $minAllowedOveragePerCrrPercent
     *
     * @return self
     */
    public function setMinAllowedOveragePerCrrPercent(?OrgOpentravelOta200305AirSearchPrefsTypeTPAExtensionsMinAllowedOveragePerCrrPercent $minAllowedOveragePerCrrPercent): self
    {
        $this->minAllowedOveragePerCrrPercent = $minAllowedOveragePerCrrPercent;

        return $this;
    }

    /**
     * Number of low fare solutions for ESV2.
     *
     * @return OrgOpentravelOta200305AirSearchPrefsTypeTPAExtensionsNumOfLowFareSol
     */
    public function getNumOfLowFareSol(): ?OrgOpentravelOta200305AirSearchPrefsTypeTPAExtensionsNumOfLowFareSol
    {
        return $this->numOfLowFareSol;
    }

    /**
     * Number of low fare solutions for ESV2.
     *
     * @param OrgOpentravelOta200305AirSearchPrefsTypeTPAExtensionsNumOfLowFareSol $numOfLowFareSol
     *
     * @return self
     */
    public function setNumOfLowFareSol(?OrgOpentravelOta200305AirSearchPrefsTypeTPAExtensionsNumOfLowFareSol $numOfLowFareSol): self
    {
        $this->numOfLowFareSol = $numOfLowFareSol;

        return $this;
    }

    /**
     * Number of must price 2+ stops solutions for ESV2.
     *
     * @return OrgOpentravelOta200305AirSearchPrefsTypeTPAExtensionsNumOfMustPrice2PlusStpSol
     */
    public function getNumOfMustPrice2PlusStpSol(): ?OrgOpentravelOta200305AirSearchPrefsTypeTPAExtensionsNumOfMustPrice2PlusStpSol
    {
        return $this->numOfMustPrice2PlusStpSol;
    }

    /**
     * Number of must price 2+ stops solutions for ESV2.
     *
     * @param OrgOpentravelOta200305AirSearchPrefsTypeTPAExtensionsNumOfMustPrice2PlusStpSol $numOfMustPrice2PlusStpSol
     *
     * @return self
     */
    public function setNumOfMustPrice2PlusStpSol(?OrgOpentravelOta200305AirSearchPrefsTypeTPAExtensionsNumOfMustPrice2PlusStpSol $numOfMustPrice2PlusStpSol): self
    {
        $this->numOfMustPrice2PlusStpSol = $numOfMustPrice2PlusStpSol;

        return $this;
    }

    /**
     * Number of must price interline solutions for ESV2.
     *
     * @return OrgOpentravelOta200305AirSearchPrefsTypeTPAExtensionsNumOfMustPriceInrlSol
     */
    public function getNumOfMustPriceInrlSol(): ?OrgOpentravelOta200305AirSearchPrefsTypeTPAExtensionsNumOfMustPriceInrlSol
    {
        return $this->numOfMustPriceInrlSol;
    }

    /**
     * Number of must price interline solutions for ESV2.
     *
     * @param OrgOpentravelOta200305AirSearchPrefsTypeTPAExtensionsNumOfMustPriceInrlSol $numOfMustPriceInrlSol
     *
     * @return self
     */
    public function setNumOfMustPriceInrlSol(?OrgOpentravelOta200305AirSearchPrefsTypeTPAExtensionsNumOfMustPriceInrlSol $numOfMustPriceInrlSol): self
    {
        $this->numOfMustPriceInrlSol = $numOfMustPriceInrlSol;

        return $this;
    }

    /**
     * Number of must price non-stop/one-stop interline solutions for ESV2.
     *
     * @return OrgOpentravelOta200305AirSearchPrefsTypeTPAExtensionsNumOfMustPriceNStp1StpInrlSol
     */
    public function getNumOfMustPriceNStp1StpInrlSol(): ?OrgOpentravelOta200305AirSearchPrefsTypeTPAExtensionsNumOfMustPriceNStp1StpInrlSol
    {
        return $this->numOfMustPriceNStp1StpInrlSol;
    }

    /**
     * Number of must price non-stop/one-stop interline solutions for ESV2.
     *
     * @param OrgOpentravelOta200305AirSearchPrefsTypeTPAExtensionsNumOfMustPriceNStp1StpInrlSol $numOfMustPriceNStp1StpInrlSol
     *
     * @return self
     */
    public function setNumOfMustPriceNStp1StpInrlSol(?OrgOpentravelOta200305AirSearchPrefsTypeTPAExtensionsNumOfMustPriceNStp1StpInrlSol $numOfMustPriceNStp1StpInrlSol): self
    {
        $this->numOfMustPriceNStp1StpInrlSol = $numOfMustPriceNStp1StpInrlSol;

        return $this;
    }

    /**
     * Number of must price non-stop/one-stop online solutions for ESV2.
     *
     * @return OrgOpentravelOta200305AirSearchPrefsTypeTPAExtensionsNumOfMustPriceNStp1StpOnlSol
     */
    public function getNumOfMustPriceNStp1StpOnlSol(): ?OrgOpentravelOta200305AirSearchPrefsTypeTPAExtensionsNumOfMustPriceNStp1StpOnlSol
    {
        return $this->numOfMustPriceNStp1StpOnlSol;
    }

    /**
     * Number of must price non-stop/one-stop online solutions for ESV2.
     *
     * @param OrgOpentravelOta200305AirSearchPrefsTypeTPAExtensionsNumOfMustPriceNStp1StpOnlSol $numOfMustPriceNStp1StpOnlSol
     *
     * @return self
     */
    public function setNumOfMustPriceNStp1StpOnlSol(?OrgOpentravelOta200305AirSearchPrefsTypeTPAExtensionsNumOfMustPriceNStp1StpOnlSol $numOfMustPriceNStp1StpOnlSol): self
    {
        $this->numOfMustPriceNStp1StpOnlSol = $numOfMustPriceNStp1StpOnlSol;

        return $this;
    }

    /**
     * Number of must price non-stop interline solutions for ESV2.
     *
     * @return OrgOpentravelOta200305AirSearchPrefsTypeTPAExtensionsNumOfMustPriceNStpInrlSol
     */
    public function getNumOfMustPriceNStpInrlSol(): ?OrgOpentravelOta200305AirSearchPrefsTypeTPAExtensionsNumOfMustPriceNStpInrlSol
    {
        return $this->numOfMustPriceNStpInrlSol;
    }

    /**
     * Number of must price non-stop interline solutions for ESV2.
     *
     * @param OrgOpentravelOta200305AirSearchPrefsTypeTPAExtensionsNumOfMustPriceNStpInrlSol $numOfMustPriceNStpInrlSol
     *
     * @return self
     */
    public function setNumOfMustPriceNStpInrlSol(?OrgOpentravelOta200305AirSearchPrefsTypeTPAExtensionsNumOfMustPriceNStpInrlSol $numOfMustPriceNStpInrlSol): self
    {
        $this->numOfMustPriceNStpInrlSol = $numOfMustPriceNStpInrlSol;

        return $this;
    }

    /**
     * Number of must price non-stop online solutions for ESV2.
     *
     * @return OrgOpentravelOta200305AirSearchPrefsTypeTPAExtensionsNumOfMustPriceNStpOnlSol
     */
    public function getNumOfMustPriceNStpOnlSol(): ?OrgOpentravelOta200305AirSearchPrefsTypeTPAExtensionsNumOfMustPriceNStpOnlSol
    {
        return $this->numOfMustPriceNStpOnlSol;
    }

    /**
     * Number of must price non-stop online solutions for ESV2.
     *
     * @param OrgOpentravelOta200305AirSearchPrefsTypeTPAExtensionsNumOfMustPriceNStpOnlSol $numOfMustPriceNStpOnlSol
     *
     * @return self
     */
    public function setNumOfMustPriceNStpOnlSol(?OrgOpentravelOta200305AirSearchPrefsTypeTPAExtensionsNumOfMustPriceNStpOnlSol $numOfMustPriceNStpOnlSol): self
    {
        $this->numOfMustPriceNStpOnlSol = $numOfMustPriceNStpOnlSol;

        return $this;
    }

    /**
     * Number of must price online solutions for ESV2.
     *
     * @return OrgOpentravelOta200305AirSearchPrefsTypeTPAExtensionsNumOfMustPriceOnlSol
     */
    public function getNumOfMustPriceOnlSol(): ?OrgOpentravelOta200305AirSearchPrefsTypeTPAExtensionsNumOfMustPriceOnlSol
    {
        return $this->numOfMustPriceOnlSol;
    }

    /**
     * Number of must price online solutions for ESV2.
     *
     * @param OrgOpentravelOta200305AirSearchPrefsTypeTPAExtensionsNumOfMustPriceOnlSol $numOfMustPriceOnlSol
     *
     * @return self
     */
    public function setNumOfMustPriceOnlSol(?OrgOpentravelOta200305AirSearchPrefsTypeTPAExtensionsNumOfMustPriceOnlSol $numOfMustPriceOnlSol): self
    {
        $this->numOfMustPriceOnlSol = $numOfMustPriceOnlSol;

        return $this;
    }

    /**
     * Number of must price single stop online solutions for ESV2.
     *
     * @return OrgOpentravelOta200305AirSearchPrefsTypeTPAExtensionsNumOfMustPriceSStopOnlSol
     */
    public function getNumOfMustPriceSStopOnlSol(): ?OrgOpentravelOta200305AirSearchPrefsTypeTPAExtensionsNumOfMustPriceSStopOnlSol
    {
        return $this->numOfMustPriceSStopOnlSol;
    }

    /**
     * Number of must price single stop online solutions for ESV2.
     *
     * @param OrgOpentravelOta200305AirSearchPrefsTypeTPAExtensionsNumOfMustPriceSStopOnlSol $numOfMustPriceSStopOnlSol
     *
     * @return self
     */
    public function setNumOfMustPriceSStopOnlSol(?OrgOpentravelOta200305AirSearchPrefsTypeTPAExtensionsNumOfMustPriceSStopOnlSol $numOfMustPriceSStopOnlSol): self
    {
        $this->numOfMustPriceSStopOnlSol = $numOfMustPriceSStopOnlSol;

        return $this;
    }

    /**
     * Stop penalty in dollars for ESV2.
     *
     * @return OrgOpentravelOta200305AirSearchPrefsTypeTPAExtensionsStpPenaltyInUSD
     */
    public function getStpPenaltyInUSD(): ?OrgOpentravelOta200305AirSearchPrefsTypeTPAExtensionsStpPenaltyInUSD
    {
        return $this->stpPenaltyInUSD;
    }

    /**
     * Stop penalty in dollars for ESV2.
     *
     * @param OrgOpentravelOta200305AirSearchPrefsTypeTPAExtensionsStpPenaltyInUSD $stpPenaltyInUSD
     *
     * @return self
     */
    public function setStpPenaltyInUSD(?OrgOpentravelOta200305AirSearchPrefsTypeTPAExtensionsStpPenaltyInUSD $stpPenaltyInUSD): self
    {
        $this->stpPenaltyInUSD = $stpPenaltyInUSD;

        return $this;
    }

    /**
     * Low fare search target minimum number of online solutions per carrier for ESV2.
     *
     * @return OrgOpentravelOta200305AirSearchPrefsTypeTPAExtensionsTargetMinNumOfLFSOnlSolPerCrr
     */
    public function getTargetMinNumOfLFSOnlSolPerCrr(): ?OrgOpentravelOta200305AirSearchPrefsTypeTPAExtensionsTargetMinNumOfLFSOnlSolPerCrr
    {
        return $this->targetMinNumOfLFSOnlSolPerCrr;
    }

    /**
     * Low fare search target minimum number of online solutions per carrier for ESV2.
     *
     * @param OrgOpentravelOta200305AirSearchPrefsTypeTPAExtensionsTargetMinNumOfLFSOnlSolPerCrr $targetMinNumOfLFSOnlSolPerCrr
     *
     * @return self
     */
    public function setTargetMinNumOfLFSOnlSolPerCrr(?OrgOpentravelOta200305AirSearchPrefsTypeTPAExtensionsTargetMinNumOfLFSOnlSolPerCrr $targetMinNumOfLFSOnlSolPerCrr): self
    {
        $this->targetMinNumOfLFSOnlSolPerCrr = $targetMinNumOfLFSOnlSolPerCrr;

        return $this;
    }

    /**
     * Low fare search target minimum number of total online solutions % for ESV2.
     *
     * @return OrgOpentravelOta200305AirSearchPrefsTypeTPAExtensionsTargetMinNumOfLFSTotOnlSolPercent
     */
    public function getTargetMinNumOfLFSTotOnlSolPercent(): ?OrgOpentravelOta200305AirSearchPrefsTypeTPAExtensionsTargetMinNumOfLFSTotOnlSolPercent
    {
        return $this->targetMinNumOfLFSTotOnlSolPercent;
    }

    /**
     * Low fare search target minimum number of total online solutions % for ESV2.
     *
     * @param OrgOpentravelOta200305AirSearchPrefsTypeTPAExtensionsTargetMinNumOfLFSTotOnlSolPercent $targetMinNumOfLFSTotOnlSolPercent
     *
     * @return self
     */
    public function setTargetMinNumOfLFSTotOnlSolPercent(?OrgOpentravelOta200305AirSearchPrefsTypeTPAExtensionsTargetMinNumOfLFSTotOnlSolPercent $targetMinNumOfLFSTotOnlSolPercent): self
    {
        $this->targetMinNumOfLFSTotOnlSolPercent = $targetMinNumOfLFSTotOnlSolPercent;

        return $this;
    }

    /**
     * Low fare search upper bound factor for ESV2.
     *
     * @return OrgOpentravelOta200305AirSearchPrefsTypeTPAExtensionsUpperBoundLFSFactor
     */
    public function getUpperBoundLFSFactor(): ?OrgOpentravelOta200305AirSearchPrefsTypeTPAExtensionsUpperBoundLFSFactor
    {
        return $this->upperBoundLFSFactor;
    }

    /**
     * Low fare search upper bound factor for ESV2.
     *
     * @param OrgOpentravelOta200305AirSearchPrefsTypeTPAExtensionsUpperBoundLFSFactor $upperBoundLFSFactor
     *
     * @return self
     */
    public function setUpperBoundLFSFactor(?OrgOpentravelOta200305AirSearchPrefsTypeTPAExtensionsUpperBoundLFSFactor $upperBoundLFSFactor): self
    {
        $this->upperBoundLFSFactor = $upperBoundLFSFactor;

        return $this;
    }

    /**
     * Upper bound factor for non-stops (must price) for ESV2.
     *
     * @return OrgOpentravelOta200305AirSearchPrefsTypeTPAExtensionsUpperBoundMustPriceFactorForNonStp
     */
    public function getUpperBoundMustPriceFactorForNonStp(): ?OrgOpentravelOta200305AirSearchPrefsTypeTPAExtensionsUpperBoundMustPriceFactorForNonStp
    {
        return $this->upperBoundMustPriceFactorForNonStp;
    }

    /**
     * Upper bound factor for non-stops (must price) for ESV2.
     *
     * @param OrgOpentravelOta200305AirSearchPrefsTypeTPAExtensionsUpperBoundMustPriceFactorForNonStp $upperBoundMustPriceFactorForNonStp
     *
     * @return self
     */
    public function setUpperBoundMustPriceFactorForNonStp(?OrgOpentravelOta200305AirSearchPrefsTypeTPAExtensionsUpperBoundMustPriceFactorForNonStp $upperBoundMustPriceFactorForNonStp): self
    {
        $this->upperBoundMustPriceFactorForNonStp = $upperBoundMustPriceFactorForNonStp;

        return $this;
    }

    /**
     * Upper bound factor for not non-stops (must price) for ESV2.
     *
     * @return OrgOpentravelOta200305AirSearchPrefsTypeTPAExtensionsUpperBoundMustPriceFactorForNotNonStp
     */
    public function getUpperBoundMustPriceFactorForNotNonStp(): ?OrgOpentravelOta200305AirSearchPrefsTypeTPAExtensionsUpperBoundMustPriceFactorForNotNonStp
    {
        return $this->upperBoundMustPriceFactorForNotNonStp;
    }

    /**
     * Upper bound factor for not non-stops (must price) for ESV2.
     *
     * @param OrgOpentravelOta200305AirSearchPrefsTypeTPAExtensionsUpperBoundMustPriceFactorForNotNonStp $upperBoundMustPriceFactorForNotNonStp
     *
     * @return self
     */
    public function setUpperBoundMustPriceFactorForNotNonStp(?OrgOpentravelOta200305AirSearchPrefsTypeTPAExtensionsUpperBoundMustPriceFactorForNotNonStp $upperBoundMustPriceFactorForNotNonStp): self
    {
        $this->upperBoundMustPriceFactorForNotNonStp = $upperBoundMustPriceFactorForNotNonStp;

        return $this;
    }
}
