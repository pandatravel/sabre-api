<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Ammonkc\SabreApi\Model\CreatePassengerNameRecord;

use Ammonkc\SabreApi\AbstractModel;

class CreatePassengerNameRecordResponseCreatePassengerNameRecordRSAirPriceItemPriceQuotePricedItineraryAirItineraryPricingInfoItem extends AbstractModel
{
    /**
     * Used to pass details related to agency managed commission.
     *
     * @var CreatePassengerNameRecordResponseCreatePassengerNameRecordRSAirPriceItemPriceQuotePricedItineraryAirItineraryPricingInfoItemAgencyCommissionItem[]
     */
    protected $agencyCommission;
    /**
     * Used to pass details related to ancillary fees.
     *
     * @var CreatePassengerNameRecordResponseCreatePassengerNameRecordRSAirPriceItemPriceQuotePricedItineraryAirItineraryPricingInfoItemAncillaryFeesItem[]
     */
    protected $ancillaryFees;
    /**
     * Baggage provisions information.
     *
     * @var CreatePassengerNameRecordResponseCreatePassengerNameRecordRSAirPriceItemPriceQuotePricedItineraryAirItineraryPricingInfoItemBaggageProvisionsItem[]
     */
    protected $baggageProvisions;
    /**
     * Generic fare calculation.
     *
     * @var CreatePassengerNameRecordResponseCreatePassengerNameRecordRSAirPriceItemPriceQuotePricedItineraryAirItineraryPricingInfoItemFareCalculation
     */
    protected $fareCalculation;
    /**
     * fare calculation breakdown.
     *
     * @var CreatePassengerNameRecordResponseCreatePassengerNameRecordRSAirPriceItemPriceQuotePricedItineraryAirItineraryPricingInfoItemFareCalculationBreakdownItem[]
     */
    protected $fareCalculationBreakdown;
    /**
     * Total itinerary pricing.
     *
     * @var CreatePassengerNameRecordResponseCreatePassengerNameRecordRSAirPriceItemPriceQuotePricedItineraryAirItineraryPricingInfoItemItinTotalFare
     */
    protected $itinTotalFare;
    /**
     * Passenger type information.
     *
     * @var CreatePassengerNameRecordResponseCreatePassengerNameRecordRSAirPriceItemPriceQuotePricedItineraryAirItineraryPricingInfoItemPassengerTypeQuantity
     */
    protected $passengerTypeQuantity;
    /**
     * Pricing details broken down by passenger type code (PTC).
     *
     * @var CreatePassengerNameRecordResponseCreatePassengerNameRecordRSAirPriceItemPriceQuotePricedItineraryAirItineraryPricingInfoItemPTCFareBreakdownItem[]
     */
    protected $pTCFareBreakdown;
    /**
     * Rule Retailer Codes.
     *
     * @var CreatePassengerNameRecordResponseCreatePassengerNameRecordRSAirPriceItemPriceQuotePricedItineraryAirItineraryPricingInfoItemRetailerRulesItem[]
     */
    protected $retailerRules;
    /**
     * Information on specific change or cancellation penalties for an itinerary.
     *
     * @var CreatePassengerNameRecordResponseCreatePassengerNameRecordRSAirPriceItemPriceQuotePricedItineraryAirItineraryPricingInfoItemSpecificPenaltyItem[]
     */
    protected $specificPenalty;
    /**
     * Ticketing fee related information.
     *
     * @var CreatePassengerNameRecordResponseCreatePassengerNameRecordRSAirPriceItemPriceQuotePricedItineraryAirItineraryPricingInfoItemTicketingFeesItem[]
     */
    protected $ticketingFees;
    /**
     * Used to associate a particular set of pricing-related information to a particular pricing option.
     *
     * @var string
     */
    protected $solutionSequenceNmbr;

    /**
     * Used to pass details related to agency managed commission.
     *
     * @return CreatePassengerNameRecordResponseCreatePassengerNameRecordRSAirPriceItemPriceQuotePricedItineraryAirItineraryPricingInfoItemAgencyCommissionItem[]
     */
    public function getAgencyCommission(): ?array
    {
        return $this->agencyCommission;
    }

    /**
     * Used to pass details related to agency managed commission.
     *
     * @param CreatePassengerNameRecordResponseCreatePassengerNameRecordRSAirPriceItemPriceQuotePricedItineraryAirItineraryPricingInfoItemAgencyCommissionItem[] $agencyCommission
     *
     * @return self
     */
    public function setAgencyCommission(?array $agencyCommission): self
    {
        $this->agencyCommission = $agencyCommission;

        return $this;
    }

    /**
     * Used to pass details related to ancillary fees.
     *
     * @return CreatePassengerNameRecordResponseCreatePassengerNameRecordRSAirPriceItemPriceQuotePricedItineraryAirItineraryPricingInfoItemAncillaryFeesItem[]
     */
    public function getAncillaryFees(): ?array
    {
        return $this->ancillaryFees;
    }

    /**
     * Used to pass details related to ancillary fees.
     *
     * @param CreatePassengerNameRecordResponseCreatePassengerNameRecordRSAirPriceItemPriceQuotePricedItineraryAirItineraryPricingInfoItemAncillaryFeesItem[] $ancillaryFees
     *
     * @return self
     */
    public function setAncillaryFees(?array $ancillaryFees): self
    {
        $this->ancillaryFees = $ancillaryFees;

        return $this;
    }

    /**
     * Baggage provisions information.
     *
     * @return CreatePassengerNameRecordResponseCreatePassengerNameRecordRSAirPriceItemPriceQuotePricedItineraryAirItineraryPricingInfoItemBaggageProvisionsItem[]
     */
    public function getBaggageProvisions(): ?array
    {
        return $this->baggageProvisions;
    }

    /**
     * Baggage provisions information.
     *
     * @param CreatePassengerNameRecordResponseCreatePassengerNameRecordRSAirPriceItemPriceQuotePricedItineraryAirItineraryPricingInfoItemBaggageProvisionsItem[] $baggageProvisions
     *
     * @return self
     */
    public function setBaggageProvisions(?array $baggageProvisions): self
    {
        $this->baggageProvisions = $baggageProvisions;

        return $this;
    }

    /**
     * Generic fare calculation.
     *
     * @return CreatePassengerNameRecordResponseCreatePassengerNameRecordRSAirPriceItemPriceQuotePricedItineraryAirItineraryPricingInfoItemFareCalculation
     */
    public function getFareCalculation(): ?CreatePassengerNameRecordResponseCreatePassengerNameRecordRSAirPriceItemPriceQuotePricedItineraryAirItineraryPricingInfoItemFareCalculation
    {
        return $this->fareCalculation;
    }

    /**
     * Generic fare calculation.
     *
     * @param CreatePassengerNameRecordResponseCreatePassengerNameRecordRSAirPriceItemPriceQuotePricedItineraryAirItineraryPricingInfoItemFareCalculation $fareCalculation
     *
     * @return self
     */
    public function setFareCalculation(?CreatePassengerNameRecordResponseCreatePassengerNameRecordRSAirPriceItemPriceQuotePricedItineraryAirItineraryPricingInfoItemFareCalculation $fareCalculation): self
    {
        $this->fareCalculation = $fareCalculation;

        return $this;
    }

    /**
     * fare calculation breakdown.
     *
     * @return CreatePassengerNameRecordResponseCreatePassengerNameRecordRSAirPriceItemPriceQuotePricedItineraryAirItineraryPricingInfoItemFareCalculationBreakdownItem[]
     */
    public function getFareCalculationBreakdown(): ?array
    {
        return $this->fareCalculationBreakdown;
    }

    /**
     * fare calculation breakdown.
     *
     * @param CreatePassengerNameRecordResponseCreatePassengerNameRecordRSAirPriceItemPriceQuotePricedItineraryAirItineraryPricingInfoItemFareCalculationBreakdownItem[] $fareCalculationBreakdown
     *
     * @return self
     */
    public function setFareCalculationBreakdown(?array $fareCalculationBreakdown): self
    {
        $this->fareCalculationBreakdown = $fareCalculationBreakdown;

        return $this;
    }

    /**
     * Total itinerary pricing.
     *
     * @return CreatePassengerNameRecordResponseCreatePassengerNameRecordRSAirPriceItemPriceQuotePricedItineraryAirItineraryPricingInfoItemItinTotalFare
     */
    public function getItinTotalFare(): ?CreatePassengerNameRecordResponseCreatePassengerNameRecordRSAirPriceItemPriceQuotePricedItineraryAirItineraryPricingInfoItemItinTotalFare
    {
        return $this->itinTotalFare;
    }

    /**
     * Total itinerary pricing.
     *
     * @param CreatePassengerNameRecordResponseCreatePassengerNameRecordRSAirPriceItemPriceQuotePricedItineraryAirItineraryPricingInfoItemItinTotalFare $itinTotalFare
     *
     * @return self
     */
    public function setItinTotalFare(?CreatePassengerNameRecordResponseCreatePassengerNameRecordRSAirPriceItemPriceQuotePricedItineraryAirItineraryPricingInfoItemItinTotalFare $itinTotalFare): self
    {
        $this->itinTotalFare = $itinTotalFare;

        return $this;
    }

    /**
     * Passenger type information.
     *
     * @return CreatePassengerNameRecordResponseCreatePassengerNameRecordRSAirPriceItemPriceQuotePricedItineraryAirItineraryPricingInfoItemPassengerTypeQuantity
     */
    public function getPassengerTypeQuantity(): ?CreatePassengerNameRecordResponseCreatePassengerNameRecordRSAirPriceItemPriceQuotePricedItineraryAirItineraryPricingInfoItemPassengerTypeQuantity
    {
        return $this->passengerTypeQuantity;
    }

    /**
     * Passenger type information.
     *
     * @param CreatePassengerNameRecordResponseCreatePassengerNameRecordRSAirPriceItemPriceQuotePricedItineraryAirItineraryPricingInfoItemPassengerTypeQuantity $passengerTypeQuantity
     *
     * @return self
     */
    public function setPassengerTypeQuantity(?CreatePassengerNameRecordResponseCreatePassengerNameRecordRSAirPriceItemPriceQuotePricedItineraryAirItineraryPricingInfoItemPassengerTypeQuantity $passengerTypeQuantity): self
    {
        $this->passengerTypeQuantity = $passengerTypeQuantity;

        return $this;
    }

    /**
     * Pricing details broken down by passenger type code (PTC).
     *
     * @return CreatePassengerNameRecordResponseCreatePassengerNameRecordRSAirPriceItemPriceQuotePricedItineraryAirItineraryPricingInfoItemPTCFareBreakdownItem[]
     */
    public function getPTCFareBreakdown(): ?array
    {
        return $this->pTCFareBreakdown;
    }

    /**
     * Pricing details broken down by passenger type code (PTC).
     *
     * @param CreatePassengerNameRecordResponseCreatePassengerNameRecordRSAirPriceItemPriceQuotePricedItineraryAirItineraryPricingInfoItemPTCFareBreakdownItem[] $pTCFareBreakdown
     *
     * @return self
     */
    public function setPTCFareBreakdown(?array $pTCFareBreakdown): self
    {
        $this->pTCFareBreakdown = $pTCFareBreakdown;

        return $this;
    }

    /**
     * Rule Retailer Codes.
     *
     * @return CreatePassengerNameRecordResponseCreatePassengerNameRecordRSAirPriceItemPriceQuotePricedItineraryAirItineraryPricingInfoItemRetailerRulesItem[]
     */
    public function getRetailerRules(): ?array
    {
        return $this->retailerRules;
    }

    /**
     * Rule Retailer Codes.
     *
     * @param CreatePassengerNameRecordResponseCreatePassengerNameRecordRSAirPriceItemPriceQuotePricedItineraryAirItineraryPricingInfoItemRetailerRulesItem[] $retailerRules
     *
     * @return self
     */
    public function setRetailerRules(?array $retailerRules): self
    {
        $this->retailerRules = $retailerRules;

        return $this;
    }

    /**
     * Information on specific change or cancellation penalties for an itinerary.
     *
     * @return CreatePassengerNameRecordResponseCreatePassengerNameRecordRSAirPriceItemPriceQuotePricedItineraryAirItineraryPricingInfoItemSpecificPenaltyItem[]
     */
    public function getSpecificPenalty(): ?array
    {
        return $this->specificPenalty;
    }

    /**
     * Information on specific change or cancellation penalties for an itinerary.
     *
     * @param CreatePassengerNameRecordResponseCreatePassengerNameRecordRSAirPriceItemPriceQuotePricedItineraryAirItineraryPricingInfoItemSpecificPenaltyItem[] $specificPenalty
     *
     * @return self
     */
    public function setSpecificPenalty(?array $specificPenalty): self
    {
        $this->specificPenalty = $specificPenalty;

        return $this;
    }

    /**
     * Ticketing fee related information.
     *
     * @return CreatePassengerNameRecordResponseCreatePassengerNameRecordRSAirPriceItemPriceQuotePricedItineraryAirItineraryPricingInfoItemTicketingFeesItem[]
     */
    public function getTicketingFees(): ?array
    {
        return $this->ticketingFees;
    }

    /**
     * Ticketing fee related information.
     *
     * @param CreatePassengerNameRecordResponseCreatePassengerNameRecordRSAirPriceItemPriceQuotePricedItineraryAirItineraryPricingInfoItemTicketingFeesItem[] $ticketingFees
     *
     * @return self
     */
    public function setTicketingFees(?array $ticketingFees): self
    {
        $this->ticketingFees = $ticketingFees;

        return $this;
    }

    /**
     * Used to associate a particular set of pricing-related information to a particular pricing option.
     *
     * @return string
     */
    public function getSolutionSequenceNmbr(): ?string
    {
        return $this->solutionSequenceNmbr;
    }

    /**
     * Used to associate a particular set of pricing-related information to a particular pricing option.
     *
     * @param string $solutionSequenceNmbr
     *
     * @return self
     */
    public function setSolutionSequenceNmbr(?string $solutionSequenceNmbr): self
    {
        $this->solutionSequenceNmbr = $solutionSequenceNmbr;

        return $this;
    }
}