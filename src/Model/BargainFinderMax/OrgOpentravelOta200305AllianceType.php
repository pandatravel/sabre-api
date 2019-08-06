<?php

namespace Ammonkc\SabreApi\Model\BargainFinderMax;

use Ammonkc\SabreApi\AbstractModel;

class OrgOpentravelOta200305AllianceType extends AbstractModel
{
    /**
     * Identifies an alliance by the alliance code.
     *
     * @var string
     */
    protected $code;

    /**
     * Identifies an alliance by the alliance code.
     *
     * @return string
     */
    public function getCode(): string
    {
        return $this->code;
    }

    /**
     * Identifies an alliance by the alliance code.
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
}
