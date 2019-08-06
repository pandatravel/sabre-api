<?php

namespace Ammonkc\SabreApi\Model\BargainFinderMax;

use Ammonkc\SabreApi\AbstractModel;

class OrgOpentravelOta200305CountryNameType extends AbstractModel
{
    /**
     * ISO 3166 code for a country.
     *
     * @var string
     */
    protected $code;
    /**
     * @var string
     */
    protected $content;

    /**
     * ISO 3166 code for a country.
     *
     * @return string
     */
    public function getCode(): string
    {
        return $this->code;
    }

    /**
     * ISO 3166 code for a country.
     *
     * @param string $code
     *
     * @return self
     */
    public function setCode(string $code): self
    {
        $this->code = $code;

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
