<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Ammonkc\SabreApi\Model\CreatePassengerNameRecord;

use Ammonkc\SabreApi\AbstractModel;

class CreatePassengerNameRecordRequestCreatePassengerNameRecordRQAirPriceItemPriceRequestInformationOptionalQualifiersFOPQualifiersBasicFOP extends AbstractModel
{
    /**
     * Used to pass credit card information.
     *
     * @var CreatePassengerNameRecordRequestCreatePassengerNameRecordRQAirPriceItemPriceRequestInformationOptionalQualifiersFOPQualifiersBasicFOPCCInfo
     */
    protected $cCInfo;
    /**
     * Used to specify the payment type. Acceptable values are "CA" (cash), "CK" (check), "CQ" (cheque). If utilizing a credit card please omit @Type, and populate the .../CC_Info child node.
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
     * Used to pass virtual form of payment information.
     *
     * @var string
     */
    protected $virtual;

    /**
     * Used to pass credit card information.
     *
     * @return CreatePassengerNameRecordRequestCreatePassengerNameRecordRQAirPriceItemPriceRequestInformationOptionalQualifiersFOPQualifiersBasicFOPCCInfo
     */
    public function getCCInfo(): ?CreatePassengerNameRecordRequestCreatePassengerNameRecordRQAirPriceItemPriceRequestInformationOptionalQualifiersFOPQualifiersBasicFOPCCInfo
    {
        return $this->cCInfo;
    }

    /**
     * Used to pass credit card information.
     *
     * @param CreatePassengerNameRecordRequestCreatePassengerNameRecordRQAirPriceItemPriceRequestInformationOptionalQualifiersFOPQualifiersBasicFOPCCInfo $cCInfo
     *
     * @return self
     */
    public function setCCInfo(?CreatePassengerNameRecordRequestCreatePassengerNameRecordRQAirPriceItemPriceRequestInformationOptionalQualifiersFOPQualifiersBasicFOPCCInfo $cCInfo): self
    {
        $this->cCInfo = $cCInfo;

        return $this;
    }

    /**
     * Used to specify the payment type. Acceptable values are "CA" (cash), "CK" (check), "CQ" (cheque). If utilizing a credit card please omit @Type, and populate the .../CC_Info child node.
     *
     * @return string
     */
    public function getType(): ?string
    {
        return $this->type;
    }

    /**
     * Used to specify the payment type. Acceptable values are "CA" (cash), "CK" (check), "CQ" (cheque). If utilizing a credit card please omit @Type, and populate the .../CC_Info child node.
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
     * @return int
     */
    public function getReference(): ?int
    {
        return $this->reference;
    }

    /**
     * Used to reference a line number from PNR FOP field.
     *
     * @param int $reference
     *
     * @return self
     */
    public function setReference(?int $reference): self
    {
        $this->reference = $reference;

        return $this;
    }

    /**
     * Used to pass virtual form of payment information.
     *
     * @return string
     */
    public function getVirtual(): ?string
    {
        return $this->virtual;
    }

    /**
     * Used to pass virtual form of payment information.
     *
     * @param string $virtual
     *
     * @return self
     */
    public function setVirtual(?string $virtual): self
    {
        $this->virtual = $virtual;

        return $this;
    }
}
