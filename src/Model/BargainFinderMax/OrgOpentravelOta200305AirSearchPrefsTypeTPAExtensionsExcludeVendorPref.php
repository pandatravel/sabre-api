<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Ammonkc\SabreApi\Model\BargainFinderMax;

class OrgOpentravelOta200305AirSearchPrefsTypeTPAExtensionsExcludeVendorPref
{
    /**
     * Identifies a company by the company code.
     *
     * @var string
     */
    protected $code;

    /**
     * Identifies a company by the company code.
     *
     * @return string
     */
    public function getCode(): ?string
    {
        return $this->code;
    }

    /**
     * Identifies a company by the company code.
     *
     * @param string $code
     *
     * @return self
     */
    public function setCode(?string $code): self
    {
        $this->code = $code;

        return $this;
    }
}
