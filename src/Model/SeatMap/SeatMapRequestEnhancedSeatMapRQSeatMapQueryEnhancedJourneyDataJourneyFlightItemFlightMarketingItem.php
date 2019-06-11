<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Ammonkc\SabreApi\Model\SeatMap\Model;

class SeatMapRequestEnhancedSeatMapRQSeatMapQueryEnhancedJourneyDataJourneyFlightItemFlightMarketingItem
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
}
