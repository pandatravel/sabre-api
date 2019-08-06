<?php

namespace Ammonkc\SabreApi\Model\BargainFinderMax;

use Ammonkc\SabreApi\AbstractModel;

class OrgOpentravelOta200305AirSearchPrefsTypeTPAExtensionsExcludeCallDirectCarriers extends AbstractModel
{
    /**
     * Force DSF to return schedules only for carriers bookable by Sabre.
     *
     * @var bool
     */
    protected $enabled;

    /**
     * Force DSF to return schedules only for carriers bookable by Sabre.
     *
     * @return bool
     */
    public function getEnabled(): bool
    {
        return $this->enabled;
    }

    /**
     * Force DSF to return schedules only for carriers bookable by Sabre.
     *
     * @param bool $enabled
     *
     * @return self
     */
    public function setEnabled(bool $enabled): self
    {
        $this->enabled = $enabled;

        return $this;
    }
}
