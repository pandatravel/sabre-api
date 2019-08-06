<?php

namespace Ammonkc\SabreApi\Model\BargainFinderMax;

use Ammonkc\SabreApi\AbstractModel;

class OrgOpentravelOta200305PriceRequestInformationTypeTPAExtensionsPriority extends AbstractModel
{
    /**
     * Prefer itineraries with smaller amount of time waiting in the airports during connections.
     *
     * @var OrgOpentravelOta200305PriceRequestInformationTypeTPAExtensionsPriorityConnectionTime
     */
    protected $connectionTime;
    /**
     * Prefer itineraries departing earlier during the day.
     *
     * @var OrgOpentravelOta200305PriceRequestInformationTypeTPAExtensionsPriorityDepartureTime
     */
    protected $departureTime;
    /**
     * Prefer itineraries will less connections.
     *
     * @var OrgOpentravelOta200305PriceRequestInformationTypeTPAExtensionsPriorityDirectFlights
     */
    protected $directFlights;
    /**
     * Prefer itineraries with shorter travel times.
     *
     * @var OrgOpentravelOta200305PriceRequestInformationTypeTPAExtensionsPriorityElapsedTime
     */
    protected $elapsedTime;
    /**
     * Prefer itineraries departing closer to requested departure time, consecutively for all legs.
     *
     * @var OrgOpentravelOta200305PriceRequestInformationTypeTPAExtensionsPriorityLegTime
     */
    protected $legTime;
    /**
     * Prefer itineraries with marketing carriers in order speciied in Carrier subtags, comparing segment-wise.
     *
     * @var OrgOpentravelOta200305PriceRequestInformationTypeTPAExtensionsPriorityMarketingCarrier
     */
    protected $marketingCarrier;
    /**
     * Prefer itineraries with operating carriers in order speciied in Carrier subtags, comparing segment-wise.
     *
     * @var OrgOpentravelOta200305PriceRequestInformationTypeTPAExtensionsPriorityOperatingCarrier
     */
    protected $operatingCarrier;
    /**
     * Prefer cheaper itineraries.
     *
     * @var OrgOpentravelOta200305PriceRequestInformationTypeTPAExtensionsPriorityPrice
     */
    protected $price;
    /**
     * Prefer itineraries departing closer to requested departure time.
     *
     * @var OrgOpentravelOta200305PriceRequestInformationTypeTPAExtensionsPriorityTime
     */
    protected $time;
    /**
     * Promote certain marketing carriers over all the others in returning results. (configured in rules).
     *
     * @var OrgOpentravelOta200305PriceRequestInformationTypeTPAExtensionsPriorityVendor
     */
    protected $vendor;

    /**
     * Prefer itineraries with smaller amount of time waiting in the airports during connections.
     *
     * @return OrgOpentravelOta200305PriceRequestInformationTypeTPAExtensionsPriorityConnectionTime
     */
    public function getConnectionTime(): OrgOpentravelOta200305PriceRequestInformationTypeTPAExtensionsPriorityConnectionTime
    {
        return $this->connectionTime;
    }

    /**
     * Prefer itineraries with smaller amount of time waiting in the airports during connections.
     *
     * @param OrgOpentravelOta200305PriceRequestInformationTypeTPAExtensionsPriorityConnectionTime $connectionTime
     *
     * @return self
     */
    public function setConnectionTime(OrgOpentravelOta200305PriceRequestInformationTypeTPAExtensionsPriorityConnectionTime $connectionTime): self
    {
        $this->connectionTime = $connectionTime;

        return $this;
    }

    /**
     * Prefer itineraries departing earlier during the day.
     *
     * @return OrgOpentravelOta200305PriceRequestInformationTypeTPAExtensionsPriorityDepartureTime
     */
    public function getDepartureTime(): OrgOpentravelOta200305PriceRequestInformationTypeTPAExtensionsPriorityDepartureTime
    {
        return $this->departureTime;
    }

    /**
     * Prefer itineraries departing earlier during the day.
     *
     * @param OrgOpentravelOta200305PriceRequestInformationTypeTPAExtensionsPriorityDepartureTime $departureTime
     *
     * @return self
     */
    public function setDepartureTime(OrgOpentravelOta200305PriceRequestInformationTypeTPAExtensionsPriorityDepartureTime $departureTime): self
    {
        $this->departureTime = $departureTime;

        return $this;
    }

    /**
     * Prefer itineraries will less connections.
     *
     * @return OrgOpentravelOta200305PriceRequestInformationTypeTPAExtensionsPriorityDirectFlights
     */
    public function getDirectFlights(): OrgOpentravelOta200305PriceRequestInformationTypeTPAExtensionsPriorityDirectFlights
    {
        return $this->directFlights;
    }

    /**
     * Prefer itineraries will less connections.
     *
     * @param OrgOpentravelOta200305PriceRequestInformationTypeTPAExtensionsPriorityDirectFlights $directFlights
     *
     * @return self
     */
    public function setDirectFlights(OrgOpentravelOta200305PriceRequestInformationTypeTPAExtensionsPriorityDirectFlights $directFlights): self
    {
        $this->directFlights = $directFlights;

        return $this;
    }

    /**
     * Prefer itineraries with shorter travel times.
     *
     * @return OrgOpentravelOta200305PriceRequestInformationTypeTPAExtensionsPriorityElapsedTime
     */
    public function getElapsedTime(): OrgOpentravelOta200305PriceRequestInformationTypeTPAExtensionsPriorityElapsedTime
    {
        return $this->elapsedTime;
    }

    /**
     * Prefer itineraries with shorter travel times.
     *
     * @param OrgOpentravelOta200305PriceRequestInformationTypeTPAExtensionsPriorityElapsedTime $elapsedTime
     *
     * @return self
     */
    public function setElapsedTime(OrgOpentravelOta200305PriceRequestInformationTypeTPAExtensionsPriorityElapsedTime $elapsedTime): self
    {
        $this->elapsedTime = $elapsedTime;

        return $this;
    }

    /**
     * Prefer itineraries departing closer to requested departure time, consecutively for all legs.
     *
     * @return OrgOpentravelOta200305PriceRequestInformationTypeTPAExtensionsPriorityLegTime
     */
    public function getLegTime(): OrgOpentravelOta200305PriceRequestInformationTypeTPAExtensionsPriorityLegTime
    {
        return $this->legTime;
    }

    /**
     * Prefer itineraries departing closer to requested departure time, consecutively for all legs.
     *
     * @param OrgOpentravelOta200305PriceRequestInformationTypeTPAExtensionsPriorityLegTime $legTime
     *
     * @return self
     */
    public function setLegTime(OrgOpentravelOta200305PriceRequestInformationTypeTPAExtensionsPriorityLegTime $legTime): self
    {
        $this->legTime = $legTime;

        return $this;
    }

    /**
     * Prefer itineraries with marketing carriers in order speciied in Carrier subtags, comparing segment-wise.
     *
     * @return OrgOpentravelOta200305PriceRequestInformationTypeTPAExtensionsPriorityMarketingCarrier
     */
    public function getMarketingCarrier(): OrgOpentravelOta200305PriceRequestInformationTypeTPAExtensionsPriorityMarketingCarrier
    {
        return $this->marketingCarrier;
    }

    /**
     * Prefer itineraries with marketing carriers in order speciied in Carrier subtags, comparing segment-wise.
     *
     * @param OrgOpentravelOta200305PriceRequestInformationTypeTPAExtensionsPriorityMarketingCarrier $marketingCarrier
     *
     * @return self
     */
    public function setMarketingCarrier(OrgOpentravelOta200305PriceRequestInformationTypeTPAExtensionsPriorityMarketingCarrier $marketingCarrier): self
    {
        $this->marketingCarrier = $marketingCarrier;

        return $this;
    }

    /**
     * Prefer itineraries with operating carriers in order speciied in Carrier subtags, comparing segment-wise.
     *
     * @return OrgOpentravelOta200305PriceRequestInformationTypeTPAExtensionsPriorityOperatingCarrier
     */
    public function getOperatingCarrier(): OrgOpentravelOta200305PriceRequestInformationTypeTPAExtensionsPriorityOperatingCarrier
    {
        return $this->operatingCarrier;
    }

    /**
     * Prefer itineraries with operating carriers in order speciied in Carrier subtags, comparing segment-wise.
     *
     * @param OrgOpentravelOta200305PriceRequestInformationTypeTPAExtensionsPriorityOperatingCarrier $operatingCarrier
     *
     * @return self
     */
    public function setOperatingCarrier(OrgOpentravelOta200305PriceRequestInformationTypeTPAExtensionsPriorityOperatingCarrier $operatingCarrier): self
    {
        $this->operatingCarrier = $operatingCarrier;

        return $this;
    }

    /**
     * Prefer cheaper itineraries.
     *
     * @return OrgOpentravelOta200305PriceRequestInformationTypeTPAExtensionsPriorityPrice
     */
    public function getPrice(): OrgOpentravelOta200305PriceRequestInformationTypeTPAExtensionsPriorityPrice
    {
        return $this->price;
    }

    /**
     * Prefer cheaper itineraries.
     *
     * @param OrgOpentravelOta200305PriceRequestInformationTypeTPAExtensionsPriorityPrice $price
     *
     * @return self
     */
    public function setPrice(OrgOpentravelOta200305PriceRequestInformationTypeTPAExtensionsPriorityPrice $price): self
    {
        $this->price = $price;

        return $this;
    }

    /**
     * Prefer itineraries departing closer to requested departure time.
     *
     * @return OrgOpentravelOta200305PriceRequestInformationTypeTPAExtensionsPriorityTime
     */
    public function getTime(): OrgOpentravelOta200305PriceRequestInformationTypeTPAExtensionsPriorityTime
    {
        return $this->time;
    }

    /**
     * Prefer itineraries departing closer to requested departure time.
     *
     * @param OrgOpentravelOta200305PriceRequestInformationTypeTPAExtensionsPriorityTime $time
     *
     * @return self
     */
    public function setTime(OrgOpentravelOta200305PriceRequestInformationTypeTPAExtensionsPriorityTime $time): self
    {
        $this->time = $time;

        return $this;
    }

    /**
     * Promote certain marketing carriers over all the others in returning results. (configured in rules).
     *
     * @return OrgOpentravelOta200305PriceRequestInformationTypeTPAExtensionsPriorityVendor
     */
    public function getVendor(): OrgOpentravelOta200305PriceRequestInformationTypeTPAExtensionsPriorityVendor
    {
        return $this->vendor;
    }

    /**
     * Promote certain marketing carriers over all the others in returning results. (configured in rules).
     *
     * @param OrgOpentravelOta200305PriceRequestInformationTypeTPAExtensionsPriorityVendor $vendor
     *
     * @return self
     */
    public function setVendor(OrgOpentravelOta200305PriceRequestInformationTypeTPAExtensionsPriorityVendor $vendor): self
    {
        $this->vendor = $vendor;

        return $this;
    }
}
