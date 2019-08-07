<?php

namespace Ammonkc\SabreApi\Model\BargainFinderMax;

use Ammonkc\SabreApi\AbstractModel;

class OrgOpentravelOta200305OTAAirLowFareSearchRQTPAExtensionsPartitions extends AbstractModel
{
    /**
     * @var OrgOpentravelOta200305CachePartitionGroupType[]
     */
    protected $group;
    /**
     * @var OrgOpentravelOta200305CachePartitionType[]
     */
    protected $partition;

    /**
     * @return OrgOpentravelOta200305CachePartitionGroupType[]
     */
    public function getGroup(): ?array
    {
        return $this->group;
    }

    /**
     * @param OrgOpentravelOta200305CachePartitionGroupType[] $group
     *
     * @return self
     */
    public function setGroup(?array $group): self
    {
        $this->group = $group;

        return $this;
    }

    /**
     * @return OrgOpentravelOta200305CachePartitionType[]
     */
    public function getPartition(): ?array
    {
        return $this->partition;
    }

    /**
     * @param OrgOpentravelOta200305CachePartitionType[] $partition
     *
     * @return self
     */
    public function setPartition(?array $partition): self
    {
        $this->partition = $partition;

        return $this;
    }
}
