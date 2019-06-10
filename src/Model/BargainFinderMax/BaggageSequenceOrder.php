<?php

namespace Ammonkc\SabreApi\Model\BargainFinderMax;

use Ammonkc\SabreApi\AbstractModel;

class BaggageSequenceOrder extends AbstractModel
{
    /**
     * @var int
     */
    protected $baggageRef;
    /**
     * @var int
     */
    protected $standardBag;

    /**
     * @return int
     */
    public function getBaggageRef(): ?int
    {
        return $this->baggageRef;
    }

    /**
     * @param int $baggageRef
     *
     * @return self
     */
    public function setBaggageRef(?int $baggageRef): self
    {
        $this->baggageRef = $baggageRef;

        return $this;
    }

    /**
     * @return int
     */
    public function getStandardBag(): ?int
    {
        return $this->standardBag;
    }

    /**
     * @param int $standardBag
     *
     * @return self
     */
    public function setStandardBag(?int $standardBag): self
    {
        $this->standardBag = $standardBag;

        return $this;
    }
}
