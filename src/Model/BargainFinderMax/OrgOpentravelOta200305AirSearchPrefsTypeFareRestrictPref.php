<?php

namespace Ammonkc\SabreApi\Model\BargainFinderMax;

use Ammonkc\SabreApi\AbstractModel;

class OrgOpentravelOta200305AirSearchPrefsTypeFareRestrictPref extends AbstractModel
{
    /**
     * Identifies whether advance reservation or ticketing restrictions are acceptable in the search results.
     *
     * @var OrgOpentravelOta200305AdvResTicketingType
     */
    protected $advResTicketing;
    /**
     * Refer to OTA Code List Fare Restriction (FAR).
     *
     * @var string
     */
    protected $fareRestriction;
    /**
     * Used to specify a preference level for something that is or will be requested (e.g. a supplier of a service, a type of service, a form of payment, etc.).
     *
     * @var string
     */
    protected $preferLevel;
    /**
     * Identifies whether restrictions on minimum or maximum stays should be included in the search results.
     *
     * @var OrgOpentravelOta200305StayRestrictionsType
     */
    protected $stayRestrictions;
    /**
     * Identifies whether penalties associated with voluntary changes should be included in the search results.
     *
     * @var OrgOpentravelOta200305VoluntaryChangesType
     */
    protected $voluntaryChanges;

    /**
     * Identifies whether advance reservation or ticketing restrictions are acceptable in the search results.
     *
     * @return OrgOpentravelOta200305AdvResTicketingType
     */
    public function getAdvResTicketing(): ?OrgOpentravelOta200305AdvResTicketingType
    {
        return $this->advResTicketing;
    }

    /**
     * Identifies whether advance reservation or ticketing restrictions are acceptable in the search results.
     *
     * @param OrgOpentravelOta200305AdvResTicketingType $advResTicketing
     *
     * @return self
     */
    public function setAdvResTicketing(?OrgOpentravelOta200305AdvResTicketingType $advResTicketing): self
    {
        $this->advResTicketing = $advResTicketing;

        return $this;
    }

    /**
     * Refer to OTA Code List Fare Restriction (FAR).
     *
     * @return string
     */
    public function getFareRestriction(): ?string
    {
        return $this->fareRestriction;
    }

    /**
     * Refer to OTA Code List Fare Restriction (FAR).
     *
     * @param string $fareRestriction
     *
     * @return self
     */
    public function setFareRestriction(?string $fareRestriction): self
    {
        $this->fareRestriction = $fareRestriction;

        return $this;
    }

    /**
     * Used to specify a preference level for something that is or will be requested (e.g. a supplier of a service, a type of service, a form of payment, etc.).
     *
     * @return string
     */
    public function getPreferLevel(): ?string
    {
        return $this->preferLevel;
    }

    /**
     * Used to specify a preference level for something that is or will be requested (e.g. a supplier of a service, a type of service, a form of payment, etc.).
     *
     * @param string $preferLevel
     *
     * @return self
     */
    public function setPreferLevel(?string $preferLevel): self
    {
        $this->preferLevel = $preferLevel;

        return $this;
    }

    /**
     * Identifies whether restrictions on minimum or maximum stays should be included in the search results.
     *
     * @return OrgOpentravelOta200305StayRestrictionsType
     */
    public function getStayRestrictions(): ?OrgOpentravelOta200305StayRestrictionsType
    {
        return $this->stayRestrictions;
    }

    /**
     * Identifies whether restrictions on minimum or maximum stays should be included in the search results.
     *
     * @param OrgOpentravelOta200305StayRestrictionsType $stayRestrictions
     *
     * @return self
     */
    public function setStayRestrictions(?OrgOpentravelOta200305StayRestrictionsType $stayRestrictions): self
    {
        $this->stayRestrictions = $stayRestrictions;

        return $this;
    }

    /**
     * Identifies whether penalties associated with voluntary changes should be included in the search results.
     *
     * @return OrgOpentravelOta200305VoluntaryChangesType
     */
    public function getVoluntaryChanges(): ?OrgOpentravelOta200305VoluntaryChangesType
    {
        return $this->voluntaryChanges;
    }

    /**
     * Identifies whether penalties associated with voluntary changes should be included in the search results.
     *
     * @param OrgOpentravelOta200305VoluntaryChangesType $voluntaryChanges
     *
     * @return self
     */
    public function setVoluntaryChanges(?OrgOpentravelOta200305VoluntaryChangesType $voluntaryChanges): self
    {
        $this->voluntaryChanges = $voluntaryChanges;

        return $this;
    }
}
