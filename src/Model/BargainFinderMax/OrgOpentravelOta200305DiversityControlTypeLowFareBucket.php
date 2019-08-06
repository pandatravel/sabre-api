<?php

namespace Ammonkc\SabreApi\Model\BargainFinderMax;

use Ammonkc\SabreApi\AbstractModel;

class OrgOpentravelOta200305DiversityControlTypeLowFareBucket extends AbstractModel
{
    /**
     * @var string
     */
    protected $fareCutOff;
    /**
     * @var string
     */
    protected $options;

    /**
     * @return string
     */
    public function getFareCutOff(): string
    {
        return $this->fareCutOff;
    }

    /**
     * @param string $fareCutOff
     *
     * @return self
     */
    public function setFareCutOff(string $fareCutOff): self
    {
        $this->fareCutOff = $fareCutOff;

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
