<?php

namespace Ammonkc\SabreApi\Model\BargainFinderMax;

use Ammonkc\SabreApi\AbstractModel;

class CacheSourceDescType extends AbstractModel
{
    /**
     * Cache source ID.
     *
     * @var int
     */
    protected $id;
    /**
     * Indicates source partition of cached itinerary.
     *
     * @var string
     */
    protected $partition;
    /**
     * Indicates source partition priority of cached itinerary.
     *
     * @var int
     */
    protected $priority;
    /**
     * Indicates source version of cached itinerary.
     *
     * @var string
     */
    protected $version;

    /**
     * Cache source ID.
     *
     * @return int
     */
    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * Cache source ID.
     *
     * @param int $id
     *
     * @return self
     */
    public function setId(?int $id): self
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Indicates source partition of cached itinerary.
     *
     * @return string
     */
    public function getPartition(): ?string
    {
        return $this->partition;
    }

    /**
     * Indicates source partition of cached itinerary.
     *
     * @param string $partition
     *
     * @return self
     */
    public function setPartition(?string $partition): self
    {
        $this->partition = $partition;

        return $this;
    }

    /**
     * Indicates source partition priority of cached itinerary.
     *
     * @return int
     */
    public function getPriority(): ?int
    {
        return $this->priority;
    }

    /**
     * Indicates source partition priority of cached itinerary.
     *
     * @param int $priority
     *
     * @return self
     */
    public function setPriority(?int $priority): self
    {
        $this->priority = $priority;

        return $this;
    }

    /**
     * Indicates source version of cached itinerary.
     *
     * @return string
     */
    public function getVersion(): ?string
    {
        return $this->version;
    }

    /**
     * Indicates source version of cached itinerary.
     *
     * @param string $version
     *
     * @return self
     */
    public function setVersion(?string $version): self
    {
        $this->version = $version;

        return $this;
    }
}
