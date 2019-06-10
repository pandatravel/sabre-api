<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Ammonkc\SabreApi\Model\CreatePassengerNameRecord;

use Ammonkc\SabreApi\AbstractModel;

class CreatePassengerNameRecordRequestCreatePassengerNameRecordRQPostProcessing extends AbstractModel
{
    /**
     * Used to add arrival unknown segments into a passenger name record. The system will properly apply them so there is no need to segment select, etc...
     *
     * @var CreatePassengerNameRecordRequestCreatePassengerNameRecordRQPostProcessingARUNK
     */
    protected $aRUNK;
    /**
     * Used to request to place the newly created PNR on a queue.
     *
     * @var CreatePassengerNameRecordRequestCreatePassengerNameRecordRQPostProcessingQueuePlace
     */
    protected $queuePlace;
    /**
     * Used to finalize the transaction and commit the record.
     *
     * @var CreatePassengerNameRecordRequestCreatePassengerNameRecordRQPostProcessingEndTransaction
     */
    protected $endTransaction;
    /**
     * Used to specify wait interval to validate whether after booking is ended code share flights keep the holding confirmed status. If the "HK" status changes for any of the flight segments the service will pass corresponding warning message. The maximum time that can be set is 60 seconds. "PostBookingHKValidation" must be combined with .../PostProcessing/@RedisplayReservation="true".
     *
     * @var CreatePassengerNameRecordRequestCreatePassengerNameRecordRQPostProcessingPostBookingHKValidation
     */
    protected $postBookingHKValidation;
    /**
     * Used to specify wait interval to wait for airline record locators to be returned. If the locators are not returned after the specified interval and number of attempts service will pass corresponding warning message. "WaitForAirlineRecLoc" must be combined with .../PostProcessing/@RedisplayReservation="true".
     *
     * @var CreatePassengerNameRecordRequestCreatePassengerNameRecordRQPostProcessingWaitForAirlineRecLoc
     */
    protected $waitForAirlineRecLoc;
    /**
     * @var CreatePassengerNameRecordRequestCreatePassengerNameRecordRQPostProcessingRedisplayReservation
     */
    protected $redisplayReservation;
    /**
     * Used to unmask credit card information in the TIR response. Please note that this attribute has effect only if a user has EPR keyword CCVIEW.
     *
     * @var bool
     */
    protected $unmaskCreditCard;

    /**
     * Used to add arrival unknown segments into a passenger name record. The system will properly apply them so there is no need to segment select, etc...
     *
     * @return CreatePassengerNameRecordRequestCreatePassengerNameRecordRQPostProcessingARUNK
     */
    public function getARUNK(): ?CreatePassengerNameRecordRequestCreatePassengerNameRecordRQPostProcessingARUNK
    {
        return $this->aRUNK;
    }

    /**
     * Used to add arrival unknown segments into a passenger name record. The system will properly apply them so there is no need to segment select, etc...
     *
     * @param CreatePassengerNameRecordRequestCreatePassengerNameRecordRQPostProcessingARUNK $aRUNK
     *
     * @return self
     */
    public function setARUNK(?CreatePassengerNameRecordRequestCreatePassengerNameRecordRQPostProcessingARUNK $aRUNK): self
    {
        $this->aRUNK = $aRUNK;

        return $this;
    }

    /**
     * Used to request to place the newly created PNR on a queue.
     *
     * @return CreatePassengerNameRecordRequestCreatePassengerNameRecordRQPostProcessingQueuePlace
     */
    public function getQueuePlace(): ?CreatePassengerNameRecordRequestCreatePassengerNameRecordRQPostProcessingQueuePlace
    {
        return $this->queuePlace;
    }

    /**
     * Used to request to place the newly created PNR on a queue.
     *
     * @param CreatePassengerNameRecordRequestCreatePassengerNameRecordRQPostProcessingQueuePlace $queuePlace
     *
     * @return self
     */
    public function setQueuePlace(?CreatePassengerNameRecordRequestCreatePassengerNameRecordRQPostProcessingQueuePlace $queuePlace): self
    {
        $this->queuePlace = $queuePlace;

        return $this;
    }

    /**
     * Used to finalize the transaction and commit the record.
     *
     * @return CreatePassengerNameRecordRequestCreatePassengerNameRecordRQPostProcessingEndTransaction
     */
    public function getEndTransaction(): ?CreatePassengerNameRecordRequestCreatePassengerNameRecordRQPostProcessingEndTransaction
    {
        return $this->endTransaction;
    }

    /**
     * Used to finalize the transaction and commit the record.
     *
     * @param CreatePassengerNameRecordRequestCreatePassengerNameRecordRQPostProcessingEndTransaction $endTransaction
     *
     * @return self
     */
    public function setEndTransaction(?CreatePassengerNameRecordRequestCreatePassengerNameRecordRQPostProcessingEndTransaction $endTransaction): self
    {
        $this->endTransaction = $endTransaction;

        return $this;
    }

    /**
     * Used to specify wait interval to validate whether after booking is ended code share flights keep the holding confirmed status. If the "HK" status changes for any of the flight segments the service will pass corresponding warning message. The maximum time that can be set is 60 seconds. "PostBookingHKValidation" must be combined with .../PostProcessing/@RedisplayReservation="true".
     *
     * @return CreatePassengerNameRecordRequestCreatePassengerNameRecordRQPostProcessingPostBookingHKValidation
     */
    public function getPostBookingHKValidation(): ?CreatePassengerNameRecordRequestCreatePassengerNameRecordRQPostProcessingPostBookingHKValidation
    {
        return $this->postBookingHKValidation;
    }

    /**
     * Used to specify wait interval to validate whether after booking is ended code share flights keep the holding confirmed status. If the "HK" status changes for any of the flight segments the service will pass corresponding warning message. The maximum time that can be set is 60 seconds. "PostBookingHKValidation" must be combined with .../PostProcessing/@RedisplayReservation="true".
     *
     * @param CreatePassengerNameRecordRequestCreatePassengerNameRecordRQPostProcessingPostBookingHKValidation $postBookingHKValidation
     *
     * @return self
     */
    public function setPostBookingHKValidation(?CreatePassengerNameRecordRequestCreatePassengerNameRecordRQPostProcessingPostBookingHKValidation $postBookingHKValidation): self
    {
        $this->postBookingHKValidation = $postBookingHKValidation;

        return $this;
    }

    /**
     * Used to specify wait interval to wait for airline record locators to be returned. If the locators are not returned after the specified interval and number of attempts service will pass corresponding warning message. "WaitForAirlineRecLoc" must be combined with .../PostProcessing/@RedisplayReservation="true".
     *
     * @return CreatePassengerNameRecordRequestCreatePassengerNameRecordRQPostProcessingWaitForAirlineRecLoc
     */
    public function getWaitForAirlineRecLoc(): ?CreatePassengerNameRecordRequestCreatePassengerNameRecordRQPostProcessingWaitForAirlineRecLoc
    {
        return $this->waitForAirlineRecLoc;
    }

    /**
     * Used to specify wait interval to wait for airline record locators to be returned. If the locators are not returned after the specified interval and number of attempts service will pass corresponding warning message. "WaitForAirlineRecLoc" must be combined with .../PostProcessing/@RedisplayReservation="true".
     *
     * @param CreatePassengerNameRecordRequestCreatePassengerNameRecordRQPostProcessingWaitForAirlineRecLoc $waitForAirlineRecLoc
     *
     * @return self
     */
    public function setWaitForAirlineRecLoc(?CreatePassengerNameRecordRequestCreatePassengerNameRecordRQPostProcessingWaitForAirlineRecLoc $waitForAirlineRecLoc): self
    {
        $this->waitForAirlineRecLoc = $waitForAirlineRecLoc;

        return $this;
    }

    /**
     * @return CreatePassengerNameRecordRequestCreatePassengerNameRecordRQPostProcessingRedisplayReservation
     */
    public function getRedisplayReservation(): ?CreatePassengerNameRecordRequestCreatePassengerNameRecordRQPostProcessingRedisplayReservation
    {
        return $this->redisplayReservation;
    }

    /**
     * @param CreatePassengerNameRecordRequestCreatePassengerNameRecordRQPostProcessingRedisplayReservation $redisplayReservation
     *
     * @return self
     */
    public function setRedisplayReservation(?CreatePassengerNameRecordRequestCreatePassengerNameRecordRQPostProcessingRedisplayReservation $redisplayReservation): self
    {
        $this->redisplayReservation = $redisplayReservation;

        return $this;
    }

    /**
     * Used to unmask credit card information in the TIR response. Please note that this attribute has effect only if a user has EPR keyword CCVIEW.
     *
     * @return bool
     */
    public function getUnmaskCreditCard(): ?bool
    {
        return $this->unmaskCreditCard;
    }

    /**
     * Used to unmask credit card information in the TIR response. Please note that this attribute has effect only if a user has EPR keyword CCVIEW.
     *
     * @param bool $unmaskCreditCard
     *
     * @return self
     */
    public function setUnmaskCreditCard(?bool $unmaskCreditCard): self
    {
        $this->unmaskCreditCard = $unmaskCreditCard;

        return $this;
    }
}