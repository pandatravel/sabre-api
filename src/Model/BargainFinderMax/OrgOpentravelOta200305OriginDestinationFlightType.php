<?php

namespace Ammonkc\SabreApi\Model\BargainFinderMax;

use Ammonkc\SabreApi\AbstractModel;

class OrgOpentravelOta200305OriginDestinationFlightType extends AbstractModel
{
    /**
     * Airline information.
     *
     * @var OrgOpentravelOta200305AirlineType
     */
    protected $airline;
    /**
     * Arrival date and time.
     *
     * @var string
     */
    protected $arrivalDateTime;
    /**
     * Booking date and time.
     *
     * @var string
     */
    protected $bookingDateTime;
    /**
     * Class of service.
     *
     * @var string
     */
    protected $classOfService;
    /**
     * Departure date and time.
     *
     * @var string
     */
    protected $departureDateTime;
    /**
     * Flight destination code.
     *
     * @var OrgOpentravelOta200305RequestLocationType
     */
    protected $destinationLocation;
    /**
     * You don't need to specify all of these attributes for a given flight. For some of them it is sufficient to be specified in the last flight of a given fare component. For details, see notes below --- the attributes are annotated with ,,last Flight in Fare Component''.
     *
     * @var OrgOpentravelOta200305FareOptionalDetailsType
     */
    protected $fare;
    /**
     * Specify whether the flight is flown.
     *
     * @var bool
     */
    protected $flown;
    /**
     * Marriage status,Flight type (A: Air Segment, K: ARUNK, O: Open Segment).
     *
     * @var string
     */
    protected $marriageStatus;
    /**
     * @var OrgOpentravelOta200305MileageDisplayType[]
     */
    protected $mileageDisplay;
    /**
     * Flight number.
     *
     * @var float
     */
    protected $number;
    /**
     * Flight destination code.
     *
     * @var OrgOpentravelOta200305RequestLocationType
     */
    protected $originLocation;
    /**
     * @var OrgOpentravelOta200305PlusUpType[]
     */
    protected $plusUp;
    /**
     * Reservation information.
     *
     * @var OrgOpentravelOta200305ReservationType
     */
    protected $reservation;
    /**
     * Specify whether the flight is shopped.
     *
     * @var bool
     */
    protected $shopped;
    /**
     * Side trip information.
     *
     * @var OrgOpentravelOta200305SideTripType
     */
    protected $sideTrip;
    /**
     * @var string
     */
    protected $type;

    /**
     * Airline information.
     *
     * @return OrgOpentravelOta200305AirlineType
     */
    public function getAirline(): OrgOpentravelOta200305AirlineType
    {
        return $this->airline;
    }

    /**
     * Airline information.
     *
     * @param OrgOpentravelOta200305AirlineType $airline
     *
     * @return self
     */
    public function setAirline(OrgOpentravelOta200305AirlineType $airline): self
    {
        $this->airline = $airline;

        return $this;
    }

    /**
     * Arrival date and time.
     *
     * @return string
     */
    public function getArrivalDateTime(): string
    {
        return $this->arrivalDateTime;
    }

    /**
     * Arrival date and time.
     *
     * @param string $arrivalDateTime
     *
     * @return self
     */
    public function setArrivalDateTime(string $arrivalDateTime): self
    {
        $this->arrivalDateTime = $arrivalDateTime;

        return $this;
    }

    /**
     * Booking date and time.
     *
     * @return string
     */
    public function getBookingDateTime(): string
    {
        return $this->bookingDateTime;
    }

    /**
     * Booking date and time.
     *
     * @param string $bookingDateTime
     *
     * @return self
     */
    public function setBookingDateTime(string $bookingDateTime): self
    {
        $this->bookingDateTime = $bookingDateTime;

        return $this;
    }

    /**
     * Class of service.
     *
     * @return string
     */
    public function getClassOfService(): string
    {
        return $this->classOfService;
    }

    /**
     * Class of service.
     *
     * @param string $classOfService
     *
     * @return self
     */
    public function setClassOfService(string $classOfService): self
    {
        $this->classOfService = $classOfService;

        return $this;
    }

    /**
     * Departure date and time.
     *
     * @return string
     */
    public function getDepartureDateTime(): string
    {
        return $this->departureDateTime;
    }

    /**
     * Departure date and time.
     *
     * @param string $departureDateTime
     *
     * @return self
     */
    public function setDepartureDateTime(string $departureDateTime): self
    {
        $this->departureDateTime = $departureDateTime;

        return $this;
    }

    /**
     * Flight destination code.
     *
     * @return OrgOpentravelOta200305RequestLocationType
     */
    public function getDestinationLocation(): OrgOpentravelOta200305RequestLocationType
    {
        return $this->destinationLocation;
    }

    /**
     * Flight destination code.
     *
     * @param OrgOpentravelOta200305RequestLocationType $destinationLocation
     *
     * @return self
     */
    public function setDestinationLocation(OrgOpentravelOta200305RequestLocationType $destinationLocation): self
    {
        $this->destinationLocation = $destinationLocation;

        return $this;
    }

    /**
     * You don't need to specify all of these attributes for a given flight. For some of them it is sufficient to be specified in the last flight of a given fare component. For details, see notes below --- the attributes are annotated with ,,last Flight in Fare Component''.
     *
     * @return OrgOpentravelOta200305FareOptionalDetailsType
     */
    public function getFare(): OrgOpentravelOta200305FareOptionalDetailsType
    {
        return $this->fare;
    }

    /**
     * You don't need to specify all of these attributes for a given flight. For some of them it is sufficient to be specified in the last flight of a given fare component. For details, see notes below --- the attributes are annotated with ,,last Flight in Fare Component''.
     *
     * @param OrgOpentravelOta200305FareOptionalDetailsType $fare
     *
     * @return self
     */
    public function setFare(OrgOpentravelOta200305FareOptionalDetailsType $fare): self
    {
        $this->fare = $fare;

        return $this;
    }

    /**
     * Specify whether the flight is flown.
     *
     * @return bool
     */
    public function getFlown(): bool
    {
        return $this->flown;
    }

    /**
     * Specify whether the flight is flown.
     *
     * @param bool $flown
     *
     * @return self
     */
    public function setFlown(bool $flown): self
    {
        $this->flown = $flown;

        return $this;
    }

    /**
     * Marriage status,Flight type (A: Air Segment, K: ARUNK, O: Open Segment).
     *
     * @return string
     */
    public function getMarriageStatus(): string
    {
        return $this->marriageStatus;
    }

    /**
     * Marriage status,Flight type (A: Air Segment, K: ARUNK, O: Open Segment).
     *
     * @param string $marriageStatus
     *
     * @return self
     */
    public function setMarriageStatus(string $marriageStatus): self
    {
        $this->marriageStatus = $marriageStatus;

        return $this;
    }

    /**
     * @return OrgOpentravelOta200305MileageDisplayType[]
     */
    public function getMileageDisplay(): array
    {
        return $this->mileageDisplay;
    }

    /**
     * @param OrgOpentravelOta200305MileageDisplayType[] $mileageDisplay
     *
     * @return self
     */
    public function setMileageDisplay(array $mileageDisplay): self
    {
        $this->mileageDisplay = $mileageDisplay;

        return $this;
    }

    /**
     * Flight number.
     *
     * @return float
     */
    public function getNumber(): float
    {
        return $this->number;
    }

    /**
     * Flight number.
     *
     * @param float $number
     *
     * @return self
     */
    public function setNumber(float $number): self
    {
        $this->number = $number;

        return $this;
    }

    /**
     * Flight destination code.
     *
     * @return OrgOpentravelOta200305RequestLocationType
     */
    public function getOriginLocation(): OrgOpentravelOta200305RequestLocationType
    {
        return $this->originLocation;
    }

    /**
     * Flight destination code.
     *
     * @param OrgOpentravelOta200305RequestLocationType $originLocation
     *
     * @return self
     */
    public function setOriginLocation(OrgOpentravelOta200305RequestLocationType $originLocation): self
    {
        $this->originLocation = $originLocation;

        return $this;
    }

    /**
     * @return OrgOpentravelOta200305PlusUpType[]
     */
    public function getPlusUp(): array
    {
        return $this->plusUp;
    }

    /**
     * @param OrgOpentravelOta200305PlusUpType[] $plusUp
     *
     * @return self
     */
    public function setPlusUp(array $plusUp): self
    {
        $this->plusUp = $plusUp;

        return $this;
    }

    /**
     * Reservation information.
     *
     * @return OrgOpentravelOta200305ReservationType
     */
    public function getReservation(): OrgOpentravelOta200305ReservationType
    {
        return $this->reservation;
    }

    /**
     * Reservation information.
     *
     * @param OrgOpentravelOta200305ReservationType $reservation
     *
     * @return self
     */
    public function setReservation(OrgOpentravelOta200305ReservationType $reservation): self
    {
        $this->reservation = $reservation;

        return $this;
    }

    /**
     * Specify whether the flight is shopped.
     *
     * @return bool
     */
    public function getShopped(): bool
    {
        return $this->shopped;
    }

    /**
     * Specify whether the flight is shopped.
     *
     * @param bool $shopped
     *
     * @return self
     */
    public function setShopped(bool $shopped): self
    {
        $this->shopped = $shopped;

        return $this;
    }

    /**
     * Side trip information.
     *
     * @return OrgOpentravelOta200305SideTripType
     */
    public function getSideTrip(): OrgOpentravelOta200305SideTripType
    {
        return $this->sideTrip;
    }

    /**
     * Side trip information.
     *
     * @param OrgOpentravelOta200305SideTripType $sideTrip
     *
     * @return self
     */
    public function setSideTrip(OrgOpentravelOta200305SideTripType $sideTrip): self
    {
        $this->sideTrip = $sideTrip;

        return $this;
    }

    /**
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }

    /**
     * @param string $type
     *
     * @return self
     */
    public function setType(string $type): self
    {
        $this->type = $type;

        return $this;
    }
}
