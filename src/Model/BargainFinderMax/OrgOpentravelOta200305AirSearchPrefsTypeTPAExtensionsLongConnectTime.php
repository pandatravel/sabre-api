<?php

namespace Ammonkc\SabreApi\Model\BargainFinderMax;

use Ammonkc\SabreApi\AbstractModel;

class OrgOpentravelOta200305AirSearchPrefsTypeTPAExtensionsLongConnectTime extends AbstractModel
{
    /**
     * @var bool
     */
    protected $enable;
    /**
     * @var float
     */
    protected $max;
    /**
     * @var float
     */
    protected $min;
    /**
     * @var string
     */
    protected $numberOfSolutions;

    /**
     * @return bool
     */
    public function getEnable(): bool
    {
        return $this->enable;
    }

    /**
     * @param bool $enable
     *
     * @return self
     */
    public function setEnable(bool $enable): self
    {
        $this->enable = $enable;

        return $this;
    }

    /**
     * @return float
     */
    public function getMax(): float
    {
        return $this->max;
    }

    /**
     * @param float $max
     *
     * @return self
     */
    public function setMax(float $max): self
    {
        $this->max = $max;

        return $this;
    }

    /**
     * @return float
     */
    public function getMin(): float
    {
        return $this->min;
    }

    /**
     * @param float $min
     *
     * @return self
     */
    public function setMin(float $min): self
    {
        $this->min = $min;

        return $this;
    }

    /**
     * @return string
     */
    public function getNumberOfSolutions(): string
    {
        return $this->numberOfSolutions;
    }

    /**
     * @param string $numberOfSolutions
     *
     * @return self
     */
    public function setNumberOfSolutions(string $numberOfSolutions): self
    {
        $this->numberOfSolutions = $numberOfSolutions;

        return $this;
    }
}
