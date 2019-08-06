<?php

namespace Ammonkc\SabreApi\Model\BargainFinderMax;

use Ammonkc\SabreApi\AbstractModel;

class OrgOpentravelOta200305TransactionTypeDiagnosticsDiagnostic extends AbstractModel
{
    /**
     * @var string
     */
    protected $code;
    /**
     * @var OrgOpentravelOta200305TransactionTypeDiagnosticsDiagnosticDiagnosticArgument[]
     */
    protected $diagnosticArgument;
    /**
     * This is a place holder for additional elements.
     *
     * @var string
     */
    protected $tPAExtensions;
    /**
     * @var string
     */
    protected $target;

    /**
     * @return string
     */
    public function getCode(): string
    {
        return $this->code;
    }

    /**
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
     * @return OrgOpentravelOta200305TransactionTypeDiagnosticsDiagnosticDiagnosticArgument[]
     */
    public function getDiagnosticArgument(): array
    {
        return $this->diagnosticArgument;
    }

    /**
     * @param OrgOpentravelOta200305TransactionTypeDiagnosticsDiagnosticDiagnosticArgument[] $diagnosticArgument
     *
     * @return self
     */
    public function setDiagnosticArgument(array $diagnosticArgument): self
    {
        $this->diagnosticArgument = $diagnosticArgument;

        return $this;
    }

    /**
     * This is a place holder for additional elements.
     *
     * @return string
     */
    public function getTPAExtensions(): string
    {
        return $this->tPAExtensions;
    }

    /**
     * This is a place holder for additional elements.
     *
     * @param string $tPAExtensions
     *
     * @return self
     */
    public function setTPAExtensions(string $tPAExtensions): self
    {
        $this->tPAExtensions = $tPAExtensions;

        return $this;
    }

    /**
     * @return string
     */
    public function getTarget(): string
    {
        return $this->target;
    }

    /**
     * @param string $target
     *
     * @return self
     */
    public function setTarget(string $target): self
    {
        $this->target = $target;

        return $this;
    }
}
