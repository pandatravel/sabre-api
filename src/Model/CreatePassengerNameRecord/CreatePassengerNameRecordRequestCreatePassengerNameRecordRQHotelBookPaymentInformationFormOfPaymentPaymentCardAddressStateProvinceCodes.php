<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Ammonkc\SabreApi\Model\CreatePassengerNameRecord;

use Ammonkc\SabreApi\AbstractModel;

class CreatePassengerNameRecordRequestCreatePassengerNameRecordRQHotelBookPaymentInformationFormOfPaymentPaymentCardAddressStateProvinceCodes extends AbstractModel
{
    /**
     * The state or province codes.
     *
     * @var CreatePassengerNameRecordRequestCreatePassengerNameRecordRQHotelBookPaymentInformationFormOfPaymentPaymentCardAddressStateProvinceCodesCodeItem[]
     */
    protected $code;

    /**
     * The state or province codes.
     *
     * @return CreatePassengerNameRecordRequestCreatePassengerNameRecordRQHotelBookPaymentInformationFormOfPaymentPaymentCardAddressStateProvinceCodesCodeItem[]|null
     */
    public function getCode(): ?array
    {
        return $this->code;
    }

    /**
     * The state or province codes.
     *
     * @param CreatePassengerNameRecordRequestCreatePassengerNameRecordRQHotelBookPaymentInformationFormOfPaymentPaymentCardAddressStateProvinceCodesCodeItem[]|null $code
     *
     * @return self
     */
    public function setCode(?array $code): self
    {
        $this->code = $code;

        return $this;
    }
}
