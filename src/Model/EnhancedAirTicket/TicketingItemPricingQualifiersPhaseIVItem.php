<?php

namespace Ammonkc\SabreApi\Model\EnhancedAirTicket;

use Ammonkc\SabreApi\AbstractModel;

class TicketingItemPricingQualifiersPhaseIVItem extends AbstractModel
{
    /**
     * Phase IV record Number.
     *
     * @var int
     */
    protected $number;
    /**
     * @var TicketingItemPricingQualifiersPhaseIVItemNameSelectItem[]
     */
    protected $nameSelect;

    /**
     * Phase IV record Number.
     *
     * @return int
     */
    public function getNumber(): ?int
    {
        return $this->number;
    }

    /**
     * Phase IV record Number.
     *
     * @param int $number
     *
     * @return self
     */
    public function setNumber(?int $number): self
    {
        $this->number = $number;

        return $this;
    }

    /**
     * @return TicketingItemPricingQualifiersPhaseIVItemNameSelectItem[]
     */
    public function getNameSelect(): ?array
    {
        return $this->nameSelect;
    }

    /**
     * @param TicketingItemPricingQualifiersPhaseIVItemNameSelectItem[] $nameSelect
     *
     * @return self
     */
    public function setNameSelect(?array $nameSelect): self
    {
        $this->nameSelect = $nameSelect;

        return $this;
    }
}
