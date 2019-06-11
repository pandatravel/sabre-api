<?php

namespace Ammonkc\SabreApi\Model\EnhancedAirTicket;

use Ammonkc\SabreApi\AbstractModel;

class TicketingItemMiscQualifiersBaggageAllowance extends AbstractModel
{
    /**
     * "Number" is used to specify the quantity of checked bags if applicable.
     *
     * @var string
     */
    protected $number;
    /**
     * "Weight" is used to specify the weight in kilos of checked bags if applicable.
     *
     * @var string
     */
    protected $weight;

    /**
     * "Number" is used to specify the quantity of checked bags if applicable.
     *
     * @return string
     */
    public function getNumber(): ?string
    {
        return $this->number;
    }

    /**
     * "Number" is used to specify the quantity of checked bags if applicable.
     *
     * @param string $number
     *
     * @return self
     */
    public function setNumber(?string $number): self
    {
        $this->number = $number;

        return $this;
    }

    /**
     * "Weight" is used to specify the weight in kilos of checked bags if applicable.
     *
     * @return string
     */
    public function getWeight(): ?string
    {
        return $this->weight;
    }

    /**
     * "Weight" is used to specify the weight in kilos of checked bags if applicable.
     *
     * @param string $weight
     *
     * @return self
     */
    public function setWeight(?string $weight): self
    {
        $this->weight = $weight;

        return $this;
    }
}
