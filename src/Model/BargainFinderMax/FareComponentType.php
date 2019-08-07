<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

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
     * @return string|null
     */
    public function getApplicablePricingCategories(): ?string
    {
        return $this->applicablePricingCategories;
    }

    /**
     * @param string|null $applicablePricingCategories
     *
     * @return self
     */
    public function setApplicablePricingCategories(?string $applicablePricingCategories): self
    {
        $this->applicablePricingCategories = $applicablePricingCategories;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getAslRetailerRuleCode(): ?string
    {
        return $this->aslRetailerRuleCode;
    }

    /**
     * @param string|null $aslRetailerRuleCode
     *
     * @return self
     */
    public function setAslRetailerRuleCode(?string $aslRetailerRuleCode): self
    {
        $this->aslRetailerRuleCode = $aslRetailerRuleCode;

        return $this;
    }

    /**
     * @return BrandType|null
     */
    public function getBrand(): ?BrandType
    {
        return $this->brand;
    }

    /**
     * @param BrandType|null $brand
     *
     * @return self
     */
    public function setBrand(?BrandType $brand): self
    {
        $this->brand = $brand;

        return $this;
    }

    /**
     * @return bool|null
     */
    public function getCorporateIdMatched(): ?bool
    {
        return $this->corporateIdMatched;
    }

    /**
     * @param bool|null $corporateIdMatched
     *
     * @return self
     */
    public function setCorporateIdMatched(?bool $corporateIdMatched): self
    {
        $this->corporateIdMatched = $corporateIdMatched;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getDirection(): ?string
    {
        return $this->direction;
    }

    /**
     * @param string|null $direction
     *
     * @return self
     */
    public function setDirection(?string $direction): self
    {
        $this->direction = $direction;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getDirectionality(): ?string
    {
        return $this->directionality;
    }

    /**
     * @param string|null $directionality
     *
     * @return self
     */
    public function setDirectionality(?string $directionality): self
    {
        $this->directionality = $directionality;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getDisplayCategoryType(): ?string
    {
        return $this->displayCategoryType;
    }

    /**
     * @param string|null $displayCategoryType
     *
     * @return self
     */
    public function setDisplayCategoryType(?string $displayCategoryType): self
    {
        $this->displayCategoryType = $displayCategoryType;

        return $this;
    }

    /**
     * @return float|null
     */
    public function getFareAmount(): ?float
    {
        return $this->fareAmount;
    }

    /**
     * @param float|null $fareAmount
     *
     * @return self
     */
    public function setFareAmount(?float $fareAmount): self
    {
        $this->fareAmount = $fareAmount;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getFareBasisCode(): ?string
    {
        return $this->fareBasisCode;
    }

    /**
     * @param string|null $fareBasisCode
     *
     * @return self
     */
    public function setFareBasisCode(?string $fareBasisCode): self
    {
        $this->fareBasisCode = $fareBasisCode;

        return $this;
    }

    /**
     * @return int|null
     */
    public function getFareComponentReferenceId(): ?int
    {
        return $this->fareComponentReferenceId;
    }

    /**
     * @param int|null $fareComponentReferenceId
     *
     * @return self
     */
    public function setFareComponentReferenceId(?int $fareComponentReferenceId): self
    {
        $this->fareComponentReferenceId = $fareComponentReferenceId;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getFareCurrency(): ?string
    {
        return $this->fareCurrency;
    }

    /**
     * @param string|null $fareCurrency
     *
     * @return self
     */
    public function setFareCurrency(?string $fareCurrency): self
    {
        $this->fareCurrency = $fareCurrency;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getFarePassengerType(): ?string
    {
        return $this->farePassengerType;
    }

    /**
     * @param string|null $farePassengerType
     *
     * @return self
     */
    public function setFarePassengerType(?string $farePassengerType): self
    {
        $this->farePassengerType = $farePassengerType;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getFareTypeBitmap(): ?string
    {
        return $this->fareTypeBitmap;
    }

    /**
     * @param string|null $fareTypeBitmap
     *
     * @return self
     */
    public function setFareTypeBitmap(?string $fareTypeBitmap): self
    {
        $this->fareTypeBitmap = $fareTypeBitmap;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getGeneralRetailerRuleCode(): ?string
    {
        return $this->generalRetailerRuleCode;
    }

    /**
     * @param string|null $generalRetailerRuleCode
     *
     * @return self
     */
    public function setGeneralRetailerRuleCode(?string $generalRetailerRuleCode): self
    {
        $this->generalRetailerRuleCode = $generalRetailerRuleCode;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getGoverningCarrier(): ?string
    {
        return $this->governingCarrier;
    }

    /**
     * @param string|null $governingCarrier
     *
     * @return self
     */
    public function setGoverningCarrier(?string $governingCarrier): self
    {
        $this->governingCarrier = $governingCarrier;

        return $this;
    }

    /**
     * @return HandlingMarkupDetailType[]|null
     */
    public function getHandlingMarkupDetails(): ?array
    {
        return $this->handlingMarkupDetails;
    }

    /**
     * @param HandlingMarkupDetailType[]|null $handlingMarkupDetails
     *
     * @return self
     */
    public function setHandlingMarkupDetails(?array $handlingMarkupDetails): self
    {
        $this->handlingMarkupDetails = $handlingMarkupDetails;

        return $this;
    }

    /**
     * @return HigherIntermediatePointType[]|null
     */
    public function getHigherIntermediatePoints(): ?array
    {
        return $this->higherIntermediatePoints;
    }

    /**
     * @param HigherIntermediatePointType[]|null $higherIntermediatePoints
     *
     * @return self
     */
    public function setHigherIntermediatePoints(?array $higherIntermediatePoints): self
    {
        $this->higherIntermediatePoints = $higherIntermediatePoints;

        return $this;
    }

    /**
     * @return int|null
     */
    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @param int|null $id
     *
     * @return self
     */
    public function setId(?int $id): self
    {
        $this->id = $id;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getMatchedAccountCode(): ?string
    {
        return $this->matchedAccountCode;
    }

    /**
     * @param string|null $matchedAccountCode
     *
     * @return self
     */
    public function setMatchedAccountCode(?string $matchedAccountCode): self
    {
        $this->matchedAccountCode = $matchedAccountCode;

        return $this;
    }

    /**
     * @return bool|null
     */
    public function getMileage(): ?bool
    {
        return $this->mileage;
    }

    /**
     * @param bool|null $mileage
     *
     * @return self
     */
    public function setMileage(?bool $mileage): self
    {
        $this->mileage = $mileage;

        return $this;
    }

    /**
     * @return int|null
     */
    public function getMileageSurcharge(): ?int
    {
        return $this->mileageSurcharge;
    }

    /**
     * @param int|null $mileageSurcharge
     *
     * @return self
     */
    public function setMileageSurcharge(?int $mileageSurcharge): self
    {
        $this->mileageSurcharge = $mileageSurcharge;

        return $this;
    }

    /**
     * @return int|null
     */
    public function getMilesAmount(): ?int
    {
        return $this->milesAmount;
    }

    /**
     * @param int|null $milesAmount
     *
     * @return self
     */
    public function setMilesAmount(?int $milesAmount): self
    {
        $this->milesAmount = $milesAmount;

        return $this;
    }

    /**
     * @return bool|null
     */
    public function getNegotiatedFare(): ?bool
    {
        return $this->negotiatedFare;
    }

    /**
     * @param bool|null $negotiatedFare
     *
     * @return self
     */
    public function setNegotiatedFare(?bool $negotiatedFare): self
    {
        $this->negotiatedFare = $negotiatedFare;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getNotValidAfter(): ?string
    {
        return $this->notValidAfter;
    }

    /**
     * @param string|null $notValidAfter
     *
     * @return self
     */
    public function setNotValidAfter(?string $notValidAfter): self
    {
        $this->notValidAfter = $notValidAfter;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getNotValidBefore(): ?string
    {
        return $this->notValidBefore;
    }

    /**
     * @param string|null $notValidBefore
     *
     * @return self
     */
    public function setNotValidBefore(?string $notValidBefore): self
    {
        $this->notValidBefore = $notValidBefore;

        return $this;
    }

    /**
     * @return bool|null
     */
    public function getOneWayFare(): ?bool
    {
        return $this->oneWayFare;
    }

    /**
     * @param bool|null $oneWayFare
     *
     * @return self
     */
    public function setOneWayFare(?bool $oneWayFare): self
    {
        $this->oneWayFare = $oneWayFare;

        return $this;
    }

    /**
     * @return PlusUpInformationType[]|null
     */
    public function getPlusUps(): ?array
    {
        return $this->plusUps;
    }

    /**
     * @param PlusUpInformationType[]|null $plusUps
     *
     * @return self
     */
    public function setPlusUps(?array $plusUps): self
    {
        $this->plusUps = $plusUps;

        return $this;
    }

    /**
     * @return bool|null
     */
    public function getPrivateFare(): ?bool
    {
        return $this->privateFare;
    }

    /**
     * @param bool|null $privateFare
     *
     * @return self
     */
    public function setPrivateFare(?bool $privateFare): self
    {
        $this->privateFare = $privateFare;

        return $this;
    }

    /**
     * @return float|null
     */
    public function getPublishedFareAmount(): ?float
    {
        return $this->publishedFareAmount;
    }

    /**
     * @param float|null $publishedFareAmount
     *
     * @return self
     */
    public function setPublishedFareAmount(?float $publishedFareAmount): self
    {
        $this->publishedFareAmount = $publishedFareAmount;

        return $this;
    }

    /**
     * @return SegmentsType[]|null
     */
    public function getSegments(): ?array
    {
        return $this->segments;
    }

    /**
     * @param SegmentsType[]|null $segments
     *
     * @return self
     */
    public function setSegments(?array $segments): self
    {
        $this->segments = $segments;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getTicketDesignator(): ?string
    {
        return $this->ticketDesignator;
    }

    /**
     * @param string|null $ticketDesignator
     *
     * @return self
     */
    public function setTicketDesignator(?string $ticketDesignator): self
    {
        $this->ticketDesignator = $ticketDesignator;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getVendorCode(): ?string
    {
        return $this->vendorCode;
    }

    /**
     * @param string|null $vendorCode
     *
     * @return self
     */
    public function setVendorCode(?string $vendorCode): self
    {
        $this->vendorCode = $vendorCode;

        return $this;
    }

    /**
     * @return bool|null
     */
    public function getWebBasedFare(): ?bool
    {
        return $this->webBasedFare;
    }

    /**
     * @param bool|null $webBasedFare
     *
     * @return self
     */
    public function setWebBasedFare(?bool $webBasedFare): self
    {
        $this->webBasedFare = $webBasedFare;

        return $this;
    }
}
