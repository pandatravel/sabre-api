<?php

namespace Ammonkc\SabreApi\Model\BargainFinderMax;

use Ammonkc\SabreApi\AbstractModel;

class OrgOpentravelOta200305OTAAirLowFareSearchRQTPAExtensions extends AbstractModel
{
    /**
     * @var OrgOpentravelOta200305OTAAirLowFareSearchRQTPAExtensionsAlternateAirportCities[]
     */
    protected $alternateAirportCities;
    /**
     * Specify maximum allowed distance from specified airport.
     *
     * @var OrgOpentravelOta200305OTAAirLowFareSearchRQTPAExtensionsAlternateAirportMileage
     */
    protected $alternateAirportMileage;
    /**
     * @var OrgOpentravelOta200305OTAAirLowFareSearchRQTPAExtensionsAlternateDatesProcessing
     */
    protected $alternateDatesProcessing;
    /**
     * @var OrgOpentravelOta200305AlternatePCCType[]
     */
    protected $alternatePCC;
    /**
     * @var OrgOpentravelOta200305AwardShoppingType
     */
    protected $awardShopping;
    /**
     * @var OrgOpentravelOta200305BillingInformationType
     */
    protected $billing;
    /**
     * These parameters control how IntellSell should select itineraries based not necessarily on cheapest price, but also on other criteria that guarantee a diverse response.
     *
     * @var OrgOpentravelOta200305DiversityControlType
     */
    protected $diversityControl;
    /**
     * @var OrgOpentravelOta200305ExchangeType[]
     */
    protected $exchange;
    /**
     * @var OrgOpentravelOta200305ExchangeSettingsType
     */
    protected $exchangeSettings;
    /**
     * @var OrgOpentravelOta200305TransactionType
     */
    protected $intelliSellTransaction;
    /**
     * @var OrgOpentravelOta200305OTAAirLowFareSearchRQTPAExtensionsItineraryCache
     */
    protected $itineraryCache;
    /**
     * @var OrgOpentravelOta200305OTAAirLowFareSearchRQTPAExtensionsMessagingDetails
     */
    protected $messagingDetails;
    /**
     * @var OrgOpentravelOta200305OTAAirLowFareSearchRQTPAExtensionsMultiTicket
     */
    protected $multiTicket;
    /**
     * @var OrgOpentravelOta200305OTAAirLowFareSearchRQTPAExtensionsPartitions
     */
    protected $partitions;
    /**
     * Return information about Points Redemption.
     *
     * @var OrgOpentravelOta200305OTAAirLowFareSearchRQTPAExtensionsPointsRedemption
     */
    protected $pointsRedemption;
    /**
     * @var OrgOpentravelOta200305OTAAirLowFareSearchRQTPAExtensionsReservationData
     */
    protected $reservationData;
    /**
     * @var OrgOpentravelOta200305OTAAirLowFareSearchRQTPAExtensionsSplitTaxes
     */
    protected $splitTaxes;

    /**
     * @return OrgOpentravelOta200305OTAAirLowFareSearchRQTPAExtensionsAlternateAirportCities[]
     */
    public function getAlternateAirportCities(): ?array
    {
        return $this->alternateAirportCities;
    }

    /**
     * @param OrgOpentravelOta200305OTAAirLowFareSearchRQTPAExtensionsAlternateAirportCities[] $alternateAirportCities
     *
     * @return self
     */
    public function setAlternateAirportCities(?array $alternateAirportCities): self
    {
        $this->alternateAirportCities = $alternateAirportCities;

        return $this;
    }

    /**
     * Specify maximum allowed distance from specified airport.
     *
     * @return OrgOpentravelOta200305OTAAirLowFareSearchRQTPAExtensionsAlternateAirportMileage
     */
    public function getAlternateAirportMileage(): ?OrgOpentravelOta200305OTAAirLowFareSearchRQTPAExtensionsAlternateAirportMileage
    {
        return $this->alternateAirportMileage;
    }

    /**
     * Specify maximum allowed distance from specified airport.
     *
     * @param OrgOpentravelOta200305OTAAirLowFareSearchRQTPAExtensionsAlternateAirportMileage $alternateAirportMileage
     *
     * @return self
     */
    public function setAlternateAirportMileage(?OrgOpentravelOta200305OTAAirLowFareSearchRQTPAExtensionsAlternateAirportMileage $alternateAirportMileage): self
    {
        $this->alternateAirportMileage = $alternateAirportMileage;

        return $this;
    }

    /**
     * @return OrgOpentravelOta200305OTAAirLowFareSearchRQTPAExtensionsAlternateDatesProcessing
     */
    public function getAlternateDatesProcessing(): ?OrgOpentravelOta200305OTAAirLowFareSearchRQTPAExtensionsAlternateDatesProcessing
    {
        return $this->alternateDatesProcessing;
    }

    /**
     * @param OrgOpentravelOta200305OTAAirLowFareSearchRQTPAExtensionsAlternateDatesProcessing $alternateDatesProcessing
     *
     * @return self
     */
    public function setAlternateDatesProcessing(?OrgOpentravelOta200305OTAAirLowFareSearchRQTPAExtensionsAlternateDatesProcessing $alternateDatesProcessing): self
    {
        $this->alternateDatesProcessing = $alternateDatesProcessing;

        return $this;
    }

    /**
     * @return OrgOpentravelOta200305AlternatePCCType[]
     */
    public function getAlternatePCC(): ?array
    {
        return $this->alternatePCC;
    }

    /**
     * @param OrgOpentravelOta200305AlternatePCCType[] $alternatePCC
     *
     * @return self
     */
    public function setAlternatePCC(?array $alternatePCC): self
    {
        $this->alternatePCC = $alternatePCC;

        return $this;
    }

    /**
     * @return OrgOpentravelOta200305AwardShoppingType
     */
    public function getAwardShopping(): ?OrgOpentravelOta200305AwardShoppingType
    {
        return $this->awardShopping;
    }

    /**
     * @param OrgOpentravelOta200305AwardShoppingType $awardShopping
     *
     * @return self
     */
    public function setAwardShopping(?OrgOpentravelOta200305AwardShoppingType $awardShopping): self
    {
        $this->awardShopping = $awardShopping;

        return $this;
    }

    /**
     * @return OrgOpentravelOta200305BillingInformationType
     */
    public function getBilling(): ?OrgOpentravelOta200305BillingInformationType
    {
        return $this->billing;
    }

    /**
     * @param OrgOpentravelOta200305BillingInformationType $billing
     *
     * @return self
     */
    public function setBilling(?OrgOpentravelOta200305BillingInformationType $billing): self
    {
        $this->billing = $billing;

        return $this;
    }

    /**
     * These parameters control how IntellSell should select itineraries based not necessarily on cheapest price, but also on other criteria that guarantee a diverse response.
     *
     * @return OrgOpentravelOta200305DiversityControlType
     */
    public function getDiversityControl(): ?OrgOpentravelOta200305DiversityControlType
    {
        return $this->diversityControl;
    }

    /**
     * These parameters control how IntellSell should select itineraries based not necessarily on cheapest price, but also on other criteria that guarantee a diverse response.
     *
     * @param OrgOpentravelOta200305DiversityControlType $diversityControl
     *
     * @return self
     */
    public function setDiversityControl(?OrgOpentravelOta200305DiversityControlType $diversityControl): self
    {
        $this->diversityControl = $diversityControl;

        return $this;
    }

    /**
     * @return OrgOpentravelOta200305ExchangeType[]
     */
    public function getExchange(): ?array
    {
        return $this->exchange;
    }

    /**
     * @param OrgOpentravelOta200305ExchangeType[] $exchange
     *
     * @return self
     */
    public function setExchange(?array $exchange): self
    {
        $this->exchange = $exchange;

        return $this;
    }

    /**
     * @return OrgOpentravelOta200305ExchangeSettingsType
     */
    public function getExchangeSettings(): ?OrgOpentravelOta200305ExchangeSettingsType
    {
        return $this->exchangeSettings;
    }

    /**
     * @param OrgOpentravelOta200305ExchangeSettingsType $exchangeSettings
     *
     * @return self
     */
    public function setExchangeSettings(?OrgOpentravelOta200305ExchangeSettingsType $exchangeSettings): self
    {
        $this->exchangeSettings = $exchangeSettings;

        return $this;
    }

    /**
     * @return OrgOpentravelOta200305TransactionType
     */
    public function getIntelliSellTransaction(): ?OrgOpentravelOta200305TransactionType
    {
        return $this->intelliSellTransaction;
    }

    /**
     * @param OrgOpentravelOta200305TransactionType $intelliSellTransaction
     *
     * @return self
     */
    public function setIntelliSellTransaction(?OrgOpentravelOta200305TransactionType $intelliSellTransaction): self
    {
        $this->intelliSellTransaction = $intelliSellTransaction;

        return $this;
    }

    /**
     * @return OrgOpentravelOta200305OTAAirLowFareSearchRQTPAExtensionsItineraryCache
     */
    public function getItineraryCache(): ?OrgOpentravelOta200305OTAAirLowFareSearchRQTPAExtensionsItineraryCache
    {
        return $this->itineraryCache;
    }

    /**
     * @param OrgOpentravelOta200305OTAAirLowFareSearchRQTPAExtensionsItineraryCache $itineraryCache
     *
     * @return self
     */
    public function setItineraryCache(?OrgOpentravelOta200305OTAAirLowFareSearchRQTPAExtensionsItineraryCache $itineraryCache): self
    {
        $this->itineraryCache = $itineraryCache;

        return $this;
    }

    /**
     * @return OrgOpentravelOta200305OTAAirLowFareSearchRQTPAExtensionsMessagingDetails
     */
    public function getMessagingDetails(): ?OrgOpentravelOta200305OTAAirLowFareSearchRQTPAExtensionsMessagingDetails
    {
        return $this->messagingDetails;
    }

    /**
     * @param OrgOpentravelOta200305OTAAirLowFareSearchRQTPAExtensionsMessagingDetails $messagingDetails
     *
     * @return self
     */
    public function setMessagingDetails(?OrgOpentravelOta200305OTAAirLowFareSearchRQTPAExtensionsMessagingDetails $messagingDetails): self
    {
        $this->messagingDetails = $messagingDetails;

        return $this;
    }

    /**
     * @return OrgOpentravelOta200305OTAAirLowFareSearchRQTPAExtensionsMultiTicket
     */
    public function getMultiTicket(): ?OrgOpentravelOta200305OTAAirLowFareSearchRQTPAExtensionsMultiTicket
    {
        return $this->multiTicket;
    }

    /**
     * @param OrgOpentravelOta200305OTAAirLowFareSearchRQTPAExtensionsMultiTicket $multiTicket
     *
     * @return self
     */
    public function setMultiTicket(?OrgOpentravelOta200305OTAAirLowFareSearchRQTPAExtensionsMultiTicket $multiTicket): self
    {
        $this->multiTicket = $multiTicket;

        return $this;
    }

    /**
     * @return OrgOpentravelOta200305OTAAirLowFareSearchRQTPAExtensionsPartitions
     */
    public function getPartitions(): ?OrgOpentravelOta200305OTAAirLowFareSearchRQTPAExtensionsPartitions
    {
        return $this->partitions;
    }

    /**
     * @param OrgOpentravelOta200305OTAAirLowFareSearchRQTPAExtensionsPartitions $partitions
     *
     * @return self
     */
    public function setPartitions(?OrgOpentravelOta200305OTAAirLowFareSearchRQTPAExtensionsPartitions $partitions): self
    {
        $this->partitions = $partitions;

        return $this;
    }

    /**
     * Return information about Points Redemption.
     *
     * @return OrgOpentravelOta200305OTAAirLowFareSearchRQTPAExtensionsPointsRedemption
     */
    public function getPointsRedemption(): ?OrgOpentravelOta200305OTAAirLowFareSearchRQTPAExtensionsPointsRedemption
    {
        return $this->pointsRedemption;
    }

    /**
     * Return information about Points Redemption.
     *
     * @param OrgOpentravelOta200305OTAAirLowFareSearchRQTPAExtensionsPointsRedemption $pointsRedemption
     *
     * @return self
     */
    public function setPointsRedemption(?OrgOpentravelOta200305OTAAirLowFareSearchRQTPAExtensionsPointsRedemption $pointsRedemption): self
    {
        $this->pointsRedemption = $pointsRedemption;

        return $this;
    }

    /**
     * @return OrgOpentravelOta200305OTAAirLowFareSearchRQTPAExtensionsReservationData
     */
    public function getReservationData(): ?OrgOpentravelOta200305OTAAirLowFareSearchRQTPAExtensionsReservationData
    {
        return $this->reservationData;
    }

    /**
     * @param OrgOpentravelOta200305OTAAirLowFareSearchRQTPAExtensionsReservationData $reservationData
     *
     * @return self
     */
    public function setReservationData(?OrgOpentravelOta200305OTAAirLowFareSearchRQTPAExtensionsReservationData $reservationData): self
    {
        $this->reservationData = $reservationData;

        return $this;
    }

    /**
     * @return OrgOpentravelOta200305OTAAirLowFareSearchRQTPAExtensionsSplitTaxes
     */
    public function getSplitTaxes(): ?OrgOpentravelOta200305OTAAirLowFareSearchRQTPAExtensionsSplitTaxes
    {
        return $this->splitTaxes;
    }

    /**
     * @param OrgOpentravelOta200305OTAAirLowFareSearchRQTPAExtensionsSplitTaxes $splitTaxes
     *
     * @return self
     */
    public function setSplitTaxes(?OrgOpentravelOta200305OTAAirLowFareSearchRQTPAExtensionsSplitTaxes $splitTaxes): self
    {
        $this->splitTaxes = $splitTaxes;

        return $this;
    }
}
