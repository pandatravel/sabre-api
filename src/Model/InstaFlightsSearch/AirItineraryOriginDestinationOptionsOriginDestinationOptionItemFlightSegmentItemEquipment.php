<?php

namespace Ammonkc\SabreApi\Model\InstaFlightsSearch;

use Ammonkc\SabreApi\AbstractModel;

class AirItineraryOriginDestinationOptionsOriginDestinationOptionItemFlightSegmentItemEquipment extends AbstractModel
{
    /**
     * IATA aircraft type code for the flight segment, consisting of 3 alphanumeric characters.
     *
     * @var string
     */
    protected $airEquipType;

    /**
     * IATA aircraft type code for the flight segment, consisting of 3 alphanumeric characters.
     *
     * @return string
     */
    public function getAirEquipType(): ?string
    {
        return $this->airEquipType;
    }

    /**
     * IATA aircraft type code for the flight segment, consisting of 3 alphanumeric characters.
     *
     * @param string $airEquipType
     *
     * @return self
     */
    public function setAirEquipType(?string $airEquipType): self
    {
        $this->airEquipType = $airEquipType;

        return $this;
    }
}
