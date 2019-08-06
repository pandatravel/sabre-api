<?php

namespace Ammonkc\SabreApi\Model\BargainFinderMax;

use Ammonkc\SabreApi\AbstractModel;

class SoldOutType extends AbstractModel
{
    /**
     * @var SoldOutLegType[]
     */
    protected $soldOutLegs;
    /**
     * @var string
     */
    protected $status;

    /**
     * @return SoldOutLegType[]
     */
    public function getSoldOutLegs(): array
    {
        return $this->soldOutLegs;
    }

    /**
     * @param SoldOutLegType[] $soldOutLegs
     *
     * @return self
     */
    public function setSoldOutLegs(array $soldOutLegs): self
    {
        $this->soldOutLegs = $soldOutLegs;

        return $this;
    }

    /**
     * @return string
     */
    public function getStatus(): string
    {
        return $this->status;
    }

    /**
     * @param string $status
     *
     * @return self
     */
    public function setStatus(string $status): self
    {
        $this->status = $status;

        return $this;
    }
}
