<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

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
     * @return LegIDType[]|null
     */
    public function getLegs(): ?array
    {
        return $this->legs;
    }

    /**
     * @param LegIDType[]|null $legs
     *
     * @return self
     */
    public function setLegs(?array $legs): self
    {
        $this->legs = $legs;

        return $this;
    }

    /**
     * @return PricingInformationType|null
     */
    public function getPricingInformation(): ?PricingInformationType
    {
        return $this->pricingInformation;
    }

    /**
     * @param PricingInformationType|null $pricingInformation
     *
     * @return self
     */
    public function setPricingInformation(?PricingInformationType $pricingInformation): self
    {
        $this->pricingInformation = $pricingInformation;

        return $this;
    }
}
