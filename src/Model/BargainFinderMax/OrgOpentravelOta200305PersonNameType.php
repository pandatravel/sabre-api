<?php

namespace Ammonkc\SabreApi\Model\BargainFinderMax;

use Ammonkc\SabreApi\AbstractModel;

class OrgOpentravelOta200305PersonNameType extends AbstractModel
{
    /**
     * @var string[]
     */
    protected $givenName;
    /**
     * @var string[]
     */
    protected $middleName;
    /**
     * @var string[]
     */
    protected $namePrefix;
    /**
     * @var string[]
     */
    protected $nameSuffix;
    /**
     * @var string[]
     */
    protected $nameTitle;
    /**
     * @var string
     */
    protected $nameType;
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
     * Family name, last name.
     *
     * @var string
     */
    protected $surname;
    /**
     * e.g "van der", "von", "de".
     *
     * @var string
     */
    protected $surnamePrefix;

    /**
     * @return string[]
     */
    public function getGivenName(): array
    {
        return $this->givenName;
    }

    /**
     * @param string[] $givenName
     *
     * @return self
     */
    public function setGivenName(array $givenName): self
    {
        $this->givenName = $givenName;

        return $this;
    }

    /**
     * @return string[]
     */
    public function getMiddleName(): array
    {
        return $this->middleName;
    }

    /**
     * @param string[] $middleName
     *
     * @return self
     */
    public function setMiddleName(array $middleName): self
    {
        $this->middleName = $middleName;

        return $this;
    }

    /**
     * @return string[]
     */
    public function getNamePrefix(): array
    {
        return $this->namePrefix;
    }

    /**
     * @param string[] $namePrefix
     *
     * @return self
     */
    public function setNamePrefix(array $namePrefix): self
    {
        $this->namePrefix = $namePrefix;

        return $this;
    }

    /**
     * @return string[]
     */
    public function getNameSuffix(): array
    {
        return $this->nameSuffix;
    }

    /**
     * @param string[] $nameSuffix
     *
     * @return self
     */
    public function setNameSuffix(array $nameSuffix): self
    {
        $this->nameSuffix = $nameSuffix;

        return $this;
    }

    /**
     * @return string[]
     */
    public function getNameTitle(): array
    {
        return $this->nameTitle;
    }

    /**
     * @param string[] $nameTitle
     *
     * @return self
     */
    public function setNameTitle(array $nameTitle): self
    {
        $this->nameTitle = $nameTitle;

        return $this;
    }

    /**
     * @return string
     */
    public function getNameType(): string
    {
        return $this->nameType;
    }

    /**
     * @param string $nameType
     *
     * @return self
     */
    public function setNameType(string $nameType): self
    {
        $this->nameType = $nameType;

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

    /**
     * Family name, last name.
     *
     * @return string
     */
    public function getSurname(): string
    {
        return $this->surname;
    }

    /**
     * Family name, last name.
     *
     * @param string $surname
     *
     * @return self
     */
    public function setSurname(string $surname): self
    {
        $this->surname = $surname;

        return $this;
    }

    /**
     * e.g "van der", "von", "de".
     *
     * @return string
     */
    public function getSurnamePrefix(): string
    {
        return $this->surnamePrefix;
    }

    /**
     * e.g "van der", "von", "de".
     *
     * @param string $surnamePrefix
     *
     * @return self
     */
    public function setSurnamePrefix(string $surnamePrefix): self
    {
        $this->surnamePrefix = $surnamePrefix;

        return $this;
    }
}
