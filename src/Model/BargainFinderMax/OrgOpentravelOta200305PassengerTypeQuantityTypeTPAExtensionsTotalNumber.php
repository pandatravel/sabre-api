<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Ammonkc\SabreApi\Model\BargainFinderMax;

class OrgOpentravelOta200305PassengerTypeQuantityTypeTPAExtensionsTotalNumber
{
    /**
     * @var float
     */
    protected $value;

    /**
     * @return float
     */
    public function getValue(): ?float
    {
        return $this->value;
    }

    /**
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
