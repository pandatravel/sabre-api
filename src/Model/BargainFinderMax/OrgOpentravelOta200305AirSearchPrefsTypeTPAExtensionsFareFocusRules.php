<?php

namespace Ammonkc\SabreApi\Model\BargainFinderMax;

use Ammonkc\SabreApi\AbstractModel;

class OrgOpentravelOta200305AirSearchPrefsTypeTPAExtensionsFareFocusRules extends AbstractModel
{
    /**
     * Exclude fare focus rules.
     *
     * @var bool
     */
    protected $exclude;

    /**
     * Exclude fare focus rules.
     *
     * @return bool
     */
    public function getExclude(): bool
    {
        return $this->exclude;
    }

    /**
     * Exclude fare focus rules.
     *
     * @param bool $exclude
     *
     * @return self
     */
    public function setExclude(bool $exclude): self
    {
        $this->exclude = $exclude;

        return $this;
    }
}
