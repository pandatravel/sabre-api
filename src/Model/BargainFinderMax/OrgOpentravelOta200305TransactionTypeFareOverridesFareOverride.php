<?php

namespace Ammonkc\SabreApi\Model\BargainFinderMax;

use Ammonkc\SabreApi\AbstractModel;

class OrgOpentravelOta200305TransactionTypeFareOverridesFareOverride extends AbstractModel
{
    /**
     * Indicator to enable/disable this FareOverride.,Attribute of FareGroup functionality, used in search of fares during shopping.
     *
     * @var string
     */
    protected $callable;
    /**
     * Attribute of FareGroup functionality, used in search of fares during shopping.
     *
     * @var string
     */
    protected $corporateID;
    /**
     * @var string
     */
    protected $fareType;
    /**
     * @var string
     */
    protected $pseudoCityCode;
    /**
     * This is a place holder for additional elements.
     *
     * @var string
     */
    protected $tPAExtensions;
    /**
     * @var OrgOpentravelOta200305CompanyNamePrefType[]
     */
    protected $vendorPref;

    /**
     * Indicator to enable/disable this FareOverride.,Attribute of FareGroup functionality, used in search of fares during shopping.
     *
     * @return string
     */
    public function getCallable(): string
    {
        return $this->callable;
    }

    /**
     * Indicator to enable/disable this FareOverride.,Attribute of FareGroup functionality, used in search of fares during shopping.
     *
     * @param string $callable
     *
     * @return self
     */
    public function setCallable(string $callable): self
    {
        $this->callable = $callable;

        return $this;
    }

    /**
     * Attribute of FareGroup functionality, used in search of fares during shopping.
     *
     * @return string
     */
    public function getCorporateID(): string
    {
        return $this->corporateID;
    }

    /**
     * Attribute of FareGroup functionality, used in search of fares during shopping.
     *
     * @param string $corporateID
     *
     * @return self
     */
    public function setCorporateID(string $corporateID): self
    {
        $this->corporateID = $corporateID;

        return $this;
    }

    /**
     * @return string
     */
    public function getFareType(): string
    {
        return $this->fareType;
    }

    /**
     * @param string $fareType
     *
     * @return self
     */
    public function setFareType(string $fareType): self
    {
        $this->fareType = $fareType;

        return $this;
    }

    /**
     * @return string
     */
    public function getPseudoCityCode(): string
    {
        return $this->pseudoCityCode;
    }

    /**
     * @param string $pseudoCityCode
     *
     * @return self
     */
    public function setPseudoCityCode(string $pseudoCityCode): self
    {
        $this->pseudoCityCode = $pseudoCityCode;

        return $this;
    }

    /**
     * This is a place holder for additional elements.
     *
     * @return string
     */
    public function getTPAExtensions(): string
    {
        return $this->tPAExtensions;
    }

    /**
     * This is a place holder for additional elements.
     *
     * @param string $tPAExtensions
     *
     * @return self
     */
    public function setTPAExtensions(string $tPAExtensions): self
    {
        $this->tPAExtensions = $tPAExtensions;

        return $this;
    }

    /**
     * @return OrgOpentravelOta200305CompanyNamePrefType[]
     */
    public function getVendorPref(): array
    {
        return $this->vendorPref;
    }

    /**
     * @param OrgOpentravelOta200305CompanyNamePrefType[] $vendorPref
     *
     * @return self
     */
    public function setVendorPref(array $vendorPref): self
    {
        $this->vendorPref = $vendorPref;

        return $this;
    }
}
