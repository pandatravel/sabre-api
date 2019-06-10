<?php

namespace Ammonkc\SabreApi\Model\BargainFinderMax;

use Ammonkc\SabreApi\AbstractModel;

class OrgOpentravelOta200305OTAAirLowFareSearchRQOriginDestinationInformation extends AbstractModel
{
    /**
     * This date should be of the form YYYY-MM-DDTHH:MM:SS.
     *
     * @var string
     */
    protected $arrivalDateTime;
    /**
     * Allowed only for Advanced Calendar API.
     *
     * @var OrgOpentravelOta200305TravelDateTimeTypeArrivalDates
     */
    protected $arrivalDates;
    /**
     * This should be of the form HHMMHHMM.
     *
     * @var string
     */
    protected $arrivalWindow;
    /**
     * Travel Connection Location - for example, air uses the IATA 3 letter code.
     *
     * @var OrgOpentravelOta200305ConnectionType
     */
    protected $connectionLocations;
    /**
     * This date should be of the form YYYY-MM-DDTHH:MM:SS.
     *
     * @var string
     */
    protected $departureDateTime;
    /**
     * @var OrgOpentravelOta200305TravelDateTimeTypeDepartureDates
     */
    protected $departureDates;
    /**
     * This should be of the form HHMMHHMM.
     *
     * @var string
     */
    protected $departureWindow;
    /**
     * Travel Destination Location - for example, air uses the IATA 3 letter code.
     *
     * @var OrgOpentravelOta200305OriginDestinationInformationTypeDestinationLocation
     */
    protected $destinationLocation;
    /**
     * OriginDestination node with flight and fare information fixed. Used in context shopping.
     *
     * @var bool
     */
    protected $fixed;
    /**
     * Request for full diversity of flights for the particular OriginDestination node. Used in Exchange Context Shopping.
     *
     * @var bool
     */
    protected $fullDiversity;
    /**
     * Travel Origin Location - for example, air uses the IATA 3 letter code.
     *
     * @var OrgOpentravelOta200305OriginDestinationInformationTypeOriginLocation
     */
    protected $originLocation;
    /**
     * @var string
     */
    protected $rPH;
    /**
     * Additional elements and attributes to be included if required, per Trading Partner Agreement (TPA).
     *
     * @var OrgOpentravelOta200305OTAAirLowFareSearchRQOriginDestinationInformationTPAExtensions
     */
    protected $tPAExtensions;

    /**
     * This date should be of the form YYYY-MM-DDTHH:MM:SS.
     *
     * @return string
     */
    public function getArrivalDateTime(): ?string
    {
        return $this->arrivalDateTime;
    }

    /**
     * This date should be of the form YYYY-MM-DDTHH:MM:SS.
     *
     * @param string $arrivalDateTime
     *
     * @return self
     */
    public function setArrivalDateTime(?string $arrivalDateTime): self
    {
        $this->arrivalDateTime = $arrivalDateTime;

        return $this;
    }

    /**
     * Allowed only for Advanced Calendar API.
     *
     * @return OrgOpentravelOta200305TravelDateTimeTypeArrivalDates
     */
    public function getArrivalDates(): ?OrgOpentravelOta200305TravelDateTimeTypeArrivalDates
    {
        return $this->arrivalDates;
    }

    /**
     * Allowed only for Advanced Calendar API.
     *
     * @param OrgOpentravelOta200305TravelDateTimeTypeArrivalDates $arrivalDates
     *
     * @return self
     */
    public function setArrivalDates(?OrgOpentravelOta200305TravelDateTimeTypeArrivalDates $arrivalDates): self
    {
        $this->arrivalDates = $arrivalDates;

        return $this;
    }

    /**
     * This should be of the form HHMMHHMM.
     *
     * @return string
     */
    public function getArrivalWindow(): ?string
    {
        return $this->arrivalWindow;
    }

    /**
     * This should be of the form HHMMHHMM.
     *
     * @param string $arrivalWindow
     *
     * @return self
     */
    public function setArrivalWindow(?string $arrivalWindow): self
    {
        $this->arrivalWindow = $arrivalWindow;

        return $this;
    }

    /**
     * Travel Connection Location - for example, air uses the IATA 3 letter code.
     *
     * @return OrgOpentravelOta200305ConnectionType
     */
    public function getConnectionLocations(): ?OrgOpentravelOta200305ConnectionType
    {
        return $this->connectionLocations;
    }

    /**
     * Travel Connection Location - for example, air uses the IATA 3 letter code.
     *
     * @param OrgOpentravelOta200305ConnectionType $connectionLocations
     *
     * @return self
     */
    public function setConnectionLocations(?OrgOpentravelOta200305ConnectionType $connectionLocations): self
    {
        $this->connectionLocations = $connectionLocations;

        return $this;
    }

    /**
     * This date should be of the form YYYY-MM-DDTHH:MM:SS.
     *
     * @return string
     */
    public function getDepartureDateTime(): ?string
    {
        return $this->departureDateTime;
    }

    /**
     * This date should be of the form YYYY-MM-DDTHH:MM:SS.
     *
     * @param string $departureDateTime
     *
     * @return self
     */
    public function setDepartureDateTime(?string $departureDateTime): self
    {
        $this->departureDateTime = $departureDateTime;

        return $this;
    }

    /**
     * @return OrgOpentravelOta200305TravelDateTimeTypeDepartureDates
     */
    public function getDepartureDates(): ?OrgOpentravelOta200305TravelDateTimeTypeDepartureDates
    {
        return $this->departureDates;
    }

    /**
     * @param OrgOpentravelOta200305TravelDateTimeTypeDepartureDates $departureDates
     *
     * @return self
     */
    public function setDepartureDates(?OrgOpentravelOta200305TravelDateTimeTypeDepartureDates $departureDates): self
    {
        $this->departureDates = $departureDates;

        return $this;
    }

    /**
     * This should be of the form HHMMHHMM.
     *
     * @return string
     */
    public function getDepartureWindow(): ?string
    {
        return $this->departureWindow;
    }

    /**
     * This should be of the form HHMMHHMM.
     *
     * @param string $departureWindow
     *
     * @return self
     */
    public function setDepartureWindow(?string $departureWindow): self
    {
        $this->departureWindow = $departureWindow;

        return $this;
    }

    /**
     * Travel Destination Location - for example, air uses the IATA 3 letter code.
     *
     * @return OrgOpentravelOta200305OriginDestinationInformationTypeDestinationLocation
     */
    public function getDestinationLocation(): ?OrgOpentravelOta200305OriginDestinationInformationTypeDestinationLocation
    {
        return $this->destinationLocation;
    }

    /**
     * Travel Destination Location - for example, air uses the IATA 3 letter code.
     *
     * @param OrgOpentravelOta200305OriginDestinationInformationTypeDestinationLocation $destinationLocation
     *
     * @return self
     */
    public function setDestinationLocation(?OrgOpentravelOta200305OriginDestinationInformationTypeDestinationLocation $destinationLocation): self
    {
        $this->destinationLocation = $destinationLocation;

        return $this;
    }

    /**
     * OriginDestination node with flight and fare information fixed. Used in context shopping.
     *
     * @return bool
     */
    public function getFixed(): ?bool
    {
        return $this->fixed;
    }

    /**
     * OriginDestination node with flight and fare information fixed. Used in context shopping.
     *
     * @param bool $fixed
     *
     * @return self
     */
    public function setFixed(?bool $fixed): self
    {
        $this->fixed = $fixed;

        return $this;
    }

    /**
     * Request for full diversity of flights for the particular OriginDestination node. Used in Exchange Context Shopping.
     *
     * @return bool
     */
    public function getFullDiversity(): ?bool
    {
        return $this->fullDiversity;
    }

    /**
     * Request for full diversity of flights for the particular OriginDestination node. Used in Exchange Context Shopping.
     *
     * @param bool $fullDiversity
     *
     * @return self
     */
    public function setFullDiversity(?bool $fullDiversity): self
    {
        $this->fullDiversity = $fullDiversity;

        return $this;
    }

    /**
     * Travel Origin Location - for example, air uses the IATA 3 letter code.
     *
     * @return OrgOpentravelOta200305OriginDestinationInformationTypeOriginLocation
     */
    public function getOriginLocation(): ?OrgOpentravelOta200305OriginDestinationInformationTypeOriginLocation
    {
        return $this->originLocation;
    }

    /**
     * Travel Origin Location - for example, air uses the IATA 3 letter code.
     *
     * @param OrgOpentravelOta200305OriginDestinationInformationTypeOriginLocation $originLocation
     *
     * @return self
     */
    public function setOriginLocation(?OrgOpentravelOta200305OriginDestinationInformationTypeOriginLocation $originLocation): self
    {
        $this->originLocation = $originLocation;

        return $this;
    }

    /**
     * @return string
     */
    public function getRPH(): ?string
    {
        return $this->rPH;
    }

    /**
     * @param string $rPH
     *
     * @return self
     */
    public function setRPH(?string $rPH): self
    {
        $this->rPH = $rPH;

        return $this;
    }

    /**
     * Additional elements and attributes to be included if required, per Trading Partner Agreement (TPA).
     *
     * @return OrgOpentravelOta200305OTAAirLowFareSearchRQOriginDestinationInformationTPAExtensions
     */
    public function getTPAExtensions(): ?OrgOpentravelOta200305OTAAirLowFareSearchRQOriginDestinationInformationTPAExtensions
    {
        return $this->tPAExtensions;
    }

    /**
     * Additional elements and attributes to be included if required, per Trading Partner Agreement (TPA).
     *
     * @param OrgOpentravelOta200305OTAAirLowFareSearchRQOriginDestinationInformationTPAExtensions $tPAExtensions
     *
     * @return self
     */
    public function setTPAExtensions(?OrgOpentravelOta200305OTAAirLowFareSearchRQOriginDestinationInformationTPAExtensions $tPAExtensions): self
    {
        $this->tPAExtensions = $tPAExtensions;

        return $this;
    }
}
