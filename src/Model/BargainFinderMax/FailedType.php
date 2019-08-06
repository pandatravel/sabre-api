<?php

namespace Ammonkc\SabreApi\Model\BargainFinderMax;

use Ammonkc\SabreApi\AbstractModel;

class FailedType extends AbstractModel
{
    /**
     * Indicates that the itinerary does not fullfill the Minimum Connect Time requirement. It cannot be sold.
     *
     * @var bool
     */
    protected $minimumConnectTime;

    /**
     * Indicates that the itinerary does not fullfill the Minimum Connect Time requirement. It cannot be sold.
     *
     * @return bool
     */
    public function getMinimumConnectTime(): bool
    {
        return $this->minimumConnectTime;
    }

    /**
     * Indicates that the itinerary does not fullfill the Minimum Connect Time requirement. It cannot be sold.
     *
     * @param bool $minimumConnectTime
     *
     * @return self
     */
    public function setMinimumConnectTime(bool $minimumConnectTime): self
    {
        $this->minimumConnectTime = $minimumConnectTime;

        return $this;
    }
}
