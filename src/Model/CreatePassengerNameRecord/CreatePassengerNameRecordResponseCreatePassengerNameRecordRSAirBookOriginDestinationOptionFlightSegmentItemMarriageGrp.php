<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Ammonkc\SabreApi\Model\CreatePassengerNameRecord;

use Ammonkc\SabreApi\AbstractModel;

class CreatePassengerNameRecordResponseCreatePassengerNameRecordRSAirBookOriginDestinationOptionFlightSegmentItemMarriageGrp extends AbstractModel
{
    /**
     * Married connection indicator.
     *
     * @var string
     */
    protected $ind;
    /**
     * A set of air segments that are considered "married" together. This is referred to as the new married "group number". Married Group may contain up to 3 segments.
     *
     * @var string
     */
    protected $group;
    /**
     * The "sequence number" within the set/group of air segments that considered "married" together.
     *
     * @var string
     */
    protected $sequence;

    /**
     * Married connection indicator.
     *
     * @return string
     */
    public function getInd(): ?string
    {
        return $this->ind;
    }

    /**
     * Married connection indicator.
     *
     * @param string $ind
     *
     * @return self
     */
    public function setInd(?string $ind): self
    {
        $this->ind = $ind;

        return $this;
    }

    /**
     * A set of air segments that are considered "married" together. This is referred to as the new married "group number". Married Group may contain up to 3 segments.
     *
     * @return string
     */
    public function getGroup(): ?string
    {
        return $this->group;
    }

    /**
     * A set of air segments that are considered "married" together. This is referred to as the new married "group number". Married Group may contain up to 3 segments.
     *
     * @param string $group
     *
     * @return self
     */
    public function setGroup(?string $group): self
    {
        $this->group = $group;

        return $this;
    }

    /**
     * The "sequence number" within the set/group of air segments that considered "married" together.
     *
     * @return string
     */
    public function getSequence(): ?string
    {
        return $this->sequence;
    }

    /**
     * The "sequence number" within the set/group of air segments that considered "married" together.
     *
     * @param string $sequence
     *
     * @return self
     */
    public function setSequence(?string $sequence): self
    {
        $this->sequence = $sequence;

        return $this;
    }
}
