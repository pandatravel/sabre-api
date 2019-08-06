<?php

namespace Ammonkc\SabreApi\Model\BargainFinderMax;

use Ammonkc\SabreApi\AbstractModel;

class OrgOpentravelOta200305AirSearchPrefsTypeTPAExtensionsBudget extends AbstractModel
{
    /**
     * Maximum price to include in response.
     *
     * @var string
     */
    protected $maximumPrice;
    /**
     * Minimum price to include in response.
     *
     * @var string
     */
    protected $minimumPrice;
    /**
     * Relative price difference threshold to be respected while choosing alternative options.
     *
     * @var string
     */
    protected $relativePriceThreshold;

    /**
     * Maximum price to include in response.
     *
     * @return string
     */
    public function getMaximumPrice(): string
    {
        return $this->maximumPrice;
    }

    /**
     * Maximum price to include in response.
     *
     * @param string $maximumPrice
     *
     * @return self
     */
    public function setMaximumPrice(string $maximumPrice): self
    {
        $this->maximumPrice = $maximumPrice;

        return $this;
    }

    /**
     * Minimum price to include in response.
     *
     * @return string
     */
    public function getMinimumPrice(): string
    {
        return $this->minimumPrice;
    }

    /**
     * Minimum price to include in response.
     *
     * @param string $minimumPrice
     *
     * @return self
     */
    public function setMinimumPrice(string $minimumPrice): self
    {
        $this->minimumPrice = $minimumPrice;

        return $this;
    }

    /**
     * Relative price difference threshold to be respected while choosing alternative options.
     *
     * @return string
     */
    public function getRelativePriceThreshold(): string
    {
        return $this->relativePriceThreshold;
    }

    /**
     * Relative price difference threshold to be respected while choosing alternative options.
     *
     * @param string $relativePriceThreshold
     *
     * @return self
     */
    public function setRelativePriceThreshold(string $relativePriceThreshold): self
    {
        $this->relativePriceThreshold = $relativePriceThreshold;

        return $this;
    }
}
