<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

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
     * @return string|null
     */
    public function getArrivalLocation(): ?string
    {
        return $this->arrivalLocation;
    }

    /**
     * @param string|null $arrivalLocation
     *
     * @return self
     */
    public function setArrivalLocation(?string $arrivalLocation): self
    {
        $this->arrivalLocation = $arrivalLocation;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getDepartureDate(): ?string
    {
        return $this->departureDate;
    }

    /**
     * @param string|null $departureDate
     *
     * @return self
     */
    public function setDepartureDate(?string $departureDate): self
    {
        $this->departureDate = $departureDate;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getDepartureLocation(): ?string
    {
        return $this->departureLocation;
    }

    /**
     * @param string|null $departureLocation
     *
     * @return self
     */
    public function setDepartureLocation(?string $departureLocation): self
    {
        $this->departureLocation = $departureLocation;

        return $this;
    }
}
