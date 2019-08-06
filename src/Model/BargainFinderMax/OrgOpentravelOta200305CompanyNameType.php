<?php

namespace Ammonkc\SabreApi\Model\BargainFinderMax;

use Ammonkc\SabreApi\AbstractModel;

class OrgOpentravelOta200305CompanyNameType extends AbstractModel
{
    /**
     * Identifies a company by the company code.
     *
     * @var string
     */
    protected $code;
    /**
     * Identifies the context of the identifying code, such as DUNS, IATA or internal code, etc.
     *
     * @var string
     */
    protected $codeContext;
    /**
     * Used for Character Strings, length 1 to 64.
     *
     * @var string
     */
    protected $companyShortName;
    /**
     * Refer to OTA Code List Travel Sector (TVS).
     *
     * @var string
     */
    protected $travelSector;
    /**
     * @var string
     */
    protected $content;

    /**
     * Identifies a company by the company code.
     *
     * @return string
     */
    public function getCode(): string
    {
        return $this->code;
    }

    /**
     * Identifies a company by the company code.
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
     * Identifies the context of the identifying code, such as DUNS, IATA or internal code, etc.
     *
     * @return string
     */
    public function getCodeContext(): string
    {
        return $this->codeContext;
    }

    /**
     * Identifies the context of the identifying code, such as DUNS, IATA or internal code, etc.
     *
     * @param string $codeContext
     *
     * @return self
     */
    public function setCodeContext(string $codeContext): self
    {
        $this->codeContext = $codeContext;

        return $this;
    }

    /**
     * Used for Character Strings, length 1 to 64.
     *
     * @return string
     */
    public function getCompanyShortName(): string
    {
        return $this->companyShortName;
    }

    /**
     * Used for Character Strings, length 1 to 64.
     *
     * @param string $companyShortName
     *
     * @return self
     */
    public function setCompanyShortName(string $companyShortName): self
    {
        $this->companyShortName = $companyShortName;

        return $this;
    }

    /**
     * Refer to OTA Code List Travel Sector (TVS).
     *
     * @return string
     */
    public function getTravelSector(): string
    {
        return $this->travelSector;
    }

    /**
     * Refer to OTA Code List Travel Sector (TVS).
     *
     * @param string $travelSector
     *
     * @return self
     */
    public function setTravelSector(string $travelSector): self
    {
        $this->travelSector = $travelSector;

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
