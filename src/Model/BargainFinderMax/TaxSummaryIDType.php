<?php

namespace Ammonkc\SabreApi\Model\BargainFinderMax;

use Ammonkc\SabreApi\AbstractModel;

class TaxSummaryIDType extends AbstractModel
{
    /**
     * Reference to TaxSummaryDesc ID.
     *
     * @var int
     */
    protected $ref;

    /**
     * Reference to TaxSummaryDesc ID.
     *
     * @return int
     */
    public function getRef(): int
    {
        return $this->ref;
    }

    /**
     * Reference to TaxSummaryDesc ID.
     *
     * @param int $ref
     *
     * @return self
     */
    public function setRef(int $ref): self
    {
        $this->ref = $ref;

        return $this;
    }
}
