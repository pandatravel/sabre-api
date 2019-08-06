<?php

namespace Ammonkc\SabreApi\Model\GeoAutocomplete;

use Ammonkc\SabreApi\AbstractModel;

class GeoAutocompleteResponseResponseResponseHeader extends AbstractModel
{
    /**
     * @var float
     */
    protected $status;
    /**
     * @var float
     */
    protected $qTime;

    /**
     * @return float
     */
    public function getStatus(): float
    {
        return $this->status;
    }

    /**
     * @param float $status
     *
     * @return self
     */
    public function setStatus(float $status): self
    {
        $this->status = $status;

        return $this;
    }

    /**
     * @return float
     */
    public function getQTime(): float
    {
        return $this->qTime;
    }

    /**
     * @param float $qTime
     *
     * @return self
     */
    public function setQTime(float $qTime): self
    {
        $this->qTime = $qTime;

        return $this;
    }
}
