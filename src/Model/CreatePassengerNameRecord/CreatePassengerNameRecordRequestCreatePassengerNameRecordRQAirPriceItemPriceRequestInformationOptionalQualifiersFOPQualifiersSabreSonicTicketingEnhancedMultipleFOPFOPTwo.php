<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Ammonkc\SabreApi\Model\CreatePassengerNameRecord;

use Ammonkc\SabreApi\AbstractModel;

class CreatePassengerNameRecordRequestCreatePassengerNameRecordRQAirPriceItemPriceRequestInformationOptionalQualifiersFOPQualifiersSabreSonicTicketingEnhancedMultipleFOPFOPTwo extends AbstractModel
{
    /**
     * Used to pass the credit card information.
     *
     * @var CreatePassengerNameRecordRequestCreatePassengerNameRecordRQAirPriceItemPriceRequestInformationOptionalQualifiersFOPQualifiersSabreSonicTicketingEnhancedMultipleFOPFOPTwoCCInfo
     */
    protected $cCInfo;
    /**
     * Type is used to specify the payment type.
    Acceptable values are 'CA' (cash), 'CK' (check) or 'CQ' (cheque).
    If you are using a credit card, omit 'Type' and populate the 'CC_Info' object.

     *
     * @var string
     */
    protected $type;

    /**
     * Used to pass the credit card information.
     *
     * @return CreatePassengerNameRecordRequestCreatePassengerNameRecordRQAirPriceItemPriceRequestInformationOptionalQualifiersFOPQualifiersSabreSonicTicketingEnhancedMultipleFOPFOPTwoCCInfo|null
     */
    public function getCCInfo(): ?CreatePassengerNameRecordRequestCreatePassengerNameRecordRQAirPriceItemPriceRequestInformationOptionalQualifiersFOPQualifiersSabreSonicTicketingEnhancedMultipleFOPFOPTwoCCInfo
    {
        return $this->cCInfo;
    }

    /**
     * Used to pass the credit card information.
     *
     * @param CreatePassengerNameRecordRequestCreatePassengerNameRecordRQAirPriceItemPriceRequestInformationOptionalQualifiersFOPQualifiersSabreSonicTicketingEnhancedMultipleFOPFOPTwoCCInfo|null $cCInfo
     *
     * @return self
     */
    public function setCCInfo(?CreatePassengerNameRecordRequestCreatePassengerNameRecordRQAirPriceItemPriceRequestInformationOptionalQualifiersFOPQualifiersSabreSonicTicketingEnhancedMultipleFOPFOPTwoCCInfo $cCInfo): self
    {
        $this->cCInfo = $cCInfo;

        return $this;
    }

    /**
     * Type is used to specify the payment type.
    Acceptable values are 'CA' (cash), 'CK' (check) or 'CQ' (cheque).
    If you are using a credit card, omit 'Type' and populate the 'CC_Info' object.

     *
     * @return string|null
     */
    public function getType(): ?string
    {
        return $this->type;
    }

    /**
     * Type is used to specify the payment type.
    Acceptable values are 'CA' (cash), 'CK' (check) or 'CQ' (cheque).
    If you are using a credit card, omit 'Type' and populate the 'CC_Info' object.

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
}
