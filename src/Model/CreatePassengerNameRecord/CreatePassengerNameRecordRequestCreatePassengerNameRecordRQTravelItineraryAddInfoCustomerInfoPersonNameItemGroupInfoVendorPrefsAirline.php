<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Ammonkc\SabreApi\Model\CreatePassengerNameRecord;

use Ammonkc\SabreApi\AbstractModel;

class CreatePassengerNameRecordRequestCreatePassengerNameRecordRQTravelItineraryAddInfoCustomerInfoPersonNameItemGroupInfoVendorPrefsAirline extends AbstractModel
{
    /**
     * 'Code' is used to specify the airline that the group is travelling with.
    Please note that this qualifier is not applicable to Sabre Sonic Res-based subscribers, or Sabre Travel Network-based subscribers.

     *
     * @var string
     */
    protected $code;

    /**
     * 'Code' is used to specify the airline that the group is travelling with.
    Please note that this qualifier is not applicable to Sabre Sonic Res-based subscribers, or Sabre Travel Network-based subscribers.

     *
     * @return string|null
     */
    public function getCode(): ?string
    {
        return $this->code;
    }

    /**
     * 'Code' is used to specify the airline that the group is travelling with.
    Please note that this qualifier is not applicable to Sabre Sonic Res-based subscribers, or Sabre Travel Network-based subscribers.

     *
     * @param string|null $code
     *
     * @return self
     */
    public function setCode(?string $code): self
    {
        $this->code = $code;

        return $this;
    }
}
