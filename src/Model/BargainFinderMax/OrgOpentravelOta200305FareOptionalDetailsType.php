<?php

namespace Ammonkc\SabreApi\Model\BargainFinderMax;

use Ammonkc\SabreApi\AbstractModel;

class OrgOpentravelOta200305FareOptionalDetailsType extends AbstractModel
{
    /**
     * Fare amount (note: last Flight in Fare Component).
     *
     * @var float
     */
    protected $amount;
    /**
     * Fare basis code.
     *
     * @var string
     */
    protected $basisCode;
    /**
     * Used to indicate brand code.
     *
     * @var string
     */
    protected $brandID;
    /**
     * Fare component number.
     *
     * @var float
     */
    protected $componentNo;
    /**
     * @var int
     */
    protected $programID;
    /**
     * Rule Number (note: last Flight in Fare Component).
     *
     * @var string
     */
    protected $ruleNumber;
    /**
     * Fare Source Vendor (note: last Flight in Fare Component).
     *
     * @var string
     */
    protected $sourceVendor;
    /**
     * Tariff (note: last Flight in Fare Component).
     *
     * @var string
     */
    protected $tariff;
    /**
     * Vendor (note: last Flight in Fare Component).
     *
     * @var string
     */
    protected $vendor;

    /**
     * Fare amount (note: last Flight in Fare Component).
     *
     * @return float
     */
    public function getAmount(): ?float
    {
        return $this->amount;
    }

    /**
     * Fare amount (note: last Flight in Fare Component).
     *
     * @param float $amount
     *
     * @return self
     */
    public function setAmount(?float $amount): self
    {
        $this->amount = $amount;

        return $this;
    }

    /**
     * Fare basis code.
     *
     * @return string
     */
    public function getBasisCode(): ?string
    {
        return $this->basisCode;
    }

    /**
     * Fare basis code.
     *
     * @param string $basisCode
     *
     * @return self
     */
    public function setBasisCode(?string $basisCode): self
    {
        $this->basisCode = $basisCode;

        return $this;
    }

    /**
     * Used to indicate brand code.
     *
     * @return string
     */
    public function getBrandID(): ?string
    {
        return $this->brandID;
    }

    /**
     * Used to indicate brand code.
     *
     * @param string $brandID
     *
     * @return self
     */
    public function setBrandID(?string $brandID): self
    {
        $this->brandID = $brandID;

        return $this;
    }

    /**
     * Fare component number.
     *
     * @return float
     */
    public function getComponentNo(): ?float
    {
        return $this->componentNo;
    }

    /**
     * Fare component number.
     *
     * @param float $componentNo
     *
     * @return self
     */
    public function setComponentNo(?float $componentNo): self
    {
        $this->componentNo = $componentNo;

        return $this;
    }

    /**
     * @return int
     */
    public function getProgramID(): ?int
    {
        return $this->programID;
    }

    /**
     * @param int $programID
     *
     * @return self
     */
    public function setProgramID(?int $programID): self
    {
        $this->programID = $programID;

        return $this;
    }

    /**
     * Rule Number (note: last Flight in Fare Component).
     *
     * @return string
     */
    public function getRuleNumber(): ?string
    {
        return $this->ruleNumber;
    }

    /**
     * Rule Number (note: last Flight in Fare Component).
     *
     * @param string $ruleNumber
     *
     * @return self
     */
    public function setRuleNumber(?string $ruleNumber): self
    {
        $this->ruleNumber = $ruleNumber;

        return $this;
    }

    /**
     * Fare Source Vendor (note: last Flight in Fare Component).
     *
     * @return string
     */
    public function getSourceVendor(): ?string
    {
        return $this->sourceVendor;
    }

    /**
     * Fare Source Vendor (note: last Flight in Fare Component).
     *
     * @param string $sourceVendor
     *
     * @return self
     */
    public function setSourceVendor(?string $sourceVendor): self
    {
        $this->sourceVendor = $sourceVendor;

        return $this;
    }

    /**
     * Tariff (note: last Flight in Fare Component).
     *
     * @return string
     */
    public function getTariff(): ?string
    {
        return $this->tariff;
    }

    /**
     * Tariff (note: last Flight in Fare Component).
     *
     * @param string $tariff
     *
     * @return self
     */
    public function setTariff(?string $tariff): self
    {
        $this->tariff = $tariff;

        return $this;
    }

    /**
     * Vendor (note: last Flight in Fare Component).
     *
     * @return string
     */
    public function getVendor(): ?string
    {
        return $this->vendor;
    }

    /**
     * Vendor (note: last Flight in Fare Component).
     *
     * @param string $vendor
     *
     * @return self
     */
    public function setVendor(?string $vendor): self
    {
        $this->vendor = $vendor;

        return $this;
    }
}
