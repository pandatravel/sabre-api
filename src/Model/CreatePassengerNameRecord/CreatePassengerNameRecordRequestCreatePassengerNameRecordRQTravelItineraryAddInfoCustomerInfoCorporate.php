<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Ammonkc\SabreApi\Model\CreatePassengerNameRecord;

use Ammonkc\SabreApi\AbstractModel;

class CreatePassengerNameRecordRequestCreatePassengerNameRecordRQTravelItineraryAddInfoCustomerInfoCorporate extends AbstractModel
{
    /**
     * Used to add a corporate ID into the record.
    Please note that this qualifier is not applicable to Sabre Sonic Res-based clients.
    Furthermore, Sabre Travel Network-based customers need to first have this functionality activated for their particular location by their account representative prior to attempting to utilize this element.

     *
     * @var string
     */
    protected $iD;

    /**
     * Used to add a corporate ID into the record.
    Please note that this qualifier is not applicable to Sabre Sonic Res-based clients.
    Furthermore, Sabre Travel Network-based customers need to first have this functionality activated for their particular location by their account representative prior to attempting to utilize this element.

     *
     * @return string|null
     */
    public function getID(): ?string
    {
        return $this->iD;
    }

    /**
     * Used to add a corporate ID into the record.
    Please note that this qualifier is not applicable to Sabre Sonic Res-based clients.
    Furthermore, Sabre Travel Network-based customers need to first have this functionality activated for their particular location by their account representative prior to attempting to utilize this element.

     *
     * @param string|null $iD
     *
     * @return self
     */
    public function setID(?string $iD): self
    {
        $this->iD = $iD;

        return $this;
    }
}
