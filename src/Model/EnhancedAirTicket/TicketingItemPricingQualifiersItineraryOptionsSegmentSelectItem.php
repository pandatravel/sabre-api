<?php

namespace Ammonkc\SabreApi\Model\EnhancedAirTicket;

use Ammonkc\SabreApi\AbstractModel;

class TicketingItemPricingQualifiersItineraryOptionsSegmentSelectItem extends AbstractModel
{
    /**
     * Segment selection EndNumber. Used to select a range of segments.
     *
     * @var int
     */
    protected $endNumber;
    /**
     * Segment selection Number. Used to select a specific segment.
     *
     * @var int
     */
    protected $number;
    /**
     * "RPH" is used to match up with ".../SpecificFare/RPH" or .../Brand.
     *
     * @var string
     */
    protected $rPH;

    /**
     * Segment selection EndNumber. Used to select a range of segments.
     *
     * @return int
     */
    public function getEndNumber(): ?int
    {
        return $this->endNumber;
    }

    /**
     * Segment selection EndNumber. Used to select a range of segments.
     *
     * @param int $endNumber
     *
     * @return self
     */
    public function setEndNumber(?int $endNumber): self
    {
        $this->endNumber = $endNumber;

        return $this;
    }

    /**
     * Segment selection Number. Used to select a specific segment.
     *
     * @return int
     */
    public function getNumber(): ?int
    {
        return $this->number;
    }

    /**
     * Segment selection Number. Used to select a specific segment.
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
     * "RPH" is used to match up with ".../SpecificFare/RPH" or .../Brand.
     *
     * @return string
     */
    public function getRPH(): ?string
    {
        return $this->rPH;
    }

    /**
     * "RPH" is used to match up with ".../SpecificFare/RPH" or .../Brand.
     *
     * @param string $rPH
     *
     * @return self
     */
    public function setRPH(?string $rPH): self
    {
        $this->rPH = $rPH;

        return $this;
    }
}
