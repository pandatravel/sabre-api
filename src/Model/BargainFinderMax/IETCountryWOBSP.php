<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Ammonkc\SabreApi\Model\BargainFinderMax;

use Ammonkc\SabreApi\AbstractModel;

class IETCountryWOBSP extends AbstractModel
{
    /**
     * @var Country[]
     */
    protected $country;

    /**
     * @return Country[]|null
     */
    public function getCountry(): ?array
    {
        return $this->country;
    }

    /**
     * @param Country[]|null $country
     *
     * @return self
     */
    public function setCountry(?array $country): self
    {
        $this->country = $country;

        return $this;
    }
}
