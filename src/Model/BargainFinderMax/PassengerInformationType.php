<?php

namespace Ammonkc\SabreApi\Model\BargainFinderMax;

use Ammonkc\SabreApi\AbstractModel;

class PassengerInformationType extends AbstractModel
{
    /**
     * @var BaggageInformationType[]
     */
    protected $baggageInformation;
    /**
     * @var CurrencyConversionType
     */
    protected $currencyConversion;
    /**
     * @var bool
     */
    protected $divide;
    /**
     * @var FareComponentIDType[]
     */
    protected $fareComponents;
    /**
     * @var FareMessageType[]
     */
    protected $fareMessages;
    /**
     * @var PricingLegType[]
     */
    protected $legs;
    /**
     * @var bool
     */
    protected $nonRefundable;
    /**
     * @var OBFeeIDType[]
     */
    protected $obFees;
    /**
     * @var int
     */
    protected $passengerNumber;
    /**
     * @var PassengerTotalFareType
     */
    protected $passengerTotalFare;
    /**
     * @var string
     */
    protected $passengerType;
    /**
     * @var PenaltiesType
     */
    protected $penaltiesInfo;
    /**
     * @var PlusUpInformationType[]
     */
    protected $plusUps;
    /**
     * @var ReissueType
     */
    protected $reissue;
    /**
     * @var SellingFareDataType[]
     */
    protected $sellingFareData;
    /**
     * @var int
     */
    protected $stopover;
    /**
     * @var TaxSummaryIDType[]
     */
    protected $taxSummaries;
    /**
     * @var TaxIDType[]
     */
    protected $taxes;
    /**
     * @var int
     */
    protected $total;
    /**
     * @var ValidatingCarrierCommissionInfoType[]
     */
    protected $validatingCarrierCommissionInfo;

    /**
     * @return BaggageInformationType[]
     */
    public function getBaggageInformation(): ?array
    {
        return $this->baggageInformation;
    }

    /**
     * @param BaggageInformationType[] $baggageInformation
     *
     * @return self
     */
    public function setBaggageInformation(?array $baggageInformation): self
    {
        $this->baggageInformation = $baggageInformation;

        return $this;
    }

    /**
     * @return CurrencyConversionType
     */
    public function getCurrencyConversion(): ?CurrencyConversionType
    {
        return $this->currencyConversion;
    }

    /**
     * @param CurrencyConversionType $currencyConversion
     *
     * @return self
     */
    public function setCurrencyConversion(?CurrencyConversionType $currencyConversion): self
    {
        $this->currencyConversion = $currencyConversion;

        return $this;
    }

    /**
     * @return bool
     */
    public function getDivide(): ?bool
    {
        return $this->divide;
    }

    /**
     * @param bool $divide
     *
     * @return self
     */
    public function setDivide(?bool $divide): self
    {
        $this->divide = $divide;

        return $this;
    }

    /**
     * @return FareComponentIDType[]
     */
    public function getFareComponents(): ?array
    {
        return $this->fareComponents;
    }

    /**
     * @param FareComponentIDType[] $fareComponents
     *
     * @return self
     */
    public function setFareComponents(?array $fareComponents): self
    {
        $this->fareComponents = $fareComponents;

        return $this;
    }

    /**
     * @return FareMessageType[]
     */
    public function getFareMessages(): ?array
    {
        return $this->fareMessages;
    }

    /**
     * @param FareMessageType[] $fareMessages
     *
     * @return self
     */
    public function setFareMessages(?array $fareMessages): self
    {
        $this->fareMessages = $fareMessages;

        return $this;
    }

    /**
     * @return PricingLegType[]
     */
    public function getLegs(): ?array
    {
        return $this->legs;
    }

    /**
     * @param PricingLegType[] $legs
     *
     * @return self
     */
    public function setLegs(?array $legs): self
    {
        $this->legs = $legs;

        return $this;
    }

    /**
     * @return bool
     */
    public function getNonRefundable(): ?bool
    {
        return $this->nonRefundable;
    }

    /**
     * @param bool $nonRefundable
     *
     * @return self
     */
    public function setNonRefundable(?bool $nonRefundable): self
    {
        $this->nonRefundable = $nonRefundable;

        return $this;
    }

    /**
     * @return OBFeeIDType[]
     */
    public function getObFees(): ?array
    {
        return $this->obFees;
    }

    /**
     * @param OBFeeIDType[] $obFees
     *
     * @return self
     */
    public function setObFees(?array $obFees): self
    {
        $this->obFees = $obFees;

        return $this;
    }

    /**
     * @return int
     */
    public function getPassengerNumber(): ?int
    {
        return $this->passengerNumber;
    }

    /**
     * @param int $passengerNumber
     *
     * @return self
     */
    public function setPassengerNumber(?int $passengerNumber): self
    {
        $this->passengerNumber = $passengerNumber;

        return $this;
    }

    /**
     * @return PassengerTotalFareType
     */
    public function getPassengerTotalFare(): ?PassengerTotalFareType
    {
        return $this->passengerTotalFare;
    }

    /**
     * @param PassengerTotalFareType $passengerTotalFare
     *
     * @return self
     */
    public function setPassengerTotalFare(?PassengerTotalFareType $passengerTotalFare): self
    {
        $this->passengerTotalFare = $passengerTotalFare;

        return $this;
    }

    /**
     * @return string
     */
    public function getPassengerType(): ?string
    {
        return $this->passengerType;
    }

    /**
     * @param string $passengerType
     *
     * @return self
     */
    public function setPassengerType(?string $passengerType): self
    {
        $this->passengerType = $passengerType;

        return $this;
    }

    /**
     * @return PenaltiesType
     */
    public function getPenaltiesInfo(): ?PenaltiesType
    {
        return $this->penaltiesInfo;
    }

    /**
     * @param PenaltiesType $penaltiesInfo
     *
     * @return self
     */
    public function setPenaltiesInfo(?PenaltiesType $penaltiesInfo): self
    {
        $this->penaltiesInfo = $penaltiesInfo;

        return $this;
    }

    /**
     * @return PlusUpInformationType[]
     */
    public function getPlusUps(): ?array
    {
        return $this->plusUps;
    }

    /**
     * @param PlusUpInformationType[] $plusUps
     *
     * @return self
     */
    public function setPlusUps(?array $plusUps): self
    {
        $this->plusUps = $plusUps;

        return $this;
    }

    /**
     * @return ReissueType
     */
    public function getReissue(): ?ReissueType
    {
        return $this->reissue;
    }

    /**
     * @param ReissueType $reissue
     *
     * @return self
     */
    public function setReissue(?ReissueType $reissue): self
    {
        $this->reissue = $reissue;

        return $this;
    }

    /**
     * @return SellingFareDataType[]
     */
    public function getSellingFareData(): ?array
    {
        return $this->sellingFareData;
    }

    /**
     * @param SellingFareDataType[] $sellingFareData
     *
     * @return self
     */
    public function setSellingFareData(?array $sellingFareData): self
    {
        $this->sellingFareData = $sellingFareData;

        return $this;
    }

    /**
     * @return int
     */
    public function getStopover(): ?int
    {
        return $this->stopover;
    }

    /**
     * @param int $stopover
     *
     * @return self
     */
    public function setStopover(?int $stopover): self
    {
        $this->stopover = $stopover;

        return $this;
    }

    /**
     * @return TaxSummaryIDType[]
     */
    public function getTaxSummaries(): ?array
    {
        return $this->taxSummaries;
    }

    /**
     * @param TaxSummaryIDType[] $taxSummaries
     *
     * @return self
     */
    public function setTaxSummaries(?array $taxSummaries): self
    {
        $this->taxSummaries = $taxSummaries;

        return $this;
    }

    /**
     * @return TaxIDType[]
     */
    public function getTaxes(): ?array
    {
        return $this->taxes;
    }

    /**
     * @param TaxIDType[] $taxes
     *
     * @return self
     */
    public function setTaxes(?array $taxes): self
    {
        $this->taxes = $taxes;

        return $this;
    }

    /**
     * @return int
     */
    public function getTotal(): ?int
    {
        return $this->total;
    }

    /**
     * @param int $total
     *
     * @return self
     */
    public function setTotal(?int $total): self
    {
        $this->total = $total;

        return $this;
    }

    /**
     * @return ValidatingCarrierCommissionInfoType[]
     */
    public function getValidatingCarrierCommissionInfo(): ?array
    {
        return $this->validatingCarrierCommissionInfo;
    }

    /**
     * @param ValidatingCarrierCommissionInfoType[] $validatingCarrierCommissionInfo
     *
     * @return self
     */
    public function setValidatingCarrierCommissionInfo(?array $validatingCarrierCommissionInfo): self
    {
        $this->validatingCarrierCommissionInfo = $validatingCarrierCommissionInfo;

        return $this;
    }
}
