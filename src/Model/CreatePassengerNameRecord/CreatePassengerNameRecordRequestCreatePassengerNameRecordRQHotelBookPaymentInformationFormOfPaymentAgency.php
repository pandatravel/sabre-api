<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Ammonkc\SabreApi\Model\CreatePassengerNameRecord;

use Ammonkc\SabreApi\AbstractModel;

class CreatePassengerNameRecordRequestCreatePassengerNameRecordRQHotelBookPaymentInformationFormOfPaymentAgency extends AbstractModel
{
    /**
     * The agency name.
     *
     * @var string
     */
    protected $name;
    /**
     * The agency address information.
     *
     * @var CreatePassengerNameRecordRequestCreatePassengerNameRecordRQHotelBookPaymentInformationFormOfPaymentAgencyAddress
     */
    protected $address;
    /**
     * The IATA number.
     *
     * @var string
     */
    protected $iATANumber;

    /**
     * The agency name.
     *
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * The agency name.
     *
     * @param string $name
     *
     * @return self
     */
    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    /**
     * The agency address information.
     *
     * @return CreatePassengerNameRecordRequestCreatePassengerNameRecordRQHotelBookPaymentInformationFormOfPaymentAgencyAddress
     */
    public function getAddress(): CreatePassengerNameRecordRequestCreatePassengerNameRecordRQHotelBookPaymentInformationFormOfPaymentAgencyAddress
    {
        return $this->address;
    }

    /**
     * The agency address information.
     *
     * @param CreatePassengerNameRecordRequestCreatePassengerNameRecordRQHotelBookPaymentInformationFormOfPaymentAgencyAddress $address
     *
     * @return self
     */
    public function setAddress(CreatePassengerNameRecordRequestCreatePassengerNameRecordRQHotelBookPaymentInformationFormOfPaymentAgencyAddress $address): self
    {
        $this->address = $address;

        return $this;
    }

    /**
     * The IATA number.
     *
     * @return string
     */
    public function getIATANumber(): string
    {
        return $this->iATANumber;
    }

    /**
     * The IATA number.
     *
     * @param string $iATANumber
     *
     * @return self
     */
    public function setIATANumber(string $iATANumber): self
    {
        $this->iATANumber = $iATANumber;

        return $this;
    }
}
