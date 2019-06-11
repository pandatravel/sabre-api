<?php

namespace Ammonkc\SabreApi\Model\EnhancedAirTicket;

use Ammonkc\SabreApi\AbstractModel;

class TicketingItemFOPQualifiersBSPTicketingPayLaterPlanInstallment extends AbstractModel
{
    /**
     * "Count" is used to specify the number of installments.
     *
     * @var string
     */
    protected $count;
    /**
     * "PayLaterReferenceNumber" is used to specify the pay later reference number.
     *
     * @var string
     */
    protected $payLaterReferenceNumber;
    /**
     * "Value" is used to specify the value of the installments.  Please note that decimals are not permitted.
     *
     * @var string
     */
    protected $value;

    /**
     * "Count" is used to specify the number of installments.
     *
     * @return string
     */
    public function getCount(): ?string
    {
        return $this->count;
    }

    /**
     * "Count" is used to specify the number of installments.
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
     * "PayLaterReferenceNumber" is used to specify the pay later reference number.
     *
     * @return string
     */
    public function getPayLaterReferenceNumber(): ?string
    {
        return $this->payLaterReferenceNumber;
    }

    /**
     * "PayLaterReferenceNumber" is used to specify the pay later reference number.
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
     * "Value" is used to specify the value of the installments.  Please note that decimals are not permitted.
     *
     * @return string
     */
    public function getValue(): ?string
    {
        return $this->value;
    }

    /**
     * "Value" is used to specify the value of the installments.  Please note that decimals are not permitted.
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
