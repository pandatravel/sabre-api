<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Ammonkc\SabreApi\Model\BargainFinderMax;

use Ammonkc\SabreApi\AbstractModel;

class OrgOpentravelOta200305VoluntaryChangesSMPType extends AbstractModel
{
    /**
     * Indicates relation between conditions.
     *
     * @var string
     */
    protected $match;
    /**
     * @var OrgOpentravelOta200305VoluntaryChangesSMPTypePenalty[]
     */
    protected $penalty;

    /**
     * Indicates relation between conditions.
     *
     * @return string|null
     */
    public function getMatch(): ?string
    {
        return $this->match;
    }

    /**
     * Indicates relation between conditions.
     *
     * @param string|null $match
     *
     * @return self
     */
    public function setMatch(?string $match): self
    {
        $this->match = $match;

        return $this;
    }

    /**
     * @return OrgOpentravelOta200305VoluntaryChangesSMPTypePenalty[]|null
     */
    public function getPenalty(): ?array
    {
        return $this->penalty;
    }

    /**
     * @param OrgOpentravelOta200305VoluntaryChangesSMPTypePenalty[]|null $penalty
     *
     * @return self
     */
    public function setPenalty(?array $penalty): self
    {
        $this->penalty = $penalty;

        return $this;
    }
}
