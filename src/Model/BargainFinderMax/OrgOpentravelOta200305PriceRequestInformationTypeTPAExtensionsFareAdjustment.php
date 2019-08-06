<?php

namespace Ammonkc\SabreApi\Model\BargainFinderMax;

use Ammonkc\SabreApi\AbstractModel;

class OrgOpentravelOta200305PriceRequestInformationTypeTPAExtensionsFareAdjustment extends AbstractModel
{
    /**
     * Currency of Adjustment's Value.
     *
     * @var string
     */
    protected $currency;
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
