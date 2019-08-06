<?php

namespace Ammonkc\SabreApi\Model\BargainFinderMax;

use Ammonkc\SabreApi\AbstractModel;

class OrgOpentravelOta200305AirSearchPrefsTypeTPAExtensionsSellingLevelsSellingLevelRules extends AbstractModel
{
    /**
     * Force ignore adjustment selling level rules.
     *
     * @var bool
     */
    protected $ignore;

    /**
     * Force ignore adjustment selling level rules.
     *
     * @return bool
     */
    public function getIgnore(): bool
    {
        return $this->ignore;
    }

    /**
     * Force ignore adjustment selling level rules.
     *
     * @param bool $ignore
     *
     * @return self
     */
    public function setIgnore(bool $ignore): self
    {
        $this->ignore = $ignore;

        return $this;
    }
}
