<?php

namespace Ammonkc\SabreApi\Model\BargainFinderMax;

use Ammonkc\SabreApi\AbstractModel;

class OrgOpentravelOta200305CompanyNamePrefType extends AbstractModel
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
     * Used to specify a preference level for something that is or will be requested (e.g. a supplier of a service, a type of service, a form of payment, etc.).
     *
     * @var string
     */
    protected $preferLevel;
    /**
     * Refer to OTA Code List Travel Sector (TVS).,Specifies what type of carrier it applies to.
     *
     * @var string
     */
    protected $travelSector;
    /**
     * @var string
     */
    protected $type;
    /**
     * @var string
     */
    protected $content;

    /**
     * Identifies a company by the company code.
     *
     * @return string
     */
    public function getCode(): ?string
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
    public function setCode(?string $code): self
    {
        $this->code = $code;

        return $this;
    }

    /**
     * Identifies the context of the identifying code, such as DUNS, IATA or internal code, etc.
     *
     * @return string
     */
    public function getCodeContext(): ?string
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
    public function setCodeContext(?string $codeContext): self
    {
        $this->codeContext = $codeContext;

        return $this;
    }

    /**
     * Used for Character Strings, length 1 to 64.
     *
     * @return string
     */
    public function getCompanyShortName(): ?string
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
    public function setCompanyShortName(?string $companyShortName): self
    {
        $this->companyShortName = $companyShortName;

        return $this;
    }

    /**
     * Used to specify a preference level for something that is or will be requested (e.g. a supplier of a service, a type of service, a form of payment, etc.).
     *
     * @return string
     */
    public function getPreferLevel(): ?string
    {
        return $this->preferLevel;
    }

    /**
     * Used to specify a preference level for something that is or will be requested (e.g. a supplier of a service, a type of service, a form of payment, etc.).
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
     * Refer to OTA Code List Travel Sector (TVS).,Specifies what type of carrier it applies to.
     *
     * @return string
     */
    public function getTravelSector(): ?string
    {
        return $this->travelSector;
    }

    /**
     * Refer to OTA Code List Travel Sector (TVS).,Specifies what type of carrier it applies to.
     *
     * @param string $travelSector
     *
     * @return self
     */
    public function setTravelSector(?string $travelSector): self
    {
        $this->travelSector = $travelSector;

        return $this;
    }

    /**
     * @return string
     */
    public function getType(): ?string
    {
        return $this->type;
    }

    /**
     * @param string $type
     *
     * @return self
     */
    public function setType(?string $type): self
    {
        $this->type = $type;

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
