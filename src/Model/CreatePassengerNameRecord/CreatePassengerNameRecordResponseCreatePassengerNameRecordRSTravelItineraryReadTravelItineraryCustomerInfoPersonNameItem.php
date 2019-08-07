<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Ammonkc\SabreApi\Model\CreatePassengerNameRecord;

use Ammonkc\SabreApi\AbstractModel;

class CreatePassengerNameRecordResponseCreatePassengerNameRecordRSTravelItineraryReadTravelItineraryCustomerInfoPersonNameItem extends AbstractModel
{
    /**
     * The passenger's email address information.
     *
     * @var CreatePassengerNameRecordResponseCreatePassengerNameRecordRSTravelItineraryReadTravelItineraryCustomerInfoPersonNameItemEmailItem[]
     */
    protected $email;
    /**
     * The passenger's given (first) name.
     *
     * @var string
     */
    protected $givenName;
    /**
     * @var CreatePassengerNameRecordResponseCreatePassengerNameRecordRSTravelItineraryReadTravelItineraryCustomerInfoPersonNameItemGroupInfo
     */
    protected $groupInfo;
    /**
     * The profile index information.
     *
     * @var CreatePassengerNameRecordResponseCreatePassengerNameRecordRSTravelItineraryReadTravelItineraryCustomerInfoPersonNameItemProfileIndexItem[]
     */
    protected $profileIndex;
    /**
     * The passenger's last name.
     *
     * @var string
     */
    protected $surname;
    /**
     * 'WithInfant' is used to indicate whether or not the passenger is an infant.
     *
     * @var string
     */
    protected $withInfant;
    /**
     * The passenger name number.
     *
     * @var string
     */
    protected $nameNumber;
    /**
     * 'NameReference' is used to return miscellaneous name reference-related information.
     *
     * @var string
     */
    protected $nameReference;
    /**
     * The passenger type code associated with the particular passenger.
     *
     * @var string
     */
    protected $passengerType;
    /**
     * The reference place holder.
     *
     * @var string
     */
    protected $rPH;
    /**
     * The reference ID.
     *
     * @var string
     */
    protected $id;
    /**
     * Element ID.
     *
     * @var string
     */
    protected $elementId;

    /**
     * The passenger's email address information.
     *
     * @return CreatePassengerNameRecordResponseCreatePassengerNameRecordRSTravelItineraryReadTravelItineraryCustomerInfoPersonNameItemEmailItem[]
     */
    public function getEmail(): array
    {
        return $this->email;
    }

    /**
     * The passenger's email address information.
     *
     * @param CreatePassengerNameRecordResponseCreatePassengerNameRecordRSTravelItineraryReadTravelItineraryCustomerInfoPersonNameItemEmailItem[] $email
     *
     * @return self
     */
    public function setEmail(array $email): self
    {
        $this->email = $email;

        return $this;
    }

    /**
     * The passenger's given (first) name.
     *
     * @return string
     */
    public function getGivenName(): string
    {
        return $this->givenName;
    }

    /**
     * The passenger's given (first) name.
     *
     * @param string $givenName
     *
     * @return self
     */
    public function setGivenName(string $givenName): self
    {
        $this->givenName = $givenName;

        return $this;
    }

    /**
     * @return CreatePassengerNameRecordResponseCreatePassengerNameRecordRSTravelItineraryReadTravelItineraryCustomerInfoPersonNameItemGroupInfo
     */
    public function getGroupInfo(): CreatePassengerNameRecordResponseCreatePassengerNameRecordRSTravelItineraryReadTravelItineraryCustomerInfoPersonNameItemGroupInfo
    {
        return $this->groupInfo;
    }

    /**
     * @param CreatePassengerNameRecordResponseCreatePassengerNameRecordRSTravelItineraryReadTravelItineraryCustomerInfoPersonNameItemGroupInfo $groupInfo
     *
     * @return self
     */
    public function setGroupInfo(CreatePassengerNameRecordResponseCreatePassengerNameRecordRSTravelItineraryReadTravelItineraryCustomerInfoPersonNameItemGroupInfo $groupInfo): self
    {
        $this->groupInfo = $groupInfo;

        return $this;
    }

    /**
     * The profile index information.
     *
     * @return CreatePassengerNameRecordResponseCreatePassengerNameRecordRSTravelItineraryReadTravelItineraryCustomerInfoPersonNameItemProfileIndexItem[]
     */
    public function getProfileIndex(): array
    {
        return $this->profileIndex;
    }

    /**
     * The profile index information.
     *
     * @param CreatePassengerNameRecordResponseCreatePassengerNameRecordRSTravelItineraryReadTravelItineraryCustomerInfoPersonNameItemProfileIndexItem[] $profileIndex
     *
     * @return self
     */
    public function setProfileIndex(array $profileIndex): self
    {
        $this->profileIndex = $profileIndex;

        return $this;
    }

    /**
     * The passenger's last name.
     *
     * @return string
     */
    public function getSurname(): string
    {
        return $this->surname;
    }

    /**
     * The passenger's last name.
     *
     * @param string $surname
     *
     * @return self
     */
    public function setSurname(string $surname): self
    {
        $this->surname = $surname;

        return $this;
    }

    /**
     * 'WithInfant' is used to indicate whether or not the passenger is an infant.
     *
     * @return string
     */
    public function getWithInfant(): string
    {
        return $this->withInfant;
    }

    /**
     * 'WithInfant' is used to indicate whether or not the passenger is an infant.
     *
     * @param string $withInfant
     *
     * @return self
     */
    public function setWithInfant(string $withInfant): self
    {
        $this->withInfant = $withInfant;

        return $this;
    }

    /**
     * The passenger name number.
     *
     * @return string
     */
    public function getNameNumber(): string
    {
        return $this->nameNumber;
    }

    /**
     * The passenger name number.
     *
     * @param string $nameNumber
     *
     * @return self
     */
    public function setNameNumber(string $nameNumber): self
    {
        $this->nameNumber = $nameNumber;

        return $this;
    }

    /**
     * 'NameReference' is used to return miscellaneous name reference-related information.
     *
     * @return string
     */
    public function getNameReference(): string
    {
        return $this->nameReference;
    }

    /**
     * 'NameReference' is used to return miscellaneous name reference-related information.
     *
     * @param string $nameReference
     *
     * @return self
     */
    public function setNameReference(string $nameReference): self
    {
        $this->nameReference = $nameReference;

        return $this;
    }

    /**
     * The passenger type code associated with the particular passenger.
     *
     * @return string
     */
    public function getPassengerType(): string
    {
        return $this->passengerType;
    }

    /**
     * The passenger type code associated with the particular passenger.
     *
     * @param string $passengerType
     *
     * @return self
     */
    public function setPassengerType(string $passengerType): self
    {
        $this->passengerType = $passengerType;

        return $this;
    }

    /**
     * The reference place holder.
     *
     * @return string
     */
    public function getRPH(): string
    {
        return $this->rPH;
    }

    /**
     * The reference place holder.
     *
     * @param string $rPH
     *
     * @return self
     */
    public function setRPH(string $rPH): self
    {
        $this->rPH = $rPH;

        return $this;
    }

    /**
     * The reference ID.
     *
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }

    /**
     * The reference ID.
     *
     * @param string $id
     *
     * @return self
     */
    public function setId(string $id): self
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Element ID.
     *
     * @return string
     */
    public function getElementId(): string
    {
        return $this->elementId;
    }

    /**
     * Element ID.
     *
     * @param string $elementId
     *
     * @return self
     */
    public function setElementId(string $elementId): self
    {
        $this->elementId = $elementId;

        return $this;
    }
}
