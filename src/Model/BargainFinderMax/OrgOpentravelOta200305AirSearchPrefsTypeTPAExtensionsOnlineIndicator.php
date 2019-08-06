<?php

namespace Ammonkc\SabreApi\Model\BargainFinderMax;

use Ammonkc\SabreApi\AbstractModel;

class OrgOpentravelOta200305AirSearchPrefsTypeTPAExtensionsOnlineIndicator extends AbstractModel
{
    /**
     * If true, only Online itineraries are returned.
     *
     * @var bool
     */
    protected $ind;

    /**
     * If true, only Online itineraries are returned.
     *
     * @return bool
     */
    public function getInd(): bool
    {
        return $this->ind;
    }

    /**
     * If true, only Online itineraries are returned.
     *
     * @param bool $ind
     *
     * @return self
     */
    public function setInd(bool $ind): self
    {
        $this->ind = $ind;

        return $this;
    }
}
