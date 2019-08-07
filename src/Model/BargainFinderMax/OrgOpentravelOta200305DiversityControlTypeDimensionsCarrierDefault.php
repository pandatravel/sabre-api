<?php

namespace Ammonkc\SabreApi\Model\BargainFinderMax;

use Ammonkc\SabreApi\AbstractModel;

class OrgOpentravelOta200305DiversityControlTypeDimensionsCarrierDefault extends AbstractModel
{
    /**
     * @var string
     */
    protected $options;

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
