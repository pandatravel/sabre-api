<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Ammonkc\SabreApi\Model\BargainFinderMax;

class OrgOpentravelOta200305VendorPrefPairingType
{
    /**
     * Specifies carrier selection method.
     *
     * @var string
     */
    protected $applicability;
    /**
     * Used to specify a preference level for all carrier combinations inside one element.
     *
     * @var string
     */
    protected $preferLevel;
    /**
     * @var OrgOpentravelOta200305VendorPrefPairingTypeVendorPref[]
     */
    protected $vendorPref;

    /**
     * Specifies carrier selection method.
     *
     * @return string
     */
    public function getApplicability(): ?string
    {
        return $this->applicability;
    }

    /**
     * Specifies carrier selection method.
     *
     * @param string $applicability
     *
     * @return self
     */
    public function setApplicability(?string $applicability): self
    {
        $this->applicability = $applicability;

        return $this;
    }

    /**
     * Used to specify a preference level for all carrier combinations inside one element.
     *
     * @return string
     */
    public function getPreferLevel(): ?string
    {
        return $this->preferLevel;
    }

    /**
     * Used to specify a preference level for all carrier combinations inside one element.
     *
     * @param string $preferLevel
     *
     * @return self
     */
    public function setPreferLevel(?string $preferLevel): self
    {
        $this->preferLevel = $preferLevel;

        return $this;
    }

    /**
     * @return OrgOpentravelOta200305VendorPrefPairingTypeVendorPref[]
     */
    public function getVendorPref(): ?array
    {
        return $this->vendorPref;
    }

    /**
     * @param OrgOpentravelOta200305VendorPrefPairingTypeVendorPref[] $vendorPref
     *
     * @return self
     */
    public function setVendorPref(?array $vendorPref): self
    {
        $this->vendorPref = $vendorPref;

        return $this;
    }
}
