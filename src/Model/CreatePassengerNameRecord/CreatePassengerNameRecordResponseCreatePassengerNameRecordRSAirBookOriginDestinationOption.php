<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Ammonkc\SabreApi\Model\CreatePassengerNameRecord;

use Ammonkc\SabreApi\AbstractModel;

class CreatePassengerNameRecordResponseCreatePassengerNameRecordRSAirBookOriginDestinationOption extends AbstractModel
{
    /**
     * A single flight segment details.
     *
     * @var CreatePassengerNameRecordResponseCreatePassengerNameRecordRSAirBookOriginDestinationOptionFlightSegmentItem[]
     */
    protected $flightSegment;

    /**
     * A single flight segment details.
     *
     * @return CreatePassengerNameRecordResponseCreatePassengerNameRecordRSAirBookOriginDestinationOptionFlightSegmentItem[]|null
     */
    public function getFlightSegment(): ?array
    {
        return $this->flightSegment;
    }

    /**
     * A single flight segment details.
     *
     * @param CreatePassengerNameRecordResponseCreatePassengerNameRecordRSAirBookOriginDestinationOptionFlightSegmentItem[]|null $flightSegment
     *
     * @return self
     */
    public function setFlightSegment(?array $flightSegment): self
    {
        $this->flightSegment = $flightSegment;

        return $this;
    }
}
