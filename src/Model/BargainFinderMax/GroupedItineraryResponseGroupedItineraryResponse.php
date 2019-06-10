<?php

namespace Ammonkc\SabreApi\Model\BargainFinderMax;

use Ammonkc\SabreApi\AbstractModel;

class GroupedItineraryResponseGroupedItineraryResponse extends AbstractModel
{
    /**
     * @var BaggageAllowanceType[]
     */
    protected $baggageAllowanceDescs;
    /**
     * @var BaggageChargeType[]
     */
    protected $baggageChargeDescs;
    /**
     * @var BrandFeatureType[]
     */
    protected $brandFeatureDescs;
    /**
     * @var CacheSourceDescType[]
     */
    protected $cacheSourceDescs;
    /**
     * @var FareComponentType[]
     */
    protected $fareComponentDescs;
    /**
     * @var ItineraryGroupType[]
     */
    protected $itineraryGroups;
    /**
     * @var LegType[]
     */
    protected $legDescs;
    /**
     * @var MessageType[]
     */
    protected $messages;
    /**
     * @var OBFeeType[]
     */
    protected $obFeeDescs;
    /**
     * @var ScheduleDescType[]
     */
    protected $scheduleDescs;
    /**
     * @var ScheduleMessageType[]
     */
    protected $scheduleMessages;
    /**
     * @var StatisticsType
     */
    protected $statistics;
    /**
     * @var TaxType[]
     */
    protected $taxDescs;
    /**
     * @var TaxSummaryType[]
     */
    protected $taxSummaryDescs;
    /**
     * @var ValidatingCarrierType[]
     */
    protected $validatingCarrierDescs;
    /**
     * @var string
     */
    protected $version;

    /**
     * @return BaggageAllowanceType[]
     */
    public function getBaggageAllowanceDescs(): ?array
    {
        return $this->baggageAllowanceDescs;
    }

    /**
     * @param BaggageAllowanceType[] $baggageAllowanceDescs
     *
     * @return self
     */
    public function setBaggageAllowanceDescs(?array $baggageAllowanceDescs): self
    {
        $this->baggageAllowanceDescs = $baggageAllowanceDescs;

        return $this;
    }

    /**
     * @return BaggageChargeType[]
     */
    public function getBaggageChargeDescs(): ?array
    {
        return $this->baggageChargeDescs;
    }

    /**
     * @param BaggageChargeType[] $baggageChargeDescs
     *
     * @return self
     */
    public function setBaggageChargeDescs(?array $baggageChargeDescs): self
    {
        $this->baggageChargeDescs = $baggageChargeDescs;

        return $this;
    }

    /**
     * @return BrandFeatureType[]
     */
    public function getBrandFeatureDescs(): ?array
    {
        return $this->brandFeatureDescs;
    }

    /**
     * @param BrandFeatureType[] $brandFeatureDescs
     *
     * @return self
     */
    public function setBrandFeatureDescs(?array $brandFeatureDescs): self
    {
        $this->brandFeatureDescs = $brandFeatureDescs;

        return $this;
    }

    /**
     * @return CacheSourceDescType[]
     */
    public function getCacheSourceDescs(): ?array
    {
        return $this->cacheSourceDescs;
    }

    /**
     * @param CacheSourceDescType[] $cacheSourceDescs
     *
     * @return self
     */
    public function setCacheSourceDescs(?array $cacheSourceDescs): self
    {
        $this->cacheSourceDescs = $cacheSourceDescs;

        return $this;
    }

    /**
     * @return FareComponentType[]
     */
    public function getFareComponentDescs(): ?array
    {
        return $this->fareComponentDescs;
    }

    /**
     * @param FareComponentType[] $fareComponentDescs
     *
     * @return self
     */
    public function setFareComponentDescs(?array $fareComponentDescs): self
    {
        $this->fareComponentDescs = $fareComponentDescs;

        return $this;
    }

    /**
     * @return ItineraryGroupType[]
     */
    public function getItineraryGroups(): ?array
    {
        return $this->itineraryGroups;
    }

    /**
     * @param ItineraryGroupType[] $itineraryGroups
     *
     * @return self
     */
    public function setItineraryGroups(?array $itineraryGroups): self
    {
        $this->itineraryGroups = $itineraryGroups;

        return $this;
    }

    /**
     * @return LegType[]
     */
    public function getLegDescs(): ?array
    {
        return $this->legDescs;
    }

    /**
     * @param LegType[] $legDescs
     *
     * @return self
     */
    public function setLegDescs(?array $legDescs): self
    {
        $this->legDescs = $legDescs;

        return $this;
    }

    /**
     * @return MessageType[]
     */
    public function getMessages(): ?array
    {
        return $this->messages;
    }

    /**
     * @param MessageType[] $messages
     *
     * @return self
     */
    public function setMessages(?array $messages): self
    {
        $this->messages = $messages;

        return $this;
    }

    /**
     * @return OBFeeType[]
     */
    public function getObFeeDescs(): ?array
    {
        return $this->obFeeDescs;
    }

    /**
     * @param OBFeeType[] $obFeeDescs
     *
     * @return self
     */
    public function setObFeeDescs(?array $obFeeDescs): self
    {
        $this->obFeeDescs = $obFeeDescs;

        return $this;
    }

    /**
     * @return ScheduleDescType[]
     */
    public function getScheduleDescs(): ?array
    {
        return $this->scheduleDescs;
    }

    /**
     * @param ScheduleDescType[] $scheduleDescs
     *
     * @return self
     */
    public function setScheduleDescs(?array $scheduleDescs): self
    {
        $this->scheduleDescs = $scheduleDescs;

        return $this;
    }

    /**
     * @return ScheduleMessageType[]
     */
    public function getScheduleMessages(): ?array
    {
        return $this->scheduleMessages;
    }

    /**
     * @param ScheduleMessageType[] $scheduleMessages
     *
     * @return self
     */
    public function setScheduleMessages(?array $scheduleMessages): self
    {
        $this->scheduleMessages = $scheduleMessages;

        return $this;
    }

    /**
     * @return StatisticsType
     */
    public function getStatistics(): ?StatisticsType
    {
        return $this->statistics;
    }

    /**
     * @param StatisticsType $statistics
     *
     * @return self
     */
    public function setStatistics(?StatisticsType $statistics): self
    {
        $this->statistics = $statistics;

        return $this;
    }

    /**
     * @return TaxType[]
     */
    public function getTaxDescs(): ?array
    {
        return $this->taxDescs;
    }

    /**
     * @param TaxType[] $taxDescs
     *
     * @return self
     */
    public function setTaxDescs(?array $taxDescs): self
    {
        $this->taxDescs = $taxDescs;

        return $this;
    }

    /**
     * @return TaxSummaryType[]
     */
    public function getTaxSummaryDescs(): ?array
    {
        return $this->taxSummaryDescs;
    }

    /**
     * @param TaxSummaryType[] $taxSummaryDescs
     *
     * @return self
     */
    public function setTaxSummaryDescs(?array $taxSummaryDescs): self
    {
        $this->taxSummaryDescs = $taxSummaryDescs;

        return $this;
    }

    /**
     * @return ValidatingCarrierType[]
     */
    public function getValidatingCarrierDescs(): ?array
    {
        return $this->validatingCarrierDescs;
    }

    /**
     * @param ValidatingCarrierType[] $validatingCarrierDescs
     *
     * @return self
     */
    public function setValidatingCarrierDescs(?array $validatingCarrierDescs): self
    {
        $this->validatingCarrierDescs = $validatingCarrierDescs;

        return $this;
    }

    /**
     * @return string
     */
    public function getVersion(): ?string
    {
        return $this->version;
    }

    /**
     * @param string $version
     *
     * @return self
     */
    public function setVersion(?string $version): self
    {
        $this->version = $version;

        return $this;
    }
}
