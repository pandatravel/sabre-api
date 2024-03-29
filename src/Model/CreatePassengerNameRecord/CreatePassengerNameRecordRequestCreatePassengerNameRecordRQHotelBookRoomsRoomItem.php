<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Ammonkc\SabreApi\Model\CreatePassengerNameRecord;

use Ammonkc\SabreApi\AbstractModel;

class CreatePassengerNameRecordRequestCreatePassengerNameRecordRQHotelBookRoomsRoomItem extends AbstractModel
{
    /**
     * Used to pass guest details.
     *
     * @var CreatePassengerNameRecordRequestCreatePassengerNameRecordRQHotelBookRoomsRoomItemGuests
     */
    protected $guests;
    /**
     * Used to pass room extra information.
     *
     * @var CreatePassengerNameRecordRequestCreatePassengerNameRecordRQHotelBookRoomsRoomItemRoomExtras
     */
    protected $roomExtras;
    /**
     * The non smoking indicator.
    By default this is 'true'.
    'false' == smoking and 'true' == non smoking.

     *
     * @var bool
     */
    protected $nonSmoking;
    /**
     * Allows users to request a specific bed type code.
    Used by EAN aggregator.

     *
     * @var int
     */
    protected $bedTypeCode;
    /**
     * Used to allow a customer to request special accessibility rooms.
     *
     * @var int
     */
    protected $accessibilityInformation;
    /**
     * Identifies the number of rooms being booked.
    For multi room bookings please specify '1' for the first room, '2' for the second room, etc.

     *
     * @var int
     */
    protected $roomIndex;

    /**
     * Used to pass guest details.
     *
     * @return CreatePassengerNameRecordRequestCreatePassengerNameRecordRQHotelBookRoomsRoomItemGuests|null
     */
    public function getGuests(): ?CreatePassengerNameRecordRequestCreatePassengerNameRecordRQHotelBookRoomsRoomItemGuests
    {
        return $this->guests;
    }

    /**
     * Used to pass guest details.
     *
     * @param CreatePassengerNameRecordRequestCreatePassengerNameRecordRQHotelBookRoomsRoomItemGuests|null $guests
     *
     * @return self
     */
    public function setGuests(?CreatePassengerNameRecordRequestCreatePassengerNameRecordRQHotelBookRoomsRoomItemGuests $guests): self
    {
        $this->guests = $guests;

        return $this;
    }

    /**
     * Used to pass room extra information.
     *
     * @return CreatePassengerNameRecordRequestCreatePassengerNameRecordRQHotelBookRoomsRoomItemRoomExtras|null
     */
    public function getRoomExtras(): ?CreatePassengerNameRecordRequestCreatePassengerNameRecordRQHotelBookRoomsRoomItemRoomExtras
    {
        return $this->roomExtras;
    }

    /**
     * Used to pass room extra information.
     *
     * @param CreatePassengerNameRecordRequestCreatePassengerNameRecordRQHotelBookRoomsRoomItemRoomExtras|null $roomExtras
     *
     * @return self
     */
    public function setRoomExtras(?CreatePassengerNameRecordRequestCreatePassengerNameRecordRQHotelBookRoomsRoomItemRoomExtras $roomExtras): self
    {
        $this->roomExtras = $roomExtras;

        return $this;
    }

    /**
     * The non smoking indicator.
    By default this is 'true'.
    'false' == smoking and 'true' == non smoking.

     *
     * @return bool|null
     */
    public function getNonSmoking(): ?bool
    {
        return $this->nonSmoking;
    }

    /**
     * The non smoking indicator.
    By default this is 'true'.
    'false' == smoking and 'true' == non smoking.

     *
     * @param bool|null $nonSmoking
     *
     * @return self
     */
    public function setNonSmoking(?bool $nonSmoking): self
    {
        $this->nonSmoking = $nonSmoking;

        return $this;
    }

    /**
     * Allows users to request a specific bed type code.
    Used by EAN aggregator.

     *
     * @return int|null
     */
    public function getBedTypeCode(): ?int
    {
        return $this->bedTypeCode;
    }

    /**
     * Allows users to request a specific bed type code.
    Used by EAN aggregator.

     *
     * @param int|null $bedTypeCode
     *
     * @return self
     */
    public function setBedTypeCode(?int $bedTypeCode): self
    {
        $this->bedTypeCode = $bedTypeCode;

        return $this;
    }

    /**
     * Used to allow a customer to request special accessibility rooms.
     *
     * @return int|null
     */
    public function getAccessibilityInformation(): ?int
    {
        return $this->accessibilityInformation;
    }

    /**
     * Used to allow a customer to request special accessibility rooms.
     *
     * @param int|null $accessibilityInformation
     *
     * @return self
     */
    public function setAccessibilityInformation(?int $accessibilityInformation): self
    {
        $this->accessibilityInformation = $accessibilityInformation;

        return $this;
    }

    /**
     * Identifies the number of rooms being booked.
    For multi room bookings please specify '1' for the first room, '2' for the second room, etc.

     *
     * @return int|null
     */
    public function getRoomIndex(): ?int
    {
        return $this->roomIndex;
    }

    /**
     * Identifies the number of rooms being booked.
    For multi room bookings please specify '1' for the first room, '2' for the second room, etc.

     *
     * @param int|null $roomIndex
     *
     * @return self
     */
    public function setRoomIndex(?int $roomIndex): self
    {
        $this->roomIndex = $roomIndex;

        return $this;
    }
}
