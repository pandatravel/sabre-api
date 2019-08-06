<?php

namespace Ammonkc\SabreApi\Model\BargainFinderMax;

use Ammonkc\SabreApi\AbstractModel;

class OrgOpentravelOta200305DiversityControlTypeDimensionsCarrierOverride extends AbstractModel
{
    /**
     * @var string
     */
    protected $code;
    /**
     * @var string
     */
    protected $options;

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
    public function getOptions(): string
    {
        return $this->options;
    }

    /**
     * @param string $options
     *
     * @return self
     */
    public function setOptions(string $options): self
    {
        $this->options = $options;

        return $this;
    }
}
