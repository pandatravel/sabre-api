<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Ammonkc\SabreApi\Model\BargainFinderMax;

use Ammonkc\SabreApi\AbstractModel;

class OrgOpentravelOta200305AlternatePCCTypeTravelPreferences extends AbstractModel
{
    /**
     * @var OrgOpentravelOta200305AlternatePCCTypeTravelPreferencesTPAExtensions
     */
    protected $tPAExtensions;
    /**
     * @var OrgOpentravelOta200305AlternatePCCTypeTravelPreferencesVendorPref[]
     */
    protected $vendorPref;

    /**
     * @return OrgOpentravelOta200305AlternatePCCTypeTravelPreferencesTPAExtensions|null
     */
    public function getTPAExtensions(): ?OrgOpentravelOta200305AlternatePCCTypeTravelPreferencesTPAExtensions
    {
        return $this->tPAExtensions;
    }

    /**
     * @param OrgOpentravelOta200305AlternatePCCTypeTravelPreferencesTPAExtensions|null $tPAExtensions
     *
     * @return self
     */
    public function setTPAExtensions(?OrgOpentravelOta200305AlternatePCCTypeTravelPreferencesTPAExtensions $tPAExtensions): self
    {
        $this->tPAExtensions = $tPAExtensions;

        return $this;
    }

    /**
     * @return OrgOpentravelOta200305AlternatePCCTypeTravelPreferencesVendorPref[]|null
     */
    public function getVendorPref(): ?array
    {
        return $this->vendorPref;
    }

    /**
     * @param OrgOpentravelOta200305AlternatePCCTypeTravelPreferencesVendorPref[]|null $vendorPref
     *
     * @return self
     */
    public function setVendorPref(?array $vendorPref): self
    {
        $this->vendorPref = $vendorPref;

        return $this;
    }
}
