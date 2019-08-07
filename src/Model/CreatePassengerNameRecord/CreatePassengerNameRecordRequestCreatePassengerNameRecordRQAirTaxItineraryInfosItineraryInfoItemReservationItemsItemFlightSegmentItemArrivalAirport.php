<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Ammonkc\SabreApi\Model\CreatePassengerNameRecord;

use Ammonkc\SabreApi\AbstractModel;

class CreatePassengerNameRecordRequestCreatePassengerNameRecordRQAirTaxItineraryInfosItineraryInfoItemReservationItemsItemFlightSegmentItemArrivalAirport extends AbstractModel
{
    /**
     * 'LocationCode' is used to describe the code of the airport the traveler will arrive in.
     *
     * @var string
     */
    protected $locationCode;
    /**
     * 'CodeContext' is not used.
     *
     * @var string
     */
    protected $codeContext;

    /**
     * 'LocationCode' is used to describe the code of the airport the traveler will arrive in.
     *
     * @return string
     */
    public function getLocationCode(): string
    {
        return $this->locationCode;
    }

    /**
     * 'LocationCode' is used to describe the code of the airport the traveler will arrive in.
     *
     * @param string $locationCode
     *
     * @return self
     */
    public function setLocationCode(string $locationCode): self
    {
        $this->locationCode = $locationCode;

        return $this;
    }

    /**
     * 'CodeContext' is not used.
     *
     * @return string
     */
    public function getCodeContext(): string
    {
        return $this->codeContext;
    }

    /**
     * 'CodeContext' is not used.
     *
     * @param string $codeContext
     *
     * @return self
     */
    public function setCodeContext(string $codeContext): self
    {
        $this->codeContext = $codeContext;

        return $this;
    }
}
