<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Ammonkc\SabreApi\Model\CreatePassengerNameRecord;

use Ammonkc\SabreApi\AbstractModel;

class CreatePassengerNameRecordRequestCreatePassengerNameRecordRQProfileUniqueID extends AbstractModel
{
    /**
     * Used to specify a profile name that is to be moved into the AAA to create the PNR.
     *
     * @var string
     */
    protected $iD;

    /**
     * Used to specify a profile name that is to be moved into the AAA to create the PNR.
     *
     * @return string
     */
    public function getID(): ?string
    {
        return $this->iD;
    }

    /**
     * Used to specify a profile name that is to be moved into the AAA to create the PNR.
     *
     * @param string $iD
     *
     * @return self
     */
    public function setID(?string $iD): self
    {
        $this->iD = $iD;

        return $this;
    }
}
