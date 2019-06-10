<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Ammonkc\SabreApi\Model\CreatePassengerNameRecord;

use Ammonkc\SabreApi\AbstractModel;

class CreatePassengerNameRecordRequestCreatePassengerNameRecordRQAirPriceItemPriceRequestInformationOptionalQualifiersPricingQualifiersCorporate extends AbstractModel
{
    /**
     * Used to specify a corporate ID to price with.
     *
     * @var string[]
     */
    protected $iD;
    /**
     * Used to instruct the system to price with corporate fares only.
     *
     * @var string
     */
    protected $force;

    /**
     * Used to specify a corporate ID to price with.
     *
     * @return string[]
     */
    public function getID(): ?array
    {
        return $this->iD;
    }

    /**
     * Used to specify a corporate ID to price with.
     *
     * @param string[] $iD
     *
     * @return self
     */
    public function setID(?array $iD): self
    {
        $this->iD = $iD;

        return $this;
    }

    /**
     * Used to instruct the system to price with corporate fares only.
     *
     * @return string
     */
    public function getForce(): ?string
    {
        return $this->force;
    }

    /**
     * Used to instruct the system to price with corporate fares only.
     *
     * @param string $force
     *
     * @return self
     */
    public function setForce(?string $force): self
    {
        $this->force = $force;

        return $this;
    }
}
