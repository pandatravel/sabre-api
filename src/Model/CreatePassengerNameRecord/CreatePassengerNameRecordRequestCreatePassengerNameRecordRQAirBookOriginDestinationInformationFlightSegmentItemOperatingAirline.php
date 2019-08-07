<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Ammonkc\SabreApi\Model\CreatePassengerNameRecord;

use Ammonkc\SabreApi\AbstractModel;

class CreatePassengerNameRecordRequestCreatePassengerNameRecordRQAirBookOriginDestinationInformationFlightSegmentItemOperatingAirline extends AbstractModel
{
    /**
     * 'Code' is used to describe the code of the carrier operating the flight.
     *
     * @var string
     */
    protected $code;

    /**
     * 'Code' is used to describe the code of the carrier operating the flight.
     *
     * @return string|null
     */
    public function getCode(): ?string
    {
        return $this->code;
    }

    /**
     * 'Code' is used to describe the code of the carrier operating the flight.
     *
     * @param string|null $code
     *
     * @return self
     */
    public function setCode(?string $code): self
    {
        $this->code = $code;

        return $this;
    }
}
