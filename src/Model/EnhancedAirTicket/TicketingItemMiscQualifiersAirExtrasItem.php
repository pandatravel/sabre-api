<?php

namespace Ammonkc\SabreApi\Model\EnhancedAirTicket;

use Ammonkc\SabreApi\AbstractModel;

class TicketingItemMiscQualifiersAirExtrasItem extends AbstractModel
{
    /**
     * "EndNumber" is used to specify the final EMD number when specifying a range.
     *
     * @var int
     */
    protected $endNumber;
    /**
     * "Number" is used to specify and EMD number.
     *
     * @var int
     */
    protected $number;

    /**
     * "EndNumber" is used to specify the final EMD number when specifying a range.
     *
     * @return int
     */
    public function getEndNumber(): ?int
    {
        return $this->endNumber;
    }

    /**
     * "EndNumber" is used to specify the final EMD number when specifying a range.
     *
     * @param int $endNumber
     *
     * @return self
     */
    public function setEndNumber(?int $endNumber): self
    {
        $this->endNumber = $endNumber;

        return $this;
    }

    /**
     * "Number" is used to specify and EMD number.
     *
     * @return int
     */
    public function getNumber(): ?int
    {
        return $this->number;
    }

    /**
     * "Number" is used to specify and EMD number.
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
