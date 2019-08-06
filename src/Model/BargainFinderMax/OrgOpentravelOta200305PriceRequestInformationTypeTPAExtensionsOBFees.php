<?php

namespace Ammonkc\SabreApi\Model\BargainFinderMax;

use Ammonkc\SabreApi\AbstractModel;

class OrgOpentravelOta200305PriceRequestInformationTypeTPAExtensionsOBFees extends AbstractModel
{
    /**
     * @var bool
     */
    protected $rType;
    /**
     * @var bool
     */
    protected $tType;

    /**
     * @return bool
     */
    public function getRType(): bool
    {
        return $this->rType;
    }

    /**
     * @param bool $rType
     *
     * @return self
     */
    public function setRType(bool $rType): self
    {
        $this->rType = $rType;

        return $this;
    }

    /**
     * @return bool
     */
    public function getTType(): bool
    {
        return $this->tType;
    }

    /**
     * @param bool $tType
     *
     * @return self
     */
    public function setTType(bool $tType): self
    {
        $this->tType = $tType;

        return $this;
    }
}
