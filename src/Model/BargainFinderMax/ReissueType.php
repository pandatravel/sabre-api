<?php

namespace Ammonkc\SabreApi\Model\BargainFinderMax;

use Ammonkc\SabreApi\AbstractModel;

class ReissueType extends AbstractModel
{
    /**
     * @var ChangeFeeType[]
     */
    protected $changeFees;
    /**
     * @var bool
     */
    protected $electronicTicketNotAllowed;
    /**
     * @var bool
     */
    protected $electronicTicketRequired;
    /**
     * @var string
     */
    protected $formOfRefund;
    /**
     * @var string
     */
    protected $residual;
    /**
     * @var bool
     */
    protected $tag7Result;

    /**
     * @return ChangeFeeType[]
     */
    public function getChangeFees(): ?array
    {
        return $this->changeFees;
    }

    /**
     * @param ChangeFeeType[] $changeFees
     *
     * @return self
     */
    public function setChangeFees(?array $changeFees): self
    {
        $this->changeFees = $changeFees;

        return $this;
    }

    /**
     * @return bool
     */
    public function getElectronicTicketNotAllowed(): ?bool
    {
        return $this->electronicTicketNotAllowed;
    }

    /**
     * @param bool $electronicTicketNotAllowed
     *
     * @return self
     */
    public function setElectronicTicketNotAllowed(?bool $electronicTicketNotAllowed): self
    {
        $this->electronicTicketNotAllowed = $electronicTicketNotAllowed;

        return $this;
    }

    /**
     * @return bool
     */
    public function getElectronicTicketRequired(): ?bool
    {
        return $this->electronicTicketRequired;
    }

    /**
     * @param bool $electronicTicketRequired
     *
     * @return self
     */
    public function setElectronicTicketRequired(?bool $electronicTicketRequired): self
    {
        $this->electronicTicketRequired = $electronicTicketRequired;

        return $this;
    }

    /**
     * @return string
     */
    public function getFormOfRefund(): ?string
    {
        return $this->formOfRefund;
    }

    /**
     * @param string $formOfRefund
     *
     * @return self
     */
    public function setFormOfRefund(?string $formOfRefund): self
    {
        $this->formOfRefund = $formOfRefund;

        return $this;
    }

    /**
     * @return string
     */
    public function getResidual(): ?string
    {
        return $this->residual;
    }

    /**
     * @param string $residual
     *
     * @return self
     */
    public function setResidual(?string $residual): self
    {
        $this->residual = $residual;

        return $this;
    }

    /**
     * @return bool
     */
    public function getTag7Result(): ?bool
    {
        return $this->tag7Result;
    }

    /**
     * @param bool $tag7Result
     *
     * @return self
     */
    public function setTag7Result(?bool $tag7Result): self
    {
        $this->tag7Result = $tag7Result;

        return $this;
    }
}
