<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Ammonkc\SabreApi\Model\CreatePassengerNameRecord;

use Ammonkc\SabreApi\AbstractModel;

class CreatePassengerNameRecordResponseCreatePassengerNameRecordRSAirPriceItemPriceQuotePricedItineraryAirItineraryPricingInfoItemPassengerTypeQuantity extends AbstractModel
{
    /**
     * The passenger type code associated with the particular itinerary.
     *
     * @var string
     */
    protected $code;
    /**
     * The number of passengers associated with the particular itinerary.
     *
     * @var string
     */
    protected $quantity;

    /**
     * The passenger type code associated with the particular itinerary.
     *
     * @return string|null
     */
    public function getCode(): ?string
    {
        return $this->code;
    }

    /**
     * The passenger type code associated with the particular itinerary.
     *
     * @param string|null $code
     *
     * @return self
     */
    public function setCode(?string $code): self
    {
        $this->code = $code;

        return $this;
    }

    /**
     * The number of passengers associated with the particular itinerary.
     *
     * @return string|null
     */
    public function getQuantity(): ?string
    {
        return $this->quantity;
    }

    /**
     * The number of passengers associated with the particular itinerary.
     *
     * @param string|null $quantity
     *
     * @return self
     */
    public function setQuantity(?string $quantity): self
    {
        $this->quantity = $quantity;

        return $this;
    }
}
