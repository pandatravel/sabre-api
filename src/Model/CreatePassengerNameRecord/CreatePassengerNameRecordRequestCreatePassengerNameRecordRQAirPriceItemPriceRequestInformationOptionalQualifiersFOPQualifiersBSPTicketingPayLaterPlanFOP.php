<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Ammonkc\SabreApi\Model\CreatePassengerNameRecord;

use Ammonkc\SabreApi\AbstractModel;

class CreatePassengerNameRecordRequestCreatePassengerNameRecordRQAirPriceItemPriceRequestInformationOptionalQualifiersFOPQualifiersBSPTicketingPayLaterPlanFOP extends AbstractModel
{
    /**
     * Used to pass credit card information.
     *
     * @var CreatePassengerNameRecordRequestCreatePassengerNameRecordRQAirPriceItemPriceRequestInformationOptionalQualifiersFOPQualifiersBSPTicketingPayLaterPlanFOPCCInfo
     */
    protected $cCInfo;
    /**
     * Used to specify the payment type. Acceptable values are "CA", "CK" or "CQ". If utilizing a credit card please omit @Type, and populate the .../CC_Info child node.
     *
     * @var string
     */
    protected $type;
    /**
     * Used to reference a line number from PNR FOP field.
     *
     * @var string
     */
    protected $reference;

    /**
     * Used to pass credit card information.
     *
     * @return CreatePassengerNameRecordRequestCreatePassengerNameRecordRQAirPriceItemPriceRequestInformationOptionalQualifiersFOPQualifiersBSPTicketingPayLaterPlanFOPCCInfo
     */
    public function getCCInfo(): ?CreatePassengerNameRecordRequestCreatePassengerNameRecordRQAirPriceItemPriceRequestInformationOptionalQualifiersFOPQualifiersBSPTicketingPayLaterPlanFOPCCInfo
    {
        return $this->cCInfo;
    }

    /**
     * Used to pass credit card information.
     *
     * @param CreatePassengerNameRecordRequestCreatePassengerNameRecordRQAirPriceItemPriceRequestInformationOptionalQualifiersFOPQualifiersBSPTicketingPayLaterPlanFOPCCInfo $cCInfo
     *
     * @return self
     */
    public function setCCInfo(?CreatePassengerNameRecordRequestCreatePassengerNameRecordRQAirPriceItemPriceRequestInformationOptionalQualifiersFOPQualifiersBSPTicketingPayLaterPlanFOPCCInfo $cCInfo): self
    {
        $this->cCInfo = $cCInfo;

        return $this;
    }

    /**
     * Used to specify the payment type. Acceptable values are "CA", "CK" or "CQ". If utilizing a credit card please omit @Type, and populate the .../CC_Info child node.
     *
     * @return string
     */
    public function getType(): ?string
    {
        return $this->type;
    }

    /**
     * Used to specify the payment type. Acceptable values are "CA", "CK" or "CQ". If utilizing a credit card please omit @Type, and populate the .../CC_Info child node.
     *
     * @param string $type
     *
     * @return self
     */
    public function setType(?string $type): self
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Used to reference a line number from PNR FOP field.
     *
     * @return string
     */
    public function getReference(): ?string
    {
        return $this->reference;
    }

    /**
     * Used to reference a line number from PNR FOP field.
     *
     * @param string $reference
     *
     * @return self
     */
    public function setReference(?string $reference): self
    {
        $this->reference = $reference;

        return $this;
    }
}
