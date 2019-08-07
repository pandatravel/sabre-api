<?php

namespace Ammonkc\SabreApi\Model\BargainFinderMax;

use Ammonkc\SabreApi\AbstractModel;

class OrgOpentravelOta200305DiversityControlTypeDimensionsTimeOfDayDistributionRange extends AbstractModel
{
    /**
     * @var string
     */
    protected $begin;
    /**
     * @var string
     */
    protected $end;
    /**
     * @var string
     */
    protected $options;

    /**
     * @return string
     */
    public function getBegin(): ?string
    {
        return $this->begin;
    }

    /**
     * @param string $begin
     *
     * @return self
     */
    public function setBegin(?string $begin): self
    {
        $this->begin = $begin;

        return $this;
    }

    /**
     * @return string
     */
    public function getEnd(): ?string
    {
        return $this->end;
    }

    /**
     * @param string $end
     *
     * @return self
     */
    public function setEnd(?string $end): self
    {
        $this->end = $end;

        return $this;
    }

    /**
     * @return string
     */
    public function getOptions(): ?string
    {
        return $this->options;
    }

    /**
     * @param string $options
     *
     * @return self
     */
    public function setOptions(?string $options): self
    {
        $this->options = $options;

        return $this;
    }
}
