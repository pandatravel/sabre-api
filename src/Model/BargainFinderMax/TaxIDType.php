<?php

namespace Ammonkc\SabreApi\Model\BargainFinderMax;

use Ammonkc\SabreApi\AbstractModel;

class TaxIDType extends AbstractModel
{
    /**
     * Reference to TaxDesc ID.
     *
     * @var int
     */
    protected $ref;

    /**
     * Reference to TaxDesc ID.
     *
     * @return int
     */
    public function getRef(): ?int
    {
        return $this->ref;
    }

    /**
     * Reference to TaxDesc ID.
     *
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
