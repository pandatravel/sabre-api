<?php

namespace Ammonkc\SabreApi\Model\OrderManagement;

use Ammonkc\SabreApi\AbstractModel;

class ContactInfo extends AbstractModel
{
    /**
     * The unique identifier assigned to the contact information within the message.
     *
     * @var string
     */
    protected $id;
    /**
     * The passenger's first name.
     *
     * @var string
     */
    protected $givenName;
    /**
     * The passenger's surname.
     *
     * @var string
     */
    protected $surname;
    /**
     * @var Phone[]
     */
    protected $phones;
    /**
     * @var EmailAddress[]
     */
    protected $emailAddresses;

    /**
     * The unique identifier assigned to the contact information within the message.
     *
     * @return string
     */
    public function getId(): ?string
    {
        return $this->id;
    }

    /**
     * The unique identifier assigned to the contact information within the message.
     *
     * @param string $id
     *
     * @return self
     */
    public function setId(?string $id): self
    {
        $this->id = $id;

        return $this;
    }

    /**
     * The passenger's first name.
     *
     * @return string
     */
    public function getGivenName(): ?string
    {
        return $this->givenName;
    }

    /**
     * The passenger's first name.
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
     * The passenger's surname.
     *
     * @return string
     */
    public function getSurname(): ?string
    {
        return $this->surname;
    }

    /**
     * The passenger's surname.
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
     * @return Phone[]
     */
    public function getPhones(): ?array
    {
        return $this->phones;
    }

    /**
     * @param Phone[] $phones
     *
     * @return self
     */
    public function setPhones(?array $phones): self
    {
        $this->phones = $phones;

        return $this;
    }

    /**
     * @return EmailAddress[]
     */
    public function getEmailAddresses(): ?array
    {
        return $this->emailAddresses;
    }

    /**
     * @param EmailAddress[] $emailAddresses
     *
     * @return self
     */
    public function setEmailAddresses(?array $emailAddresses): self
    {
        $this->emailAddresses = $emailAddresses;

        return $this;
    }
}
