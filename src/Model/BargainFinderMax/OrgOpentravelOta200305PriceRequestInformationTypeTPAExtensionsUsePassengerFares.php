<?php

namespace Ammonkc\SabreApi\Model\BargainFinderMax;

use Ammonkc\SabreApi\AbstractModel;

class OrgOpentravelOta200305PriceRequestInformationTypeTPAExtensionsUsePassengerFares extends AbstractModel
{
    /**
     * @var bool
     */
    protected $ind;

    /**
     * @return bool
     */
    public function getInd(): ?bool
    {
        return $this->ind;
    }

    /**
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
