<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Ammonkc\SabreApi\Model\SeatMap\Model;

class SeatMapRequestEnhancedSeatMapRQSeatMapQueryEnhancedFareAvailQualifiersItem
{
    /**
     * Pricing Passenger Type, for instance "GOV", "MIL", "ADT", "CNN".
     *
     * @var string
     */
    protected $passengerType;
    /**
     * PNR record Locator of passenger or group.
     *
     * @var string
     */
    protected $pNRLoc;
    /**
     * Fare Basis Code for the filed fare.
     *
     * @var string
     */
    protected $fareBasisCode;
    /**
     * Specifies the number of travelers of a given passenger type (e.g., Adult, Child) Assigned XSD.

    Type: PassengerTypeQuantityType.

     *
     * @var int
     */
    protected $quantity;
    /**
     * Reservation Booking Designator - actual booking class code or F/J/Y for unbooked travelers.
     *
     * @var string
     */
    protected $rBD;
    /**
     * Traveler's date of birth. Can be used for minumum age requirements for certain seat selection Assigned XSD.

    Type: {http://www.w3.org/2001/XMLSchema}date.

     *
     * @var string
     */
    protected $birthDate;
    /**
     * If indicator is present and true the passenger is travelling with an infant that is not occupying a seat Restrictions as to where the passenger may sit on the aircraft may apply due to exit row restrictions or the availbility of oxygen masks.
     *
     * @var bool
     */
    protected $accompaniedByInfantInd;
    /**
     * Traveler Profile Identifier.
     *
     * @var string
     */
    protected $travellerID;
    /**
     * Fare tour code.
     *
     * @var string
     */
    protected $tourCode;
    /**
     * Fare component ID.
     *
     * @var string
     */
    protected $fareComponentID;
    /**
     * Firt or Given Name.
     *
     * @var string
     */
    protected $givenName;
    /**
     * Last or Surname.
     *
     * @var string
     */
    protected $surname;
    /**
     * SSR Details.
     *
     * @var string
     */
    protected $sSR;
    /**
     * TODO - Use Open Enumeration from OTA - Traveller Characteristics or restrictions, pet allergies so no near a pet etc.
     *
     * @var mixed
     */
    protected $travellerCharacteristics;
    /**
     * Assigned XSD.
    Type: {http://services.sabre.com/STL/v01}StringLength13to15.
    properties:
     coupon:
       type: string

     *
     * @var mixed
     */
    protected $ticketNumber;
    /**
     * @var mixed
     */
    protected $extensionPointSummary;
    /**
     * Loyalty program information in event it affects seatmap selection.
     *
     * @var string
     */
    protected $loyalty;
    /**
     * @var SeatMapRequestEnhancedSeatMapRQSeatMapQueryEnhancedFareAvailQualifiersItemFareBreakCriteria
     */
    protected $fareBreakCriteria;
    /**
     * @var SeatMapRequestEnhancedSeatMapRQSeatMapQueryEnhancedFareAvailQualifiersItemSeatReq
     */
    protected $seatReq;

    /**
     * Pricing Passenger Type, for instance "GOV", "MIL", "ADT", "CNN".
     *
     * @return string
     */
    public function getPassengerType(): ?string
    {
        return $this->passengerType;
    }

    /**
     * Pricing Passenger Type, for instance "GOV", "MIL", "ADT", "CNN".
     *
     * @param string $passengerType
     *
     * @return self
     */
    public function setPassengerType(?string $passengerType): self
    {
        $this->passengerType = $passengerType;

        return $this;
    }

    /**
     * PNR record Locator of passenger or group.
     *
     * @return string
     */
    public function getPNRLoc(): ?string
    {
        return $this->pNRLoc;
    }

    /**
     * PNR record Locator of passenger or group.
     *
     * @param string $pNRLoc
     *
     * @return self
     */
    public function setPNRLoc(?string $pNRLoc): self
    {
        $this->pNRLoc = $pNRLoc;

        return $this;
    }

    /**
     * Fare Basis Code for the filed fare.
     *
     * @return string
     */
    public function getFareBasisCode(): ?string
    {
        return $this->fareBasisCode;
    }

    /**
     * Fare Basis Code for the filed fare.
     *
     * @param string $fareBasisCode
     *
     * @return self
     */
    public function setFareBasisCode(?string $fareBasisCode): self
    {
        $this->fareBasisCode = $fareBasisCode;

        return $this;
    }

    /**
     * Specifies the number of travelers of a given passenger type (e.g., Adult, Child) Assigned XSD.

    Type: PassengerTypeQuantityType.

     *
     * @return int
     */
    public function getQuantity(): ?int
    {
        return $this->quantity;
    }

    /**
     * Specifies the number of travelers of a given passenger type (e.g., Adult, Child) Assigned XSD.

    Type: PassengerTypeQuantityType.

     *
     * @param int $quantity
     *
     * @return self
     */
    public function setQuantity(?int $quantity): self
    {
        $this->quantity = $quantity;

        return $this;
    }

    /**
     * Reservation Booking Designator - actual booking class code or F/J/Y for unbooked travelers.
     *
     * @return string
     */
    public function getRBD(): ?string
    {
        return $this->rBD;
    }

    /**
     * Reservation Booking Designator - actual booking class code or F/J/Y for unbooked travelers.
     *
     * @param string $rBD
     *
     * @return self
     */
    public function setRBD(?string $rBD): self
    {
        $this->rBD = $rBD;

        return $this;
    }

    /**
     * Traveler's date of birth. Can be used for minumum age requirements for certain seat selection Assigned XSD.

    Type: {http://www.w3.org/2001/XMLSchema}date.

     *
     * @return string
     */
    public function getBirthDate(): ?string
    {
        return $this->birthDate;
    }

    /**
     * Traveler's date of birth. Can be used for minumum age requirements for certain seat selection Assigned XSD.

    Type: {http://www.w3.org/2001/XMLSchema}date.

     *
     * @param string $birthDate
     *
     * @return self
     */
    public function setBirthDate(?string $birthDate): self
    {
        $this->birthDate = $birthDate;

        return $this;
    }

    /**
     * If indicator is present and true the passenger is travelling with an infant that is not occupying a seat Restrictions as to where the passenger may sit on the aircraft may apply due to exit row restrictions or the availbility of oxygen masks.
     *
     * @return bool
     */
    public function getAccompaniedByInfantInd(): ?bool
    {
        return $this->accompaniedByInfantInd;
    }

    /**
     * If indicator is present and true the passenger is travelling with an infant that is not occupying a seat Restrictions as to where the passenger may sit on the aircraft may apply due to exit row restrictions or the availbility of oxygen masks.
     *
     * @param bool $accompaniedByInfantInd
     *
     * @return self
     */
    public function setAccompaniedByInfantInd(?bool $accompaniedByInfantInd): self
    {
        $this->accompaniedByInfantInd = $accompaniedByInfantInd;

        return $this;
    }

    /**
     * Traveler Profile Identifier.
     *
     * @return string
     */
    public function getTravellerID(): ?string
    {
        return $this->travellerID;
    }

    /**
     * Traveler Profile Identifier.
     *
     * @param string $travellerID
     *
     * @return self
     */
    public function setTravellerID(?string $travellerID): self
    {
        $this->travellerID = $travellerID;

        return $this;
    }

    /**
     * Fare tour code.
     *
     * @return string
     */
    public function getTourCode(): ?string
    {
        return $this->tourCode;
    }

    /**
     * Fare tour code.
     *
     * @param string $tourCode
     *
     * @return self
     */
    public function setTourCode(?string $tourCode): self
    {
        $this->tourCode = $tourCode;

        return $this;
    }

    /**
     * Fare component ID.
     *
     * @return string
     */
    public function getFareComponentID(): ?string
    {
        return $this->fareComponentID;
    }

    /**
     * Fare component ID.
     *
     * @param string $fareComponentID
     *
     * @return self
     */
    public function setFareComponentID(?string $fareComponentID): self
    {
        $this->fareComponentID = $fareComponentID;

        return $this;
    }

    /**
     * Firt or Given Name.
     *
     * @return string
     */
    public function getGivenName(): ?string
    {
        return $this->givenName;
    }

    /**
     * Firt or Given Name.
     *
     * @param string $givenName
     *
     * @return self
     */
    public function setGivenName(?string $givenName): self
    {
        $this->givenName = $givenName;

        return $this;
    }

    /**
     * Last or Surname.
     *
     * @return string
     */
    public function getSurname(): ?string
    {
        return $this->surname;
    }

    /**
     * Last or Surname.
     *
     * @param string $surname
     *
     * @return self
     */
    public function setSurname(?string $surname): self
    {
        $this->surname = $surname;

        return $this;
    }

    /**
     * SSR Details.
     *
     * @return string
     */
    public function getSSR(): ?string
    {
        return $this->sSR;
    }

    /**
     * SSR Details.
     *
     * @param string $sSR
     *
     * @return self
     */
    public function setSSR(?string $sSR): self
    {
        $this->sSR = $sSR;

        return $this;
    }

    /**
     * TODO - Use Open Enumeration from OTA - Traveller Characteristics or restrictions, pet allergies so no near a pet etc.
     *
     * @return mixed
     */
    public function getTravellerCharacteristics()
    {
        return $this->travellerCharacteristics;
    }

    /**
     * TODO - Use Open Enumeration from OTA - Traveller Characteristics or restrictions, pet allergies so no near a pet etc.
     *
     * @param mixed $travellerCharacteristics
     *
     * @return self
     */
    public function setTravellerCharacteristics($travellerCharacteristics): self
    {
        $this->travellerCharacteristics = $travellerCharacteristics;

        return $this;
    }

    /**
     * Assigned XSD.
    Type: {http://services.sabre.com/STL/v01}StringLength13to15.
    properties:
     coupon:
       type: string

     *
     * @return mixed
     */
    public function getTicketNumber()
    {
        return $this->ticketNumber;
    }

    /**
     * Assigned XSD.
    Type: {http://services.sabre.com/STL/v01}StringLength13to15.
    properties:
     coupon:
       type: string

     *
     * @param mixed $ticketNumber
     *
     * @return self
     */
    public function setTicketNumber($ticketNumber): self
    {
        $this->ticketNumber = $ticketNumber;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getExtensionPointSummary()
    {
        return $this->extensionPointSummary;
    }

    /**
     * @param mixed $extensionPointSummary
     *
     * @return self
     */
    public function setExtensionPointSummary($extensionPointSummary): self
    {
        $this->extensionPointSummary = $extensionPointSummary;

        return $this;
    }

    /**
     * Loyalty program information in event it affects seatmap selection.
     *
     * @return string
     */
    public function getLoyalty(): ?string
    {
        return $this->loyalty;
    }

    /**
     * Loyalty program information in event it affects seatmap selection.
     *
     * @param string $loyalty
     *
     * @return self
     */
    public function setLoyalty(?string $loyalty): self
    {
        $this->loyalty = $loyalty;

        return $this;
    }

    /**
     * @return SeatMapRequestEnhancedSeatMapRQSeatMapQueryEnhancedFareAvailQualifiersItemFareBreakCriteria
     */
    public function getFareBreakCriteria(): ?SeatMapRequestEnhancedSeatMapRQSeatMapQueryEnhancedFareAvailQualifiersItemFareBreakCriteria
    {
        return $this->fareBreakCriteria;
    }

    /**
     * @param SeatMapRequestEnhancedSeatMapRQSeatMapQueryEnhancedFareAvailQualifiersItemFareBreakCriteria $fareBreakCriteria
     *
     * @return self
     */
    public function setFareBreakCriteria(?SeatMapRequestEnhancedSeatMapRQSeatMapQueryEnhancedFareAvailQualifiersItemFareBreakCriteria $fareBreakCriteria): self
    {
        $this->fareBreakCriteria = $fareBreakCriteria;

        return $this;
    }

    /**
     * @return SeatMapRequestEnhancedSeatMapRQSeatMapQueryEnhancedFareAvailQualifiersItemSeatReq
     */
    public function getSeatReq(): ?SeatMapRequestEnhancedSeatMapRQSeatMapQueryEnhancedFareAvailQualifiersItemSeatReq
    {
        return $this->seatReq;
    }

    /**
     * @param SeatMapRequestEnhancedSeatMapRQSeatMapQueryEnhancedFareAvailQualifiersItemSeatReq $seatReq
     *
     * @return self
     */
    public function setSeatReq(?SeatMapRequestEnhancedSeatMapRQSeatMapQueryEnhancedFareAvailQualifiersItemSeatReq $seatReq): self
    {
        $this->seatReq = $seatReq;

        return $this;
    }
}
