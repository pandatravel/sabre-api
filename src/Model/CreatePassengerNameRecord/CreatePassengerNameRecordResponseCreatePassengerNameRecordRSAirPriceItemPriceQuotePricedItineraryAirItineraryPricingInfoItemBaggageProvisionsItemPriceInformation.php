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
     * The base amount.
     *
     * @var CreatePassengerNameRecordResponseCreatePassengerNameRecordRSAirPriceItemPriceQuotePricedItineraryAirItineraryPricingInfoItemBaggageProvisionsItemPriceInformationBase
     */
    protected $base;
    /**
     * The equivalent amount.
     *
     * @var CreatePassengerNameRecordResponseCreatePassengerNameRecordRSAirPriceItemPriceQuotePricedItineraryAirItineraryPricingInfoItemBaggageProvisionsItemPriceInformationEquiv
     */
    protected $equiv;
    /**
     * The tax indicator.
     *
     * @var string
     */
    protected $taxIndicator;
    /**
     * The total price information.
     *
     * @var string
     */
    protected $total;

    /**
     * The base amount.
     *
     * @return CreatePassengerNameRecordResponseCreatePassengerNameRecordRSAirPriceItemPriceQuotePricedItineraryAirItineraryPricingInfoItemBaggageProvisionsItemPriceInformationBase|null
     */
    public function getBase(): ?CreatePassengerNameRecordResponseCreatePassengerNameRecordRSAirPriceItemPriceQuotePricedItineraryAirItineraryPricingInfoItemBaggageProvisionsItemPriceInformationBase
    {
        return $this->base;
    }

    /**
     * The base amount.
     *
     * @param CreatePassengerNameRecordResponseCreatePassengerNameRecordRSAirPriceItemPriceQuotePricedItineraryAirItineraryPricingInfoItemBaggageProvisionsItemPriceInformationBase|null $base
     *
     * @return self
     */
    public function setBase(?CreatePassengerNameRecordResponseCreatePassengerNameRecordRSAirPriceItemPriceQuotePricedItineraryAirItineraryPricingInfoItemBaggageProvisionsItemPriceInformationBase $base): self
    {
        $this->base = $base;

        return $this;
    }

    /**
     * The equivalent amount.
     *
     * @return CreatePassengerNameRecordResponseCreatePassengerNameRecordRSAirPriceItemPriceQuotePricedItineraryAirItineraryPricingInfoItemBaggageProvisionsItemPriceInformationEquiv|null
     */
    public function getEquiv(): ?CreatePassengerNameRecordResponseCreatePassengerNameRecordRSAirPriceItemPriceQuotePricedItineraryAirItineraryPricingInfoItemBaggageProvisionsItemPriceInformationEquiv
    {
        return $this->equiv;
    }

    /**
     * The equivalent amount.
     *
     * @param CreatePassengerNameRecordResponseCreatePassengerNameRecordRSAirPriceItemPriceQuotePricedItineraryAirItineraryPricingInfoItemBaggageProvisionsItemPriceInformationEquiv|null $equiv
     *
     * @return self
     */
    public function setEquiv(?CreatePassengerNameRecordResponseCreatePassengerNameRecordRSAirPriceItemPriceQuotePricedItineraryAirItineraryPricingInfoItemBaggageProvisionsItemPriceInformationEquiv $equiv): self
    {
        $this->equiv = $equiv;

        return $this;
    }

    /**
     * The tax indicator.
     *
     * @return string|null
     */
    public function getTaxIndicator(): ?string
    {
        return $this->taxIndicator;
    }

    /**
     * The tax indicator.
     *
     * @param string|null $taxIndicator
     *
     * @return self
     */
    public function setTaxIndicator(?string $taxIndicator): self
    {
        $this->taxIndicator = $taxIndicator;

        return $this;
    }

    /**
     * The total price information.
     *
     * @return string|null
     */
    public function getTotal(): ?string
    {
        return $this->total;
    }

    /**
     * The total price information.
     *
     * @param string|null $total
     *
     * @return self
     */
    public function setTotal(?string $total): self
    {
        $this->total = $total;

        return $this;
    }
}
