<?php

namespace Ammonkc\SabreApi\Model\EnhancedAirTicket;

use Ammonkc\SabreApi\AbstractModel;

class TicketingItemPricingQualifiersTaxesTaxExemptItem extends AbstractModel
{
    /**
     * "Code" is used to specify a tax code to exempt during EMD issuance.
     *
     * @var string
     */
    protected $code;

    /**
     * "Code" is used to specify a tax code to exempt during EMD issuance.
     *
     * @return string
     */
    public function getCode(): ?string
    {
        return $this->code;
    }

    /**
     * "Code" is used to specify a tax code to exempt during EMD issuance.
     *
     * @param string $code
     *
     * @return self
     */
    public function setCode(?string $code): self
    {
        $this->code = $code;

        return $this;
    }
}
