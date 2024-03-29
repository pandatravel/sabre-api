<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

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
     * @return bool|null
     */
    public function getInd(): ?bool
    {
        return $this->ind;
    }

    /**
     * Web fare.
     *
     * @param bool|null $ind
     *
     * @return self
     */
    public function setInd(?bool $ind): self
    {
        $this->ind = $ind;

        return $this;
    }
}
