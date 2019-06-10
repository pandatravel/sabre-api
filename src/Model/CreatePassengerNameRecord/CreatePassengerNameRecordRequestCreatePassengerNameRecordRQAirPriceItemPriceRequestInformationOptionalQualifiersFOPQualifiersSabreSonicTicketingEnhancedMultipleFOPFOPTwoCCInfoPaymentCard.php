<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Ammonkc\SabreApi\Model\CreatePassengerNameRecord;

use Ammonkc\SabreApi\AbstractModel;

class CreatePassengerNameRecordRequestCreatePassengerNameRecordRQAirPriceItemPriceRequestInformationOptionalQualifiersFOPQualifiersSabreSonicTicketingEnhancedMultipleFOPFOPTwoCCInfoPaymentCard extends AbstractModel
{
    /**
     * Used to specify a credit card security code.
     *
     * @var string
     */
    protected $cardSecurityCode;
    /**
     * Used to specify the credit card vendor code.
     *
     * @var string
     */
    protected $code;
    /**
     * Used to specify the credit card expiration date.
     *
     * @var string
     */
    protected $expireDate;
    /**
     * Used to specify extended payment if applicable.
     *
     * @var int
     */
    protected $extendedPayment;
    /**
     * Used to specify a manual credit card if applicable.
     *
     * @var string
     */
    protected $manualApprovalCode;
    /**
     * Used to specify the credit card number.
     *
     * @var int
     */
    protected $number;

    /**
     * Used to specify a credit card security code.
     *
     * @return string
     */
    public function getCardSecurityCode(): ?string
    {
        return $this->cardSecurityCode;
    }

    /**
     * Used to specify a credit card security code.
     *
     * @param string $cardSecurityCode
     *
     * @return self
     */
    public function setCardSecurityCode(?string $cardSecurityCode): self
    {
        $this->cardSecurityCode = $cardSecurityCode;

        return $this;
    }

    /**
     * Used to specify the credit card vendor code.
     *
     * @return string
     */
    public function getCode(): ?string
    {
        return $this->code;
    }

    /**
     * Used to specify the credit card vendor code.
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
     * Used to specify the credit card expiration date.
     *
     * @return string
     */
    public function getExpireDate(): ?string
    {
        return $this->expireDate;
    }

    /**
     * Used to specify the credit card expiration date.
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
     * Used to specify extended payment if applicable.
     *
     * @return int
     */
    public function getExtendedPayment(): ?int
    {
        return $this->extendedPayment;
    }

    /**
     * Used to specify extended payment if applicable.
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
     * Used to specify a manual credit card if applicable.
     *
     * @return string
     */
    public function getManualApprovalCode(): ?string
    {
        return $this->manualApprovalCode;
    }

    /**
     * Used to specify a manual credit card if applicable.
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
     * Used to specify the credit card number.
     *
     * @return int
     */
    public function getNumber(): ?int
    {
        return $this->number;
    }

    /**
     * Used to specify the credit card number.
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
