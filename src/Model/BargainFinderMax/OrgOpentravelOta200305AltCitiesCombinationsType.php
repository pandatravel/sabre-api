<?php

namespace Ammonkc\SabreApi\Model\BargainFinderMax;

use Ammonkc\SabreApi\AbstractModel;

class OrgOpentravelOta200305AltCitiesCombinationsType extends AbstractModel
{
    /**
     * Which destinations to process in live path (All or Main only).
     *
     * @var string
     */
    protected $destinations;
    /**
     * Which origins to process in live path (All or Main only).
     *
     * @var string
     */
    protected $origins;

    /**
     * Which destinations to process in live path (All or Main only).
     *
     * @return string
     */
    public function getDestinations(): string
    {
        return $this->destinations;
    }

    /**
     * Which destinations to process in live path (All or Main only).
     *
     * @param string $destinations
     *
     * @return self
     */
    public function setDestinations(string $destinations): self
    {
        $this->destinations = $destinations;

        return $this;
    }

    /**
     * Which origins to process in live path (All or Main only).
     *
     * @return string
     */
    public function getOrigins(): string
    {
        return $this->origins;
    }

    /**
     * Which origins to process in live path (All or Main only).
     *
     * @param string $origins
     *
     * @return self
     */
    public function setOrigins(string $origins): self
    {
        $this->origins = $origins;

        return $this;
    }
}
