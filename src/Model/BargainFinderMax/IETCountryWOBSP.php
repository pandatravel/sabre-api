<?php

namespace Ammonkc\SabreApi\Model\BargainFinderMax;

use Ammonkc\SabreApi\AbstractModel;

class IETCountryWOBSP extends AbstractModel
{
    /**
     * @var Country[]
     */
    protected $country;

    /**
     * @return Country[]
     */
    public function getCountry(): ?array
    {
        return $this->country;
    }

    /**
     * @param Country[] $country
     *
     * @return self
     */
    public function setCountry(?array $country): self
    {
        $this->country = $country;

        return $this;
    }
}
