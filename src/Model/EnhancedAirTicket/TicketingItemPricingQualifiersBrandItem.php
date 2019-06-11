<?php

namespace Ammonkc\SabreApi\Model\EnhancedAirTicket;

use Ammonkc\SabreApi\AbstractModel;

class TicketingItemPricingQualifiersBrandItem extends AbstractModel
{
    /**
     * text content of the field.
     *
     * @var string
     */
    protected $content;
    /**
     * "RPH" is used to match up with ".../ItineraryOptions/Segment".
     *
     * @var int
     */
    protected $rPH;

    /**
     * text content of the field.
     *
     * @return string
     */
    public function getContent(): ?string
    {
        return $this->content;
    }

    /**
     * text content of the field.
     *
     * @param string $content
     *
     * @return self
     */
    public function setContent(?string $content): self
    {
        $this->content = $content;

        return $this;
    }

    /**
     * "RPH" is used to match up with ".../ItineraryOptions/Segment".
     *
     * @return int
     */
    public function getRPH(): ?int
    {
        return $this->rPH;
    }

    /**
     * "RPH" is used to match up with ".../ItineraryOptions/Segment".
     *
     * @param int $rPH
     *
     * @return self
     */
    public function setRPH(?int $rPH): self
    {
        $this->rPH = $rPH;

        return $this;
    }
}
