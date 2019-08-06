<?php

namespace Ammonkc\SabreApi\Model\GeoAutocomplete;

use Ammonkc\SabreApi\AbstractModel;

class GeoAutocompleteResponseLinksItem extends AbstractModel
{
    /**
     * Describes relationship between href and current request.
     *
     * @var string
     */
    protected $rel;
    /**
     * Link to related API request.
     *
     * @var string
     */
    protected $href;

    /**
     * Describes relationship between href and current request.
     *
     * @return string
     */
    public function getRel(): string
    {
        return $this->rel;
    }

    /**
     * Describes relationship between href and current request.
     *
     * @param string $rel
     *
     * @return self
     */
    public function setRel(string $rel): self
    {
        $this->rel = $rel;

        return $this;
    }

    /**
     * Link to related API request.
     *
     * @return string
     */
    public function getHref(): string
    {
        return $this->href;
    }

    /**
     * Link to related API request.
     *
     * @param string $href
     *
     * @return self
     */
    public function setHref(string $href): self
    {
        $this->href = $href;

        return $this;
    }
}
