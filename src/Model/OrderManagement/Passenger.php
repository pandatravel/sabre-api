<?php

namespace Ammonkc\SabreApi\Model\OrderManagement;

use Ammonkc\SabreApi\AbstractModel;

class Passenger extends AbstractModel
{
    /**
     * The passenger's unique identifier.
     *
     * @var string
     */
    protected $id;
    /**
     * The three-letter IATA-standard Passenger Type Code (PTC).
     *
     * @var string
     */
    protected $typeCode;
    /**
     * Reference to the passenger's contact information.
     *
     * @var string
     */
    protected $contactInfoRefId;
    /**
     * The age of the passenger.
     *
     * @var int
     */
    protected $age;
    /**
     * The age unit of measure.
     *
     * @var string
     */
    protected $ageUnitCode;
    /**
     * The date on which the passenger was born in `YYYY-MM-DD` format.
     *
     * @var string
     */
    protected $birthdate;
    /**
     * The title used before the passenger's surname.
     *
     * @var string
     */
    protected $titleName;
    /**
     * The passenger's first name.
     *
     * @var string
     */
    protected $givenName;
    /**
     * The passenger's middle name or initial.
     *
     * @var string
     */
    protected $middleName;
    /**
     * The passenger's last name.
     *
     * @var string
     */
    protected $surname;
    /**
     * Individual's name suffixes and letters, such as Jr., Sr., III, Ret., and Esq.
     *
     * @var string
     */
    protected $suffixName;
    /**
     * The gender of the individual. Can be M, F, or X for unspecified.
     *
     * @var string
     */
    protected $genderCode;
    /**
     * Additional, supplementary information about the document or service.
     *
     * @var Remark[]
     */
    protected $remarks;
    /**
     * Any document which may be used to identify a person or verify aspects of a person's personal identity.
     *
     * @var IdentityDocument[]
     */
    protected $identityDocuments;
    /**
     * An account set up for a customer within a rewards program which holds funds on behalf of that customer.
     *
     * @var LoyaltyProgramAccount[]
     */
    protected $loyaltyProgramAccounts;

    /**
     * The passenger's unique identifier.
     *
     * @return string
     */
    public function getId(): ?string
    {
        return $this->id;
    }

    /**
     * The passenger's unique identifier.
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
     * The three-letter IATA-standard Passenger Type Code (PTC).
     *
     * @return string
     */
    public function getTypeCode(): ?string
    {
        return $this->typeCode;
    }

    /**
     * The three-letter IATA-standard Passenger Type Code (PTC).
     *
     * @param string $typeCode
     *
     * @return self
     */
    public function setTypeCode(?string $typeCode): self
    {
        $this->typeCode = $typeCode;

        return $this;
    }

    /**
     * Reference to the passenger's contact information.
     *
     * @return string
     */
    public function getContactInfoRefId(): ?string
    {
        return $this->contactInfoRefId;
    }

    /**
     * Reference to the passenger's contact information.
     *
     * @param string $contactInfoRefId
     *
     * @return self
     */
    public function setContactInfoRefId(?string $contactInfoRefId): self
    {
        $this->contactInfoRefId = $contactInfoRefId;

        return $this;
    }

    /**
     * The age of the passenger.
     *
     * @return int
     */
    public function getAge(): ?int
    {
        return $this->age;
    }

    /**
     * The age of the passenger.
     *
     * @param int $age
     *
     * @return self
     */
    public function setAge(?int $age): self
    {
        $this->age = $age;

        return $this;
    }

    /**
     * The age unit of measure.
     *
     * @return string
     */
    public function getAgeUnitCode(): ?string
    {
        return $this->ageUnitCode;
    }

    /**
     * The age unit of measure.
     *
     * @param string $ageUnitCode
     *
     * @return self
     */
    public function setAgeUnitCode(?string $ageUnitCode): self
    {
        $this->ageUnitCode = $ageUnitCode;

        return $this;
    }

    /**
     * The date on which the passenger was born in `YYYY-MM-DD` format.
     *
     * @return string
     */
    public function getBirthdate(): ?string
    {
        return $this->birthdate;
    }

    /**
     * The date on which the passenger was born in `YYYY-MM-DD` format.
     *
     * @param string $birthdate
     *
     * @return self
     */
    public function setBirthdate(?string $birthdate): self
    {
        $this->birthdate = $birthdate;

        return $this;
    }

    /**
     * The title used before the passenger's surname.
     *
     * @return string
     */
    public function getTitleName(): ?string
    {
        return $this->titleName;
    }

    /**
     * The title used before the passenger's surname.
     *
     * @param string $titleName
     *
     * @return self
     */
    public function setTitleName(?string $titleName): self
    {
        $this->titleName = $titleName;

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
     * The passenger's middle name or initial.
     *
     * @return string
     */
    public function getMiddleName(): ?string
    {
        return $this->middleName;
    }

    /**
     * The passenger's middle name or initial.
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
     * The passenger's last name.
     *
     * @return string
     */
    public function getSurname(): ?string
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
    public function setSurname(?string $surname): self
    {
        $this->surname = $surname;

        return $this;
    }

    /**
     * Individual's name suffixes and letters, such as Jr., Sr., III, Ret., and Esq.
     *
     * @return string
     */
    public function getSuffixName(): ?string
    {
        return $this->suffixName;
    }

    /**
     * Individual's name suffixes and letters, such as Jr., Sr., III, Ret., and Esq.
     *
     * @param string $suffixName
     *
     * @return self
     */
    public function setSuffixName(?string $suffixName): self
    {
        $this->suffixName = $suffixName;

        return $this;
    }

    /**
     * The gender of the individual. Can be M, F, or X for unspecified.
     *
     * @return string
     */
    public function getGenderCode(): ?string
    {
        return $this->genderCode;
    }

    /**
     * The gender of the individual. Can be M, F, or X for unspecified.
     *
     * @param string $genderCode
     *
     * @return self
     */
    public function setGenderCode(?string $genderCode): self
    {
        $this->genderCode = $genderCode;

        return $this;
    }

    /**
     * Additional, supplementary information about the document or service.
     *
     * @return Remark[]
     */
    public function getRemarks(): ?array
    {
        return $this->remarks;
    }

    /**
     * Additional, supplementary information about the document or service.
     *
     * @param Remark[] $remarks
     *
     * @return self
     */
    public function setRemarks(?array $remarks): self
    {
        $this->remarks = $remarks;

        return $this;
    }

    /**
     * Any document which may be used to identify a person or verify aspects of a person's personal identity.
     *
     * @return IdentityDocument[]
     */
    public function getIdentityDocuments(): ?array
    {
        return $this->identityDocuments;
    }

    /**
     * Any document which may be used to identify a person or verify aspects of a person's personal identity.
     *
     * @param IdentityDocument[] $identityDocuments
     *
     * @return self
     */
    public function setIdentityDocuments(?array $identityDocuments): self
    {
        $this->identityDocuments = $identityDocuments;

        return $this;
    }

    /**
     * An account set up for a customer within a rewards program which holds funds on behalf of that customer.
     *
     * @return LoyaltyProgramAccount[]
     */
    public function getLoyaltyProgramAccounts(): ?array
    {
        return $this->loyaltyProgramAccounts;
    }

    /**
     * An account set up for a customer within a rewards program which holds funds on behalf of that customer.
     *
     * @param LoyaltyProgramAccount[] $loyaltyProgramAccounts
     *
     * @return self
     */
    public function setLoyaltyProgramAccounts(?array $loyaltyProgramAccounts): self
    {
        $this->loyaltyProgramAccounts = $loyaltyProgramAccounts;

        return $this;
    }
}
