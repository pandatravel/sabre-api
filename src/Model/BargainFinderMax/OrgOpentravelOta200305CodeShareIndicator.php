<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Ammonkc\SabreApi\Model\BargainFinderMax;

use Ammonkc\SabreApi\AbstractModel;

class OrgOpentravelOta200305CodeShareIndicator extends AbstractModel
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
     * @return bool|null
     */
    public function getExcludeCodeshare(): ?bool
    {
        return $this->excludeCodeshare;
    }

    /**
     * Exclude Codeshares.
     *
     * @param bool|null $excludeCodeshare
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
     * @return bool|null
     */
    public function getKeepOnlines(): ?bool
    {
        return $this->keepOnlines;
    }

    /**
     * Keep onlines.
     *
     * @param bool|null $keepOnlines
     *
     * @return self
     */
    public function setKeepOnlines(?bool $keepOnlines): self
    {
        $this->keepOnlines = $keepOnlines;

        return $this;
    }
}
