<?php

namespace Ammonkc\SabreApi\Model\BargainFinderMax;

use Ammonkc\SabreApi\AbstractModel;

class OrgOpentravelOta200305PriceRequestInformationTypeTPAExtensionsWebFare extends AbstractModel
{
    /**
     * Web fare.
     *
     * @var bool
     */
    protected $ind;

    /**
     * Web fare.
     *
     * @return bool
     */
    public function getInd(): ?bool
    {
        return $this->ind;
    }

    /**
     * Web fare.
     *
     * @param bool $ind
     *
     * @return self
     */
    public function setInd(?bool $ind): self
    {
        $this->ind = $ind;

        return $this;
    }
}
