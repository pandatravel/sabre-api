<?php

namespace Ammonkc\SabreApi\Model\BargainFinderMax;

use Ammonkc\SabreApi\AbstractModel;

class SoldOutLegType extends AbstractModel
{
    /**
     * Code representing the brand (two to ten characters).
     *
     * @var string
     */
    protected $brandCode;
    /**
     * Name of the brand.
     *
     * @var string
     */
    protected $brandDescription;
    /**
     * Brand program code that is returned from the branding service. This allows you to use this attribute returned in the shopping response in subsequent requests, for example, in a "GetMarketingText" request and correctly match brand programs.
     *
     * @var string
     */
    protected $programCode;
    /**
     * Identifier for a program that forms a valid match for the conditions specified in the request. The Program ID is system generated.
     *
     * @var string
     */
    protected $programId;
    /**
     * Description of the program. A program is a set of fare brands with a point of sale and origin and destination that is designed to be marketed with services desirable to customers. For example, the branded fare named "Thrifty" may have no special features or options for customization, and it is offered at the lowest price. A slightly higher priced option, such as the "Flexible Saver" fare, would have features like no penalty for cancellation. Finally, the "Power Flyer" fare would be offered at the highest price and may include a full set of features such as lounge access, limousine service, free baggage, and seat options.
     *
     * @var string
     */
    protected $programName;
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
     * @var SoldOutSchedule[]
     */
    protected $soldOutSchedules;
    /**
     * @var string
     */
    protected $status;

    /**
     * Code representing the brand (two to ten characters).
     *
     * @return string
     */
    public function getBrandCode(): string
    {
        return $this->brandCode;
    }

    /**
     * Code representing the brand (two to ten characters).
     *
     * @param string $brandCode
     *
     * @return self
     */
    public function setBrandCode(string $brandCode): self
    {
        $this->brandCode = $brandCode;

        return $this;
    }

    /**
     * Name of the brand.
     *
     * @return string
     */
    public function getBrandDescription(): string
    {
        return $this->brandDescription;
    }

    /**
     * Name of the brand.
     *
     * @param string $brandDescription
     *
     * @return self
     */
    public function setBrandDescription(string $brandDescription): self
    {
        $this->brandDescription = $brandDescription;

        return $this;
    }

    /**
     * Brand program code that is returned from the branding service. This allows you to use this attribute returned in the shopping response in subsequent requests, for example, in a "GetMarketingText" request and correctly match brand programs.
     *
     * @return string
     */
    public function getProgramCode(): string
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
    public function setProgramCode(string $programCode): self
    {
        $this->programCode = $programCode;

        return $this;
    }

    /**
     * Identifier for a program that forms a valid match for the conditions specified in the request. The Program ID is system generated.
     *
     * @return string
     */
    public function getProgramId(): string
    {
        return $this->programId;
    }

    /**
     * Identifier for a program that forms a valid match for the conditions specified in the request. The Program ID is system generated.
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
     * Description of the program. A program is a set of fare brands with a point of sale and origin and destination that is designed to be marketed with services desirable to customers. For example, the branded fare named "Thrifty" may have no special features or options for customization, and it is offered at the lowest price. A slightly higher priced option, such as the "Flexible Saver" fare, would have features like no penalty for cancellation. Finally, the "Power Flyer" fare would be offered at the highest price and may include a full set of features such as lounge access, limousine service, free baggage, and seat options.
     *
     * @return string
     */
    public function getProgramName(): string
    {
        return $this->programName;
    }

    /**
     * Description of the program. A program is a set of fare brands with a point of sale and origin and destination that is designed to be marketed with services desirable to customers. For example, the branded fare named "Thrifty" may have no special features or options for customization, and it is offered at the lowest price. A slightly higher priced option, such as the "Flexible Saver" fare, would have features like no penalty for cancellation. Finally, the "Power Flyer" fare would be offered at the highest price and may include a full set of features such as lounge access, limousine service, free baggage, and seat options.
     *
     * @param string $programName
     *
     * @return self
     */
    public function setProgramName(string $programName): self
    {
        $this->programName = $programName;

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

    /**
     * Program reference.
     *
     * @return int
     */
    public function getRef(): int
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
    public function setRef(int $ref): self
    {
        $this->ref = $ref;

        return $this;
    }

    /**
     * @return SoldOutSchedule[]
     */
    public function getSoldOutSchedules(): array
    {
        return $this->soldOutSchedules;
    }

    /**
     * @param SoldOutSchedule[] $soldOutSchedules
     *
     * @return self
     */
    public function setSoldOutSchedules(array $soldOutSchedules): self
    {
        $this->soldOutSchedules = $soldOutSchedules;

        return $this;
    }

    /**
     * @return string
     */
    public function getStatus(): string
    {
        return $this->status;
    }

    /**
     * @param string $status
     *
     * @return self
     */
    public function setStatus(string $status): self
    {
        $this->status = $status;

        return $this;
    }
}
