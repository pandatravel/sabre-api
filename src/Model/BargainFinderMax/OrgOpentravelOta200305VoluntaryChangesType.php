<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Ammonkc\SabreApi\Model\BargainFinderMax;

use Ammonkc\SabreApi\AbstractModel;

class OrgOpentravelOta200305VoluntaryChangesType extends AbstractModel
{
    /**
     * Specifies penalty charges as either a currency amount or a percentage of the fare.,Indicates the type of penalty involved in the search or response.
     *
     * @var OrgOpentravelOta200305VoluntaryChangesTypePenalty
     */
    protected $penalty;
    /**
     * Indicator used to specify whether voluntary change and other penalties are involved in the search or response.
     *
     * @var bool
     */
    protected $volChangeInd;

    /**
     * Specifies penalty charges as either a currency amount or a percentage of the fare.,Indicates the type of penalty involved in the search or response.
     *
     * @return OrgOpentravelOta200305VoluntaryChangesTypePenalty|null
     */
    public function getPenalty(): ?OrgOpentravelOta200305VoluntaryChangesTypePenalty
    {
        return $this->penalty;
    }

    /**
     * Specifies penalty charges as either a currency amount or a percentage of the fare.,Indicates the type of penalty involved in the search or response.
     *
     * @param OrgOpentravelOta200305VoluntaryChangesTypePenalty|null $penalty
     *
     * @return self
     */
    public function setPenalty(?OrgOpentravelOta200305VoluntaryChangesTypePenalty $penalty): self
    {
        $this->penalty = $penalty;

        return $this;
    }

    /**
     * Indicator used to specify whether voluntary change and other penalties are involved in the search or response.
     *
     * @return bool|null
     */
    public function getVolChangeInd(): ?bool
    {
        return $this->volChangeInd;
    }

    /**
     * Indicator used to specify whether voluntary change and other penalties are involved in the search or response.
     *
     * @param bool|null $volChangeInd
     *
     * @return self
     */
    public function setVolChangeInd(?bool $volChangeInd): self
    {
        $this->volChangeInd = $volChangeInd;

        return $this;
    }
}
