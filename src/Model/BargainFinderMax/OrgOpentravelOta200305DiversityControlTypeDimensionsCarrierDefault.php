<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Ammonkc\SabreApi\Model\BargainFinderMax;

use Ammonkc\SabreApi\AbstractModel;

class OrgOpentravelOta200305DiversityControlTypeDimensionsCarrierDefault extends AbstractModel
{
    /**
     * @var string
     */
    protected $options;

    /**
     * @return string|null
     */
    public function getOptions(): ?string
    {
        return $this->options;
    }

    /**
     * @param string|null $options
     *
     * @return self
     */
    public function setOptions(?string $options): self
    {
        $this->options = $options;

        return $this;
    }
}
