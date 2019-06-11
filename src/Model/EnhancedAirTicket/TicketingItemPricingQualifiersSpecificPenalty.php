<?php

namespace Ammonkc\SabreApi\Model\EnhancedAirTicket;

use Ammonkc\SabreApi\AbstractModel;

class TicketingItemPricingQualifiersSpecificPenalty extends AbstractModel
{
    /**
     * "AdditionalInfo" is used to receive additional tags with information on fare flexibility.
     *
     * @var bool
     */
    protected $additionalInfo;
    /**
     * Please note that "Changeable" and "Refundable" can be combined in a single request to query for both changeable AND refundable pricing options,.
     *
     * @var TicketingItemPricingQualifiersSpecificPenaltyChangeable
     */
    protected $changeable;
    /**
     * @var TicketingItemPricingQualifiersSpecificPenaltyEitherOr
     */
    protected $eitherOr;
    /**
     * Please note that "Changeable" and "Refundable" can be combined in a single request to query for both changeable AND refundable pricing options,.
     *
     * @var TicketingItemPricingQualifiersSpecificPenaltyRefundable
     */
    protected $refundable;

    /**
     * "AdditionalInfo" is used to receive additional tags with information on fare flexibility.
     *
     * @return bool
     */
    public function getAdditionalInfo(): ?bool
    {
        return $this->additionalInfo;
    }

    /**
     * "AdditionalInfo" is used to receive additional tags with information on fare flexibility.
     *
     * @param bool $additionalInfo
     *
     * @return self
     */
    public function setAdditionalInfo(?bool $additionalInfo): self
    {
        $this->additionalInfo = $additionalInfo;

        return $this;
    }

    /**
     * Please note that "Changeable" and "Refundable" can be combined in a single request to query for both changeable AND refundable pricing options,.
     *
     * @return TicketingItemPricingQualifiersSpecificPenaltyChangeable
     */
    public function getChangeable(): ?TicketingItemPricingQualifiersSpecificPenaltyChangeable
    {
        return $this->changeable;
    }

    /**
     * Please note that "Changeable" and "Refundable" can be combined in a single request to query for both changeable AND refundable pricing options,.
     *
     * @param TicketingItemPricingQualifiersSpecificPenaltyChangeable $changeable
     *
     * @return self
     */
    public function setChangeable(?TicketingItemPricingQualifiersSpecificPenaltyChangeable $changeable): self
    {
        $this->changeable = $changeable;

        return $this;
    }

    /**
     * @return TicketingItemPricingQualifiersSpecificPenaltyEitherOr
     */
    public function getEitherOr(): ?TicketingItemPricingQualifiersSpecificPenaltyEitherOr
    {
        return $this->eitherOr;
    }

    /**
     * @param TicketingItemPricingQualifiersSpecificPenaltyEitherOr $eitherOr
     *
     * @return self
     */
    public function setEitherOr(?TicketingItemPricingQualifiersSpecificPenaltyEitherOr $eitherOr): self
    {
        $this->eitherOr = $eitherOr;

        return $this;
    }

    /**
     * Please note that "Changeable" and "Refundable" can be combined in a single request to query for both changeable AND refundable pricing options,.
     *
     * @return TicketingItemPricingQualifiersSpecificPenaltyRefundable
     */
    public function getRefundable(): ?TicketingItemPricingQualifiersSpecificPenaltyRefundable
    {
        return $this->refundable;
    }

    /**
     * Please note that "Changeable" and "Refundable" can be combined in a single request to query for both changeable AND refundable pricing options,.
     *
     * @param TicketingItemPricingQualifiersSpecificPenaltyRefundable $refundable
     *
     * @return self
     */
    public function setRefundable(?TicketingItemPricingQualifiersSpecificPenaltyRefundable $refundable): self
    {
        $this->refundable = $refundable;

        return $this;
    }
}
