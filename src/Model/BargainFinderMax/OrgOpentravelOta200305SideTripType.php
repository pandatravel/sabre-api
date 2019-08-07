<?php

namespace Ammonkc\SabreApi\Model\BargainFinderMax;

use Ammonkc\SabreApi\AbstractModel;

class OrgOpentravelOta200305SideTripType extends AbstractModel
{
    /**
     * Side trip end.
     *
     * @var bool
     */
    protected $end;
    /**
     * Side trip number.
     *
     * @var float
     */
    protected $number;
    /**
     * Side trip start.
     *
     * @var bool
     */
    protected $start;

    /**
     * Side trip end.
     *
     * @return bool
     */
    public function getEnd(): ?bool
    {
        return $this->end;
    }

    /**
     * Side trip end.
     *
     * @param bool $end
     *
     * @return self
     */
    public function setEnd(?bool $end): self
    {
        $this->end = $end;

        return $this;
    }

    /**
     * Side trip number.
     *
     * @return float
     */
    public function getNumber(): ?float
    {
        return $this->number;
    }

    /**
     * Side trip number.
     *
     * @param float $number
     *
     * @return self
     */
    public function setNumber(?float $number): self
    {
        $this->number = $number;

        return $this;
    }

    /**
     * Side trip start.
     *
     * @return bool
     */
    public function getStart(): ?bool
    {
        return $this->start;
    }

    /**
     * Side trip start.
     *
     * @param bool $start
     *
     * @return self
     */
    public function setStart(?bool $start): self
    {
        $this->start = $start;

        return $this;
    }
}
