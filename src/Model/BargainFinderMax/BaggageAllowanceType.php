<?php

namespace Ammonkc\SabreApi\Model\BargainFinderMax;

use Ammonkc\SabreApi\AbstractModel;

class BaggageAllowanceType extends AbstractModel
{
    /**
     * @var string
     */
    protected $description1;
    /**
     * @var string
     */
    protected $description2;
    /**
     * @var int
     */
    protected $id;
    /**
     * @var int
     */
    protected $pieceCount;
    /**
     * @var string
     */
    protected $unit;
    /**
     * @var int
     */
    protected $weight;

    /**
     * @return string
     */
    public function getDescription1(): string
    {
        return $this->description1;
    }

    /**
     * @param string $description1
     *
     * @return self
     */
    public function setDescription1(string $description1): self
    {
        $this->description1 = $description1;

        return $this;
    }

    /**
     * @return string
     */
    public function getDescription2(): string
    {
        return $this->description2;
    }

    /**
     * @param string $description2
     *
     * @return self
     */
    public function setDescription2(string $description2): self
    {
        $this->description2 = $description2;

        return $this;
    }

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param int $id
     *
     * @return self
     */
    public function setId(int $id): self
    {
        $this->id = $id;

        return $this;
    }

    /**
     * @return int
     */
    public function getPieceCount(): int
    {
        return $this->pieceCount;
    }

    /**
     * @param int $pieceCount
     *
     * @return self
     */
    public function setPieceCount(int $pieceCount): self
    {
        $this->pieceCount = $pieceCount;

        return $this;
    }

    /**
     * @return string
     */
    public function getUnit(): string
    {
        return $this->unit;
    }

    /**
     * @param string $unit
     *
     * @return self
     */
    public function setUnit(string $unit): self
    {
        $this->unit = $unit;

        return $this;
    }

    /**
     * @return int
     */
    public function getWeight(): int
    {
        return $this->weight;
    }

    /**
     * @param int $weight
     *
     * @return self
     */
    public function setWeight(int $weight): self
    {
        $this->weight = $weight;

        return $this;
    }
}
