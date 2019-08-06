<?php

namespace Ammonkc\SabreApi\Model\BargainFinderMax;

use Ammonkc\SabreApi\AbstractModel;

class PassengerNotAvailableInfoType extends AbstractModel
{
    /**
     * @var string
     */
    protected $passengerType;
    /**
     * @var string
     */
    protected $reason;

    /**
     * @return string
     */
    public function getPassengerType(): string
    {
        return $this->passengerType;
    }

    /**
     * @param string $passengerType
     *
     * @return self
     */
    public function setPassengerType(string $passengerType): self
    {
        $this->passengerType = $passengerType;

        return $this;
    }

    /**
     * @return string
     */
    public function getReason(): string
    {
        return $this->reason;
    }

    /**
     * @param string $reason
     *
     * @return self
     */
    public function setReason(string $reason): self
    {
        $this->reason = $reason;

        return $this;
    }
}
