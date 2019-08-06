<?php

namespace Ammonkc\SabreApi\Model\BargainFinderMax;

use Ammonkc\SabreApi\AbstractModel;

class OrgOpentravelOta200305StateProvType extends AbstractModel
{
    /**
     * The postal service standard code or abbreviation for the state, province, or region.
     *
     * @var string
     */
    protected $stateCode;
    /**
     * @var string
     */
    protected $content;

    /**
     * The postal service standard code or abbreviation for the state, province, or region.
     *
     * @return string
     */
    public function getStateCode(): string
    {
        return $this->stateCode;
    }

    /**
     * The postal service standard code or abbreviation for the state, province, or region.
     *
     * @param string $stateCode
     *
     * @return self
     */
    public function setStateCode(string $stateCode): self
    {
        $this->stateCode = $stateCode;

        return $this;
    }

    /**
     * @return string
     */
    public function getContent(): string
    {
        return $this->content;
    }

    /**
     * @param string $content
     *
     * @return self
     */
    public function setContent(string $content): self
    {
        $this->content = $content;

        return $this;
    }
}
