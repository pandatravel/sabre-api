<?php

namespace Ammonkc\SabreApi\Model\BargainFinderMax;

use Ammonkc\SabreApi\AbstractModel;

class OrgOpentravelOta200305AirSearchPrefsTypeTPAExtensionsSameTurnaroundAirportOnly extends AbstractModel
{
    /**
     * Aircraft type penalty (in dollars). Used to penalize propeller aircraft type in the response.
     *
     * @var bool
     */
    protected $ind;

    /**
     * Aircraft type penalty (in dollars). Used to penalize propeller aircraft type in the response.
     *
     * @return bool
     */
    public function getInd(): bool
    {
        return $this->ind;
    }

    /**
     * Aircraft type penalty (in dollars). Used to penalize propeller aircraft type in the response.
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
