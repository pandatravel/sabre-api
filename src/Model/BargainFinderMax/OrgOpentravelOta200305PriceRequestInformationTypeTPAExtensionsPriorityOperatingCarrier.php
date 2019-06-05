<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Ammonkc\SabreApi\Model\BargainFinderMax;

class OrgOpentravelOta200305PriceRequestInformationTypeTPAExtensionsPriorityOperatingCarrier
{
    /**
     * @var OrgOpentravelOta200305PriceRequestInformationTypeTPAExtensionsPriorityOperatingCarrierCarrier[]
     */
    protected $carrier;
    /**
     * Which leg is most significant one? If inconclusive continue comparisons segment by segment starting from the beginning of itinerary.
     *
     * @var int
     */
    protected $leg;
    /**
     * @var int
     */
    protected $priority;

    /**
     * @return OrgOpentravelOta200305PriceRequestInformationTypeTPAExtensionsPriorityOperatingCarrierCarrier[]
     */
    public function getCarrier(): ?array
    {
        return $this->carrier;
    }

    /**
     * @param OrgOpentravelOta200305PriceRequestInformationTypeTPAExtensionsPriorityOperatingCarrierCarrier[] $carrier
     *
     * @return self
     */
    public function setCarrier(?array $carrier): self
    {
        $this->carrier = $carrier;

        return $this;
    }

    /**
     * Which leg is most significant one? If inconclusive continue comparisons segment by segment starting from the beginning of itinerary.
     *
     * @return int
     */
    public function getLeg(): ?int
    {
        return $this->leg;
    }

    /**
     * Which leg is most significant one? If inconclusive continue comparisons segment by segment starting from the beginning of itinerary.
     *
     * @param int $leg
     *
     * @return self
     */
    public function setLeg(?int $leg): self
    {
        $this->leg = $leg;

        return $this;
    }

    /**
     * @return int
     */
    public function getPriority(): ?int
    {
        return $this->priority;
    }

    /**
     * @param int $priority
     *
     * @return self
     */
    public function setPriority(?int $priority): self
    {
        $this->priority = $priority;

        return $this;
    }
}
