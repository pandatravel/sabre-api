<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Ammonkc\SabreApi\Model\CreatePassengerNameRecord;

use Ammonkc\SabreApi\AbstractModel;

class CreatePassengerNameRecordRequestCreatePassengerNameRecordRQHotelBookPaymentInformationFormOfPaymentPaymentCardAddress extends AbstractModel
{
    /**
     * Address.
     *
     * @var string[]
     */
    protected $addressLine;
    /**
     * City name.
     *
     * @var string
     */
    protected $cityName;
    /**
     * City code.
     *
     * @var CreatePassengerNameRecordRequestCreatePassengerNameRecordRQHotelBookPaymentInformationFormOfPaymentPaymentCardAddressCityCodes
     */
    protected $cityCodes;
    /**
     * State or province code.
     *
     * @var CreatePassengerNameRecordRequestCreatePassengerNameRecordRQHotelBookPaymentInformationFormOfPaymentPaymentCardAddressStateProvince
     */
    protected $stateProvince;
    /**
     * State or province code.
     *
     * @var CreatePassengerNameRecordRequestCreatePassengerNameRecordRQHotelBookPaymentInformationFormOfPaymentPaymentCardAddressStateProvinceCodes
     */
    protected $stateProvinceCodes;
    /**
     * Post code.
     *
     * @var string
     */
    protected $postCode;
    /**
     * Country code.
     *
     * @var CreatePassengerNameRecordRequestCreatePassengerNameRecordRQHotelBookPaymentInformationFormOfPaymentPaymentCardAddressCountry
     */
    protected $country;
    /**
     * Country code.
     *
     * @var CreatePassengerNameRecordRequestCreatePassengerNameRecordRQHotelBookPaymentInformationFormOfPaymentPaymentCardAddressCountryCodes
     */
    protected $countryCodes;

    /**
     * Address.
     *
     * @return string[]
     */
    public function getAddressLine(): ?array
    {
        return $this->addressLine;
    }

    /**
     * Address.
     *
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
     * City name.
     *
     * @return string
     */
    public function getCityName(): ?string
    {
        return $this->cityName;
    }

    /**
     * City name.
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
     * City code.
     *
     * @return CreatePassengerNameRecordRequestCreatePassengerNameRecordRQHotelBookPaymentInformationFormOfPaymentPaymentCardAddressCityCodes
     */
    public function getCityCodes(): ?CreatePassengerNameRecordRequestCreatePassengerNameRecordRQHotelBookPaymentInformationFormOfPaymentPaymentCardAddressCityCodes
    {
        return $this->cityCodes;
    }

    /**
     * City code.
     *
     * @param CreatePassengerNameRecordRequestCreatePassengerNameRecordRQHotelBookPaymentInformationFormOfPaymentPaymentCardAddressCityCodes $cityCodes
     *
     * @return self
     */
    public function setCityCodes(?CreatePassengerNameRecordRequestCreatePassengerNameRecordRQHotelBookPaymentInformationFormOfPaymentPaymentCardAddressCityCodes $cityCodes): self
    {
        $this->cityCodes = $cityCodes;

        return $this;
    }

    /**
     * State or province code.
     *
     * @return CreatePassengerNameRecordRequestCreatePassengerNameRecordRQHotelBookPaymentInformationFormOfPaymentPaymentCardAddressStateProvince
     */
    public function getStateProvince(): ?CreatePassengerNameRecordRequestCreatePassengerNameRecordRQHotelBookPaymentInformationFormOfPaymentPaymentCardAddressStateProvince
    {
        return $this->stateProvince;
    }

    /**
     * State or province code.
     *
     * @param CreatePassengerNameRecordRequestCreatePassengerNameRecordRQHotelBookPaymentInformationFormOfPaymentPaymentCardAddressStateProvince $stateProvince
     *
     * @return self
     */
    public function setStateProvince(?CreatePassengerNameRecordRequestCreatePassengerNameRecordRQHotelBookPaymentInformationFormOfPaymentPaymentCardAddressStateProvince $stateProvince): self
    {
        $this->stateProvince = $stateProvince;

        return $this;
    }

    /**
     * State or province code.
     *
     * @return CreatePassengerNameRecordRequestCreatePassengerNameRecordRQHotelBookPaymentInformationFormOfPaymentPaymentCardAddressStateProvinceCodes
     */
    public function getStateProvinceCodes(): ?CreatePassengerNameRecordRequestCreatePassengerNameRecordRQHotelBookPaymentInformationFormOfPaymentPaymentCardAddressStateProvinceCodes
    {
        return $this->stateProvinceCodes;
    }

    /**
     * State or province code.
     *
     * @param CreatePassengerNameRecordRequestCreatePassengerNameRecordRQHotelBookPaymentInformationFormOfPaymentPaymentCardAddressStateProvinceCodes $stateProvinceCodes
     *
     * @return self
     */
    public function setStateProvinceCodes(?CreatePassengerNameRecordRequestCreatePassengerNameRecordRQHotelBookPaymentInformationFormOfPaymentPaymentCardAddressStateProvinceCodes $stateProvinceCodes): self
    {
        $this->stateProvinceCodes = $stateProvinceCodes;

        return $this;
    }

    /**
     * Post code.
     *
     * @return string
     */
    public function getPostCode(): ?string
    {
        return $this->postCode;
    }

    /**
     * Post code.
     *
     * @param string $postCode
     *
     * @return self
     */
    public function setPostCode(?string $postCode): self
    {
        $this->postCode = $postCode;

        return $this;
    }

    /**
     * Country code.
     *
     * @return CreatePassengerNameRecordRequestCreatePassengerNameRecordRQHotelBookPaymentInformationFormOfPaymentPaymentCardAddressCountry
     */
    public function getCountry(): ?CreatePassengerNameRecordRequestCreatePassengerNameRecordRQHotelBookPaymentInformationFormOfPaymentPaymentCardAddressCountry
    {
        return $this->country;
    }

    /**
     * Country code.
     *
     * @param CreatePassengerNameRecordRequestCreatePassengerNameRecordRQHotelBookPaymentInformationFormOfPaymentPaymentCardAddressCountry $country
     *
     * @return self
     */
    public function setCountry(?CreatePassengerNameRecordRequestCreatePassengerNameRecordRQHotelBookPaymentInformationFormOfPaymentPaymentCardAddressCountry $country): self
    {
        $this->country = $country;

        return $this;
    }

    /**
     * Country code.
     *
     * @return CreatePassengerNameRecordRequestCreatePassengerNameRecordRQHotelBookPaymentInformationFormOfPaymentPaymentCardAddressCountryCodes
     */
    public function getCountryCodes(): ?CreatePassengerNameRecordRequestCreatePassengerNameRecordRQHotelBookPaymentInformationFormOfPaymentPaymentCardAddressCountryCodes
    {
        return $this->countryCodes;
    }

    /**
     * Country code.
     *
     * @param CreatePassengerNameRecordRequestCreatePassengerNameRecordRQHotelBookPaymentInformationFormOfPaymentPaymentCardAddressCountryCodes $countryCodes
     *
     * @return self
     */
    public function setCountryCodes(?CreatePassengerNameRecordRequestCreatePassengerNameRecordRQHotelBookPaymentInformationFormOfPaymentPaymentCardAddressCountryCodes $countryCodes): self
    {
        $this->countryCodes = $countryCodes;

        return $this;
    }
}