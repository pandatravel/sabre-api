<?php

namespace Ammonkc\SabreApi\Model\BargainFinderMax;

use Ammonkc\SabreApi\AbstractModel;

class BaggageChargeType extends AbstractModel
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
     * @var float
     */
    protected $equivalentAmount;
    /**
     * @var string
     */
    protected $equivalentCurrency;
    /**
     * @var int
     */
    protected $firstPiece;
    /**
     * @var int
     */
    protected $id;
    /**
     * @var int
     */
    protected $lastPiece;
    /**
     * @var string
     */
    protected $noChargeNotAvailable;

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
     * @return float
     */
    public function getEquivalentAmount(): float
    {
        return $this->equivalentAmount;
    }

    /**
     * @param float $equivalentAmount
     *
     * @return self
     */
    public function setEquivalentAmount(float $equivalentAmount): self
    {
        $this->equivalentAmount = $equivalentAmount;

        return $this;
    }

    /**
     * @return string
     */
    public function getEquivalentCurrency(): string
    {
        return $this->equivalentCurrency;
    }

    /**
     * @param string $equivalentCurrency
     *
     * @return self
     */
    public function setEquivalentCurrency(string $equivalentCurrency): self
    {
        $this->equivalentCurrency = $equivalentCurrency;

        return $this;
    }

    /**
     * @return int
     */
    public function getFirstPiece(): int
    {
        return $this->firstPiece;
    }

    /**
     * @param int $firstPiece
     *
     * @return self
     */
    public function setFirstPiece(int $firstPiece): self
    {
        $this->firstPiece = $firstPiece;

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
    public function getLastPiece(): int
    {
        return $this->lastPiece;
    }

    /**
     * @param int $lastPiece
     *
     * @return self
     */
    public function setLastPiece(int $lastPiece): self
    {
        $this->lastPiece = $lastPiece;

        return $this;
    }

    /**
     * @return string
     */
    public function getNoChargeNotAvailable(): string
    {
        return $this->noChargeNotAvailable;
    }

    /**
     * @param string $noChargeNotAvailable
     *
     * @return self
     */
    public function setNoChargeNotAvailable(string $noChargeNotAvailable): self
    {
        $this->noChargeNotAvailable = $noChargeNotAvailable;

        return $this;
    }
}
