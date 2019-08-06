<?php

namespace Ammonkc\SabreApi\Model\BargainFinderMax;

use Ammonkc\SabreApi\AbstractModel;

class OrgOpentravelOta200305AlternatePCCTypeTravelPreferencesTPAExtensions extends AbstractModel
{
    /**
     * @var OrgOpentravelOta200305AllianceType[]
     */
    protected $excludeAlliancePref;
    /**
     * @var OrgOpentravelOta200305AllianceType[]
     */
    protected $includeAlliancePref;

    /**
     * @return OrgOpentravelOta200305AllianceType[]
     */
    public function getExcludeAlliancePref(): array
    {
        return $this->excludeAlliancePref;
    }

    /**
     * @param OrgOpentravelOta200305AllianceType[] $excludeAlliancePref
     *
     * @return self
     */
    public function setExcludeAlliancePref(array $excludeAlliancePref): self
    {
        $this->excludeAlliancePref = $excludeAlliancePref;

        return $this;
    }

    /**
     * @return OrgOpentravelOta200305AllianceType[]
     */
    public function getIncludeAlliancePref(): array
    {
        return $this->includeAlliancePref;
    }

    /**
     * @param OrgOpentravelOta200305AllianceType[] $includeAlliancePref
     *
     * @return self
     */
    public function setIncludeAlliancePref(array $includeAlliancePref): self
    {
        $this->includeAlliancePref = $includeAlliancePref;

        return $this;
    }
}
