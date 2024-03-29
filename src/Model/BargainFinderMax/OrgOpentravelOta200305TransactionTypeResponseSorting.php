<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Ammonkc\SabreApi\Model\BargainFinderMax;

use Ammonkc\SabreApi\AbstractModel;

class OrgOpentravelOta200305TransactionTypeResponseSorting extends AbstractModel
{
    /**
     * @var bool
     */
    protected $enableChronologicalSorting;
    /**
     * @var bool
     */
    protected $sortFaresInsideItin;

    /**
     * @return bool|null
     */
    public function getEnableChronologicalSorting(): ?bool
    {
        return $this->enableChronologicalSorting;
    }

    /**
     * @param bool|null $enableChronologicalSorting
     *
     * @return self
     */
    public function setEnableChronologicalSorting(?bool $enableChronologicalSorting): self
    {
        $this->enableChronologicalSorting = $enableChronologicalSorting;

        return $this;
    }

    /**
     * @return bool|null
     */
    public function getSortFaresInsideItin(): ?bool
    {
        return $this->sortFaresInsideItin;
    }

    /**
     * @param bool|null $sortFaresInsideItin
     *
     * @return self
     */
    public function setSortFaresInsideItin(?bool $sortFaresInsideItin): self
    {
        $this->sortFaresInsideItin = $sortFaresInsideItin;

        return $this;
    }
}
