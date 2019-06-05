<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Ammonkc\SabreApi\Model\BargainFinderMax;

class OrgOpentravelOta200305AlternatePCCType
{
    /**
     * An identification code assigned to an office/agency by a reservation system.
     *
     * @var string
     */
    protected $pseudoCityCode;
    /**
     * @var OrgOpentravelOta200305AlternatePCCTypeTravelPreferences
     */
    protected $travelPreferences;

    /**
     * An identification code assigned to an office/agency by a reservation system.
     *
     * @return string
     */
    public function getPseudoCityCode(): ?string
    {
        return $this->pseudoCityCode;
    }

    /**
     * An identification code assigned to an office/agency by a reservation system.
     *
     * @param string $pseudoCityCode
     *
     * @return self
     */
    public function setPseudoCityCode(?string $pseudoCityCode): self
    {
        $this->pseudoCityCode = $pseudoCityCode;

        return $this;
    }

    /**
     * @return OrgOpentravelOta200305AlternatePCCTypeTravelPreferences
     */
    public function getTravelPreferences(): ?OrgOpentravelOta200305AlternatePCCTypeTravelPreferences
    {
        return $this->travelPreferences;
    }

    /**
     * @param OrgOpentravelOta200305AlternatePCCTypeTravelPreferences $travelPreferences
     *
     * @return self
     */
    public function setTravelPreferences(?OrgOpentravelOta200305AlternatePCCTypeTravelPreferences $travelPreferences): self
    {
        $this->travelPreferences = $travelPreferences;

        return $this;
    }
}
