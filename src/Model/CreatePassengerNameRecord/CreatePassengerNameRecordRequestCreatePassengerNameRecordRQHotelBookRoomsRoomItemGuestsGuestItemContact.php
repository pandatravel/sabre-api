<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Ammonkc\SabreApi\Model\CreatePassengerNameRecord;

use Ammonkc\SabreApi\AbstractModel;

class CreatePassengerNameRecordRequestCreatePassengerNameRecordRQHotelBookRoomsRoomItemGuestsGuestItemContact extends AbstractModel
{
    /**
     * Main telephone number.
     *
     * @var string
     */
    protected $phone;
    /**
     * Mobile number.
     *
     * @var string
     */
    protected $mobile;
    /**
     * Fax number.
     *
     * @var string
     */
    protected $fax;

    /**
     * Main telephone number.
     *
     * @return string
     */
    public function getPhone(): ?string
    {
        return $this->phone;
    }

    /**
     * Main telephone number.
     *
     * @param string $phone
     *
     * @return self
     */
    public function setPhone(?string $phone): self
    {
        $this->phone = $phone;

        return $this;
    }

    /**
     * Mobile number.
     *
     * @return string
     */
    public function getMobile(): ?string
    {
        return $this->mobile;
    }

    /**
     * Mobile number.
     *
     * @param string $mobile
     *
     * @return self
     */
    public function setMobile(?string $mobile): self
    {
        $this->mobile = $mobile;

        return $this;
    }

    /**
     * Fax number.
     *
     * @return string
     */
    public function getFax(): ?string
    {
        return $this->fax;
    }

    /**
     * Fax number.
     *
     * @param string $fax
     *
     * @return self
     */
    public function setFax(?string $fax): self
    {
        $this->fax = $fax;

        return $this;
    }
}