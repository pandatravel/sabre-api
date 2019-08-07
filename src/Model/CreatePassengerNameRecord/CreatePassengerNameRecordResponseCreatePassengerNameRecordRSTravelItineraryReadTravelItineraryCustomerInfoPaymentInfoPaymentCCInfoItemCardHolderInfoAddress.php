<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Ammonkc\SabreApi\Model\CreatePassengerNameRecord;

use Ammonkc\SabreApi\AbstractModel;

class CreatePassengerNameRecordResponseCreatePassengerNameRecordRSTravelItineraryReadTravelItineraryCustomerInfoPaymentInfoPaymentCCInfoItemCardHolderInfoAddress extends AbstractModel
{
    /**
     * The address line information.
     *
     * @var string[]
     */
    protected $addressLine;

    /**
     * The address line information.
     *
     * @return string[]
     */
    public function getAddressLine(): array
    {
        return $this->addressLine;
    }

    /**
     * The address line information.
     *
     * @param string[] $addressLine
     *
     * @return self
     */
    public function setAddressLine(array $addressLine): self
    {
        $this->addressLine = $addressLine;

        return $this;
    }
}
