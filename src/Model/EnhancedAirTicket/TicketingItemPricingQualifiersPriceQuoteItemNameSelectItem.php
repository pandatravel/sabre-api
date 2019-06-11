<?php

namespace Ammonkc\SabreApi\Model\EnhancedAirTicket;

use Ammonkc\SabreApi\AbstractModel;

class TicketingItemPricingQualifiersPriceQuoteItemNameSelectItem extends AbstractModel
{
    /**
     * "EndNameNumber" is used to ticket a range of particular name fields and associate it to a particular price quote record.
     *
     * @var float
     */
    protected $endNameNumber;
    /**
     * "NameNumber" is used to ticket a specific name field and associate it to a particular price quote record.
     *
     * @var float
     */
    protected $nameNumber;

    /**
     * "EndNameNumber" is used to ticket a range of particular name fields and associate it to a particular price quote record.
     *
     * @return float
     */
    public function getEndNameNumber(): ?float
    {
        return $this->endNameNumber;
    }

    /**
     * "EndNameNumber" is used to ticket a range of particular name fields and associate it to a particular price quote record.
     *
     * @param float $endNameNumber
     *
     * @return self
     */
    public function setEndNameNumber(?float $endNameNumber): self
    {
        $this->endNameNumber = $endNameNumber;

        return $this;
    }

    /**
     * "NameNumber" is used to ticket a specific name field and associate it to a particular price quote record.
     *
     * @return float
     */
    public function getNameNumber(): ?float
    {
        return $this->nameNumber;
    }

    /**
     * "NameNumber" is used to ticket a specific name field and associate it to a particular price quote record.
     *
     * @param float $nameNumber
     *
     * @return self
     */
    public function setNameNumber(?float $nameNumber): self
    {
        $this->nameNumber = $nameNumber;

        return $this;
    }
}
