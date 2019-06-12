<?php

namespace Ammonkc\SabreApi\Model\OrderManagement;

use Ammonkc\SabreApi\AbstractModel;

class Product extends AbstractModel
{
    /**
     * The unique identifier of the product.
     *
     * @var string
     */
    protected $id;
    /**
     * Contains details of the flight segment.
     *
     * @var AirSegment
     */
    protected $airSegment;

    /**
     * The unique identifier of the product.
     *
     * @return string
     */
    public function getId(): ?string
    {
        return $this->id;
    }

    /**
     * The unique identifier of the product.
     *
     * @param string $id
     *
     * @return self
     */
    public function setId(?string $id): self
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Contains details of the flight segment.
     *
     * @return AirSegment
     */
    public function getAirSegment(): ?AirSegment
    {
        return $this->airSegment;
    }

    /**
     * Contains details of the flight segment.
     *
     * @param AirSegment $airSegment
     *
     * @return self
     */
    public function setAirSegment(?AirSegment $airSegment): self
    {
        $this->airSegment = $airSegment;

        return $this;
    }
}
