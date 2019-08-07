<?php

namespace Ammonkc\SabreApi\Model\BargainFinderMax;

use Ammonkc\SabreApi\AbstractModel;

class OrgOpentravelOta200305AirTravelerType extends AbstractModel
{
    /**
     * Indicates if an infant accompanying a traveler is with or without a seat.,A three-letter code representing passenger type (e.g. .ADT. for adult, .CNN. for child).
     *
     * @var bool
     */
    protected $accompaniedByInfant;
    /**
     * @var OrgOpentravelOta200305AddressType[]
     */
    protected $address;
    /**
     * Date of Birth.
     *
     * @var string
     */
    protected $birthDate;
    /**
     * The preferred currency in which monetary amounts should be returned.
     *
     * @var string
     */
    protected $currencyCode;
    /**
     * @var OrgOpentravelOta200305CustLoyaltyType[]
     */
    protected $custLoyalty;
    /**
     * @var OrgOpentravelOta200305DocumentType[]
     */
    protected $document;
    /**
     * @var OrgOpentravelOta200305EmailType[]
     */
    protected $email;
    /**
     * Reference pointers to flight segments.
     *
     * @var OrgOpentravelOta200305AirTravelerTypeFlightSegmentRPHs
     */
    protected $flightSegmentRPHs;
    /**
     * @var string
     */
    protected $gender;
    /**
     * @var string
     */
    protected $passengerTypeCode;
    /**
     * @var OrgOpentravelOta200305PassengerTypeQuantityType
     */
    protected $passengerTypeQuantity;
    /**
     * This is an XML Schema representing the OTA Person Name object.
     *
     * @var OrgOpentravelOta200305PersonNameType
     */
    protected $personName;
    /**
     * Stored information about a customer. May contain readily available information relevant to the booking.
     *
     * @var OrgOpentravelOta200305AirTravelerTypeProfileRef
     */
    protected $profileRef;
    /**
     * value="Inherit" Permission for sharing data for marketing purposes.
     *
     * @var string
     */
    protected $shareMarketInd;
    /**
     * value="Inherit" Permission for sharing data for synchronization of information held by other travel service providers.
     *
     * @var string
     */
    protected $shareSynchInd;
    /**
     * @var OrgOpentravelOta200305TelephoneType[]
     */
    protected $telephone;
    /**
     * Direct reference of traveler assigned by requesting system. Used as a cross reference between data segments.
     *
     * @var OrgOpentravelOta200305TravelerRefNumberType
     */
    protected $travelerRefNumber;

    /**
     * Indicates if an infant accompanying a traveler is with or without a seat.,A three-letter code representing passenger type (e.g. .ADT. for adult, .CNN. for child).
     *
     * @return bool
     */
    public function getAccompaniedByInfant(): ?bool
    {
        return $this->accompaniedByInfant;
    }

    /**
     * Indicates if an infant accompanying a traveler is with or without a seat.,A three-letter code representing passenger type (e.g. .ADT. for adult, .CNN. for child).
     *
     * @param bool $accompaniedByInfant
     *
     * @return self
     */
    public function setAccompaniedByInfant(?bool $accompaniedByInfant): self
    {
        $this->accompaniedByInfant = $accompaniedByInfant;

        return $this;
    }

    /**
     * @return OrgOpentravelOta200305AddressType[]
     */
    public function getAddress(): ?array
    {
        return $this->address;
    }

    /**
     * @param OrgOpentravelOta200305AddressType[] $address
     *
     * @return self
     */
    public function setAddress(?array $address): self
    {
        $this->address = $address;

        return $this;
    }

    /**
     * Date of Birth.
     *
     * @return string
     */
    public function getBirthDate(): ?string
    {
        return $this->birthDate;
    }

    /**
     * Date of Birth.
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
     * The preferred currency in which monetary amounts should be returned.
     *
     * @return string
     */
    public function getCurrencyCode(): ?string
    {
        return $this->currencyCode;
    }

    /**
     * The preferred currency in which monetary amounts should be returned.
     *
     * @param string $currencyCode
     *
     * @return self
     */
    public function setCurrencyCode(?string $currencyCode): self
    {
        $this->currencyCode = $currencyCode;

        return $this;
    }

    /**
     * @return OrgOpentravelOta200305CustLoyaltyType[]
     */
    public function getCustLoyalty(): ?array
    {
        return $this->custLoyalty;
    }

    /**
     * @param OrgOpentravelOta200305CustLoyaltyType[] $custLoyalty
     *
     * @return self
     */
    public function setCustLoyalty(?array $custLoyalty): self
    {
        $this->custLoyalty = $custLoyalty;

        return $this;
    }

    /**
     * @return OrgOpentravelOta200305DocumentType[]
     */
    public function getDocument(): ?array
    {
        return $this->document;
    }

    /**
     * @param OrgOpentravelOta200305DocumentType[] $document
     *
     * @return self
     */
    public function setDocument(?array $document): self
    {
        $this->document = $document;

        return $this;
    }

    /**
     * @return OrgOpentravelOta200305EmailType[]
     */
    public function getEmail(): ?array
    {
        return $this->email;
    }

    /**
     * @param OrgOpentravelOta200305EmailType[] $email
     *
     * @return self
     */
    public function setEmail(?array $email): self
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Reference pointers to flight segments.
     *
     * @return OrgOpentravelOta200305AirTravelerTypeFlightSegmentRPHs
     */
    public function getFlightSegmentRPHs(): ?OrgOpentravelOta200305AirTravelerTypeFlightSegmentRPHs
    {
        return $this->flightSegmentRPHs;
    }

    /**
     * Reference pointers to flight segments.
     *
     * @param OrgOpentravelOta200305AirTravelerTypeFlightSegmentRPHs $flightSegmentRPHs
     *
     * @return self
     */
    public function setFlightSegmentRPHs(?OrgOpentravelOta200305AirTravelerTypeFlightSegmentRPHs $flightSegmentRPHs): self
    {
        $this->flightSegmentRPHs = $flightSegmentRPHs;

        return $this;
    }

    /**
     * @return string
     */
    public function getGender(): ?string
    {
        return $this->gender;
    }

    /**
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
     * @return string
     */
    public function getPassengerTypeCode(): ?string
    {
        return $this->passengerTypeCode;
    }

    /**
     * @param string $passengerTypeCode
     *
     * @return self
     */
    public function setPassengerTypeCode(?string $passengerTypeCode): self
    {
        $this->passengerTypeCode = $passengerTypeCode;

        return $this;
    }

    /**
     * @return OrgOpentravelOta200305PassengerTypeQuantityType
     */
    public function getPassengerTypeQuantity(): ?OrgOpentravelOta200305PassengerTypeQuantityType
    {
        return $this->passengerTypeQuantity;
    }

    /**
     * @param OrgOpentravelOta200305PassengerTypeQuantityType $passengerTypeQuantity
     *
     * @return self
     */
    public function setPassengerTypeQuantity(?OrgOpentravelOta200305PassengerTypeQuantityType $passengerTypeQuantity): self
    {
        $this->passengerTypeQuantity = $passengerTypeQuantity;

        return $this;
    }

    /**
     * This is an XML Schema representing the OTA Person Name object.
     *
     * @return OrgOpentravelOta200305PersonNameType
     */
    public function getPersonName(): ?OrgOpentravelOta200305PersonNameType
    {
        return $this->personName;
    }

    /**
     * This is an XML Schema representing the OTA Person Name object.
     *
     * @param OrgOpentravelOta200305PersonNameType $personName
     *
     * @return self
     */
    public function setPersonName(?OrgOpentravelOta200305PersonNameType $personName): self
    {
        $this->personName = $personName;

        return $this;
    }

    /**
     * Stored information about a customer. May contain readily available information relevant to the booking.
     *
     * @return OrgOpentravelOta200305AirTravelerTypeProfileRef
     */
    public function getProfileRef(): ?OrgOpentravelOta200305AirTravelerTypeProfileRef
    {
        return $this->profileRef;
    }

    /**
     * Stored information about a customer. May contain readily available information relevant to the booking.
     *
     * @param OrgOpentravelOta200305AirTravelerTypeProfileRef $profileRef
     *
     * @return self
     */
    public function setProfileRef(?OrgOpentravelOta200305AirTravelerTypeProfileRef $profileRef): self
    {
        $this->profileRef = $profileRef;

        return $this;
    }

    /**
     * value="Inherit" Permission for sharing data for marketing purposes.
     *
     * @return string
     */
    public function getShareMarketInd(): ?string
    {
        return $this->shareMarketInd;
    }

    /**
     * value="Inherit" Permission for sharing data for marketing purposes.
     *
     * @param string $shareMarketInd
     *
     * @return self
     */
    public function setShareMarketInd(?string $shareMarketInd): self
    {
        $this->shareMarketInd = $shareMarketInd;

        return $this;
    }

    /**
     * value="Inherit" Permission for sharing data for synchronization of information held by other travel service providers.
     *
     * @return string
     */
    public function getShareSynchInd(): ?string
    {
        return $this->shareSynchInd;
    }

    /**
     * value="Inherit" Permission for sharing data for synchronization of information held by other travel service providers.
     *
     * @param string $shareSynchInd
     *
     * @return self
     */
    public function setShareSynchInd(?string $shareSynchInd): self
    {
        $this->shareSynchInd = $shareSynchInd;

        return $this;
    }

    /**
     * @return OrgOpentravelOta200305TelephoneType[]
     */
    public function getTelephone(): ?array
    {
        return $this->telephone;
    }

    /**
     * @param OrgOpentravelOta200305TelephoneType[] $telephone
     *
     * @return self
     */
    public function setTelephone(?array $telephone): self
    {
        $this->telephone = $telephone;

        return $this;
    }

    /**
     * Direct reference of traveler assigned by requesting system. Used as a cross reference between data segments.
     *
     * @return OrgOpentravelOta200305TravelerRefNumberType
     */
    public function getTravelerRefNumber(): ?OrgOpentravelOta200305TravelerRefNumberType
    {
        return $this->travelerRefNumber;
    }

    /**
     * Direct reference of traveler assigned by requesting system. Used as a cross reference between data segments.
     *
     * @param OrgOpentravelOta200305TravelerRefNumberType $travelerRefNumber
     *
     * @return self
     */
    public function setTravelerRefNumber(?OrgOpentravelOta200305TravelerRefNumberType $travelerRefNumber): self
    {
        $this->travelerRefNumber = $travelerRefNumber;

        return $this;
    }
}
