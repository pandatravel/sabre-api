<?php

namespace Ammonkc\SabreApi\Model\EnhancedAirTicket;

use Ammonkc\SabreApi\AbstractModel;

class TicketingItemPricingQualifiersNameSelectItem extends AbstractModel
{
    /**
     * NameSelect EndNumber. Used to select a range of name numbers.
     *
     * @var string
     */
    protected $endNameNumber;
    /**
     * NameSelect NameNumber. Used to select a specific name number.
     *
     * @var string
     */
    protected $nameNumber;

    /**
     * NameSelect EndNumber. Used to select a range of name numbers.
     *
     * @return string
     */
    public function getEndNameNumber(): ?string
    {
        return $this->endNameNumber;
    }

    /**
     * NameSelect EndNumber. Used to select a range of name numbers.
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
     * NameSelect NameNumber. Used to select a specific name number.
     *
     * @return string
     */
    public function getNameNumber(): ?string
    {
        return $this->nameNumber;
    }

    /**
     * NameSelect NameNumber. Used to select a specific name number.
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
