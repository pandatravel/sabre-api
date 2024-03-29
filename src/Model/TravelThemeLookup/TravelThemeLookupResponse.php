<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Ammonkc\SabreApi\Model\TravelThemeLookup;

use Ammonkc\SabreApi\AbstractModel;

class TravelThemeLookupResponse extends AbstractModel
{
    /**
     * Repeats for each Sabre theme.
     *
     * @var TravelThemeLookupResponseThemesItem[]
     */
    protected $themes;
    /**
     * Array of links for different types of relations, e.g. self, linkTemplate, shop.
     *
     * @var TravelThemeLookupResponseLinksItem[]
     */
    protected $links;

    /**
     * Repeats for each Sabre theme.
     *
     * @return TravelThemeLookupResponseThemesItem[]
     */
    public function getThemes(): ?array
    {
        return $this->themes;
    }

    /**
     * Repeats for each Sabre theme.
     *
     * @param TravelThemeLookupResponseThemesItem[] $themes
     *
     * @return self
     */
    public function setThemes(?array $themes): self
    {
        $this->themes = $themes;

        return $this;
    }

    /**
     * Array of links for different types of relations, e.g. self, linkTemplate, shop.
     *
     * @return TravelThemeLookupResponseLinksItem[]
     */
    public function getLinks(): ?array
    {
        return $this->links;
    }

    /**
     * Array of links for different types of relations, e.g. self, linkTemplate, shop.
     *
     * @param TravelThemeLookupResponseLinksItem[] $links
     *
     * @return self
     */
    public function setLinks(?array $links): self
    {
        $this->links = $links;

        return $this;
    }
}
