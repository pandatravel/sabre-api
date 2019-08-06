<?php

namespace Ammonkc\SabreApi\Model\BargainFinderMax;

use Ammonkc\SabreApi\AbstractModel;

class OrgOpentravelOta200305AirSearchPrefsTypeTPAExtensionsLowCostCarriersProcessing extends AbstractModel
{
    /**
     * Disable low cost carriers processing.
     *
     * @var bool
     */
    protected $disable;

    /**
     * Disable low cost carriers processing.
     *
     * @return bool
     */
    public function getDisable(): bool
    {
        return $this->disable;
    }

    /**
     * Disable low cost carriers processing.
     *
     * @param bool $disable
     *
     * @return self
     */
    public function setDisable(bool $disable): self
    {
        $this->disable = $disable;

        return $this;
    }
}
