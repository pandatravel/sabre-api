<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Ammonkc\SabreApi\Model\AdvancedCalendarSearch;

use Ammonkc\SabreApi\AbstractModel;

class AdvancedCalendarSearchByTagIDResponseLinksItem extends AbstractModel
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
    public function getRel(): ?string
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
