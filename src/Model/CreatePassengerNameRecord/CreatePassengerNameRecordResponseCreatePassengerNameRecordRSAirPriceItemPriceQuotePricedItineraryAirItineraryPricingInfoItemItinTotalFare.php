<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Ammonkc\SabreApi\Model\CreatePassengerNameRecord;

use Ammonkc\SabreApi\AbstractModel;

class CreatePassengerNameRecordResponseCreatePassengerNameRecordRSAirPriceItemPriceQuotePricedItineraryAirItineraryPricingInfoItemItinTotalFare extends AbstractModel
{
    /**
     * The baggage info.
     *
     * @var CreatePassengerNameRecordResponseCreatePassengerNameRecordRSAirPriceItemPriceQuotePricedItineraryAirItineraryPricingInfoItemItinTotalFareBaggageInfo
     */
    protected $baggageInfo;
    /**
     * The base fare information.
     *
     * @var CreatePassengerNameRecordResponseCreatePassengerNameRecordRSAirPriceItemPriceQuotePricedItineraryAirItineraryPricingInfoItemItinTotalFareBaseFare
     */
    protected $baseFare;
    /**
     * The commission information.
     *
     * @var CreatePassengerNameRecordResponseCreatePassengerNameRecordRSAirPriceItemPriceQuotePricedItineraryAirItineraryPricingInfoItemItinTotalFareCommission
     */
    protected $commission;
    /**
     * @var CreatePassengerNameRecordResponseCreatePassengerNameRecordRSAirPriceItemPriceQuotePricedItineraryAirItineraryPricingInfoItemItinTotalFareConstruction
     */
    protected $construction;
    /**
     * Discount type-related information.
     *
     * @var string
     */
    protected $discountTypeMessage;
    /**
     * The endorsement information.
     *
     * @var CreatePassengerNameRecordResponseCreatePassengerNameRecordRSAirPriceItemPriceQuotePricedItineraryAirItineraryPricingInfoItemItinTotalFareEndorsements
     */
    protected $endorsements;
    /**
     * The equivalent fare information.
     *
     * @var CreatePassengerNameRecordResponseCreatePassengerNameRecordRSAirPriceItemPriceQuotePricedItineraryAirItineraryPricingInfoItemItinTotalFareEquivFare
     */
    protected $equivFare;
    /**
     * The private fare information.
     *
     * @var CreatePassengerNameRecordResponseCreatePassengerNameRecordRSAirPriceItemPriceQuotePricedItineraryAirItineraryPricingInfoItemItinTotalFarePrivateFare
     */
    protected $privateFare;
    /**
     * The Tax information.
     *
     * @var CreatePassengerNameRecordResponseCreatePassengerNameRecordRSAirPriceItemPriceQuotePricedItineraryAirItineraryPricingInfoItemItinTotalFareTaxes
     */
    protected $taxes;
    /**
     * The total fare information.
     *
     * @var CreatePassengerNameRecordResponseCreatePassengerNameRecordRSAirPriceItemPriceQuotePricedItineraryAirItineraryPricingInfoItemItinTotalFareTotalFare
     */
    protected $totalFare;
    /**
     * The warnings related to the priced itinerary.
     *
     * @var CreatePassengerNameRecordResponseCreatePassengerNameRecordRSAirPriceItemPriceQuotePricedItineraryAirItineraryPricingInfoItemItinTotalFareWarnings
     */
    protected $warnings;
    /**
     * The selling fare data for each passenger type.
     *
     * @var CreatePassengerNameRecordResponseCreatePassengerNameRecordRSAirPriceItemPriceQuotePricedItineraryAirItineraryPricingInfoItemItinTotalFareSellingFareDataItem[]
     */
    protected $sellingFareData;
    /**
     * The Non-refundable indicator.
     *
     * @var string
     */
    protected $nonRefundableInd;

    /**
     * The baggage info.
     *
     * @return CreatePassengerNameRecordResponseCreatePassengerNameRecordRSAirPriceItemPriceQuotePricedItineraryAirItineraryPricingInfoItemItinTotalFareBaggageInfo
     */
    public function getBaggageInfo(): CreatePassengerNameRecordResponseCreatePassengerNameRecordRSAirPriceItemPriceQuotePricedItineraryAirItineraryPricingInfoItemItinTotalFareBaggageInfo
    {
        return $this->baggageInfo;
    }

    /**
     * The baggage info.
     *
     * @param CreatePassengerNameRecordResponseCreatePassengerNameRecordRSAirPriceItemPriceQuotePricedItineraryAirItineraryPricingInfoItemItinTotalFareBaggageInfo $baggageInfo
     *
     * @return self
     */
    public function setBaggageInfo(CreatePassengerNameRecordResponseCreatePassengerNameRecordRSAirPriceItemPriceQuotePricedItineraryAirItineraryPricingInfoItemItinTotalFareBaggageInfo $baggageInfo): self
    {
        $this->baggageInfo = $baggageInfo;

        return $this;
    }

    /**
     * The base fare information.
     *
     * @return CreatePassengerNameRecordResponseCreatePassengerNameRecordRSAirPriceItemPriceQuotePricedItineraryAirItineraryPricingInfoItemItinTotalFareBaseFare
     */
    public function getBaseFare(): CreatePassengerNameRecordResponseCreatePassengerNameRecordRSAirPriceItemPriceQuotePricedItineraryAirItineraryPricingInfoItemItinTotalFareBaseFare
    {
        return $this->baseFare;
    }

    /**
     * The base fare information.
     *
     * @param CreatePassengerNameRecordResponseCreatePassengerNameRecordRSAirPriceItemPriceQuotePricedItineraryAirItineraryPricingInfoItemItinTotalFareBaseFare $baseFare
     *
     * @return self
     */
    public function setBaseFare(CreatePassengerNameRecordResponseCreatePassengerNameRecordRSAirPriceItemPriceQuotePricedItineraryAirItineraryPricingInfoItemItinTotalFareBaseFare $baseFare): self
    {
        $this->baseFare = $baseFare;

        return $this;
    }

    /**
     * The commission information.
     *
     * @return CreatePassengerNameRecordResponseCreatePassengerNameRecordRSAirPriceItemPriceQuotePricedItineraryAirItineraryPricingInfoItemItinTotalFareCommission
     */
    public function getCommission(): CreatePassengerNameRecordResponseCreatePassengerNameRecordRSAirPriceItemPriceQuotePricedItineraryAirItineraryPricingInfoItemItinTotalFareCommission
    {
        return $this->commission;
    }

    /**
     * The commission information.
     *
     * @param CreatePassengerNameRecordResponseCreatePassengerNameRecordRSAirPriceItemPriceQuotePricedItineraryAirItineraryPricingInfoItemItinTotalFareCommission $commission
     *
     * @return self
     */
    public function setCommission(CreatePassengerNameRecordResponseCreatePassengerNameRecordRSAirPriceItemPriceQuotePricedItineraryAirItineraryPricingInfoItemItinTotalFareCommission $commission): self
    {
        $this->commission = $commission;

        return $this;
    }

    /**
     * @return CreatePassengerNameRecordResponseCreatePassengerNameRecordRSAirPriceItemPriceQuotePricedItineraryAirItineraryPricingInfoItemItinTotalFareConstruction
     */
    public function getConstruction(): CreatePassengerNameRecordResponseCreatePassengerNameRecordRSAirPriceItemPriceQuotePricedItineraryAirItineraryPricingInfoItemItinTotalFareConstruction
    {
        return $this->construction;
    }

    /**
     * @param CreatePassengerNameRecordResponseCreatePassengerNameRecordRSAirPriceItemPriceQuotePricedItineraryAirItineraryPricingInfoItemItinTotalFareConstruction $construction
     *
     * @return self
     */
    public function setConstruction(CreatePassengerNameRecordResponseCreatePassengerNameRecordRSAirPriceItemPriceQuotePricedItineraryAirItineraryPricingInfoItemItinTotalFareConstruction $construction): self
    {
        $this->construction = $construction;

        return $this;
    }

    /**
     * Discount type-related information.
     *
     * @return string
     */
    public function getDiscountTypeMessage(): string
    {
        return $this->discountTypeMessage;
    }

    /**
     * Discount type-related information.
     *
     * @param string $discountTypeMessage
     *
     * @return self
     */
    public function setDiscountTypeMessage(string $discountTypeMessage): self
    {
        $this->discountTypeMessage = $discountTypeMessage;

        return $this;
    }

    /**
     * The endorsement information.
     *
     * @return CreatePassengerNameRecordResponseCreatePassengerNameRecordRSAirPriceItemPriceQuotePricedItineraryAirItineraryPricingInfoItemItinTotalFareEndorsements
     */
    public function getEndorsements(): CreatePassengerNameRecordResponseCreatePassengerNameRecordRSAirPriceItemPriceQuotePricedItineraryAirItineraryPricingInfoItemItinTotalFareEndorsements
    {
        return $this->endorsements;
    }

    /**
     * The endorsement information.
     *
     * @param CreatePassengerNameRecordResponseCreatePassengerNameRecordRSAirPriceItemPriceQuotePricedItineraryAirItineraryPricingInfoItemItinTotalFareEndorsements $endorsements
     *
     * @return self
     */
    public function setEndorsements(CreatePassengerNameRecordResponseCreatePassengerNameRecordRSAirPriceItemPriceQuotePricedItineraryAirItineraryPricingInfoItemItinTotalFareEndorsements $endorsements): self
    {
        $this->endorsements = $endorsements;

        return $this;
    }

    /**
     * The equivalent fare information.
     *
     * @return CreatePassengerNameRecordResponseCreatePassengerNameRecordRSAirPriceItemPriceQuotePricedItineraryAirItineraryPricingInfoItemItinTotalFareEquivFare
     */
    public function getEquivFare(): CreatePassengerNameRecordResponseCreatePassengerNameRecordRSAirPriceItemPriceQuotePricedItineraryAirItineraryPricingInfoItemItinTotalFareEquivFare
    {
        return $this->equivFare;
    }

    /**
     * The equivalent fare information.
     *
     * @param CreatePassengerNameRecordResponseCreatePassengerNameRecordRSAirPriceItemPriceQuotePricedItineraryAirItineraryPricingInfoItemItinTotalFareEquivFare $equivFare
     *
     * @return self
     */
    public function setEquivFare(CreatePassengerNameRecordResponseCreatePassengerNameRecordRSAirPriceItemPriceQuotePricedItineraryAirItineraryPricingInfoItemItinTotalFareEquivFare $equivFare): self
    {
        $this->equivFare = $equivFare;

        return $this;
    }

    /**
     * The private fare information.
     *
     * @return CreatePassengerNameRecordResponseCreatePassengerNameRecordRSAirPriceItemPriceQuotePricedItineraryAirItineraryPricingInfoItemItinTotalFarePrivateFare
     */
    public function getPrivateFare(): CreatePassengerNameRecordResponseCreatePassengerNameRecordRSAirPriceItemPriceQuotePricedItineraryAirItineraryPricingInfoItemItinTotalFarePrivateFare
    {
        return $this->privateFare;
    }

    /**
     * The private fare information.
     *
     * @param CreatePassengerNameRecordResponseCreatePassengerNameRecordRSAirPriceItemPriceQuotePricedItineraryAirItineraryPricingInfoItemItinTotalFarePrivateFare $privateFare
     *
     * @return self
     */
    public function setPrivateFare(CreatePassengerNameRecordResponseCreatePassengerNameRecordRSAirPriceItemPriceQuotePricedItineraryAirItineraryPricingInfoItemItinTotalFarePrivateFare $privateFare): self
    {
        $this->privateFare = $privateFare;

        return $this;
    }

    /**
     * The Tax information.
     *
     * @return CreatePassengerNameRecordResponseCreatePassengerNameRecordRSAirPriceItemPriceQuotePricedItineraryAirItineraryPricingInfoItemItinTotalFareTaxes
     */
    public function getTaxes(): CreatePassengerNameRecordResponseCreatePassengerNameRecordRSAirPriceItemPriceQuotePricedItineraryAirItineraryPricingInfoItemItinTotalFareTaxes
    {
        return $this->taxes;
    }

    /**
     * The Tax information.
     *
     * @param CreatePassengerNameRecordResponseCreatePassengerNameRecordRSAirPriceItemPriceQuotePricedItineraryAirItineraryPricingInfoItemItinTotalFareTaxes $taxes
     *
     * @return self
     */
    public function setTaxes(CreatePassengerNameRecordResponseCreatePassengerNameRecordRSAirPriceItemPriceQuotePricedItineraryAirItineraryPricingInfoItemItinTotalFareTaxes $taxes): self
    {
        $this->taxes = $taxes;

        return $this;
    }

    /**
     * The total fare information.
     *
     * @return CreatePassengerNameRecordResponseCreatePassengerNameRecordRSAirPriceItemPriceQuotePricedItineraryAirItineraryPricingInfoItemItinTotalFareTotalFare
     */
    public function getTotalFare(): CreatePassengerNameRecordResponseCreatePassengerNameRecordRSAirPriceItemPriceQuotePricedItineraryAirItineraryPricingInfoItemItinTotalFareTotalFare
    {
        return $this->totalFare;
    }

    /**
     * The total fare information.
     *
     * @param CreatePassengerNameRecordResponseCreatePassengerNameRecordRSAirPriceItemPriceQuotePricedItineraryAirItineraryPricingInfoItemItinTotalFareTotalFare $totalFare
     *
     * @return self
     */
    public function setTotalFare(CreatePassengerNameRecordResponseCreatePassengerNameRecordRSAirPriceItemPriceQuotePricedItineraryAirItineraryPricingInfoItemItinTotalFareTotalFare $totalFare): self
    {
        $this->totalFare = $totalFare;

        return $this;
    }

    /**
     * The warnings related to the priced itinerary.
     *
     * @return CreatePassengerNameRecordResponseCreatePassengerNameRecordRSAirPriceItemPriceQuotePricedItineraryAirItineraryPricingInfoItemItinTotalFareWarnings
     */
    public function getWarnings(): CreatePassengerNameRecordResponseCreatePassengerNameRecordRSAirPriceItemPriceQuotePricedItineraryAirItineraryPricingInfoItemItinTotalFareWarnings
    {
        return $this->warnings;
    }

    /**
     * The warnings related to the priced itinerary.
     *
     * @param CreatePassengerNameRecordResponseCreatePassengerNameRecordRSAirPriceItemPriceQuotePricedItineraryAirItineraryPricingInfoItemItinTotalFareWarnings $warnings
     *
     * @return self
     */
    public function setWarnings(CreatePassengerNameRecordResponseCreatePassengerNameRecordRSAirPriceItemPriceQuotePricedItineraryAirItineraryPricingInfoItemItinTotalFareWarnings $warnings): self
    {
        $this->warnings = $warnings;

        return $this;
    }

    /**
     * The selling fare data for each passenger type.
     *
     * @return CreatePassengerNameRecordResponseCreatePassengerNameRecordRSAirPriceItemPriceQuotePricedItineraryAirItineraryPricingInfoItemItinTotalFareSellingFareDataItem[]
     */
    public function getSellingFareData(): array
    {
        return $this->sellingFareData;
    }

    /**
     * The selling fare data for each passenger type.
     *
     * @param CreatePassengerNameRecordResponseCreatePassengerNameRecordRSAirPriceItemPriceQuotePricedItineraryAirItineraryPricingInfoItemItinTotalFareSellingFareDataItem[] $sellingFareData
     *
     * @return self
     */
    public function setSellingFareData(array $sellingFareData): self
    {
        $this->sellingFareData = $sellingFareData;

        return $this;
    }

    /**
     * The Non-refundable indicator.
     *
     * @return string
     */
    public function getNonRefundableInd(): string
    {
        return $this->nonRefundableInd;
    }

    /**
     * The Non-refundable indicator.
     *
     * @param string $nonRefundableInd
     *
     * @return self
     */
    public function setNonRefundableInd(string $nonRefundableInd): self
    {
        $this->nonRefundableInd = $nonRefundableInd;

        return $this;
    }
}
