<?php

namespace Ammonkc\SabreApi\Model\BargainFinderMax;

use Ammonkc\SabreApi\AbstractModel;

class OrgOpentravelOta200305BrandCodePrefType extends AbstractModel
{
    /**
     * Specify brand code.
     *
     * @var string
     */
    protected $code;
    /**
     * @var string
     */
    protected $preferLevel;

    /**
     * Specify brand code.
     *
     * @return string
     */
    public function getCode(): ?string
    {
        return $this->code;
    }

    /**
     * Specify brand code.
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
