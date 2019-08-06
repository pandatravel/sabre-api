<?php

namespace Ammonkc\SabreApi\Model\BargainFinderMax;

use Ammonkc\SabreApi\AbstractModel;

class OrgOpentravelOta200305ValidatingCarrierType extends AbstractModel
{
    /**
     * Validating Carrier code.
     *
     * @var string
     */
    protected $code;
    /**
     * @var OrgOpentravelOta200305ValidatingCarrierTypePreference[]
     */
    protected $preference;

    /**
     * Validating Carrier code.
     *
     * @return string
     */
    public function getCode(): string
    {
        return $this->code;
    }

    /**
     * Validating Carrier code.
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
     * @return OrgOpentravelOta200305ValidatingCarrierTypePreference[]
     */
    public function getPreference(): array
    {
        return $this->preference;
    }

    /**
     * @param OrgOpentravelOta200305ValidatingCarrierTypePreference[] $preference
     *
     * @return self
     */
    public function setPreference(array $preference): self
    {
        $this->preference = $preference;

        return $this;
    }
}
