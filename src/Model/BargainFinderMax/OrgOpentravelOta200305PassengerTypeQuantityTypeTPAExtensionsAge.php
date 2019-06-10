<?php

namespace Ammonkc\SabreApi\Model\BargainFinderMax;

use Ammonkc\SabreApi\AbstractModel;

class OrgOpentravelOta200305PassengerTypeQuantityTypeTPAExtensionsAge extends AbstractModel
{
    /**
     * @var float
     */
    protected $years;

    /**
     * @return float
     */
    public function getYears(): ?float
    {
        return $this->years;
    }

    /**
     * @param float $years
     *
     * @return self
     */
    public function setYears(?float $years): self
    {
        $this->years = $years;

        return $this;
    }
}
