<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Ammonkc\SabreApi\Model\CreatePassengerNameRecord;

use Ammonkc\SabreApi\AbstractModel;

class CreatePassengerNameRecordRequestCreatePassengerNameRecordRQAirPriceItemPriceRequestInformationOptionalQualifiersPricingQualifiersAlternativePricing extends AbstractModel
{
    /**
     * The alternative pricing overrides.
     *
     * @var CreatePassengerNameRecordRequestCreatePassengerNameRecordRQAirPriceItemPriceRequestInformationOptionalQualifiersPricingQualifiersAlternativePricingOverrides
     */
    protected $overrides;
    /**
     * Used to instruct the system to request alternative pricing regardless of availability.
     *
     * @var bool
     */
    protected $noAvailCheck;

    /**
     * The alternative pricing overrides.
     *
     * @return CreatePassengerNameRecordRequestCreatePassengerNameRecordRQAirPriceItemPriceRequestInformationOptionalQualifiersPricingQualifiersAlternativePricingOverrides|null
     */
    public function getOverrides(): ?CreatePassengerNameRecordRequestCreatePassengerNameRecordRQAirPriceItemPriceRequestInformationOptionalQualifiersPricingQualifiersAlternativePricingOverrides
    {
        return $this->overrides;
    }

    /**
     * The alternative pricing overrides.
     *
     * @param CreatePassengerNameRecordRequestCreatePassengerNameRecordRQAirPriceItemPriceRequestInformationOptionalQualifiersPricingQualifiersAlternativePricingOverrides|null $overrides
     *
     * @return self
     */
    public function setOverrides(?CreatePassengerNameRecordRequestCreatePassengerNameRecordRQAirPriceItemPriceRequestInformationOptionalQualifiersPricingQualifiersAlternativePricingOverrides $overrides): self
    {
        $this->overrides = $overrides;

        return $this;
    }

    /**
     * Used to instruct the system to request alternative pricing regardless of availability.
     *
     * @return bool|null
     */
    public function getNoAvailCheck(): ?bool
    {
        return $this->noAvailCheck;
    }

    /**
     * Used to instruct the system to request alternative pricing regardless of availability.
     *
     * @param bool|null $noAvailCheck
     *
     * @return self
     */
    public function setNoAvailCheck(?bool $noAvailCheck): self
    {
        $this->noAvailCheck = $noAvailCheck;

        return $this;
    }
}
