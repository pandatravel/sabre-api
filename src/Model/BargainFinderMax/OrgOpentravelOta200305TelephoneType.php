<?php

namespace Ammonkc\SabreApi\Model\BargainFinderMax;

use Ammonkc\SabreApi\AbstractModel;

class OrgOpentravelOta200305TelephoneType extends AbstractModel
{
    /**
     * Code assigned for telephones in a specific region, city, or area.
     *
     * @var string
     */
    protected $areaCityCode;
    /**
     * Code assigned by telecommunications authorities for international country access identifier.
     *
     * @var string
     */
    protected $countryAccessCode;
    /**
     * Extension to reach a specific party at the phone number.
     *
     * @var string
     */
    protected $extension;
    /**
     * Specifies if the associated data is formatted or not. If true, then it is formatted, if false, then not formatted.
     *
     * @var bool
     */
    protected $formattedInd;
    /**
     * Additional codes used for pager or telephone access rights.
     *
     * @var string
     */
    protected $pIN;
    /**
     * @var string
     */
    protected $phoneLocationType;
    /**
     * Telephone number assigned to a single location.
     *
     * @var string
     */
    protected $phoneNumber;
    /**
     * @var string
     */
    protected $phoneTechType;
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
     * Code assigned for telephones in a specific region, city, or area.
     *
     * @return string
     */
    public function getAreaCityCode(): string
    {
        return $this->areaCityCode;
    }

    /**
     * Code assigned for telephones in a specific region, city, or area.
     *
     * @param string $areaCityCode
     *
     * @return self
     */
    public function setAreaCityCode(string $areaCityCode): self
    {
        $this->areaCityCode = $areaCityCode;

        return $this;
    }

    /**
     * Code assigned by telecommunications authorities for international country access identifier.
     *
     * @return string
     */
    public function getCountryAccessCode(): string
    {
        return $this->countryAccessCode;
    }

    /**
     * Code assigned by telecommunications authorities for international country access identifier.
     *
     * @param string $countryAccessCode
     *
     * @return self
     */
    public function setCountryAccessCode(string $countryAccessCode): self
    {
        $this->countryAccessCode = $countryAccessCode;

        return $this;
    }

    /**
     * Extension to reach a specific party at the phone number.
     *
     * @return string
     */
    public function getExtension(): string
    {
        return $this->extension;
    }

    /**
     * Extension to reach a specific party at the phone number.
     *
     * @param string $extension
     *
     * @return self
     */
    public function setExtension(string $extension): self
    {
        $this->extension = $extension;

        return $this;
    }

    /**
     * Specifies if the associated data is formatted or not. If true, then it is formatted, if false, then not formatted.
     *
     * @return bool
     */
    public function getFormattedInd(): bool
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
    public function setFormattedInd(bool $formattedInd): self
    {
        $this->formattedInd = $formattedInd;

        return $this;
    }

    /**
     * Additional codes used for pager or telephone access rights.
     *
     * @return string
     */
    public function getPIN(): string
    {
        return $this->pIN;
    }

    /**
     * Additional codes used for pager or telephone access rights.
     *
     * @param string $pIN
     *
     * @return self
     */
    public function setPIN(string $pIN): self
    {
        $this->pIN = $pIN;

        return $this;
    }

    /**
     * @return string
     */
    public function getPhoneLocationType(): string
    {
        return $this->phoneLocationType;
    }

    /**
     * @param string $phoneLocationType
     *
     * @return self
     */
    public function setPhoneLocationType(string $phoneLocationType): self
    {
        $this->phoneLocationType = $phoneLocationType;

        return $this;
    }

    /**
     * Telephone number assigned to a single location.
     *
     * @return string
     */
    public function getPhoneNumber(): string
    {
        return $this->phoneNumber;
    }

    /**
     * Telephone number assigned to a single location.
     *
     * @param string $phoneNumber
     *
     * @return self
     */
    public function setPhoneNumber(string $phoneNumber): self
    {
        $this->phoneNumber = $phoneNumber;

        return $this;
    }

    /**
     * @return string
     */
    public function getPhoneTechType(): string
    {
        return $this->phoneTechType;
    }

    /**
     * @param string $phoneTechType
     *
     * @return self
     */
    public function setPhoneTechType(string $phoneTechType): self
    {
        $this->phoneTechType = $phoneTechType;

        return $this;
    }

    /**
     * value="Inherit" Permission for sharing data for marketing purposes.
     *
     * @return string
     */
    public function getShareMarketInd(): string
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
    public function setShareMarketInd(string $shareMarketInd): self
    {
        $this->shareMarketInd = $shareMarketInd;

        return $this;
    }

    /**
     * value="Inherit" Permission for sharing data for synchronization of information held by other travel service providers.
     *
     * @return string
     */
    public function getShareSynchInd(): string
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
    public function setShareSynchInd(string $shareSynchInd): self
    {
        $this->shareSynchInd = $shareSynchInd;

        return $this;
    }
}
