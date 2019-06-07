<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Ammonkc\SabreApi\Model\AdvancedCalendarSearch;

use Ammonkc\SabreApi\AbstractModel;

class AdvancedCalendarSearchByRequestIDResponsePage extends AbstractModel
{
    /**
     * @var int
     */
    protected $size;
    /**
     * @var int
     */
    protected $totalTags;
    /**
     * @var int
     */
    protected $offset;

    /**
     * @return int
     */
    public function getSize(): ?int
    {
        return $this->size;
    }

    /**
     * @param int $size
     *
     * @return self
     */
    public function setSize(?int $size): self
    {
        $this->size = $size;

        return $this;
    }

    /**
     * @return int
     */
    public function getTotalTags(): ?int
    {
        return $this->totalTags;
    }

    /**
     * @param int $totalTags
     *
     * @return self
     */
    public function setTotalTags(?int $totalTags): self
    {
        $this->totalTags = $totalTags;

        return $this;
    }

    /**
     * @return int
     */
    public function getOffset(): ?int
    {
        return $this->offset;
    }

    /**
     * @param int $offset
     *
     * @return self
     */
    public function setOffset(?int $offset): self
    {
        $this->offset = $offset;

        return $this;
    }
}