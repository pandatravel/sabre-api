<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Ammonkc\SabreApi\Model\BargainFinderMax;

use Ammonkc\SabreApi\AbstractModel;

class OrgOpentravelOta200305KeepSameCabinType extends AbstractModel
{
    /**
     * Set to "true" guarantees that all segments within single shopping option belong to the requested cabin.
     *
     * @var bool
     */
    protected $enabled;

    /**
     * Set to "true" guarantees that all segments within single shopping option belong to the requested cabin.
     *
     * @return bool|null
     */
    public function getEnabled(): ?bool
    {
        return $this->enabled;
    }

    /**
     * Set to "true" guarantees that all segments within single shopping option belong to the requested cabin.
     *
     * @param bool|null $enabled
     *
     * @return self
     */
    public function setEnabled(?bool $enabled): self
    {
        $this->enabled = $enabled;

        return $this;
    }
}
