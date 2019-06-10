<?php

namespace Ammonkc\SabreApi\Model\InstaFlightsSearch;

use Ammonkc\SabreApi\AbstractModel;

class AirItineraryPricingInfoPTCFareBreakdownsPTCFareBreakdownEndorsements extends AbstractModel
{
    /**
     * Indicator for whether a fare is refundable.
     *
     * @var bool
     */
    protected $nonRefundableIndicator;

    /**
     * Indicator for whether a fare is refundable.
     *
     * @return bool
     */
    public function getNonRefundableIndicator(): ?bool
    {
        return $this->nonRefundableIndicator;
    }

    /**
     * Indicator for whether a fare is refundable.
     *
     * @param bool $nonRefundableIndicator
     *
     * @return self
     */
    public function setNonRefundableIndicator(?bool $nonRefundableIndicator): self
    {
        $this->nonRefundableIndicator = $nonRefundableIndicator;

        return $this;
    }
}
