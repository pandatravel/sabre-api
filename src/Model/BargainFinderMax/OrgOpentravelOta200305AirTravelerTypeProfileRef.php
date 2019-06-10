<?php

namespace Ammonkc\SabreApi\Model\BargainFinderMax;

use Ammonkc\SabreApi\AbstractModel;

class OrgOpentravelOta200305AirTravelerTypeProfileRef extends AbstractModel
{
    /**
     * An identifier used to uniquely reference an object in a system (e.g. an airline reservation reference, customer profile reference, booking confirmation number, or a reference to a previous availability quote).
     *
     * @var OrgOpentravelOta200305UniqueIDType
     */
    protected $uniqueID;

    /**
     * An identifier used to uniquely reference an object in a system (e.g. an airline reservation reference, customer profile reference, booking confirmation number, or a reference to a previous availability quote).
     *
     * @return OrgOpentravelOta200305UniqueIDType
     */
    public function getUniqueID(): ?OrgOpentravelOta200305UniqueIDType
    {
        return $this->uniqueID;
    }

    /**
     * An identifier used to uniquely reference an object in a system (e.g. an airline reservation reference, customer profile reference, booking confirmation number, or a reference to a previous availability quote).
     *
     * @param OrgOpentravelOta200305UniqueIDType $uniqueID
     *
     * @return self
     */
    public function setUniqueID(?OrgOpentravelOta200305UniqueIDType $uniqueID): self
    {
        $this->uniqueID = $uniqueID;

        return $this;
    }
}
