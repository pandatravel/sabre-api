<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Ammonkc\SabreApi\Model\CreatePassengerNameRecord;

use Ammonkc\SabreApi\AbstractModel;

class CreatePassengerNameRecordRequestCreatePassengerNameRecordRQTravelItineraryAddInfoCustomerInfoPersonNameItem extends AbstractModel
{
    /**
     * Passenger first name.
     *
     * @var string
     */
    protected $givenName;
    /**
     * Group details.
     *
     * @var CreatePassengerNameRecordRequestCreatePassengerNameRecordRQTravelItineraryAddInfoCustomerInfoPersonNameItemGroupInfo
     */
    protected $groupInfo;
    /**
     * Passenger surname.
     *
     * @var string
     */
    protected $surname;
    /**
     * Used to specify that the particular passenger is an infant.
     *
     * @var bool
     */
    protected $infant;
    /**
     * Used to specify a passenger name number, and is only applicable when used in conjunction with @PassengerType.
     *
     * @var string
     */
    protected $nameNumber;
    /**
     * Used to specify miscellaneous name reference-related information if applicable.
     *
     * @var string
     */
    protected $nameReference;
    /**
     * Used to add a passenger type code into the record. Please note that this qualifier is not applicable to Sabre Sonic Res-based clients.
     *
     * @var string
     */
    protected $passengerType;

    /**
     * Passenger first name.
     *
     * @return string
     */
    public function getGivenName(): ?string
    {
        return $this->givenName;
    }

    /**
     * Passenger first name.
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
     * Group details.
     *
     * @return CreatePassengerNameRecordRequestCreatePassengerNameRecordRQTravelItineraryAddInfoCustomerInfoPersonNameItemGroupInfo
     */
    public function getGroupInfo(): ?CreatePassengerNameRecordRequestCreatePassengerNameRecordRQTravelItineraryAddInfoCustomerInfoPersonNameItemGroupInfo
    {
        return $this->groupInfo;
    }

    /**
     * Group details.
     *
     * @param CreatePassengerNameRecordRequestCreatePassengerNameRecordRQTravelItineraryAddInfoCustomerInfoPersonNameItemGroupInfo $groupInfo
     *
     * @return self
     */
    public function setGroupInfo(?CreatePassengerNameRecordRequestCreatePassengerNameRecordRQTravelItineraryAddInfoCustomerInfoPersonNameItemGroupInfo $groupInfo): self
    {
        $this->groupInfo = $groupInfo;

        return $this;
    }

    /**
     * Passenger surname.
     *
     * @return string
     */
    public function getSurname(): ?string
    {
        return $this->surname;
    }

    /**
     * Passenger surname.
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
     * Used to specify that the particular passenger is an infant.
     *
     * @return bool
     */
    public function getInfant(): ?bool
    {
        return $this->infant;
    }

    /**
     * Used to specify that the particular passenger is an infant.
     *
     * @param bool $infant
     *
     * @return self
     */
    public function setInfant(?bool $infant): self
    {
        $this->infant = $infant;

        return $this;
    }

    /**
     * Used to specify a passenger name number, and is only applicable when used in conjunction with @PassengerType.
     *
     * @return string
     */
    public function getNameNumber(): ?string
    {
        return $this->nameNumber;
    }

    /**
     * Used to specify a passenger name number, and is only applicable when used in conjunction with @PassengerType.
     *
     * @param string $nameNumber
     *
     * @return self
     */
    public function setNameNumber(?string $nameNumber): self
    {
        $this->nameNumber = $nameNumber;

        return $this;
    }

    /**
     * Used to specify miscellaneous name reference-related information if applicable.
     *
     * @return string
     */
    public function getNameReference(): ?string
    {
        return $this->nameReference;
    }

    /**
     * Used to specify miscellaneous name reference-related information if applicable.
     *
     * @param string $nameReference
     *
     * @return self
     */
    public function setNameReference(?string $nameReference): self
    {
        $this->nameReference = $nameReference;

        return $this;
    }

    /**
     * Used to add a passenger type code into the record. Please note that this qualifier is not applicable to Sabre Sonic Res-based clients.
     *
     * @return string
     */
    public function getPassengerType(): ?string
    {
        return $this->passengerType;
    }

    /**
     * Used to add a passenger type code into the record. Please note that this qualifier is not applicable to Sabre Sonic Res-based clients.
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
}