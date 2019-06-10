<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Ammonkc\SabreApi\Model\CreatePassengerNameRecord;

use Ammonkc\SabreApi\AbstractModel;

class CreatePassengerNameRecordRequestCreatePassengerNameRecordRQAirPriceItemPriceRequestInformationOptionalQualifiersMiscQualifiersTourCodeSuppressFareReplaceWithBT extends AbstractModel
{
    /**
     * Used to specify to suppress the fare amount on the ticket and replace with BT.
     *
     * @var bool
     */
    protected $ind;

    /**
     * Used to specify to suppress the fare amount on the ticket and replace with BT.
     *
     * @return bool
     */
    public function getInd(): ?bool
    {
        return $this->ind;
    }

    /**
     * Used to specify to suppress the fare amount on the ticket and replace with BT.
     *
     * @param bool $ind
     *
     * @return self
     */
    public function setInd(?bool $ind): self
    {
        $this->ind = $ind;

        return $this;
    }
}