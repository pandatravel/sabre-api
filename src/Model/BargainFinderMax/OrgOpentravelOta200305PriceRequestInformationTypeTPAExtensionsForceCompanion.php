<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Ammonkc\SabreApi\Model\BargainFinderMax;

class OrgOpentravelOta200305PriceRequestInformationTypeTPAExtensionsForceCompanion
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
    public function getValue(): ?float
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
    public function setValue(?float $value): self
    {
        $this->value = $value;

        return $this;
    }
}
