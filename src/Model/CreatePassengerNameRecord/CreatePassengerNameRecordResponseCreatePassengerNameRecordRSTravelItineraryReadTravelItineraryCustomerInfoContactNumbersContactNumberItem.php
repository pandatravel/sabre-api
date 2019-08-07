<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Ammonkc\SabreApi\Model\CreatePassengerNameRecord;

use Ammonkc\SabreApi\AbstractModel;

class CreatePassengerNameRecordResponseCreatePassengerNameRecordRSTravelItineraryReadTravelItineraryCustomerInfoContactNumbersContactNumberItem extends AbstractModel
{
    /**
     * The passenger name information.
     *
     * @var CreatePassengerNameRecordResponseCreatePassengerNameRecordRSTravelItineraryReadTravelItineraryCustomerInfoContactNumbersContactNumberItemPersonNameItem[]
     */
    protected $personName;
    /**
     * The city code associated to the phone number.
     *
     * @var string
     */
    protected $locationCode;
    /**
     * The telephone number.
     *
     * @var string
     */
    protected $phone;
    /**
     * The reference placeholder.
     *
     * @var string
     */
    protected $rPH;
    /**
     * The reference ID.
     *
     * @var string
     */
    protected $id;

    /**
     * The passenger name information.
     *
     * @return CreatePassengerNameRecordResponseCreatePassengerNameRecordRSTravelItineraryReadTravelItineraryCustomerInfoContactNumbersContactNumberItemPersonNameItem[]
     */
    public function getPersonName(): array
    {
        return $this->personName;
    }

    /**
     * The passenger name information.
     *
     * @param CreatePassengerNameRecordResponseCreatePassengerNameRecordRSTravelItineraryReadTravelItineraryCustomerInfoContactNumbersContactNumberItemPersonNameItem[] $personName
     *
     * @return self
     */
    public function setPersonName(array $personName): self
    {
        $this->personName = $personName;

        return $this;
    }

    /**
     * The city code associated to the phone number.
     *
     * @return string
     */
    public function getLocationCode(): string
    {
        return $this->locationCode;
    }

    /**
     * The city code associated to the phone number.
     *
     * @param string $locationCode
     *
     * @return self
     */
    public function setLocationCode(string $locationCode): self
    {
        $this->locationCode = $locationCode;

        return $this;
    }

    /**
     * The telephone number.
     *
     * @return string
     */
    public function getPhone(): string
    {
        return $this->phone;
    }

    /**
     * The telephone number.
     *
     * @param string $phone
     *
     * @return self
     */
    public function setPhone(string $phone): self
    {
        $this->phone = $phone;

        return $this;
    }

    /**
     * The reference placeholder.
     *
     * @return string
     */
    public function getRPH(): string
    {
        return $this->rPH;
    }

    /**
     * The reference placeholder.
     *
     * @param string $rPH
     *
     * @return self
     */
    public function setRPH(string $rPH): self
    {
        $this->rPH = $rPH;

        return $this;
    }

    /**
     * The reference ID.
     *
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }

    /**
     * The reference ID.
     *
     * @param string $id
     *
     * @return self
     */
    public function setId(string $id): self
    {
        $this->id = $id;

        return $this;
    }
}
