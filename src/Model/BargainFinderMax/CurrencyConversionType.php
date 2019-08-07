<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Ammonkc\SabreApi\Model\BargainFinderMax;

use Ammonkc\SabreApi\AbstractModel;

class CurrencyConversionType extends AbstractModel
{
    /**
     * Exchange rate.
     *
     * @var float
     */
    protected $exchangeRate;
    /**
     * Exchange rate used for the currency conversion.
     *
     * @var float
     */
    protected $exchangeRateUsed;
    /**
     * From.
     *
     * @var string
     */
    protected $from;
    /**
     * Conversion overridden.
     *
     * @var bool
     */
    protected $overriden;
    /**
     * To.
     *
     * @var string
     */
    protected $to;

    /**
     * Exchange rate.
     *
     * @return float|null
     */
    public function getExchangeRate(): ?float
    {
        return $this->exchangeRate;
    }

    /**
     * Exchange rate.
     *
     * @param float|null $exchangeRate
     *
     * @return self
     */
    public function setExchangeRate(?float $exchangeRate): self
    {
        $this->exchangeRate = $exchangeRate;

        return $this;
    }

    /**
     * Exchange rate used for the currency conversion.
     *
     * @return float|null
     */
    public function getExchangeRateUsed(): ?float
    {
        return $this->exchangeRateUsed;
    }

    /**
     * Exchange rate used for the currency conversion.
     *
     * @param float|null $exchangeRateUsed
     *
     * @return self
     */
    public function setExchangeRateUsed(?float $exchangeRateUsed): self
    {
        $this->exchangeRateUsed = $exchangeRateUsed;

        return $this;
    }

    /**
     * From.
     *
     * @return string|null
     */
    public function getFrom(): ?string
    {
        return $this->from;
    }

    /**
     * From.
     *
     * @param string|null $from
     *
     * @return self
     */
    public function setFrom(?string $from): self
    {
        $this->from = $from;

        return $this;
    }

    /**
     * Conversion overridden.
     *
     * @return bool|null
     */
    public function getOverriden(): ?bool
    {
        return $this->overriden;
    }

    /**
     * Conversion overridden.
     *
     * @param bool|null $overriden
     *
     * @return self
     */
    public function setOverriden(?bool $overriden): self
    {
        $this->overriden = $overriden;

        return $this;
    }

    /**
     * To.
     *
     * @return string|null
     */
    public function getTo(): ?string
    {
        return $this->to;
    }

    /**
     * To.
     *
     * @param string|null $to
     *
     * @return self
     */
    public function setTo(?string $to): self
    {
        $this->to = $to;

        return $this;
    }
}
