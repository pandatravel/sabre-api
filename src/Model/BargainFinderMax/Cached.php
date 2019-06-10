<?php

namespace Ammonkc\SabreApi\Model\BargainFinderMax;

use Ammonkc\SabreApi\AbstractModel;

class Cached extends AbstractModel
{
    /**
     * Hours since the option was created and stored in cache (in hours).
     *
     * @var int
     */
    protected $hoursSinceCreation;
    /**
     * Reference to Cache source description ID.
     *
     * @var int
     */
    protected $ref;
    /**
     * Time to live in cache (in minutes).
     *
     * @var int
     */
    protected $timeToLive;

    /**
     * Hours since the option was created and stored in cache (in hours).
     *
     * @return int
     */
    public function getHoursSinceCreation(): ?int
    {
        return $this->hoursSinceCreation;
    }

    /**
     * Hours since the option was created and stored in cache (in hours).
     *
     * @param int $hoursSinceCreation
     *
     * @return self
     */
    public function setHoursSinceCreation(?int $hoursSinceCreation): self
    {
        $this->hoursSinceCreation = $hoursSinceCreation;

        return $this;
    }

    /**
     * Reference to Cache source description ID.
     *
     * @return int
     */
    public function getRef(): ?int
    {
        return $this->ref;
    }

    /**
     * Reference to Cache source description ID.
     *
     * @param int $ref
     *
     * @return self
     */
    public function setRef(?int $ref): self
    {
        $this->ref = $ref;

        return $this;
    }

    /**
     * Time to live in cache (in minutes).
     *
     * @return int
     */
    public function getTimeToLive(): ?int
    {
        return $this->timeToLive;
    }

    /**
     * Time to live in cache (in minutes).
     *
     * @param int $timeToLive
     *
     * @return self
     */
    public function setTimeToLive(?int $timeToLive): self
    {
        $this->timeToLive = $timeToLive;

        return $this;
    }
}
