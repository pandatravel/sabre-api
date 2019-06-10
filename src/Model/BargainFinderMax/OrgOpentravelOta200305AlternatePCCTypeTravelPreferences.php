<?php

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
     * @return OrgOpentravelOta200305AlternatePCCTypeTravelPreferencesTPAExtensions
     */
    public function getTPAExtensions(): ?OrgOpentravelOta200305AlternatePCCTypeTravelPreferencesTPAExtensions
    {
        return $this->tPAExtensions;
    }

    /**
     * @param OrgOpentravelOta200305AlternatePCCTypeTravelPreferencesTPAExtensions $tPAExtensions
     *
     * @return self
     */
    public function setTPAExtensions(?OrgOpentravelOta200305AlternatePCCTypeTravelPreferencesTPAExtensions $tPAExtensions): self
    {
        $this->tPAExtensions = $tPAExtensions;

        return $this;
    }

    /**
     * @return OrgOpentravelOta200305AlternatePCCTypeTravelPreferencesVendorPref[]
     */
    public function getVendorPref(): ?array
    {
        return $this->vendorPref;
    }

    /**
     * @param OrgOpentravelOta200305AlternatePCCTypeTravelPreferencesVendorPref[] $vendorPref
     *
     * @return self
     */
    public function setVendorPref(?array $vendorPref): self
    {
        $this->vendorPref = $vendorPref;

        return $this;
    }
}
