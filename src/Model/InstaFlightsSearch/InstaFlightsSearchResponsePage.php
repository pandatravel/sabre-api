<?php

namespace Ammonkc\SabreApi\Model\InstaFlightsSearch;

use Ammonkc\SabreApi\AbstractModel;

class InstaFlightsSearchResponsePage extends AbstractModel
{
    /**
     * The number of elements returned on the current page.
     *
     * @var float
     */
    protected $size;
    /**
     * The total number of tags cached from the initial request.
     *
     * @var float
     */
    protected $totalTags;
    /**
     * Returns the value specified in 'offset' request parameter.
     *
     * @var float
     */
    protected $offset;

    /**
     * The number of elements returned on the current page.
     *
     * @return float
     */
    public function getSize(): ?float
    {
        return $this->size;
    }

    /**
     * The number of elements returned on the current page.
     *
     * @param float $size
     *
     * @return self
     */
    public function setSize(?float $size): self
    {
        $this->size = $size;

        return $this;
    }

    /**
     * The total number of tags cached from the initial request.
     *
     * @return float
     */
    public function getTotalTags(): ?float
    {
        return $this->totalTags;
    }

    /**
     * The total number of tags cached from the initial request.
     *
     * @param float $totalTags
     *
     * @return self
     */
    public function setTotalTags(?float $totalTags): self
    {
        $this->totalTags = $totalTags;

        return $this;
    }

    /**
     * Returns the value specified in 'offset' request parameter.
     *
     * @return float
     */
    public function getOffset(): ?float
    {
        return $this->offset;
    }

    /**
     * Returns the value specified in 'offset' request parameter.
     *
     * @param float $offset
     *
     * @return self
     */
    public function setOffset(?float $offset): self
    {
        $this->offset = $offset;

        return $this;
    }
}
