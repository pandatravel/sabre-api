<?php

namespace Ammonkc\SabreApi\Model\BargainFinderMax;

use Ammonkc\SabreApi\AbstractModel;

class PenaltiesType extends AbstractModel
{
    /**
     * @var Penalty[]
     */
    protected $penalties;

    /**
     * @return Penalty[]
     */
    public function getPenalties(): ?array
    {
        return $this->penalties;
    }

    /**
     * @param Penalty[] $penalties
     *
     * @return self
     */
    public function setPenalties(?array $penalties): self
    {
        $this->penalties = $penalties;

        return $this;
    }
}
