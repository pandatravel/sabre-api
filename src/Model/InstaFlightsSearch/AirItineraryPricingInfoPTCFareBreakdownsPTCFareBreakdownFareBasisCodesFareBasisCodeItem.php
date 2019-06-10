<?php

namespace Ammonkc\SabreApi\Model\InstaFlightsSearch;

use Ammonkc\SabreApi\AbstractModel;

class AirItineraryPricingInfoPTCFareBreakdownsPTCFareBreakdownFareBasisCodesFareBasisCodeItem extends AbstractModel
{
    /**
     * Booking code of the fare basis code.

    1 character.

     *
     * @var string
     */
    protected $bookingCode;
    /**
     * @var string
     */
    protected $departureAirportCode;
    /**
     * @var bool
     */
    protected $availabilityBreak;
    /**
     * @var string
     */
    protected $arrivalAirportCode;
    /**
     * The fare basis code.
     *
     * @var string
     */
    protected $content;

    /**
     * Booking code of the fare basis code.

    1 character.

     *
     * @return string
     */
    public function getBookingCode(): ?string
    {
        return $this->bookingCode;
    }

    /**
     * Booking code of the fare basis code.

    1 character.

     *
     * @param string $bookingCode
     *
     * @return self
     */
    public function setBookingCode(?string $bookingCode): self
    {
        $this->bookingCode = $bookingCode;

        return $this;
    }

    /**
     * @return string
     */
    public function getDepartureAirportCode(): ?string
    {
        return $this->departureAirportCode;
    }

    /**
     * @param string $departureAirportCode
     *
     * @return self
     */
    public function setDepartureAirportCode(?string $departureAirportCode): self
    {
        $this->departureAirportCode = $departureAirportCode;

        return $this;
    }

    /**
     * @return bool
     */
    public function getAvailabilityBreak(): ?bool
    {
        return $this->availabilityBreak;
    }

    /**
     * @param bool $availabilityBreak
     *
     * @return self
     */
    public function setAvailabilityBreak(?bool $availabilityBreak): self
    {
        $this->availabilityBreak = $availabilityBreak;

        return $this;
    }

    /**
     * @return string
     */
    public function getArrivalAirportCode(): ?string
    {
        return $this->arrivalAirportCode;
    }

    /**
     * @param string $arrivalAirportCode
     *
     * @return self
     */
    public function setArrivalAirportCode(?string $arrivalAirportCode): self
    {
        $this->arrivalAirportCode = $arrivalAirportCode;

        return $this;
    }

    /**
     * The fare basis code.
     *
     * @return string
     */
    public function getContent(): ?string
    {
        return $this->content;
    }

    /**
     * The fare basis code.
     *
     * @param string $content
     *
     * @return self
     */
    public function setContent(?string $content): self
    {
        $this->content = $content;

        return $this;
    }
}
