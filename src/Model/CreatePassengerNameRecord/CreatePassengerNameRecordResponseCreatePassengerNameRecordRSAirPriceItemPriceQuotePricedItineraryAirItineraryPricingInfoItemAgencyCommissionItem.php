<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Ammonkc\SabreApi\Model\CreatePassengerNameRecord;

use Ammonkc\SabreApi\AbstractModel;

class CreatePassengerNameRecordResponseCreatePassengerNameRecordRSAirPriceItemPriceQuotePricedItineraryAirItineraryPricingInfoItemAgencyCommissionItem extends AbstractModel
{
    /**
     * Used to pass commission contract details.
     *
     * @var string
     */
    protected $commissionContract;
    /**
     * Used to pass total priced commission value.
     *
     * @var string
     */
    protected $totalPricedCommission;
    /**
     * Used to pass related validating carrier details.
     *
     * @var string
     */
    protected $validatingCarrier;

    /**
     * Used to pass commission contract details.
     *
     * @return string
     */
    public function getCommissionContract(): ?string
    {
        return $this->commissionContract;
    }

    /**
     * Used to pass commission contract details.
     *
     * @param string $commissionContract
     *
     * @return self
     */
    public function setCommissionContract(?string $commissionContract): self
    {
        $this->commissionContract = $commissionContract;

        return $this;
    }

    /**
     * Used to pass total priced commission value.
     *
     * @return string
     */
    public function getTotalPricedCommission(): ?string
    {
        return $this->totalPricedCommission;
    }

    /**
     * Used to pass total priced commission value.
     *
     * @param string $totalPricedCommission
     *
     * @return self
     */
    public function setTotalPricedCommission(?string $totalPricedCommission): self
    {
        $this->totalPricedCommission = $totalPricedCommission;

        return $this;
    }

    /**
     * Used to pass related validating carrier details.
     *
     * @return string
     */
    public function getValidatingCarrier(): ?string
    {
        return $this->validatingCarrier;
    }

    /**
     * Used to pass related validating carrier details.
     *
     * @param string $validatingCarrier
     *
     * @return self
     */
    public function setValidatingCarrier(?string $validatingCarrier): self
    {
        $this->validatingCarrier = $validatingCarrier;

        return $this;
    }
}
