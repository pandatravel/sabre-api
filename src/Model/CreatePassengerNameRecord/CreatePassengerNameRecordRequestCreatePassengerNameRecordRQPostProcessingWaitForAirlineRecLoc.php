<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Ammonkc\SabreApi\Model\CreatePassengerNameRecord;

use Ammonkc\SabreApi\AbstractModel;

class CreatePassengerNameRecordRequestCreatePassengerNameRecordRQPostProcessingWaitForAirlineRecLoc extends AbstractModel
{
    /**
     * The duration of the wait interval.
    The maximum time that can be set is 60 seconds.
    This applies to PostBookingHKValidation, WaitForAirlineRecLoc or both.

     *
     * @var int
     */
    protected $waitInterval;
    /**
     * The number of attempts that the reservation will be re-displayed.
    If both 'PostBookingHKValidation' and 'WaitForAirlineRecLoc' have defined 'waitInterval' then the highest number will be used for both.

     *
     * @var int
     */
    protected $numAttempts;

    /**
     * The duration of the wait interval.
    The maximum time that can be set is 60 seconds.
    This applies to PostBookingHKValidation, WaitForAirlineRecLoc or both.

     *
     * @return int|null
     */
    public function getWaitInterval(): ?int
    {
        return $this->waitInterval;
    }

    /**
     * The duration of the wait interval.
    The maximum time that can be set is 60 seconds.
    This applies to PostBookingHKValidation, WaitForAirlineRecLoc or both.

     *
     * @param int|null $waitInterval
     *
     * @return self
     */
    public function setWaitInterval(?int $waitInterval): self
    {
        $this->waitInterval = $waitInterval;

        return $this;
    }

    /**
     * The number of attempts that the reservation will be re-displayed.
    If both 'PostBookingHKValidation' and 'WaitForAirlineRecLoc' have defined 'waitInterval' then the highest number will be used for both.

     *
     * @return int|null
     */
    public function getNumAttempts(): ?int
    {
        return $this->numAttempts;
    }

    /**
     * The number of attempts that the reservation will be re-displayed.
    If both 'PostBookingHKValidation' and 'WaitForAirlineRecLoc' have defined 'waitInterval' then the highest number will be used for both.

     *
     * @param int|null $numAttempts
     *
     * @return self
     */
    public function setNumAttempts(?int $numAttempts): self
    {
        $this->numAttempts = $numAttempts;

        return $this;
    }
}
