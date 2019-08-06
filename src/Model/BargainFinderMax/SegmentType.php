<?php

namespace Ammonkc\SabreApi\Model\BargainFinderMax;

use Ammonkc\SabreApi\AbstractModel;

class SegmentType extends AbstractModel
{
    /**
     * @var bool
     */
    protected $availabilityBreak;
    /**
     * Booking code type.
     *
     * @var string
     */
    protected $bookingCode;
    /**
     * Cabin code.
     *
     * @var string
     */
    protected $cabinCode;
    /**
     * Dual Inventory Code.
     *
     * @var string
     */
    protected $dualInventoryCode;
    /**
     * @var string
     */
    protected $mealCode;
    /**
     * @var int
     */
    protected $seatsAvailable;

    /**
     * @return bool
     */
    public function getAvailabilityBreak(): bool
    {
        return $this->availabilityBreak;
    }

    /**
     * @param bool $availabilityBreak
     *
     * @return self
     */
    public function setAvailabilityBreak(bool $availabilityBreak): self
    {
        $this->availabilityBreak = $availabilityBreak;

        return $this;
    }

    /**
     * Booking code type.
     *
     * @return string
     */
    public function getBookingCode(): string
    {
        return $this->bookingCode;
    }

    /**
     * Booking code type.
     *
     * @param string $bookingCode
     *
     * @return self
     */
    public function setBookingCode(string $bookingCode): self
    {
        $this->bookingCode = $bookingCode;

        return $this;
    }

    /**
     * Cabin code.
     *
     * @return string
     */
    public function getCabinCode(): string
    {
        return $this->cabinCode;
    }

    /**
     * Cabin code.
     *
     * @param string $cabinCode
     *
     * @return self
     */
    public function setCabinCode(string $cabinCode): self
    {
        $this->cabinCode = $cabinCode;

        return $this;
    }

    /**
     * Dual Inventory Code.
     *
     * @return string
     */
    public function getDualInventoryCode(): string
    {
        return $this->dualInventoryCode;
    }

    /**
     * Dual Inventory Code.
     *
     * @param string $dualInventoryCode
     *
     * @return self
     */
    public function setDualInventoryCode(string $dualInventoryCode): self
    {
        $this->dualInventoryCode = $dualInventoryCode;

        return $this;
    }

    /**
     * @return string
     */
    public function getMealCode(): string
    {
        return $this->mealCode;
    }

    /**
     * @param string $mealCode
     *
     * @return self
     */
    public function setMealCode(string $mealCode): self
    {
        $this->mealCode = $mealCode;

        return $this;
    }

    /**
     * @return int
     */
    public function getSeatsAvailable(): int
    {
        return $this->seatsAvailable;
    }

    /**
     * @param int $seatsAvailable
     *
     * @return self
     */
    public function setSeatsAvailable(int $seatsAvailable): self
    {
        $this->seatsAvailable = $seatsAvailable;

        return $this;
    }
}
