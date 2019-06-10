<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Ammonkc\SabreApi\Model\CreatePassengerNameRecord;

use Ammonkc\SabreApi\AbstractModel;

class CreatePassengerNameRecordResponseCreatePassengerNameRecordRSTravelItineraryReadTravelItineraryCustomerInfoPaymentInfo extends AbstractModel
{
    /**
     * Payment Information.
     *
     * @var CreatePassengerNameRecordResponseCreatePassengerNameRecordRSTravelItineraryReadTravelItineraryCustomerInfoPaymentInfoPayment
     */
    protected $payment;

    /**
     * Payment Information.
     *
     * @return CreatePassengerNameRecordResponseCreatePassengerNameRecordRSTravelItineraryReadTravelItineraryCustomerInfoPaymentInfoPayment
     */
    public function getPayment(): ?CreatePassengerNameRecordResponseCreatePassengerNameRecordRSTravelItineraryReadTravelItineraryCustomerInfoPaymentInfoPayment
    {
        return $this->payment;
    }

    /**
     * Payment Information.
     *
     * @param CreatePassengerNameRecordResponseCreatePassengerNameRecordRSTravelItineraryReadTravelItineraryCustomerInfoPaymentInfoPayment $payment
     *
     * @return self
     */
    public function setPayment(?CreatePassengerNameRecordResponseCreatePassengerNameRecordRSTravelItineraryReadTravelItineraryCustomerInfoPaymentInfoPayment $payment): self
    {
        $this->payment = $payment;

        return $this;
    }
}