<?php

namespace Ammonkc\SabreApi\Model\BargainFinderMax;

use Ammonkc\SabreApi\AbstractModel;

class OrgOpentravelOta200305AirSearchPrefsTypeSpanishFamilyDiscount extends AbstractModel
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
