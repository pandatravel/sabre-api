<?php

namespace Ammonkc\SabreApi\Model\BargainFinderMax;

use Ammonkc\SabreApi\AbstractModel;

class OrgOpentravelOta200305PassengerTypeQuantityTypeTPAExtensions extends AbstractModel
{
    /**
     * @var OrgOpentravelOta200305PassengerTypeQuantityTypeTPAExtensionsAge
     */
    protected $age;
    /**
     * @var OrgOpentravelOta200305PassengerTypeQuantityTypeTPAExtensionsBirthDate
     */
    protected $birthDate;
    /**
     * @var OrgOpentravelOta200305PassengerTypeQuantityTypeTPAExtensionsState
     */
    protected $state;
    /**
     * @var OrgOpentravelOta200305PassengerTypeQuantityTypeTPAExtensionsTotalNumber
     */
    protected $totalNumber;
    /**
     * Identifies whether penalties associated with voluntary changes should be included in the search results.
     *
     * @var OrgOpentravelOta200305VoluntaryChangesSMPType
     */
    protected $voluntaryChanges;

    /**
     * @return OrgOpentravelOta200305PassengerTypeQuantityTypeTPAExtensionsAge
     */
    public function getAge(): ?OrgOpentravelOta200305PassengerTypeQuantityTypeTPAExtensionsAge
    {
        return $this->age;
    }

    /**
     * @param OrgOpentravelOta200305PassengerTypeQuantityTypeTPAExtensionsAge $age
     *
     * @return self
     */
    public function setAge(?OrgOpentravelOta200305PassengerTypeQuantityTypeTPAExtensionsAge $age): self
    {
        $this->age = $age;

        return $this;
    }

    /**
     * @return OrgOpentravelOta200305PassengerTypeQuantityTypeTPAExtensionsBirthDate
     */
    public function getBirthDate(): ?OrgOpentravelOta200305PassengerTypeQuantityTypeTPAExtensionsBirthDate
    {
        return $this->birthDate;
    }

    /**
     * @param OrgOpentravelOta200305PassengerTypeQuantityTypeTPAExtensionsBirthDate $birthDate
     *
     * @return self
     */
    public function setBirthDate(?OrgOpentravelOta200305PassengerTypeQuantityTypeTPAExtensionsBirthDate $birthDate): self
    {
        $this->birthDate = $birthDate;

        return $this;
    }

    /**
     * @return OrgOpentravelOta200305PassengerTypeQuantityTypeTPAExtensionsState
     */
    public function getState(): ?OrgOpentravelOta200305PassengerTypeQuantityTypeTPAExtensionsState
    {
        return $this->state;
    }

    /**
     * @param OrgOpentravelOta200305PassengerTypeQuantityTypeTPAExtensionsState $state
     *
     * @return self
     */
    public function setState(?OrgOpentravelOta200305PassengerTypeQuantityTypeTPAExtensionsState $state): self
    {
        $this->state = $state;

        return $this;
    }

    /**
     * @return OrgOpentravelOta200305PassengerTypeQuantityTypeTPAExtensionsTotalNumber
     */
    public function getTotalNumber(): ?OrgOpentravelOta200305PassengerTypeQuantityTypeTPAExtensionsTotalNumber
    {
        return $this->totalNumber;
    }

    /**
     * @param OrgOpentravelOta200305PassengerTypeQuantityTypeTPAExtensionsTotalNumber $totalNumber
     *
     * @return self
     */
    public function setTotalNumber(?OrgOpentravelOta200305PassengerTypeQuantityTypeTPAExtensionsTotalNumber $totalNumber): self
    {
        $this->totalNumber = $totalNumber;

        return $this;
    }

    /**
     * Identifies whether penalties associated with voluntary changes should be included in the search results.
     *
     * @return OrgOpentravelOta200305VoluntaryChangesSMPType
     */
    public function getVoluntaryChanges(): ?OrgOpentravelOta200305VoluntaryChangesSMPType
    {
        return $this->voluntaryChanges;
    }

    /**
     * Identifies whether penalties associated with voluntary changes should be included in the search results.
     *
     * @param OrgOpentravelOta200305VoluntaryChangesSMPType $voluntaryChanges
     *
     * @return self
     */
    public function setVoluntaryChanges(?OrgOpentravelOta200305VoluntaryChangesSMPType $voluntaryChanges): self
    {
        $this->voluntaryChanges = $voluntaryChanges;

        return $this;
    }
}
