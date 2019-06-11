<?php

namespace Ammonkc\SabreApi\Model\EnhancedAirTicket;

use Ammonkc\SabreApi\AbstractModel;

class LinksItem extends AbstractModel
{
    /**
     * Returns the URL of the request that generated the response.
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
     * Returns the URL of the request that generated the response.
     *
     * @return string
     */
    public function getRel(): ?string
    {
        return $this->rel;
    }

    /**
     * Returns the URL of the request that generated the response.
     *
     * @param string $rel
     *
     * @return self
     */
    public function setRel(?string $rel): self
    {
        $this->rel = $rel;

        return $this;
    }

    /**
     * Link to related API request.
     *
     * @return string
     */
    public function getHref(): ?string
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
    public function setHref(?string $href): self
    {
        $this->href = $href;

        return $this;
    }
}
