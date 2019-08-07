<?php

namespace Ammonkc\SabreApi\Model\BargainFinderMax;

use Ammonkc\SabreApi\AbstractModel;

class OrgOpentravelOta200305VoluntaryChangesTypePenalty extends AbstractModel
{
    /**
     * Used for amounts, max 3 decimals.
     *
     * @var float
     */
    protected $amount;
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
     * Identifier used to indicate whether the change occurs before or after departure from the origin city.
     *
     * @var string
     */
    protected $departureStatus;
    /**
     * @var string
     */
    protected $penaltyType;
    /**
     * The penalty charge conveyed as a percent of the total fare.
     *
     * @var float
     */
    protected $percent;

    /**
     * Used for amounts, max 3 decimals.
     *
     * @return float
     */
    public function getAmount(): ?float
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
    public function setAmount(?float $amount): self
    {
        $this->amount = $amount;

        return $this;
    }

    /**
     * A currency code (e.g. USD, EUR, PLN).
     *
     * @return string
     */
    public function getCurrencyCode(): ?string
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
    public function setCurrencyCode(?string $currencyCode): self
    {
        $this->currencyCode = $currencyCode;

        return $this;
    }

    /**
     * Indicates the number of decimal places for a particular currency. This is equivalent to the ISO 4217 standard "minor unit".
     *
     * @return int
     */
    public function getDecimalPlaces(): ?int
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
    public function setDecimalPlaces(?int $decimalPlaces): self
    {
        $this->decimalPlaces = $decimalPlaces;

        return $this;
    }

    /**
     * Identifier used to indicate whether the change occurs before or after departure from the origin city.
     *
     * @return string
     */
    public function getDepartureStatus(): ?string
    {
        return $this->departureStatus;
    }

    /**
     * Identifier used to indicate whether the change occurs before or after departure from the origin city.
     *
     * @param string $departureStatus
     *
     * @return self
     */
    public function setDepartureStatus(?string $departureStatus): self
    {
        $this->departureStatus = $departureStatus;

        return $this;
    }

    /**
     * @return string
     */
    public function getPenaltyType(): ?string
    {
        return $this->penaltyType;
    }

    /**
     * @param string $penaltyType
     *
     * @return self
     */
    public function setPenaltyType(?string $penaltyType): self
    {
        $this->penaltyType = $penaltyType;

        return $this;
    }

    /**
     * The penalty charge conveyed as a percent of the total fare.
     *
     * @return float
     */
    public function getPercent(): ?float
    {
        return $this->percent;
    }

    /**
     * The penalty charge conveyed as a percent of the total fare.
     *
     * @param float $percent
     *
     * @return self
     */
    public function setPercent(?float $percent): self
    {
        $this->percent = $percent;

        return $this;
    }
}
