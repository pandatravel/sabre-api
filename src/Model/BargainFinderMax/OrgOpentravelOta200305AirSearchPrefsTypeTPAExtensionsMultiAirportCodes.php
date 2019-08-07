<?php

namespace Ammonkc\SabreApi\Model\BargainFinderMax;

use Ammonkc\SabreApi\AbstractModel;

class OrgOpentravelOta200305AirSearchPrefsTypeTPAExtensionsMultiAirportCodes extends AbstractModel
{
    /**
     * Enable open jaw leg combinations.
     *
     * @var bool
     */
    protected $enableOpenJaw;

    /**
     * Enable open jaw leg combinations.
     *
     * @return bool
     */
    public function getEnableOpenJaw(): ?bool
    {
        return $this->enableOpenJaw;
    }

    /**
     * Enable open jaw leg combinations.
     *
     * @param bool $enableOpenJaw
     *
     * @return self
     */
    public function setEnableOpenJaw(?bool $enableOpenJaw): self
    {
        $this->enableOpenJaw = $enableOpenJaw;

        return $this;
    }
}
