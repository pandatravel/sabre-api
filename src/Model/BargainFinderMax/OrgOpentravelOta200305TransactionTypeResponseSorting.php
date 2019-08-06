<?php

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
     * @return bool
     */
    public function getEnableChronologicalSorting(): bool
    {
        return $this->enableChronologicalSorting;
    }

    /**
     * @param bool $enableChronologicalSorting
     *
     * @return self
     */
    public function setEnableChronologicalSorting(bool $enableChronologicalSorting): self
    {
        $this->enableChronologicalSorting = $enableChronologicalSorting;

        return $this;
    }

    /**
     * @return bool
     */
    public function getSortFaresInsideItin(): bool
    {
        return $this->sortFaresInsideItin;
    }

    /**
     * @param bool $sortFaresInsideItin
     *
     * @return self
     */
    public function setSortFaresInsideItin(bool $sortFaresInsideItin): self
    {
        $this->sortFaresInsideItin = $sortFaresInsideItin;

        return $this;
    }
}
