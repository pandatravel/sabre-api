<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Ammonkc\SabreApi\Model\CreatePassengerNameRecord;

use Ammonkc\SabreApi\AbstractModel;

class CreatePassengerNameRecordResponseCreatePassengerNameRecordRSAirPriceItemPriceQuotePricedItineraryAirItineraryPricingInfoItemBaggageProvisionsItemAssociationsOriginLocationItem extends AbstractModel
{
    /**
     * The location code.
     *
     * @var string
     */
    protected $locationCode;
    /**
     * Used as a reference place holder.
     *
     * @var int
     */
    protected $rPH;

    /**
     * The location code.
     *
     * @return string|null
     */
    public function getLocationCode(): ?string
    {
        return $this->locationCode;
    }

    /**
     * The location code.
     *
     * @param string|null $locationCode
     *
     * @return self
     */
    public function setLocationCode(?string $locationCode): self
    {
        $this->locationCode = $locationCode;

        return $this;
    }

    /**
     * Used as a reference place holder.
     *
     * @return int|null
     */
    public function getRPH(): ?int
    {
        return $this->rPH;
    }

    /**
     * Used as a reference place holder.
     *
     * @param int|null $rPH
     *
     * @return self
     */
    public function setRPH(?int $rPH): self
    {
        $this->rPH = $rPH;

        return $this;
    }
}
