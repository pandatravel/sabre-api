<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Ammonkc\SabreApi\Model\CreatePassengerNameRecord;

use Ammonkc\SabreApi\AbstractModel;

class CreatePassengerNameRecordResponseCreatePassengerNameRecordRSAirPriceItemPriceQuotePricedItineraryAirItineraryPricingInfoItemFareCalculationBreakdownItemDeparture extends AbstractModel
{
    /**
     * The city code.
     *
     * @var string
     */
    protected $cityCode;
    /**
     * The airport code.
     *
     * @var string
     */
    protected $airportCode;
    /**
     * The type of side trip.
     *
     * @var string
     */
    protected $sideTripIndicator;
    /**
     * The airline code.
     *
     * @var string
     */
    protected $airlineCode;
    /**
     * The generic indicator associated with the particular flight segment.
     *
     * @var string
     */
    protected $genericInd;
    /**
     * The global indicator associated with the particular flight segment.
     *
     * @var string
     */
    protected $globalInd;
    /**
     * The arrival city code.
     *
     * @var string
     */
    protected $arrivalCityCode;
    /**
     * The arrival airport code.
     *
     * @var string
     */
    protected $arrivalAirportCode;
    /**
     * The information on fare construction city for an infant fare.
     *
     * @var string
     */
    protected $infantFareConstructionCity;

    /**
     * The city code.
     *
     * @return string|null
     */
    public function getCityCode(): ?string
    {
        return $this->cityCode;
    }

    /**
     * The city code.
     *
     * @param string|null $cityCode
     *
     * @return self
     */
    public function setCityCode(?string $cityCode): self
    {
        $this->cityCode = $cityCode;

        return $this;
    }

    /**
     * The airport code.
     *
     * @return string|null
     */
    public function getAirportCode(): ?string
    {
        return $this->airportCode;
    }

    /**
     * The airport code.
     *
     * @param string|null $airportCode
     *
     * @return self
     */
    public function setAirportCode(?string $airportCode): self
    {
        $this->airportCode = $airportCode;

        return $this;
    }

    /**
     * The type of side trip.
     *
     * @return string|null
     */
    public function getSideTripIndicator(): ?string
    {
        return $this->sideTripIndicator;
    }

    /**
     * The type of side trip.
     *
     * @param string|null $sideTripIndicator
     *
     * @return self
     */
    public function setSideTripIndicator(?string $sideTripIndicator): self
    {
        $this->sideTripIndicator = $sideTripIndicator;

        return $this;
    }

    /**
     * The airline code.
     *
     * @return string|null
     */
    public function getAirlineCode(): ?string
    {
        return $this->airlineCode;
    }

    /**
     * The airline code.
     *
     * @param string|null $airlineCode
     *
     * @return self
     */
    public function setAirlineCode(?string $airlineCode): self
    {
        $this->airlineCode = $airlineCode;

        return $this;
    }

    /**
     * The generic indicator associated with the particular flight segment.
     *
     * @return string|null
     */
    public function getGenericInd(): ?string
    {
        return $this->genericInd;
    }

    /**
     * The generic indicator associated with the particular flight segment.
     *
     * @param string|null $genericInd
     *
     * @return self
     */
    public function setGenericInd(?string $genericInd): self
    {
        $this->genericInd = $genericInd;

        return $this;
    }

    /**
     * The global indicator associated with the particular flight segment.
     *
     * @return string|null
     */
    public function getGlobalInd(): ?string
    {
        return $this->globalInd;
    }

    /**
     * The global indicator associated with the particular flight segment.
     *
     * @param string|null $globalInd
     *
     * @return self
     */
    public function setGlobalInd(?string $globalInd): self
    {
        $this->globalInd = $globalInd;

        return $this;
    }

    /**
     * The arrival city code.
     *
     * @return string|null
     */
    public function getArrivalCityCode(): ?string
    {
        return $this->arrivalCityCode;
    }

    /**
     * The arrival city code.
     *
     * @param string|null $arrivalCityCode
     *
     * @return self
     */
    public function setArrivalCityCode(?string $arrivalCityCode): self
    {
        $this->arrivalCityCode = $arrivalCityCode;

        return $this;
    }

    /**
     * The arrival airport code.
     *
     * @return string|null
     */
    public function getArrivalAirportCode(): ?string
    {
        return $this->arrivalAirportCode;
    }

    /**
     * The arrival airport code.
     *
     * @param string|null $arrivalAirportCode
     *
     * @return self
     */
    public function setArrivalAirportCode(?string $arrivalAirportCode): self
    {
        $this->arrivalAirportCode = $arrivalAirportCode;

        return $this;
    }

    /**
     * The information on fare construction city for an infant fare.
     *
     * @return string|null
     */
    public function getInfantFareConstructionCity(): ?string
    {
        return $this->infantFareConstructionCity;
    }

    /**
     * The information on fare construction city for an infant fare.
     *
     * @param string|null $infantFareConstructionCity
     *
     * @return self
     */
    public function setInfantFareConstructionCity(?string $infantFareConstructionCity): self
    {
        $this->infantFareConstructionCity = $infantFareConstructionCity;

        return $this;
    }
}
