<?php

namespace Ammonkc\SabreApi\Model\BargainFinderMax;

use Ammonkc\SabreApi\AbstractModel;

class OrgOpentravelOta200305PriceRequestInformationTypeTPAExtensionsPriorityLegTime extends AbstractModel
{
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
     * Which leg is most significant one? If inconclusive continue comparisons segment by segment starting from the beginning of itinerary.
     *
     * @return int
     */
    public function getLeg(): int
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
    public function setLeg(int $leg): self
    {
        $this->leg = $leg;

        return $this;
    }

    /**
     * @return int
     */
    public function getPriority(): int
    {
        return $this->priority;
    }

    /**
     * @param int $priority
     *
     * @return self
     */
    public function setPriority(int $priority): self
    {
        $this->priority = $priority;

        return $this;
    }
}
