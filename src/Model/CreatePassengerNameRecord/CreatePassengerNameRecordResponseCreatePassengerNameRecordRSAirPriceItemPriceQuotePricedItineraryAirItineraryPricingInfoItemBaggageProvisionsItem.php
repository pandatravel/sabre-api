<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Ammonkc\SabreApi\Model\CreatePassengerNameRecord;

use Ammonkc\SabreApi\AbstractModel;

class CreatePassengerNameRecordResponseCreatePassengerNameRecordRSAirPriceItemPriceQuotePricedItineraryAirItineraryPricingInfoItemBaggageProvisionsItem extends AbstractModel
{
    /**
     * Baggage associations.
     *
     * @var CreatePassengerNameRecordResponseCreatePassengerNameRecordRSAirPriceItemPriceQuotePricedItineraryAirItineraryPricingInfoItemBaggageProvisionsItemAssociations
     */
    protected $associations;
    /**
     * Carrier code whose baggage provisions apply.
     *
     * @var string
     */
    protected $carrierWhoseBaggageProvisionsApply;
    /**
     * Commissionable indicator.
     *
     * @var string
     */
    protected $commissionable;
    /**
     * Fee application indicator.
     *
     * @var string
     */
    protected $feeApplicationIndicator;
    /**
     * Fee not guaranteed indicator.
     *
     * @var string
     */
    protected $feeNotGuaranteedIndicator;
    /**
     * First occurrence.
     *
     * @var string
     */
    protected $firstOccurrence;
    /**
     * Frequent flier tier level.
     *
     * @var string
     */
    protected $fQTVCarrierFiledTierLevel;
    /**
     * Interlineable indicator.
     *
     * @var string
     */
    protected $interlineable;
    /**
     * Last occurrence.
     *
     * @var string
     */
    protected $lastOccurrence;
    /**
     * No charge / Not available indicator.
     *
     * @var string
     */
    protected $noChargeNotAvailableIndicator;
    /**
     * Number of BDI pieced.
     *
     * @var string
     */
    protected $numPiecesBDI;
    /**
     * Number of ITR pieces.
     *
     * @var string[]
     */
    protected $numPiecesITR;
    /**
     * Passenger type.
     *
     * @var CreatePassengerNameRecordResponseCreatePassengerNameRecordRSAirPriceItemPriceQuotePricedItineraryAirItineraryPricingInfoItemBaggageProvisionsItemPassengerType
     */
    protected $passengerType;
    /**
     * Price information.
     *
     * @var CreatePassengerNameRecordResponseCreatePassengerNameRecordRSAirPriceItemPriceQuotePricedItineraryAirItineraryPricingInfoItemBaggageProvisionsItemPriceInformation
     */
    protected $priceInformation;
    /**
     * Provision type.
     *
     * @var string
     */
    protected $provisionType;
    /**
     * Refund form.
     *
     * @var string
     */
    protected $refundForm;
    /**
     * Refund reissue indicator.
     *
     * @var string
     */
    protected $refundReissue;
    /**
     * Simultaneous ticket indicator.
     *
     * @var string
     */
    protected $simultaneousTicketIndicator;
    /**
     * Sub code.
     *
     * @var CreatePassengerNameRecordResponseCreatePassengerNameRecordRSAirPriceItemPriceQuotePricedItineraryAirItineraryPricingInfoItemBaggageProvisionsItemSubCodeInfo
     */
    protected $subCodeInfo;
    /**
     * Weight limit.
     *
     * @var CreatePassengerNameRecordResponseCreatePassengerNameRecordRSAirPriceItemPriceQuotePricedItineraryAirItineraryPricingInfoItemBaggageProvisionsItemWeightLimit
     */
    protected $weightLimit;
    /**
     * Used as a reference place holder. Matches /PriceQuote/MiscInformation/BaggageInfo/SubCodeProperties[n]/@RPH.
     *
     * @var string
     */
    protected $rPH;

    /**
     * Baggage associations.
     *
     * @return CreatePassengerNameRecordResponseCreatePassengerNameRecordRSAirPriceItemPriceQuotePricedItineraryAirItineraryPricingInfoItemBaggageProvisionsItemAssociations
     */
    public function getAssociations(): ?CreatePassengerNameRecordResponseCreatePassengerNameRecordRSAirPriceItemPriceQuotePricedItineraryAirItineraryPricingInfoItemBaggageProvisionsItemAssociations
    {
        return $this->associations;
    }

    /**
     * Baggage associations.
     *
     * @param CreatePassengerNameRecordResponseCreatePassengerNameRecordRSAirPriceItemPriceQuotePricedItineraryAirItineraryPricingInfoItemBaggageProvisionsItemAssociations $associations
     *
     * @return self
     */
    public function setAssociations(?CreatePassengerNameRecordResponseCreatePassengerNameRecordRSAirPriceItemPriceQuotePricedItineraryAirItineraryPricingInfoItemBaggageProvisionsItemAssociations $associations): self
    {
        $this->associations = $associations;

        return $this;
    }

    /**
     * Carrier code whose baggage provisions apply.
     *
     * @return string
     */
    public function getCarrierWhoseBaggageProvisionsApply(): ?string
    {
        return $this->carrierWhoseBaggageProvisionsApply;
    }

    /**
     * Carrier code whose baggage provisions apply.
     *
     * @param string $carrierWhoseBaggageProvisionsApply
     *
     * @return self
     */
    public function setCarrierWhoseBaggageProvisionsApply(?string $carrierWhoseBaggageProvisionsApply): self
    {
        $this->carrierWhoseBaggageProvisionsApply = $carrierWhoseBaggageProvisionsApply;

        return $this;
    }

    /**
     * Commissionable indicator.
     *
     * @return string
     */
    public function getCommissionable(): ?string
    {
        return $this->commissionable;
    }

    /**
     * Commissionable indicator.
     *
     * @param string $commissionable
     *
     * @return self
     */
    public function setCommissionable(?string $commissionable): self
    {
        $this->commissionable = $commissionable;

        return $this;
    }

    /**
     * Fee application indicator.
     *
     * @return string
     */
    public function getFeeApplicationIndicator(): ?string
    {
        return $this->feeApplicationIndicator;
    }

    /**
     * Fee application indicator.
     *
     * @param string $feeApplicationIndicator
     *
     * @return self
     */
    public function setFeeApplicationIndicator(?string $feeApplicationIndicator): self
    {
        $this->feeApplicationIndicator = $feeApplicationIndicator;

        return $this;
    }

    /**
     * Fee not guaranteed indicator.
     *
     * @return string
     */
    public function getFeeNotGuaranteedIndicator(): ?string
    {
        return $this->feeNotGuaranteedIndicator;
    }

    /**
     * Fee not guaranteed indicator.
     *
     * @param string $feeNotGuaranteedIndicator
     *
     * @return self
     */
    public function setFeeNotGuaranteedIndicator(?string $feeNotGuaranteedIndicator): self
    {
        $this->feeNotGuaranteedIndicator = $feeNotGuaranteedIndicator;

        return $this;
    }

    /**
     * First occurrence.
     *
     * @return string
     */
    public function getFirstOccurrence(): ?string
    {
        return $this->firstOccurrence;
    }

    /**
     * First occurrence.
     *
     * @param string $firstOccurrence
     *
     * @return self
     */
    public function setFirstOccurrence(?string $firstOccurrence): self
    {
        $this->firstOccurrence = $firstOccurrence;

        return $this;
    }

    /**
     * Frequent flier tier level.
     *
     * @return string
     */
    public function getFQTVCarrierFiledTierLevel(): ?string
    {
        return $this->fQTVCarrierFiledTierLevel;
    }

    /**
     * Frequent flier tier level.
     *
     * @param string $fQTVCarrierFiledTierLevel
     *
     * @return self
     */
    public function setFQTVCarrierFiledTierLevel(?string $fQTVCarrierFiledTierLevel): self
    {
        $this->fQTVCarrierFiledTierLevel = $fQTVCarrierFiledTierLevel;

        return $this;
    }

    /**
     * Interlineable indicator.
     *
     * @return string
     */
    public function getInterlineable(): ?string
    {
        return $this->interlineable;
    }

    /**
     * Interlineable indicator.
     *
     * @param string $interlineable
     *
     * @return self
     */
    public function setInterlineable(?string $interlineable): self
    {
        $this->interlineable = $interlineable;

        return $this;
    }

    /**
     * Last occurrence.
     *
     * @return string
     */
    public function getLastOccurrence(): ?string
    {
        return $this->lastOccurrence;
    }

    /**
     * Last occurrence.
     *
     * @param string $lastOccurrence
     *
     * @return self
     */
    public function setLastOccurrence(?string $lastOccurrence): self
    {
        $this->lastOccurrence = $lastOccurrence;

        return $this;
    }

    /**
     * No charge / Not available indicator.
     *
     * @return string
     */
    public function getNoChargeNotAvailableIndicator(): ?string
    {
        return $this->noChargeNotAvailableIndicator;
    }

    /**
     * No charge / Not available indicator.
     *
     * @param string $noChargeNotAvailableIndicator
     *
     * @return self
     */
    public function setNoChargeNotAvailableIndicator(?string $noChargeNotAvailableIndicator): self
    {
        $this->noChargeNotAvailableIndicator = $noChargeNotAvailableIndicator;

        return $this;
    }

    /**
     * Number of BDI pieced.
     *
     * @return string
     */
    public function getNumPiecesBDI(): ?string
    {
        return $this->numPiecesBDI;
    }

    /**
     * Number of BDI pieced.
     *
     * @param string $numPiecesBDI
     *
     * @return self
     */
    public function setNumPiecesBDI(?string $numPiecesBDI): self
    {
        $this->numPiecesBDI = $numPiecesBDI;

        return $this;
    }

    /**
     * Number of ITR pieces.
     *
     * @return string[]
     */
    public function getNumPiecesITR(): ?array
    {
        return $this->numPiecesITR;
    }

    /**
     * Number of ITR pieces.
     *
     * @param string[] $numPiecesITR
     *
     * @return self
     */
    public function setNumPiecesITR(?array $numPiecesITR): self
    {
        $this->numPiecesITR = $numPiecesITR;

        return $this;
    }

    /**
     * Passenger type.
     *
     * @return CreatePassengerNameRecordResponseCreatePassengerNameRecordRSAirPriceItemPriceQuotePricedItineraryAirItineraryPricingInfoItemBaggageProvisionsItemPassengerType
     */
    public function getPassengerType(): ?CreatePassengerNameRecordResponseCreatePassengerNameRecordRSAirPriceItemPriceQuotePricedItineraryAirItineraryPricingInfoItemBaggageProvisionsItemPassengerType
    {
        return $this->passengerType;
    }

    /**
     * Passenger type.
     *
     * @param CreatePassengerNameRecordResponseCreatePassengerNameRecordRSAirPriceItemPriceQuotePricedItineraryAirItineraryPricingInfoItemBaggageProvisionsItemPassengerType $passengerType
     *
     * @return self
     */
    public function setPassengerType(?CreatePassengerNameRecordResponseCreatePassengerNameRecordRSAirPriceItemPriceQuotePricedItineraryAirItineraryPricingInfoItemBaggageProvisionsItemPassengerType $passengerType): self
    {
        $this->passengerType = $passengerType;

        return $this;
    }

    /**
     * Price information.
     *
     * @return CreatePassengerNameRecordResponseCreatePassengerNameRecordRSAirPriceItemPriceQuotePricedItineraryAirItineraryPricingInfoItemBaggageProvisionsItemPriceInformation
     */
    public function getPriceInformation(): ?CreatePassengerNameRecordResponseCreatePassengerNameRecordRSAirPriceItemPriceQuotePricedItineraryAirItineraryPricingInfoItemBaggageProvisionsItemPriceInformation
    {
        return $this->priceInformation;
    }

    /**
     * Price information.
     *
     * @param CreatePassengerNameRecordResponseCreatePassengerNameRecordRSAirPriceItemPriceQuotePricedItineraryAirItineraryPricingInfoItemBaggageProvisionsItemPriceInformation $priceInformation
     *
     * @return self
     */
    public function setPriceInformation(?CreatePassengerNameRecordResponseCreatePassengerNameRecordRSAirPriceItemPriceQuotePricedItineraryAirItineraryPricingInfoItemBaggageProvisionsItemPriceInformation $priceInformation): self
    {
        $this->priceInformation = $priceInformation;

        return $this;
    }

    /**
     * Provision type.
     *
     * @return string
     */
    public function getProvisionType(): ?string
    {
        return $this->provisionType;
    }

    /**
     * Provision type.
     *
     * @param string $provisionType
     *
     * @return self
     */
    public function setProvisionType(?string $provisionType): self
    {
        $this->provisionType = $provisionType;

        return $this;
    }

    /**
     * Refund form.
     *
     * @return string
     */
    public function getRefundForm(): ?string
    {
        return $this->refundForm;
    }

    /**
     * Refund form.
     *
     * @param string $refundForm
     *
     * @return self
     */
    public function setRefundForm(?string $refundForm): self
    {
        $this->refundForm = $refundForm;

        return $this;
    }

    /**
     * Refund reissue indicator.
     *
     * @return string
     */
    public function getRefundReissue(): ?string
    {
        return $this->refundReissue;
    }

    /**
     * Refund reissue indicator.
     *
     * @param string $refundReissue
     *
     * @return self
     */
    public function setRefundReissue(?string $refundReissue): self
    {
        $this->refundReissue = $refundReissue;

        return $this;
    }

    /**
     * Simultaneous ticket indicator.
     *
     * @return string
     */
    public function getSimultaneousTicketIndicator(): ?string
    {
        return $this->simultaneousTicketIndicator;
    }

    /**
     * Simultaneous ticket indicator.
     *
     * @param string $simultaneousTicketIndicator
     *
     * @return self
     */
    public function setSimultaneousTicketIndicator(?string $simultaneousTicketIndicator): self
    {
        $this->simultaneousTicketIndicator = $simultaneousTicketIndicator;

        return $this;
    }

    /**
     * Sub code.
     *
     * @return CreatePassengerNameRecordResponseCreatePassengerNameRecordRSAirPriceItemPriceQuotePricedItineraryAirItineraryPricingInfoItemBaggageProvisionsItemSubCodeInfo
     */
    public function getSubCodeInfo(): ?CreatePassengerNameRecordResponseCreatePassengerNameRecordRSAirPriceItemPriceQuotePricedItineraryAirItineraryPricingInfoItemBaggageProvisionsItemSubCodeInfo
    {
        return $this->subCodeInfo;
    }

    /**
     * Sub code.
     *
     * @param CreatePassengerNameRecordResponseCreatePassengerNameRecordRSAirPriceItemPriceQuotePricedItineraryAirItineraryPricingInfoItemBaggageProvisionsItemSubCodeInfo $subCodeInfo
     *
     * @return self
     */
    public function setSubCodeInfo(?CreatePassengerNameRecordResponseCreatePassengerNameRecordRSAirPriceItemPriceQuotePricedItineraryAirItineraryPricingInfoItemBaggageProvisionsItemSubCodeInfo $subCodeInfo): self
    {
        $this->subCodeInfo = $subCodeInfo;

        return $this;
    }

    /**
     * Weight limit.
     *
     * @return CreatePassengerNameRecordResponseCreatePassengerNameRecordRSAirPriceItemPriceQuotePricedItineraryAirItineraryPricingInfoItemBaggageProvisionsItemWeightLimit
     */
    public function getWeightLimit(): ?CreatePassengerNameRecordResponseCreatePassengerNameRecordRSAirPriceItemPriceQuotePricedItineraryAirItineraryPricingInfoItemBaggageProvisionsItemWeightLimit
    {
        return $this->weightLimit;
    }

    /**
     * Weight limit.
     *
     * @param CreatePassengerNameRecordResponseCreatePassengerNameRecordRSAirPriceItemPriceQuotePricedItineraryAirItineraryPricingInfoItemBaggageProvisionsItemWeightLimit $weightLimit
     *
     * @return self
     */
    public function setWeightLimit(?CreatePassengerNameRecordResponseCreatePassengerNameRecordRSAirPriceItemPriceQuotePricedItineraryAirItineraryPricingInfoItemBaggageProvisionsItemWeightLimit $weightLimit): self
    {
        $this->weightLimit = $weightLimit;

        return $this;
    }

    /**
     * Used as a reference place holder. Matches /PriceQuote/MiscInformation/BaggageInfo/SubCodeProperties[n]/@RPH.
     *
     * @return string
     */
    public function getRPH(): ?string
    {
        return $this->rPH;
    }

    /**
     * Used as a reference place holder. Matches /PriceQuote/MiscInformation/BaggageInfo/SubCodeProperties[n]/@RPH.
     *
     * @param string $rPH
     *
     * @return self
     */
    public function setRPH(?string $rPH): self
    {
        $this->rPH = $rPH;

        return $this;
    }
}
