<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Ammonkc\SabreApi\Model\CreatePassengerNameRecord;

use Ammonkc\SabreApi\AbstractModel;

class CreatePassengerNameRecordRequestCreatePassengerNameRecordRQHotelBookPaymentInformationFormOfPaymentCompanyAddressStateProvinceCodes extends AbstractModel
{
    /**
     * State or province code.
     *
     * @var CreatePassengerNameRecordRequestCreatePassengerNameRecordRQHotelBookPaymentInformationFormOfPaymentCompanyAddressStateProvinceCodesCodeItem[]
     */
    protected $code;

    /**
     * State or province code.
     *
     * @return CreatePassengerNameRecordRequestCreatePassengerNameRecordRQHotelBookPaymentInformationFormOfPaymentCompanyAddressStateProvinceCodesCodeItem[]
     */
    public function getCode(): ?array
    {
        return $this->code;
    }

    /**
     * State or province code.
     *
     * @param CreatePassengerNameRecordRequestCreatePassengerNameRecordRQHotelBookPaymentInformationFormOfPaymentCompanyAddressStateProvinceCodesCodeItem[] $code
     *
     * @return self
     */
    public function setCode(?array $code): self
    {
        $this->code = $code;

        return $this;
    }
}
