<?php

namespace Ammonkc\SabreApi\Model\BargainFinderMax;

use Ammonkc\SabreApi\AbstractModel;

class OrgOpentravelOta200305PriceRequestInformationTypeTPAExtensionsPriorityMarketingCarrier extends AbstractModel
{
    /**
     * @var OrgOpentravelOta200305PriceRequestInformationTypeTPAExtensionsPriorityMarketingCarrierCarrier[]
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
     * @return OrgOpentravelOta200305PriceRequestInformationTypeTPAExtensionsPriorityMarketingCarrierCarrier[]
     */
    public function getCarrier(): ?array
    {
        return $this->carrier;
    }

    /**
     * @param OrgOpentravelOta200305PriceRequestInformationTypeTPAExtensionsPriorityMarketingCarrierCarrier[] $carrier
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
