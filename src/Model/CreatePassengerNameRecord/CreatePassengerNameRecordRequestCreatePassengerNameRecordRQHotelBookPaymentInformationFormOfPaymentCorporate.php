<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Ammonkc\SabreApi\Model\CreatePassengerNameRecord;

use Ammonkc\SabreApi\AbstractModel;

class CreatePassengerNameRecordRequestCreatePassengerNameRecordRQHotelBookPaymentInformationFormOfPaymentCorporate extends AbstractModel
{
    /**
     * The corporate identifier.
     *
     * @var string
     */
    protected $corporateId;

    /**
     * The corporate identifier.
     *
     * @return string
     */
    public function getCorporateId(): string
    {
        return $this->corporateId;
    }

    /**
     * The corporate identifier.
     *
     * @param string $corporateId
     *
     * @return self
     */
    public function setCorporateId(string $corporateId): self
    {
        $this->corporateId = $corporateId;

        return $this;
    }
}
