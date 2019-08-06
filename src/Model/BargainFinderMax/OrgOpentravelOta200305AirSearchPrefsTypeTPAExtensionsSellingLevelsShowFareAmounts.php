<?php

namespace Ammonkc\SabreApi\Model\BargainFinderMax;

use Ammonkc\SabreApi\AbstractModel;

class OrgOpentravelOta200305AirSearchPrefsTypeTPAExtensionsSellingLevelsShowFareAmounts extends AbstractModel
{
    /**
     * Show selling level amounts and total adjusted amount in Fare Calc line.
     *
     * @var bool
     */
    protected $adjusted;
    /**
     * Show original selling fare level amounts and total adjusted amount in Fare Calc line.
     *
     * @var bool
     */
    protected $original;

    /**
     * Show selling level amounts and total adjusted amount in Fare Calc line.
     *
     * @return bool
     */
    public function getAdjusted(): bool
    {
        return $this->adjusted;
    }

    /**
     * Show selling level amounts and total adjusted amount in Fare Calc line.
     *
     * @param bool $adjusted
     *
     * @return self
     */
    public function setAdjusted(bool $adjusted): self
    {
        $this->adjusted = $adjusted;

        return $this;
    }

    /**
     * Show original selling fare level amounts and total adjusted amount in Fare Calc line.
     *
     * @return bool
     */
    public function getOriginal(): bool
    {
        return $this->original;
    }

    /**
     * Show original selling fare level amounts and total adjusted amount in Fare Calc line.
     *
     * @param bool $original
     *
     * @return self
     */
    public function setOriginal(bool $original): self
    {
        $this->original = $original;

        return $this;
    }
}
