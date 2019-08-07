<?php

namespace Ammonkc\SabreApi\Model\BargainFinderMax;

use Ammonkc\SabreApi\AbstractModel;

class OrgOpentravelOta200305POSType extends AbstractModel
{
    /**
     * @var OrgOpentravelOta200305SourceType[]
     */
    protected $source;

    /**
     * @return OrgOpentravelOta200305SourceType[]
     */
    public function getSource(): ?array
    {
        return $this->source;
    }

    /**
     * @param OrgOpentravelOta200305SourceType[] $source
     *
     * @return self
     */
    public function setSource(?array $source): self
    {
        $this->source = $source;

        return $this;
    }
}
