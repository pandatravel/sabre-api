<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Ammonkc\SabreApi\Model\CreatePassengerNameRecord;

use Ammonkc\SabreApi\AbstractModel;

class CreatePassengerNameRecordResponseCreatePassengerNameRecordRSTravelItineraryReadTravelItineraryCustomerInfoCustLoyaltyItem extends AbstractModel
{
    /**
     * "TravelingCarrierCode" is used to return the traveling airline code.
     *
     * @var string
     */
    protected $travelingCarrierCode;
    /**
     * "MembershipID" is used to return the passenger's frequent flyer number.
     *
     * @var string
     */
    protected $membershipID;
    /**
     * "NameNumber" is used to associate the particular frequent flyer number to a particular passenger within the record.
     *
     * @var string
     */
    protected $nameNumber;
    /**
     * "ProgramID" is used to return the passenger's frequent flyer airline code.
     *
     * @var string
     */
    protected $programID;
    /**
     * "RPH" is used as a reference placeholder.
     *
     * @var string
     */
    protected $rPH;
    /**
     * "ShortText" is used to return miscellaneous frequent flyer-related information.
     *
     * @var string
     */
    protected $shortText;
    /**
     * "Status" is used to return the status code associated with the particular flight segment within the record.
     *
     * @var string
     */
    protected $status;
    /**
     * Reference ID.
     *
     * @var string
     */
    protected $id;

    /**
     * "TravelingCarrierCode" is used to return the traveling airline code.
     *
     * @return string
     */
    public function getTravelingCarrierCode(): ?string
    {
        return $this->travelingCarrierCode;
    }

    /**
     * "TravelingCarrierCode" is used to return the traveling airline code.
     *
     * @param string $travelingCarrierCode
     *
     * @return self
     */
    public function setTravelingCarrierCode(?string $travelingCarrierCode): self
    {
        $this->travelingCarrierCode = $travelingCarrierCode;

        return $this;
    }

    /**
     * "MembershipID" is used to return the passenger's frequent flyer number.
     *
     * @return string
     */
    public function getMembershipID(): ?string
    {
        return $this->membershipID;
    }

    /**
     * "MembershipID" is used to return the passenger's frequent flyer number.
     *
     * @param string $membershipID
     *
     * @return self
     */
    public function setMembershipID(?string $membershipID): self
    {
        $this->membershipID = $membershipID;

        return $this;
    }

    /**
     * "NameNumber" is used to associate the particular frequent flyer number to a particular passenger within the record.
     *
     * @return string
     */
    public function getNameNumber(): ?string
    {
        return $this->nameNumber;
    }

    /**
     * "NameNumber" is used to associate the particular frequent flyer number to a particular passenger within the record.
     *
     * @param string $nameNumber
     *
     * @return self
     */
    public function setNameNumber(?string $nameNumber): self
    {
        $this->nameNumber = $nameNumber;

        return $this;
    }

    /**
     * "ProgramID" is used to return the passenger's frequent flyer airline code.
     *
     * @return string
     */
    public function getProgramID(): ?string
    {
        return $this->programID;
    }

    /**
     * "ProgramID" is used to return the passenger's frequent flyer airline code.
     *
     * @param string $programID
     *
     * @return self
     */
    public function setProgramID(?string $programID): self
    {
        $this->programID = $programID;

        return $this;
    }

    /**
     * "RPH" is used as a reference placeholder.
     *
     * @return string
     */
    public function getRPH(): ?string
    {
        return $this->rPH;
    }

    /**
     * "RPH" is used as a reference placeholder.
     *
     * @param string $rPH
     *
     * @return self
     */
    public function setRPH(?string $rPH): self
    {
        $this->rPH = $rPH;

        return $this;
    }

    /**
     * "ShortText" is used to return miscellaneous frequent flyer-related information.
     *
     * @return string
     */
    public function getShortText(): ?string
    {
        return $this->shortText;
    }

    /**
     * "ShortText" is used to return miscellaneous frequent flyer-related information.
     *
     * @param string $shortText
     *
     * @return self
     */
    public function setShortText(?string $shortText): self
    {
        $this->shortText = $shortText;

        return $this;
    }

    /**
     * "Status" is used to return the status code associated with the particular flight segment within the record.
     *
     * @return string
     */
    public function getStatus(): ?string
    {
        return $this->status;
    }

    /**
     * "Status" is used to return the status code associated with the particular flight segment within the record.
     *
     * @param string $status
     *
     * @return self
     */
    public function setStatus(?string $status): self
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Reference ID.
     *
     * @return string
     */
    public function getId(): ?string
    {
        return $this->id;
    }

    /**
     * Reference ID.
     *
     * @param string $id
     *
     * @return self
     */
    public function setId(?string $id): self
    {
        $this->id = $id;

        return $this;
    }
}