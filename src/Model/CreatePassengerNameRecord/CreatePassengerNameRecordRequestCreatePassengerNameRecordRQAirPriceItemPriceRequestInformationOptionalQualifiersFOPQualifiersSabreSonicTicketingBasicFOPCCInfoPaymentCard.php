<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Ammonkc\SabreApi\Model\CreatePassengerNameRecord;

use Ammonkc\SabreApi\AbstractModel;

class CreatePassengerNameRecordRequestCreatePassengerNameRecordRQAirPriceItemPriceRequestInformationOptionalQualifiersFOPQualifiersSabreSonicTicketingBasicFOPCCInfoPaymentCard extends AbstractModel
{
    /**
     * Used to specify a credit card security code.
     *
     * @var int
     */
    protected $cardSecurityCode;
    /**
     * Used to specify the credit card vendor code.
     *
     * @var string
     */
    protected $code;
    /**
     * 'ExpireDate' is used to specify a credit card expiration date.
    'ExpireDate' follows this format: YYYY-MM.
    Go to the following link for a more in-depth explanation.
    http://www.w3.org/TR/xmlschema-2/#gYearMonth

     *
     * @var string
     */
    protected $expireDate;
    /**
     * 'ExtendedPayment' is used to pass the number of months by which to extend the payment.
     *
     * @var int
     */
    protected $extendedPayment;
    /**
     * 'ManualApprovalCode' is used to pass a manual credit card approval code if it applies to the credit card.
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
     * @return int
     */
    public function getCardSecurityCode(): int
    {
        return $this->cardSecurityCode;
    }

    /**
     * Used to specify a credit card security code.
     *
     * @param int $cardSecurityCode
     *
     * @return self
     */
    public function setCardSecurityCode(int $cardSecurityCode): self
    {
        $this->cardSecurityCode = $cardSecurityCode;

        return $this;
    }

    /**
     * Used to specify the credit card vendor code.
     *
     * @return string
     */
    public function getCode(): string
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
    public function setCode(string $code): self
    {
        $this->code = $code;

        return $this;
    }

    /**
     * 'ExpireDate' is used to specify a credit card expiration date.
    'ExpireDate' follows this format: YYYY-MM.
    Go to the following link for a more in-depth explanation.
    http://www.w3.org/TR/xmlschema-2/#gYearMonth

     *
     * @return string
     */
    public function getExpireDate(): string
    {
        return $this->expireDate;
    }

    /**
     * 'ExpireDate' is used to specify a credit card expiration date.
    'ExpireDate' follows this format: YYYY-MM.
    Go to the following link for a more in-depth explanation.
    http://www.w3.org/TR/xmlschema-2/#gYearMonth

     *
     * @param string $expireDate
     *
     * @return self
     */
    public function setExpireDate(string $expireDate): self
    {
        $this->expireDate = $expireDate;

        return $this;
    }

    /**
     * 'ExtendedPayment' is used to pass the number of months by which to extend the payment.
     *
     * @return int
     */
    public function getExtendedPayment(): int
    {
        return $this->extendedPayment;
    }

    /**
     * 'ExtendedPayment' is used to pass the number of months by which to extend the payment.
     *
     * @param int $extendedPayment
     *
     * @return self
     */
    public function setExtendedPayment(int $extendedPayment): self
    {
        $this->extendedPayment = $extendedPayment;

        return $this;
    }

    /**
     * 'ManualApprovalCode' is used to pass a manual credit card approval code if it applies to the credit card.
     *
     * @return string
     */
    public function getManualApprovalCode(): string
    {
        return $this->manualApprovalCode;
    }

    /**
     * 'ManualApprovalCode' is used to pass a manual credit card approval code if it applies to the credit card.
     *
     * @param string $manualApprovalCode
     *
     * @return self
     */
    public function setManualApprovalCode(string $manualApprovalCode): self
    {
        $this->manualApprovalCode = $manualApprovalCode;

        return $this;
    }

    /**
     * Used to specify the credit card number.
     *
     * @return int
     */
    public function getNumber(): int
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
    public function setNumber(int $number): self
    {
        $this->number = $number;

        return $this;
    }
}
