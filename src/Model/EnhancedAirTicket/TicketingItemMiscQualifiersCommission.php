<?php

namespace Ammonkc\SabreApi\Model\EnhancedAirTicket;

use Ammonkc\SabreApi\AbstractModel;

class TicketingItemMiscQualifiersCommission extends AbstractModel
{
    /**
     * "Amount" is used to specify the numeric amount of commission being claimed if applicable.
     *
     * @var float
     */
    protected $amount;
    /**
     * "Percent" is used to specify the percentage of commission being claimed if applicable.
     *
     * @var float
     */
    protected $percent;

    /**
     * "Amount" is used to specify the numeric amount of commission being claimed if applicable.
     *
     * @return float
     */
    public function getAmount(): ?float
    {
        return $this->amount;
    }

    /**
     * "Amount" is used to specify the numeric amount of commission being claimed if applicable.
     *
     * @param float $amount
     *
     * @return self
     */
    public function setAmount(?float $amount): self
    {
        $this->amount = $amount;

        return $this;
    }

    /**
     * "Percent" is used to specify the percentage of commission being claimed if applicable.
     *
     * @return float
     */
    public function getPercent(): ?float
    {
        return $this->percent;
    }

    /**
     * "Percent" is used to specify the percentage of commission being claimed if applicable.
     *
     * @param float $percent
     *
     * @return self
     */
    public function setPercent(?float $percent): self
    {
        $this->percent = $percent;

        return $this;
    }
}
