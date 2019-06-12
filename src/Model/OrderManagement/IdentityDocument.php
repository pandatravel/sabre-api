<?php

namespace Ammonkc\SabreApi\Model\OrderManagement;

use Ammonkc\SabreApi\AbstractModel;

class IdentityDocument extends AbstractModel
{
    /**
     * Uniquely identifies the document from all other identity documents issued by the state or organization. E.g., passport number, drivers license number.
     *
     * @var string
     */
    protected $id;
    /**
     * The type of passenger document. Can be PT (Passport), V (Visa).
     *
     * @var string
     */
    protected $documentTypeCode;
    /**
     * Issuing ISO Country code.
     *
     * @var string
     */
    protected $issuingCountryCode;
    /**
     * The two-letter [ISO 3166-1](https://www.iso.org/obp/ui/#search/code/) issuing country code.
     *
     * @var string
     */
    protected $placeOfIssue;
    /**
     * The two-letter [ISO 3166-1](https://www.iso.org/obp/ui/#search/code/) citizenship country code.
     *
     * @var string
     */
    protected $citizenshipCountryCode;
    /**
     * The two-letter [ISO 3166-1](https://www.iso.org/obp/ui/#search/code/) residence country code.
     *
     * @var string
     */
    protected $residenceCountryCode;
    /**
     * Holder's title as written on the document. E.g. Mr., Mrs., Miss, Dr.
     *
     * @var string
     */
    protected $titleName;
    /**
     * Holder's first or given name, as written on the document. E.g. JOHN.
     *
     * @var string
     */
    protected $givenName;
    /**
     * Holder's middle name or initial, as written on the document.
     *
     * @var string
     */
    protected $middleName;
    /**
     * Holder's family name or last name, as written on the document. Excludes any potential suffix.
     *
     * @var string
     */
    protected $surname;
    /**
     * Holder's name suffixes and letters, as written on the document. E.g. Jr., Sr., III, Ret., Esq.
     *
     * @var string
     */
    protected $suffixName;
    /**
     * The date on which the passenger was born as written on document in `YYYY-MM-DD` format.
     *
     * @var string
     */
    protected $birthdate;
    /**
     * The gender of the individual. Can be M, F, or X for unspecified.
     *
     * @var string
     */
    protected $genderCode;
    /**
     * The date the identity document was issued.
     *
     * @var string
     */
    protected $issueDate;
    /**
     * The date the identity document expires.
     *
     * @var string
     */
    protected $expiryDate;
    /**
     * The two-letter [ISO 3166-1](https://www.iso.org/obp/ui/#search/code/) country code where the document/visa is valid.
     *
     * @var string
     */
    protected $hostCountryCode;
    /**
     * An official entry in a Passport or other Travel Document made by an official of a government to indicate that the bearer has been granted authority to enter or re-enter the country or region concerned.
     *
     * @var Visa
     */
    protected $visa;

    /**
     * Uniquely identifies the document from all other identity documents issued by the state or organization. E.g., passport number, drivers license number.
     *
     * @return string
     */
    public function getId(): ?string
    {
        return $this->id;
    }

    /**
     * Uniquely identifies the document from all other identity documents issued by the state or organization. E.g., passport number, drivers license number.
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
     * The type of passenger document. Can be PT (Passport), V (Visa).
     *
     * @return string
     */
    public function getDocumentTypeCode(): ?string
    {
        return $this->documentTypeCode;
    }

    /**
     * The type of passenger document. Can be PT (Passport), V (Visa).
     *
     * @param string $documentTypeCode
     *
     * @return self
     */
    public function setDocumentTypeCode(?string $documentTypeCode): self
    {
        $this->documentTypeCode = $documentTypeCode;

        return $this;
    }

    /**
     * Issuing ISO Country code.
     *
     * @return string
     */
    public function getIssuingCountryCode(): ?string
    {
        return $this->issuingCountryCode;
    }

    /**
     * Issuing ISO Country code.
     *
     * @param string $issuingCountryCode
     *
     * @return self
     */
    public function setIssuingCountryCode(?string $issuingCountryCode): self
    {
        $this->issuingCountryCode = $issuingCountryCode;

        return $this;
    }

    /**
     * The two-letter [ISO 3166-1](https://www.iso.org/obp/ui/#search/code/) issuing country code.
     *
     * @return string
     */
    public function getPlaceOfIssue(): ?string
    {
        return $this->placeOfIssue;
    }

    /**
     * The two-letter [ISO 3166-1](https://www.iso.org/obp/ui/#search/code/) issuing country code.
     *
     * @param string $placeOfIssue
     *
     * @return self
     */
    public function setPlaceOfIssue(?string $placeOfIssue): self
    {
        $this->placeOfIssue = $placeOfIssue;

        return $this;
    }

    /**
     * The two-letter [ISO 3166-1](https://www.iso.org/obp/ui/#search/code/) citizenship country code.
     *
     * @return string
     */
    public function getCitizenshipCountryCode(): ?string
    {
        return $this->citizenshipCountryCode;
    }

    /**
     * The two-letter [ISO 3166-1](https://www.iso.org/obp/ui/#search/code/) citizenship country code.
     *
     * @param string $citizenshipCountryCode
     *
     * @return self
     */
    public function setCitizenshipCountryCode(?string $citizenshipCountryCode): self
    {
        $this->citizenshipCountryCode = $citizenshipCountryCode;

        return $this;
    }

    /**
     * The two-letter [ISO 3166-1](https://www.iso.org/obp/ui/#search/code/) residence country code.
     *
     * @return string
     */
    public function getResidenceCountryCode(): ?string
    {
        return $this->residenceCountryCode;
    }

    /**
     * The two-letter [ISO 3166-1](https://www.iso.org/obp/ui/#search/code/) residence country code.
     *
     * @param string $residenceCountryCode
     *
     * @return self
     */
    public function setResidenceCountryCode(?string $residenceCountryCode): self
    {
        $this->residenceCountryCode = $residenceCountryCode;

        return $this;
    }

    /**
     * Holder's title as written on the document. E.g. Mr., Mrs., Miss, Dr.
     *
     * @return string
     */
    public function getTitleName(): ?string
    {
        return $this->titleName;
    }

    /**
     * Holder's title as written on the document. E.g. Mr., Mrs., Miss, Dr.
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
     * Holder's first or given name, as written on the document. E.g. JOHN.
     *
     * @return string
     */
    public function getGivenName(): ?string
    {
        return $this->givenName;
    }

    /**
     * Holder's first or given name, as written on the document. E.g. JOHN.
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
     * Holder's middle name or initial, as written on the document.
     *
     * @return string
     */
    public function getMiddleName(): ?string
    {
        return $this->middleName;
    }

    /**
     * Holder's middle name or initial, as written on the document.
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
     * Holder's family name or last name, as written on the document. Excludes any potential suffix.
     *
     * @return string
     */
    public function getSurname(): ?string
    {
        return $this->surname;
    }

    /**
     * Holder's family name or last name, as written on the document. Excludes any potential suffix.
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
     * Holder's name suffixes and letters, as written on the document. E.g. Jr., Sr., III, Ret., Esq.
     *
     * @return string
     */
    public function getSuffixName(): ?string
    {
        return $this->suffixName;
    }

    /**
     * Holder's name suffixes and letters, as written on the document. E.g. Jr., Sr., III, Ret., Esq.
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
     * The date on which the passenger was born as written on document in `YYYY-MM-DD` format.
     *
     * @return string
     */
    public function getBirthdate(): ?string
    {
        return $this->birthdate;
    }

    /**
     * The date on which the passenger was born as written on document in `YYYY-MM-DD` format.
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
     * The date the identity document was issued.
     *
     * @return string
     */
    public function getIssueDate(): ?string
    {
        return $this->issueDate;
    }

    /**
     * The date the identity document was issued.
     *
     * @param string $issueDate
     *
     * @return self
     */
    public function setIssueDate(?string $issueDate): self
    {
        $this->issueDate = $issueDate;

        return $this;
    }

    /**
     * The date the identity document expires.
     *
     * @return string
     */
    public function getExpiryDate(): ?string
    {
        return $this->expiryDate;
    }

    /**
     * The date the identity document expires.
     *
     * @param string $expiryDate
     *
     * @return self
     */
    public function setExpiryDate(?string $expiryDate): self
    {
        $this->expiryDate = $expiryDate;

        return $this;
    }

    /**
     * The two-letter [ISO 3166-1](https://www.iso.org/obp/ui/#search/code/) country code where the document/visa is valid.
     *
     * @return string
     */
    public function getHostCountryCode(): ?string
    {
        return $this->hostCountryCode;
    }

    /**
     * The two-letter [ISO 3166-1](https://www.iso.org/obp/ui/#search/code/) country code where the document/visa is valid.
     *
     * @param string $hostCountryCode
     *
     * @return self
     */
    public function setHostCountryCode(?string $hostCountryCode): self
    {
        $this->hostCountryCode = $hostCountryCode;

        return $this;
    }

    /**
     * An official entry in a Passport or other Travel Document made by an official of a government to indicate that the bearer has been granted authority to enter or re-enter the country or region concerned.
     *
     * @return Visa
     */
    public function getVisa(): ?Visa
    {
        return $this->visa;
    }

    /**
     * An official entry in a Passport or other Travel Document made by an official of a government to indicate that the bearer has been granted authority to enter or re-enter the country or region concerned.
     *
     * @param Visa $visa
     *
     * @return self
     */
    public function setVisa(?Visa $visa): self
    {
        $this->visa = $visa;

        return $this;
    }
}
