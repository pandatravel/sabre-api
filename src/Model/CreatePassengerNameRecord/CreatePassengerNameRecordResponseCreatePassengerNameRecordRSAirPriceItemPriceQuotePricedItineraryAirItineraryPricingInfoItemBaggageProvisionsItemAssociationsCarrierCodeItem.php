<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Ammonkc\SabreApi\Model\CreatePassengerNameRecord;

use Ammonkc\SabreApi\AbstractModel;

class CreatePassengerNameRecordResponseCreatePassengerNameRecordRSAirPriceItemPriceQuotePricedItineraryAirItineraryPricingInfoItemBaggageProvisionsItemAssociationsCarrierCodeItem extends AbstractModel
{
    /**
     * The carrier code.
     *
     * @var string
     */
    protected $content;
    /**
     * Used as a reference place holder.
     *
     * @var int
     */
    protected $rPH;

    /**
     * The carrier code.
     *
     * @return string
     */
    public function getContent(): string
    {
        return $this->content;
    }

    /**
     * The carrier code.
     *
     * @param string $content
     *
     * @return self
     */
    public function setContent(string $content): self
    {
        $this->content = $content;

        return $this;
    }

    /**
     * Used as a reference place holder.
     *
     * @return int
     */
    public function getRPH(): int
    {
        return $this->rPH;
    }

    /**
     * Used as a reference place holder.
     *
     * @param int $rPH
     *
     * @return self
     */
    public function setRPH(int $rPH): self
    {
        $this->rPH = $rPH;

        return $this;
    }
}
