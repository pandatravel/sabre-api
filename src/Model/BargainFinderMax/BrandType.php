<?php

namespace Ammonkc\SabreApi\Model\BargainFinderMax;

use Ammonkc\SabreApi\AbstractModel;

class BrandType extends AbstractModel
{
    /**
     * Name of the brand.
     *
     * @var string
     */
    protected $brandName;
    /**
     * Two-character code for the brand.
     *
     * @var string
     */
    protected $code;
    /**
     * rand program code that is returned from the branding service.
     *
     * @var string
     */
    protected $programCode;
    /**
     * escription of the program. A program is a set of fare brands with a point of sale and origin and destination that is designed to be marketed with services desirable to customers.
     *
     * @var string
     */
    protected $programDescription;
    /**
     * Program code assigned by the system.
     *
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
     * Name of the brand.
     *
     * @return string
     */
    public function getBrandName(): string
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
    public function setBrandName(string $brandName): self
    {
        $this->brandName = $brandName;

        return $this;
    }

    /**
     * Two-character code for the brand.
     *
     * @return string
     */
    public function getCode(): string
    {
        return $this->code;
    }

    /**
     * Two-character code for the brand.
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
     * rand program code that is returned from the branding service.
     *
     * @return string
     */
    public function getProgramCode(): string
    {
        return $this->programCode;
    }

    /**
     * rand program code that is returned from the branding service.
     *
     * @param string $programCode
     *
     * @return self
     */
    public function setProgramCode(string $programCode): self
    {
        $this->programCode = $programCode;

        return $this;
    }

    /**
     * escription of the program. A program is a set of fare brands with a point of sale and origin and destination that is designed to be marketed with services desirable to customers.
     *
     * @return string
     */
    public function getProgramDescription(): string
    {
        return $this->programDescription;
    }

    /**
     * escription of the program. A program is a set of fare brands with a point of sale and origin and destination that is designed to be marketed with services desirable to customers.
     *
     * @param string $programDescription
     *
     * @return self
     */
    public function setProgramDescription(string $programDescription): self
    {
        $this->programDescription = $programDescription;

        return $this;
    }

    /**
     * Program code assigned by the system.
     *
     * @return string
     */
    public function getProgramId(): string
    {
        return $this->programId;
    }

    /**
     * Program code assigned by the system.
     *
     * @param string $programId
     *
     * @return self
     */
    public function setProgramId(string $programId): self
    {
        $this->programId = $programId;

        return $this;
    }

    /**
     * Program code assigned by the system.
     *
     * @return string
     */
    public function getProgramSystemCode(): string
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
    public function setProgramSystemCode(string $programSystemCode): self
    {
        $this->programSystemCode = $programSystemCode;

        return $this;
    }
}
