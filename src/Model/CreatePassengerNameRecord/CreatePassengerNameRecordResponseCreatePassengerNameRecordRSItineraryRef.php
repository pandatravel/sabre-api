<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Ammonkc\SabreApi\Model\CreatePassengerNameRecord;

use Ammonkc\SabreApi\AbstractModel;

class CreatePassengerNameRecordResponseCreatePassengerNameRecordRSItineraryRef extends AbstractModel
{
    /**
     * The locator of the ended passenger name record.
     *
     * @var string
     */
    protected $iD;

    /**
     * The locator of the ended passenger name record.
     *
     * @return string
     */
    public function getID(): string
    {
        return $this->iD;
    }

    /**
     * The locator of the ended passenger name record.
     *
     * @param string $iD
     *
     * @return self
     */
    public function setID(string $iD): self
    {
        $this->iD = $iD;

        return $this;
    }
}
