<?php

namespace Ammonkc\SabreApi\Model\EnhancedAirTicket;

use Ammonkc\SabreApi\AbstractModel;

class TicketingItemMiscQualifiersNeedPrint extends AbstractModel
{
    /**
     * "AuditorCoupon" is used to specify to print an auditor coupon.

    Please note that this qualifier is only applicable to Sabre Sonic-hosted carriers.

     *
     * @var bool
     */
    protected $auditorCoupon;
    /**
     * Itinerary" is used to specify to print an itinerary.

    Please note that this qualifier is only applicable to Sabre Sonic-hosted carriers.

     *
     * @var bool
     */
    protected $itinerary;
    /**
     * "PassengerReceipt" is used to specify to print a passenger receipt.

    Please note that this qualifier is only applicable to Sabre Sonic-hosted carriers.

     *
     * @var bool
     */
    protected $passengerReceipt;

    /**
     * "AuditorCoupon" is used to specify to print an auditor coupon.

    Please note that this qualifier is only applicable to Sabre Sonic-hosted carriers.

     *
     * @return bool
     */
    public function getAuditorCoupon(): ?bool
    {
        return $this->auditorCoupon;
    }

    /**
     * "AuditorCoupon" is used to specify to print an auditor coupon.

    Please note that this qualifier is only applicable to Sabre Sonic-hosted carriers.

     *
     * @param bool $auditorCoupon
     *
     * @return self
     */
    public function setAuditorCoupon(?bool $auditorCoupon): self
    {
        $this->auditorCoupon = $auditorCoupon;

        return $this;
    }

    /**
     * Itinerary" is used to specify to print an itinerary.

    Please note that this qualifier is only applicable to Sabre Sonic-hosted carriers.

     *
     * @return bool
     */
    public function getItinerary(): ?bool
    {
        return $this->itinerary;
    }

    /**
     * Itinerary" is used to specify to print an itinerary.

    Please note that this qualifier is only applicable to Sabre Sonic-hosted carriers.

     *
     * @param bool $itinerary
     *
     * @return self
     */
    public function setItinerary(?bool $itinerary): self
    {
        $this->itinerary = $itinerary;

        return $this;
    }

    /**
     * "PassengerReceipt" is used to specify to print a passenger receipt.

    Please note that this qualifier is only applicable to Sabre Sonic-hosted carriers.

     *
     * @return bool
     */
    public function getPassengerReceipt(): ?bool
    {
        return $this->passengerReceipt;
    }

    /**
     * "PassengerReceipt" is used to specify to print a passenger receipt.

    Please note that this qualifier is only applicable to Sabre Sonic-hosted carriers.

     *
     * @param bool $passengerReceipt
     *
     * @return self
     */
    public function setPassengerReceipt(?bool $passengerReceipt): self
    {
        $this->passengerReceipt = $passengerReceipt;

        return $this;
    }
}
