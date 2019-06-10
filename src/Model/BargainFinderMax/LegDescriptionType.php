<?php

namespace Ammonkc\SabreApi\Model\BargainFinderMax;

use Ammonkc\SabreApi\AbstractModel;

class LegDescriptionType extends AbstractModel
{
    /**
     * @var string
     */
    protected $arrivalLocation;
    /**
     * @var string
     */
    protected $departureDate;
    /**
     * @var string
     */
    protected $departureLocation;

    /**
     * @return string
     */
    public function getArrivalLocation(): ?string
    {
        return $this->arrivalLocation;
    }

    /**
     * @param string $arrivalLocation
     *
     * @return self
     */
    public function setArrivalLocation(?string $arrivalLocation): self
    {
        $this->arrivalLocation = $arrivalLocation;

        return $this;
    }

    /**
     * @return string
     */
    public function getDepartureDate(): ?string
    {
        return $this->departureDate;
    }

    /**
     * @param string $departureDate
     *
     * @return self
     */
    public function setDepartureDate(?string $departureDate): self
    {
        $this->departureDate = $departureDate;

        return $this;
    }

    /**
     * @return string
     */
    public function getDepartureLocation(): ?string
    {
        return $this->departureLocation;
    }

    /**
     * @param string $departureLocation
     *
     * @return self
     */
    public function setDepartureLocation(?string $departureLocation): self
    {
        $this->departureLocation = $departureLocation;

        return $this;
    }
}
