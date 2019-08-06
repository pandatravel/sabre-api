<?php

namespace Ammonkc\SabreApi\Model\BargainFinderMax;

use Ammonkc\SabreApi\AbstractModel;

class OrgOpentravelOta200305PriceRequestInformationTypeTPAExtensionsBrandedFareIndicatorsReturnCheapestUnbrandedFare extends AbstractModel
{
    /**
     * Indicator to turn on or off return of cheapest unbranded fare referred as "catch all" fare for the branded carriers from the branded fares service.
     *
     * @var bool
     */
    protected $ind;

    /**
     * Indicator to turn on or off return of cheapest unbranded fare referred as "catch all" fare for the branded carriers from the branded fares service.
     *
     * @return bool
     */
    public function getInd(): bool
    {
        return $this->ind;
    }

    /**
     * Indicator to turn on or off return of cheapest unbranded fare referred as "catch all" fare for the branded carriers from the branded fares service.
     *
     * @param bool $ind
     *
     * @return self
     */
    public function setInd(bool $ind): self
    {
        $this->ind = $ind;

        return $this;
    }
}
