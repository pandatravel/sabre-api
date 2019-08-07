<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Ammonkc\SabreApi\Model\CreatePassengerNameRecord;

use Ammonkc\SabreApi\AbstractModel;

class CreatePassengerNameRecordRequestCreatePassengerNameRecordRQTravelItineraryAddInfoAgencyInfoAddressStateCountyProv extends AbstractModel
{
    /**
     * The state code.
     *
     * @var string
     */
    protected $stateCode;

    /**
     * The state code.
     *
     * @return string
     */
    public function getStateCode(): string
    {
        return $this->stateCode;
    }

    /**
     * The state code.
     *
     * @param string $stateCode
     *
     * @return self
     */
    public function setStateCode(string $stateCode): self
    {
        $this->stateCode = $stateCode;

        return $this;
    }
}
