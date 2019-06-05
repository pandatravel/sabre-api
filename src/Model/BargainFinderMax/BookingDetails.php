<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Ammonkc\SabreApi\Model\BargainFinderMax;

use Ammonkc\SabreApi\AbstractModel;

class BookingDetails extends AbstractModel
{
    /**
     * Code for the class of service to be used in a search at the itinerary level.
     *
     * @var string
     */
    protected $classOfService;
    /**
     * @var string
     */
    protected $mealCodeList;

    /**
     * Code for the class of service to be used in a search at the itinerary level.
     *
     * @return string
     */
    public function getClassOfService(): ?string
    {
        return $this->classOfService;
    }

    /**
     * Code for the class of service to be used in a search at the itinerary level.
     *
     * @param string $classOfService
     *
     * @return self
     */
    public function setClassOfService(?string $classOfService): self
    {
        $this->classOfService = $classOfService;

        return $this;
    }

    /**
     * @return string
     */
    public function getMealCodeList(): ?string
    {
        return $this->mealCodeList;
    }

    /**
     * @param string $mealCodeList
     *
     * @return self
     */
    public function setMealCodeList(?string $mealCodeList): self
    {
        $this->mealCodeList = $mealCodeList;

        return $this;
    }
}