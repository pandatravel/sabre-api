<?php

namespace Ammonkc\SabreApi\Model\EnhancedAirTicket;

use Ammonkc\SabreApi\AbstractModel;

class SummaryItemTotalAmount extends AbstractModel
{
    /**
     * Total amount of money paid for this document.
     *
     * @var string
     */
    protected $content;
    /**
     * A currency code (e.g. USD, EUR, PLN).
     *
     * @var string
     */
    protected $currencyCode;
    /**
     * Indicates the number of decimal places for a particular currency. This is equivalent to the ISO 4217 standard 'minor unit'.
     *
     * @var int
     */
    protected $decimalPlace;

    /**
     * Total amount of money paid for this document.
     *
     * @return string
     */
    public function getContent(): ?string
    {
        return $this->content;
    }

    /**
     * Total amount of money paid for this document.
     *
     * @param string $content
     *
     * @return self
     */
    public function setContent(?string $content): self
    {
        $this->content = $content;

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
     * Indicates the number of decimal places for a particular currency. This is equivalent to the ISO 4217 standard 'minor unit'.
     *
     * @return int
     */
    public function getDecimalPlace(): ?int
    {
        return $this->decimalPlace;
    }

    /**
     * Indicates the number of decimal places for a particular currency. This is equivalent to the ISO 4217 standard 'minor unit'.
     *
     * @param int $decimalPlace
     *
     * @return self
     */
    public function setDecimalPlace(?int $decimalPlace): self
    {
        $this->decimalPlace = $decimalPlace;

        return $this;
    }
}
