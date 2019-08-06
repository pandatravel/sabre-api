<?php

namespace Ammonkc\SabreApi\Model\BargainFinderMax;

use Ammonkc\SabreApi\AbstractModel;

class TicketType extends AbstractModel
{
    /**
     * @var LegIDType[]
     */
    protected $legs;
    /**
     * @var PricingInformationType
     */
    protected $pricingInformation;

    /**
     * @return LegIDType[]
     */
    public function getLegs(): array
    {
        return $this->legs;
    }

    /**
     * @param LegIDType[] $legs
     *
     * @return self
     */
    public function setLegs(array $legs): self
    {
        $this->legs = $legs;

        return $this;
    }

    /**
     * @return PricingInformationType
     */
    public function getPricingInformation(): PricingInformationType
    {
        return $this->pricingInformation;
    }

    /**
     * @param PricingInformationType $pricingInformation
     *
     * @return self
     */
    public function setPricingInformation(PricingInformationType $pricingInformation): self
    {
        $this->pricingInformation = $pricingInformation;

        return $this;
    }
}
