<?php

namespace Ammonkc\SabreApi\Model\EnhancedAirTicket;

use Ammonkc\SabreApi\AbstractModel;

class TicketingItemFOPQualifiersBasicFOP extends AbstractModel
{
    /**
     * "Reference" is used to refer a line number from PNR Form of Payment (FOP) field.

    This capability is only available once the agency has activated Sabre's new FOP functionality in the corresponding PCC (TJR setting: PNAPNR).

    For additional information please contact Your Sabre Account Team.

     *
     * @var int
     */
    protected $reference;
    /**
     * "Type" is used to specify the payment type.

    Acceptable values are "CA", "CK" or "CQ".

    If utilizing a credit card please omit Type, and populate the .../CC_Info object.

     *
     * @var string
     */
    protected $type;
    /**
     * "Virtual" is used to pass virtual form of payment information.
     *
     * @var string
     */
    protected $virtual;
    /**
     * @var TicketingItemFOPQualifiersBasicFOPCCInfo
     */
    protected $cCInfo;

    /**
     * "Reference" is used to refer a line number from PNR Form of Payment (FOP) field.

    This capability is only available once the agency has activated Sabre's new FOP functionality in the corresponding PCC (TJR setting: PNAPNR).

    For additional information please contact Your Sabre Account Team.

     *
     * @return int
     */
    public function getReference(): ?int
    {
        return $this->reference;
    }

    /**
     * "Reference" is used to refer a line number from PNR Form of Payment (FOP) field.

    This capability is only available once the agency has activated Sabre's new FOP functionality in the corresponding PCC (TJR setting: PNAPNR).

    For additional information please contact Your Sabre Account Team.

     *
     * @param int $reference
     *
     * @return self
     */
    public function setReference(?int $reference): self
    {
        $this->reference = $reference;

        return $this;
    }

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
     * "Virtual" is used to pass virtual form of payment information.
     *
     * @return string
     */
    public function getVirtual(): ?string
    {
        return $this->virtual;
    }

    /**
     * "Virtual" is used to pass virtual form of payment information.
     *
     * @param string $virtual
     *
     * @return self
     */
    public function setVirtual(?string $virtual): self
    {
        $this->virtual = $virtual;

        return $this;
    }

    /**
     * @return TicketingItemFOPQualifiersBasicFOPCCInfo
     */
    public function getCCInfo(): ?TicketingItemFOPQualifiersBasicFOPCCInfo
    {
        return $this->cCInfo;
    }

    /**
     * @param TicketingItemFOPQualifiersBasicFOPCCInfo $cCInfo
     *
     * @return self
     */
    public function setCCInfo(?TicketingItemFOPQualifiersBasicFOPCCInfo $cCInfo): self
    {
        $this->cCInfo = $cCInfo;

        return $this;
    }
}
