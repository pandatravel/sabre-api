<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Ammonkc\SabreApi\Model\CreatePassengerNameRecord;

use Ammonkc\SabreApi\AbstractModel;

class CreatePassengerNameRecordRequestCreatePassengerNameRecordRQAirPriceItemPriceRequestInformationOptionalQualifiersPricingQualifiersSpecificPenaltyRefundable extends AbstractModel
{
    /**
     * Used to specify any refundable pricing fare options.
     *
     * @var bool
     */
    protected $any;
    /**
     * Used to specify the specific currency for maximum refund penalty.
     *
     * @var string
     */
    protected $currencyCode;
    /**
     * Used to specify the maximum refund penalty.
     * If a value of '0' is input no penalty is preferred.
     * If a value of 'N' is input only non-changeable options are requested.
     * Please note that monetary amount that includes a decimal is not allowed.
     *
     * @var string
     */
    protected $maxPenalty;
    /**
     * Used to query for before departure fees.
     *
     * @var bool
     */
    protected $beforeDeparture;
    /**
     * Used to query for after departure fees.
     * It is not possible to combine 'BeforeDeparture' and 'AfterDeparture' within one object.
     *
     * @var bool
     */
    protected $afterDeparture;

    /**
     * Used to specify any refundable pricing fare options.
     *
     * @return bool
     */
    public function getAny(): bool
    {
        return $this->any;
    }

    /**
     * Used to specify any refundable pricing fare options.
     *
     * @param bool $any
     *
     * @return self
     */
    public function setAny(bool $any): self
    {
        $this->any = $any;

        return $this;
    }

    /**
     * Used to specify the specific currency for maximum refund penalty.
     *
     * @return string
     */
    public function getCurrencyCode(): string
    {
        return $this->currencyCode;
    }

    /**
     * Used to specify the specific currency for maximum refund penalty.
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
     * Used to specify the maximum refund penalty.
     * If a value of '0' is input no penalty is preferred.
     * If a value of 'N' is input only non-changeable options are requested.
     * Please note that monetary amount that includes a decimal is not allowed.
     *
     * @return string
     */
    public function getMaxPenalty(): string
    {
        return $this->maxPenalty;
    }

    /**
     * Used to specify the maximum refund penalty.
     * If a value of '0' is input no penalty is preferred.
     * If a value of 'N' is input only non-changeable options are requested.
     * Please note that monetary amount that includes a decimal is not allowed.
     *
     * @param string $maxPenalty
     *
     * @return self
     */
    public function setMaxPenalty(string $maxPenalty): self
    {
        $this->maxPenalty = $maxPenalty;

        return $this;
    }

    /**
     * Used to query for before departure fees.
     *
     * @return bool
     */
    public function getBeforeDeparture(): bool
    {
        return $this->beforeDeparture;
    }

    /**
     * Used to query for before departure fees.
     *
     * @param bool $beforeDeparture
     *
     * @return self
     */
    public function setBeforeDeparture(bool $beforeDeparture): self
    {
        $this->beforeDeparture = $beforeDeparture;

        return $this;
    }

    /**
     * Used to query for after departure fees.
     * It is not possible to combine 'BeforeDeparture' and 'AfterDeparture' within one object.
     *
     * @return bool
     */
    public function getAfterDeparture(): bool
    {
        return $this->afterDeparture;
    }

    /**
     * Used to query for after departure fees.
     * It is not possible to combine 'BeforeDeparture' and 'AfterDeparture' within one object.
     *
     * @param bool $afterDeparture
     *
     * @return self
     */
    public function setAfterDeparture(bool $afterDeparture): self
    {
        $this->afterDeparture = $afterDeparture;

        return $this;
    }
}
