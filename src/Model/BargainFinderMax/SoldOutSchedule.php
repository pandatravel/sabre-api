<?php

namespace Ammonkc\SabreApi\Model\BargainFinderMax;

use Ammonkc\SabreApi\AbstractModel;

class SoldOutSchedule extends AbstractModel
{
    /**
     * Name of the brand.
     *
     * @var string
     */
    protected $brandName;
    /**
     * Code of the brand.
     *
     * @var string
     */
    protected $code;
    /**
     * Brand program code that is returned from the branding service. This allows you to use this attribute returned in the shopping response in subsequent requests, for example, in a "GetMarketingText" request and correctly match brand programs.
     *
     * @var string
     */
    protected $programCode;
    /**
     * Brand program code that is returned from the branding service.
     *
     * @var string
     */
    protected $programDescription;
    /**
     * @var string
     */
    protected $programId;
    /**
     * Program code assigned by the system.
     *
     * @var string
     */
    protected $programSystemCode;
    /**
     * Program reference.
     *
     * @var int
     */
    protected $ref;
    /**
     * @var string
     */
    protected $status;

    /**
     * Name of the brand.
     *
     * @return string
     */
    public function getBrandName(): ?string
    {
        return $this->brandName;
    }

    /**
     * Name of the brand.
     *
     * @param string $brandName
     *
     * @return self
     */
    public function setBrandName(?string $brandName): self
    {
        $this->brandName = $brandName;

        return $this;
    }

    /**
     * Code of the brand.
     *
     * @return string
     */
    public function getCode(): ?string
    {
        return $this->code;
    }

    /**
     * Code of the brand.
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
     * Brand program code that is returned from the branding service. This allows you to use this attribute returned in the shopping response in subsequent requests, for example, in a "GetMarketingText" request and correctly match brand programs.
     *
     * @return string
     */
    public function getProgramCode(): ?string
    {
        return $this->programCode;
    }

    /**
     * Brand program code that is returned from the branding service. This allows you to use this attribute returned in the shopping response in subsequent requests, for example, in a "GetMarketingText" request and correctly match brand programs.
     *
     * @param string $programCode
     *
     * @return self
     */
    public function setProgramCode(?string $programCode): self
    {
        $this->programCode = $programCode;

        return $this;
    }

    /**
     * Brand program code that is returned from the branding service.
     *
     * @return string
     */
    public function getProgramDescription(): ?string
    {
        return $this->programDescription;
    }

    /**
     * Brand program code that is returned from the branding service.
     *
     * @param string $programDescription
     *
     * @return self
     */
    public function setProgramDescription(?string $programDescription): self
    {
        $this->programDescription = $programDescription;

        return $this;
    }

    /**
     * @return string
     */
    public function getProgramId(): ?string
    {
        return $this->programId;
    }

    /**
     * @param string $programId
     *
     * @return self
     */
    public function setProgramId(?string $programId): self
    {
        $this->programId = $programId;

        return $this;
    }

    /**
     * Program code assigned by the system.
     *
     * @return string
     */
    public function getProgramSystemCode(): ?string
    {
        return $this->programSystemCode;
    }

    /**
     * Program code assigned by the system.
     *
     * @param string $programSystemCode
     *
     * @return self
     */
    public function setProgramSystemCode(?string $programSystemCode): self
    {
        $this->programSystemCode = $programSystemCode;

        return $this;
    }

    /**
     * Program reference.
     *
     * @return int
     */
    public function getRef(): ?int
    {
        return $this->ref;
    }

    /**
     * Program reference.
     *
     * @param int $ref
     *
     * @return self
     */
    public function setRef(?int $ref): self
    {
        $this->ref = $ref;

        return $this;
    }

    /**
     * @return string
     */
    public function getStatus(): ?string
    {
        return $this->status;
    }

    /**
     * @param string $status
     *
     * @return self
     */
    public function setStatus(?string $status): self
    {
        $this->status = $status;

        return $this;
    }
}
