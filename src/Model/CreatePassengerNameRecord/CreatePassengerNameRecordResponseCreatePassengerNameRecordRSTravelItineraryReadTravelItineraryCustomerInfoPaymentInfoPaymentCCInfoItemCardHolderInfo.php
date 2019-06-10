<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Ammonkc\SabreApi\Model\CreatePassengerNameRecord;

use Ammonkc\SabreApi\AbstractModel;

class CreatePassengerNameRecordResponseCreatePassengerNameRecordRSTravelItineraryReadTravelItineraryCustomerInfoPaymentInfoPaymentCCInfoItemCardHolderInfo extends AbstractModel
{
    /**
     * Address.
     *
     * @var CreatePassengerNameRecordResponseCreatePassengerNameRecordRSTravelItineraryReadTravelItineraryCustomerInfoPaymentInfoPaymentCCInfoItemCardHolderInfoAddress
     */
    protected $address;
    /**
     * Contact numbers.
     *
     * @var CreatePassengerNameRecordResponseCreatePassengerNameRecordRSTravelItineraryReadTravelItineraryCustomerInfoPaymentInfoPaymentCCInfoItemCardHolderInfoContactNumbers
     */
    protected $contactNumbers;
    /**
     * "Name" is used to return the credit card holder's name.
     *
     * @var string
     */
    protected $name;

    /**
     * Address.
     *
     * @return CreatePassengerNameRecordResponseCreatePassengerNameRecordRSTravelItineraryReadTravelItineraryCustomerInfoPaymentInfoPaymentCCInfoItemCardHolderInfoAddress
     */
    public function getAddress(): ?CreatePassengerNameRecordResponseCreatePassengerNameRecordRSTravelItineraryReadTravelItineraryCustomerInfoPaymentInfoPaymentCCInfoItemCardHolderInfoAddress
    {
        return $this->address;
    }

    /**
     * Address.
     *
     * @param CreatePassengerNameRecordResponseCreatePassengerNameRecordRSTravelItineraryReadTravelItineraryCustomerInfoPaymentInfoPaymentCCInfoItemCardHolderInfoAddress $address
     *
     * @return self
     */
    public function setAddress(?CreatePassengerNameRecordResponseCreatePassengerNameRecordRSTravelItineraryReadTravelItineraryCustomerInfoPaymentInfoPaymentCCInfoItemCardHolderInfoAddress $address): self
    {
        $this->address = $address;

        return $this;
    }

    /**
     * Contact numbers.
     *
     * @return CreatePassengerNameRecordResponseCreatePassengerNameRecordRSTravelItineraryReadTravelItineraryCustomerInfoPaymentInfoPaymentCCInfoItemCardHolderInfoContactNumbers
     */
    public function getContactNumbers(): ?CreatePassengerNameRecordResponseCreatePassengerNameRecordRSTravelItineraryReadTravelItineraryCustomerInfoPaymentInfoPaymentCCInfoItemCardHolderInfoContactNumbers
    {
        return $this->contactNumbers;
    }

    /**
     * Contact numbers.
     *
     * @param CreatePassengerNameRecordResponseCreatePassengerNameRecordRSTravelItineraryReadTravelItineraryCustomerInfoPaymentInfoPaymentCCInfoItemCardHolderInfoContactNumbers $contactNumbers
     *
     * @return self
     */
    public function setContactNumbers(?CreatePassengerNameRecordResponseCreatePassengerNameRecordRSTravelItineraryReadTravelItineraryCustomerInfoPaymentInfoPaymentCCInfoItemCardHolderInfoContactNumbers $contactNumbers): self
    {
        $this->contactNumbers = $contactNumbers;

        return $this;
    }

    /**
     * "Name" is used to return the credit card holder's name.
     *
     * @return string
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * "Name" is used to return the credit card holder's name.
     *
     * @param string $name
     *
     * @return self
     */
    public function setName(?string $name): self
    {
        $this->name = $name;

        return $this;
    }
}