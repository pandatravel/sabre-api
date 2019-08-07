<?php

namespace Ammonkc\SabreApi\Model\BargainFinderMax;

use Ammonkc\SabreApi\AbstractModel;

class PassengerInfoListElementType extends AbstractModel
{
    /**
     * @var PassengerInformationType
     */
    protected $passengerInfo;
    /**
     * @var PassengerNotAvailableInfoType
     */
    protected $passengerNotAvailableInfo;

    /**
     * @return PassengerInformationType
     */
    public function getPassengerInfo(): ?PassengerInformationType
    {
        return $this->passengerInfo;
    }

    /**
     * @param PassengerInformationType $passengerInfo
     *
     * @return self
     */
    public function setPassengerInfo(?PassengerInformationType $passengerInfo): self
    {
        $this->passengerInfo = $passengerInfo;

        return $this;
    }

    /**
     * @return PassengerNotAvailableInfoType
     */
    public function getPassengerNotAvailableInfo(): ?PassengerNotAvailableInfoType
    {
        return $this->passengerNotAvailableInfo;
    }

    /**
     * @param PassengerNotAvailableInfoType $passengerNotAvailableInfo
     *
     * @return self
     */
    public function setPassengerNotAvailableInfo(?PassengerNotAvailableInfoType $passengerNotAvailableInfo): self
    {
        $this->passengerNotAvailableInfo = $passengerNotAvailableInfo;

        return $this;
    }
}
