<?php

namespace Ammonkc\SabreApi\Model\EnhancedAirTicket;

use Ammonkc\SabreApi\AbstractModel;

class AccountingLinesDeleteItem extends AbstractModel
{
    /**
     * "EndNumber" is used with Number to specify a range of accounting lines to delete.
     *
     * @var int
     */
    protected $endNumber;
    /**
     * "Number" is used to specify particular accounting lines to delete.
     *
     * @var int
     */
    protected $number;

    /**
     * "EndNumber" is used with Number to specify a range of accounting lines to delete.
     *
     * @return int
     */
    public function getEndNumber(): ?int
    {
        return $this->endNumber;
    }

    /**
     * "EndNumber" is used with Number to specify a range of accounting lines to delete.
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
     * "Number" is used to specify particular accounting lines to delete.
     *
     * @return int
     */
    public function getNumber(): ?int
    {
        return $this->number;
    }

    /**
     * "Number" is used to specify particular accounting lines to delete.
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
