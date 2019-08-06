<?php

namespace Ammonkc\SabreApi\Model\BargainFinderMax;

use Ammonkc\SabreApi\AbstractModel;

class OrgOpentravelOta200305OTAAirLowFareSearchRQTPAExtensionsItineraryCache extends AbstractModel
{
    /**
     * @var float
     */
    protected $publicTimeToLive;
    /**
     * @var bool
     */
    protected $removePreviousOnUpdate;

    /**
     * @return float
     */
    public function getPublicTimeToLive(): float
    {
        return $this->publicTimeToLive;
    }

    /**
     * @param float $publicTimeToLive
     *
     * @return self
     */
    public function setPublicTimeToLive(float $publicTimeToLive): self
    {
        $this->publicTimeToLive = $publicTimeToLive;

        return $this;
    }

    /**
     * @return bool
     */
    public function getRemovePreviousOnUpdate(): bool
    {
        return $this->removePreviousOnUpdate;
    }

    /**
     * @param bool $removePreviousOnUpdate
     *
     * @return self
     */
    public function setRemovePreviousOnUpdate(bool $removePreviousOnUpdate): self
    {
        $this->removePreviousOnUpdate = $removePreviousOnUpdate;

        return $this;
    }
}
