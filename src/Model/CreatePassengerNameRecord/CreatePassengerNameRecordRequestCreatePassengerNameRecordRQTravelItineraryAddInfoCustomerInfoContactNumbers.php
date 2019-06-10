<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Ammonkc\SabreApi\Model\CreatePassengerNameRecord;

use Ammonkc\SabreApi\AbstractModel;

class CreatePassengerNameRecordRequestCreatePassengerNameRecordRQTravelItineraryAddInfoCustomerInfoContactNumbers extends AbstractModel
{
    /**
     * Used to pass contact details for a specific passenger.
     *
     * @var CreatePassengerNameRecordRequestCreatePassengerNameRecordRQTravelItineraryAddInfoCustomerInfoContactNumbersContactNumberItem[]
     */
    protected $contactNumber;

    /**
     * Used to pass contact details for a specific passenger.
     *
     * @return CreatePassengerNameRecordRequestCreatePassengerNameRecordRQTravelItineraryAddInfoCustomerInfoContactNumbersContactNumberItem[]
     */
    public function getContactNumber(): ?array
    {
        return $this->contactNumber;
    }

    /**
     * Used to pass contact details for a specific passenger.
     *
     * @param CreatePassengerNameRecordRequestCreatePassengerNameRecordRQTravelItineraryAddInfoCustomerInfoContactNumbersContactNumberItem[] $contactNumber
     *
     * @return self
     */
    public function setContactNumber(?array $contactNumber): self
    {
        $this->contactNumber = $contactNumber;

        return $this;
    }
}
