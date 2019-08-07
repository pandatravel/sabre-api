<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Ammonkc\SabreApi\Model\CreatePassengerNameRecord;

use Ammonkc\SabreApi\AbstractModel;

class CreatePassengerNameRecordRequestCreatePassengerNameRecordRQAirPriceItemPriceRequestInformationOptionalQualifiersPricingQualifiersAlternativePricingOverridesNoMatch extends AbstractModel
{
    /**
     * Used to instruct the system to return no match alternative pricing options.
     *
     * @var bool
     */
    protected $ind;

    /**
     * Used to instruct the system to return no match alternative pricing options.
     *
     * @return bool
     */
    public function getInd(): bool
    {
        return $this->ind;
    }

    /**
     * Used to instruct the system to return no match alternative pricing options.
     *
     * @param bool $ind
     *
     * @return self
     */
    public function setInd(bool $ind): self
    {
        $this->ind = $ind;

        return $this;
    }
}
