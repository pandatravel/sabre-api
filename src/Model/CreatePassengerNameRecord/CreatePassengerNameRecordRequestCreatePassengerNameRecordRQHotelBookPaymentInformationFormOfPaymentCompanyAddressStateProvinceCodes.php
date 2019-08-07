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
     * The company state or province codes.
     *
     * @var CreatePassengerNameRecordRequestCreatePassengerNameRecordRQHotelBookPaymentInformationFormOfPaymentCompanyAddressStateProvinceCodesCodeItem[]
     */
    protected $code;

    /**
     * The company state or province codes.
     *
     * @return CreatePassengerNameRecordRequestCreatePassengerNameRecordRQHotelBookPaymentInformationFormOfPaymentCompanyAddressStateProvinceCodesCodeItem[]
     */
    public function getCode(): array
    {
        return $this->code;
    }

    /**
     * The company state or province codes.
     *
     * @param CreatePassengerNameRecordRequestCreatePassengerNameRecordRQHotelBookPaymentInformationFormOfPaymentCompanyAddressStateProvinceCodesCodeItem[] $code
     *
     * @return self
     */
    public function setCode(array $code): self
    {
        $this->code = $code;

        return $this;
    }
}
