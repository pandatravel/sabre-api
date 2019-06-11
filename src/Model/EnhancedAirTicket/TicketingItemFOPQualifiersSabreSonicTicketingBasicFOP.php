<?php

namespace Ammonkc\SabreApi\Model\EnhancedAirTicket;

use Ammonkc\SabreApi\AbstractModel;

class TicketingItemFOPQualifiersSabreSonicTicketingBasicFOP extends AbstractModel
{
    /**
     * "ManualApprovalCode" is used to specify a manual approval code for non-credit card forms of payment.
     *
     * @var string
     */
    protected $manualApprovalCode;
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
     * @var TicketingItemFOPQualifiersSabreSonicTicketingBasicFOPCCInfo
     */
    protected $cCInfo;

    /**
     * "ManualApprovalCode" is used to specify a manual approval code for non-credit card forms of payment.
     *
     * @return string
     */
    public function getManualApprovalCode(): ?string
    {
        return $this->manualApprovalCode;
    }

    /**
     * "ManualApprovalCode" is used to specify a manual approval code for non-credit card forms of payment.
     *
     * @param string $manualApprovalCode
     *
     * @return self
     */
    public function setManualApprovalCode(?string $manualApprovalCode): self
    {
        $this->manualApprovalCode = $manualApprovalCode;

        return $this;
    }

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
     * @return TicketingItemFOPQualifiersSabreSonicTicketingBasicFOPCCInfo
     */
    public function getCCInfo(): ?TicketingItemFOPQualifiersSabreSonicTicketingBasicFOPCCInfo
    {
        return $this->cCInfo;
    }

    /**
     * @param TicketingItemFOPQualifiersSabreSonicTicketingBasicFOPCCInfo $cCInfo
     *
     * @return self
     */
    public function setCCInfo(?TicketingItemFOPQualifiersSabreSonicTicketingBasicFOPCCInfo $cCInfo): self
    {
        $this->cCInfo = $cCInfo;

        return $this;
    }
}
