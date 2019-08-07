<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Ammonkc\SabreApi\Model\CreatePassengerNameRecord;

use Ammonkc\SabreApi\AbstractModel;

class CreatePassengerNameRecordRequestCreatePassengerNameRecordRQAirPriceItemPriceRequestInformationOptionalQualifiersMiscQualifiersMultiTicket extends AbstractModel
{
    /**
     * Used to instruct the system to consider multi-ticket solutions to find the lowest possible price.
     *
     * @var bool
     */
    protected $ind;

    /**
     * Used to instruct the system to consider multi-ticket solutions to find the lowest possible price.
     *
     * @return bool|null
     */
    public function getInd(): ?bool
    {
        return $this->ind;
    }

    /**
     * Used to instruct the system to consider multi-ticket solutions to find the lowest possible price.
     *
     * @param bool|null $ind
     *
     * @return self
     */
    public function setInd(?bool $ind): self
    {
        $this->ind = $ind;

        return $this;
    }
}
