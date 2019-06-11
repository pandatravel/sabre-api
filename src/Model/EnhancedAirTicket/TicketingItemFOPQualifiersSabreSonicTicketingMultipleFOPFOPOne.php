<?php

namespace Ammonkc\SabreApi\Model\EnhancedAirTicket;

use Ammonkc\SabreApi\AbstractModel;

class TicketingItemFOPQualifiersSabreSonicTicketingMultipleFOPFOPOne extends AbstractModel
{
    /**
     * "Type" is used to specify the payment type.

    Acceptable values are "CA" (cash), "CK" (check), "CQ" (cheque), "PT", "PTACA" (PTA cash), "PTAGTCK" (PTA agency check) or "PTCK" (PTA check).

    If utilizing a credit card please omit Type, and populate the .../CC_Info object, unless needing to specify a PTA credit card form of payment.

    For a PTA credit card form of payment the client should pass Type="PT" and populate the .../CC_Info object with the relevant credit card information.

     *
     * @var string
     */
    protected $type;
    /**
     * @var TicketingItemFOPQualifiersSabreSonicTicketingMultipleFOPFOPOneCCInfo
     */
    protected $cCInfo;

    /**
     * "Type" is used to specify the payment type.

    Acceptable values are "CA" (cash), "CK" (check), "CQ" (cheque), "PT", "PTACA" (PTA cash), "PTAGTCK" (PTA agency check) or "PTCK" (PTA check).

    If utilizing a credit card please omit Type, and populate the .../CC_Info object, unless needing to specify a PTA credit card form of payment.

    For a PTA credit card form of payment the client should pass Type="PT" and populate the .../CC_Info object with the relevant credit card information.

     *
     * @return string
     */
    public function getType(): ?string
    {
        return $this->type;
    }

    /**
     * "Type" is used to specify the payment type.

    Acceptable values are "CA" (cash), "CK" (check), "CQ" (cheque), "PT", "PTACA" (PTA cash), "PTAGTCK" (PTA agency check) or "PTCK" (PTA check).

    If utilizing a credit card please omit Type, and populate the .../CC_Info object, unless needing to specify a PTA credit card form of payment.

    For a PTA credit card form of payment the client should pass Type="PT" and populate the .../CC_Info object with the relevant credit card information.

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
     * @return TicketingItemFOPQualifiersSabreSonicTicketingMultipleFOPFOPOneCCInfo
     */
    public function getCCInfo(): ?TicketingItemFOPQualifiersSabreSonicTicketingMultipleFOPFOPOneCCInfo
    {
        return $this->cCInfo;
    }

    /**
     * @param TicketingItemFOPQualifiersSabreSonicTicketingMultipleFOPFOPOneCCInfo $cCInfo
     *
     * @return self
     */
    public function setCCInfo(?TicketingItemFOPQualifiersSabreSonicTicketingMultipleFOPFOPOneCCInfo $cCInfo): self
    {
        $this->cCInfo = $cCInfo;

        return $this;
    }
}
