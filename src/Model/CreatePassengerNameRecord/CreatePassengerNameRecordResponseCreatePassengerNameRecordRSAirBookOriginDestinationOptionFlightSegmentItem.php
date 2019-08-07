<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Ammonkc\SabreApi\Model\CreatePassengerNameRecord;

use Ammonkc\SabreApi\AbstractModel;

class CreatePassengerNameRecordResponseCreatePassengerNameRecordRSAirBookOriginDestinationOptionFlightSegmentItem extends AbstractModel
{
    /**
     * The arrival airport code.
     *
     * @var CreatePassengerNameRecordResponseCreatePassengerNameRecordRSAirBookOriginDestinationOptionFlightSegmentItemDestinationLocation
     */
    protected $destinationLocation;
    /**
     * The marketing airline code.
     *
     * @var CreatePassengerNameRecordResponseCreatePassengerNameRecordRSAirBookOriginDestinationOptionFlightSegmentItemMarketingAirline
     */
    protected $marketingAirline;
    /**
     * Used to return married connection indicators associated with the particular flight segment.
     *
     * @var CreatePassengerNameRecordResponseCreatePassengerNameRecordRSAirBookOriginDestinationOptionFlightSegmentItemMarriageGrp
     */
    protected $marriageGrp;
    /**
     * The departure airport code.
     *
     * @var CreatePassengerNameRecordResponseCreatePassengerNameRecordRSAirBookOriginDestinationOptionFlightSegmentItemOriginLocation
     */
    protected $originLocation;
    /**
     * The date and time of flight arrival.
     *
     * @var string
     */
    protected $arrivalDateTime;
    /**
     * The date and time of flight departure.
     *
     * @var string
     */
    protected $departureDateTime;
    /**
     * Used to indicate whether or not the flight is eligible for eTicket.
     *
     * @var bool
     */
    protected $eTicket;
    /**
     * The flight number.
     *
     * @var string
     */
    protected $flightNumber;
    /**
     * The number of passengers that have been booked during this transaction.
     *
     * @var string
     */
    protected $numberInParty;
    /**
     * The booking class.
     *
     * @var string
     */
    protected $resBookDesigCode;
    /**
     * The flight segment status associated with the booking transaction.
     *
     * @var string
     */
    protected $status;

    /**
     * The arrival airport code.
     *
     * @return CreatePassengerNameRecordResponseCreatePassengerNameRecordRSAirBookOriginDestinationOptionFlightSegmentItemDestinationLocation
     */
    public function getDestinationLocation(): CreatePassengerNameRecordResponseCreatePassengerNameRecordRSAirBookOriginDestinationOptionFlightSegmentItemDestinationLocation
    {
        return $this->destinationLocation;
    }

    /**
     * The arrival airport code.
     *
     * @param CreatePassengerNameRecordResponseCreatePassengerNameRecordRSAirBookOriginDestinationOptionFlightSegmentItemDestinationLocation $destinationLocation
     *
     * @return self
     */
    public function setDestinationLocation(CreatePassengerNameRecordResponseCreatePassengerNameRecordRSAirBookOriginDestinationOptionFlightSegmentItemDestinationLocation $destinationLocation): self
    {
        $this->destinationLocation = $destinationLocation;

        return $this;
    }

    /**
     * The marketing airline code.
     *
     * @return CreatePassengerNameRecordResponseCreatePassengerNameRecordRSAirBookOriginDestinationOptionFlightSegmentItemMarketingAirline
     */
    public function getMarketingAirline(): CreatePassengerNameRecordResponseCreatePassengerNameRecordRSAirBookOriginDestinationOptionFlightSegmentItemMarketingAirline
    {
        return $this->marketingAirline;
    }

    /**
     * The marketing airline code.
     *
     * @param CreatePassengerNameRecordResponseCreatePassengerNameRecordRSAirBookOriginDestinationOptionFlightSegmentItemMarketingAirline $marketingAirline
     *
     * @return self
     */
    public function setMarketingAirline(CreatePassengerNameRecordResponseCreatePassengerNameRecordRSAirBookOriginDestinationOptionFlightSegmentItemMarketingAirline $marketingAirline): self
    {
        $this->marketingAirline = $marketingAirline;

        return $this;
    }

    /**
     * Used to return married connection indicators associated with the particular flight segment.
     *
     * @return CreatePassengerNameRecordResponseCreatePassengerNameRecordRSAirBookOriginDestinationOptionFlightSegmentItemMarriageGrp
     */
    public function getMarriageGrp(): CreatePassengerNameRecordResponseCreatePassengerNameRecordRSAirBookOriginDestinationOptionFlightSegmentItemMarriageGrp
    {
        return $this->marriageGrp;
    }

    /**
     * Used to return married connection indicators associated with the particular flight segment.
     *
     * @param CreatePassengerNameRecordResponseCreatePassengerNameRecordRSAirBookOriginDestinationOptionFlightSegmentItemMarriageGrp $marriageGrp
     *
     * @return self
     */
    public function setMarriageGrp(CreatePassengerNameRecordResponseCreatePassengerNameRecordRSAirBookOriginDestinationOptionFlightSegmentItemMarriageGrp $marriageGrp): self
    {
        $this->marriageGrp = $marriageGrp;

        return $this;
    }

    /**
     * The departure airport code.
     *
     * @return CreatePassengerNameRecordResponseCreatePassengerNameRecordRSAirBookOriginDestinationOptionFlightSegmentItemOriginLocation
     */
    public function getOriginLocation(): CreatePassengerNameRecordResponseCreatePassengerNameRecordRSAirBookOriginDestinationOptionFlightSegmentItemOriginLocation
    {
        return $this->originLocation;
    }

    /**
     * The departure airport code.
     *
     * @param CreatePassengerNameRecordResponseCreatePassengerNameRecordRSAirBookOriginDestinationOptionFlightSegmentItemOriginLocation $originLocation
     *
     * @return self
     */
    public function setOriginLocation(CreatePassengerNameRecordResponseCreatePassengerNameRecordRSAirBookOriginDestinationOptionFlightSegmentItemOriginLocation $originLocation): self
    {
        $this->originLocation = $originLocation;

        return $this;
    }

    /**
     * The date and time of flight arrival.
     *
     * @return string
     */
    public function getArrivalDateTime(): string
    {
        return $this->arrivalDateTime;
    }

    /**
     * The date and time of flight arrival.
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
     * The date and time of flight departure.
     *
     * @return string
     */
    public function getDepartureDateTime(): string
    {
        return $this->departureDateTime;
    }

    /**
     * The date and time of flight departure.
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
     * Used to indicate whether or not the flight is eligible for eTicket.
     *
     * @return bool
     */
    public function getETicket(): bool
    {
        return $this->eTicket;
    }

    /**
     * Used to indicate whether or not the flight is eligible for eTicket.
     *
     * @param bool $eTicket
     *
     * @return self
     */
    public function setETicket(bool $eTicket): self
    {
        $this->eTicket = $eTicket;

        return $this;
    }

    /**
     * The flight number.
     *
     * @return string
     */
    public function getFlightNumber(): string
    {
        return $this->flightNumber;
    }

    /**
     * The flight number.
     *
     * @param string $flightNumber
     *
     * @return self
     */
    public function setFlightNumber(string $flightNumber): self
    {
        $this->flightNumber = $flightNumber;

        return $this;
    }

    /**
     * The number of passengers that have been booked during this transaction.
     *
     * @return string
     */
    public function getNumberInParty(): string
    {
        return $this->numberInParty;
    }

    /**
     * The number of passengers that have been booked during this transaction.
     *
     * @param string $numberInParty
     *
     * @return self
     */
    public function setNumberInParty(string $numberInParty): self
    {
        $this->numberInParty = $numberInParty;

        return $this;
    }

    /**
     * The booking class.
     *
     * @return string
     */
    public function getResBookDesigCode(): string
    {
        return $this->resBookDesigCode;
    }

    /**
     * The booking class.
     *
     * @param string $resBookDesigCode
     *
     * @return self
     */
    public function setResBookDesigCode(string $resBookDesigCode): self
    {
        $this->resBookDesigCode = $resBookDesigCode;

        return $this;
    }

    /**
     * The flight segment status associated with the booking transaction.
     *
     * @return string
     */
    public function getStatus(): string
    {
        return $this->status;
    }

    /**
     * The flight segment status associated with the booking transaction.
     *
     * @param string $status
     *
     * @return self
     */
    public function setStatus(string $status): self
    {
        $this->status = $status;

        return $this;
    }
}
