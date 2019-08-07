<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Ammonkc\SabreApi\Model\CreatePassengerNameRecord;

use Ammonkc\SabreApi\AbstractModel;

class CreatePassengerNameRecordRequestCreatePassengerNameRecordRQAirTaxItineraryInfosItineraryInfoItemReservationItemsItemAirFareInfoPTCFareBreakdownPassengerFare extends AbstractModel
{
    /**
     * The base fare.
     *
     * @var CreatePassengerNameRecordRequestCreatePassengerNameRecordRQAirTaxItineraryInfosItineraryInfoItemReservationItemsItemAirFareInfoPTCFareBreakdownPassengerFareBaseFare
     */
    protected $baseFare;
    /**
     * The Equivalent fare.
     *
     * @var CreatePassengerNameRecordRequestCreatePassengerNameRecordRQAirTaxItineraryInfosItineraryInfoItemReservationItemsItemAirFareInfoPTCFareBreakdownPassengerFareEquivFare
     */
    protected $equivFare;
    /**
     * The Ancillary service code.
     *
     * @var string
     */
    protected $ancillaryServiceCode;

    /**
     * The base fare.
     *
     * @return CreatePassengerNameRecordRequestCreatePassengerNameRecordRQAirTaxItineraryInfosItineraryInfoItemReservationItemsItemAirFareInfoPTCFareBreakdownPassengerFareBaseFare
     */
    public function getBaseFare(): CreatePassengerNameRecordRequestCreatePassengerNameRecordRQAirTaxItineraryInfosItineraryInfoItemReservationItemsItemAirFareInfoPTCFareBreakdownPassengerFareBaseFare
    {
        return $this->baseFare;
    }

    /**
     * The base fare.
     *
     * @param CreatePassengerNameRecordRequestCreatePassengerNameRecordRQAirTaxItineraryInfosItineraryInfoItemReservationItemsItemAirFareInfoPTCFareBreakdownPassengerFareBaseFare $baseFare
     *
     * @return self
     */
    public function setBaseFare(CreatePassengerNameRecordRequestCreatePassengerNameRecordRQAirTaxItineraryInfosItineraryInfoItemReservationItemsItemAirFareInfoPTCFareBreakdownPassengerFareBaseFare $baseFare): self
    {
        $this->baseFare = $baseFare;

        return $this;
    }

    /**
     * The Equivalent fare.
     *
     * @return CreatePassengerNameRecordRequestCreatePassengerNameRecordRQAirTaxItineraryInfosItineraryInfoItemReservationItemsItemAirFareInfoPTCFareBreakdownPassengerFareEquivFare
     */
    public function getEquivFare(): CreatePassengerNameRecordRequestCreatePassengerNameRecordRQAirTaxItineraryInfosItineraryInfoItemReservationItemsItemAirFareInfoPTCFareBreakdownPassengerFareEquivFare
    {
        return $this->equivFare;
    }

    /**
     * The Equivalent fare.
     *
     * @param CreatePassengerNameRecordRequestCreatePassengerNameRecordRQAirTaxItineraryInfosItineraryInfoItemReservationItemsItemAirFareInfoPTCFareBreakdownPassengerFareEquivFare $equivFare
     *
     * @return self
     */
    public function setEquivFare(CreatePassengerNameRecordRequestCreatePassengerNameRecordRQAirTaxItineraryInfosItineraryInfoItemReservationItemsItemAirFareInfoPTCFareBreakdownPassengerFareEquivFare $equivFare): self
    {
        $this->equivFare = $equivFare;

        return $this;
    }

    /**
     * The Ancillary service code.
     *
     * @return string
     */
    public function getAncillaryServiceCode(): string
    {
        return $this->ancillaryServiceCode;
    }

    /**
     * The Ancillary service code.
     *
     * @param string $ancillaryServiceCode
     *
     * @return self
     */
    public function setAncillaryServiceCode(string $ancillaryServiceCode): self
    {
        $this->ancillaryServiceCode = $ancillaryServiceCode;

        return $this;
    }
}
