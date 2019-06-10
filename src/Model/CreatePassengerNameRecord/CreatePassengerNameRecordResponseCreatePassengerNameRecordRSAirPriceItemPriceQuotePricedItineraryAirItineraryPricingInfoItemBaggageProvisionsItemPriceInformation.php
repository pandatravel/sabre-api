<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Ammonkc\SabreApi\Model\CreatePassengerNameRecord;

use Ammonkc\SabreApi\AbstractModel;

class CreatePassengerNameRecordResponseCreatePassengerNameRecordRSAirPriceItemPriceQuotePricedItineraryAirItineraryPricingInfoItemBaggageProvisionsItemPriceInformation extends AbstractModel
{
    /**
     * Base amount.
     *
     * @var CreatePassengerNameRecordResponseCreatePassengerNameRecordRSAirPriceItemPriceQuotePricedItineraryAirItineraryPricingInfoItemBaggageProvisionsItemPriceInformationBase
     */
    protected $base;
    /**
     * Equivalent amount.
     *
     * @var CreatePassengerNameRecordResponseCreatePassengerNameRecordRSAirPriceItemPriceQuotePricedItineraryAirItineraryPricingInfoItemBaggageProvisionsItemPriceInformationEquiv
     */
    protected $equiv;
    /**
     * Tax indicator.
     *
     * @var string
     */
    protected $taxIndicator;
    /**
     * Total.
     *
     * @var string
     */
    protected $total;

    /**
     * Base amount.
     *
     * @return CreatePassengerNameRecordResponseCreatePassengerNameRecordRSAirPriceItemPriceQuotePricedItineraryAirItineraryPricingInfoItemBaggageProvisionsItemPriceInformationBase
     */
    public function getBase(): ?CreatePassengerNameRecordResponseCreatePassengerNameRecordRSAirPriceItemPriceQuotePricedItineraryAirItineraryPricingInfoItemBaggageProvisionsItemPriceInformationBase
    {
        return $this->base;
    }

    /**
     * Base amount.
     *
     * @param CreatePassengerNameRecordResponseCreatePassengerNameRecordRSAirPriceItemPriceQuotePricedItineraryAirItineraryPricingInfoItemBaggageProvisionsItemPriceInformationBase $base
     *
     * @return self
     */
    public function setBase(?CreatePassengerNameRecordResponseCreatePassengerNameRecordRSAirPriceItemPriceQuotePricedItineraryAirItineraryPricingInfoItemBaggageProvisionsItemPriceInformationBase $base): self
    {
        $this->base = $base;

        return $this;
    }

    /**
     * Equivalent amount.
     *
     * @return CreatePassengerNameRecordResponseCreatePassengerNameRecordRSAirPriceItemPriceQuotePricedItineraryAirItineraryPricingInfoItemBaggageProvisionsItemPriceInformationEquiv
     */
    public function getEquiv(): ?CreatePassengerNameRecordResponseCreatePassengerNameRecordRSAirPriceItemPriceQuotePricedItineraryAirItineraryPricingInfoItemBaggageProvisionsItemPriceInformationEquiv
    {
        return $this->equiv;
    }

    /**
     * Equivalent amount.
     *
     * @param CreatePassengerNameRecordResponseCreatePassengerNameRecordRSAirPriceItemPriceQuotePricedItineraryAirItineraryPricingInfoItemBaggageProvisionsItemPriceInformationEquiv $equiv
     *
     * @return self
     */
    public function setEquiv(?CreatePassengerNameRecordResponseCreatePassengerNameRecordRSAirPriceItemPriceQuotePricedItineraryAirItineraryPricingInfoItemBaggageProvisionsItemPriceInformationEquiv $equiv): self
    {
        $this->equiv = $equiv;

        return $this;
    }

    /**
     * Tax indicator.
     *
     * @return string
     */
    public function getTaxIndicator(): ?string
    {
        return $this->taxIndicator;
    }

    /**
     * Tax indicator.
     *
     * @param string $taxIndicator
     *
     * @return self
     */
    public function setTaxIndicator(?string $taxIndicator): self
    {
        $this->taxIndicator = $taxIndicator;

        return $this;
    }

    /**
     * Total.
     *
     * @return string
     */
    public function getTotal(): ?string
    {
        return $this->total;
    }

    /**
     * Total.
     *
     * @param string $total
     *
     * @return self
     */
    public function setTotal(?string $total): self
    {
        $this->total = $total;

        return $this;
    }
}