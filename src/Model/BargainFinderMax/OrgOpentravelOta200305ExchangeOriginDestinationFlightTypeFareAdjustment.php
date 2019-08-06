<?php

namespace Ammonkc\SabreApi\Model\BargainFinderMax;

use Ammonkc\SabreApi\AbstractModel;

class OrgOpentravelOta200305ExchangeOriginDestinationFlightTypeFareAdjustment extends AbstractModel
{
    /**
     * Currency of Adjustment's Value.
     *
     * @var string
     */
    protected $currency;
    /**
     * Markup/Discount Group.
     *
     * @var float
     */
    protected $group;
    /**
     * Adjustment Value, can be positive or negative, number or percentage.
     *
     * @var string
     */
    protected $value;

    /**
     * Currency of Adjustment's Value.
     *
     * @return string
     */
    public function getCurrency(): string
    {
        return $this->currency;
    }

    /**
     * Currency of Adjustment's Value.
     *
     * @param string $currency
     *
     * @return self
     */
    public function setCurrency(string $currency): self
    {
        $this->currency = $currency;

        return $this;
    }

    /**
     * Markup/Discount Group.
     *
     * @return float
     */
    public function getGroup(): float
    {
        return $this->group;
    }

    /**
     * Markup/Discount Group.
     *
     * @param float $group
     *
     * @return self
     */
    public function setGroup(float $group): self
    {
        $this->group = $group;

        return $this;
    }

    /**
     * Adjustment Value, can be positive or negative, number or percentage.
     *
     * @return string
     */
    public function getValue(): string
    {
        return $this->value;
    }

    /**
     * Adjustment Value, can be positive or negative, number or percentage.
     *
     * @param string $value
     *
     * @return self
     */
    public function setValue(string $value): self
    {
        $this->value = $value;

        return $this;
    }
}
