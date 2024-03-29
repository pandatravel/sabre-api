<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Ammonkc\SabreApi\Model\CreatePassengerNameRecord;

use Ammonkc\SabreApi\AbstractModel;

class CreatePassengerNameRecordRequestCreatePassengerNameRecordRQAirBookOriginDestinationInformationFlightSegmentItem extends AbstractModel
{
    /**
     * Used to specify the arrival airport code.
     *
     * @var CreatePassengerNameRecordRequestCreatePassengerNameRecordRQAirBookOriginDestinationInformationFlightSegmentItemDestinationLocation
     */
    protected $destinationLocation;
    /**
     * Used to specify the equipment type of the aircraft being booked.
     *
     * @var CreatePassengerNameRecordRequestCreatePassengerNameRecordRQAirBookOriginDestinationInformationFlightSegmentItemEquipment
     */
    protected $equipment;
    /**
     * Used to specify the marketing airline code.
     *
     * @var CreatePassengerNameRecordRequestCreatePassengerNameRecordRQAirBookOriginDestinationInformationFlightSegmentItemMarketingAirline
     */
    protected $marketingAirline;
    /**
     * Information whether the flight segment is part of a married connection.
    'O' means no. 'I' means yes.

     *
     * @var string
     */
    protected $marriageGrp;
    /**
     * Used to specify the operating airline code.
     *
     * @var CreatePassengerNameRecordRequestCreatePassengerNameRecordRQAirBookOriginDestinationInformationFlightSegmentItemOperatingAirline
     */
    protected $operatingAirline;
    /**
     * Used to specify the departure airport code.
     *
     * @var CreatePassengerNameRecordRequestCreatePassengerNameRecordRQAirBookOriginDestinationInformationFlightSegmentItemOriginLocation
     */
    protected $originLocation;
    /**
     * Used to specify the time and date of flight arrival.
    Please note that the value within this attribute if passed cannot be null.

     *
     * @var string
     */
    protected $arrivalDateTime;
    /**
     * Used to specify the time and date of flight departure.
     *
     * @var string
     */
    protected $departureDateTime;
    /**
     * Used to specify the flight number.
    OPEN can also be passed if the user desires an open space ticket.

     *
     * @var string
     */
    protected $flightNumber;
    /**
     * Used to specify the number of passengers that need to be booked during this transaction.
     *
     * @var string
     */
    protected $numberInParty;
    /**
     * Used to specify the booking class.
     *
     * @var string
     */
    protected $resBookDesigCode;
    /**
     * Used to specify the action code to be used to sell the flight inventory.
    Valid values for 'Status' are: 'NN', 'HL', 'GK', 'QF', 'SA', 'MM', or 'OPEN'.

     *
     * @var string
     */
    protected $status;
    /**
     * Used to send a request to an open system AirBookRQ.
     *
     * @var bool
     */
    protected $instantPurchase;

    /**
     * Used to specify the arrival airport code.
     *
     * @return CreatePassengerNameRecordRequestCreatePassengerNameRecordRQAirBookOriginDestinationInformationFlightSegmentItemDestinationLocation|null
     */
    public function getDestinationLocation(): ?CreatePassengerNameRecordRequestCreatePassengerNameRecordRQAirBookOriginDestinationInformationFlightSegmentItemDestinationLocation
    {
        return $this->destinationLocation;
    }

    /**
     * Used to specify the arrival airport code.
     *
     * @param CreatePassengerNameRecordRequestCreatePassengerNameRecordRQAirBookOriginDestinationInformationFlightSegmentItemDestinationLocation|null $destinationLocation
     *
     * @return self
     */
    public function setDestinationLocation(?CreatePassengerNameRecordRequestCreatePassengerNameRecordRQAirBookOriginDestinationInformationFlightSegmentItemDestinationLocation $destinationLocation): self
    {
        $this->destinationLocation = $destinationLocation;

        return $this;
    }

    /**
     * Used to specify the equipment type of the aircraft being booked.
     *
     * @return CreatePassengerNameRecordRequestCreatePassengerNameRecordRQAirBookOriginDestinationInformationFlightSegmentItemEquipment|null
     */
    public function getEquipment(): ?CreatePassengerNameRecordRequestCreatePassengerNameRecordRQAirBookOriginDestinationInformationFlightSegmentItemEquipment
    {
        return $this->equipment;
    }

    /**
     * Used to specify the equipment type of the aircraft being booked.
     *
     * @param CreatePassengerNameRecordRequestCreatePassengerNameRecordRQAirBookOriginDestinationInformationFlightSegmentItemEquipment|null $equipment
     *
     * @return self
     */
    public function setEquipment(?CreatePassengerNameRecordRequestCreatePassengerNameRecordRQAirBookOriginDestinationInformationFlightSegmentItemEquipment $equipment): self
    {
        $this->equipment = $equipment;

        return $this;
    }

    /**
     * Used to specify the marketing airline code.
     *
     * @return CreatePassengerNameRecordRequestCreatePassengerNameRecordRQAirBookOriginDestinationInformationFlightSegmentItemMarketingAirline|null
     */
    public function getMarketingAirline(): ?CreatePassengerNameRecordRequestCreatePassengerNameRecordRQAirBookOriginDestinationInformationFlightSegmentItemMarketingAirline
    {
        return $this->marketingAirline;
    }

    /**
     * Used to specify the marketing airline code.
     *
     * @param CreatePassengerNameRecordRequestCreatePassengerNameRecordRQAirBookOriginDestinationInformationFlightSegmentItemMarketingAirline|null $marketingAirline
     *
     * @return self
     */
    public function setMarketingAirline(?CreatePassengerNameRecordRequestCreatePassengerNameRecordRQAirBookOriginDestinationInformationFlightSegmentItemMarketingAirline $marketingAirline): self
    {
        $this->marketingAirline = $marketingAirline;

        return $this;
    }

    /**
     * Information whether the flight segment is part of a married connection.
    'O' means no. 'I' means yes.

     *
     * @return string|null
     */
    public function getMarriageGrp(): ?string
    {
        return $this->marriageGrp;
    }

    /**
     * Information whether the flight segment is part of a married connection.
    'O' means no. 'I' means yes.

     *
     * @param string|null $marriageGrp
     *
     * @return self
     */
    public function setMarriageGrp(?string $marriageGrp): self
    {
        $this->marriageGrp = $marriageGrp;

        return $this;
    }

    /**
     * Used to specify the operating airline code.
     *
     * @return CreatePassengerNameRecordRequestCreatePassengerNameRecordRQAirBookOriginDestinationInformationFlightSegmentItemOperatingAirline|null
     */
    public function getOperatingAirline(): ?CreatePassengerNameRecordRequestCreatePassengerNameRecordRQAirBookOriginDestinationInformationFlightSegmentItemOperatingAirline
    {
        return $this->operatingAirline;
    }

    /**
     * Used to specify the operating airline code.
     *
     * @param CreatePassengerNameRecordRequestCreatePassengerNameRecordRQAirBookOriginDestinationInformationFlightSegmentItemOperatingAirline|null $operatingAirline
     *
     * @return self
     */
    public function setOperatingAirline(?CreatePassengerNameRecordRequestCreatePassengerNameRecordRQAirBookOriginDestinationInformationFlightSegmentItemOperatingAirline $operatingAirline): self
    {
        $this->operatingAirline = $operatingAirline;

        return $this;
    }

    /**
     * Used to specify the departure airport code.
     *
     * @return CreatePassengerNameRecordRequestCreatePassengerNameRecordRQAirBookOriginDestinationInformationFlightSegmentItemOriginLocation|null
     */
    public function getOriginLocation(): ?CreatePassengerNameRecordRequestCreatePassengerNameRecordRQAirBookOriginDestinationInformationFlightSegmentItemOriginLocation
    {
        return $this->originLocation;
    }

    /**
     * Used to specify the departure airport code.
     *
     * @param CreatePassengerNameRecordRequestCreatePassengerNameRecordRQAirBookOriginDestinationInformationFlightSegmentItemOriginLocation|null $originLocation
     *
     * @return self
     */
    public function setOriginLocation(?CreatePassengerNameRecordRequestCreatePassengerNameRecordRQAirBookOriginDestinationInformationFlightSegmentItemOriginLocation $originLocation): self
    {
        $this->originLocation = $originLocation;

        return $this;
    }

    /**
     * Used to specify the time and date of flight arrival.
    Please note that the value within this attribute if passed cannot be null.

     *
     * @return string|null
     */
    public function getArrivalDateTime(): ?string
    {
        return $this->arrivalDateTime;
    }

    /**
     * Used to specify the time and date of flight arrival.
    Please note that the value within this attribute if passed cannot be null.

     *
     * @param string|null $arrivalDateTime
     *
     * @return self
     */
    public function setArrivalDateTime(?string $arrivalDateTime): self
    {
        $this->arrivalDateTime = $arrivalDateTime;

        return $this;
    }

    /**
     * Used to specify the time and date of flight departure.
     *
     * @return string|null
     */
    public function getDepartureDateTime(): ?string
    {
        return $this->departureDateTime;
    }

    /**
     * Used to specify the time and date of flight departure.
     *
     * @param string|null $departureDateTime
     *
     * @return self
     */
    public function setDepartureDateTime(?string $departureDateTime): self
    {
        $this->departureDateTime = $departureDateTime;

        return $this;
    }

    /**
     * Used to specify the flight number.
    OPEN can also be passed if the user desires an open space ticket.

     *
     * @return string|null
     */
    public function getFlightNumber(): ?string
    {
        return $this->flightNumber;
    }

    /**
     * Used to specify the flight number.
    OPEN can also be passed if the user desires an open space ticket.

     *
     * @param string|null $flightNumber
     *
     * @return self
     */
    public function setFlightNumber(?string $flightNumber): self
    {
        $this->flightNumber = $flightNumber;

        return $this;
    }

    /**
     * Used to specify the number of passengers that need to be booked during this transaction.
     *
     * @return string|null
     */
    public function getNumberInParty(): ?string
    {
        return $this->numberInParty;
    }

    /**
     * Used to specify the number of passengers that need to be booked during this transaction.
     *
     * @param string|null $numberInParty
     *
     * @return self
     */
    public function setNumberInParty(?string $numberInParty): self
    {
        $this->numberInParty = $numberInParty;

        return $this;
    }

    /**
     * Used to specify the booking class.
     *
     * @return string|null
     */
    public function getResBookDesigCode(): ?string
    {
        return $this->resBookDesigCode;
    }

    /**
     * Used to specify the booking class.
     *
     * @param string|null $resBookDesigCode
     *
     * @return self
     */
    public function setResBookDesigCode(?string $resBookDesigCode): self
    {
        $this->resBookDesigCode = $resBookDesigCode;

        return $this;
    }

    /**
     * Used to specify the action code to be used to sell the flight inventory.
    Valid values for 'Status' are: 'NN', 'HL', 'GK', 'QF', 'SA', 'MM', or 'OPEN'.

     *
     * @return string|null
     */
    public function getStatus(): ?string
    {
        return $this->status;
    }

    /**
     * Used to specify the action code to be used to sell the flight inventory.
    Valid values for 'Status' are: 'NN', 'HL', 'GK', 'QF', 'SA', 'MM', or 'OPEN'.

     *
     * @param string|null $status
     *
     * @return self
     */
    public function setStatus(?string $status): self
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Used to send a request to an open system AirBookRQ.
     *
     * @return bool|null
     */
    public function getInstantPurchase(): ?bool
    {
        return $this->instantPurchase;
    }

    /**
     * Used to send a request to an open system AirBookRQ.
     *
     * @param bool|null $instantPurchase
     *
     * @return self
     */
    public function setInstantPurchase(?bool $instantPurchase): self
    {
        $this->instantPurchase = $instantPurchase;

        return $this;
    }
}
