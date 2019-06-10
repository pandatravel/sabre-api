<?php

namespace Ammonkc\SabreApi\Model\BargainFinderMax;

use Ammonkc\SabreApi\AbstractModel;

class OrderStandardBag extends AbstractModel
{
    /**
     * @var PassengerBags[]
     */
    protected $passengerBags;

    /**
     * @return PassengerBags[]
     */
    public function getPassengerBags(): ?array
    {
        return $this->passengerBags;
    }

    /**
     * @param PassengerBags[] $passengerBags
     *
     * @return self
     */
    public function setPassengerBags(?array $passengerBags): self
    {
        $this->passengerBags = $passengerBags;

        return $this;
    }
}
