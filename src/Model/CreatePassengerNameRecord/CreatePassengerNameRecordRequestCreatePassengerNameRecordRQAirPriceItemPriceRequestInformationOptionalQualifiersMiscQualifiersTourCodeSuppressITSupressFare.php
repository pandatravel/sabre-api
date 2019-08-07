<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Ammonkc\SabreApi\Model\CreatePassengerNameRecord;

use Ammonkc\SabreApi\AbstractModel;

class CreatePassengerNameRecordRequestCreatePassengerNameRecordRQAirPriceItemPriceRequestInformationOptionalQualifiersMiscQualifiersTourCodeSuppressITSupressFare extends AbstractModel
{
    /**
     * Used to specify to specify to suppress IT from printing in the tour box on the ticket and to suppress fare amounts from printing on the ticket.
     *
     * @var bool
     */
    protected $ind;

    /**
     * Used to specify to specify to suppress IT from printing in the tour box on the ticket and to suppress fare amounts from printing on the ticket.
     *
     * @return bool|null
     */
    public function getInd(): ?bool
    {
        return $this->ind;
    }

    /**
     * Used to specify to specify to suppress IT from printing in the tour box on the ticket and to suppress fare amounts from printing on the ticket.
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
