<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Ammonkc\SabreApi\Model\CreatePassengerNameRecord;

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
     * @return ProblemInformation[]|null
     */
    public function getSuccess(): ?array
    {
        return $this->success;
    }

    /**
     * @param ProblemInformation[]|null $success
     *
     * @return self
     */
    public function setSuccess(?array $success): self
    {
        $this->success = $success;

        return $this;
    }

    /**
     * @return ProblemInformation[]|null
     */
    public function getError(): ?array
    {
        return $this->error;
    }

    /**
     * @param ProblemInformation[]|null $error
     *
     * @return self
     */
    public function setError(?array $error): self
    {
        $this->error = $error;

        return $this;
    }

    /**
     * @return ProblemInformation[]|null
     */
    public function getWarning(): ?array
    {
        return $this->warning;
    }

    /**
     * @param ProblemInformation[]|null $warning
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
     * @return string|null
     */
    public function getStatus(): ?string
    {
        return $this->status;
    }

    /**
     * Transaction status.
     *
     * @param string|null $status
     *
     * @return self
     */
    public function setStatus(?string $status): self
    {
        $this->status = $status;

        return $this;
    }
}
