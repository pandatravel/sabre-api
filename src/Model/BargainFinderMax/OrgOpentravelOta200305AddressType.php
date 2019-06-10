<?php

namespace Ammonkc\SabreApi\Model\BargainFinderMax;

use Ammonkc\SabreApi\AbstractModel;

class OrgOpentravelOta200305AddressType extends AbstractModel
{
    /**
     * @var string[]
     */
    protected $addressLine;
    /**
     * Building name, room, apartment, or suite number.
     *
     * @var string
     */
    protected $bldgRoom;
    /**
     * City name eg. Dublin.
     *
     * @var string
     */
    protected $cityName;
    /**
     * Country name eg. Ireland.
     *
     * @var OrgOpentravelOta200305CountryNameType
     */
    protected $countryName;
    /**
     * County Name eg. Fairfax.
     *
     * @var string
     */
    protected $county;
    /**
     * Specifies if the associated data is formatted or not. If true, then it is formatted, if false, then not formatted.
     *
     * @var bool
     */
    protected $formattedInd;
    /**
     * Post Office Code number.
     *
     * @var string
     */
    protected $postalCode;
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
     * State name eg. Texas.
     *
     * @var OrgOpentravelOta200305StateProvType
     */
    protected $stateProv;
    /**
     * Street Name and Number within the address.
     *
     * @var OrgOpentravelOta200305StreetNmbrType
     */
    protected $streetNmbr;
    /**
     * @var string
     */
    protected $type;

    /**
     * @return string[]
     */
    public function getAddressLine(): ?array
    {
        return $this->addressLine;
    }

    /**
     * @param string[] $addressLine
     *
     * @return self
     */
    public function setAddressLine(?array $addressLine): self
    {
        $this->addressLine = $addressLine;

        return $this;
    }

    /**
     * Building name, room, apartment, or suite number.
     *
     * @return string
     */
    public function getBldgRoom(): ?string
    {
        return $this->bldgRoom;
    }

    /**
     * Building name, room, apartment, or suite number.
     *
     * @param string $bldgRoom
     *
     * @return self
     */
    public function setBldgRoom(?string $bldgRoom): self
    {
        $this->bldgRoom = $bldgRoom;

        return $this;
    }

    /**
     * City name eg. Dublin.
     *
     * @return string
     */
    public function getCityName(): ?string
    {
        return $this->cityName;
    }

    /**
     * City name eg. Dublin.
     *
     * @param string $cityName
     *
     * @return self
     */
    public function setCityName(?string $cityName): self
    {
        $this->cityName = $cityName;

        return $this;
    }

    /**
     * Country name eg. Ireland.
     *
     * @return OrgOpentravelOta200305CountryNameType
     */
    public function getCountryName(): ?OrgOpentravelOta200305CountryNameType
    {
        return $this->countryName;
    }

    /**
     * Country name eg. Ireland.
     *
     * @param OrgOpentravelOta200305CountryNameType $countryName
     *
     * @return self
     */
    public function setCountryName(?OrgOpentravelOta200305CountryNameType $countryName): self
    {
        $this->countryName = $countryName;

        return $this;
    }

    /**
     * County Name eg. Fairfax.
     *
     * @return string
     */
    public function getCounty(): ?string
    {
        return $this->county;
    }

    /**
     * County Name eg. Fairfax.
     *
     * @param string $county
     *
     * @return self
     */
    public function setCounty(?string $county): self
    {
        $this->county = $county;

        return $this;
    }

    /**
     * Specifies if the associated data is formatted or not. If true, then it is formatted, if false, then not formatted.
     *
     * @return bool
     */
    public function getFormattedInd(): ?bool
    {
        return $this->formattedInd;
    }

    /**
     * Specifies if the associated data is formatted or not. If true, then it is formatted, if false, then not formatted.
     *
     * @param bool $formattedInd
     *
     * @return self
     */
    public function setFormattedInd(?bool $formattedInd): self
    {
        $this->formattedInd = $formattedInd;

        return $this;
    }

    /**
     * Post Office Code number.
     *
     * @return string
     */
    public function getPostalCode(): ?string
    {
        return $this->postalCode;
    }

    /**
     * Post Office Code number.
     *
     * @param string $postalCode
     *
     * @return self
     */
    public function setPostalCode(?string $postalCode): self
    {
        $this->postalCode = $postalCode;

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
     * State name eg. Texas.
     *
     * @return OrgOpentravelOta200305StateProvType
     */
    public function getStateProv(): ?OrgOpentravelOta200305StateProvType
    {
        return $this->stateProv;
    }

    /**
     * State name eg. Texas.
     *
     * @param OrgOpentravelOta200305StateProvType $stateProv
     *
     * @return self
     */
    public function setStateProv(?OrgOpentravelOta200305StateProvType $stateProv): self
    {
        $this->stateProv = $stateProv;

        return $this;
    }

    /**
     * Street Name and Number within the address.
     *
     * @return OrgOpentravelOta200305StreetNmbrType
     */
    public function getStreetNmbr(): ?OrgOpentravelOta200305StreetNmbrType
    {
        return $this->streetNmbr;
    }

    /**
     * Street Name and Number within the address.
     *
     * @param OrgOpentravelOta200305StreetNmbrType $streetNmbr
     *
     * @return self
     */
    public function setStreetNmbr(?OrgOpentravelOta200305StreetNmbrType $streetNmbr): self
    {
        $this->streetNmbr = $streetNmbr;

        return $this;
    }

    /**
     * @return string
     */
    public function getType(): ?string
    {
        return $this->type;
    }

    /**
     * @param string $type
     *
     * @return self
     */
    public function setType(?string $type): self
    {
        $this->type = $type;

        return $this;
    }
}
