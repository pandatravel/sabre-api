<?php

namespace Ammonkc\SabreApi\Model\EnhancedAirTicket;

use Ammonkc\SabreApi\AbstractModel;

class TicketingItemPricingQualifiersSpecificPenaltyChangeable extends AbstractModel
{
    /**
     * "Any" is used to specify only changeable fare options.
     *
     * @var bool
     */
    protected $any;
    /**
     * "CurrencyCode" is used to specify the specific currency for maximum exchange penalty.
     *
     * @var string
     */
    protected $currencyCode;
    /**
     * "MaxPenalty" is used to specify maximum change penalty. If a value of "0" is input no penalty is preferred. If a value of "N" is input only non-changeable options are requested.

    Please note that monetary amount that includes a decimal is not allowed.

     *
     * @var string
     */
    protected $maxPenalty;
    /**
     * "BeforeDeparture" is used to query for before departure fees.

    It is not possible to combine "BeforeDeparture" and "AfterDeparture" within one object.

     *
     * @var bool
     */
    protected $beforeDeparture;
    /**
     * "AfterDeparture" is used to query for after departure fees.

    It is not possible to combine "BeforeDeparture" and "AfterDeparture" within one object.

     *
     * @var bool
     */
    protected $afterDeparture;

    /**
     * "Any" is used to specify only changeable fare options.
     *
     * @return bool
     */
    public function getAny(): ?bool
    {
        return $this->any;
    }

    /**
     * "Any" is used to specify only changeable fare options.
     *
     * @param bool $any
     *
     * @return self
     */
    public function setAny(?bool $any): self
    {
        $this->any = $any;

        return $this;
    }

    /**
     * "CurrencyCode" is used to specify the specific currency for maximum exchange penalty.
     *
     * @return string
     */
    public function getCurrencyCode(): ?string
    {
        return $this->currencyCode;
    }

    /**
     * "CurrencyCode" is used to specify the specific currency for maximum exchange penalty.
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
     * "MaxPenalty" is used to specify maximum change penalty. If a value of "0" is input no penalty is preferred. If a value of "N" is input only non-changeable options are requested.

    Please note that monetary amount that includes a decimal is not allowed.

     *
     * @return string
     */
    public function getMaxPenalty(): ?string
    {
        return $this->maxPenalty;
    }

    /**
     * "MaxPenalty" is used to specify maximum change penalty. If a value of "0" is input no penalty is preferred. If a value of "N" is input only non-changeable options are requested.

    Please note that monetary amount that includes a decimal is not allowed.

     *
     * @param string $maxPenalty
     *
     * @return self
     */
    public function setMaxPenalty(?string $maxPenalty): self
    {
        $this->maxPenalty = $maxPenalty;

        return $this;
    }

    /**
     * "BeforeDeparture" is used to query for before departure fees.

    It is not possible to combine "BeforeDeparture" and "AfterDeparture" within one object.

     *
     * @return bool
     */
    public function getBeforeDeparture(): ?bool
    {
        return $this->beforeDeparture;
    }

    /**
     * "BeforeDeparture" is used to query for before departure fees.

    It is not possible to combine "BeforeDeparture" and "AfterDeparture" within one object.

     *
     * @param bool $beforeDeparture
     *
     * @return self
     */
    public function setBeforeDeparture(?bool $beforeDeparture): self
    {
        $this->beforeDeparture = $beforeDeparture;

        return $this;
    }

    /**
     * "AfterDeparture" is used to query for after departure fees.

    It is not possible to combine "BeforeDeparture" and "AfterDeparture" within one object.

     *
     * @return bool
     */
    public function getAfterDeparture(): ?bool
    {
        return $this->afterDeparture;
    }

    /**
     * "AfterDeparture" is used to query for after departure fees.

    It is not possible to combine "BeforeDeparture" and "AfterDeparture" within one object.

     *
     * @param bool $afterDeparture
     *
     * @return self
     */
    public function setAfterDeparture(?bool $afterDeparture): self
    {
        $this->afterDeparture = $afterDeparture;

        return $this;
    }
}
