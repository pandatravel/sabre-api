<?php

namespace Ammonkc\SabreApi\Model\BargainFinderMax;

use Ammonkc\SabreApi\AbstractModel;

class OrgOpentravelOta200305AirSearchPrefsTypeTPAExtensionsTicketingSumOfLocals extends AbstractModel
{
    /**
     * Enable Ticketing Sum of Locals processing.
     *
     * @var bool
     */
    protected $enable;

    /**
     * Enable Ticketing Sum of Locals processing.
     *
     * @return bool
     */
    public function getEnable(): ?bool
    {
        return $this->enable;
    }

    /**
     * Enable Ticketing Sum of Locals processing.
     *
     * @param bool $enable
     *
     * @return self
     */
    public function setEnable(?bool $enable): self
    {
        $this->enable = $enable;

        return $this;
    }
}
