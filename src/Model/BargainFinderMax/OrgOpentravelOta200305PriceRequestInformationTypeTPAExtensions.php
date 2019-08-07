<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Ammonkc\SabreApi\Model\BargainFinderMax;

use Ammonkc\SabreApi\AbstractModel;

class OrgOpentravelOta200305PriceRequestInformationTypeTPAExtensions extends AbstractModel
{
    /**
     * Apply resident discount in CLFE.
     *
     * @var OrgOpentravelOta200305ApplyResidentDiscountType
     */
    protected $applyResidentDiscount;
    /**
     * @var OrgOpentravelOta200305PriceRequestInformationTypeTPAExtensionsBrandedFareIndicators
     */
    protected $brandedFareIndicators;
    /**
     * @var OrgOpentravelOta200305PriceRequestInformationTypeTPAExtensionsCurrency
     */
    protected $currency;
    /**
     * @var OrgOpentravelOta200305PriceRequestInformationTypeTPAExtensionsCustomerType
     */
    protected $customerType;
    /**
     * @var OrgOpentravelOta200305PriceRequestInformationTypeTPAExtensionsETicketableOverride
     */
    protected $eTicketableOverride;
    /**
     * @var OrgOpentravelOta200305PriceRequestInformationTypeTPAExtensionsFareAdjustment[]
     */
    protected $fareAdjustment;
    /**
     * Force fare breaks at leg points if split taxes by leg requested. By default set to true.
     *
     * @var OrgOpentravelOta200305PriceRequestInformationTypeTPAExtensionsFareBreaksAtLegs
     */
    protected $fareBreaksAtLegs;
    /**
     * Force companion fare value.
     *
     * @var OrgOpentravelOta200305PriceRequestInformationTypeTPAExtensionsForceCompanion
     */
    protected $forceCompanion;
    /**
     * This element finds only IATA fares.
     *
     * @var OrgOpentravelOta200305PriceRequestInformationTypeTPAExtensionsIATAFare
     */
    protected $iATAFare;
    /**
     * This element restricts fares which can be returned in response. If a customer passes this element, all its children should be specified.
     *
     * @var OrgOpentravelOta200305PriceRequestInformationTypeTPAExtensionsIndicators
     */
    protected $indicators;
    /**
     * This element governs how flights are returned when multiple passenger groups are requested.
     *
     * @var OrgOpentravelOta200305PriceRequestInformationTypeTPAExtensionsMultipleTravelerGroups
     */
    protected $multipleTravelerGroups;
    /**
     * @var OrgOpentravelOta200305PriceRequestInformationTypeTPAExtensionsOBFees
     */
    protected $oBFees;
    /**
     * @var OrgOpentravelOta200305PassengerPriceAdjustmentType[]
     */
    protected $passengerPriceAdjustment;
    /**
     * @var OrgOpentravelOta200305PriceRequestInformationTypeTPAExtensionsPassengerStatus
     */
    protected $passengerStatus;
    /**
     * Will return the fares available for specified point of sale and priced in this point of sale currency. Currency is overriden by PriceRequestInformation@CurrencyCode.
     *
     * @var OrgOpentravelOta200305PointOfSaleOverrideType
     */
    protected $pointOfSaleOverride;
    /**
     * @var OrgOpentravelOta200305PointOfTicketingOverrideType
     */
    protected $pointOfTicketingOverride;
    /**
     * Element by means of which user can specify fixed price of a given leg or itinerary (depending on the context) to be preserved across subsequent calls to Context Shopping. Currency of fixed amounts is assumed to be the same as the currency in which current transaction will be priced.
     *
     * @var OrgOpentravelOta200305PriceAdjustmentType
     */
    protected $priceAdjustment;
    /**
     * This element governs how flights are returned. A user can uses a priority of 1-9 to make this determination.
     *
     * @var OrgOpentravelOta200305PriceRequestInformationTypeTPAExtensionsPriority
     */
    protected $priority;
    /**
     * This element finds only private fares.
     *
     * @var OrgOpentravelOta200305PriceRequestInformationTypeTPAExtensionsPrivateFare
     */
    protected $privateFare;
    /**
     * Promotional Identifier - a string which identifies a promotion, possibly giving a discount prices etc.
     *
     * @var string
     */
    protected $promoID;
    /**
     * This element finds only public fares.
     *
     * @var OrgOpentravelOta200305PriceRequestInformationTypeTPAExtensionsPublicFare
     */
    protected $publicFare;
    /**
     * Returned fares need to match AcccountCode/CorporateID on at least one fare component.
     *
     * @var OrgOpentravelOta200305PriceRequestInformationTypeTPAExtensionsUseNegotiatedFares
     */
    protected $useNegotiatedFares;
    /**
     * At least one fare component for each passenger type must be applicable for that passenger type.
     *
     * @var OrgOpentravelOta200305PriceRequestInformationTypeTPAExtensionsUsePassengerFares
     */
    protected $usePassengerFares;
    /**
     * Use reduced constructions (simple fare paths with restrictions on the number of fare components).
     *
     * @var OrgOpentravelOta200305PriceRequestInformationTypeTPAExtensionsUseReducedConstructions
     */
    protected $useReducedConstructions;
    /**
     * @var OrgOpentravelOta200305PriceRequestInformationTypeTPAExtensionsWebFare
     */
    protected $webFare;

    /**
     * Apply resident discount in CLFE.
     *
     * @return OrgOpentravelOta200305ApplyResidentDiscountType|null
     */
    public function getApplyResidentDiscount(): ?OrgOpentravelOta200305ApplyResidentDiscountType
    {
        return $this->applyResidentDiscount;
    }

    /**
     * Apply resident discount in CLFE.
     *
     * @param OrgOpentravelOta200305ApplyResidentDiscountType|null $applyResidentDiscount
     *
     * @return self
     */
    public function setApplyResidentDiscount(?OrgOpentravelOta200305ApplyResidentDiscountType $applyResidentDiscount): self
    {
        $this->applyResidentDiscount = $applyResidentDiscount;

        return $this;
    }

    /**
     * @return OrgOpentravelOta200305PriceRequestInformationTypeTPAExtensionsBrandedFareIndicators|null
     */
    public function getBrandedFareIndicators(): ?OrgOpentravelOta200305PriceRequestInformationTypeTPAExtensionsBrandedFareIndicators
    {
        return $this->brandedFareIndicators;
    }

    /**
     * @param OrgOpentravelOta200305PriceRequestInformationTypeTPAExtensionsBrandedFareIndicators|null $brandedFareIndicators
     *
     * @return self
     */
    public function setBrandedFareIndicators(?OrgOpentravelOta200305PriceRequestInformationTypeTPAExtensionsBrandedFareIndicators $brandedFareIndicators): self
    {
        $this->brandedFareIndicators = $brandedFareIndicators;

        return $this;
    }

    /**
     * @return OrgOpentravelOta200305PriceRequestInformationTypeTPAExtensionsCurrency|null
     */
    public function getCurrency(): ?OrgOpentravelOta200305PriceRequestInformationTypeTPAExtensionsCurrency
    {
        return $this->currency;
    }

    /**
     * @param OrgOpentravelOta200305PriceRequestInformationTypeTPAExtensionsCurrency|null $currency
     *
     * @return self
     */
    public function setCurrency(?OrgOpentravelOta200305PriceRequestInformationTypeTPAExtensionsCurrency $currency): self
    {
        $this->currency = $currency;

        return $this;
    }

    /**
     * @return OrgOpentravelOta200305PriceRequestInformationTypeTPAExtensionsCustomerType|null
     */
    public function getCustomerType(): ?OrgOpentravelOta200305PriceRequestInformationTypeTPAExtensionsCustomerType
    {
        return $this->customerType;
    }

    /**
     * @param OrgOpentravelOta200305PriceRequestInformationTypeTPAExtensionsCustomerType|null $customerType
     *
     * @return self
     */
    public function setCustomerType(?OrgOpentravelOta200305PriceRequestInformationTypeTPAExtensionsCustomerType $customerType): self
    {
        $this->customerType = $customerType;

        return $this;
    }

    /**
     * @return OrgOpentravelOta200305PriceRequestInformationTypeTPAExtensionsETicketableOverride|null
     */
    public function getETicketableOverride(): ?OrgOpentravelOta200305PriceRequestInformationTypeTPAExtensionsETicketableOverride
    {
        return $this->eTicketableOverride;
    }

    /**
     * @param OrgOpentravelOta200305PriceRequestInformationTypeTPAExtensionsETicketableOverride|null $eTicketableOverride
     *
     * @return self
     */
    public function setETicketableOverride(?OrgOpentravelOta200305PriceRequestInformationTypeTPAExtensionsETicketableOverride $eTicketableOverride): self
    {
        $this->eTicketableOverride = $eTicketableOverride;

        return $this;
    }

    /**
     * @return OrgOpentravelOta200305PriceRequestInformationTypeTPAExtensionsFareAdjustment[]|null
     */
    public function getFareAdjustment(): ?array
    {
        return $this->fareAdjustment;
    }

    /**
     * @param OrgOpentravelOta200305PriceRequestInformationTypeTPAExtensionsFareAdjustment[]|null $fareAdjustment
     *
     * @return self
     */
    public function setFareAdjustment(?array $fareAdjustment): self
    {
        $this->fareAdjustment = $fareAdjustment;

        return $this;
    }

    /**
     * Force fare breaks at leg points if split taxes by leg requested. By default set to true.
     *
     * @return OrgOpentravelOta200305PriceRequestInformationTypeTPAExtensionsFareBreaksAtLegs|null
     */
    public function getFareBreaksAtLegs(): ?OrgOpentravelOta200305PriceRequestInformationTypeTPAExtensionsFareBreaksAtLegs
    {
        return $this->fareBreaksAtLegs;
    }

    /**
     * Force fare breaks at leg points if split taxes by leg requested. By default set to true.
     *
     * @param OrgOpentravelOta200305PriceRequestInformationTypeTPAExtensionsFareBreaksAtLegs|null $fareBreaksAtLegs
     *
     * @return self
     */
    public function setFareBreaksAtLegs(?OrgOpentravelOta200305PriceRequestInformationTypeTPAExtensionsFareBreaksAtLegs $fareBreaksAtLegs): self
    {
        $this->fareBreaksAtLegs = $fareBreaksAtLegs;

        return $this;
    }

    /**
     * Force companion fare value.
     *
     * @return OrgOpentravelOta200305PriceRequestInformationTypeTPAExtensionsForceCompanion|null
     */
    public function getForceCompanion(): ?OrgOpentravelOta200305PriceRequestInformationTypeTPAExtensionsForceCompanion
    {
        return $this->forceCompanion;
    }

    /**
     * Force companion fare value.
     *
     * @param OrgOpentravelOta200305PriceRequestInformationTypeTPAExtensionsForceCompanion|null $forceCompanion
     *
     * @return self
     */
    public function setForceCompanion(?OrgOpentravelOta200305PriceRequestInformationTypeTPAExtensionsForceCompanion $forceCompanion): self
    {
        $this->forceCompanion = $forceCompanion;

        return $this;
    }

    /**
     * This element finds only IATA fares.
     *
     * @return OrgOpentravelOta200305PriceRequestInformationTypeTPAExtensionsIATAFare|null
     */
    public function getIATAFare(): ?OrgOpentravelOta200305PriceRequestInformationTypeTPAExtensionsIATAFare
    {
        return $this->iATAFare;
    }

    /**
     * This element finds only IATA fares.
     *
     * @param OrgOpentravelOta200305PriceRequestInformationTypeTPAExtensionsIATAFare|null $iATAFare
     *
     * @return self
     */
    public function setIATAFare(?OrgOpentravelOta200305PriceRequestInformationTypeTPAExtensionsIATAFare $iATAFare): self
    {
        $this->iATAFare = $iATAFare;

        return $this;
    }

    /**
     * This element restricts fares which can be returned in response. If a customer passes this element, all its children should be specified.
     *
     * @return OrgOpentravelOta200305PriceRequestInformationTypeTPAExtensionsIndicators|null
     */
    public function getIndicators(): ?OrgOpentravelOta200305PriceRequestInformationTypeTPAExtensionsIndicators
    {
        return $this->indicators;
    }

    /**
     * This element restricts fares which can be returned in response. If a customer passes this element, all its children should be specified.
     *
     * @param OrgOpentravelOta200305PriceRequestInformationTypeTPAExtensionsIndicators|null $indicators
     *
     * @return self
     */
    public function setIndicators(?OrgOpentravelOta200305PriceRequestInformationTypeTPAExtensionsIndicators $indicators): self
    {
        $this->indicators = $indicators;

        return $this;
    }

    /**
     * This element governs how flights are returned when multiple passenger groups are requested.
     *
     * @return OrgOpentravelOta200305PriceRequestInformationTypeTPAExtensionsMultipleTravelerGroups|null
     */
    public function getMultipleTravelerGroups(): ?OrgOpentravelOta200305PriceRequestInformationTypeTPAExtensionsMultipleTravelerGroups
    {
        return $this->multipleTravelerGroups;
    }

    /**
     * This element governs how flights are returned when multiple passenger groups are requested.
     *
     * @param OrgOpentravelOta200305PriceRequestInformationTypeTPAExtensionsMultipleTravelerGroups|null $multipleTravelerGroups
     *
     * @return self
     */
    public function setMultipleTravelerGroups(?OrgOpentravelOta200305PriceRequestInformationTypeTPAExtensionsMultipleTravelerGroups $multipleTravelerGroups): self
    {
        $this->multipleTravelerGroups = $multipleTravelerGroups;

        return $this;
    }

    /**
     * @return OrgOpentravelOta200305PriceRequestInformationTypeTPAExtensionsOBFees|null
     */
    public function getOBFees(): ?OrgOpentravelOta200305PriceRequestInformationTypeTPAExtensionsOBFees
    {
        return $this->oBFees;
    }

    /**
     * @param OrgOpentravelOta200305PriceRequestInformationTypeTPAExtensionsOBFees|null $oBFees
     *
     * @return self
     */
    public function setOBFees(?OrgOpentravelOta200305PriceRequestInformationTypeTPAExtensionsOBFees $oBFees): self
    {
        $this->oBFees = $oBFees;

        return $this;
    }

    /**
     * @return OrgOpentravelOta200305PassengerPriceAdjustmentType[]|null
     */
    public function getPassengerPriceAdjustment(): ?array
    {
        return $this->passengerPriceAdjustment;
    }

    /**
     * @param OrgOpentravelOta200305PassengerPriceAdjustmentType[]|null $passengerPriceAdjustment
     *
     * @return self
     */
    public function setPassengerPriceAdjustment(?array $passengerPriceAdjustment): self
    {
        $this->passengerPriceAdjustment = $passengerPriceAdjustment;

        return $this;
    }

    /**
     * @return OrgOpentravelOta200305PriceRequestInformationTypeTPAExtensionsPassengerStatus|null
     */
    public function getPassengerStatus(): ?OrgOpentravelOta200305PriceRequestInformationTypeTPAExtensionsPassengerStatus
    {
        return $this->passengerStatus;
    }

    /**
     * @param OrgOpentravelOta200305PriceRequestInformationTypeTPAExtensionsPassengerStatus|null $passengerStatus
     *
     * @return self
     */
    public function setPassengerStatus(?OrgOpentravelOta200305PriceRequestInformationTypeTPAExtensionsPassengerStatus $passengerStatus): self
    {
        $this->passengerStatus = $passengerStatus;

        return $this;
    }

    /**
     * Will return the fares available for specified point of sale and priced in this point of sale currency. Currency is overriden by PriceRequestInformation@CurrencyCode.
     *
     * @return OrgOpentravelOta200305PointOfSaleOverrideType|null
     */
    public function getPointOfSaleOverride(): ?OrgOpentravelOta200305PointOfSaleOverrideType
    {
        return $this->pointOfSaleOverride;
    }

    /**
     * Will return the fares available for specified point of sale and priced in this point of sale currency. Currency is overriden by PriceRequestInformation@CurrencyCode.
     *
     * @param OrgOpentravelOta200305PointOfSaleOverrideType|null $pointOfSaleOverride
     *
     * @return self
     */
    public function setPointOfSaleOverride(?OrgOpentravelOta200305PointOfSaleOverrideType $pointOfSaleOverride): self
    {
        $this->pointOfSaleOverride = $pointOfSaleOverride;

        return $this;
    }

    /**
     * @return OrgOpentravelOta200305PointOfTicketingOverrideType|null
     */
    public function getPointOfTicketingOverride(): ?OrgOpentravelOta200305PointOfTicketingOverrideType
    {
        return $this->pointOfTicketingOverride;
    }

    /**
     * @param OrgOpentravelOta200305PointOfTicketingOverrideType|null $pointOfTicketingOverride
     *
     * @return self
     */
    public function setPointOfTicketingOverride(?OrgOpentravelOta200305PointOfTicketingOverrideType $pointOfTicketingOverride): self
    {
        $this->pointOfTicketingOverride = $pointOfTicketingOverride;

        return $this;
    }

    /**
     * Element by means of which user can specify fixed price of a given leg or itinerary (depending on the context) to be preserved across subsequent calls to Context Shopping. Currency of fixed amounts is assumed to be the same as the currency in which current transaction will be priced.
     *
     * @return OrgOpentravelOta200305PriceAdjustmentType|null
     */
    public function getPriceAdjustment(): ?OrgOpentravelOta200305PriceAdjustmentType
    {
        return $this->priceAdjustment;
    }

    /**
     * Element by means of which user can specify fixed price of a given leg or itinerary (depending on the context) to be preserved across subsequent calls to Context Shopping. Currency of fixed amounts is assumed to be the same as the currency in which current transaction will be priced.
     *
     * @param OrgOpentravelOta200305PriceAdjustmentType|null $priceAdjustment
     *
     * @return self
     */
    public function setPriceAdjustment(?OrgOpentravelOta200305PriceAdjustmentType $priceAdjustment): self
    {
        $this->priceAdjustment = $priceAdjustment;

        return $this;
    }

    /**
     * This element governs how flights are returned. A user can uses a priority of 1-9 to make this determination.
     *
     * @return OrgOpentravelOta200305PriceRequestInformationTypeTPAExtensionsPriority|null
     */
    public function getPriority(): ?OrgOpentravelOta200305PriceRequestInformationTypeTPAExtensionsPriority
    {
        return $this->priority;
    }

    /**
     * This element governs how flights are returned. A user can uses a priority of 1-9 to make this determination.
     *
     * @param OrgOpentravelOta200305PriceRequestInformationTypeTPAExtensionsPriority|null $priority
     *
     * @return self
     */
    public function setPriority(?OrgOpentravelOta200305PriceRequestInformationTypeTPAExtensionsPriority $priority): self
    {
        $this->priority = $priority;

        return $this;
    }

    /**
     * This element finds only private fares.
     *
     * @return OrgOpentravelOta200305PriceRequestInformationTypeTPAExtensionsPrivateFare|null
     */
    public function getPrivateFare(): ?OrgOpentravelOta200305PriceRequestInformationTypeTPAExtensionsPrivateFare
    {
        return $this->privateFare;
    }

    /**
     * This element finds only private fares.
     *
     * @param OrgOpentravelOta200305PriceRequestInformationTypeTPAExtensionsPrivateFare|null $privateFare
     *
     * @return self
     */
    public function setPrivateFare(?OrgOpentravelOta200305PriceRequestInformationTypeTPAExtensionsPrivateFare $privateFare): self
    {
        $this->privateFare = $privateFare;

        return $this;
    }

    /**
     * Promotional Identifier - a string which identifies a promotion, possibly giving a discount prices etc.
     *
     * @return string|null
     */
    public function getPromoID(): ?string
    {
        return $this->promoID;
    }

    /**
     * Promotional Identifier - a string which identifies a promotion, possibly giving a discount prices etc.
     *
     * @param string|null $promoID
     *
     * @return self
     */
    public function setPromoID(?string $promoID): self
    {
        $this->promoID = $promoID;

        return $this;
    }

    /**
     * This element finds only public fares.
     *
     * @return OrgOpentravelOta200305PriceRequestInformationTypeTPAExtensionsPublicFare|null
     */
    public function getPublicFare(): ?OrgOpentravelOta200305PriceRequestInformationTypeTPAExtensionsPublicFare
    {
        return $this->publicFare;
    }

    /**
     * This element finds only public fares.
     *
     * @param OrgOpentravelOta200305PriceRequestInformationTypeTPAExtensionsPublicFare|null $publicFare
     *
     * @return self
     */
    public function setPublicFare(?OrgOpentravelOta200305PriceRequestInformationTypeTPAExtensionsPublicFare $publicFare): self
    {
        $this->publicFare = $publicFare;

        return $this;
    }

    /**
     * Returned fares need to match AcccountCode/CorporateID on at least one fare component.
     *
     * @return OrgOpentravelOta200305PriceRequestInformationTypeTPAExtensionsUseNegotiatedFares|null
     */
    public function getUseNegotiatedFares(): ?OrgOpentravelOta200305PriceRequestInformationTypeTPAExtensionsUseNegotiatedFares
    {
        return $this->useNegotiatedFares;
    }

    /**
     * Returned fares need to match AcccountCode/CorporateID on at least one fare component.
     *
     * @param OrgOpentravelOta200305PriceRequestInformationTypeTPAExtensionsUseNegotiatedFares|null $useNegotiatedFares
     *
     * @return self
     */
    public function setUseNegotiatedFares(?OrgOpentravelOta200305PriceRequestInformationTypeTPAExtensionsUseNegotiatedFares $useNegotiatedFares): self
    {
        $this->useNegotiatedFares = $useNegotiatedFares;

        return $this;
    }

    /**
     * At least one fare component for each passenger type must be applicable for that passenger type.
     *
     * @return OrgOpentravelOta200305PriceRequestInformationTypeTPAExtensionsUsePassengerFares|null
     */
    public function getUsePassengerFares(): ?OrgOpentravelOta200305PriceRequestInformationTypeTPAExtensionsUsePassengerFares
    {
        return $this->usePassengerFares;
    }

    /**
     * At least one fare component for each passenger type must be applicable for that passenger type.
     *
     * @param OrgOpentravelOta200305PriceRequestInformationTypeTPAExtensionsUsePassengerFares|null $usePassengerFares
     *
     * @return self
     */
    public function setUsePassengerFares(?OrgOpentravelOta200305PriceRequestInformationTypeTPAExtensionsUsePassengerFares $usePassengerFares): self
    {
        $this->usePassengerFares = $usePassengerFares;

        return $this;
    }

    /**
     * Use reduced constructions (simple fare paths with restrictions on the number of fare components).
     *
     * @return OrgOpentravelOta200305PriceRequestInformationTypeTPAExtensionsUseReducedConstructions|null
     */
    public function getUseReducedConstructions(): ?OrgOpentravelOta200305PriceRequestInformationTypeTPAExtensionsUseReducedConstructions
    {
        return $this->useReducedConstructions;
    }

    /**
     * Use reduced constructions (simple fare paths with restrictions on the number of fare components).
     *
     * @param OrgOpentravelOta200305PriceRequestInformationTypeTPAExtensionsUseReducedConstructions|null $useReducedConstructions
     *
     * @return self
     */
    public function setUseReducedConstructions(?OrgOpentravelOta200305PriceRequestInformationTypeTPAExtensionsUseReducedConstructions $useReducedConstructions): self
    {
        $this->useReducedConstructions = $useReducedConstructions;

        return $this;
    }

    /**
     * @return OrgOpentravelOta200305PriceRequestInformationTypeTPAExtensionsWebFare|null
     */
    public function getWebFare(): ?OrgOpentravelOta200305PriceRequestInformationTypeTPAExtensionsWebFare
    {
        return $this->webFare;
    }

    /**
     * @param OrgOpentravelOta200305PriceRequestInformationTypeTPAExtensionsWebFare|null $webFare
     *
     * @return self
     */
    public function setWebFare(?OrgOpentravelOta200305PriceRequestInformationTypeTPAExtensionsWebFare $webFare): self
    {
        $this->webFare = $webFare;

        return $this;
    }
}
