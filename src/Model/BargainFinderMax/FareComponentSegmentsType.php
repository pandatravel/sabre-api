<?php

namespace Ammonkc\SabreApi\Model\BargainFinderMax;

use Ammonkc\SabreApi\AbstractModel;

class FareComponentSegmentsType extends AbstractModel
{
    /**
     * @var SegmentType
     */
    protected $segment;
    /**
     * @var mixed
     */
    protected $surface;

    /**
     * @return SegmentType
     */
    public function getSegment(): ?SegmentType
    {
        return $this->segment;
    }

    /**
     * @param SegmentType $segment
     *
     * @return self
     */
    public function setSegment(?SegmentType $segment): self
    {
        $this->segment = $segment;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getSurface()
    {
        return $this->surface;
    }

    /**
     * @param mixed $surface
     *
     * @return self
     */
    public function setSurface($surface): self
    {
        $this->surface = $surface;

        return $this;
    }
}
