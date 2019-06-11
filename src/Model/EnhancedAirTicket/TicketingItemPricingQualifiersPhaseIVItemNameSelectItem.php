<?php

namespace Ammonkc\SabreApi\Model\EnhancedAirTicket;

use Ammonkc\SabreApi\AbstractModel;

class TicketingItemPricingQualifiersPhaseIVItemNameSelectItem extends AbstractModel
{
    /**
     * "EndNameNumber" is used to ticket a range of particular name fields and associate it to a particular phase IV record.
     *
     * @var string
     */
    protected $endNameNumber;
    /**
     * "NameNumber" is used to ticket a specific name field and associate it to a particular phase IV record.
     *
     * @var string
     */
    protected $nameNumber;

    /**
     * "EndNameNumber" is used to ticket a range of particular name fields and associate it to a particular phase IV record.
     *
     * @return string
     */
    public function getEndNameNumber(): ?string
    {
        return $this->endNameNumber;
    }

    /**
     * "EndNameNumber" is used to ticket a range of particular name fields and associate it to a particular phase IV record.
     *
     * @param string $endNameNumber
     *
     * @return self
     */
    public function setEndNameNumber(?string $endNameNumber): self
    {
        $this->endNameNumber = $endNameNumber;

        return $this;
    }

    /**
     * "NameNumber" is used to ticket a specific name field and associate it to a particular phase IV record.
     *
     * @return string
     */
    public function getNameNumber(): ?string
    {
        return $this->nameNumber;
    }

    /**
     * "NameNumber" is used to ticket a specific name field and associate it to a particular phase IV record.
     *
     * @param string $nameNumber
     *
     * @return self
     */
    public function setNameNumber(?string $nameNumber): self
    {
        $this->nameNumber = $nameNumber;

        return $this;
    }
}
