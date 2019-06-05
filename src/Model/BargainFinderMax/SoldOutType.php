<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Ammonkc\SabreApi\Model\BargainFinderMax;

class SoldOutType
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
    public function getSoldOutLegs(): ?array
    {
        return $this->soldOutLegs;
    }

    /**
     * @param SoldOutLegType[] $soldOutLegs
     *
     * @return self
     */
    public function setSoldOutLegs(?array $soldOutLegs): self
    {
        $this->soldOutLegs = $soldOutLegs;

        return $this;
    }

    /**
     * @return string
     */
    public function getStatus(): ?string
    {
        return $this->status;
    }

    /**
     * @param string $status
     *
     * @return self
     */
    public function setStatus(?string $status): self
    {
        $this->status = $status;

        return $this;
    }
}