<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Ammonkc\SabreApi\Model\BargainFinderMax;

class OrgOpentravelOta200305AirSearchPrefsTypeSpanishFamilyDiscount
{
    /**
     * Spanish Large Family Discount Level. Valid values are 1 or 2.
     *
     * @var float
     */
    protected $level;

    /**
     * Spanish Large Family Discount Level. Valid values are 1 or 2.
     *
     * @return float
     */
    public function getLevel(): ?float
    {
        return $this->level;
    }

    /**
     * Spanish Large Family Discount Level. Valid values are 1 or 2.
     *
     * @param float $level
     *
     * @return self
     */
    public function setLevel(?float $level): self
    {
        $this->level = $level;

        return $this;
    }
}