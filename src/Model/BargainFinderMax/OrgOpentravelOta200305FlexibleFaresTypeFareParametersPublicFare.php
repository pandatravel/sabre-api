<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Ammonkc\SabreApi\Model\BargainFinderMax;

class OrgOpentravelOta200305FlexibleFaresTypeFareParametersPublicFare
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
