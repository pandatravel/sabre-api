<?php

namespace Ammonkc\SabreApi\Model\GeoAutocomplete;

use Ammonkc\SabreApi\AbstractModel;

class GeoAutocompleteResponseResponseGrouped extends AbstractModel
{
    /**
     * @var string
     */
    protected $category;
    /**
     * @var float
     */
    protected $matches;
    /**
     * @var GeoAutocompleteResponseResponseGroupedDoclist
     */
    protected $doclist;

    /**
     * @return string
     */
    public function getCategory(): string
    {
        return $this->category;
    }

    /**
     * @param string $category
     *
     * @return self
     */
    public function setCategory(string $category): self
    {
        $this->category = $category;

        return $this;
    }

    /**
     * @return float
     */
    public function getMatches(): float
    {
        return $this->matches;
    }

    /**
     * @param float $matches
     *
     * @return self
     */
    public function setMatches(float $matches): self
    {
        $this->matches = $matches;

        return $this;
    }

    /**
     * @return GeoAutocompleteResponseResponseGroupedDoclist
     */
    public function getDoclist(): GeoAutocompleteResponseResponseGroupedDoclist
    {
        return $this->doclist;
    }

    /**
     * @param GeoAutocompleteResponseResponseGroupedDoclist $doclist
     *
     * @return self
     */
    public function setDoclist(GeoAutocompleteResponseResponseGroupedDoclist $doclist): self
    {
        $this->doclist = $doclist;

        return $this;
    }
}
