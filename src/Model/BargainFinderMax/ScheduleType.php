<?php

namespace Ammonkc\SabreApi\Model\BargainFinderMax;

use Ammonkc\SabreApi\AbstractModel;

class ScheduleType extends AbstractModel
{
    /**
     * @var int
     */
    protected $departureDateAdjustment;
    /**
     * @var int
     */
    protected $ref;
    /**
     * @var bool
     */
    protected $requestedStopover;

    /**
     * @return int
     */
    public function getDepartureDateAdjustment(): int
    {
        return $this->departureDateAdjustment;
    }

    /**
     * @param int $departureDateAdjustment
     *
     * @return self
     */
    public function setDepartureDateAdjustment(int $departureDateAdjustment): self
    {
        $this->departureDateAdjustment = $departureDateAdjustment;

        return $this;
    }

    /**
     * @return int
     */
    public function getRef(): int
    {
        return $this->ref;
    }

    /**
     * @param int $ref
     *
     * @return self
     */
    public function setRef(int $ref): self
    {
        $this->ref = $ref;

        return $this;
    }

    /**
     * @return bool
     */
    public function getRequestedStopover(): bool
    {
        return $this->requestedStopover;
    }

    /**
     * @param bool $requestedStopover
     *
     * @return self
     */
    public function setRequestedStopover(bool $requestedStopover): self
    {
        $this->requestedStopover = $requestedStopover;

        return $this;
    }
}
