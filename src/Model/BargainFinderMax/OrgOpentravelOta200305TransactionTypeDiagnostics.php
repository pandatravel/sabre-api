<?php

namespace Ammonkc\SabreApi\Model\BargainFinderMax;

use Ammonkc\SabreApi\AbstractModel;

class OrgOpentravelOta200305TransactionTypeDiagnostics extends AbstractModel
{
    /**
     * @var OrgOpentravelOta200305TransactionTypeDiagnosticsDiagnostic[]
     */
    protected $diagnostic;

    /**
     * @return OrgOpentravelOta200305TransactionTypeDiagnosticsDiagnostic[]
     */
    public function getDiagnostic(): ?array
    {
        return $this->diagnostic;
    }

    /**
     * @param OrgOpentravelOta200305TransactionTypeDiagnosticsDiagnostic[] $diagnostic
     *
     * @return self
     */
    public function setDiagnostic(?array $diagnostic): self
    {
        $this->diagnostic = $diagnostic;

        return $this;
    }
}
