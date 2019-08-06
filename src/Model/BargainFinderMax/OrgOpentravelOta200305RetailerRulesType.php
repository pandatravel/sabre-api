<?php

namespace Ammonkc\SabreApi\Model\BargainFinderMax;

use Ammonkc\SabreApi\AbstractModel;

class OrgOpentravelOta200305RetailerRulesType extends AbstractModel
{
    /**
     * If set to true, only fares with a matched Business Rule containing the specified Retailer Rule Qualifier will be returned.
     *
     * @var bool
     */
    protected $force;
    /**
     * @var OrgOpentravelOta200305RetailerRulesTypeRetailerRule[]
     */
    protected $retailerRule;

    /**
     * If set to true, only fares with a matched Business Rule containing the specified Retailer Rule Qualifier will be returned.
     *
     * @return bool
     */
    public function getForce(): bool
    {
        return $this->force;
    }

    /**
     * If set to true, only fares with a matched Business Rule containing the specified Retailer Rule Qualifier will be returned.
     *
     * @param bool $force
     *
     * @return self
     */
    public function setForce(bool $force): self
    {
        $this->force = $force;

        return $this;
    }

    /**
     * @return OrgOpentravelOta200305RetailerRulesTypeRetailerRule[]
     */
    public function getRetailerRule(): array
    {
        return $this->retailerRule;
    }

    /**
     * @param OrgOpentravelOta200305RetailerRulesTypeRetailerRule[] $retailerRule
     *
     * @return self
     */
    public function setRetailerRule(array $retailerRule): self
    {
        $this->retailerRule = $retailerRule;

        return $this;
    }
}
