<?php

namespace Ammonkc\SabreApi\Model\BargainFinderMax;

use Ammonkc\SabreApi\AbstractModel;

class OrgOpentravelOta200305TravelerRefNumberType extends AbstractModel
{
    /**
     * Reference place holder.
     *
     * @var string
     */
    protected $rPH;

    /**
     * Reference place holder.
     *
     * @return string
     */
    public function getRPH(): ?string
    {
        return $this->rPH;
    }

    /**
     * Reference place holder.
     *
     * @param string $rPH
     *
     * @return self
     */
    public function setRPH(?string $rPH): self
    {
        $this->rPH = $rPH;

        return $this;
    }
}
