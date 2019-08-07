<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Ammonkc\SabreApi\Model\CreatePassengerNameRecord;

use Ammonkc\SabreApi\AbstractModel;

class CreatePassengerNameRecordRequestCreatePassengerNameRecordRQHotelBookRoomsRoomItemGuestsGuestItem extends AbstractModel
{
    /**
     * The guest contact details.
     *
     * @var CreatePassengerNameRecordRequestCreatePassengerNameRecordRQHotelBookRoomsRoomItemGuestsGuestItemContact
     */
    protected $contact;
    /**
     * 'Type' defines whether the guest is an adult or child.
     * '10'=Adult, '8'=Child - Valid values are only Adult and Child Types.
     *
     * @var int
     */
    protected $type;
    /**
     * 'Email' address for the guest.
     *
     * @var string
     */
    protected $email;
    /**
     * The guest age.
     * Age is mandatory for a child.
     *
     * @var int
     */
    protected $age;
    /**
     * The guest index.
     *
     * @var int
     */
    protected $index;
    /**
     * 'LeadGuest' is the main guest for the booking.
     * At least one and only one adult guest must be defined.
     *
     * @var bool
     */
    protected $leadGuest;
    /**
     * The frequent traveler number.
     * Applies only to the lead guest.
     *
     * @var string
     */
    protected $frequentFlyerNumber;
    /**
     * The loyalty identifier.
     * Applies only to the lead guest.
     *
     * @var string
     */
    protected $loyaltyId;
    /**
     * The guest 'Title'.
     * 'Title' can include MR./MS. etc.
     *
     * @var string
     */
    protected $title;
    /**
     * The 'FirstName' of the guest.
     *
     * @var string
     */
    protected $firstName;
    /**
     * The 'LastName' of the guest.
     *
     * @var string
     */
    protected $lastName;

    /**
     * The guest contact details.
     *
     * @return CreatePassengerNameRecordRequestCreatePassengerNameRecordRQHotelBookRoomsRoomItemGuestsGuestItemContact
     */
    public function getContact(): CreatePassengerNameRecordRequestCreatePassengerNameRecordRQHotelBookRoomsRoomItemGuestsGuestItemContact
    {
        return $this->contact;
    }

    /**
     * The guest contact details.
     *
     * @param CreatePassengerNameRecordRequestCreatePassengerNameRecordRQHotelBookRoomsRoomItemGuestsGuestItemContact $contact
     *
     * @return self
     */
    public function setContact(CreatePassengerNameRecordRequestCreatePassengerNameRecordRQHotelBookRoomsRoomItemGuestsGuestItemContact $contact): self
    {
        $this->contact = $contact;

        return $this;
    }

    /**
     * 'Type' defines whether the guest is an adult or child.
     * '10'=Adult, '8'=Child - Valid values are only Adult and Child Types.
     *
     * @return int
     */
    public function getType(): int
    {
        return $this->type;
    }

    /**
     * 'Type' defines whether the guest is an adult or child.
     * '10'=Adult, '8'=Child - Valid values are only Adult and Child Types.
     *
     * @param int $type
     *
     * @return self
     */
    public function setType(int $type): self
    {
        $this->type = $type;

        return $this;
    }

    /**
     * 'Email' address for the guest.
     *
     * @return string
     */
    public function getEmail(): string
    {
        return $this->email;
    }

    /**
     * 'Email' address for the guest.
     *
     * @param string $email
     *
     * @return self
     */
    public function setEmail(string $email): self
    {
        $this->email = $email;

        return $this;
    }

    /**
     * The guest age.
     * Age is mandatory for a child.
     *
     * @return int
     */
    public function getAge(): int
    {
        return $this->age;
    }

    /**
     * The guest age.
     * Age is mandatory for a child.
     *
     * @param int $age
     *
     * @return self
     */
    public function setAge(int $age): self
    {
        $this->age = $age;

        return $this;
    }

    /**
     * The guest index.
     *
     * @return int
     */
    public function getIndex(): int
    {
        return $this->index;
    }

    /**
     * The guest index.
     *
     * @param int $index
     *
     * @return self
     */
    public function setIndex(int $index): self
    {
        $this->index = $index;

        return $this;
    }

    /**
     * 'LeadGuest' is the main guest for the booking.
     * At least one and only one adult guest must be defined.
     *
     * @return bool
     */
    public function getLeadGuest(): bool
    {
        return $this->leadGuest;
    }

    /**
     * 'LeadGuest' is the main guest for the booking.
     * At least one and only one adult guest must be defined.
     *
     * @param bool $leadGuest
     *
     * @return self
     */
    public function setLeadGuest(bool $leadGuest): self
    {
        $this->leadGuest = $leadGuest;

        return $this;
    }

    /**
     * The frequent traveler number.
     * Applies only to the lead guest.
     *
     * @return string
     */
    public function getFrequentFlyerNumber(): string
    {
        return $this->frequentFlyerNumber;
    }

    /**
     * The frequent traveler number.
     * Applies only to the lead guest.
     *
     * @param string $frequentFlyerNumber
     *
     * @return self
     */
    public function setFrequentFlyerNumber(string $frequentFlyerNumber): self
    {
        $this->frequentFlyerNumber = $frequentFlyerNumber;

        return $this;
    }

    /**
     * The loyalty identifier.
     * Applies only to the lead guest.
     *
     * @return string
     */
    public function getLoyaltyId(): string
    {
        return $this->loyaltyId;
    }

    /**
     * The loyalty identifier.
     * Applies only to the lead guest.
     *
     * @param string $loyaltyId
     *
     * @return self
     */
    public function setLoyaltyId(string $loyaltyId): self
    {
        $this->loyaltyId = $loyaltyId;

        return $this;
    }

    /**
     * The guest 'Title'.
     * 'Title' can include MR./MS. etc.
     *
     * @return string
     */
    public function getTitle(): string
    {
        return $this->title;
    }

    /**
     * The guest 'Title'.
     * 'Title' can include MR./MS. etc.
     *
     * @param string $title
     *
     * @return self
     */
    public function setTitle(string $title): self
    {
        $this->title = $title;

        return $this;
    }

    /**
     * The 'FirstName' of the guest.
     *
     * @return string
     */
    public function getFirstName(): string
    {
        return $this->firstName;
    }

    /**
     * The 'FirstName' of the guest.
     *
     * @param string $firstName
     *
     * @return self
     */
    public function setFirstName(string $firstName): self
    {
        $this->firstName = $firstName;

        return $this;
    }

    /**
     * The 'LastName' of the guest.
     *
     * @return string
     */
    public function getLastName(): string
    {
        return $this->lastName;
    }

    /**
     * The 'LastName' of the guest.
     *
     * @param string $lastName
     *
     * @return self
     */
    public function setLastName(string $lastName): self
    {
        $this->lastName = $lastName;

        return $this;
    }
}
