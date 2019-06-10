<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Ammonkc\SabreApi\Model\CreatePassengerNameRecord;

use Ammonkc\SabreApi\AbstractModel;

class CreatePassengerNameRecordRequestCreatePassengerNameRecordRQSpecialReqDetailsSpecialServiceSpecialServiceInfoSecureFlightItemVendorPrefsAirline extends AbstractModel
{
    /**
     * Defines if the receiving airline is Sabre hosted carrier.
     *
     * @var bool
     */
    protected $hosted;

    /**
     * Defines if the receiving airline is Sabre hosted carrier.
     *
     * @return bool
     */
    public function getHosted(): ?bool
    {
        return $this->hosted;
    }

    /**
     * Defines if the receiving airline is Sabre hosted carrier.
     *
     * @param bool $hosted
     *
     * @return self
     */
    public function setHosted(?bool $hosted): self
    {
        $this->hosted = $hosted;

        return $this;
    }
}
