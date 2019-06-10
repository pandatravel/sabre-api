<?php

namespace Ammonkc\SabreApi\Model\BargainFinderMax;

use Ammonkc\SabreApi\AbstractModel;

class OrgOpentravelOta200305RequestSpecifiedLocationType extends AbstractModel
{
    /**
     * Name of the airports group.
     *
     * @var string
     */
    protected $airportsGroup;
    /**
     * Identifies the context of the identifying code, such as IATA, ARC, or internal code, etc.
     *
     * @var string
     */
    protected $codeContext;
    /**
     * @var string
     */
    protected $locationCode;
    /**
     * @var string
     */
    protected $locationType;
    /**
     * @var string
     */
    protected $content;

    /**
     * Name of the airports group.
     *
     * @return string
     */
    public function getAirportsGroup(): ?string
    {
        return $this->airportsGroup;
    }

    /**
     * Name of the airports group.
     *
     * @param string $airportsGroup
     *
     * @return self
     */
    public function setAirportsGroup(?string $airportsGroup): self
    {
        $this->airportsGroup = $airportsGroup;

        return $this;
    }

    /**
     * Identifies the context of the identifying code, such as IATA, ARC, or internal code, etc.
     *
     * @return string
     */
    public function getCodeContext(): ?string
    {
        return $this->codeContext;
    }

    /**
     * Identifies the context of the identifying code, such as IATA, ARC, or internal code, etc.
     *
     * @param string $codeContext
     *
     * @return self
     */
    public function setCodeContext(?string $codeContext): self
    {
        $this->codeContext = $codeContext;

        return $this;
    }

    /**
     * @return string
     */
    public function getLocationCode(): ?string
    {
        return $this->locationCode;
    }

    /**
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
     * @return string
     */
    public function getLocationType(): ?string
    {
        return $this->locationType;
    }

    /**
     * @param string $locationType
     *
     * @return self
     */
    public function setLocationType(?string $locationType): self
    {
        $this->locationType = $locationType;

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
