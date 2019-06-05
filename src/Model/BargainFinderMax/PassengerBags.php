<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Ammonkc\SabreApi\Model\BargainFinderMax;

class PassengerBags
{
    /**
     * @var BaggageSequenceOrder[]
     */
    protected $baggageSequenceOrders;
    /**
     * @var string
     */
    protected $code;

    /**
     * @return BaggageSequenceOrder[]
     */
    public function getBaggageSequenceOrders(): ?array
    {
        return $this->baggageSequenceOrders;
    }

    /**
     * @param BaggageSequenceOrder[] $baggageSequenceOrders
     *
     * @return self
     */
    public function setBaggageSequenceOrders(?array $baggageSequenceOrders): self
    {
        $this->baggageSequenceOrders = $baggageSequenceOrders;

        return $this;
    }

    /**
     * @return string
     */
    public function getCode(): ?string
    {
        return $this->code;
    }

    /**
     * @param string $code
     *
     * @return self
     */
    public function setCode(?string $code): self
    {
        $this->code = $code;

        return $this;
    }
}
