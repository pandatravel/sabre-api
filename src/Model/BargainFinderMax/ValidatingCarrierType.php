<?php

namespace Ammonkc\SabreApi\Model\BargainFinderMax;

use Ammonkc\SabreApi\AbstractModel;

class ValidatingCarrierType extends AbstractModel
{
    /**
     * @var ValidatingCarrier[]
     */
    protected $alternates;
    /**
     * @var string
     */
    protected $country;
    /**
     * @var ValidatingCarrier
     */
    protected $default;
    /**
     * @var int
     */
    protected $id;
    /**
     * @var bool
     */
    protected $newVcxProcess;
    /**
     * @var ValidatingCarrier[]
     */
    protected $otherTicketings;
    /**
     * @var string
     */
    protected $settlementMethod;

    /**
     * @return ValidatingCarrier[]
     */
    public function getAlternates(): ?array
    {
        return $this->alternates;
    }

    /**
     * @param ValidatingCarrier[] $alternates
     *
     * @return self
     */
    public function setAlternates(?array $alternates): self
    {
        $this->alternates = $alternates;

        return $this;
    }

    /**
     * @return string
     */
    public function getCountry(): ?string
    {
        return $this->country;
    }

    /**
     * @param string $country
     *
     * @return self
     */
    public function setCountry(?string $country): self
    {
        $this->country = $country;

        return $this;
    }

    /**
     * @return ValidatingCarrier
     */
    public function getDefault(): ?ValidatingCarrier
    {
        return $this->default;
    }

    /**
     * @param ValidatingCarrier $default
     *
     * @return self
     */
    public function setDefault(?ValidatingCarrier $default): self
    {
        $this->default = $default;

        return $this;
    }

    /**
     * @return int
     */
    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @param int $id
     *
     * @return self
     */
    public function setId(?int $id): self
    {
        $this->id = $id;

        return $this;
    }

    /**
     * @return bool
     */
    public function getNewVcxProcess(): ?bool
    {
        return $this->newVcxProcess;
    }

    /**
     * @param bool $newVcxProcess
     *
     * @return self
     */
    public function setNewVcxProcess(?bool $newVcxProcess): self
    {
        $this->newVcxProcess = $newVcxProcess;

        return $this;
    }

    /**
     * @return ValidatingCarrier[]
     */
    public function getOtherTicketings(): ?array
    {
        return $this->otherTicketings;
    }

    /**
     * @param ValidatingCarrier[] $otherTicketings
     *
     * @return self
     */
    public function setOtherTicketings(?array $otherTicketings): self
    {
        $this->otherTicketings = $otherTicketings;

        return $this;
    }

    /**
     * @return string
     */
    public function getSettlementMethod(): ?string
    {
        return $this->settlementMethod;
    }

    /**
     * @param string $settlementMethod
     *
     * @return self
     */
    public function setSettlementMethod(?string $settlementMethod): self
    {
        $this->settlementMethod = $settlementMethod;

        return $this;
    }
}
