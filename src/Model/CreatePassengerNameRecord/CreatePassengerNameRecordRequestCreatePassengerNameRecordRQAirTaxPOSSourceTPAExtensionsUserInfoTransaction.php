<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Ammonkc\SabreApi\Model\CreatePassengerNameRecord;

use Ammonkc\SabreApi\AbstractModel;

class CreatePassengerNameRecordRequestCreatePassengerNameRecordRQAirTaxPOSSourceTPAExtensionsUserInfoTransaction extends AbstractModel
{
    /**
     * The transaction ID.
     *
     * @var int
     */
    protected $iD;

    /**
     * The transaction ID.
     *
     * @return int|null
     */
    public function getID(): ?int
    {
        return $this->iD;
    }

    /**
     * The transaction ID.
     *
     * @param int|null $iD
     *
     * @return self
     */
    public function setID(?int $iD): self
    {
        $this->iD = $iD;

        return $this;
    }
}
