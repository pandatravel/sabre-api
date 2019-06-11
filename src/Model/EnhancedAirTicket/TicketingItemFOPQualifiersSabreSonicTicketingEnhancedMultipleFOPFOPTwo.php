<?php

namespace Ammonkc\SabreApi\Model\EnhancedAirTicket;

use Ammonkc\SabreApi\AbstractModel;

class TicketingItemFOPQualifiersSabreSonicTicketingEnhancedMultipleFOPFOPTwo extends AbstractModel
{
    /**
     * "Type" is used to specify the payment type.

    Acceptable values are "CA", "CK" or "CQ".

    If utilizing a credit card please omit Type, and populate the .../CC_Info object.

     *
     * @var string
     */
    protected $type;
    /**
     * @var TicketingItemFOPQualifiersSabreSonicTicketingEnhancedMultipleFOPFOPTwoCCInfo
     */
    protected $cCInfo;

    /**
     * "Type" is used to specify the payment type.

    Acceptable values are "CA", "CK" or "CQ".

    If utilizing a credit card please omit Type, and populate the .../CC_Info object.

     *
     * @return string
     */
    public function getType(): ?string
    {
        return $this->type;
    }

    /**
     * "Type" is used to specify the payment type.

    Acceptable values are "CA", "CK" or "CQ".

    If utilizing a credit card please omit Type, and populate the .../CC_Info object.

     *
     * @param string $type
     *
     * @return self
     */
    public function setType(?string $type): self
    {
        $this->type = $type;

        return $this;
    }

    /**
     * @return TicketingItemFOPQualifiersSabreSonicTicketingEnhancedMultipleFOPFOPTwoCCInfo
     */
    public function getCCInfo(): ?TicketingItemFOPQualifiersSabreSonicTicketingEnhancedMultipleFOPFOPTwoCCInfo
    {
        return $this->cCInfo;
    }

    /**
     * @param TicketingItemFOPQualifiersSabreSonicTicketingEnhancedMultipleFOPFOPTwoCCInfo $cCInfo
     *
     * @return self
     */
    public function setCCInfo(?TicketingItemFOPQualifiersSabreSonicTicketingEnhancedMultipleFOPFOPTwoCCInfo $cCInfo): self
    {
        $this->cCInfo = $cCInfo;

        return $this;
    }
}
