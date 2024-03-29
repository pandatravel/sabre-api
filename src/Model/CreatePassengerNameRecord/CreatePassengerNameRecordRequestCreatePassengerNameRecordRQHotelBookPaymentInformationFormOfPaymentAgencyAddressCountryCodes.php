<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Ammonkc\SabreApi\Model\CreatePassengerNameRecord;

use Ammonkc\SabreApi\AbstractModel;

class CreatePassengerNameRecordRequestCreatePassengerNameRecordRQHotelBookPaymentInformationFormOfPaymentAgencyAddressCountryCodes extends AbstractModel
{
    /**
     * The agency country codes.
     *
     * @var CreatePassengerNameRecordRequestCreatePassengerNameRecordRQHotelBookPaymentInformationFormOfPaymentAgencyAddressCountryCodesCodeItem[]
     */
    protected $code;

    /**
     * The agency country codes.
     *
     * @return CreatePassengerNameRecordRequestCreatePassengerNameRecordRQHotelBookPaymentInformationFormOfPaymentAgencyAddressCountryCodesCodeItem[]|null
     */
    public function getCode(): ?array
    {
        return $this->code;
    }

    /**
     * The agency country codes.
     *
     * @param CreatePassengerNameRecordRequestCreatePassengerNameRecordRQHotelBookPaymentInformationFormOfPaymentAgencyAddressCountryCodesCodeItem[]|null $code
     *
     * @return self
     */
    public function setCode(?array $code): self
    {
        $this->code = $code;

        return $this;
    }
}
