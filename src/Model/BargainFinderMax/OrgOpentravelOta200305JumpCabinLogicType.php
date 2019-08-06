<?php

namespace Ammonkc\SabreApi\Model\BargainFinderMax;

use Ammonkc\SabreApi\AbstractModel;

class OrgOpentravelOta200305JumpCabinLogicType extends AbstractModel
{
    /**
     * Controls if response could contain options with cabin class different than requested.
     *
     * @var bool
     */
    protected $disabled;

    /**
     * Controls if response could contain options with cabin class different than requested.
     *
     * @return bool
     */
    public function getDisabled(): bool
    {
        return $this->disabled;
    }

    /**
     * Controls if response could contain options with cabin class different than requested.
     *
     * @param bool $disabled
     *
     * @return self
     */
    public function setDisabled(bool $disabled): self
    {
        $this->disabled = $disabled;

        return $this;
    }
}
