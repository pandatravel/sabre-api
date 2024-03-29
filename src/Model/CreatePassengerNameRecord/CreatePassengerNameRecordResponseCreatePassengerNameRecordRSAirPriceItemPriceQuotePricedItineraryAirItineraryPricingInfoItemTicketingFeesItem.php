<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Ammonkc\SabreApi\Model\CreatePassengerNameRecord;

use Ammonkc\SabreApi\AbstractModel;

class CreatePassengerNameRecordResponseCreatePassengerNameRecordRSAirPriceItemPriceQuotePricedItineraryAirItineraryPricingInfoItemTicketingFeesItem extends AbstractModel
{
    /**
     * The fee information.
     *
     * @var CreatePassengerNameRecordResponseCreatePassengerNameRecordRSAirPriceItemPriceQuotePricedItineraryAirItineraryPricingInfoItemTicketingFeesItemFeeInformation
     */
    protected $feeInformation;

    /**
     * The fee information.
     *
     * @return CreatePassengerNameRecordResponseCreatePassengerNameRecordRSAirPriceItemPriceQuotePricedItineraryAirItineraryPricingInfoItemTicketingFeesItemFeeInformation|null
     */
    public function getFeeInformation(): ?CreatePassengerNameRecordResponseCreatePassengerNameRecordRSAirPriceItemPriceQuotePricedItineraryAirItineraryPricingInfoItemTicketingFeesItemFeeInformation
    {
        return $this->feeInformation;
    }

    /**
     * The fee information.
     *
     * @param CreatePassengerNameRecordResponseCreatePassengerNameRecordRSAirPriceItemPriceQuotePricedItineraryAirItineraryPricingInfoItemTicketingFeesItemFeeInformation|null $feeInformation
     *
     * @return self
     */
    public function setFeeInformation(?CreatePassengerNameRecordResponseCreatePassengerNameRecordRSAirPriceItemPriceQuotePricedItineraryAirItineraryPricingInfoItemTicketingFeesItemFeeInformation $feeInformation): self
    {
        $this->feeInformation = $feeInformation;

        return $this;
    }
}
