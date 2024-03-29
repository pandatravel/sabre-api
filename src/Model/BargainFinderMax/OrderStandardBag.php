<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Ammonkc\SabreApi\Model\BargainFinderMax;

use Ammonkc\SabreApi\AbstractModel;

class OrderStandardBag extends AbstractModel
{
    /**
     * @var PassengerBags[]
     */
    protected $passengerBags;

    /**
     * @return PassengerBags[]|null
     */
    public function getPassengerBags(): ?array
    {
        return $this->passengerBags;
    }

    /**
     * @param PassengerBags[]|null $passengerBags
     *
     * @return self
     */
    public function setPassengerBags(?array $passengerBags): self
    {
        $this->passengerBags = $passengerBags;

        return $this;
    }
}
