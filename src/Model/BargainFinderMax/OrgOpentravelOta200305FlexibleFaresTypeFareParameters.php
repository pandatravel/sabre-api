<?php

namespace Ammonkc\SabreApi\Model\BargainFinderMax;

use Ammonkc\SabreApi\AbstractModel;

class OrgOpentravelOta200305FlexibleFaresTypeFareParameters extends AbstractModel
{
    /**
     * @var OrgOpentravelOta200305FlexibleFaresTypeFareParametersAccountCode[]
     */
    protected $accountCode;
    /**
     * This element allows user to get baggage information,Free baggage piece is required.
     *
     * @var OrgOpentravelOta200305BaggageType
     */
    protected $baggage;
    /**
     * Set of branded fare switches and preferences for whole flexible fare.
     *
     * @var OrgOpentravelOta200305BrandedFareIndicatorsBase
     */
    protected $brandedFareIndicators;
    /**
     * This element specifies preffered cabin type.,A cabin is either Premium First (P), First (F), Premium Business (J), Business (C), Premium Economy (S) or Economy (Y),This element specifies PTC used to find this fare.,Specify traveler type code.
     *
     * @var OrgOpentravelOta200305FlexibleFaresTypeFareParametersCabin
     */
    protected $cabin;
    /**
     * @var OrgOpentravelOta200305ClassOfServiceElemType[]
     */
    protected $classOfService;
    /**
     * @var OrgOpentravelOta200305FlexibleFaresTypeFareParametersCorporateID[]
     */
    protected $corporateID;
    /**
     * Setting this to true means the same as setting ResTicketing, MinMaxStay and RefundPenalty to false.
     *
     * @var OrgOpentravelOta200305FlexibleFaresTypeFareParametersExcludeRestricted
     */
    protected $excludeRestricted;
    /**
     * @var OrgOpentravelOta200305FareBasisType[]
     */
    protected $fareBasis;
    /**
     * @var OrgOpentravelOta200305FareTypePrefType[]
     */
    protected $fareType;
    /**
     * @var OrgOpentravelOta200305JumpCabinLogicType
     */
    protected $jumpCabinLogic;
    /**
     * @var OrgOpentravelOta200305KeepSameCabinType
     */
    protected $keepSameCabin;
    /**
     * @var OrgOpentravelOta200305FlexibleFaresTypeFareParametersLeg[]
     */
    protected $leg;
    /**
     * If set to true, fares that have a min/max stay can be included in the responses. If set to false, then no fares that include a min/max stay requirement will be included in the response. This is negation of XS qualifier.
     *
     * @var OrgOpentravelOta200305FlexibleFaresTypeFareParametersMinMaxStay
     */
    protected $minMaxStay;
    /**
     * If set to true then returned fares need to match AcccountCode/CorpID specified in Fare Group definition on all fare components.
     *
     * @var OrgOpentravelOta200305FlexibleFaresTypeFareParametersNegotiatedFaresOnly
     */
    protected $negotiatedFaresOnly;
    /**
     * @var OrgOpentravelOta200305FlexibleFaresTypeFareParametersPassengerType
     */
    protected $passengerType;
    /**
     * @var OrgOpentravelOta200305PassengerTypeQuantityType[]
     */
    protected $passengerTypeQuantity;
    /**
     * This element finds only private fares.
     *
     * @var OrgOpentravelOta200305FlexibleFaresTypeFareParametersPrivateFare
     */
    protected $privateFare;
    /**
     * This element finds only public fares.
     *
     * @var OrgOpentravelOta200305FlexibleFaresTypeFareParametersPublicFare
     */
    protected $publicFare;
    /**
     * If set to true, fares that have a refund penalty can be included in the responses. If set to false, then no fares that include a refund penalty requirement will be included in the response. This is negation of XP qualifier.
     *
     * @var OrgOpentravelOta200305FlexibleFaresTypeFareParametersRefundPenalty
     */
    protected $refundPenalty;
    /**
     * If set to true, fares that have a reservation/ticketing can be included in the responses. If set to false, then no fares that include reservation/ticketing requirement will be included in the response. This is negation of XA qualifier.
     *
     * @var OrgOpentravelOta200305FlexibleFaresTypeFareParametersResTicketing
     */
    protected $resTicketing;
    /**
     * Returned fares need to match AcccountCode/CorporateID specified in Fare Group definition on at least one fare component.
     *
     * @var OrgOpentravelOta200305FlexibleFaresTypeFareParametersUseNegotiatedFares
     */
    protected $useNegotiatedFares;
    /**
     * At least one fare component for each passenger type must be applicable for that passenger type.
     *
     * @var OrgOpentravelOta200305FlexibleFaresTypeFareParametersUsePassengerFares
     */
    protected $usePassengerFares;
    /**
     * Identifies whether penalties associated with voluntary changes should be included in the search results.
     *
     * @var OrgOpentravelOta200305VoluntaryChangesSMPType
     */
    protected $voluntaryChanges;
    /**
     * If set to true only fares matching PTC specified in the Flex Fare Group will be returned on all fare components.
     *
     * @var OrgOpentravelOta200305FlexibleFaresTypeFareParametersXOFares
     */
    protected $xOFares;

    /**
     * @return OrgOpentravelOta200305FlexibleFaresTypeFareParametersAccountCode[]
     */
    public function getAccountCode(): array
    {
        return $this->accountCode;
    }

    /**
     * @param OrgOpentravelOta200305FlexibleFaresTypeFareParametersAccountCode[] $accountCode
     *
     * @return self
     */
    public function setAccountCode(array $accountCode): self
    {
        $this->accountCode = $accountCode;

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
     * Set of branded fare switches and preferences for whole flexible fare.
     *
     * @return OrgOpentravelOta200305BrandedFareIndicatorsBase
     */
    public function getBrandedFareIndicators(): OrgOpentravelOta200305BrandedFareIndicatorsBase
    {
        return $this->brandedFareIndicators;
    }

    /**
     * Set of branded fare switches and preferences for whole flexible fare.
     *
     * @param OrgOpentravelOta200305BrandedFareIndicatorsBase $brandedFareIndicators
     *
     * @return self
     */
    public function setBrandedFareIndicators(OrgOpentravelOta200305BrandedFareIndicatorsBase $brandedFareIndicators): self
    {
        $this->brandedFareIndicators = $brandedFareIndicators;

        return $this;
    }

    /**
     * This element specifies preffered cabin type.,A cabin is either Premium First (P), First (F), Premium Business (J), Business (C), Premium Economy (S) or Economy (Y),This element specifies PTC used to find this fare.,Specify traveler type code.
     *
     * @return OrgOpentravelOta200305FlexibleFaresTypeFareParametersCabin
     */
    public function getCabin(): OrgOpentravelOta200305FlexibleFaresTypeFareParametersCabin
    {
        return $this->cabin;
    }

    /**
     * This element specifies preffered cabin type.,A cabin is either Premium First (P), First (F), Premium Business (J), Business (C), Premium Economy (S) or Economy (Y),This element specifies PTC used to find this fare.,Specify traveler type code.
     *
     * @param OrgOpentravelOta200305FlexibleFaresTypeFareParametersCabin $cabin
     *
     * @return self
     */
    public function setCabin(OrgOpentravelOta200305FlexibleFaresTypeFareParametersCabin $cabin): self
    {
        $this->cabin = $cabin;

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
     * @return OrgOpentravelOta200305FlexibleFaresTypeFareParametersCorporateID[]
     */
    public function getCorporateID(): array
    {
        return $this->corporateID;
    }

    /**
     * @param OrgOpentravelOta200305FlexibleFaresTypeFareParametersCorporateID[] $corporateID
     *
     * @return self
     */
    public function setCorporateID(array $corporateID): self
    {
        $this->corporateID = $corporateID;

        return $this;
    }

    /**
     * Setting this to true means the same as setting ResTicketing, MinMaxStay and RefundPenalty to false.
     *
     * @return OrgOpentravelOta200305FlexibleFaresTypeFareParametersExcludeRestricted
     */
    public function getExcludeRestricted(): OrgOpentravelOta200305FlexibleFaresTypeFareParametersExcludeRestricted
    {
        return $this->excludeRestricted;
    }

    /**
     * Setting this to true means the same as setting ResTicketing, MinMaxStay and RefundPenalty to false.
     *
     * @param OrgOpentravelOta200305FlexibleFaresTypeFareParametersExcludeRestricted $excludeRestricted
     *
     * @return self
     */
    public function setExcludeRestricted(OrgOpentravelOta200305FlexibleFaresTypeFareParametersExcludeRestricted $excludeRestricted): self
    {
        $this->excludeRestricted = $excludeRestricted;

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
     * @return OrgOpentravelOta200305JumpCabinLogicType
     */
    public function getJumpCabinLogic(): OrgOpentravelOta200305JumpCabinLogicType
    {
        return $this->jumpCabinLogic;
    }

    /**
     * @param OrgOpentravelOta200305JumpCabinLogicType $jumpCabinLogic
     *
     * @return self
     */
    public function setJumpCabinLogic(OrgOpentravelOta200305JumpCabinLogicType $jumpCabinLogic): self
    {
        $this->jumpCabinLogic = $jumpCabinLogic;

        return $this;
    }

    /**
     * @return OrgOpentravelOta200305KeepSameCabinType
     */
    public function getKeepSameCabin(): OrgOpentravelOta200305KeepSameCabinType
    {
        return $this->keepSameCabin;
    }

    /**
     * @param OrgOpentravelOta200305KeepSameCabinType $keepSameCabin
     *
     * @return self
     */
    public function setKeepSameCabin(OrgOpentravelOta200305KeepSameCabinType $keepSameCabin): self
    {
        $this->keepSameCabin = $keepSameCabin;

        return $this;
    }

    /**
     * @return OrgOpentravelOta200305FlexibleFaresTypeFareParametersLeg[]
     */
    public function getLeg(): array
    {
        return $this->leg;
    }

    /**
     * @param OrgOpentravelOta200305FlexibleFaresTypeFareParametersLeg[] $leg
     *
     * @return self
     */
    public function setLeg(array $leg): self
    {
        $this->leg = $leg;

        return $this;
    }

    /**
     * If set to true, fares that have a min/max stay can be included in the responses. If set to false, then no fares that include a min/max stay requirement will be included in the response. This is negation of XS qualifier.
     *
     * @return OrgOpentravelOta200305FlexibleFaresTypeFareParametersMinMaxStay
     */
    public function getMinMaxStay(): OrgOpentravelOta200305FlexibleFaresTypeFareParametersMinMaxStay
    {
        return $this->minMaxStay;
    }

    /**
     * If set to true, fares that have a min/max stay can be included in the responses. If set to false, then no fares that include a min/max stay requirement will be included in the response. This is negation of XS qualifier.
     *
     * @param OrgOpentravelOta200305FlexibleFaresTypeFareParametersMinMaxStay $minMaxStay
     *
     * @return self
     */
    public function setMinMaxStay(OrgOpentravelOta200305FlexibleFaresTypeFareParametersMinMaxStay $minMaxStay): self
    {
        $this->minMaxStay = $minMaxStay;

        return $this;
    }

    /**
     * If set to true then returned fares need to match AcccountCode/CorpID specified in Fare Group definition on all fare components.
     *
     * @return OrgOpentravelOta200305FlexibleFaresTypeFareParametersNegotiatedFaresOnly
     */
    public function getNegotiatedFaresOnly(): OrgOpentravelOta200305FlexibleFaresTypeFareParametersNegotiatedFaresOnly
    {
        return $this->negotiatedFaresOnly;
    }

    /**
     * If set to true then returned fares need to match AcccountCode/CorpID specified in Fare Group definition on all fare components.
     *
     * @param OrgOpentravelOta200305FlexibleFaresTypeFareParametersNegotiatedFaresOnly $negotiatedFaresOnly
     *
     * @return self
     */
    public function setNegotiatedFaresOnly(OrgOpentravelOta200305FlexibleFaresTypeFareParametersNegotiatedFaresOnly $negotiatedFaresOnly): self
    {
        $this->negotiatedFaresOnly = $negotiatedFaresOnly;

        return $this;
    }

    /**
     * @return OrgOpentravelOta200305FlexibleFaresTypeFareParametersPassengerType
     */
    public function getPassengerType(): OrgOpentravelOta200305FlexibleFaresTypeFareParametersPassengerType
    {
        return $this->passengerType;
    }

    /**
     * @param OrgOpentravelOta200305FlexibleFaresTypeFareParametersPassengerType $passengerType
     *
     * @return self
     */
    public function setPassengerType(OrgOpentravelOta200305FlexibleFaresTypeFareParametersPassengerType $passengerType): self
    {
        $this->passengerType = $passengerType;

        return $this;
    }

    /**
     * @return OrgOpentravelOta200305PassengerTypeQuantityType[]
     */
    public function getPassengerTypeQuantity(): array
    {
        return $this->passengerTypeQuantity;
    }

    /**
     * @param OrgOpentravelOta200305PassengerTypeQuantityType[] $passengerTypeQuantity
     *
     * @return self
     */
    public function setPassengerTypeQuantity(array $passengerTypeQuantity): self
    {
        $this->passengerTypeQuantity = $passengerTypeQuantity;

        return $this;
    }

    /**
     * This element finds only private fares.
     *
     * @return OrgOpentravelOta200305FlexibleFaresTypeFareParametersPrivateFare
     */
    public function getPrivateFare(): OrgOpentravelOta200305FlexibleFaresTypeFareParametersPrivateFare
    {
        return $this->privateFare;
    }

    /**
     * This element finds only private fares.
     *
     * @param OrgOpentravelOta200305FlexibleFaresTypeFareParametersPrivateFare $privateFare
     *
     * @return self
     */
    public function setPrivateFare(OrgOpentravelOta200305FlexibleFaresTypeFareParametersPrivateFare $privateFare): self
    {
        $this->privateFare = $privateFare;

        return $this;
    }

    /**
     * This element finds only public fares.
     *
     * @return OrgOpentravelOta200305FlexibleFaresTypeFareParametersPublicFare
     */
    public function getPublicFare(): OrgOpentravelOta200305FlexibleFaresTypeFareParametersPublicFare
    {
        return $this->publicFare;
    }

    /**
     * This element finds only public fares.
     *
     * @param OrgOpentravelOta200305FlexibleFaresTypeFareParametersPublicFare $publicFare
     *
     * @return self
     */
    public function setPublicFare(OrgOpentravelOta200305FlexibleFaresTypeFareParametersPublicFare $publicFare): self
    {
        $this->publicFare = $publicFare;

        return $this;
    }

    /**
     * If set to true, fares that have a refund penalty can be included in the responses. If set to false, then no fares that include a refund penalty requirement will be included in the response. This is negation of XP qualifier.
     *
     * @return OrgOpentravelOta200305FlexibleFaresTypeFareParametersRefundPenalty
     */
    public function getRefundPenalty(): OrgOpentravelOta200305FlexibleFaresTypeFareParametersRefundPenalty
    {
        return $this->refundPenalty;
    }

    /**
     * If set to true, fares that have a refund penalty can be included in the responses. If set to false, then no fares that include a refund penalty requirement will be included in the response. This is negation of XP qualifier.
     *
     * @param OrgOpentravelOta200305FlexibleFaresTypeFareParametersRefundPenalty $refundPenalty
     *
     * @return self
     */
    public function setRefundPenalty(OrgOpentravelOta200305FlexibleFaresTypeFareParametersRefundPenalty $refundPenalty): self
    {
        $this->refundPenalty = $refundPenalty;

        return $this;
    }

    /**
     * If set to true, fares that have a reservation/ticketing can be included in the responses. If set to false, then no fares that include reservation/ticketing requirement will be included in the response. This is negation of XA qualifier.
     *
     * @return OrgOpentravelOta200305FlexibleFaresTypeFareParametersResTicketing
     */
    public function getResTicketing(): OrgOpentravelOta200305FlexibleFaresTypeFareParametersResTicketing
    {
        return $this->resTicketing;
    }

    /**
     * If set to true, fares that have a reservation/ticketing can be included in the responses. If set to false, then no fares that include reservation/ticketing requirement will be included in the response. This is negation of XA qualifier.
     *
     * @param OrgOpentravelOta200305FlexibleFaresTypeFareParametersResTicketing $resTicketing
     *
     * @return self
     */
    public function setResTicketing(OrgOpentravelOta200305FlexibleFaresTypeFareParametersResTicketing $resTicketing): self
    {
        $this->resTicketing = $resTicketing;

        return $this;
    }

    /**
     * Returned fares need to match AcccountCode/CorporateID specified in Fare Group definition on at least one fare component.
     *
     * @return OrgOpentravelOta200305FlexibleFaresTypeFareParametersUseNegotiatedFares
     */
    public function getUseNegotiatedFares(): OrgOpentravelOta200305FlexibleFaresTypeFareParametersUseNegotiatedFares
    {
        return $this->useNegotiatedFares;
    }

    /**
     * Returned fares need to match AcccountCode/CorporateID specified in Fare Group definition on at least one fare component.
     *
     * @param OrgOpentravelOta200305FlexibleFaresTypeFareParametersUseNegotiatedFares $useNegotiatedFares
     *
     * @return self
     */
    public function setUseNegotiatedFares(OrgOpentravelOta200305FlexibleFaresTypeFareParametersUseNegotiatedFares $useNegotiatedFares): self
    {
        $this->useNegotiatedFares = $useNegotiatedFares;

        return $this;
    }

    /**
     * At least one fare component for each passenger type must be applicable for that passenger type.
     *
     * @return OrgOpentravelOta200305FlexibleFaresTypeFareParametersUsePassengerFares
     */
    public function getUsePassengerFares(): OrgOpentravelOta200305FlexibleFaresTypeFareParametersUsePassengerFares
    {
        return $this->usePassengerFares;
    }

    /**
     * At least one fare component for each passenger type must be applicable for that passenger type.
     *
     * @param OrgOpentravelOta200305FlexibleFaresTypeFareParametersUsePassengerFares $usePassengerFares
     *
     * @return self
     */
    public function setUsePassengerFares(OrgOpentravelOta200305FlexibleFaresTypeFareParametersUsePassengerFares $usePassengerFares): self
    {
        $this->usePassengerFares = $usePassengerFares;

        return $this;
    }

    /**
     * Identifies whether penalties associated with voluntary changes should be included in the search results.
     *
     * @return OrgOpentravelOta200305VoluntaryChangesSMPType
     */
    public function getVoluntaryChanges(): OrgOpentravelOta200305VoluntaryChangesSMPType
    {
        return $this->voluntaryChanges;
    }

    /**
     * Identifies whether penalties associated with voluntary changes should be included in the search results.
     *
     * @param OrgOpentravelOta200305VoluntaryChangesSMPType $voluntaryChanges
     *
     * @return self
     */
    public function setVoluntaryChanges(OrgOpentravelOta200305VoluntaryChangesSMPType $voluntaryChanges): self
    {
        $this->voluntaryChanges = $voluntaryChanges;

        return $this;
    }

    /**
     * If set to true only fares matching PTC specified in the Flex Fare Group will be returned on all fare components.
     *
     * @return OrgOpentravelOta200305FlexibleFaresTypeFareParametersXOFares
     */
    public function getXOFares(): OrgOpentravelOta200305FlexibleFaresTypeFareParametersXOFares
    {
        return $this->xOFares;
    }

    /**
     * If set to true only fares matching PTC specified in the Flex Fare Group will be returned on all fare components.
     *
     * @param OrgOpentravelOta200305FlexibleFaresTypeFareParametersXOFares $xOFares
     *
     * @return self
     */
    public function setXOFares(OrgOpentravelOta200305FlexibleFaresTypeFareParametersXOFares $xOFares): self
    {
        $this->xOFares = $xOFares;

        return $this;
    }
}
