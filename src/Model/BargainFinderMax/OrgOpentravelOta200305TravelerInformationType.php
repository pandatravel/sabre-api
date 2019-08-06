<?php

namespace Ammonkc\SabreApi\Model\BargainFinderMax;

use Ammonkc\SabreApi\AbstractModel;

class OrgOpentravelOta200305TravelerInformationType extends AbstractModel
{
    /**
     * Information profiling the person traveling Gender - the gender of the customer, if needed BirthDate - Date of Birth Currency - the preferred currency in which monetary amounts should be returned.
     *
     * @var OrgOpentravelOta200305AirTravelerType
     */
    protected $airTraveler;
    /**
     * @var OrgOpentravelOta200305PassengerTypeQuantityType[]
     */
    protected $passengerTypeQuantity;

    /**
     * Information profiling the person traveling Gender - the gender of the customer, if needed BirthDate - Date of Birth Currency - the preferred currency in which monetary amounts should be returned.
     *
     * @return OrgOpentravelOta200305AirTravelerType
     */
    public function getAirTraveler(): OrgOpentravelOta200305AirTravelerType
    {
        return $this->airTraveler;
    }

    /**
     * Information profiling the person traveling Gender - the gender of the customer, if needed BirthDate - Date of Birth Currency - the preferred currency in which monetary amounts should be returned.
     *
     * @param OrgOpentravelOta200305AirTravelerType $airTraveler
     *
     * @return self
     */
    public function setAirTraveler(OrgOpentravelOta200305AirTravelerType $airTraveler): self
    {
        $this->airTraveler = $airTraveler;

        return $this;
    }

    /**
     * @return OrgOpentravelOta200305PassengerTypeQuantityType[]
     */
    public function getPassengerTypeQuantity(): array
    {
        return $this->passengerTypeQuantity;
    }

    /**
     * @param OrgOpentravelOta200305PassengerTypeQuantityType[] $passengerTypeQuantity
     *
     * @return self
     */
    public function setPassengerTypeQuantity(array $passengerTypeQuantity): self
    {
        $this->passengerTypeQuantity = $passengerTypeQuantity;

        return $this;
    }
}
