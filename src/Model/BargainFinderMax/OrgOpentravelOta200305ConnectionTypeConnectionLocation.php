<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Ammonkc\SabreApi\Model\BargainFinderMax;

use Ammonkc\SabreApi\AbstractModel;

class OrgOpentravelOta200305ConnectionTypeConnectionLocation extends AbstractModel
{
    /**
     * IATA Airport Code indicating connection location, stop, origin or destination.
     *
     * @var string
     */
    protected $locationCode;
    /**
     * The preference level for the airport. Available levels: Only, Unacceptable.
     *
     * @var string
     */
    protected $preferLevel;
    /**
     * @var string
     */
    protected $content;

    /**
     * IATA Airport Code indicating connection location, stop, origin or destination.
     *
     * @return string|null
     */
    public function getLocationCode(): ?string
    {
        return $this->locationCode;
    }

    /**
     * IATA Airport Code indicating connection location, stop, origin or destination.
     *
     * @param string|null $locationCode
     *
     * @return self
     */
    public function setLocationCode(?string $locationCode): self
    {
        $this->locationCode = $locationCode;

        return $this;
    }

    /**
     * The preference level for the airport. Available levels: Only, Unacceptable.
     *
     * @return string|null
     */
    public function getPreferLevel(): ?string
    {
        return $this->preferLevel;
    }

    /**
     * The preference level for the airport. Available levels: Only, Unacceptable.
     *
     * @param string|null $preferLevel
     *
     * @return self
     */
    public function setPreferLevel(?string $preferLevel): self
    {
        $this->preferLevel = $preferLevel;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getContent(): ?string
    {
        return $this->content;
    }

    /**
     * @param string|null $content
     *
     * @return self
     */
    public function setContent(?string $content): self
    {
        $this->content = $content;

        return $this;
    }
}
