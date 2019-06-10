<?php

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
     * @return string
     */
    public function getLocationCode(): ?string
    {
        return $this->locationCode;
    }

    /**
     * IATA Airport Code indicating connection location, stop, origin or destination.
     *
     * @param string $locationCode
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
     * @return string
     */
    public function getPreferLevel(): ?string
    {
        return $this->preferLevel;
    }

    /**
     * The preference level for the airport. Available levels: Only, Unacceptable.
     *
     * @param string $preferLevel
     *
     * @return self
     */
    public function setPreferLevel(?string $preferLevel): self
    {
        $this->preferLevel = $preferLevel;

        return $this;
    }

    /**
     * @return string
     */
    public function getContent(): ?string
    {
        return $this->content;
    }

    /**
     * @param string $content
     *
     * @return self
     */
    public function setContent(?string $content): self
    {
        $this->content = $content;

        return $this;
    }
}
