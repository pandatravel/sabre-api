<?php

namespace Ammonkc\SabreApi\Model\BargainFinderMax;

use Ammonkc\SabreApi\AbstractModel;

class OrgOpentravelOta200305PriceRequestInformationTypeTPAExtensionsETicketableOverride extends AbstractModel
{
    /**
     * ETicketable override.
     *
     * @var bool
     */
    protected $value;

    /**
     * ETicketable override.
     *
     * @return bool
     */
    public function getValue(): ?bool
    {
        return $this->value;
    }

    /**
     * ETicketable override.
     *
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
