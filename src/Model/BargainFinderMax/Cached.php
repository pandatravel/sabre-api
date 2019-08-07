<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

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
     * @return int|null
     */
    public function getHoursSinceCreation(): ?int
    {
        return $this->hoursSinceCreation;
    }

    /**
     * Hours since the option was created and stored in cache (in hours).
     *
     * @param int|null $hoursSinceCreation
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
     * @return int|null
     */
    public function getRef(): ?int
    {
        return $this->ref;
    }

    /**
     * Reference to Cache source description ID.
     *
     * @param int|null $ref
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
     * @return int|null
     */
    public function getTimeToLive(): ?int
    {
        return $this->timeToLive;
    }

    /**
     * Time to live in cache (in minutes).
     *
     * @param int|null $timeToLive
     *
     * @return self
     */
    public function setTimeToLive(?int $timeToLive): self
    {
        $this->timeToLive = $timeToLive;

        return $this;
    }
}
