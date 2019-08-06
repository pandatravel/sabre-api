<?php

namespace Ammonkc\SabreApi\Model\BargainFinderMax;

use Ammonkc\SabreApi\AbstractModel;

class OrgOpentravelOta200305FlexibleFaresType extends AbstractModel
{
    /**
     * @var OrgOpentravelOta200305FlexibleFaresTypeFareParameters[]
     */
    protected $fareParameters;

    /**
     * @return OrgOpentravelOta200305FlexibleFaresTypeFareParameters[]
     */
    public function getFareParameters(): array
    {
        return $this->fareParameters;
    }

    /**
     * @param OrgOpentravelOta200305FlexibleFaresTypeFareParameters[] $fareParameters
     *
     * @return self
     */
    public function setFareParameters(array $fareParameters): self
    {
        $this->fareParameters = $fareParameters;

        return $this;
    }
}
