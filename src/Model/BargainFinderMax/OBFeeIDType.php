<?php

namespace Ammonkc\SabreApi\Model\BargainFinderMax;

use Ammonkc\SabreApi\AbstractModel;

class OBFeeIDType extends AbstractModel
{
    /**
     * @var int
     */
    protected $ref;

    /**
     * @return int
     */
    public function getRef(): ?int
    {
        return $this->ref;
    }

    /**
     * @param int $ref
     *
     * @return self
     */
    public function setRef(?int $ref): self
    {
        $this->ref = $ref;

        return $this;
    }
}
