<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Ammonkc\SabreApi\Model\BargainFinderMax;

use Ammonkc\SabreApi\AbstractModel;

class OrgOpentravelOta200305PriceRequestInformationTypeTPAExtensionsCurrency extends AbstractModel
{
    /**
     * Dual currency.
     *
     * @var string
     */
    protected $dual;
    /**
     * M override.
     *
     * @var bool
     */
    protected $mOverride;

    /**
     * Dual currency.
     *
     * @return string|null
     */
    public function getDual(): ?string
    {
        return $this->dual;
    }

    /**
     * Dual currency.
     *
     * @param string|null $dual
     *
     * @return self
     */
    public function setDual(?string $dual): self
    {
        $this->dual = $dual;

        return $this;
    }

    /**
     * M override.
     *
     * @return bool|null
     */
    public function getMOverride(): ?bool
    {
        return $this->mOverride;
    }

    /**
     * M override.
     *
     * @param bool|null $mOverride
     *
     * @return self
     */
    public function setMOverride(?bool $mOverride): self
    {
        $this->mOverride = $mOverride;

        return $this;
    }
}
