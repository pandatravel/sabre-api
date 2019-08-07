<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Ammonkc\SabreApi\Model\CreatePassengerNameRecord;

use Ammonkc\SabreApi\AbstractModel;

class CreatePassengerNameRecordRequestCreatePassengerNameRecordRQAirPriceItemPriceRequestInformationOptionalQualifiersFOPQualifiersSabreSonicTicketingMultipleFOPFOPTwoCCInfoPaymentCard extends AbstractModel
{
    /**
     * Used to specify the credit card vendor code.
     *
     * @var string
     */
    protected $code;
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
