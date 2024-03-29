<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Ammonkc\SabreApi\Model\CreatePassengerNameRecord;

use Ammonkc\SabreApi\AbstractModel;

class CreatePassengerNameRecordRequestCreatePassengerNameRecordRQAirPriceItemPriceRequestInformationOptionalQualifiersPricingQualifiers extends AbstractModel
{
    /**
     * Used to specify an account code to price with.
     *
     * @var CreatePassengerNameRecordRequestCreatePassengerNameRecordRQAirPriceItemPriceRequestInformationOptionalQualifiersPricingQualifiersAccount
     */
    protected $account;
    /**
     * Please note that the 'AlternativePricing' node can only be used together with 'PriceRequestInformation.AlternativePricing' set to 'true'.
     *
     * @var CreatePassengerNameRecordRequestCreatePassengerNameRecordRQAirPriceItemPriceRequestInformationOptionalQualifiersPricingQualifiersAlternativePricing
     */
    protected $alternativePricing;
    /**
     * Used to instruct the system to price an itinerary according to a specified banker's selling rate.
     *
     * @var string
     */
    protected $bankersSellingRate;
    /**
     * Used to instruct the system to search out lower fares based upon the existing itinerary segments.
     *
     * @var CreatePassengerNameRecordRequestCreatePassengerNameRecordRQAirPriceItemPriceRequestInformationOptionalQualifiersPricingQualifiersBargainFinder
     */
    protected $bargainFinder;
    /**
     * Used to exclude Basic Economy Fares (up to 5 booking classes can be selected).
    Please note that this element is only applicable to airline customers.
    'BasicEconomyExclude' can only be used with 'BargainFinder'.

     *
     * @var string[]
     */
    protected $basicEconomyExclude;
    /**
     * Used to specify a brand.
    Please note that it's not possible to request more than 1 brand for an entire journey, or for the same segment.

     *
     * @var CreatePassengerNameRecordRequestCreatePassengerNameRecordRQAirPriceItemPriceRequestInformationOptionalQualifiersPricingQualifiersBrandItem[]
     */
    protected $brand;
    /**
     * Used to instruct the system to specify the purchase date for the fare.
    'BuyingDate' follows this format: 'YYYY-MM-DD'.

     *
     * @var string
     */
    protected $buyingDate;
    /**
     * Used to instruct the system to specify fares by a specific cabin or the lowest fare across all cabins.
    Please note that Cabin may only be used together with 'BargainFinder' or 'AlternativePricing.Overrides.NoMatch'.

     *
     * @var string
     */
    protected $cabin;
    /**
     * All of the 'CommandPricing entries' are concerned with specifying fare basis codes, ticket designators, and discounts.
    This base level command is WPQ followed by one or more of the below elements.

     *
     * @var CreatePassengerNameRecordRequestCreatePassengerNameRecordRQAirPriceItemPriceRequestInformationOptionalQualifiersPricingQualifiersCommandPricingItem[]
     */
    protected $commandPricing;
    /**
     * Used to select specific contracts to process at a time of pricing.
     *
     * @var string[]
     */
    protected $commissionContract;
    /**
     * Used to specify a corporate ID to price with.
     *
     * @var CreatePassengerNameRecordRequestCreatePassengerNameRecordRQAirPriceItemPriceRequestInformationOptionalQualifiersPricingQualifiersCorporate
     */
    protected $corporate;
    /**
     * Please note that this functionality is restricted to Sabre's Asian joint venture customers.
     *
     * @var CreatePassengerNameRecordRequestCreatePassengerNameRecordRQAirPriceItemPriceRequestInformationOptionalQualifiersPricingQualifiersFare
     */
    protected $fare;
    /**
     * Used to pass different fare options.
     *
     * @var CreatePassengerNameRecordRequestCreatePassengerNameRecordRQAirPriceItemPriceRequestInformationOptionalQualifiersPricingQualifiersFareOptions
     */
    protected $fareOptions;
    /**
     * Pricing qualifiers related to itinerary.
     *
     * @var CreatePassengerNameRecordRequestCreatePassengerNameRecordRQAirPriceItemPriceRequestInformationOptionalQualifiersPricingQualifiersItineraryOptions
     */
    protected $itineraryOptions;
    /**
     * Used to to specify the mark(up/down) amount that's to be applied at time of pricing to create a manually Adjusted Selling Level fare.
     *
     * @var CreatePassengerNameRecordRequestCreatePassengerNameRecordRQAirPriceItemPriceRequestInformationOptionalQualifiersPricingQualifiersManuallyAdjustedSellingLevelItem[]
     */
    protected $manuallyAdjustedSellingLevel;
    /**
     * Used to instruct the system to price the itinerary based upon a particular name field.
     *
     * @var CreatePassengerNameRecordRequestCreatePassengerNameRecordRQAirPriceItemPriceRequestInformationOptionalQualifiersPricingQualifiersNameSelectItem[]
     */
    protected $nameSelect;
    /**
     * 'NetRemit' is ONLY applicable to BSP-based subscribers.
    'NetRemit' is NOT applicable to ARC-based subscribers.

     *
     * @var CreatePassengerNameRecordRequestCreatePassengerNameRecordRQAirPriceItemPriceRequestInformationOptionalQualifiersPricingQualifiersNetRemit
     */
    protected $netRemit;
    /**
     * The pricing overrides.
     *
     * @var CreatePassengerNameRecordRequestCreatePassengerNameRecordRQAirPriceItemPriceRequestInformationOptionalQualifiersPricingQualifiersOverrides
     */
    protected $overrides;
    /**
     * Used to is used to instruct the system to price the itinerary with a specified passenger status code.
    Equivalent Sabre host command: 'WPEM/(country or state code)', 'WPRY/(country or state code)', 'WPNT/(country or state code)'.

     *
     * @var string
     */
    protected $passengerStatus;
    /**
     * Used to specify a passenger type code.
     *
     * @var CreatePassengerNameRecordRequestCreatePassengerNameRecordRQAirPriceItemPriceRequestInformationOptionalQualifiersPricingQualifiersPassengerTypeItem[]
     */
    protected $passengerType;
    /**
     * Used to specify an amount to add on top of the fare.
     *
     * @var CreatePassengerNameRecordRequestCreatePassengerNameRecordRQAirPriceItemPriceRequestInformationOptionalQualifiersPricingQualifiersPlusUp
     */
    protected $plusUp;
    /**
     * Used to price an itinerary incorporating fares linked to a specific Retailer Rule Qualifier code.
     *
     * @var CreatePassengerNameRecordRequestCreatePassengerNameRecordRQAirPriceItemPriceRequestInformationOptionalQualifiersPricingQualifiersRetailerRuleQualifier
     */
    protected $retailerRuleQualifier;
    /**
     * Used to specify a ship's country of registration.
    This element is only to be used when 'PassengerType.Code'='SEA'.

     *
     * @var string
     */
    protected $shipsRegistry;
    /**
     * Used to specify the Spanish large family discount level.
    Please note that this qualifier is only applicable to Spain-based subscribers.

     *
     * @var string
     */
    protected $spanishLargeFamilyDiscountLevel;
    /**
     * Used to specify the Island Resident code applicable for discount.
     *
     * @var string
     */
    protected $spanishResidentDiscount;
    /**
     * This element is only applicable to Abacus.
     *
     * @var CreatePassengerNameRecordRequestCreatePassengerNameRecordRQAirPriceItemPriceRequestInformationOptionalQualifiersPricingQualifiersSpecificFareItem[]
     */
    protected $specificFare;
    /**
     * Used to specify change or cancellation amounts for an itinerary.
     *
     * @var CreatePassengerNameRecordRequestCreatePassengerNameRecordRQAirPriceItemPriceRequestInformationOptionalQualifiersPricingQualifiersSpecificPenalty
     */
    protected $specificPenalty;
    /**
     * The tax related pricing qualifiers.
     *
     * @var CreatePassengerNameRecordRequestCreatePassengerNameRecordRQAirPriceItemPriceRequestInformationOptionalQualifiersPricingQualifiersTaxes
     */
    protected $taxes;
    /**
     * Used to specify the ticket validity dates.
     *
     * @var CreatePassengerNameRecordRequestCreatePassengerNameRecordRQAirPriceItemPriceRequestInformationOptionalQualifiersPricingQualifiersValidityDatesItem[]
     */
    protected $validityDates;
    /**
     * Used to specify an alternate currency code to price with.
     *
     * @var string
     */
    protected $alternateCurrencyCode;
    /**
     * Used to specify a currency code to price with.
     *
     * @var string
     */
    protected $currencyCode;
    /**
     * Used to exclude aggregated content.
    Please note that it can only be combined with 'BargainFinder'.

     *
     * @var bool
     */
    protected $aggregatedContentExclude;
    /**
     * Used to exclude or ignore fare focus fares.
     *
     * @var bool
     */
    protected $fareFocusExclude;
    /**
     * Used to price itinerary without a date.
     *
     * @var bool
     */
    protected $noDate;
    /**
     * Allows a request for a round the world/circle trip fare.
     *
     * @var bool
     */
    protected $roundTheWorld;
    /**
     * Used to specify the pricing source.
     *
     * @var string
     */
    protected $source;

    /**
     * Used to specify an account code to price with.
     *
     * @return CreatePassengerNameRecordRequestCreatePassengerNameRecordRQAirPriceItemPriceRequestInformationOptionalQualifiersPricingQualifiersAccount|null
     */
    public function getAccount(): ?CreatePassengerNameRecordRequestCreatePassengerNameRecordRQAirPriceItemPriceRequestInformationOptionalQualifiersPricingQualifiersAccount
    {
        return $this->account;
    }

    /**
     * Used to specify an account code to price with.
     *
     * @param CreatePassengerNameRecordRequestCreatePassengerNameRecordRQAirPriceItemPriceRequestInformationOptionalQualifiersPricingQualifiersAccount|null $account
     *
     * @return self
     */
    public function setAccount(?CreatePassengerNameRecordRequestCreatePassengerNameRecordRQAirPriceItemPriceRequestInformationOptionalQualifiersPricingQualifiersAccount $account): self
    {
        $this->account = $account;

        return $this;
    }

    /**
     * Please note that the 'AlternativePricing' node can only be used together with 'PriceRequestInformation.AlternativePricing' set to 'true'.
     *
     * @return CreatePassengerNameRecordRequestCreatePassengerNameRecordRQAirPriceItemPriceRequestInformationOptionalQualifiersPricingQualifiersAlternativePricing|null
     */
    public function getAlternativePricing(): ?CreatePassengerNameRecordRequestCreatePassengerNameRecordRQAirPriceItemPriceRequestInformationOptionalQualifiersPricingQualifiersAlternativePricing
    {
        return $this->alternativePricing;
    }

    /**
     * Please note that the 'AlternativePricing' node can only be used together with 'PriceRequestInformation.AlternativePricing' set to 'true'.
     *
     * @param CreatePassengerNameRecordRequestCreatePassengerNameRecordRQAirPriceItemPriceRequestInformationOptionalQualifiersPricingQualifiersAlternativePricing|null $alternativePricing
     *
     * @return self
     */
    public function setAlternativePricing(?CreatePassengerNameRecordRequestCreatePassengerNameRecordRQAirPriceItemPriceRequestInformationOptionalQualifiersPricingQualifiersAlternativePricing $alternativePricing): self
    {
        $this->alternativePricing = $alternativePricing;

        return $this;
    }

    /**
     * Used to instruct the system to price an itinerary according to a specified banker's selling rate.
     *
     * @return string|null
     */
    public function getBankersSellingRate(): ?string
    {
        return $this->bankersSellingRate;
    }

    /**
     * Used to instruct the system to price an itinerary according to a specified banker's selling rate.
     *
     * @param string|null $bankersSellingRate
     *
     * @return self
     */
    public function setBankersSellingRate(?string $bankersSellingRate): self
    {
        $this->bankersSellingRate = $bankersSellingRate;

        return $this;
    }

    /**
     * Used to instruct the system to search out lower fares based upon the existing itinerary segments.
     *
     * @return CreatePassengerNameRecordRequestCreatePassengerNameRecordRQAirPriceItemPriceRequestInformationOptionalQualifiersPricingQualifiersBargainFinder|null
     */
    public function getBargainFinder(): ?CreatePassengerNameRecordRequestCreatePassengerNameRecordRQAirPriceItemPriceRequestInformationOptionalQualifiersPricingQualifiersBargainFinder
    {
        return $this->bargainFinder;
    }

    /**
     * Used to instruct the system to search out lower fares based upon the existing itinerary segments.
     *
     * @param CreatePassengerNameRecordRequestCreatePassengerNameRecordRQAirPriceItemPriceRequestInformationOptionalQualifiersPricingQualifiersBargainFinder|null $bargainFinder
     *
     * @return self
     */
    public function setBargainFinder(?CreatePassengerNameRecordRequestCreatePassengerNameRecordRQAirPriceItemPriceRequestInformationOptionalQualifiersPricingQualifiersBargainFinder $bargainFinder): self
    {
        $this->bargainFinder = $bargainFinder;

        return $this;
    }

    /**
     * Used to exclude Basic Economy Fares (up to 5 booking classes can be selected).
    Please note that this element is only applicable to airline customers.
    'BasicEconomyExclude' can only be used with 'BargainFinder'.

     *
     * @return string[]|null
     */
    public function getBasicEconomyExclude(): ?array
    {
        return $this->basicEconomyExclude;
    }

    /**
     * Used to exclude Basic Economy Fares (up to 5 booking classes can be selected).
    Please note that this element is only applicable to airline customers.
    'BasicEconomyExclude' can only be used with 'BargainFinder'.

     *
     * @param string[]|null $basicEconomyExclude
     *
     * @return self
     */
    public function setBasicEconomyExclude(?array $basicEconomyExclude): self
    {
        $this->basicEconomyExclude = $basicEconomyExclude;

        return $this;
    }

    /**
     * Used to specify a brand.
    Please note that it's not possible to request more than 1 brand for an entire journey, or for the same segment.

     *
     * @return CreatePassengerNameRecordRequestCreatePassengerNameRecordRQAirPriceItemPriceRequestInformationOptionalQualifiersPricingQualifiersBrandItem[]|null
     */
    public function getBrand(): ?array
    {
        return $this->brand;
    }

    /**
     * Used to specify a brand.
    Please note that it's not possible to request more than 1 brand for an entire journey, or for the same segment.

     *
     * @param CreatePassengerNameRecordRequestCreatePassengerNameRecordRQAirPriceItemPriceRequestInformationOptionalQualifiersPricingQualifiersBrandItem[]|null $brand
     *
     * @return self
     */
    public function setBrand(?array $brand): self
    {
        $this->brand = $brand;

        return $this;
    }

    /**
     * Used to instruct the system to specify the purchase date for the fare.
    'BuyingDate' follows this format: 'YYYY-MM-DD'.

     *
     * @return string|null
     */
    public function getBuyingDate(): ?string
    {
        return $this->buyingDate;
    }

    /**
     * Used to instruct the system to specify the purchase date for the fare.
    'BuyingDate' follows this format: 'YYYY-MM-DD'.

     *
     * @param string|null $buyingDate
     *
     * @return self
     */
    public function setBuyingDate(?string $buyingDate): self
    {
        $this->buyingDate = $buyingDate;

        return $this;
    }

    /**
     * Used to instruct the system to specify fares by a specific cabin or the lowest fare across all cabins.
    Please note that Cabin may only be used together with 'BargainFinder' or 'AlternativePricing.Overrides.NoMatch'.

     *
     * @return string|null
     */
    public function getCabin(): ?string
    {
        return $this->cabin;
    }

    /**
     * Used to instruct the system to specify fares by a specific cabin or the lowest fare across all cabins.
    Please note that Cabin may only be used together with 'BargainFinder' or 'AlternativePricing.Overrides.NoMatch'.

     *
     * @param string|null $cabin
     *
     * @return self
     */
    public function setCabin(?string $cabin): self
    {
        $this->cabin = $cabin;

        return $this;
    }

    /**
     * All of the 'CommandPricing entries' are concerned with specifying fare basis codes, ticket designators, and discounts.
    This base level command is WPQ followed by one or more of the below elements.

     *
     * @return CreatePassengerNameRecordRequestCreatePassengerNameRecordRQAirPriceItemPriceRequestInformationOptionalQualifiersPricingQualifiersCommandPricingItem[]|null
     */
    public function getCommandPricing(): ?array
    {
        return $this->commandPricing;
    }

    /**
     * All of the 'CommandPricing entries' are concerned with specifying fare basis codes, ticket designators, and discounts.
    This base level command is WPQ followed by one or more of the below elements.

     *
     * @param CreatePassengerNameRecordRequestCreatePassengerNameRecordRQAirPriceItemPriceRequestInformationOptionalQualifiersPricingQualifiersCommandPricingItem[]|null $commandPricing
     *
     * @return self
     */
    public function setCommandPricing(?array $commandPricing): self
    {
        $this->commandPricing = $commandPricing;

        return $this;
    }

    /**
     * Used to select specific contracts to process at a time of pricing.
     *
     * @return string[]|null
     */
    public function getCommissionContract(): ?array
    {
        return $this->commissionContract;
    }

    /**
     * Used to select specific contracts to process at a time of pricing.
     *
     * @param string[]|null $commissionContract
     *
     * @return self
     */
    public function setCommissionContract(?array $commissionContract): self
    {
        $this->commissionContract = $commissionContract;

        return $this;
    }

    /**
     * Used to specify a corporate ID to price with.
     *
     * @return CreatePassengerNameRecordRequestCreatePassengerNameRecordRQAirPriceItemPriceRequestInformationOptionalQualifiersPricingQualifiersCorporate|null
     */
    public function getCorporate(): ?CreatePassengerNameRecordRequestCreatePassengerNameRecordRQAirPriceItemPriceRequestInformationOptionalQualifiersPricingQualifiersCorporate
    {
        return $this->corporate;
    }

    /**
     * Used to specify a corporate ID to price with.
     *
     * @param CreatePassengerNameRecordRequestCreatePassengerNameRecordRQAirPriceItemPriceRequestInformationOptionalQualifiersPricingQualifiersCorporate|null $corporate
     *
     * @return self
     */
    public function setCorporate(?CreatePassengerNameRecordRequestCreatePassengerNameRecordRQAirPriceItemPriceRequestInformationOptionalQualifiersPricingQualifiersCorporate $corporate): self
    {
        $this->corporate = $corporate;

        return $this;
    }

    /**
     * Please note that this functionality is restricted to Sabre's Asian joint venture customers.
     *
     * @return CreatePassengerNameRecordRequestCreatePassengerNameRecordRQAirPriceItemPriceRequestInformationOptionalQualifiersPricingQualifiersFare|null
     */
    public function getFare(): ?CreatePassengerNameRecordRequestCreatePassengerNameRecordRQAirPriceItemPriceRequestInformationOptionalQualifiersPricingQualifiersFare
    {
        return $this->fare;
    }

    /**
     * Please note that this functionality is restricted to Sabre's Asian joint venture customers.
     *
     * @param CreatePassengerNameRecordRequestCreatePassengerNameRecordRQAirPriceItemPriceRequestInformationOptionalQualifiersPricingQualifiersFare|null $fare
     *
     * @return self
     */
    public function setFare(?CreatePassengerNameRecordRequestCreatePassengerNameRecordRQAirPriceItemPriceRequestInformationOptionalQualifiersPricingQualifiersFare $fare): self
    {
        $this->fare = $fare;

        return $this;
    }

    /**
     * Used to pass different fare options.
     *
     * @return CreatePassengerNameRecordRequestCreatePassengerNameRecordRQAirPriceItemPriceRequestInformationOptionalQualifiersPricingQualifiersFareOptions|null
     */
    public function getFareOptions(): ?CreatePassengerNameRecordRequestCreatePassengerNameRecordRQAirPriceItemPriceRequestInformationOptionalQualifiersPricingQualifiersFareOptions
    {
        return $this->fareOptions;
    }

    /**
     * Used to pass different fare options.
     *
     * @param CreatePassengerNameRecordRequestCreatePassengerNameRecordRQAirPriceItemPriceRequestInformationOptionalQualifiersPricingQualifiersFareOptions|null $fareOptions
     *
     * @return self
     */
    public function setFareOptions(?CreatePassengerNameRecordRequestCreatePassengerNameRecordRQAirPriceItemPriceRequestInformationOptionalQualifiersPricingQualifiersFareOptions $fareOptions): self
    {
        $this->fareOptions = $fareOptions;

        return $this;
    }

    /**
     * Pricing qualifiers related to itinerary.
     *
     * @return CreatePassengerNameRecordRequestCreatePassengerNameRecordRQAirPriceItemPriceRequestInformationOptionalQualifiersPricingQualifiersItineraryOptions|null
     */
    public function getItineraryOptions(): ?CreatePassengerNameRecordRequestCreatePassengerNameRecordRQAirPriceItemPriceRequestInformationOptionalQualifiersPricingQualifiersItineraryOptions
    {
        return $this->itineraryOptions;
    }

    /**
     * Pricing qualifiers related to itinerary.
     *
     * @param CreatePassengerNameRecordRequestCreatePassengerNameRecordRQAirPriceItemPriceRequestInformationOptionalQualifiersPricingQualifiersItineraryOptions|null $itineraryOptions
     *
     * @return self
     */
    public function setItineraryOptions(?CreatePassengerNameRecordRequestCreatePassengerNameRecordRQAirPriceItemPriceRequestInformationOptionalQualifiersPricingQualifiersItineraryOptions $itineraryOptions): self
    {
        $this->itineraryOptions = $itineraryOptions;

        return $this;
    }

    /**
     * Used to to specify the mark(up/down) amount that's to be applied at time of pricing to create a manually Adjusted Selling Level fare.
     *
     * @return CreatePassengerNameRecordRequestCreatePassengerNameRecordRQAirPriceItemPriceRequestInformationOptionalQualifiersPricingQualifiersManuallyAdjustedSellingLevelItem[]|null
     */
    public function getManuallyAdjustedSellingLevel(): ?array
    {
        return $this->manuallyAdjustedSellingLevel;
    }

    /**
     * Used to to specify the mark(up/down) amount that's to be applied at time of pricing to create a manually Adjusted Selling Level fare.
     *
     * @param CreatePassengerNameRecordRequestCreatePassengerNameRecordRQAirPriceItemPriceRequestInformationOptionalQualifiersPricingQualifiersManuallyAdjustedSellingLevelItem[]|null $manuallyAdjustedSellingLevel
     *
     * @return self
     */
    public function setManuallyAdjustedSellingLevel(?array $manuallyAdjustedSellingLevel): self
    {
        $this->manuallyAdjustedSellingLevel = $manuallyAdjustedSellingLevel;

        return $this;
    }

    /**
     * Used to instruct the system to price the itinerary based upon a particular name field.
     *
     * @return CreatePassengerNameRecordRequestCreatePassengerNameRecordRQAirPriceItemPriceRequestInformationOptionalQualifiersPricingQualifiersNameSelectItem[]|null
     */
    public function getNameSelect(): ?array
    {
        return $this->nameSelect;
    }

    /**
     * Used to instruct the system to price the itinerary based upon a particular name field.
     *
     * @param CreatePassengerNameRecordRequestCreatePassengerNameRecordRQAirPriceItemPriceRequestInformationOptionalQualifiersPricingQualifiersNameSelectItem[]|null $nameSelect
     *
     * @return self
     */
    public function setNameSelect(?array $nameSelect): self
    {
        $this->nameSelect = $nameSelect;

        return $this;
    }

    /**
     * 'NetRemit' is ONLY applicable to BSP-based subscribers.
    'NetRemit' is NOT applicable to ARC-based subscribers.

     *
     * @return CreatePassengerNameRecordRequestCreatePassengerNameRecordRQAirPriceItemPriceRequestInformationOptionalQualifiersPricingQualifiersNetRemit|null
     */
    public function getNetRemit(): ?CreatePassengerNameRecordRequestCreatePassengerNameRecordRQAirPriceItemPriceRequestInformationOptionalQualifiersPricingQualifiersNetRemit
    {
        return $this->netRemit;
    }

    /**
     * 'NetRemit' is ONLY applicable to BSP-based subscribers.
    'NetRemit' is NOT applicable to ARC-based subscribers.

     *
     * @param CreatePassengerNameRecordRequestCreatePassengerNameRecordRQAirPriceItemPriceRequestInformationOptionalQualifiersPricingQualifiersNetRemit|null $netRemit
     *
     * @return self
     */
    public function setNetRemit(?CreatePassengerNameRecordRequestCreatePassengerNameRecordRQAirPriceItemPriceRequestInformationOptionalQualifiersPricingQualifiersNetRemit $netRemit): self
    {
        $this->netRemit = $netRemit;

        return $this;
    }

    /**
     * The pricing overrides.
     *
     * @return CreatePassengerNameRecordRequestCreatePassengerNameRecordRQAirPriceItemPriceRequestInformationOptionalQualifiersPricingQualifiersOverrides|null
     */
    public function getOverrides(): ?CreatePassengerNameRecordRequestCreatePassengerNameRecordRQAirPriceItemPriceRequestInformationOptionalQualifiersPricingQualifiersOverrides
    {
        return $this->overrides;
    }

    /**
     * The pricing overrides.
     *
     * @param CreatePassengerNameRecordRequestCreatePassengerNameRecordRQAirPriceItemPriceRequestInformationOptionalQualifiersPricingQualifiersOverrides|null $overrides
     *
     * @return self
     */
    public function setOverrides(?CreatePassengerNameRecordRequestCreatePassengerNameRecordRQAirPriceItemPriceRequestInformationOptionalQualifiersPricingQualifiersOverrides $overrides): self
    {
        $this->overrides = $overrides;

        return $this;
    }

    /**
     * Used to is used to instruct the system to price the itinerary with a specified passenger status code.
    Equivalent Sabre host command: 'WPEM/(country or state code)', 'WPRY/(country or state code)', 'WPNT/(country or state code)'.

     *
     * @return string|null
     */
    public function getPassengerStatus(): ?string
    {
        return $this->passengerStatus;
    }

    /**
     * Used to is used to instruct the system to price the itinerary with a specified passenger status code.
    Equivalent Sabre host command: 'WPEM/(country or state code)', 'WPRY/(country or state code)', 'WPNT/(country or state code)'.

     *
     * @param string|null $passengerStatus
     *
     * @return self
     */
    public function setPassengerStatus(?string $passengerStatus): self
    {
        $this->passengerStatus = $passengerStatus;

        return $this;
    }

    /**
     * Used to specify a passenger type code.
     *
     * @return CreatePassengerNameRecordRequestCreatePassengerNameRecordRQAirPriceItemPriceRequestInformationOptionalQualifiersPricingQualifiersPassengerTypeItem[]|null
     */
    public function getPassengerType(): ?array
    {
        return $this->passengerType;
    }

    /**
     * Used to specify a passenger type code.
     *
     * @param CreatePassengerNameRecordRequestCreatePassengerNameRecordRQAirPriceItemPriceRequestInformationOptionalQualifiersPricingQualifiersPassengerTypeItem[]|null $passengerType
     *
     * @return self
     */
    public function setPassengerType(?array $passengerType): self
    {
        $this->passengerType = $passengerType;

        return $this;
    }

    /**
     * Used to specify an amount to add on top of the fare.
     *
     * @return CreatePassengerNameRecordRequestCreatePassengerNameRecordRQAirPriceItemPriceRequestInformationOptionalQualifiersPricingQualifiersPlusUp|null
     */
    public function getPlusUp(): ?CreatePassengerNameRecordRequestCreatePassengerNameRecordRQAirPriceItemPriceRequestInformationOptionalQualifiersPricingQualifiersPlusUp
    {
        return $this->plusUp;
    }

    /**
     * Used to specify an amount to add on top of the fare.
     *
     * @param CreatePassengerNameRecordRequestCreatePassengerNameRecordRQAirPriceItemPriceRequestInformationOptionalQualifiersPricingQualifiersPlusUp|null $plusUp
     *
     * @return self
     */
    public function setPlusUp(?CreatePassengerNameRecordRequestCreatePassengerNameRecordRQAirPriceItemPriceRequestInformationOptionalQualifiersPricingQualifiersPlusUp $plusUp): self
    {
        $this->plusUp = $plusUp;

        return $this;
    }

    /**
     * Used to price an itinerary incorporating fares linked to a specific Retailer Rule Qualifier code.
     *
     * @return CreatePassengerNameRecordRequestCreatePassengerNameRecordRQAirPriceItemPriceRequestInformationOptionalQualifiersPricingQualifiersRetailerRuleQualifier|null
     */
    public function getRetailerRuleQualifier(): ?CreatePassengerNameRecordRequestCreatePassengerNameRecordRQAirPriceItemPriceRequestInformationOptionalQualifiersPricingQualifiersRetailerRuleQualifier
    {
        return $this->retailerRuleQualifier;
    }

    /**
     * Used to price an itinerary incorporating fares linked to a specific Retailer Rule Qualifier code.
     *
     * @param CreatePassengerNameRecordRequestCreatePassengerNameRecordRQAirPriceItemPriceRequestInformationOptionalQualifiersPricingQualifiersRetailerRuleQualifier|null $retailerRuleQualifier
     *
     * @return self
     */
    public function setRetailerRuleQualifier(?CreatePassengerNameRecordRequestCreatePassengerNameRecordRQAirPriceItemPriceRequestInformationOptionalQualifiersPricingQualifiersRetailerRuleQualifier $retailerRuleQualifier): self
    {
        $this->retailerRuleQualifier = $retailerRuleQualifier;

        return $this;
    }

    /**
     * Used to specify a ship's country of registration.
    This element is only to be used when 'PassengerType.Code'='SEA'.

     *
     * @return string|null
     */
    public function getShipsRegistry(): ?string
    {
        return $this->shipsRegistry;
    }

    /**
     * Used to specify a ship's country of registration.
    This element is only to be used when 'PassengerType.Code'='SEA'.

     *
     * @param string|null $shipsRegistry
     *
     * @return self
     */
    public function setShipsRegistry(?string $shipsRegistry): self
    {
        $this->shipsRegistry = $shipsRegistry;

        return $this;
    }

    /**
     * Used to specify the Spanish large family discount level.
    Please note that this qualifier is only applicable to Spain-based subscribers.

     *
     * @return string|null
     */
    public function getSpanishLargeFamilyDiscountLevel(): ?string
    {
        return $this->spanishLargeFamilyDiscountLevel;
    }

    /**
     * Used to specify the Spanish large family discount level.
    Please note that this qualifier is only applicable to Spain-based subscribers.

     *
     * @param string|null $spanishLargeFamilyDiscountLevel
     *
     * @return self
     */
    public function setSpanishLargeFamilyDiscountLevel(?string $spanishLargeFamilyDiscountLevel): self
    {
        $this->spanishLargeFamilyDiscountLevel = $spanishLargeFamilyDiscountLevel;

        return $this;
    }

    /**
     * Used to specify the Island Resident code applicable for discount.
     *
     * @return string|null
     */
    public function getSpanishResidentDiscount(): ?string
    {
        return $this->spanishResidentDiscount;
    }

    /**
     * Used to specify the Island Resident code applicable for discount.
     *
     * @param string|null $spanishResidentDiscount
     *
     * @return self
     */
    public function setSpanishResidentDiscount(?string $spanishResidentDiscount): self
    {
        $this->spanishResidentDiscount = $spanishResidentDiscount;

        return $this;
    }

    /**
     * This element is only applicable to Abacus.
     *
     * @return CreatePassengerNameRecordRequestCreatePassengerNameRecordRQAirPriceItemPriceRequestInformationOptionalQualifiersPricingQualifiersSpecificFareItem[]|null
     */
    public function getSpecificFare(): ?array
    {
        return $this->specificFare;
    }

    /**
     * This element is only applicable to Abacus.
     *
     * @param CreatePassengerNameRecordRequestCreatePassengerNameRecordRQAirPriceItemPriceRequestInformationOptionalQualifiersPricingQualifiersSpecificFareItem[]|null $specificFare
     *
     * @return self
     */
    public function setSpecificFare(?array $specificFare): self
    {
        $this->specificFare = $specificFare;

        return $this;
    }

    /**
     * Used to specify change or cancellation amounts for an itinerary.
     *
     * @return CreatePassengerNameRecordRequestCreatePassengerNameRecordRQAirPriceItemPriceRequestInformationOptionalQualifiersPricingQualifiersSpecificPenalty|null
     */
    public function getSpecificPenalty(): ?CreatePassengerNameRecordRequestCreatePassengerNameRecordRQAirPriceItemPriceRequestInformationOptionalQualifiersPricingQualifiersSpecificPenalty
    {
        return $this->specificPenalty;
    }

    /**
     * Used to specify change or cancellation amounts for an itinerary.
     *
     * @param CreatePassengerNameRecordRequestCreatePassengerNameRecordRQAirPriceItemPriceRequestInformationOptionalQualifiersPricingQualifiersSpecificPenalty|null $specificPenalty
     *
     * @return self
     */
    public function setSpecificPenalty(?CreatePassengerNameRecordRequestCreatePassengerNameRecordRQAirPriceItemPriceRequestInformationOptionalQualifiersPricingQualifiersSpecificPenalty $specificPenalty): self
    {
        $this->specificPenalty = $specificPenalty;

        return $this;
    }

    /**
     * The tax related pricing qualifiers.
     *
     * @return CreatePassengerNameRecordRequestCreatePassengerNameRecordRQAirPriceItemPriceRequestInformationOptionalQualifiersPricingQualifiersTaxes|null
     */
    public function getTaxes(): ?CreatePassengerNameRecordRequestCreatePassengerNameRecordRQAirPriceItemPriceRequestInformationOptionalQualifiersPricingQualifiersTaxes
    {
        return $this->taxes;
    }

    /**
     * The tax related pricing qualifiers.
     *
     * @param CreatePassengerNameRecordRequestCreatePassengerNameRecordRQAirPriceItemPriceRequestInformationOptionalQualifiersPricingQualifiersTaxes|null $taxes
     *
     * @return self
     */
    public function setTaxes(?CreatePassengerNameRecordRequestCreatePassengerNameRecordRQAirPriceItemPriceRequestInformationOptionalQualifiersPricingQualifiersTaxes $taxes): self
    {
        $this->taxes = $taxes;

        return $this;
    }

    /**
     * Used to specify the ticket validity dates.
     *
     * @return CreatePassengerNameRecordRequestCreatePassengerNameRecordRQAirPriceItemPriceRequestInformationOptionalQualifiersPricingQualifiersValidityDatesItem[]|null
     */
    public function getValidityDates(): ?array
    {
        return $this->validityDates;
    }

    /**
     * Used to specify the ticket validity dates.
     *
     * @param CreatePassengerNameRecordRequestCreatePassengerNameRecordRQAirPriceItemPriceRequestInformationOptionalQualifiersPricingQualifiersValidityDatesItem[]|null $validityDates
     *
     * @return self
     */
    public function setValidityDates(?array $validityDates): self
    {
        $this->validityDates = $validityDates;

        return $this;
    }

    /**
     * Used to specify an alternate currency code to price with.
     *
     * @return string|null
     */
    public function getAlternateCurrencyCode(): ?string
    {
        return $this->alternateCurrencyCode;
    }

    /**
     * Used to specify an alternate currency code to price with.
     *
     * @param string|null $alternateCurrencyCode
     *
     * @return self
     */
    public function setAlternateCurrencyCode(?string $alternateCurrencyCode): self
    {
        $this->alternateCurrencyCode = $alternateCurrencyCode;

        return $this;
    }

    /**
     * Used to specify a currency code to price with.
     *
     * @return string|null
     */
    public function getCurrencyCode(): ?string
    {
        return $this->currencyCode;
    }

    /**
     * Used to specify a currency code to price with.
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
     * Used to exclude aggregated content.
    Please note that it can only be combined with 'BargainFinder'.

     *
     * @return bool|null
     */
    public function getAggregatedContentExclude(): ?bool
    {
        return $this->aggregatedContentExclude;
    }

    /**
     * Used to exclude aggregated content.
    Please note that it can only be combined with 'BargainFinder'.

     *
     * @param bool|null $aggregatedContentExclude
     *
     * @return self
     */
    public function setAggregatedContentExclude(?bool $aggregatedContentExclude): self
    {
        $this->aggregatedContentExclude = $aggregatedContentExclude;

        return $this;
    }

    /**
     * Used to exclude or ignore fare focus fares.
     *
     * @return bool|null
     */
    public function getFareFocusExclude(): ?bool
    {
        return $this->fareFocusExclude;
    }

    /**
     * Used to exclude or ignore fare focus fares.
     *
     * @param bool|null $fareFocusExclude
     *
     * @return self
     */
    public function setFareFocusExclude(?bool $fareFocusExclude): self
    {
        $this->fareFocusExclude = $fareFocusExclude;

        return $this;
    }

    /**
     * Used to price itinerary without a date.
     *
     * @return bool|null
     */
    public function getNoDate(): ?bool
    {
        return $this->noDate;
    }

    /**
     * Used to price itinerary without a date.
     *
     * @param bool|null $noDate
     *
     * @return self
     */
    public function setNoDate(?bool $noDate): self
    {
        $this->noDate = $noDate;

        return $this;
    }

    /**
     * Allows a request for a round the world/circle trip fare.
     *
     * @return bool|null
     */
    public function getRoundTheWorld(): ?bool
    {
        return $this->roundTheWorld;
    }

    /**
     * Allows a request for a round the world/circle trip fare.
     *
     * @param bool|null $roundTheWorld
     *
     * @return self
     */
    public function setRoundTheWorld(?bool $roundTheWorld): self
    {
        $this->roundTheWorld = $roundTheWorld;

        return $this;
    }

    /**
     * Used to specify the pricing source.
     *
     * @return string|null
     */
    public function getSource(): ?string
    {
        return $this->source;
    }

    /**
     * Used to specify the pricing source.
     *
     * @param string|null $source
     *
     * @return self
     */
    public function setSource(?string $source): self
    {
        $this->source = $source;

        return $this;
    }
}
