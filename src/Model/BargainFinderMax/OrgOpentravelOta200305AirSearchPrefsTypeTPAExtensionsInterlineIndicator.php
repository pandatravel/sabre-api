<?php

namespace Ammonkc\SabreApi\Model\BargainFinderMax;

use Ammonkc\SabreApi\AbstractModel;

class OrgOpentravelOta200305AirSearchPrefsTypeTPAExtensionsInterlineIndicator extends AbstractModel
{
    /**
     * If true, only Interline itineraries are returned.,Specify air trip type.,Identifies the trip type - one way, return, circle trip, open jaw.
     *
     * @var bool
     */
    protected $ind;

    /**
     * If true, only Interline itineraries are returned.,Specify air trip type.,Identifies the trip type - one way, return, circle trip, open jaw.
     *
     * @return bool
     */
    public function getInd(): ?bool
    {
        return $this->ind;
    }

    /**
     * If true, only Interline itineraries are returned.,Specify air trip type.,Identifies the trip type - one way, return, circle trip, open jaw.
     *
     * @param bool $ind
     *
     * @return self
     */
    public function setInd(?bool $ind): self
    {
        $this->ind = $ind;

        return $this;
    }
}
