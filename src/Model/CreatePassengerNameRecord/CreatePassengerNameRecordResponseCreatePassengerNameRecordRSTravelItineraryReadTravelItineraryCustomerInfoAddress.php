<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Ammonkc\SabreApi\Model\CreatePassengerNameRecord;

use Ammonkc\SabreApi\AbstractModel;

class CreatePassengerNameRecordResponseCreatePassengerNameRecordRSTravelItineraryReadTravelItineraryCustomerInfoAddress extends AbstractModel
{
    /**
     * "AddressLine" is used to return customer address information.
     *
     * @var CreatePassengerNameRecordResponseCreatePassengerNameRecordRSTravelItineraryReadTravelItineraryCustomerInfoAddressAddressLineItem[]
     */
    protected $addressLine;

    /**
     * "AddressLine" is used to return customer address information.
     *
     * @return CreatePassengerNameRecordResponseCreatePassengerNameRecordRSTravelItineraryReadTravelItineraryCustomerInfoAddressAddressLineItem[]
     */
    public function getAddressLine(): ?array
    {
        return $this->addressLine;
    }

    /**
     * "AddressLine" is used to return customer address information.
     *
     * @param CreatePassengerNameRecordResponseCreatePassengerNameRecordRSTravelItineraryReadTravelItineraryCustomerInfoAddressAddressLineItem[] $addressLine
     *
     * @return self
     */
    public function setAddressLine(?array $addressLine): self
    {
        $this->addressLine = $addressLine;

        return $this;
    }
}
