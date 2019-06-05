<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Ammonkc\SabreApi\Model\BargainFinderMax;

class OrgOpentravelOta200305CachePartitionGroupType
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