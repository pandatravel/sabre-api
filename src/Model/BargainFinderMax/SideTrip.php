<?php

namespace Ammonkc\SabreApi\Model\BargainFinderMax;

use Ammonkc\SabreApi\AbstractModel;

class SideTrip extends AbstractModel
{
    /**
     * Sid Trip Begin.
     *
     * @var bool
     */
    protected $begin;
    /**
     * Sid Trip End.
     *
     * @var bool
     */
    protected $end;

    /**
     * Sid Trip Begin.
     *
     * @return bool
     */
    public function getBegin(): bool
    {
        return $this->begin;
    }

    /**
     * Sid Trip Begin.
     *
     * @param bool $begin
     *
     * @return self
     */
    public function setBegin(bool $begin): self
    {
        $this->begin = $begin;

        return $this;
    }

    /**
     * Sid Trip End.
     *
     * @return bool
     */
    public function getEnd(): bool
    {
        return $this->end;
    }

    /**
     * Sid Trip End.
     *
     * @param bool $end
     *
     * @return self
     */
    public function setEnd(bool $end): self
    {
        $this->end = $end;

        return $this;
    }
}
