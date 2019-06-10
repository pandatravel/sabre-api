<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Ammonkc\SabreApi\Model\CreatePassengerNameRecord;

use Ammonkc\SabreApi\AbstractModel;

class CreatePassengerNameRecordRequestCreatePassengerNameRecordRQAirPriceItemPriceRequestInformationOptionalQualifiersFOPQualifiersBSPTicketingPayLaterPlanInstallment extends AbstractModel
{
    /**
     * Used to specify the number of installments.
     *
     * @var string
     */
    protected $count;
    /**
     * Used to specify the pay later reference number.
     *
     * @var string
     */
    protected $payLaterReferenceNumber;
    /**
     * Used to define reference number.
     *
     * @var int
     */
    protected $reference;
    /**
     * Used to specify the value of the installments. Please note that decimals are not permitted.
     *
     * @var string
     */
    protected $value;

    /**
     * Used to specify the number of installments.
     *
     * @return string
     */
    public function getCount(): ?string
    {
        return $this->count;
    }

    /**
     * Used to specify the number of installments.
     *
     * @param string $count
     *
     * @return self
     */
    public function setCount(?string $count): self
    {
        $this->count = $count;

        return $this;
    }

    /**
     * Used to specify the pay later reference number.
     *
     * @return string
     */
    public function getPayLaterReferenceNumber(): ?string
    {
        return $this->payLaterReferenceNumber;
    }

    /**
     * Used to specify the pay later reference number.
     *
     * @param string $payLaterReferenceNumber
     *
     * @return self
     */
    public function setPayLaterReferenceNumber(?string $payLaterReferenceNumber): self
    {
        $this->payLaterReferenceNumber = $payLaterReferenceNumber;

        return $this;
    }

    /**
     * Used to define reference number.
     *
     * @return int
     */
    public function getReference(): ?int
    {
        return $this->reference;
    }

    /**
     * Used to define reference number.
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
     * Used to specify the value of the installments. Please note that decimals are not permitted.
     *
     * @return string
     */
    public function getValue(): ?string
    {
        return $this->value;
    }

    /**
     * Used to specify the value of the installments. Please note that decimals are not permitted.
     *
     * @param string $value
     *
     * @return self
     */
    public function setValue(?string $value): self
    {
        $this->value = $value;

        return $this;
    }
}