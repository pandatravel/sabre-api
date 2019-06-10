<?php

namespace Ammonkc\SabreApi\Model\BargainFinderMax;

use Ammonkc\SabreApi\AbstractModel;

class OrgOpentravelOta200305BaggageType extends AbstractModel
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
