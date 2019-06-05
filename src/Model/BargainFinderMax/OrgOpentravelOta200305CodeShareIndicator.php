<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Ammonkc\SabreApi\Model\BargainFinderMax;

class OrgOpentravelOta200305CodeShareIndicator
{
    /**
     * Exclude Codeshares.
     *
     * @var bool
     */
    protected $excludeCodeshare;
    /**
     * Keep onlines.
     *
     * @var bool
     */
    protected $keepOnlines;

    /**
     * Exclude Codeshares.
     *
     * @return bool
     */
    public function getExcludeCodeshare(): ?bool
    {
        return $this->excludeCodeshare;
    }

    /**
     * Exclude Codeshares.
     *
     * @param bool $excludeCodeshare
     *
     * @return self
     */
    public function setExcludeCodeshare(?bool $excludeCodeshare): self
    {
        $this->excludeCodeshare = $excludeCodeshare;

        return $this;
    }

    /**
     * Keep onlines.
     *
     * @return bool
     */
    public function getKeepOnlines(): ?bool
    {
        return $this->keepOnlines;
    }

    /**
     * Keep onlines.
     *
     * @param bool $keepOnlines
     *
     * @return self
     */
    public function setKeepOnlines(?bool $keepOnlines): self
    {
        $this->keepOnlines = $keepOnlines;

        return $this;
    }
}