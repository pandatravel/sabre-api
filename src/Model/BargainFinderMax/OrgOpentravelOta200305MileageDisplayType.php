<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Ammonkc\SabreApi\Model\BargainFinderMax;

use Ammonkc\SabreApi\AbstractModel;

class OrgOpentravelOta200305MileageDisplayType extends AbstractModel
{
    /**
     * Mileage display city,Mileage display type.
     *
     * @var string
     */
    protected $city;
    /**
     * Mileage surcharge percentage.
     *
     * @var float
     */
    protected $surcharge;
    /**
     * @var string
     */
    protected $type;

    /**
     * Mileage display city,Mileage display type.
     *
     * @return string|null
     */
    public function getCity(): ?string
    {
        return $this->city;
    }

    /**
     * Mileage display city,Mileage display type.
     *
     * @param string|null $city
     *
     * @return self
     */
    public function setCity(?string $city): self
    {
        $this->city = $city;

        return $this;
    }

    /**
     * Mileage surcharge percentage.
     *
     * @return float|null
     */
    public function getSurcharge(): ?float
    {
        return $this->surcharge;
    }

    /**
     * Mileage surcharge percentage.
     *
     * @param float|null $surcharge
     *
     * @return self
     */
    public function setSurcharge(?float $surcharge): self
    {
        $this->surcharge = $surcharge;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getType(): ?string
    {
        return $this->type;
    }

    /**
     * @param string|null $type
     *
     * @return self
     */
    public function setType(?string $type): self
    {
        $this->type = $type;

        return $this;
    }
}
