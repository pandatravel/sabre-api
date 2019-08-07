<?php

namespace Ammonkc\SabreApi\Model\BargainFinderMax;

use Ammonkc\SabreApi\AbstractModel;

class Charge extends AbstractModel
{
    /**
     * Reference to Baggage Charge ID.
     *
     * @var int
     */
    protected $ref;

    /**
     * Reference to Baggage Charge ID.
     *
     * @return int
     */
    public function getRef(): ?int
    {
        return $this->ref;
    }

    /**
     * Reference to Baggage Charge ID.
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
