<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Ammonkc\SabreApi\Model\DestinationFinder;

use Ammonkc\SabreApi\AbstractModel;

class DestinationFinderResponseFareInfoItemLowestNonStopFare extends AbstractModel
{
    /**
     * If more than one airline offers the lowest overall fare, then multiple airline codes will be returned.
     *
     * @var string[]
     */
    protected $airlineCodes;
    /**
     * The nonstop lead fare from the Sabre cache for the specified origin.
     *
     * @var float
     */
    protected $fare;

    /**
     * If more than one airline offers the lowest overall fare, then multiple airline codes will be returned.
     *
     * @return string[]
     */
    public function getAirlineCodes(): ?array
    {
        return $this->airlineCodes;
    }

    /**
     * If more than one airline offers the lowest overall fare, then multiple airline codes will be returned.
     *
     * @param string[] $airlineCodes
     *
     * @return self
     */
    public function setAirlineCodes(?array $airlineCodes): self
    {
        $this->airlineCodes = $airlineCodes;

        return $this;
    }

    /**
     * The nonstop lead fare from the Sabre cache for the specified origin.
     *
     * @return float
     */
    public function getFare(): ?float
    {
        return $this->fare;
    }

    /**
     * The nonstop lead fare from the Sabre cache for the specified origin.
     *
     * @param float $fare
     *
     * @return self
     */
    public function setFare(?float $fare): self
    {
        $this->fare = $fare;

        return $this;
    }
}