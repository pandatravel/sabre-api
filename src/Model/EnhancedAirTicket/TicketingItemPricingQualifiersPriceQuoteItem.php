<?php

namespace Ammonkc\SabreApi\Model\EnhancedAirTicket;

use Ammonkc\SabreApi\AbstractModel;

class TicketingItemPricingQualifiersPriceQuoteItem extends AbstractModel
{
    /**
     * @var TicketingItemPricingQualifiersPriceQuoteItemNameSelectItem[]
     */
    protected $nameSelect;
    /**
     * @var TicketingItemPricingQualifiersPriceQuoteItemRecordItem[]
     */
    protected $record;

    /**
     * @return TicketingItemPricingQualifiersPriceQuoteItemNameSelectItem[]
     */
    public function getNameSelect(): ?array
    {
        return $this->nameSelect;
    }

    /**
     * @param TicketingItemPricingQualifiersPriceQuoteItemNameSelectItem[] $nameSelect
     *
     * @return self
     */
    public function setNameSelect(?array $nameSelect): self
    {
        $this->nameSelect = $nameSelect;

        return $this;
    }

    /**
     * @return TicketingItemPricingQualifiersPriceQuoteItemRecordItem[]
     */
    public function getRecord(): ?array
    {
        return $this->record;
    }

    /**
     * @param TicketingItemPricingQualifiersPriceQuoteItemRecordItem[] $record
     *
     * @return self
     */
    public function setRecord(?array $record): self
    {
        $this->record = $record;

        return $this;
    }
}
