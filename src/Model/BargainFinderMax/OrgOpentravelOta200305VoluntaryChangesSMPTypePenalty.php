<?php

namespace Ammonkc\SabreApi\Model\BargainFinderMax;

use Ammonkc\SabreApi\AbstractModel;

class OrgOpentravelOta200305VoluntaryChangesSMPTypePenalty extends AbstractModel
{
    /**
     * Used for amounts, max 3 decimals.
     *
     * @var float
     */
    protected $amount;
    /**
     * Identifier used to indicate whether the change occurs before or after departure from the origin city.,Indicates the type (Refund or Exchange) of penalty involved in the search or response.
     *
     * @var string
     */
    protected $application;
    /**
     * A currency code (e.g. USD, EUR, PLN).
     *
     * @var string
     */
    protected $currencyCode;
    /**
     * Indicates the number of decimal places for a particular currency. This is equivalent to the ISO 4217 standard "minor unit".
     *
     * @var int
     */
    protected $decimalPlaces;
    /**
     * Indicate that specific penalty type should be excluded from the response.
     *
     * @var bool
     */
    protected $exclude;
    /**
     * @var string
     */
    protected $type;

    /**
     * Used for amounts, max 3 decimals.
     *
     * @return float
     */
    public function getAmount(): float
    {
        return $this->amount;
    }

    /**
     * Used for amounts, max 3 decimals.
     *
     * @param float $amount
     *
     * @return self
     */
    public function setAmount(float $amount): self
    {
        $this->amount = $amount;

        return $this;
    }

    /**
     * Identifier used to indicate whether the change occurs before or after departure from the origin city.,Indicates the type (Refund or Exchange) of penalty involved in the search or response.
     *
     * @return string
     */
    public function getApplication(): string
    {
        return $this->application;
    }

    /**
     * Identifier used to indicate whether the change occurs before or after departure from the origin city.,Indicates the type (Refund or Exchange) of penalty involved in the search or response.
     *
     * @param string $application
     *
     * @return self
     */
    public function setApplication(string $application): self
    {
        $this->application = $application;

        return $this;
    }

    /**
     * A currency code (e.g. USD, EUR, PLN).
     *
     * @return string
     */
    public function getCurrencyCode(): string
    {
        return $this->currencyCode;
    }

    /**
     * A currency code (e.g. USD, EUR, PLN).
     *
     * @param string $currencyCode
     *
     * @return self
     */
    public function setCurrencyCode(string $currencyCode): self
    {
        $this->currencyCode = $currencyCode;

        return $this;
    }

    /**
     * Indicates the number of decimal places for a particular currency. This is equivalent to the ISO 4217 standard "minor unit".
     *
     * @return int
     */
    public function getDecimalPlaces(): int
    {
        return $this->decimalPlaces;
    }

    /**
     * Indicates the number of decimal places for a particular currency. This is equivalent to the ISO 4217 standard "minor unit".
     *
     * @param int $decimalPlaces
     *
     * @return self
     */
    public function setDecimalPlaces(int $decimalPlaces): self
    {
        $this->decimalPlaces = $decimalPlaces;

        return $this;
    }

    /**
     * Indicate that specific penalty type should be excluded from the response.
     *
     * @return bool
     */
    public function getExclude(): bool
    {
        return $this->exclude;
    }

    /**
     * Indicate that specific penalty type should be excluded from the response.
     *
     * @param bool $exclude
     *
     * @return self
     */
    public function setExclude(bool $exclude): self
    {
        $this->exclude = $exclude;

        return $this;
    }

    /**
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }

    /**
     * @param string $type
     *
     * @return self
     */
    public function setType(string $type): self
    {
        $this->type = $type;

        return $this;
    }
}
