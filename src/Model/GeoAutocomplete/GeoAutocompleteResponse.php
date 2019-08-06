<?php

namespace Ammonkc\SabreApi\Model\GeoAutocomplete;

use Ammonkc\SabreApi\AbstractModel;

class GeoAutocompleteResponse extends AbstractModel
{
    /**
     * @var GeoAutocompleteResponseLinksItem[]
     */
    protected $links;
    /**
     * @var GeoAutocompleteResponseResponse
     */
    protected $response;

    /**
     * @return GeoAutocompleteResponseLinksItem[]
     */
    public function getLinks(): array
    {
        return $this->links;
    }

    /**
     * @param GeoAutocompleteResponseLinksItem[] $links
     *
     * @return self
     */
    public function setLinks(array $links): self
    {
        $this->links = $links;

        return $this;
    }

    /**
     * @return GeoAutocompleteResponseResponse
     */
    public function getResponse(): GeoAutocompleteResponseResponse
    {
        return $this->response;
    }

    /**
     * @param GeoAutocompleteResponseResponse $response
     *
     * @return self
     */
    public function setResponse(GeoAutocompleteResponseResponse $response): self
    {
        $this->response = $response;

        return $this;
    }
}
