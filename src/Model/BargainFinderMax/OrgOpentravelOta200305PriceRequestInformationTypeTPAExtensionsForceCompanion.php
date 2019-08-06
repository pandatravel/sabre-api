<?php

namespace Ammonkc\SabreApi\Model\BargainFinderMax;

use Ammonkc\SabreApi\AbstractModel;

class OrgOpentravelOta200305PriceRequestInformationTypeTPAExtensionsForceCompanion extends AbstractModel
{
    /**
     * Used for amounts, max 3 decimals.
     *
     * @var float
     */
    protected $value;

    /**
     * Used for amounts, max 3 decimals.
     *
     * @return float
     */
    public function getValue(): float
    {
        return $this->value;
    }

    /**
     * Used for amounts, max 3 decimals.
     *
     * @param float $value
     *
     * @return self
     */
    public function setValue(float $value): self
    {
        $this->value = $value;

        return $this;
    }
}
