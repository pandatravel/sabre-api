<?php

namespace Ammonkc\SabreApi\Model\BargainFinderMax;

use Ammonkc\SabreApi\AbstractModel;

class OrgOpentravelOta200305CachePartitionGroupType extends AbstractModel
{
    /**
     * @var OrgOpentravelOta200305CachePartitionType[]
     */
    protected $partition;

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
