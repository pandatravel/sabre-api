<?php

namespace Ammonkc\SabreApi\Model\EnhancedAirTicket;

use Ammonkc\SabreApi\AbstractModel;

class TicketingItemMiscQualifiersFutureTicketLineItem extends AbstractModel
{
    /**
     * FP Line End Number. Can be used so specify a range of FP lines.
     *
     * @var int
     */
    protected $endNumber;
    /**
     * Passenger Name Number.
     *
     * @var string
     */
    protected $nameNumber;
    /**
     * FP Line Number.
     *
     * @var int
     */
    protected $number;

    /**
     * FP Line End Number. Can be used so specify a range of FP lines.
     *
     * @return int
     */
    public function getEndNumber(): ?int
    {
        return $this->endNumber;
    }

    /**
     * FP Line End Number. Can be used so specify a range of FP lines.
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
     * Passenger Name Number.
     *
     * @return string
     */
    public function getNameNumber(): ?string
    {
        return $this->nameNumber;
    }

    /**
     * Passenger Name Number.
     *
     * @param string $nameNumber
     *
     * @return self
     */
    public function setNameNumber(?string $nameNumber): self
    {
        $this->nameNumber = $nameNumber;

        return $this;
    }

    /**
     * FP Line Number.
     *
     * @return int
     */
    public function getNumber(): ?int
    {
        return $this->number;
    }

    /**
     * FP Line Number.
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
