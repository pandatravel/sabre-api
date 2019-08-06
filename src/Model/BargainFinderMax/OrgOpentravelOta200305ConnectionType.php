<?php

namespace Ammonkc\SabreApi\Model\BargainFinderMax;

use Ammonkc\SabreApi\AbstractModel;

class OrgOpentravelOta200305ConnectionType extends AbstractModel
{
    /**
     * @var OrgOpentravelOta200305ConnectionTypeConnectionLocation[]
     */
    protected $connectionLocation;

    /**
     * @return OrgOpentravelOta200305ConnectionTypeConnectionLocation[]
     */
    public function getConnectionLocation(): array
    {
        return $this->connectionLocation;
    }

    /**
     * @param OrgOpentravelOta200305ConnectionTypeConnectionLocation[] $connectionLocation
     *
     * @return self
     */
    public function setConnectionLocation(array $connectionLocation): self
    {
        $this->connectionLocation = $connectionLocation;

        return $this;
    }
}
