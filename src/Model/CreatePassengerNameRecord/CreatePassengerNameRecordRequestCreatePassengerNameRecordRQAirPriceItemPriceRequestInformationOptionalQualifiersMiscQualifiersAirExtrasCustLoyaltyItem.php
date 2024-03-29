<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Ammonkc\SabreApi\Model\CreatePassengerNameRecord;

use Ammonkc\SabreApi\AbstractModel;

class CreatePassengerNameRecordRequestCreatePassengerNameRecordRQAirPriceItemPriceRequestInformationOptionalQualifiersMiscQualifiersAirExtrasCustLoyaltyItem extends AbstractModel
{
    /**
     * The Program ID.
     *
     * @var string
     */
    protected $programID;
    /**
     * The frequent flyer tier level.
     *
     * @var string
     */
    protected $tierLevel;

    /**
     * The Program ID.
     *
     * @return string|null
     */
    public function getProgramID(): ?string
    {
        return $this->programID;
    }

    /**
     * The Program ID.
     *
     * @param string|null $programID
     *
     * @return self
     */
    public function setProgramID(?string $programID): self
    {
        $this->programID = $programID;

        return $this;
    }

    /**
     * The frequent flyer tier level.
     *
     * @return string|null
     */
    public function getTierLevel(): ?string
    {
        return $this->tierLevel;
    }

    /**
     * The frequent flyer tier level.
     *
     * @param string|null $tierLevel
     *
     * @return self
     */
    public function setTierLevel(?string $tierLevel): self
    {
        $this->tierLevel = $tierLevel;

        return $this;
    }
}
