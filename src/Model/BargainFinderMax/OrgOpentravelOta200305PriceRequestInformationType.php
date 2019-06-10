<?php

namespace Ammonkc\SabreApi\Model\BargainFinderMax;

use Ammonkc\SabreApi\AbstractModel;

class OrgOpentravelOta200305PriceRequestInformationType extends AbstractModel
{
    /**
     * @var OrgOpentravelOta200305PriceRequestInformationTypeAccountCode[]
     */
    protected $accountCode;
    /**
     * Controls advance purchase validation logic for repricing. Values 'T'/'F' can be used by AS, for TN the only valid option is 'N'.
     *
     * @var string
     */
    protected $bypassAdvancePurchase;
    /**
     * @var string
     */
    protected $currencyCode;
    /**
     * @var string
     */
    protected $fareQualifier;
    /**
     * @var OrgOpentravelOta200305PriceRequestInformationTypeNegotiatedFareCode[]
     */
    protected $negotiatedFareCode;
    /**
     * If set to true then returned fares need to match requested AcccountCode/CorpID on all fare components.
     *
     * @var bool
     */
    protected $negotiatedFaresOnly;
    /**
     * Set to true when exchange ticket uses net fare.
     *
     * @var bool
     */
    protected $netFaresUsed;
    /**
     * It can be used to indicate whether the fare is public or private.
     *
     * @var string
     */
    protected $pricingSource;
    /**
     * Activates processing of thru fares only.
     *
     * @var bool
     */
    protected $processThruFaresOnly;
    /**
     * Specify purchase date. Fares returned will be based on the purchase date.
     *
     * @var string
     */
    protected $purchaseDate;
    /**
     * Specify purchase time. Fares returned will be based on the purchase time.
     *
     * @var string
     */
    protected $purchaseTime;
    /**
     * @var bool
     */
    protected $reprice;
    /**
     * Additional elements and attributes to be included if required, per Trading Partner Agreement (TPA).
     *
     * @var OrgOpentravelOta200305PriceRequestInformationTypeTPAExtensions
     */
    protected $tPAExtensions;

    /**
     * @return OrgOpentravelOta200305PriceRequestInformationTypeAccountCode[]
     */
    public function getAccountCode(): ?array
    {
        return $this->accountCode;
    }

    /**
     * @param OrgOpentravelOta200305PriceRequestInformationTypeAccountCode[] $accountCode
     *
     * @return self
     */
    public function setAccountCode(?array $accountCode): self
    {
        $this->accountCode = $accountCode;

        return $this;
    }

    /**
     * Controls advance purchase validation logic for repricing. Values 'T'/'F' can be used by AS, for TN the only valid option is 'N'.
     *
     * @return string
     */
    public function getBypassAdvancePurchase(): ?string
    {
        return $this->bypassAdvancePurchase;
    }

    /**
     * Controls advance purchase validation logic for repricing. Values 'T'/'F' can be used by AS, for TN the only valid option is 'N'.
     *
     * @param string $bypassAdvancePurchase
     *
     * @return self
     */
    public function setBypassAdvancePurchase(?string $bypassAdvancePurchase): self
    {
        $this->bypassAdvancePurchase = $bypassAdvancePurchase;

        return $this;
    }

    /**
     * @return string
     */
    public function getCurrencyCode(): ?string
    {
        return $this->currencyCode;
    }

    /**
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
     * @return string
     */
    public function getFareQualifier(): ?string
    {
        return $this->fareQualifier;
    }

    /**
     * @param string $fareQualifier
     *
     * @return self
     */
    public function setFareQualifier(?string $fareQualifier): self
    {
        $this->fareQualifier = $fareQualifier;

        return $this;
    }

    /**
     * @return OrgOpentravelOta200305PriceRequestInformationTypeNegotiatedFareCode[]
     */
    public function getNegotiatedFareCode(): ?array
    {
        return $this->negotiatedFareCode;
    }

    /**
     * @param OrgOpentravelOta200305PriceRequestInformationTypeNegotiatedFareCode[] $negotiatedFareCode
     *
     * @return self
     */
    public function setNegotiatedFareCode(?array $negotiatedFareCode): self
    {
        $this->negotiatedFareCode = $negotiatedFareCode;

        return $this;
    }

    /**
     * If set to true then returned fares need to match requested AcccountCode/CorpID on all fare components.
     *
     * @return bool
     */
    public function getNegotiatedFaresOnly(): ?bool
    {
        return $this->negotiatedFaresOnly;
    }

    /**
     * If set to true then returned fares need to match requested AcccountCode/CorpID on all fare components.
     *
     * @param bool $negotiatedFaresOnly
     *
     * @return self
     */
    public function setNegotiatedFaresOnly(?bool $negotiatedFaresOnly): self
    {
        $this->negotiatedFaresOnly = $negotiatedFaresOnly;

        return $this;
    }

    /**
     * Set to true when exchange ticket uses net fare.
     *
     * @return bool
     */
    public function getNetFaresUsed(): ?bool
    {
        return $this->netFaresUsed;
    }

    /**
     * Set to true when exchange ticket uses net fare.
     *
     * @param bool $netFaresUsed
     *
     * @return self
     */
    public function setNetFaresUsed(?bool $netFaresUsed): self
    {
        $this->netFaresUsed = $netFaresUsed;

        return $this;
    }

    /**
     * It can be used to indicate whether the fare is public or private.
     *
     * @return string
     */
    public function getPricingSource(): ?string
    {
        return $this->pricingSource;
    }

    /**
     * It can be used to indicate whether the fare is public or private.
     *
     * @param string $pricingSource
     *
     * @return self
     */
    public function setPricingSource(?string $pricingSource): self
    {
        $this->pricingSource = $pricingSource;

        return $this;
    }

    /**
     * Activates processing of thru fares only.
     *
     * @return bool
     */
    public function getProcessThruFaresOnly(): ?bool
    {
        return $this->processThruFaresOnly;
    }

    /**
     * Activates processing of thru fares only.
     *
     * @param bool $processThruFaresOnly
     *
     * @return self
     */
    public function setProcessThruFaresOnly(?bool $processThruFaresOnly): self
    {
        $this->processThruFaresOnly = $processThruFaresOnly;

        return $this;
    }

    /**
     * Specify purchase date. Fares returned will be based on the purchase date.
     *
     * @return string
     */
    public function getPurchaseDate(): ?string
    {
        return $this->purchaseDate;
    }

    /**
     * Specify purchase date. Fares returned will be based on the purchase date.
     *
     * @param string $purchaseDate
     *
     * @return self
     */
    public function setPurchaseDate(?string $purchaseDate): self
    {
        $this->purchaseDate = $purchaseDate;

        return $this;
    }

    /**
     * Specify purchase time. Fares returned will be based on the purchase time.
     *
     * @return string
     */
    public function getPurchaseTime(): ?string
    {
        return $this->purchaseTime;
    }

    /**
     * Specify purchase time. Fares returned will be based on the purchase time.
     *
     * @param string $purchaseTime
     *
     * @return self
     */
    public function setPurchaseTime(?string $purchaseTime): self
    {
        $this->purchaseTime = $purchaseTime;

        return $this;
    }

    /**
     * @return bool
     */
    public function getReprice(): ?bool
    {
        return $this->reprice;
    }

    /**
     * @param bool $reprice
     *
     * @return self
     */
    public function setReprice(?bool $reprice): self
    {
        $this->reprice = $reprice;

        return $this;
    }

    /**
     * Additional elements and attributes to be included if required, per Trading Partner Agreement (TPA).
     *
     * @return OrgOpentravelOta200305PriceRequestInformationTypeTPAExtensions
     */
    public function getTPAExtensions(): ?OrgOpentravelOta200305PriceRequestInformationTypeTPAExtensions
    {
        return $this->tPAExtensions;
    }

    /**
     * Additional elements and attributes to be included if required, per Trading Partner Agreement (TPA).
     *
     * @param OrgOpentravelOta200305PriceRequestInformationTypeTPAExtensions $tPAExtensions
     *
     * @return self
     */
    public function setTPAExtensions(?OrgOpentravelOta200305PriceRequestInformationTypeTPAExtensions $tPAExtensions): self
    {
        $this->tPAExtensions = $tPAExtensions;

        return $this;
    }
}
