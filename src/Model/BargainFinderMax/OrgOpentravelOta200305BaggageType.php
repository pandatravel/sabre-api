<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Ammonkc\SabreApi\Model\BargainFinderMax;

class OrgOpentravelOta200305BaggageType
{
    /**
     * @var bool
     */
    protected $freePieceRequired;

    /**
     * @return bool
     */
    public function getFreePieceRequired(): ?bool
    {
        return $this->freePieceRequired;
    }

    /**
     * @param bool $freePieceRequired
     *
     * @return self
     */
    public function setFreePieceRequired(?bool $freePieceRequired): self
    {
        $this->freePieceRequired = $freePieceRequired;

        return $this;
    }
}
