<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Ammonkc\SabreApi\Model\CreatePassengerNameRecord;

use Ammonkc\SabreApi\AbstractModel;

class CreatePassengerNameRecordResponseCreatePassengerNameRecordRSAirPriceItemPriceComparison extends AbstractModel
{
    /**
     * Used to return the actual total amount associated with the particular itinerary.
     *
     * @var string
     */
    protected $amountReturned;
    /**
     * Used to return the amount specified in the CPNR request that was derived from the total amount returned via the previous shopping process for comparision purposes against the current price being returned for the same itinerary.
     *
     * @var string
     */
    protected $amountSpecified;

    /**
     * Used to return the actual total amount associated with the particular itinerary.
     *
     * @return string
     */
    public function getAmountReturned(): ?string
    {
        return $this->amountReturned;
    }

    /**
     * Used to return the actual total amount associated with the particular itinerary.
     *
     * @param string $amountReturned
     *
     * @return self
     */
    public function setAmountReturned(?string $amountReturned): self
    {
        $this->amountReturned = $amountReturned;

        return $this;
    }

    /**
     * Used to return the amount specified in the CPNR request that was derived from the total amount returned via the previous shopping process for comparision purposes against the current price being returned for the same itinerary.
     *
     * @return string
     */
    public function getAmountSpecified(): ?string
    {
        return $this->amountSpecified;
    }

    /**
     * Used to return the amount specified in the CPNR request that was derived from the total amount returned via the previous shopping process for comparision purposes against the current price being returned for the same itinerary.
     *
     * @param string $amountSpecified
     *
     * @return self
     */
    public function setAmountSpecified(?string $amountSpecified): self
    {
        $this->amountSpecified = $amountSpecified;

        return $this;
    }
}
