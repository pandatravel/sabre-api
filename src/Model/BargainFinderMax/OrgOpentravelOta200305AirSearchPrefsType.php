<?php

namespace Ammonkc\SabreApi\Model\BargainFinderMax;

use Ammonkc\SabreApi\AbstractModel;

class OrgOpentravelOta200305AirSearchPrefsType extends AbstractModel
{
    /**
     * Return flights not combinable into roundtrips as one ways is a separate section.
     *
     * @var bool
     */
    protected $allFlightsData;
    /**
     * @var OrgOpentravelOta200305AirSearchPrefsTypeAncillaryFees
     */
    protected $ancillaryFees;
    /**
     * This element allows user to get baggage information.
     *
     * @var OrgOpentravelOta200305AirSearchPrefsTypeBaggage
     */
    protected $baggage;
    /**
     * @var OrgOpentravelOta200305CabinPrefType[]
     */
    protected $cabinPref;
    /**
     * @var OrgOpentravelOta200305AirSearchPrefsTypeCommissionCodeQualifiers
     */
    protected $commissionCodeQualifiers;
    /**
     * Request flights that are e-ticketable in the response.
     *
     * @var bool
     */
    protected $eTicketDesired;
    /**
     * @var OrgOpentravelOta200305EquipmentTypePref[]
     */
    protected $equipPref;
    /**
     * @var OrgOpentravelOta200305AirSearchPrefsTypeFareRestrictPref[]
     */
    protected $fareRestrictPref;
    /**
     * @var OrgOpentravelOta200305FlightTypePrefType
     */
    protected $flightTypePref;
    /**
     * @var OrgOpentravelOta200305AirSearchPrefsTypeFrequentFlyer[]
     */
    protected $frequentFlyer;
    /**
     * If false no solutions priced outside of ATSE systems will be returned in response for carriers operating in hybrid content distribution model.
     *
     * @var bool
     */
    protected $hybrid;
    /**
     * @var OrgOpentravelOta200305InterlineBrandsType
     */
    protected $interlineBrands;
    /**
     * If false no alternative solutions will be returned in response.
     *
     * @var bool
     */
    protected $lookForAlternatives;
    /**
     * Request flights that have no more than the requested number of stops.
     *
     * @var int
     */
    protected $maxStopsQuantity;
    /**
     * Request for flights in response that meet the given Department of Transport on-time rate. This is a number between 0 and 100.
     *
     * @var float
     */
    protected $onTimeRate;
    /**
     * @var bool
     */
    protected $smokingAllowed;
    /**
     * @var OrgOpentravelOta200305AirSearchPrefsTypeSpanishFamilyDiscount
     */
    protected $spanishFamilyDiscount;
    /**
     * Additional elements and attributes to be included if required, per Trading Partner Agreement (TPA).
     *
     * @var OrgOpentravelOta200305AirSearchPrefsTypeTPAExtensions
     */
    protected $tPAExtensions;
    /**
     * @var OrgOpentravelOta200305TicketDistribPrefType[]
     */
    protected $ticketDistribPref;
    /**
     * Define on which legs each flight should appear at least once.
     *
     * @var string
     */
    protected $useAllFlights;
    /**
     * Request options that are validated on base of interline ticketing aggrement.
     *
     * @var bool
     */
    protected $validInterlineTicket;
    /**
     * @var OrgOpentravelOta200305CompanyNamePrefType[]
     */
    protected $vendorPref;
    /**
     * @var OrgOpentravelOta200305VendorPrefApplicabilityType[]
     */
    protected $vendorPrefApplicability;
    /**
     * @var OrgOpentravelOta200305VendorPrefPairingType[]
     */
    protected $vendorPrefPairing;

    /**
     * Return flights not combinable into roundtrips as one ways is a separate section.
     *
     * @return bool
     */
    public function getAllFlightsData(): ?bool
    {
        return $this->allFlightsData;
    }

    /**
     * Return flights not combinable into roundtrips as one ways is a separate section.
     *
     * @param bool $allFlightsData
     *
     * @return self
     */
    public function setAllFlightsData(?bool $allFlightsData): self
    {
        $this->allFlightsData = $allFlightsData;

        return $this;
    }

    /**
     * @return OrgOpentravelOta200305AirSearchPrefsTypeAncillaryFees
     */
    public function getAncillaryFees(): ?OrgOpentravelOta200305AirSearchPrefsTypeAncillaryFees
    {
        return $this->ancillaryFees;
    }

    /**
     * @param OrgOpentravelOta200305AirSearchPrefsTypeAncillaryFees $ancillaryFees
     *
     * @return self
     */
    public function setAncillaryFees(?OrgOpentravelOta200305AirSearchPrefsTypeAncillaryFees $ancillaryFees): self
    {
        $this->ancillaryFees = $ancillaryFees;

        return $this;
    }

    /**
     * This element allows user to get baggage information.
     *
     * @return OrgOpentravelOta200305AirSearchPrefsTypeBaggage
     */
    public function getBaggage(): ?OrgOpentravelOta200305AirSearchPrefsTypeBaggage
    {
        return $this->baggage;
    }

    /**
     * This element allows user to get baggage information.
     *
     * @param OrgOpentravelOta200305AirSearchPrefsTypeBaggage $baggage
     *
     * @return self
     */
    public function setBaggage(?OrgOpentravelOta200305AirSearchPrefsTypeBaggage $baggage): self
    {
        $this->baggage = $baggage;

        return $this;
    }

    /**
     * @return OrgOpentravelOta200305CabinPrefType[]
     */
    public function getCabinPref(): ?array
    {
        return $this->cabinPref;
    }

    /**
     * @param OrgOpentravelOta200305CabinPrefType[] $cabinPref
     *
     * @return self
     */
    public function setCabinPref(?array $cabinPref): self
    {
        $this->cabinPref = $cabinPref;

        return $this;
    }

    /**
     * @return OrgOpentravelOta200305AirSearchPrefsTypeCommissionCodeQualifiers
     */
    public function getCommissionCodeQualifiers(): ?OrgOpentravelOta200305AirSearchPrefsTypeCommissionCodeQualifiers
    {
        return $this->commissionCodeQualifiers;
    }

    /**
     * @param OrgOpentravelOta200305AirSearchPrefsTypeCommissionCodeQualifiers $commissionCodeQualifiers
     *
     * @return self
     */
    public function setCommissionCodeQualifiers(?OrgOpentravelOta200305AirSearchPrefsTypeCommissionCodeQualifiers $commissionCodeQualifiers): self
    {
        $this->commissionCodeQualifiers = $commissionCodeQualifiers;

        return $this;
    }

    /**
     * Request flights that are e-ticketable in the response.
     *
     * @return bool
     */
    public function getETicketDesired(): ?bool
    {
        return $this->eTicketDesired;
    }

    /**
     * Request flights that are e-ticketable in the response.
     *
     * @param bool $eTicketDesired
     *
     * @return self
     */
    public function setETicketDesired(?bool $eTicketDesired): self
    {
        $this->eTicketDesired = $eTicketDesired;

        return $this;
    }

    /**
     * @return OrgOpentravelOta200305EquipmentTypePref[]
     */
    public function getEquipPref(): ?array
    {
        return $this->equipPref;
    }

    /**
     * @param OrgOpentravelOta200305EquipmentTypePref[] $equipPref
     *
     * @return self
     */
    public function setEquipPref(?array $equipPref): self
    {
        $this->equipPref = $equipPref;

        return $this;
    }

    /**
     * @return OrgOpentravelOta200305AirSearchPrefsTypeFareRestrictPref[]
     */
    public function getFareRestrictPref(): ?array
    {
        return $this->fareRestrictPref;
    }

    /**
     * @param OrgOpentravelOta200305AirSearchPrefsTypeFareRestrictPref[] $fareRestrictPref
     *
     * @return self
     */
    public function setFareRestrictPref(?array $fareRestrictPref): self
    {
        $this->fareRestrictPref = $fareRestrictPref;

        return $this;
    }

    /**
     * @return OrgOpentravelOta200305FlightTypePrefType
     */
    public function getFlightTypePref(): ?OrgOpentravelOta200305FlightTypePrefType
    {
        return $this->flightTypePref;
    }

    /**
     * @param OrgOpentravelOta200305FlightTypePrefType $flightTypePref
     *
     * @return self
     */
    public function setFlightTypePref(?OrgOpentravelOta200305FlightTypePrefType $flightTypePref): self
    {
        $this->flightTypePref = $flightTypePref;

        return $this;
    }

    /**
     * @return OrgOpentravelOta200305AirSearchPrefsTypeFrequentFlyer[]
     */
    public function getFrequentFlyer(): ?array
    {
        return $this->frequentFlyer;
    }

    /**
     * @param OrgOpentravelOta200305AirSearchPrefsTypeFrequentFlyer[] $frequentFlyer
     *
     * @return self
     */
    public function setFrequentFlyer(?array $frequentFlyer): self
    {
        $this->frequentFlyer = $frequentFlyer;

        return $this;
    }

    /**
     * If false no solutions priced outside of ATSE systems will be returned in response for carriers operating in hybrid content distribution model.
     *
     * @return bool
     */
    public function getHybrid(): ?bool
    {
        return $this->hybrid;
    }

    /**
     * If false no solutions priced outside of ATSE systems will be returned in response for carriers operating in hybrid content distribution model.
     *
     * @param bool $hybrid
     *
     * @return self
     */
    public function setHybrid(?bool $hybrid): self
    {
        $this->hybrid = $hybrid;

        return $this;
    }

    /**
     * @return OrgOpentravelOta200305InterlineBrandsType
     */
    public function getInterlineBrands(): ?OrgOpentravelOta200305InterlineBrandsType
    {
        return $this->interlineBrands;
    }

    /**
     * @param OrgOpentravelOta200305InterlineBrandsType $interlineBrands
     *
     * @return self
     */
    public function setInterlineBrands(?OrgOpentravelOta200305InterlineBrandsType $interlineBrands): self
    {
        $this->interlineBrands = $interlineBrands;

        return $this;
    }

    /**
     * If false no alternative solutions will be returned in response.
     *
     * @return bool
     */
    public function getLookForAlternatives(): ?bool
    {
        return $this->lookForAlternatives;
    }

    /**
     * If false no alternative solutions will be returned in response.
     *
     * @param bool $lookForAlternatives
     *
     * @return self
     */
    public function setLookForAlternatives(?bool $lookForAlternatives): self
    {
        $this->lookForAlternatives = $lookForAlternatives;

        return $this;
    }

    /**
     * Request flights that have no more than the requested number of stops.
     *
     * @return int
     */
    public function getMaxStopsQuantity(): ?int
    {
        return $this->maxStopsQuantity;
    }

    /**
     * Request flights that have no more than the requested number of stops.
     *
     * @param int $maxStopsQuantity
     *
     * @return self
     */
    public function setMaxStopsQuantity(?int $maxStopsQuantity): self
    {
        $this->maxStopsQuantity = $maxStopsQuantity;

        return $this;
    }

    /**
     * Request for flights in response that meet the given Department of Transport on-time rate. This is a number between 0 and 100.
     *
     * @return float
     */
    public function getOnTimeRate(): ?float
    {
        return $this->onTimeRate;
    }

    /**
     * Request for flights in response that meet the given Department of Transport on-time rate. This is a number between 0 and 100.
     *
     * @param float $onTimeRate
     *
     * @return self
     */
    public function setOnTimeRate(?float $onTimeRate): self
    {
        $this->onTimeRate = $onTimeRate;

        return $this;
    }

    /**
     * @return bool
     */
    public function getSmokingAllowed(): ?bool
    {
        return $this->smokingAllowed;
    }

    /**
     * @param bool $smokingAllowed
     *
     * @return self
     */
    public function setSmokingAllowed(?bool $smokingAllowed): self
    {
        $this->smokingAllowed = $smokingAllowed;

        return $this;
    }

    /**
     * @return OrgOpentravelOta200305AirSearchPrefsTypeSpanishFamilyDiscount
     */
    public function getSpanishFamilyDiscount(): ?OrgOpentravelOta200305AirSearchPrefsTypeSpanishFamilyDiscount
    {
        return $this->spanishFamilyDiscount;
    }

    /**
     * @param OrgOpentravelOta200305AirSearchPrefsTypeSpanishFamilyDiscount $spanishFamilyDiscount
     *
     * @return self
     */
    public function setSpanishFamilyDiscount(?OrgOpentravelOta200305AirSearchPrefsTypeSpanishFamilyDiscount $spanishFamilyDiscount): self
    {
        $this->spanishFamilyDiscount = $spanishFamilyDiscount;

        return $this;
    }

    /**
     * Additional elements and attributes to be included if required, per Trading Partner Agreement (TPA).
     *
     * @return OrgOpentravelOta200305AirSearchPrefsTypeTPAExtensions
     */
    public function getTPAExtensions(): ?OrgOpentravelOta200305AirSearchPrefsTypeTPAExtensions
    {
        return $this->tPAExtensions;
    }

    /**
     * Additional elements and attributes to be included if required, per Trading Partner Agreement (TPA).
     *
     * @param OrgOpentravelOta200305AirSearchPrefsTypeTPAExtensions $tPAExtensions
     *
     * @return self
     */
    public function setTPAExtensions(?OrgOpentravelOta200305AirSearchPrefsTypeTPAExtensions $tPAExtensions): self
    {
        $this->tPAExtensions = $tPAExtensions;

        return $this;
    }

    /**
     * @return OrgOpentravelOta200305TicketDistribPrefType[]
     */
    public function getTicketDistribPref(): ?array
    {
        return $this->ticketDistribPref;
    }

    /**
     * @param OrgOpentravelOta200305TicketDistribPrefType[] $ticketDistribPref
     *
     * @return self
     */
    public function setTicketDistribPref(?array $ticketDistribPref): self
    {
        $this->ticketDistribPref = $ticketDistribPref;

        return $this;
    }

    /**
     * Define on which legs each flight should appear at least once.
     *
     * @return string
     */
    public function getUseAllFlights(): ?string
    {
        return $this->useAllFlights;
    }

    /**
     * Define on which legs each flight should appear at least once.
     *
     * @param string $useAllFlights
     *
     * @return self
     */
    public function setUseAllFlights(?string $useAllFlights): self
    {
        $this->useAllFlights = $useAllFlights;

        return $this;
    }

    /**
     * Request options that are validated on base of interline ticketing aggrement.
     *
     * @return bool
     */
    public function getValidInterlineTicket(): ?bool
    {
        return $this->validInterlineTicket;
    }

    /**
     * Request options that are validated on base of interline ticketing aggrement.
     *
     * @param bool $validInterlineTicket
     *
     * @return self
     */
    public function setValidInterlineTicket(?bool $validInterlineTicket): self
    {
        $this->validInterlineTicket = $validInterlineTicket;

        return $this;
    }

    /**
     * @return OrgOpentravelOta200305CompanyNamePrefType[]
     */
    public function getVendorPref(): ?array
    {
        return $this->vendorPref;
    }

    /**
     * @param OrgOpentravelOta200305CompanyNamePrefType[] $vendorPref
     *
     * @return self
     */
    public function setVendorPref(?array $vendorPref): self
    {
        $this->vendorPref = $vendorPref;

        return $this;
    }

    /**
     * @return OrgOpentravelOta200305VendorPrefApplicabilityType[]
     */
    public function getVendorPrefApplicability(): ?array
    {
        return $this->vendorPrefApplicability;
    }

    /**
     * @param OrgOpentravelOta200305VendorPrefApplicabilityType[] $vendorPrefApplicability
     *
     * @return self
     */
    public function setVendorPrefApplicability(?array $vendorPrefApplicability): self
    {
        $this->vendorPrefApplicability = $vendorPrefApplicability;

        return $this;
    }

    /**
     * @return OrgOpentravelOta200305VendorPrefPairingType[]
     */
    public function getVendorPrefPairing(): ?array
    {
        return $this->vendorPrefPairing;
    }

    /**
     * @param OrgOpentravelOta200305VendorPrefPairingType[] $vendorPrefPairing
     *
     * @return self
     */
    public function setVendorPrefPairing(?array $vendorPrefPairing): self
    {
        $this->vendorPrefPairing = $vendorPrefPairing;

        return $this;
    }
}
