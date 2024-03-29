<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Ammonkc\SabreApi\Model\CreatePassengerNameRecord;

use Ammonkc\SabreApi\AbstractModel;

class CreatePassengerNameRecordResponseCreatePassengerNameRecordRSAirPriceItemPriceQuotePricedItineraryAirItineraryPricingInfoItemBaggageProvisionsItemWeightLimit extends AbstractModel
{
    /**
     * The weight limit.
     *
     * @var string
     */
    protected $content;
    /**
     * The weight units.
     *
     * @var string
     */
    protected $units;

    /**
     * The weight limit.
     *
     * @return string|null
     */
    public function getContent(): ?string
    {
        return $this->content;
    }

    /**
     * The weight limit.
     *
     * @param string|null $content
     *
     * @return self
     */
    public function setContent(?string $content): self
    {
        $this->content = $content;

        return $this;
    }

    /**
     * The weight units.
     *
     * @return string|null
     */
    public function getUnits(): ?string
    {
        return $this->units;
    }

    /**
     * The weight units.
     *
     * @param string|null $units
     *
     * @return self
     */
    public function setUnits(?string $units): self
    {
        $this->units = $units;

        return $this;
    }
}
