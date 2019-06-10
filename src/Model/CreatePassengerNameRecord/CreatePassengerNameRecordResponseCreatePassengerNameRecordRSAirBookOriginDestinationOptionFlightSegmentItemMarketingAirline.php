<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Ammonkc\SabreApi\Model\CreatePassengerNameRecord;

use Ammonkc\SabreApi\AbstractModel;

class CreatePassengerNameRecordResponseCreatePassengerNameRecordRSAirBookOriginDestinationOptionFlightSegmentItemMarketingAirline extends AbstractModel
{
    /**
     * Airline code.
     *
     * @var string
     */
    protected $code;
    /**
     * Used to return the flight number.
     *
     * @var string
     */
    protected $flightNumber;

    /**
     * Airline code.
     *
     * @return string
     */
    public function getCode(): ?string
    {
        return $this->code;
    }

    /**
     * Airline code.
     *
     * @param string $code
     *
     * @return self
     */
    public function setCode(?string $code): self
    {
        $this->code = $code;

        return $this;
    }

    /**
     * Used to return the flight number.
     *
     * @return string
     */
    public function getFlightNumber(): ?string
    {
        return $this->flightNumber;
    }

    /**
     * Used to return the flight number.
     *
     * @param string $flightNumber
     *
     * @return self
     */
    public function setFlightNumber(?string $flightNumber): self
    {
        $this->flightNumber = $flightNumber;

        return $this;
    }
}