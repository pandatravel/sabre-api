<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Ammonkc\SabreApi\Model\BargainFinderMax;

class OrgOpentravelOta200305AirSearchPrefsTypeTPAExtensionsLowCostCarriersProcessing
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
    public function getDisable(): ?bool
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
    public function setDisable(?bool $disable): self
    {
        $this->disable = $disable;

        return $this;
    }
}