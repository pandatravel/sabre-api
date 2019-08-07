<?php

namespace Ammonkc\SabreApi\Model\BargainFinderMax;

use Ammonkc\SabreApi\AbstractModel;

class OrgOpentravelOta200305DiversityControlTypeDimensions extends AbstractModel
{
    /**
     * @var OrgOpentravelOta200305DiversityControlTypeDimensionsCarrier
     */
    protected $carrier;
    /**
     * @var OrgOpentravelOta200305DiversityControlTypeDimensionsInboundOutboundPairing
     */
    protected $inboundOutboundPairing;
    /**
     * @var OrgOpentravelOta200305DiversityControlTypeDimensionsOperatingDuplicate
     */
    protected $operatingDuplicate;
    /**
     * @var float
     */
    protected $priceWeight;
    /**
     * @var OrgOpentravelOta200305DiversityControlTypeDimensionsStopsNumber
     */
    protected $stopsNumber;
    /**
     * @var OrgOpentravelOta200305DiversityControlTypeDimensionsTimeOfDay
     */
    protected $timeOfDay;
    /**
     * @var OrgOpentravelOta200305DiversityControlTypeDimensionsTravelTime
     */
    protected $travelTime;

    /**
     * @return OrgOpentravelOta200305DiversityControlTypeDimensionsCarrier
     */
    public function getCarrier(): ?OrgOpentravelOta200305DiversityControlTypeDimensionsCarrier
    {
        return $this->carrier;
    }

    /**
     * @param OrgOpentravelOta200305DiversityControlTypeDimensionsCarrier $carrier
     *
     * @return self
     */
    public function setCarrier(?OrgOpentravelOta200305DiversityControlTypeDimensionsCarrier $carrier): self
    {
        $this->carrier = $carrier;

        return $this;
    }

    /**
     * @return OrgOpentravelOta200305DiversityControlTypeDimensionsInboundOutboundPairing
     */
    public function getInboundOutboundPairing(): ?OrgOpentravelOta200305DiversityControlTypeDimensionsInboundOutboundPairing
    {
        return $this->inboundOutboundPairing;
    }

    /**
     * @param OrgOpentravelOta200305DiversityControlTypeDimensionsInboundOutboundPairing $inboundOutboundPairing
     *
     * @return self
     */
    public function setInboundOutboundPairing(?OrgOpentravelOta200305DiversityControlTypeDimensionsInboundOutboundPairing $inboundOutboundPairing): self
    {
        $this->inboundOutboundPairing = $inboundOutboundPairing;

        return $this;
    }

    /**
     * @return OrgOpentravelOta200305DiversityControlTypeDimensionsOperatingDuplicate
     */
    public function getOperatingDuplicate(): ?OrgOpentravelOta200305DiversityControlTypeDimensionsOperatingDuplicate
    {
        return $this->operatingDuplicate;
    }

    /**
     * @param OrgOpentravelOta200305DiversityControlTypeDimensionsOperatingDuplicate $operatingDuplicate
     *
     * @return self
     */
    public function setOperatingDuplicate(?OrgOpentravelOta200305DiversityControlTypeDimensionsOperatingDuplicate $operatingDuplicate): self
    {
        $this->operatingDuplicate = $operatingDuplicate;

        return $this;
    }

    /**
     * @return float
     */
    public function getPriceWeight(): ?float
    {
        return $this->priceWeight;
    }

    /**
     * @param float $priceWeight
     *
     * @return self
     */
    public function setPriceWeight(?float $priceWeight): self
    {
        $this->priceWeight = $priceWeight;

        return $this;
    }

    /**
     * @return OrgOpentravelOta200305DiversityControlTypeDimensionsStopsNumber
     */
    public function getStopsNumber(): ?OrgOpentravelOta200305DiversityControlTypeDimensionsStopsNumber
    {
        return $this->stopsNumber;
    }

    /**
     * @param OrgOpentravelOta200305DiversityControlTypeDimensionsStopsNumber $stopsNumber
     *
     * @return self
     */
    public function setStopsNumber(?OrgOpentravelOta200305DiversityControlTypeDimensionsStopsNumber $stopsNumber): self
    {
        $this->stopsNumber = $stopsNumber;

        return $this;
    }

    /**
     * @return OrgOpentravelOta200305DiversityControlTypeDimensionsTimeOfDay
     */
    public function getTimeOfDay(): ?OrgOpentravelOta200305DiversityControlTypeDimensionsTimeOfDay
    {
        return $this->timeOfDay;
    }

    /**
     * @param OrgOpentravelOta200305DiversityControlTypeDimensionsTimeOfDay $timeOfDay
     *
     * @return self
     */
    public function setTimeOfDay(?OrgOpentravelOta200305DiversityControlTypeDimensionsTimeOfDay $timeOfDay): self
    {
        $this->timeOfDay = $timeOfDay;

        return $this;
    }

    /**
     * @return OrgOpentravelOta200305DiversityControlTypeDimensionsTravelTime
     */
    public function getTravelTime(): ?OrgOpentravelOta200305DiversityControlTypeDimensionsTravelTime
    {
        return $this->travelTime;
    }

    /**
     * @param OrgOpentravelOta200305DiversityControlTypeDimensionsTravelTime $travelTime
     *
     * @return self
     */
    public function setTravelTime(?OrgOpentravelOta200305DiversityControlTypeDimensionsTravelTime $travelTime): self
    {
        $this->travelTime = $travelTime;

        return $this;
    }
}
