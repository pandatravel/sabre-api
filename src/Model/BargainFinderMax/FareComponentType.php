<?php

namespace Ammonkc\SabreApi\Model\BargainFinderMax;

use Ammonkc\SabreApi\AbstractModel;

class FareComponentType extends AbstractModel
{
    /**
     * @var string
     */
    protected $applicablePricingCategories;
    /**
     * @var string
     */
    protected $aslRetailerRuleCode;
    /**
     * @var BrandType
     */
    protected $brand;
    /**
     * @var bool
     */
    protected $corporateIdMatched;
    /**
     * @var string
     */
    protected $direction;
    /**
     * @var string
     */
    protected $directionality;
    /**
     * @var string
     */
    protected $displayCategoryType;
    /**
     * @var float
     */
    protected $fareAmount;
    /**
     * @var string
     */
    protected $fareBasisCode;
    /**
     * @var int
     */
    protected $fareComponentReferenceId;
    /**
     * @var string
     */
    protected $fareCurrency;
    /**
     * @var string
     */
    protected $farePassengerType;
    /**
     * @var string
     */
    protected $fareTypeBitmap;
    /**
     * @var string
     */
    protected $generalRetailerRuleCode;
    /**
     * @var string
     */
    protected $governingCarrier;
    /**
     * @var HandlingMarkupDetailType[]
     */
    protected $handlingMarkupDetails;
    /**
     * @var HigherIntermediatePointType[]
     */
    protected $higherIntermediatePoints;
    /**
     * @var int
     */
    protected $id;
    /**
     * @var string
     */
    protected $matchedAccountCode;
    /**
     * @var bool
     */
    protected $mileage;
    /**
     * @var int
     */
    protected $mileageSurcharge;
    /**
     * @var int
     */
    protected $milesAmount;
    /**
     * @var bool
     */
    protected $negotiatedFare;
    /**
     * @var string
     */
    protected $notValidAfter;
    /**
     * @var string
     */
    protected $notValidBefore;
    /**
     * @var bool
     */
    protected $oneWayFare;
    /**
     * @var PlusUpInformationType[]
     */
    protected $plusUps;
    /**
     * @var bool
     */
    protected $privateFare;
    /**
     * @var float
     */
    protected $publishedFareAmount;
    /**
     * @var SegmentsType[]
     */
    protected $segments;
    /**
     * @var string
     */
    protected $ticketDesignator;
    /**
     * @var string
     */
    protected $vendorCode;
    /**
     * @var bool
     */
    protected $webBasedFare;

    /**
     * @return string
     */
    public function getApplicablePricingCategories(): string
    {
        return $this->applicablePricingCategories;
    }

    /**
     * @param string $applicablePricingCategories
     *
     * @return self
     */
    public function setApplicablePricingCategories(string $applicablePricingCategories): self
    {
        $this->applicablePricingCategories = $applicablePricingCategories;

        return $this;
    }

    /**
     * @return string
     */
    public function getAslRetailerRuleCode(): string
    {
        return $this->aslRetailerRuleCode;
    }

    /**
     * @param string $aslRetailerRuleCode
     *
     * @return self
     */
    public function setAslRetailerRuleCode(string $aslRetailerRuleCode): self
    {
        $this->aslRetailerRuleCode = $aslRetailerRuleCode;

        return $this;
    }

    /**
     * @return BrandType
     */
    public function getBrand(): BrandType
    {
        return $this->brand;
    }

    /**
     * @param BrandType $brand
     *
     * @return self
     */
    public function setBrand(BrandType $brand): self
    {
        $this->brand = $brand;

        return $this;
    }

    /**
     * @return bool
     */
    public function getCorporateIdMatched(): bool
    {
        return $this->corporateIdMatched;
    }

    /**
     * @param bool $corporateIdMatched
     *
     * @return self
     */
    public function setCorporateIdMatched(bool $corporateIdMatched): self
    {
        $this->corporateIdMatched = $corporateIdMatched;

        return $this;
    }

    /**
     * @return string
     */
    public function getDirection(): string
    {
        return $this->direction;
    }

    /**
     * @param string $direction
     *
     * @return self
     */
    public function setDirection(string $direction): self
    {
        $this->direction = $direction;

        return $this;
    }

    /**
     * @return string
     */
    public function getDirectionality(): string
    {
        return $this->directionality;
    }

    /**
     * @param string $directionality
     *
     * @return self
     */
    public function setDirectionality(string $directionality): self
    {
        $this->directionality = $directionality;

        return $this;
    }

    /**
     * @return string
     */
    public function getDisplayCategoryType(): string
    {
        return $this->displayCategoryType;
    }

    /**
     * @param string $displayCategoryType
     *
     * @return self
     */
    public function setDisplayCategoryType(string $displayCategoryType): self
    {
        $this->displayCategoryType = $displayCategoryType;

        return $this;
    }

    /**
     * @return float
     */
    public function getFareAmount(): float
    {
        return $this->fareAmount;
    }

    /**
     * @param float $fareAmount
     *
     * @return self
     */
    public function setFareAmount(float $fareAmount): self
    {
        $this->fareAmount = $fareAmount;

        return $this;
    }

    /**
     * @return string
     */
    public function getFareBasisCode(): string
    {
        return $this->fareBasisCode;
    }

    /**
     * @param string $fareBasisCode
     *
     * @return self
     */
    public function setFareBasisCode(string $fareBasisCode): self
    {
        $this->fareBasisCode = $fareBasisCode;

        return $this;
    }

    /**
     * @return int
     */
    public function getFareComponentReferenceId(): int
    {
        return $this->fareComponentReferenceId;
    }

    /**
     * @param int $fareComponentReferenceId
     *
     * @return self
     */
    public function setFareComponentReferenceId(int $fareComponentReferenceId): self
    {
        $this->fareComponentReferenceId = $fareComponentReferenceId;

        return $this;
    }

    /**
     * @return string
     */
    public function getFareCurrency(): string
    {
        return $this->fareCurrency;
    }

    /**
     * @param string $fareCurrency
     *
     * @return self
     */
    public function setFareCurrency(string $fareCurrency): self
    {
        $this->fareCurrency = $fareCurrency;

        return $this;
    }

    /**
     * @return string
     */
    public function getFarePassengerType(): string
    {
        return $this->farePassengerType;
    }

    /**
     * @param string $farePassengerType
     *
     * @return self
     */
    public function setFarePassengerType(string $farePassengerType): self
    {
        $this->farePassengerType = $farePassengerType;

        return $this;
    }

    /**
     * @return string
     */
    public function getFareTypeBitmap(): string
    {
        return $this->fareTypeBitmap;
    }

    /**
     * @param string $fareTypeBitmap
     *
     * @return self
     */
    public function setFareTypeBitmap(string $fareTypeBitmap): self
    {
        $this->fareTypeBitmap = $fareTypeBitmap;

        return $this;
    }

    /**
     * @return string
     */
    public function getGeneralRetailerRuleCode(): string
    {
        return $this->generalRetailerRuleCode;
    }

    /**
     * @param string $generalRetailerRuleCode
     *
     * @return self
     */
    public function setGeneralRetailerRuleCode(string $generalRetailerRuleCode): self
    {
        $this->generalRetailerRuleCode = $generalRetailerRuleCode;

        return $this;
    }

    /**
     * @return string
     */
    public function getGoverningCarrier(): string
    {
        return $this->governingCarrier;
    }

    /**
     * @param string $governingCarrier
     *
     * @return self
     */
    public function setGoverningCarrier(string $governingCarrier): self
    {
        $this->governingCarrier = $governingCarrier;

        return $this;
    }

    /**
     * @return HandlingMarkupDetailType[]
     */
    public function getHandlingMarkupDetails(): array
    {
        return $this->handlingMarkupDetails;
    }

    /**
     * @param HandlingMarkupDetailType[] $handlingMarkupDetails
     *
     * @return self
     */
    public function setHandlingMarkupDetails(array $handlingMarkupDetails): self
    {
        $this->handlingMarkupDetails = $handlingMarkupDetails;

        return $this;
    }

    /**
     * @return HigherIntermediatePointType[]
     */
    public function getHigherIntermediatePoints(): array
    {
        return $this->higherIntermediatePoints;
    }

    /**
     * @param HigherIntermediatePointType[] $higherIntermediatePoints
     *
     * @return self
     */
    public function setHigherIntermediatePoints(array $higherIntermediatePoints): self
    {
        $this->higherIntermediatePoints = $higherIntermediatePoints;

        return $this;
    }

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param int $id
     *
     * @return self
     */
    public function setId(int $id): self
    {
        $this->id = $id;

        return $this;
    }

    /**
     * @return string
     */
    public function getMatchedAccountCode(): string
    {
        return $this->matchedAccountCode;
    }

    /**
     * @param string $matchedAccountCode
     *
     * @return self
     */
    public function setMatchedAccountCode(string $matchedAccountCode): self
    {
        $this->matchedAccountCode = $matchedAccountCode;

        return $this;
    }

    /**
     * @return bool
     */
    public function getMileage(): bool
    {
        return $this->mileage;
    }

    /**
     * @param bool $mileage
     *
     * @return self
     */
    public function setMileage(bool $mileage): self
    {
        $this->mileage = $mileage;

        return $this;
    }

    /**
     * @return int
     */
    public function getMileageSurcharge(): int
    {
        return $this->mileageSurcharge;
    }

    /**
     * @param int $mileageSurcharge
     *
     * @return self
     */
    public function setMileageSurcharge(int $mileageSurcharge): self
    {
        $this->mileageSurcharge = $mileageSurcharge;

        return $this;
    }

    /**
     * @return int
     */
    public function getMilesAmount(): int
    {
        return $this->milesAmount;
    }

    /**
     * @param int $milesAmount
     *
     * @return self
     */
    public function setMilesAmount(int $milesAmount): self
    {
        $this->milesAmount = $milesAmount;

        return $this;
    }

    /**
     * @return bool
     */
    public function getNegotiatedFare(): bool
    {
        return $this->negotiatedFare;
    }

    /**
     * @param bool $negotiatedFare
     *
     * @return self
     */
    public function setNegotiatedFare(bool $negotiatedFare): self
    {
        $this->negotiatedFare = $negotiatedFare;

        return $this;
    }

    /**
     * @return string
     */
    public function getNotValidAfter(): string
    {
        return $this->notValidAfter;
    }

    /**
     * @param string $notValidAfter
     *
     * @return self
     */
    public function setNotValidAfter(string $notValidAfter): self
    {
        $this->notValidAfter = $notValidAfter;

        return $this;
    }

    /**
     * @return string
     */
    public function getNotValidBefore(): string
    {
        return $this->notValidBefore;
    }

    /**
     * @param string $notValidBefore
     *
     * @return self
     */
    public function setNotValidBefore(string $notValidBefore): self
    {
        $this->notValidBefore = $notValidBefore;

        return $this;
    }

    /**
     * @return bool
     */
    public function getOneWayFare(): bool
    {
        return $this->oneWayFare;
    }

    /**
     * @param bool $oneWayFare
     *
     * @return self
     */
    public function setOneWayFare(bool $oneWayFare): self
    {
        $this->oneWayFare = $oneWayFare;

        return $this;
    }

    /**
     * @return PlusUpInformationType[]
     */
    public function getPlusUps(): array
    {
        return $this->plusUps;
    }

    /**
     * @param PlusUpInformationType[] $plusUps
     *
     * @return self
     */
    public function setPlusUps(array $plusUps): self
    {
        $this->plusUps = $plusUps;

        return $this;
    }

    /**
     * @return bool
     */
    public function getPrivateFare(): bool
    {
        return $this->privateFare;
    }

    /**
     * @param bool $privateFare
     *
     * @return self
     */
    public function setPrivateFare(bool $privateFare): self
    {
        $this->privateFare = $privateFare;

        return $this;
    }

    /**
     * @return float
     */
    public function getPublishedFareAmount(): float
    {
        return $this->publishedFareAmount;
    }

    /**
     * @param float $publishedFareAmount
     *
     * @return self
     */
    public function setPublishedFareAmount(float $publishedFareAmount): self
    {
        $this->publishedFareAmount = $publishedFareAmount;

        return $this;
    }

    /**
     * @return SegmentsType[]
     */
    public function getSegments(): array
    {
        return $this->segments;
    }

    /**
     * @param SegmentsType[] $segments
     *
     * @return self
     */
    public function setSegments(array $segments): self
    {
        $this->segments = $segments;

        return $this;
    }

    /**
     * @return string
     */
    public function getTicketDesignator(): string
    {
        return $this->ticketDesignator;
    }

    /**
     * @param string $ticketDesignator
     *
     * @return self
     */
    public function setTicketDesignator(string $ticketDesignator): self
    {
        $this->ticketDesignator = $ticketDesignator;

        return $this;
    }

    /**
     * @return string
     */
    public function getVendorCode(): string
    {
        return $this->vendorCode;
    }

    /**
     * @param string $vendorCode
     *
     * @return self
     */
    public function setVendorCode(string $vendorCode): self
    {
        $this->vendorCode = $vendorCode;

        return $this;
    }

    /**
     * @return bool
     */
    public function getWebBasedFare(): bool
    {
        return $this->webBasedFare;
    }

    /**
     * @param bool $webBasedFare
     *
     * @return self
     */
    public function setWebBasedFare(bool $webBasedFare): self
    {
        $this->webBasedFare = $webBasedFare;

        return $this;
    }
}
