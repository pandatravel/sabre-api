<?php

namespace Ammonkc\SabreApi\Model\GeoAutocomplete;

use Ammonkc\SabreApi\AbstractModel;

class GeoAutocompleteResponseResponse extends AbstractModel
{
    /**
     * @var GeoAutocompleteResponseResponseResponseHeader
     */
    protected $responseHeader;
    /**
     * @var GeoAutocompleteResponseResponseGrouped
     */
    protected $grouped;

    /**
     * @return GeoAutocompleteResponseResponseResponseHeader
     */
    public function getResponseHeader(): GeoAutocompleteResponseResponseResponseHeader
    {
        return $this->responseHeader;
    }

    /**
     * @param GeoAutocompleteResponseResponseResponseHeader $responseHeader
     *
     * @return self
     */
    public function setResponseHeader(GeoAutocompleteResponseResponseResponseHeader $responseHeader): self
    {
        $this->responseHeader = $responseHeader;

        return $this;
    }

    /**
     * @return GeoAutocompleteResponseResponseGrouped
     */
    public function getGrouped(): GeoAutocompleteResponseResponseGrouped
    {
        return $this->grouped;
    }

    /**
     * @param GeoAutocompleteResponseResponseGrouped $grouped
     *
     * @return self
     */
    public function setGrouped(GeoAutocompleteResponseResponseGrouped $grouped): self
    {
        $this->grouped = $grouped;

        return $this;
    }
}
