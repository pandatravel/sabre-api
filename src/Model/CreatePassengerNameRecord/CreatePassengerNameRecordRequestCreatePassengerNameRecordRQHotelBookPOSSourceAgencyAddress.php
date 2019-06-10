<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Ammonkc\SabreApi\Model\CreatePassengerNameRecord;

use Ammonkc\SabreApi\AbstractModel;

class CreatePassengerNameRecordRequestCreatePassengerNameRecordRQHotelBookPOSSourceAgencyAddress extends AbstractModel
{
    /**
     * First address line.
     *
     * @var string
     */
    protected $addressLine1;
    /**
     * Second address line.
     *
     * @var string
     */
    protected $addressLine2;
    /**
     * Third address line.
     *
     * @var string
     */
    protected $addressLine3;
    /**
     * City name with code.
     *
     * @var CreatePassengerNameRecordRequestCreatePassengerNameRecordRQHotelBookPOSSourceAgencyAddressCityName
     */
    protected $cityName;
    /**
     * State name with code.
     *
     * @var CreatePassengerNameRecordRequestCreatePassengerNameRecordRQHotelBookPOSSourceAgencyAddressStateProv
     */
    protected $stateProv;
    /**
     * Postal code.
     *
     * @var string
     */
    protected $postalCode;
    /**
     * Country name with code.
     *
     * @var CreatePassengerNameRecordRequestCreatePassengerNameRecordRQHotelBookPOSSourceAgencyAddressCountryName
     */
    protected $countryName;

    /**
     * First address line.
     *
     * @return string
     */
    public function getAddressLine1(): ?string
    {
        return $this->addressLine1;
    }

    /**
     * First address line.
     *
     * @param string $addressLine1
     *
     * @return self
     */
    public function setAddressLine1(?string $addressLine1): self
    {
        $this->addressLine1 = $addressLine1;

        return $this;
    }

    /**
     * Second address line.
     *
     * @return string
     */
    public function getAddressLine2(): ?string
    {
        return $this->addressLine2;
    }

    /**
     * Second address line.
     *
     * @param string $addressLine2
     *
     * @return self
     */
    public function setAddressLine2(?string $addressLine2): self
    {
        $this->addressLine2 = $addressLine2;

        return $this;
    }

    /**
     * Third address line.
     *
     * @return string
     */
    public function getAddressLine3(): ?string
    {
        return $this->addressLine3;
    }

    /**
     * Third address line.
     *
     * @param string $addressLine3
     *
     * @return self
     */
    public function setAddressLine3(?string $addressLine3): self
    {
        $this->addressLine3 = $addressLine3;

        return $this;
    }

    /**
     * City name with code.
     *
     * @return CreatePassengerNameRecordRequestCreatePassengerNameRecordRQHotelBookPOSSourceAgencyAddressCityName
     */
    public function getCityName(): ?CreatePassengerNameRecordRequestCreatePassengerNameRecordRQHotelBookPOSSourceAgencyAddressCityName
    {
        return $this->cityName;
    }

    /**
     * City name with code.
     *
     * @param CreatePassengerNameRecordRequestCreatePassengerNameRecordRQHotelBookPOSSourceAgencyAddressCityName $cityName
     *
     * @return self
     */
    public function setCityName(?CreatePassengerNameRecordRequestCreatePassengerNameRecordRQHotelBookPOSSourceAgencyAddressCityName $cityName): self
    {
        $this->cityName = $cityName;

        return $this;
    }

    /**
     * State name with code.
     *
     * @return CreatePassengerNameRecordRequestCreatePassengerNameRecordRQHotelBookPOSSourceAgencyAddressStateProv
     */
    public function getStateProv(): ?CreatePassengerNameRecordRequestCreatePassengerNameRecordRQHotelBookPOSSourceAgencyAddressStateProv
    {
        return $this->stateProv;
    }

    /**
     * State name with code.
     *
     * @param CreatePassengerNameRecordRequestCreatePassengerNameRecordRQHotelBookPOSSourceAgencyAddressStateProv $stateProv
     *
     * @return self
     */
    public function setStateProv(?CreatePassengerNameRecordRequestCreatePassengerNameRecordRQHotelBookPOSSourceAgencyAddressStateProv $stateProv): self
    {
        $this->stateProv = $stateProv;

        return $this;
    }

    /**
     * Postal code.
     *
     * @return string
     */
    public function getPostalCode(): ?string
    {
        return $this->postalCode;
    }

    /**
     * Postal code.
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
     * Country name with code.
     *
     * @return CreatePassengerNameRecordRequestCreatePassengerNameRecordRQHotelBookPOSSourceAgencyAddressCountryName
     */
    public function getCountryName(): ?CreatePassengerNameRecordRequestCreatePassengerNameRecordRQHotelBookPOSSourceAgencyAddressCountryName
    {
        return $this->countryName;
    }

    /**
     * Country name with code.
     *
     * @param CreatePassengerNameRecordRequestCreatePassengerNameRecordRQHotelBookPOSSourceAgencyAddressCountryName $countryName
     *
     * @return self
     */
    public function setCountryName(?CreatePassengerNameRecordRequestCreatePassengerNameRecordRQHotelBookPOSSourceAgencyAddressCountryName $countryName): self
    {
        $this->countryName = $countryName;

        return $this;
    }
}
