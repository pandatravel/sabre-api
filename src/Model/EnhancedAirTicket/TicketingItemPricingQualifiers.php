<?php

namespace Ammonkc\SabreApi\Model\EnhancedAirTicket;

use Ammonkc\SabreApi\AbstractModel;

class TicketingItemPricingQualifiers extends AbstractModel
{
    /**
     * @var TicketingItemPricingQualifiersBrandItem[]
     */
    protected $brand;
    /**
     * Please note that this qualifier cannot be combined with .../PriceQuote.
     *
     * @var TicketingItemPricingQualifiersFareFocusExclude
     */
    protected $fareFocusExclude;
    /**
     * Please note that this functionality is restricted to Sabre's Asian joint venture customers.
     *
     * @var TicketingItemPricingQualifiersFare
     */
    protected $fare;
    /**
     * @var TicketingItemPricingQualifiersItineraryOptions
     */
    protected $itineraryOptions;
    /**
     * @var TicketingItemPricingQualifiersNameSelectItem[]
     */
    protected $nameSelect;
    /**
     * @var TicketingItemPricingQualifiersPhaseIVItem[]
     */
    protected $phaseIV;
    /**
     * Cannot combine with .../NameSelect.

    Cannot combine with .../PhaseIV.

     *
     * @var TicketingItemPricingQualifiersPriceQuoteItem[]
     */
    protected $priceQuote;
    /**
     * "RefundableBalance" is used to issue PQR with Refundable Balance EMD-S.
     *
     * @var TicketingItemPricingQualifiersRefundableBalance
     */
    protected $refundableBalance;
    /**
     * "SpanishLargeFamilyDiscountLevel" is used to specify the Spanish large family discount level.
    Please note that this qualifier is only applicable to Spain-based subscribers.
     *
     * @var string
     */
    protected $spanishLargeFamilyDiscountLevel;
    /**
     * Please note that this object is only applicable to Abacus.
     *
     * @var TicketingItemPricingQualifiersSpecificFareItem[]
     */
    protected $specificFare;
    /**
     * "SpecificPenalty" is used to specify change or cancellation amounts for an itinerary.
     *
     * @var TicketingItemPricingQualifiersSpecificPenalty
     */
    protected $specificPenalty;
    /**
     * @var TicketingItemPricingQualifiersTaxes
     */
    protected $taxes;
    /**
     * @var TicketingItemPricingQualifiersValidityDatesItem[]
     */
    protected $validityDates;

    /**
     * @return TicketingItemPricingQualifiersBrandItem[]
     */
    public function getBrand(): ?array
    {
        return $this->brand;
    }

    /**
     * @param TicketingItemPricingQualifiersBrandItem[] $brand
     *
     * @return self
     */
    public function setBrand(?array $brand): self
    {
        $this->brand = $brand;

        return $this;
    }

    /**
     * Please note that this qualifier cannot be combined with .../PriceQuote.
     *
     * @return TicketingItemPricingQualifiersFareFocusExclude
     */
    public function getFareFocusExclude(): ?TicketingItemPricingQualifiersFareFocusExclude
    {
        return $this->fareFocusExclude;
    }

    /**
     * Please note that this qualifier cannot be combined with .../PriceQuote.
     *
     * @param TicketingItemPricingQualifiersFareFocusExclude $fareFocusExclude
     *
     * @return self
     */
    public function setFareFocusExclude(?TicketingItemPricingQualifiersFareFocusExclude $fareFocusExclude): self
    {
        $this->fareFocusExclude = $fareFocusExclude;

        return $this;
    }

    /**
     * Please note that this functionality is restricted to Sabre's Asian joint venture customers.
     *
     * @return TicketingItemPricingQualifiersFare
     */
    public function getFare(): ?TicketingItemPricingQualifiersFare
    {
        return $this->fare;
    }

    /**
     * Please note that this functionality is restricted to Sabre's Asian joint venture customers.
     *
     * @param TicketingItemPricingQualifiersFare $fare
     *
     * @return self
     */
    public function setFare(?TicketingItemPricingQualifiersFare $fare): self
    {
        $this->fare = $fare;

        return $this;
    }

    /**
     * @return TicketingItemPricingQualifiersItineraryOptions
     */
    public function getItineraryOptions(): ?TicketingItemPricingQualifiersItineraryOptions
    {
        return $this->itineraryOptions;
    }

    /**
     * @param TicketingItemPricingQualifiersItineraryOptions $itineraryOptions
     *
     * @return self
     */
    public function setItineraryOptions(?TicketingItemPricingQualifiersItineraryOptions $itineraryOptions): self
    {
        $this->itineraryOptions = $itineraryOptions;

        return $this;
    }

    /**
     * @return TicketingItemPricingQualifiersNameSelectItem[]
     */
    public function getNameSelect(): ?array
    {
        return $this->nameSelect;
    }

    /**
     * @param TicketingItemPricingQualifiersNameSelectItem[] $nameSelect
     *
     * @return self
     */
    public function setNameSelect(?array $nameSelect): self
    {
        $this->nameSelect = $nameSelect;

        return $this;
    }

    /**
     * @return TicketingItemPricingQualifiersPhaseIVItem[]
     */
    public function getPhaseIV(): ?array
    {
        return $this->phaseIV;
    }

    /**
     * @param TicketingItemPricingQualifiersPhaseIVItem[] $phaseIV
     *
     * @return self
     */
    public function setPhaseIV(?array $phaseIV): self
    {
        $this->phaseIV = $phaseIV;

        return $this;
    }

    /**
     * Cannot combine with .../NameSelect.

    Cannot combine with .../PhaseIV.

     *
     * @return TicketingItemPricingQualifiersPriceQuoteItem[]
     */
    public function getPriceQuote(): ?array
    {
        return $this->priceQuote;
    }

    /**
     * Cannot combine with .../NameSelect.

    Cannot combine with .../PhaseIV.

     *
     * @param TicketingItemPricingQualifiersPriceQuoteItem[] $priceQuote
     *
     * @return self
     */
    public function setPriceQuote(?array $priceQuote): self
    {
        $this->priceQuote = $priceQuote;

        return $this;
    }

    /**
     * "RefundableBalance" is used to issue PQR with Refundable Balance EMD-S.
     *
     * @return TicketingItemPricingQualifiersRefundableBalance
     */
    public function getRefundableBalance(): ?TicketingItemPricingQualifiersRefundableBalance
    {
        return $this->refundableBalance;
    }

    /**
     * "RefundableBalance" is used to issue PQR with Refundable Balance EMD-S.
     *
     * @param TicketingItemPricingQualifiersRefundableBalance $refundableBalance
     *
     * @return self
     */
    public function setRefundableBalance(?TicketingItemPricingQualifiersRefundableBalance $refundableBalance): self
    {
        $this->refundableBalance = $refundableBalance;

        return $this;
    }

    /**
     * "SpanishLargeFamilyDiscountLevel" is used to specify the Spanish large family discount level.
    Please note that this qualifier is only applicable to Spain-based subscribers.
     *
     * @return string
     */
    public function getSpanishLargeFamilyDiscountLevel(): ?string
    {
        return $this->spanishLargeFamilyDiscountLevel;
    }

    /**
     * "SpanishLargeFamilyDiscountLevel" is used to specify the Spanish large family discount level.
    Please note that this qualifier is only applicable to Spain-based subscribers.
     *
     * @param string $spanishLargeFamilyDiscountLevel
     *
     * @return self
     */
    public function setSpanishLargeFamilyDiscountLevel(?string $spanishLargeFamilyDiscountLevel): self
    {
        $this->spanishLargeFamilyDiscountLevel = $spanishLargeFamilyDiscountLevel;

        return $this;
    }

    /**
     * Please note that this object is only applicable to Abacus.
     *
     * @return TicketingItemPricingQualifiersSpecificFareItem[]
     */
    public function getSpecificFare(): ?array
    {
        return $this->specificFare;
    }

    /**
     * Please note that this object is only applicable to Abacus.
     *
     * @param TicketingItemPricingQualifiersSpecificFareItem[] $specificFare
     *
     * @return self
     */
    public function setSpecificFare(?array $specificFare): self
    {
        $this->specificFare = $specificFare;

        return $this;
    }

    /**
     * "SpecificPenalty" is used to specify change or cancellation amounts for an itinerary.
     *
     * @return TicketingItemPricingQualifiersSpecificPenalty
     */
    public function getSpecificPenalty(): ?TicketingItemPricingQualifiersSpecificPenalty
    {
        return $this->specificPenalty;
    }

    /**
     * "SpecificPenalty" is used to specify change or cancellation amounts for an itinerary.
     *
     * @param TicketingItemPricingQualifiersSpecificPenalty $specificPenalty
     *
     * @return self
     */
    public function setSpecificPenalty(?TicketingItemPricingQualifiersSpecificPenalty $specificPenalty): self
    {
        $this->specificPenalty = $specificPenalty;

        return $this;
    }

    /**
     * @return TicketingItemPricingQualifiersTaxes
     */
    public function getTaxes(): ?TicketingItemPricingQualifiersTaxes
    {
        return $this->taxes;
    }

    /**
     * @param TicketingItemPricingQualifiersTaxes $taxes
     *
     * @return self
     */
    public function setTaxes(?TicketingItemPricingQualifiersTaxes $taxes): self
    {
        $this->taxes = $taxes;

        return $this;
    }

    /**
     * @return TicketingItemPricingQualifiersValidityDatesItem[]
     */
    public function getValidityDates(): ?array
    {
        return $this->validityDates;
    }

    /**
     * @param TicketingItemPricingQualifiersValidityDatesItem[] $validityDates
     *
     * @return self
     */
    public function setValidityDates(?array $validityDates): self
    {
        $this->validityDates = $validityDates;

        return $this;
    }
}
