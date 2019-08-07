<?php

namespace Ammonkc\SabreApi\Model\BargainFinderMax;

use Ammonkc\SabreApi\AbstractModel;

class OrgOpentravelOta200305AirSearchPrefsTypeTPAExtensionsMaxPrice extends AbstractModel
{
    /**
     * Used for amounts, max 3 decimals,Restrict content type returned by LFE service.
     *
     * @var float
     */
    protected $value;

    /**
     * Used for amounts, max 3 decimals,Restrict content type returned by LFE service.
     *
     * @return float
     */
    public function getValue(): ?float
    {
        return $this->value;
    }

    /**
     * Used for amounts, max 3 decimals,Restrict content type returned by LFE service.
     *
     * @param float $value
     *
     * @return self
     */
    public function setValue(?float $value): self
    {
        $this->value = $value;

        return $this;
    }
}
