<?php

namespace Ammonkc\SabreApi\Model\BargainFinderMax;

use Ammonkc\SabreApi\AbstractModel;

class ValidatingCarrier extends AbstractModel
{
    /**
     * Validating Carrier Code.
     *
     * @var string
     */
    protected $code;
    /**
     * @var IETCountryWOBSP
     */
    protected $ietCountryWobsp;

    /**
     * Validating Carrier Code.
     *
     * @return string
     */
    public function getCode(): string
    {
        return $this->code;
    }

    /**
     * Validating Carrier Code.
     *
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
     * @return IETCountryWOBSP
     */
    public function getIetCountryWobsp(): IETCountryWOBSP
    {
        return $this->ietCountryWobsp;
    }

    /**
     * @param IETCountryWOBSP $ietCountryWobsp
     *
     * @return self
     */
    public function setIetCountryWobsp(IETCountryWOBSP $ietCountryWobsp): self
    {
        $this->ietCountryWobsp = $ietCountryWobsp;

        return $this;
    }
}
