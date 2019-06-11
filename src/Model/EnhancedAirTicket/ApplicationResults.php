<?php

namespace Ammonkc\SabreApi\Model\EnhancedAirTicket;

use Ammonkc\SabreApi\AbstractModel;

class ApplicationResults extends AbstractModel
{
    /**
     * @var ProblemInformation[]
     */
    protected $success;
    /**
     * @var ProblemInformation[]
     */
    protected $error;
    /**
     * @var ProblemInformation[]
     */
    protected $warning;
    /**
     * Transaction status.
     *
     * @var string
     */
    protected $status;

    /**
     * @return ProblemInformation[]
     */
    public function getSuccess(): ?array
    {
        return $this->success;
    }

    /**
     * @param ProblemInformation[] $success
     *
     * @return self
     */
    public function setSuccess(?array $success): self
    {
        $this->success = $success;

        return $this;
    }

    /**
     * @return ProblemInformation[]
     */
    public function getError(): ?array
    {
        return $this->error;
    }

    /**
     * @param ProblemInformation[] $error
     *
     * @return self
     */
    public function setError(?array $error): self
    {
        $this->error = $error;

        return $this;
    }

    /**
     * @return ProblemInformation[]
     */
    public function getWarning(): ?array
    {
        return $this->warning;
    }

    /**
     * @param ProblemInformation[] $warning
     *
     * @return self
     */
    public function setWarning(?array $warning): self
    {
        $this->warning = $warning;

        return $this;
    }

    /**
     * Transaction status.
     *
     * @return string
     */
    public function getStatus(): ?string
    {
        return $this->status;
    }

    /**
     * Transaction status.
     *
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
