<?php

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
     * @return bool
     */
    public function getEnabled(): bool
    {
        return $this->enabled;
    }

    /**
     * Set to "true" guarantees that all segments within single shopping option belong to the requested cabin.
     *
     * @param bool $enabled
     *
     * @return self
     */
    public function setEnabled(bool $enabled): self
    {
        $this->enabled = $enabled;

        return $this;
    }
}
