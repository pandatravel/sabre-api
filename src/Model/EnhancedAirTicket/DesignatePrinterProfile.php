<?php

namespace Ammonkc\SabreApi\Model\EnhancedAirTicket;

use Ammonkc\SabreApi\AbstractModel;

class DesignatePrinterProfile extends AbstractModel
{
    /**
     * "Number" is used to specify a previously established printer profile number.
     *
     * @var int
     */
    protected $number;

    /**
     * "Number" is used to specify a previously established printer profile number.
     *
     * @return int
     */
    public function getNumber(): ?int
    {
        return $this->number;
    }

    /**
     * "Number" is used to specify a previously established printer profile number.
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
