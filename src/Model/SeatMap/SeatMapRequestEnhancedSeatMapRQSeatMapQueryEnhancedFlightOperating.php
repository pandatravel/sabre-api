<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Ammonkc\SabreApi\Model\SeatMap\Model;

class SeatMapRequestEnhancedSeatMapRQSeatMapQueryEnhancedFlightOperating
{
    /**
     * By default, the carrier is assumed from the transaction context.
     *
     * @var string
     */
    protected $carrier;
    /**
     * @var string
     */
    protected $content;
    /**
     * Flight Identifier Suffix is used by operations to differentiate flights with same flight number operating on the same date.
     *
     * @var string
     */
    protected $suffix;

    /**
     * By default, the carrier is assumed from the transaction context.
     *
     * @return string
     */
    public function getCarrier(): ?string
    {
        return $this->carrier;
    }

    /**
     * By default, the carrier is assumed from the transaction context.
     *
     * @param string $carrier
     *
     * @return self
     */
    public function setCarrier(?string $carrier): self
    {
        $this->carrier = $carrier;

        return $this;
    }

    /**
     * @return string
     */
    public function getContent(): ?string
    {
        return $this->content;
    }

    /**
     * @param string $content
     *
     * @return self
     */
    public function setContent(?string $content): self
    {
        $this->content = $content;

        return $this;
    }

    /**
     * Flight Identifier Suffix is used by operations to differentiate flights with same flight number operating on the same date.
     *
     * @return string
     */
    public function getSuffix(): ?string
    {
        return $this->suffix;
    }

    /**
     * Flight Identifier Suffix is used by operations to differentiate flights with same flight number operating on the same date.
     *
     * @param string $suffix
     *
     * @return self
     */
    public function setSuffix(?string $suffix): self
    {
        $this->suffix = $suffix;

        return $this;
    }
}