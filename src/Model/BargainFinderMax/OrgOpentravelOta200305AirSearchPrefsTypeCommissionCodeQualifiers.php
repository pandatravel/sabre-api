<?php

namespace Ammonkc\SabreApi\Model\BargainFinderMax;

use Ammonkc\SabreApi\AbstractModel;

class OrgOpentravelOta200305AirSearchPrefsTypeCommissionCodeQualifiers extends AbstractModel
{
    /**
     * @var OrgOpentravelOta200305AirSearchPrefsTypeCommissionCodeQualifiersCommissionCodeQualifier[]
     */
    protected $commissionCodeQualifier;

    /**
     * @return OrgOpentravelOta200305AirSearchPrefsTypeCommissionCodeQualifiersCommissionCodeQualifier[]
     */
    public function getCommissionCodeQualifier(): ?array
    {
        return $this->commissionCodeQualifier;
    }

    /**
     * @param OrgOpentravelOta200305AirSearchPrefsTypeCommissionCodeQualifiersCommissionCodeQualifier[] $commissionCodeQualifier
     *
     * @return self
     */
    public function setCommissionCodeQualifier(?array $commissionCodeQualifier): self
    {
        $this->commissionCodeQualifier = $commissionCodeQualifier;

        return $this;
    }
}
