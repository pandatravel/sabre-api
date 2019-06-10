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
     * Used to return the applicable currency code.
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
     * Used to return miscellaneous multi-ticket-based pricing option-related information.
     *
     * @var string
     */
    protected $multiTicketShortText;
    /**
     * Used to return service fee amount-related information.
     *
     * @var string
     */
    protected $serviceFeeAmount;
    /**
     * Used to return service fee currency code-related information.
     *
     * @var string
     */
    protected $serviceFeeCurrencyCode;
    /**
     * Used to return service fee tax-related information.
     *
     * @var string
     */
    protected $serviceFeeTax;
    /**
     * Used to return the applicable total amount associated with the particular itinerary.
     *
     * @var string
     */
    protected $totalAmount;

    /**
     * A single pricing solution.
     *
     * @return CreatePassengerNameRecordResponseCreatePassengerNameRecordRSAirPriceItemPriceQuotePricedItineraryAirItineraryPricingInfoItem[]
     */
    public function getAirItineraryPricingInfo(): ?array
    {
        return $this->airItineraryPricingInfo;
    }

    /**
     * A single pricing solution.
     *
     * @param CreatePassengerNameRecordResponseCreatePassengerNameRecordRSAirPriceItemPriceQuotePricedItineraryAirItineraryPricingInfoItem[] $airItineraryPricingInfo
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
     * @return string
     */
    public function getAlternativePricing(): ?string
    {
        return $this->alternativePricing;
    }

    /**
     * This attribute is not in use.
     *
     * @param string $alternativePricing
     *
     * @return self
     */
    public function setAlternativePricing(?string $alternativePricing): self
    {
        $this->alternativePricing = $alternativePricing;

        return $this;
    }

    /**
     * Used to return the applicable currency code.
     *
     * @return string
     */
    public function getCurrencyCode(): ?string
    {
        return $this->currencyCode;
    }

    /**
     * Used to return the applicable currency code.
     *
     * @param string $currencyCode
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
     * @return bool
     */
    public function getMultiTicket(): ?bool
    {
        return $this->multiTicket;
    }

    /**
     * Used to denote that multi-ticket-based pricing options apply.
     *
     * @param bool $multiTicket
     *
     * @return self
     */
    public function setMultiTicket(?bool $multiTicket): self
    {
        $this->multiTicket = $multiTicket;

        return $this;
    }

    /**
     * Used to return miscellaneous multi-ticket-based pricing option-related information.
     *
     * @return string
     */
    public function getMultiTicketShortText(): ?string
    {
        return $this->multiTicketShortText;
    }

    /**
     * Used to return miscellaneous multi-ticket-based pricing option-related information.
     *
     * @param string $multiTicketShortText
     *
     * @return self
     */
    public function setMultiTicketShortText(?string $multiTicketShortText): self
    {
        $this->multiTicketShortText = $multiTicketShortText;

        return $this;
    }

    /**
     * Used to return service fee amount-related information.
     *
     * @return string
     */
    public function getServiceFeeAmount(): ?string
    {
        return $this->serviceFeeAmount;
    }

    /**
     * Used to return service fee amount-related information.
     *
     * @param string $serviceFeeAmount
     *
     * @return self
     */
    public function setServiceFeeAmount(?string $serviceFeeAmount): self
    {
        $this->serviceFeeAmount = $serviceFeeAmount;

        return $this;
    }

    /**
     * Used to return service fee currency code-related information.
     *
     * @return string
     */
    public function getServiceFeeCurrencyCode(): ?string
    {
        return $this->serviceFeeCurrencyCode;
    }

    /**
     * Used to return service fee currency code-related information.
     *
     * @param string $serviceFeeCurrencyCode
     *
     * @return self
     */
    public function setServiceFeeCurrencyCode(?string $serviceFeeCurrencyCode): self
    {
        $this->serviceFeeCurrencyCode = $serviceFeeCurrencyCode;

        return $this;
    }

    /**
     * Used to return service fee tax-related information.
     *
     * @return string
     */
    public function getServiceFeeTax(): ?string
    {
        return $this->serviceFeeTax;
    }

    /**
     * Used to return service fee tax-related information.
     *
     * @param string $serviceFeeTax
     *
     * @return self
     */
    public function setServiceFeeTax(?string $serviceFeeTax): self
    {
        $this->serviceFeeTax = $serviceFeeTax;

        return $this;
    }

    /**
     * Used to return the applicable total amount associated with the particular itinerary.
     *
     * @return string
     */
    public function getTotalAmount(): ?string
    {
        return $this->totalAmount;
    }

    /**
     * Used to return the applicable total amount associated with the particular itinerary.
     *
     * @param string $totalAmount
     *
     * @return self
     */
    public function setTotalAmount(?string $totalAmount): self
    {
        $this->totalAmount = $totalAmount;

        return $this;
    }
}