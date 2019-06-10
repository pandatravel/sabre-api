<?php

namespace Ammonkc\SabreApi\Model\BargainFinderMax;

use Ammonkc\SabreApi\AbstractModel;

class OrgOpentravelOta200305ExchangePOSType extends AbstractModel
{
    /**
     * @var OrgOpentravelOta200305ExchangeSourceType
     */
    protected $source;

    /**
     * @return OrgOpentravelOta200305ExchangeSourceType
     */
    public function getSource(): ?OrgOpentravelOta200305ExchangeSourceType
    {
        return $this->source;
    }

    /**
     * @param OrgOpentravelOta200305ExchangeSourceType $source
     *
     * @return self
     */
    public function setSource(?OrgOpentravelOta200305ExchangeSourceType $source): self
    {
        $this->source = $source;

        return $this;
    }
}
