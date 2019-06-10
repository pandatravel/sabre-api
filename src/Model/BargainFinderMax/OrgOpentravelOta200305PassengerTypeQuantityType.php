<?php

namespace Ammonkc\SabreApi\Model\BargainFinderMax;

use Ammonkc\SabreApi\AbstractModel;

class OrgOpentravelOta200305PassengerTypeQuantityType extends AbstractModel
{
    /**
     * @var int
     */
    protected $age;
    /**
     * @var bool
     */
    protected $changeable;
    /**
     * @var string
     */
    protected $code;
    /**
     * @var string
     */
    protected $codeContext;
    /**
     * @var int
     */
    protected $iD;
    /**
     * @var int
     */
    protected $index;
    /**
     * @var int
     */
    protected $quantity;
    /**
     * @var int
     */
    protected $requestedPassengerIndex;
    /**
     * @var OrgOpentravelOta200305PassengerTypeQuantityTypeTPAExtensions
     */
    protected $tPAExtensions;
    /**
     * @var string
     */
    protected $uRI;

    /**
     * @return int
     */
    public function getAge(): ?int
    {
        return $this->age;
    }

    /**
     * @param int $age
     *
     * @return self
     */
    public function setAge(?int $age): self
    {
        $this->age = $age;

        return $this;
    }

    /**
     * @return bool
     */
    public function getChangeable(): ?bool
    {
        return $this->changeable;
    }

    /**
     * @param bool $changeable
     *
     * @return self
     */
    public function setChangeable(?bool $changeable): self
    {
        $this->changeable = $changeable;

        return $this;
    }

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
     * @return string
     */
    public function getCodeContext(): ?string
    {
        return $this->codeContext;
    }

    /**
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
     * @return int
     */
    public function getID(): ?int
    {
        return $this->iD;
    }

    /**
     * @param int $iD
     *
     * @return self
     */
    public function setID(?int $iD): self
    {
        $this->iD = $iD;

        return $this;
    }

    /**
     * @return int
     */
    public function getIndex(): ?int
    {
        return $this->index;
    }

    /**
     * @param int $index
     *
     * @return self
     */
    public function setIndex(?int $index): self
    {
        $this->index = $index;

        return $this;
    }

    /**
     * @return int
     */
    public function getQuantity(): ?int
    {
        return $this->quantity;
    }

    /**
     * @param int $quantity
     *
     * @return self
     */
    public function setQuantity(?int $quantity): self
    {
        $this->quantity = $quantity;

        return $this;
    }

    /**
     * @return int
     */
    public function getRequestedPassengerIndex(): ?int
    {
        return $this->requestedPassengerIndex;
    }

    /**
     * @param int $requestedPassengerIndex
     *
     * @return self
     */
    public function setRequestedPassengerIndex(?int $requestedPassengerIndex): self
    {
        $this->requestedPassengerIndex = $requestedPassengerIndex;

        return $this;
    }

    /**
     * @return OrgOpentravelOta200305PassengerTypeQuantityTypeTPAExtensions
     */
    public function getTPAExtensions(): ?OrgOpentravelOta200305PassengerTypeQuantityTypeTPAExtensions
    {
        return $this->tPAExtensions;
    }

    /**
     * @param OrgOpentravelOta200305PassengerTypeQuantityTypeTPAExtensions $tPAExtensions
     *
     * @return self
     */
    public function setTPAExtensions(?OrgOpentravelOta200305PassengerTypeQuantityTypeTPAExtensions $tPAExtensions): self
    {
        $this->tPAExtensions = $tPAExtensions;

        return $this;
    }

    /**
     * @return string
     */
    public function getURI(): ?string
    {
        return $this->uRI;
    }

    /**
     * @param string $uRI
     *
     * @return self
     */
    public function setURI(?string $uRI): self
    {
        $this->uRI = $uRI;

        return $this;
    }
}
