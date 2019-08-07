<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Ammonkc\SabreApi\Model\CreatePassengerNameRecord;

use Ammonkc\SabreApi\AbstractModel;

class CreatePassengerNameRecordRequestCreatePassengerNameRecordRQHotelBookPaymentInformationFormOfPaymentPaymentCardAddressCityCodes extends AbstractModel
{
    /**
     * The city codes.
     *
     * @var CreatePassengerNameRecordRequestCreatePassengerNameRecordRQHotelBookPaymentInformationFormOfPaymentPaymentCardAddressCityCodesCodeItem[]
     */
    protected $code;

    /**
     * The city codes.
     *
     * @return CreatePassengerNameRecordRequestCreatePassengerNameRecordRQHotelBookPaymentInformationFormOfPaymentPaymentCardAddressCityCodesCodeItem[]|null
     */
    public function getCode(): ?array
    {
        return $this->code;
    }

    /**
     * The city codes.
     *
     * @param CreatePassengerNameRecordRequestCreatePassengerNameRecordRQHotelBookPaymentInformationFormOfPaymentPaymentCardAddressCityCodesCodeItem[]|null $code
     *
     * @return self
     */
    public function setCode(?array $code): self
    {
        $this->code = $code;

        return $this;
    }
}
