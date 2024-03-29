<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Ammonkc\SabreApi\Model\AdvancedCalendarSearch;

use Ammonkc\SabreApi\AbstractModel;

class AdvancedCalendarSearchByRequestIDResponse extends AbstractModel
{
    /**
     * @var string
     */
    protected $requestID;
    /**
     * @var AdvancedCalendarSearchByRequestIDResponsePage
     */
    protected $page;
    /**
     * @var AdvancedCalendarSearchByRequestIDResponseOTAAirLowFareSearchRS
     */
    protected $oTAAirLowFareSearchRS;
    /**
     * Array of links for different types of relations, e.g. self, linkTemplate, shop.
     *
     * @var AdvancedCalendarSearchByRequestIDResponseLinksItem[]
     */
    protected $links;

    /**
     * @return string
     */
    public function getRequestID(): ?string
    {
        return $this->requestID;
    }

    /**
     * @param string $requestID
     *
     * @return self
     */
    public function setRequestID(?string $requestID): self
    {
        $this->requestID = $requestID;

        return $this;
    }

    /**
     * @return AdvancedCalendarSearchByRequestIDResponsePage
     */
    public function getPage(): ?AdvancedCalendarSearchByRequestIDResponsePage
    {
        return $this->page;
    }

    /**
     * @param AdvancedCalendarSearchByRequestIDResponsePage $page
     *
     * @return self
     */
    public function setPage(?AdvancedCalendarSearchByRequestIDResponsePage $page): self
    {
        $this->page = $page;

        return $this;
    }

    /**
     * @return AdvancedCalendarSearchByRequestIDResponseOTAAirLowFareSearchRS
     */
    public function getOTAAirLowFareSearchRS(): ?AdvancedCalendarSearchByRequestIDResponseOTAAirLowFareSearchRS
    {
        return $this->oTAAirLowFareSearchRS;
    }

    /**
     * @param AdvancedCalendarSearchByRequestIDResponseOTAAirLowFareSearchRS $oTAAirLowFareSearchRS
     *
     * @return self
     */
    public function setOTAAirLowFareSearchRS(?AdvancedCalendarSearchByRequestIDResponseOTAAirLowFareSearchRS $oTAAirLowFareSearchRS): self
    {
        $this->oTAAirLowFareSearchRS = $oTAAirLowFareSearchRS;

        return $this;
    }

    /**
     * Array of links for different types of relations, e.g. self, linkTemplate, shop.
     *
     * @return AdvancedCalendarSearchByRequestIDResponseLinksItem[]
     */
    public function getLinks(): ?array
    {
        return $this->links;
    }

    /**
     * Array of links for different types of relations, e.g. self, linkTemplate, shop.
     *
     * @param AdvancedCalendarSearchByRequestIDResponseLinksItem[] $links
     *
     * @return self
     */
    public function setLinks(?array $links): self
    {
        $this->links = $links;

        return $this;
    }
}
