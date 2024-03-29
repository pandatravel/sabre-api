<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Ammonkc\SabreApi\Model\CreatePassengerNameRecord;

use Ammonkc\SabreApi\AbstractModel;

class CreatePassengerNameRecordRequestCreatePassengerNameRecordRQAirTaxPOS extends AbstractModel
{
    /**
     * The point of Sale details.
     *
     * @var CreatePassengerNameRecordRequestCreatePassengerNameRecordRQAirTaxPOSSource
     */
    protected $source;

    /**
     * The point of Sale details.
     *
     * @return CreatePassengerNameRecordRequestCreatePassengerNameRecordRQAirTaxPOSSource|null
     */
    public function getSource(): ?CreatePassengerNameRecordRequestCreatePassengerNameRecordRQAirTaxPOSSource
    {
        return $this->source;
    }

    /**
     * The point of Sale details.
     *
     * @param CreatePassengerNameRecordRequestCreatePassengerNameRecordRQAirTaxPOSSource|null $source
     *
     * @return self
     */
    public function setSource(?CreatePassengerNameRecordRequestCreatePassengerNameRecordRQAirTaxPOSSource $source): self
    {
        $this->source = $source;

        return $this;
    }
}
