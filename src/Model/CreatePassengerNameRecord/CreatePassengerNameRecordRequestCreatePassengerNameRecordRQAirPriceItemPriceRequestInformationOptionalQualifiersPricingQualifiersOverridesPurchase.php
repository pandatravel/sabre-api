<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Ammonkc\SabreApi\Model\CreatePassengerNameRecord;

use Ammonkc\SabreApi\AbstractModel;

class CreatePassengerNameRecordRequestCreatePassengerNameRecordRQAirPriceItemPriceRequestInformationOptionalQualifiersPricingQualifiersOverridesPurchase extends AbstractModel
{
    /**
     * The location code.
     *
     * @var string
     */
    protected $locationCode;

    /**
     * The location code.
     *
     * @return string|null
     */
    public function getLocationCode(): ?string
    {
        return $this->locationCode;
    }

    /**
     * The location code.
     *
     * @param string|null $locationCode
     *
     * @return self
     */
    public function setLocationCode(?string $locationCode): self
    {
        $this->locationCode = $locationCode;

        return $this;
    }
}
