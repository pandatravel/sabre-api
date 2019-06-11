<?php

namespace Ammonkc\SabreApi\Model\EnhancedAirTicket;

use Ammonkc\SabreApi\AbstractModel;

class TicketingItemFOPQualifiersSabreSonicTicketingBasicFOPCCInfoPaymentCard extends AbstractModel
{
    /**
     * "CardSecurityCode" is used to specify a credit card Card Security Code number.
     *
     * @var int
     */
    protected $cardSecurityCode;
    /**
     * "Code" is used to specify a credit card vendor code.
     *
     * @var string
     */
    protected $code;
    /**
     * "ExpireDate" is used to specify the credit card expiration date.

    "ExpireDate" follows this format: 'YYYY-MM'

    For more information visit https://www.w3.org/TR/xmlschema-2/#gYearMonth

     *
     * @var string
     */
    protected $expireDate;
    /**
     * "ExtendedPayment" is used to specify extended payment if applicable.
     *
     * @var int
     */
    protected $extendedPayment;
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
     * "CardSecurityCode" is used to specify a credit card Card Security Code number.
     *
     * @return int
     */
    public function getCardSecurityCode(): ?int
    {
        return $this->cardSecurityCode;
    }

    /**
     * "CardSecurityCode" is used to specify a credit card Card Security Code number.
     *
     * @param int $cardSecurityCode
     *
     * @return self
     */
    public function setCardSecurityCode(?int $cardSecurityCode): self
    {
        $this->cardSecurityCode = $cardSecurityCode;

        return $this;
    }

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
     * "ExpireDate" is used to specify the credit card expiration date.

    "ExpireDate" follows this format: 'YYYY-MM'

    For more information visit https://www.w3.org/TR/xmlschema-2/#gYearMonth

     *
     * @return string
     */
    public function getExpireDate(): ?string
    {
        return $this->expireDate;
    }

    /**
     * "ExpireDate" is used to specify the credit card expiration date.

    "ExpireDate" follows this format: 'YYYY-MM'

    For more information visit https://www.w3.org/TR/xmlschema-2/#gYearMonth

     *
     * @param string $expireDate
     *
     * @return self
     */
    public function setExpireDate(?string $expireDate): self
    {
        $this->expireDate = $expireDate;

        return $this;
    }

    /**
     * "ExtendedPayment" is used to specify extended payment if applicable.
     *
     * @return int
     */
    public function getExtendedPayment(): ?int
    {
        return $this->extendedPayment;
    }

    /**
     * "ExtendedPayment" is used to specify extended payment if applicable.
     *
     * @param int $extendedPayment
     *
     * @return self
     */
    public function setExtendedPayment(?int $extendedPayment): self
    {
        $this->extendedPayment = $extendedPayment;

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
