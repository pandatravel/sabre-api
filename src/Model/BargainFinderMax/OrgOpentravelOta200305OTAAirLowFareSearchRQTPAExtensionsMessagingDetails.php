<?php

namespace Ammonkc\SabreApi\Model\BargainFinderMax;

use Ammonkc\SabreApi\AbstractModel;

class OrgOpentravelOta200305OTAAirLowFareSearchRQTPAExtensionsMessagingDetails extends AbstractModel
{
    /**
     * @var OrgOpentravelOta200305OTAAirLowFareSearchRQTPAExtensionsMessagingDetailsMDRSubset
     */
    protected $mDRSubset;

    /**
     * @return OrgOpentravelOta200305OTAAirLowFareSearchRQTPAExtensionsMessagingDetailsMDRSubset
     */
    public function getMDRSubset(): ?OrgOpentravelOta200305OTAAirLowFareSearchRQTPAExtensionsMessagingDetailsMDRSubset
    {
        return $this->mDRSubset;
    }

    /**
     * @param OrgOpentravelOta200305OTAAirLowFareSearchRQTPAExtensionsMessagingDetailsMDRSubset $mDRSubset
     *
     * @return self
     */
    public function setMDRSubset(?OrgOpentravelOta200305OTAAirLowFareSearchRQTPAExtensionsMessagingDetailsMDRSubset $mDRSubset): self
    {
        $this->mDRSubset = $mDRSubset;

        return $this;
    }
}
