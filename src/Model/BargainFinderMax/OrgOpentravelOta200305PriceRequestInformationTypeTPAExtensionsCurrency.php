<?php

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
     * @return string
     */
    public function getDual(): ?string
    {
        return $this->dual;
    }

    /**
     * Dual currency.
     *
     * @param string $dual
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
     * @return bool
     */
    public function getMOverride(): ?bool
    {
        return $this->mOverride;
    }

    /**
     * M override.
     *
     * @param bool $mOverride
     *
     * @return self
     */
    public function setMOverride(?bool $mOverride): self
    {
        $this->mOverride = $mOverride;

        return $this;
    }
}
