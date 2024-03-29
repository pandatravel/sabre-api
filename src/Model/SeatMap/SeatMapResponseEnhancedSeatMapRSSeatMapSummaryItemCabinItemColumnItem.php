<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Ammonkc\SabreApi\Model\SeatMap\Model;

class SeatMapResponseEnhancedSeatMapRSSeatMapSummaryItemCabinItemColumnItem
{
    /**
     * @var string
     */
    protected $column;
    /**
     * @var string[]
     */
    protected $characteristics;

    /**
     * @return string
     */
    public function getColumn(): ?string
    {
        return $this->column;
    }

    /**
     * @param string $column
     *
     * @return self
     */
    public function setColumn(?string $column): self
    {
        $this->column = $column;

        return $this;
    }

    /**
     * @return string[]
     */
    public function getCharacteristics(): ?array
    {
        return $this->characteristics;
    }

    /**
     * @param string[] $characteristics
     *
     * @return self
     */
    public function setCharacteristics(?array $characteristics): self
    {
        $this->characteristics = $characteristics;

        return $this;
    }
}
