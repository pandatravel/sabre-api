<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Ammonkc\SabreApi\Model\BargainFinderMax;

class OrgOpentravelOta200305BrandFiltersTypeNonBrandedFares
{
    /**
     * @var string
     */
    protected $preferLevel;

    /**
     * @return string
     */
    public function getPreferLevel(): ?string
    {
        return $this->preferLevel;
    }

    /**
     * @param string $preferLevel
     *
     * @return self
     */
    public function setPreferLevel(?string $preferLevel): self
    {
        $this->preferLevel = $preferLevel;

        return $this;
    }
}
