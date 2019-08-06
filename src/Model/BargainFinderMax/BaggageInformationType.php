<?php

namespace Ammonkc\SabreApi\Model\BargainFinderMax;

use Ammonkc\SabreApi\AbstractModel;

class BaggageInformationType extends AbstractModel
{
    /**
     * @var string
     */
    protected $airlineCode;
    /**
     * @var Allowance
     */
    protected $allowance;
    /**
     * @var Charge
     */
    protected $charge;
    /**
     * @var string
     */
    protected $provisionType;
    /**
     * @var Segment[]
     */
    protected $segments;

    /**
     * @return string
     */
    public function getAirlineCode(): string
    {
        return $this->airlineCode;
    }

    /**
     * @param string $airlineCode
     *
     * @return self
     */
    public function setAirlineCode(string $airlineCode): self
    {
        $this->airlineCode = $airlineCode;

        return $this;
    }

    /**
     * @return Allowance
     */
    public function getAllowance(): Allowance
    {
        return $this->allowance;
    }

    /**
     * @param Allowance $allowance
     *
     * @return self
     */
    public function setAllowance(Allowance $allowance): self
    {
        $this->allowance = $allowance;

        return $this;
    }

    /**
     * @return Charge
     */
    public function getCharge(): Charge
    {
        return $this->charge;
    }

    /**
     * @param Charge $charge
     *
     * @return self
     */
    public function setCharge(Charge $charge): self
    {
        $this->charge = $charge;

        return $this;
    }

    /**
     * @return string
     */
    public function getProvisionType(): string
    {
        return $this->provisionType;
    }

    /**
     * @param string $provisionType
     *
     * @return self
     */
    public function setProvisionType(string $provisionType): self
    {
        $this->provisionType = $provisionType;

        return $this;
    }

    /**
     * @return Segment[]
     */
    public function getSegments(): array
    {
        return $this->segments;
    }

    /**
     * @param Segment[] $segments
     *
     * @return self
     */
    public function setSegments(array $segments): self
    {
        $this->segments = $segments;

        return $this;
    }
}
