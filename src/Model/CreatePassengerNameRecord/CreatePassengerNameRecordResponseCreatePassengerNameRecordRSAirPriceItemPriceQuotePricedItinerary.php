<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Ammonkc\SabreApi\Model\CreatePassengerNameRecord;

use Ammonkc\SabreApi\AbstractModel;

class CreatePassengerNameRecordResponseCreatePassengerNameRecordRSAirPriceItemPriceQuotePricedItinerary extends AbstractModel
{
    /**
     * A single pricing solution.
     *
     * @var CreatePassengerNameRecordResponseCreatePassengerNameRecordRSAirPriceItemPriceQuotePricedItineraryAirItineraryPricingInfoItem[]
     */
    protected $airItineraryPricingInfo;
    /**
     * This attribute is not in use.
     *
     * @var string
     */
    protected $alternativePricing;
    /**
     * The applicable currency code.
     *
     * @var string
     */
    protected $currencyCode;
    /**
     * Used to denote that multi-ticket-based pricing options apply.
     *
     * @var bool
     */
    protected $multiTicket;
    /**
     * The miscellaneous multi-ticket-based pricing option-related information.
     *
     * @var string
     */
    protected $multiTicketShortText;
    /**
     * The service fee amount.
     *
     * @var string
     */
    protected $serviceFeeAmount;
    /**
     * The service fee currency code.
     *
     * @var string
     */
    protected $serviceFeeCurrencyCode;
    /**
     * The service fee tax.
     *
     * @var string
     */
    protected $serviceFeeTax;
    /**
     * The total amount associated with the particular itinerary.
     *
     * @var string
     */
    protected $totalAmount;

    /**
     * A single pricing solution.
     *
     * @return CreatePassengerNameRecordResponseCreatePassengerNameRecordRSAirPriceItemPriceQuotePricedItineraryAirItineraryPricingInfoItem[]|null
     */
    public function getAirItineraryPricingInfo(): ?array
    {
        return $this->airItineraryPricingInfo;
    }

    /**
     * A single pricing solution.
     *
     * @param CreatePassengerNameRecordResponseCreatePassengerNameRecordRSAirPriceItemPriceQuotePricedItineraryAirItineraryPricingInfoItem[]|null $airItineraryPricingInfo
     *
     * @return self
     */
    public function setAirItineraryPricingInfo(?array $airItineraryPricingInfo): self
    {
        $this->airItineraryPricingInfo = $airItineraryPricingInfo;

        return $this;
    }

    /**
     * This attribute is not in use.
     *
     * @return string|null
     */
    public function getAlternativePricing(): ?string
    {
        return $this->alternativePricing;
    }

    /**
     * This attribute is not in use.
     *
     * @param string|null $alternativePricing
     *
     * @return self
     */
    public function setAlternativePricing(?string $alternativePricing): self
    {
        $this->alternativePricing = $alternativePricing;

        return $this;
    }

    /**
     * The applicable currency code.
     *
     * @return string|null
     */
    public function getCurrencyCode(): ?string
    {
        return $this->currencyCode;
    }

    /**
     * The applicable currency code.
     *
     * @param string|null $currencyCode
     *
     * @return self
     */
    public function setCurrencyCode(?string $currencyCode): self
    {
        $this->currencyCode = $currencyCode;

        return $this;
    }

    /**
     * Used to denote that multi-ticket-based pricing options apply.
     *
     * @return bool|null
     */
    public function getMultiTicket(): ?bool
    {
        return $this->multiTicket;
    }

    /**
     * Used to denote that multi-ticket-based pricing options apply.
     *
     * @param bool|null $multiTicket
     *
     * @return self
     */
    public function setMultiTicket(?bool $multiTicket): self
    {
        $this->multiTicket = $multiTicket;

        return $this;
    }

    /**
     * The miscellaneous multi-ticket-based pricing option-related information.
     *
     * @return string|null
     */
    public function getMultiTicketShortText(): ?string
    {
        return $this->multiTicketShortText;
    }

    /**
     * The miscellaneous multi-ticket-based pricing option-related information.
     *
     * @param string|null $multiTicketShortText
     *
     * @return self
     */
    public function setMultiTicketShortText(?string $multiTicketShortText): self
    {
        $this->multiTicketShortText = $multiTicketShortText;

        return $this;
    }

    /**
     * The service fee amount.
     *
     * @return string|null
     */
    public function getServiceFeeAmount(): ?string
    {
        return $this->serviceFeeAmount;
    }

    /**
     * The service fee amount.
     *
     * @param string|null $serviceFeeAmount
     *
     * @return self
     */
    public function setServiceFeeAmount(?string $serviceFeeAmount): self
    {
        $this->serviceFeeAmount = $serviceFeeAmount;

        return $this;
    }

    /**
     * The service fee currency code.
     *
     * @return string|null
     */
    public function getServiceFeeCurrencyCode(): ?string
    {
        return $this->serviceFeeCurrencyCode;
    }

    /**
     * The service fee currency code.
     *
     * @param string|null $serviceFeeCurrencyCode
     *
     * @return self
     */
    public function setServiceFeeCurrencyCode(?string $serviceFeeCurrencyCode): self
    {
        $this->serviceFeeCurrencyCode = $serviceFeeCurrencyCode;

        return $this;
    }

    /**
     * The service fee tax.
     *
     * @return string|null
     */
    public function getServiceFeeTax(): ?string
    {
        return $this->serviceFeeTax;
    }

    /**
     * The service fee tax.
     *
     * @param string|null $serviceFeeTax
     *
     * @return self
     */
    public function setServiceFeeTax(?string $serviceFeeTax): self
    {
        $this->serviceFeeTax = $serviceFeeTax;

        return $this;
    }

    /**
     * The total amount associated with the particular itinerary.
     *
     * @return string|null
     */
    public function getTotalAmount(): ?string
    {
        return $this->totalAmount;
    }

    /**
     * The total amount associated with the particular itinerary.
     *
     * @param string|null $totalAmount
     *
     * @return self
     */
    public function setTotalAmount(?string $totalAmount): self
    {
        $this->totalAmount = $totalAmount;

        return $this;
    }
}
