<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Ammonkc\SabreApi\Model\CreatePassengerNameRecord;

use Ammonkc\SabreApi\AbstractModel;

class CreatePassengerNameRecordRequestCreatePassengerNameRecordRQAirPriceItemPriceRequestInformationOptionalQualifiersPricingQualifiersOverrides extends AbstractModel
{
    /**
     * Used to instruct the system to override applicable fuel surcharges.
     *
     * @var CreatePassengerNameRecordRequestCreatePassengerNameRecordRQAirPriceItemPriceRequestInformationOptionalQualifiersPricingQualifiersOverridesFuelSurchargeOverride
     */
    protected $fuelSurchargeOverride;
    /**
     * Used to instruct the system to override the governing carrier associated with the entire itinerary, a particular segment, or a range of segments.
     *
     * @var CreatePassengerNameRecordRequestCreatePassengerNameRecordRQAirPriceItemPriceRequestInformationOptionalQualifiersPricingQualifiersOverridesGoverningCarrierOverrideItem[]
     */
    protected $governingCarrierOverride;
    /**
     * Used to instruct the system to price the itinerary with fares having no advance purchase requirements.
     * Cannot be combined with 'NoFareRestrictions'.
     *
     * @var CreatePassengerNameRecordRequestCreatePassengerNameRecordRQAirPriceItemPriceRequestInformationOptionalQualifiersPricingQualifiersOverridesNoAdvancePurchase
     */
    protected $noAdvancePurchase;
    /**
     * Used to instruct the system to price the itinerary with fares having no restrictions.
     * cannot be combined with 'NoAdvancePurchase', 'NoMinMaxStay', or 'NoPenalty'.
     *
     * @var CreatePassengerNameRecordRequestCreatePassengerNameRecordRQAirPriceItemPriceRequestInformationOptionalQualifiersPricingQualifiersOverridesNoFareRestrictions
     */
    protected $noFareRestrictions;
    /**
     * Used to instruct the system to price the itinerary with fares having no minimum/maximum stay requirements.
     * Cannot be combined with 'NoFareRestrictions'.
     *
     * @var CreatePassengerNameRecordRequestCreatePassengerNameRecordRQAirPriceItemPriceRequestInformationOptionalQualifiersPricingQualifiersOverridesNoMinMaxStay
     */
    protected $noMinMaxStay;
    /**
     * Used to instruct the system to price the itinerary with fares having no penalties.
     * Cannot be combined with 'NoFareRestrictions'
     *
     * @var CreatePassengerNameRecordRequestCreatePassengerNameRecordRQAirPriceItemPriceRequestInformationOptionalQualifiersPricingQualifiersOverridesNoPenalty
     */
    protected $noPenalty;
    /**
     * Used to instruct the system to override the default POS location, and price the itinerary as if the default POS location were located in the alternate, specified location.
     *
     * @var CreatePassengerNameRecordRequestCreatePassengerNameRecordRQAirPriceItemPriceRequestInformationOptionalQualifiersPricingQualifiersOverridesPurchase
     */
    protected $purchase;
    /**
     * Used to instruct the system to override the default ticketing location, and price the itinerary as if the default ticketing location were located in the alternate, specified location.
     *
     * @var CreatePassengerNameRecordRequestCreatePassengerNameRecordRQAirPriceItemPriceRequestInformationOptionalQualifiersPricingQualifiersOverridesTicketing
     */
    protected $ticketing;

    /**
     * Used to instruct the system to override applicable fuel surcharges.
     *
     * @return CreatePassengerNameRecordRequestCreatePassengerNameRecordRQAirPriceItemPriceRequestInformationOptionalQualifiersPricingQualifiersOverridesFuelSurchargeOverride
     */
    public function getFuelSurchargeOverride(): CreatePassengerNameRecordRequestCreatePassengerNameRecordRQAirPriceItemPriceRequestInformationOptionalQualifiersPricingQualifiersOverridesFuelSurchargeOverride
    {
        return $this->fuelSurchargeOverride;
    }

    /**
     * Used to instruct the system to override applicable fuel surcharges.
     *
     * @param CreatePassengerNameRecordRequestCreatePassengerNameRecordRQAirPriceItemPriceRequestInformationOptionalQualifiersPricingQualifiersOverridesFuelSurchargeOverride $fuelSurchargeOverride
     *
     * @return self
     */
    public function setFuelSurchargeOverride(CreatePassengerNameRecordRequestCreatePassengerNameRecordRQAirPriceItemPriceRequestInformationOptionalQualifiersPricingQualifiersOverridesFuelSurchargeOverride $fuelSurchargeOverride): self
    {
        $this->fuelSurchargeOverride = $fuelSurchargeOverride;

        return $this;
    }

    /**
     * Used to instruct the system to override the governing carrier associated with the entire itinerary, a particular segment, or a range of segments.
     *
     * @return CreatePassengerNameRecordRequestCreatePassengerNameRecordRQAirPriceItemPriceRequestInformationOptionalQualifiersPricingQualifiersOverridesGoverningCarrierOverrideItem[]
     */
    public function getGoverningCarrierOverride(): array
    {
        return $this->governingCarrierOverride;
    }

    /**
     * Used to instruct the system to override the governing carrier associated with the entire itinerary, a particular segment, or a range of segments.
     *
     * @param CreatePassengerNameRecordRequestCreatePassengerNameRecordRQAirPriceItemPriceRequestInformationOptionalQualifiersPricingQualifiersOverridesGoverningCarrierOverrideItem[] $governingCarrierOverride
     *
     * @return self
     */
    public function setGoverningCarrierOverride(array $governingCarrierOverride): self
    {
        $this->governingCarrierOverride = $governingCarrierOverride;

        return $this;
    }

    /**
     * Used to instruct the system to price the itinerary with fares having no advance purchase requirements.
     * Cannot be combined with 'NoFareRestrictions'.
     *
     * @return CreatePassengerNameRecordRequestCreatePassengerNameRecordRQAirPriceItemPriceRequestInformationOptionalQualifiersPricingQualifiersOverridesNoAdvancePurchase
     */
    public function getNoAdvancePurchase(): CreatePassengerNameRecordRequestCreatePassengerNameRecordRQAirPriceItemPriceRequestInformationOptionalQualifiersPricingQualifiersOverridesNoAdvancePurchase
    {
        return $this->noAdvancePurchase;
    }

    /**
     * Used to instruct the system to price the itinerary with fares having no advance purchase requirements.
     * Cannot be combined with 'NoFareRestrictions'.
     *
     * @param CreatePassengerNameRecordRequestCreatePassengerNameRecordRQAirPriceItemPriceRequestInformationOptionalQualifiersPricingQualifiersOverridesNoAdvancePurchase $noAdvancePurchase
     *
     * @return self
     */
    public function setNoAdvancePurchase(CreatePassengerNameRecordRequestCreatePassengerNameRecordRQAirPriceItemPriceRequestInformationOptionalQualifiersPricingQualifiersOverridesNoAdvancePurchase $noAdvancePurchase): self
    {
        $this->noAdvancePurchase = $noAdvancePurchase;

        return $this;
    }

    /**
     * Used to instruct the system to price the itinerary with fares having no restrictions.
     * cannot be combined with 'NoAdvancePurchase', 'NoMinMaxStay', or 'NoPenalty'.
     *
     * @return CreatePassengerNameRecordRequestCreatePassengerNameRecordRQAirPriceItemPriceRequestInformationOptionalQualifiersPricingQualifiersOverridesNoFareRestrictions
     */
    public function getNoFareRestrictions(): CreatePassengerNameRecordRequestCreatePassengerNameRecordRQAirPriceItemPriceRequestInformationOptionalQualifiersPricingQualifiersOverridesNoFareRestrictions
    {
        return $this->noFareRestrictions;
    }

    /**
     * Used to instruct the system to price the itinerary with fares having no restrictions.
     * cannot be combined with 'NoAdvancePurchase', 'NoMinMaxStay', or 'NoPenalty'.
     *
     * @param CreatePassengerNameRecordRequestCreatePassengerNameRecordRQAirPriceItemPriceRequestInformationOptionalQualifiersPricingQualifiersOverridesNoFareRestrictions $noFareRestrictions
     *
     * @return self
     */
    public function setNoFareRestrictions(CreatePassengerNameRecordRequestCreatePassengerNameRecordRQAirPriceItemPriceRequestInformationOptionalQualifiersPricingQualifiersOverridesNoFareRestrictions $noFareRestrictions): self
    {
        $this->noFareRestrictions = $noFareRestrictions;

        return $this;
    }

    /**
     * Used to instruct the system to price the itinerary with fares having no minimum/maximum stay requirements.
     * Cannot be combined with 'NoFareRestrictions'.
     *
     * @return CreatePassengerNameRecordRequestCreatePassengerNameRecordRQAirPriceItemPriceRequestInformationOptionalQualifiersPricingQualifiersOverridesNoMinMaxStay
     */
    public function getNoMinMaxStay(): CreatePassengerNameRecordRequestCreatePassengerNameRecordRQAirPriceItemPriceRequestInformationOptionalQualifiersPricingQualifiersOverridesNoMinMaxStay
    {
        return $this->noMinMaxStay;
    }

    /**
     * Used to instruct the system to price the itinerary with fares having no minimum/maximum stay requirements.
     * Cannot be combined with 'NoFareRestrictions'.
     *
     * @param CreatePassengerNameRecordRequestCreatePassengerNameRecordRQAirPriceItemPriceRequestInformationOptionalQualifiersPricingQualifiersOverridesNoMinMaxStay $noMinMaxStay
     *
     * @return self
     */
    public function setNoMinMaxStay(CreatePassengerNameRecordRequestCreatePassengerNameRecordRQAirPriceItemPriceRequestInformationOptionalQualifiersPricingQualifiersOverridesNoMinMaxStay $noMinMaxStay): self
    {
        $this->noMinMaxStay = $noMinMaxStay;

        return $this;
    }

    /**
     * Used to instruct the system to price the itinerary with fares having no penalties.
     * Cannot be combined with 'NoFareRestrictions'
     *
     * @return CreatePassengerNameRecordRequestCreatePassengerNameRecordRQAirPriceItemPriceRequestInformationOptionalQualifiersPricingQualifiersOverridesNoPenalty
     */
    public function getNoPenalty(): CreatePassengerNameRecordRequestCreatePassengerNameRecordRQAirPriceItemPriceRequestInformationOptionalQualifiersPricingQualifiersOverridesNoPenalty
    {
        return $this->noPenalty;
    }

    /**
     * Used to instruct the system to price the itinerary with fares having no penalties.
     * Cannot be combined with 'NoFareRestrictions'
     *
     * @param CreatePassengerNameRecordRequestCreatePassengerNameRecordRQAirPriceItemPriceRequestInformationOptionalQualifiersPricingQualifiersOverridesNoPenalty $noPenalty
     *
     * @return self
     */
    public function setNoPenalty(CreatePassengerNameRecordRequestCreatePassengerNameRecordRQAirPriceItemPriceRequestInformationOptionalQualifiersPricingQualifiersOverridesNoPenalty $noPenalty): self
    {
        $this->noPenalty = $noPenalty;

        return $this;
    }

    /**
     * Used to instruct the system to override the default POS location, and price the itinerary as if the default POS location were located in the alternate, specified location.
     *
     * @return CreatePassengerNameRecordRequestCreatePassengerNameRecordRQAirPriceItemPriceRequestInformationOptionalQualifiersPricingQualifiersOverridesPurchase
     */
    public function getPurchase(): CreatePassengerNameRecordRequestCreatePassengerNameRecordRQAirPriceItemPriceRequestInformationOptionalQualifiersPricingQualifiersOverridesPurchase
    {
        return $this->purchase;
    }

    /**
     * Used to instruct the system to override the default POS location, and price the itinerary as if the default POS location were located in the alternate, specified location.
     *
     * @param CreatePassengerNameRecordRequestCreatePassengerNameRecordRQAirPriceItemPriceRequestInformationOptionalQualifiersPricingQualifiersOverridesPurchase $purchase
     *
     * @return self
     */
    public function setPurchase(CreatePassengerNameRecordRequestCreatePassengerNameRecordRQAirPriceItemPriceRequestInformationOptionalQualifiersPricingQualifiersOverridesPurchase $purchase): self
    {
        $this->purchase = $purchase;

        return $this;
    }

    /**
     * Used to instruct the system to override the default ticketing location, and price the itinerary as if the default ticketing location were located in the alternate, specified location.
     *
     * @return CreatePassengerNameRecordRequestCreatePassengerNameRecordRQAirPriceItemPriceRequestInformationOptionalQualifiersPricingQualifiersOverridesTicketing
     */
    public function getTicketing(): CreatePassengerNameRecordRequestCreatePassengerNameRecordRQAirPriceItemPriceRequestInformationOptionalQualifiersPricingQualifiersOverridesTicketing
    {
        return $this->ticketing;
    }

    /**
     * Used to instruct the system to override the default ticketing location, and price the itinerary as if the default ticketing location were located in the alternate, specified location.
     *
     * @param CreatePassengerNameRecordRequestCreatePassengerNameRecordRQAirPriceItemPriceRequestInformationOptionalQualifiersPricingQualifiersOverridesTicketing $ticketing
     *
     * @return self
     */
    public function setTicketing(CreatePassengerNameRecordRequestCreatePassengerNameRecordRQAirPriceItemPriceRequestInformationOptionalQualifiersPricingQualifiersOverridesTicketing $ticketing): self
    {
        $this->ticketing = $ticketing;

        return $this;
    }
}
