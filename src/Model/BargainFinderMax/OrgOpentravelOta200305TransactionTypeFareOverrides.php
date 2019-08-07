<?php

namespace Ammonkc\SabreApi\Model\BargainFinderMax;

use Ammonkc\SabreApi\AbstractModel;

class OrgOpentravelOta200305TransactionTypeFareOverrides extends AbstractModel
{
    /**
     * @var OrgOpentravelOta200305TransactionTypeFareOverridesFareOverride[]
     */
    protected $fareOverride;

    /**
     * @return OrgOpentravelOta200305TransactionTypeFareOverridesFareOverride[]
     */
    public function getFareOverride(): ?array
    {
        return $this->fareOverride;
    }

    /**
     * @param OrgOpentravelOta200305TransactionTypeFareOverridesFareOverride[] $fareOverride
     *
     * @return self
     */
    public function setFareOverride(?array $fareOverride): self
    {
        $this->fareOverride = $fareOverride;

        return $this;
    }
}
