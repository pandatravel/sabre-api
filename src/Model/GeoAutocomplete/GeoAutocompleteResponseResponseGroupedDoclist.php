<?php

namespace Ammonkc\SabreApi\Model\GeoAutocomplete;

use Ammonkc\SabreApi\AbstractModel;

class GeoAutocompleteResponseResponseGroupedDoclist extends AbstractModel
{
    /**
     * @var float
     */
    protected $numFound;
    /**
     * @var float
     */
    protected $start;
    /**
     * @var GeoAutocompleteResponseResponseGroupedDoclistDocsItem[]
     */
    protected $docs;

    /**
     * @return float
     */
    public function getNumFound(): float
    {
        return $this->numFound;
    }

    /**
     * @param float $numFound
     *
     * @return self
     */
    public function setNumFound(float $numFound): self
    {
        $this->numFound = $numFound;

        return $this;
    }

    /**
     * @return float
     */
    public function getStart(): float
    {
        return $this->start;
    }

    /**
     * @param float $start
     *
     * @return self
     */
    public function setStart(float $start): self
    {
        $this->start = $start;

        return $this;
    }

    /**
     * @return GeoAutocompleteResponseResponseGroupedDoclistDocsItem[]
     */
    public function getDocs(): array
    {
        return $this->docs;
    }

    /**
     * @param GeoAutocompleteResponseResponseGroupedDoclistDocsItem[] $docs
     *
     * @return self
     */
    public function setDocs(array $docs): self
    {
        $this->docs = $docs;

        return $this;
    }
}
