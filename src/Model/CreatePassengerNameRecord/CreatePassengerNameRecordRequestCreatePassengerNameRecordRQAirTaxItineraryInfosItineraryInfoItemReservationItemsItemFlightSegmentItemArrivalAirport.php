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
     * Airport code.
     *
     * @var string
     */
    protected $locationCode;
    /**
     * Attribute is not in use.
     *
     * @var string
     */
    protected $codeContext;

    /**
     * Airport code.
     *
     * @return string
     */
    public function getLocationCode(): ?string
    {
        return $this->locationCode;
    }

    /**
     * Airport code.
     *
     * @param string $locationCode
     *
     * @return self
     */
    public function setLocationCode(?string $locationCode): self
    {
        $this->locationCode = $locationCode;

        return $this;
    }

    /**
     * Attribute is not in use.
     *
     * @return string
     */
    public function getCodeContext(): ?string
    {
        return $this->codeContext;
    }

    /**
     * Attribute is not in use.
     *
     * @param string $codeContext
     *
     * @return self
     */
    public function setCodeContext(?string $codeContext): self
    {
        $this->codeContext = $codeContext;

        return $this;
    }
}
