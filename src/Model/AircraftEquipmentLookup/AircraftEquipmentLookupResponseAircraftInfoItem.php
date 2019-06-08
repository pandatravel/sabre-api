<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Ammonkc\SabreApi\Model\AircraftEquipmentLookup;

use Ammonkc\SabreApi\AbstractModel;

class AircraftEquipmentLookupResponseAircraftInfoItem extends AbstractModel
{
    /**
     * The aircraft equipment code.
     *
     * @var string
     */
    protected $aircraftCode;
    /**
     * The name and model that corresponds to the specified aircraft equipment code(s).
     *
     * @var string
     */
    protected $aircraftName;

    /**
     * The aircraft equipment code.
     *
     * @return string
     */
    public function getAircraftCode(): ?string
    {
        return $this->aircraftCode;
    }

    /**
     * The aircraft equipment code.
     *
     * @param string $aircraftCode
     *
     * @return self
     */
    public function setAircraftCode(?string $aircraftCode): self
    {
        $this->aircraftCode = $aircraftCode;

        return $this;
    }

    /**
     * The name and model that corresponds to the specified aircraft equipment code(s).
     *
     * @return string
     */
    public function getAircraftName(): ?string
    {
        return $this->aircraftName;
    }

    /**
     * The name and model that corresponds to the specified aircraft equipment code(s).
     *
     * @param string $aircraftName
     *
     * @return self
     */
    public function setAircraftName(?string $aircraftName): self
    {
        $this->aircraftName = $aircraftName;

        return $this;
    }
}
