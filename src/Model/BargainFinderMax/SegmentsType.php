<?php

namespace Ammonkc\SabreApi\Model\BargainFinderMax;

use Ammonkc\SabreApi\AbstractModel;

class SegmentsType extends AbstractModel
{
    /**
     * @var FareSegmentType
     */
    protected $segment;
    /**
     * @var SurfaceType
     */
    protected $surface;

    /**
     * @return FareSegmentType
     */
    public function getSegment(): FareSegmentType
    {
        return $this->segment;
    }

    /**
     * @param FareSegmentType $segment
     *
     * @return self
     */
    public function setSegment(FareSegmentType $segment): self
    {
        $this->segment = $segment;

        return $this;
    }

    /**
     * @return SurfaceType
     */
    public function getSurface(): SurfaceType
    {
        return $this->surface;
    }

    /**
     * @param SurfaceType $surface
     *
     * @return self
     */
    public function setSurface(SurfaceType $surface): self
    {
        $this->surface = $surface;

        return $this;
    }
}
