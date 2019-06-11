<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Ammonkc\SabreApi\Model\SeatMap\Model;

class SeatMapRequestEnhancedSeatMapRQ
{
    /**
     * Version of the payload message.
     *
     * @var string
     */
    protected $version;
    /**
     * @var mixed
     */
    protected $priceQuoteCriteria;
    /**
     * @var mixed
     */
    protected $extensionPoint;
    /**
     * @var SeatMapRequestEnhancedSeatMapRQSeatMapQueryEnhanced
     */
    protected $seatMapQueryEnhanced;

    /**
     * Version of the payload message.
     *
     * @return string
     */
    public function getVersion(): ?string
    {
        return $this->version;
    }

    /**
     * Version of the payload message.
     *
     * @param string $version
     *
     * @return self
     */
    public function setVersion(?string $version): self
    {
        $this->version = $version;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getPriceQuoteCriteria()
    {
        return $this->priceQuoteCriteria;
    }

    /**
     * @param mixed $priceQuoteCriteria
     *
     * @return self
     */
    public function setPriceQuoteCriteria($priceQuoteCriteria): self
    {
        $this->priceQuoteCriteria = $priceQuoteCriteria;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getExtensionPoint()
    {
        return $this->extensionPoint;
    }

    /**
     * @param mixed $extensionPoint
     *
     * @return self
     */
    public function setExtensionPoint($extensionPoint): self
    {
        $this->extensionPoint = $extensionPoint;

        return $this;
    }

    /**
     * @return SeatMapRequestEnhancedSeatMapRQSeatMapQueryEnhanced
     */
    public function getSeatMapQueryEnhanced(): ?SeatMapRequestEnhancedSeatMapRQSeatMapQueryEnhanced
    {
        return $this->seatMapQueryEnhanced;
    }

    /**
     * @param SeatMapRequestEnhancedSeatMapRQSeatMapQueryEnhanced $seatMapQueryEnhanced
     *
     * @return self
     */
    public function setSeatMapQueryEnhanced(?SeatMapRequestEnhancedSeatMapRQSeatMapQueryEnhanced $seatMapQueryEnhanced): self
    {
        $this->seatMapQueryEnhanced = $seatMapQueryEnhanced;

        return $this;
    }
}