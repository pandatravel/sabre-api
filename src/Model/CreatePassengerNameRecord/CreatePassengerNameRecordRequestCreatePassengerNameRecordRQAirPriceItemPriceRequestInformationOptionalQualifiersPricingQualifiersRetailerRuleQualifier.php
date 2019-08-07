<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Ammonkc\SabreApi\Model\CreatePassengerNameRecord;

use Ammonkc\SabreApi\AbstractModel;

class CreatePassengerNameRecordRequestCreatePassengerNameRecordRQAirPriceItemPriceRequestInformationOptionalQualifiersPricingQualifiersRetailerRuleQualifier extends AbstractModel
{
    /**
     * The Retailer Rule Qualifier code.
     *
     * @var string[]
     */
    protected $qualifier;
    /**
     * Used to force only fares with a matched Business Rule containing the specified Retailer Rule Qualifier.
    'Force' can only be used with one 'Qualifier'.

     *
     * @var bool
     */
    protected $force;

    /**
     * The Retailer Rule Qualifier code.
     *
     * @return string[]|null
     */
    public function getQualifier(): ?array
    {
        return $this->qualifier;
    }

    /**
     * The Retailer Rule Qualifier code.
     *
     * @param string[]|null $qualifier
     *
     * @return self
     */
    public function setQualifier(?array $qualifier): self
    {
        $this->qualifier = $qualifier;

        return $this;
    }

    /**
     * Used to force only fares with a matched Business Rule containing the specified Retailer Rule Qualifier.
    'Force' can only be used with one 'Qualifier'.

     *
     * @return bool|null
     */
    public function getForce(): ?bool
    {
        return $this->force;
    }

    /**
     * Used to force only fares with a matched Business Rule containing the specified Retailer Rule Qualifier.
    'Force' can only be used with one 'Qualifier'.

     *
     * @param bool|null $force
     *
     * @return self
     */
    public function setForce(?bool $force): self
    {
        $this->force = $force;

        return $this;
    }
}
