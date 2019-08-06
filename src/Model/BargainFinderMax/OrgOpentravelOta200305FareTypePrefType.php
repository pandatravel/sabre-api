<?php

namespace Ammonkc\SabreApi\Model\BargainFinderMax;

use Ammonkc\SabreApi\AbstractModel;

class OrgOpentravelOta200305FareTypePrefType extends AbstractModel
{
    /**
     * @var string
     */
    protected $code;
    /**
     * @var string
     */
    protected $preferLevel;

    /**
     * @return string
     */
    public function getCode(): string
    {
        return $this->code;
    }

    /**
     * @param string $code
     *
     * @return self
     */
    public function setCode(string $code): self
    {
        $this->code = $code;

        return $this;
    }

    /**
     * @return string
     */
    public function getPreferLevel(): string
    {
        return $this->preferLevel;
    }

    /**
     * @param string $preferLevel
     *
     * @return self
     */
    public function setPreferLevel(string $preferLevel): self
    {
        $this->preferLevel = $preferLevel;

        return $this;
    }
}
