<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Ammonkc\SabreApi\Model\CreatePassengerNameRecord;

use Ammonkc\SabreApi\AbstractModel;

class CreatePassengerNameRecordRequestCreatePassengerNameRecordRQSpecialReqDetailsSpecialServiceSpecialServiceInfoAdvancePassengerItemPersonName extends AbstractModel
{
    /**
     * First name.
     *
     * @var string
     */
    protected $givenName;
    /**
     * Middle name.
     *
     * @var string
     */
    protected $middleName;
    /**
     * Surname.
     *
     * @var string
     */
    protected $surname;
    /**
     * Date of birth.
     *
     * @var string
     */
    protected $dateOfBirth;
    /**
     * Used to identify the primary passport holder when the passport document is issued for multiple passengers.
     *
     * @var bool
     */
    protected $documentHolder;
    /**
     * Gender.
     *
     * @var string
     */
    protected $gender;
    /**
     * Name number: 1.1, 2.1. etc.
     *
     * @var string
     */
    protected $nameNumber;

    /**
     * First name.
     *
     * @return string
     */
    public function getGivenName(): ?string
    {
        return $this->givenName;
    }

    /**
     * First name.
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
     * Middle name.
     *
     * @return string
     */
    public function getMiddleName(): ?string
    {
        return $this->middleName;
    }

    /**
     * Middle name.
     *
     * @param string $middleName
     *
     * @return self
     */
    public function setMiddleName(?string $middleName): self
    {
        $this->middleName = $middleName;

        return $this;
    }

    /**
     * Surname.
     *
     * @return string
     */
    public function getSurname(): ?string
    {
        return $this->surname;
    }

    /**
     * Surname.
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
     * Date of birth.
     *
     * @return string
     */
    public function getDateOfBirth(): ?string
    {
        return $this->dateOfBirth;
    }

    /**
     * Date of birth.
     *
     * @param string $dateOfBirth
     *
     * @return self
     */
    public function setDateOfBirth(?string $dateOfBirth): self
    {
        $this->dateOfBirth = $dateOfBirth;

        return $this;
    }

    /**
     * Used to identify the primary passport holder when the passport document is issued for multiple passengers.
     *
     * @return bool
     */
    public function getDocumentHolder(): ?bool
    {
        return $this->documentHolder;
    }

    /**
     * Used to identify the primary passport holder when the passport document is issued for multiple passengers.
     *
     * @param bool $documentHolder
     *
     * @return self
     */
    public function setDocumentHolder(?bool $documentHolder): self
    {
        $this->documentHolder = $documentHolder;

        return $this;
    }

    /**
     * Gender.
     *
     * @return string
     */
    public function getGender(): ?string
    {
        return $this->gender;
    }

    /**
     * Gender.
     *
     * @param string $gender
     *
     * @return self
     */
    public function setGender(?string $gender): self
    {
        $this->gender = $gender;

        return $this;
    }

    /**
     * Name number: 1.1, 2.1. etc.
     *
     * @return string
     */
    public function getNameNumber(): ?string
    {
        return $this->nameNumber;
    }

    /**
     * Name number: 1.1, 2.1. etc.
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
}
