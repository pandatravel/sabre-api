<?php

namespace Ammonkc\SabreApi\Model\BargainFinderMax;

use Ammonkc\SabreApi\AbstractModel;

class AncillaryFeeType extends AbstractModel
{
    /**
     * @var string
     */
    protected $code;
    /**
     * @var AncillaryFeeDetailsType[]
     */
    protected $details;
    /**
     * @var string
     */
    protected $message;
    /**
     * @var string
     */
    protected $name;

    /**
     * @return string
     */
    public function getCode(): ?string
    {
        return $this->code;
    }

    /**
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
     * @return AncillaryFeeDetailsType[]
     */
    public function getDetails(): ?array
    {
        return $this->details;
    }

    /**
     * @param AncillaryFeeDetailsType[] $details
     *
     * @return self
     */
    public function setDetails(?array $details): self
    {
        $this->details = $details;

        return $this;
    }

    /**
     * @return string
     */
    public function getMessage(): ?string
    {
        return $this->message;
    }

    /**
     * @param string $message
     *
     * @return self
     */
    public function setMessage(?string $message): self
    {
        $this->message = $message;

        return $this;
    }

    /**
     * @return string
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * @param string $name
     *
     * @return self
     */
    public function setName(?string $name): self
    {
        $this->name = $name;

        return $this;
    }
}
