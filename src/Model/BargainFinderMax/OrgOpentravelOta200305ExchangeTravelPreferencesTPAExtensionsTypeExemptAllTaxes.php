<?php

namespace Ammonkc\SabreApi\Model\BargainFinderMax;

use Ammonkc\SabreApi\AbstractModel;

class OrgOpentravelOta200305ExchangeTravelPreferencesTPAExtensionsTypeExemptAllTaxes extends AbstractModel
{
    /**
     * @var bool
     */
    protected $value;

    /**
     * @return bool
     */
    public function getValue(): ?bool
    {
        return $this->value;
    }

    /**
     * @param bool $value
     *
     * @return self
     */
    public function setValue(?bool $value): self
    {
        $this->value = $value;

        return $this;
    }
}
