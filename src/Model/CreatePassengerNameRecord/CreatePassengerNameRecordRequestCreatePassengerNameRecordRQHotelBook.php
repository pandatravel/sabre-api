<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Ammonkc\SabreApi\Model\CreatePassengerNameRecord;

use Ammonkc\SabreApi\AbstractModel;

class CreatePassengerNameRecordRequestCreatePassengerNameRecordRQHotelBook extends AbstractModel
{
    /**
     * The booking information details.
     *
     * @var CreatePassengerNameRecordRequestCreatePassengerNameRecordRQHotelBookBookingInfo
     */
    protected $bookingInfo;
    /**
     * The room details.
     *
     * @var CreatePassengerNameRecordRequestCreatePassengerNameRecordRQHotelBookRooms
     */
    protected $rooms;
    /**
     * Used to specify special instructions.
     *
     * @var CreatePassengerNameRecordRequestCreatePassengerNameRecordRQHotelBookSpecialInstructions
     */
    protected $specialInstructions;
    /**
     * The payment information.
     *
     * @var CreatePassengerNameRecordRequestCreatePassengerNameRecordRQHotelBookPaymentInformation
     */
    protected $paymentInformation;
    /**
     * The point of sale information.
     *
     * @var CreatePassengerNameRecordRequestCreatePassengerNameRecordRQHotelBookPOS
     */
    protected $pOS;

    /**
     * The booking information details.
     *
     * @return CreatePassengerNameRecordRequestCreatePassengerNameRecordRQHotelBookBookingInfo
     */
    public function getBookingInfo(): CreatePassengerNameRecordRequestCreatePassengerNameRecordRQHotelBookBookingInfo
    {
        return $this->bookingInfo;
    }

    /**
     * The booking information details.
     *
     * @param CreatePassengerNameRecordRequestCreatePassengerNameRecordRQHotelBookBookingInfo $bookingInfo
     *
     * @return self
     */
    public function setBookingInfo(CreatePassengerNameRecordRequestCreatePassengerNameRecordRQHotelBookBookingInfo $bookingInfo): self
    {
        $this->bookingInfo = $bookingInfo;

        return $this;
    }

    /**
     * The room details.
     *
     * @return CreatePassengerNameRecordRequestCreatePassengerNameRecordRQHotelBookRooms
     */
    public function getRooms(): CreatePassengerNameRecordRequestCreatePassengerNameRecordRQHotelBookRooms
    {
        return $this->rooms;
    }

    /**
     * The room details.
     *
     * @param CreatePassengerNameRecordRequestCreatePassengerNameRecordRQHotelBookRooms $rooms
     *
     * @return self
     */
    public function setRooms(CreatePassengerNameRecordRequestCreatePassengerNameRecordRQHotelBookRooms $rooms): self
    {
        $this->rooms = $rooms;

        return $this;
    }

    /**
     * Used to specify special instructions.
     *
     * @return CreatePassengerNameRecordRequestCreatePassengerNameRecordRQHotelBookSpecialInstructions
     */
    public function getSpecialInstructions(): CreatePassengerNameRecordRequestCreatePassengerNameRecordRQHotelBookSpecialInstructions
    {
        return $this->specialInstructions;
    }

    /**
     * Used to specify special instructions.
     *
     * @param CreatePassengerNameRecordRequestCreatePassengerNameRecordRQHotelBookSpecialInstructions $specialInstructions
     *
     * @return self
     */
    public function setSpecialInstructions(CreatePassengerNameRecordRequestCreatePassengerNameRecordRQHotelBookSpecialInstructions $specialInstructions): self
    {
        $this->specialInstructions = $specialInstructions;

        return $this;
    }

    /**
     * The payment information.
     *
     * @return CreatePassengerNameRecordRequestCreatePassengerNameRecordRQHotelBookPaymentInformation
     */
    public function getPaymentInformation(): CreatePassengerNameRecordRequestCreatePassengerNameRecordRQHotelBookPaymentInformation
    {
        return $this->paymentInformation;
    }

    /**
     * The payment information.
     *
     * @param CreatePassengerNameRecordRequestCreatePassengerNameRecordRQHotelBookPaymentInformation $paymentInformation
     *
     * @return self
     */
    public function setPaymentInformation(CreatePassengerNameRecordRequestCreatePassengerNameRecordRQHotelBookPaymentInformation $paymentInformation): self
    {
        $this->paymentInformation = $paymentInformation;

        return $this;
    }

    /**
     * The point of sale information.
     *
     * @return CreatePassengerNameRecordRequestCreatePassengerNameRecordRQHotelBookPOS
     */
    public function getPOS(): CreatePassengerNameRecordRequestCreatePassengerNameRecordRQHotelBookPOS
    {
        return $this->pOS;
    }

    /**
     * The point of sale information.
     *
     * @param CreatePassengerNameRecordRequestCreatePassengerNameRecordRQHotelBookPOS $pOS
     *
     * @return self
     */
    public function setPOS(CreatePassengerNameRecordRequestCreatePassengerNameRecordRQHotelBookPOS $pOS): self
    {
        $this->pOS = $pOS;

        return $this;
    }
}
