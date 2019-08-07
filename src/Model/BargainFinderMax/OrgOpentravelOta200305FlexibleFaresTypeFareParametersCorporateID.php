<?php

namespace Ammonkc\SabreApi\Model\BargainFinderMax;

use Ammonkc\SabreApi\AbstractModel;

class OrgOpentravelOta200305FlexibleFaresTypeFareParametersCorporateID extends AbstractModel
{
    /**
     * Corporate ID.
     *
     * @var string
     */
    protected $code;

    /**
     * Corporate ID.
     *
     * @return string
     */
    public function getCode(): ?string
    {
        return $this->code;
    }

    /**
     * Corporate ID.
     *
     * @param string $code
     *
     * @return self
     */
    public function setCode(?string $code): self
    {
        $this->code = $code;

        return $this;
    }
}
