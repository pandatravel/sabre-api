<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Ammonkc\SabreApi\Model\CreatePassengerNameRecord;

use Ammonkc\SabreApi\AbstractModel;

class CreatePassengerNameRecordRequestCreatePassengerNameRecordRQAirTaxItineraryInfosItineraryInfoItemReservationItemsItemAirFareInfoPTCFareBreakdown extends AbstractModel
{
    /**
     * The 'FareBasisCode' information is needed for YQ/YR tax information.
     *
     * @var string
     */
    protected $fareBasisCode;
    /**
     * The passenger fare.
     *
     * @var CreatePassengerNameRecordRequestCreatePassengerNameRecordRQAirTaxItineraryInfosItineraryInfoItemReservationItemsItemAirFareInfoPTCFareBreakdownPassengerFare
     */
    protected $passengerFare;
    /**
     * The passenger information.
     *
     * @var CreatePassengerNameRecordRequestCreatePassengerNameRecordRQAirTaxItineraryInfosItineraryInfoItemReservationItemsItemAirFareInfoPTCFareBreakdownPassengerType
     */
    protected $passengerType;

    /**
     * The 'FareBasisCode' information is needed for YQ/YR tax information.
     *
     * @return string|null
     */
    public function getFareBasisCode(): ?string
    {
        return $this->fareBasisCode;
    }

    /**
     * The 'FareBasisCode' information is needed for YQ/YR tax information.
     *
     * @param string|null $fareBasisCode
     *
     * @return self
     */
    public function setFareBasisCode(?string $fareBasisCode): self
    {
        $this->fareBasisCode = $fareBasisCode;

        return $this;
    }

    /**
     * The passenger fare.
     *
     * @return CreatePassengerNameRecordRequestCreatePassengerNameRecordRQAirTaxItineraryInfosItineraryInfoItemReservationItemsItemAirFareInfoPTCFareBreakdownPassengerFare|null
     */
    public function getPassengerFare(): ?CreatePassengerNameRecordRequestCreatePassengerNameRecordRQAirTaxItineraryInfosItineraryInfoItemReservationItemsItemAirFareInfoPTCFareBreakdownPassengerFare
    {
        return $this->passengerFare;
    }

    /**
     * The passenger fare.
     *
     * @param CreatePassengerNameRecordRequestCreatePassengerNameRecordRQAirTaxItineraryInfosItineraryInfoItemReservationItemsItemAirFareInfoPTCFareBreakdownPassengerFare|null $passengerFare
     *
     * @return self
     */
    public function setPassengerFare(?CreatePassengerNameRecordRequestCreatePassengerNameRecordRQAirTaxItineraryInfosItineraryInfoItemReservationItemsItemAirFareInfoPTCFareBreakdownPassengerFare $passengerFare): self
    {
        $this->passengerFare = $passengerFare;

        return $this;
    }

    /**
     * The passenger information.
     *
     * @return CreatePassengerNameRecordRequestCreatePassengerNameRecordRQAirTaxItineraryInfosItineraryInfoItemReservationItemsItemAirFareInfoPTCFareBreakdownPassengerType|null
     */
    public function getPassengerType(): ?CreatePassengerNameRecordRequestCreatePassengerNameRecordRQAirTaxItineraryInfosItineraryInfoItemReservationItemsItemAirFareInfoPTCFareBreakdownPassengerType
    {
        return $this->passengerType;
    }

    /**
     * The passenger information.
     *
     * @param CreatePassengerNameRecordRequestCreatePassengerNameRecordRQAirTaxItineraryInfosItineraryInfoItemReservationItemsItemAirFareInfoPTCFareBreakdownPassengerType|null $passengerType
     *
     * @return self
     */
    public function setPassengerType(?CreatePassengerNameRecordRequestCreatePassengerNameRecordRQAirTaxItineraryInfosItineraryInfoItemReservationItemsItemAirFareInfoPTCFareBreakdownPassengerType $passengerType): self
    {
        $this->passengerType = $passengerType;

        return $this;
    }
}
