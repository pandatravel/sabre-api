<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Ammonkc\SabreApi\Model\CreatePassengerNameRecord;

use Ammonkc\SabreApi\AbstractModel;

class CreatePassengerNameRecordRequestCreatePassengerNameRecordRQAirPriceItemPriceRequestInformationOptionalQualifiersFOPQualifiersBSPTicketingMultipleFOPFOPOne extends AbstractModel
{
    /**
     * Used to pass the credit card information.
     *
     * @var CreatePassengerNameRecordRequestCreatePassengerNameRecordRQAirPriceItemPriceRequestInformationOptionalQualifiersFOPQualifiersBSPTicketingMultipleFOPFOPOneCCInfo
     */
    protected $cCInfo;
    /**
     * Used to specify the payment type.
    Acceptable values are 'CA' (cash), 'CK' (check), 'CQ' (cheque).
    If utilizing a credit card please omit 'Type', and populate the 'CC_Info' object.

     *
     * @var string
     */
    protected $type;
    /**
     * Used to reference a line number from PNR FOP field.
     *
     * @var int
     */
    protected $reference;

    /**
     * Used to pass the credit card information.
     *
     * @return CreatePassengerNameRecordRequestCreatePassengerNameRecordRQAirPriceItemPriceRequestInformationOptionalQualifiersFOPQualifiersBSPTicketingMultipleFOPFOPOneCCInfo|null
     */
    public function getCCInfo(): ?CreatePassengerNameRecordRequestCreatePassengerNameRecordRQAirPriceItemPriceRequestInformationOptionalQualifiersFOPQualifiersBSPTicketingMultipleFOPFOPOneCCInfo
    {
        return $this->cCInfo;
    }

    /**
     * Used to pass the credit card information.
     *
     * @param CreatePassengerNameRecordRequestCreatePassengerNameRecordRQAirPriceItemPriceRequestInformationOptionalQualifiersFOPQualifiersBSPTicketingMultipleFOPFOPOneCCInfo|null $cCInfo
     *
     * @return self
     */
    public function setCCInfo(?CreatePassengerNameRecordRequestCreatePassengerNameRecordRQAirPriceItemPriceRequestInformationOptionalQualifiersFOPQualifiersBSPTicketingMultipleFOPFOPOneCCInfo $cCInfo): self
    {
        $this->cCInfo = $cCInfo;

        return $this;
    }

    /**
     * Used to specify the payment type.
    Acceptable values are 'CA' (cash), 'CK' (check), 'CQ' (cheque).
    If utilizing a credit card please omit 'Type', and populate the 'CC_Info' object.

     *
     * @return string|null
     */
    public function getType(): ?string
    {
        return $this->type;
    }

    /**
     * Used to specify the payment type.
    Acceptable values are 'CA' (cash), 'CK' (check), 'CQ' (cheque).
    If utilizing a credit card please omit 'Type', and populate the 'CC_Info' object.

     *
     * @param string|null $type
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
     * @return int|null
     */
    public function getReference(): ?int
    {
        return $this->reference;
    }

    /**
     * Used to reference a line number from PNR FOP field.
     *
     * @param int|null $reference
     *
     * @return self
     */
    public function setReference(?int $reference): self
    {
        $this->reference = $reference;

        return $this;
    }
}
