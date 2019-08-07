<?php

namespace Ammonkc\SabreApi\Model\BargainFinderMax;

use Ammonkc\SabreApi\AbstractModel;

class Cat16TextOnly extends AbstractModel
{
    /**
     * Fare basis code for the price for this passenger type code (PTC).
     *
     * @var string
     */
    protected $fareBasisCode;
    /**
     * Fare component ID for which Category 16 contains text only.
     *
     * @var int
     */
    protected $fareComponentId;

    /**
     * Fare basis code for the price for this passenger type code (PTC).
     *
     * @return string
     */
    public function getFareBasisCode(): ?string
    {
        return $this->fareBasisCode;
    }

    /**
     * Fare basis code for the price for this passenger type code (PTC).
     *
     * @param string $fareBasisCode
     *
     * @return self
     */
    public function setFareBasisCode(?string $fareBasisCode): self
    {
        $this->fareBasisCode = $fareBasisCode;

        return $this;
    }

    /**
     * Fare component ID for which Category 16 contains text only.
     *
     * @return int
     */
    public function getFareComponentId(): ?int
    {
        return $this->fareComponentId;
    }

    /**
     * Fare component ID for which Category 16 contains text only.
     *
     * @param int $fareComponentId
     *
     * @return self
     */
    public function setFareComponentId(?int $fareComponentId): self
    {
        $this->fareComponentId = $fareComponentId;

        return $this;
    }
}
