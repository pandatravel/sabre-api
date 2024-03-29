<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Ammonkc\SabreApi\Model\CreatePassengerNameRecord;

use Ammonkc\SabreApi\AbstractModel;

class CreatePassengerNameRecordResponseCreatePassengerNameRecordRSAirPriceItemPriceQuotePricedItineraryAirItineraryPricingInfoItemBaggageProvisionsItemSubCodeInfoSubCodeForAllowanceItem extends AbstractModel
{
    /**
     * The sub code for allowance.
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
     * The sub code for allowance.
     *
     * @return string|null
     */
    public function getContent(): ?string
    {
        return $this->content;
    }

    /**
     * The sub code for allowance.
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
