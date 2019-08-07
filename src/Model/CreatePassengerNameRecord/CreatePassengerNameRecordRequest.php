<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Ammonkc\SabreApi\Model\CreatePassengerNameRecord;

use Ammonkc\SabreApi\AbstractModel;

class CreatePassengerNameRecordRequest extends AbstractModel
{
    /**
     * @var CreatePassengerNameRecordRequestCreatePassengerNameRecordRQ
     */
    protected $createPassengerNameRecordRQ;

    /**
     * @return CreatePassengerNameRecordRequestCreatePassengerNameRecordRQ
     */
    public function getCreatePassengerNameRecordRQ(): CreatePassengerNameRecordRequestCreatePassengerNameRecordRQ
    {
        return $this->createPassengerNameRecordRQ;
    }

    /**
     * @param CreatePassengerNameRecordRequestCreatePassengerNameRecordRQ $createPassengerNameRecordRQ
     *
     * @return self
     */
    public function setCreatePassengerNameRecordRQ(CreatePassengerNameRecordRequestCreatePassengerNameRecordRQ $createPassengerNameRecordRQ): self
    {
        $this->createPassengerNameRecordRQ = $createPassengerNameRecordRQ;

        return $this;
    }
}
