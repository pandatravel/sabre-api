<?php

namespace Ammonkc\SabreApi\Model\EnhancedAirTicket;

use Ammonkc\SabreApi\AbstractModel;

class TicketingItemFOPQualifiersSabreSonicTicketingMultipleFOPFOPTwoCCInfoPaymentCard extends AbstractModel
{
    /**
     * "Code" is used to specify a credit card vendor code.
     *
     * @var string
     */
    protected $code;
    /**
     * "ManualApprovalCode" is used to specify a manual credit card approval code if applicable.
     *
     * @var string
     */
    protected $manualApprovalCode;
    /**
     * "Number" is used to specify a credit card number.
     *
     * @var int
     */
    protected $number;

    /**
     * "Code" is used to specify a credit card vendor code.
     *
     * @return string
     */
    public function getCode(): ?string
    {
        return $this->code;
    }

    /**
     * "Code" is used to specify a credit card vendor code.
     *
     * @param string $code
     *
     * @return self
     */
    public function setCode(?string $code): self
    {
        $this->code = $code;

        return $this;
    }

    /**
     * "ManualApprovalCode" is used to specify a manual credit card approval code if applicable.
     *
     * @return string
     */
    public function getManualApprovalCode(): ?string
    {
        return $this->manualApprovalCode;
    }

    /**
     * "ManualApprovalCode" is used to specify a manual credit card approval code if applicable.
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
     * "Number" is used to specify a credit card number.
     *
     * @return int
     */
    public function getNumber(): ?int
    {
        return $this->number;
    }

    /**
     * "Number" is used to specify a credit card number.
     *
     * @param int $number
     *
     * @return self
     */
    public function setNumber(?int $number): self
    {
        $this->number = $number;

        return $this;
    }
}
