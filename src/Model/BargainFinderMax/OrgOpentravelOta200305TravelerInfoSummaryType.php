<?php

namespace Ammonkc\SabreApi\Model\BargainFinderMax;

use Ammonkc\SabreApi\AbstractModel;

class OrgOpentravelOta200305TravelerInfoSummaryType extends AbstractModel
{
    /**
     * @var OrgOpentravelOta200305TravelerInformationType[]
     */
    protected $airTravelerAvail;
    /**
     * Identify pricing source, if negotiated fares are requested and if it is a reprice request.
     *
     * @var OrgOpentravelOta200305PriceRequestInformationType
     */
    protected $priceRequestInformation;
    /**
     * @var int[]
     */
    protected $seatsRequested;
    /**
     * If true, this request is for a specific PTC and only fares applicable to that PTC will be checked and returned. It is the same as XOFares flag in Intellisell request.
     *
     * @var bool
     */
    protected $specificPTCIndicator;
    /**
     * Additional elements and attributes to be included if required, per Trading Partner Agreement (TPA).
     *
     * @var OrgOpentravelOta200305TravelerInfoSummaryTPAExtensionsType
     */
    protected $tPAExtensions;

    /**
     * @return OrgOpentravelOta200305TravelerInformationType[]
     */
    public function getAirTravelerAvail(): ?array
    {
        return $this->airTravelerAvail;
    }

    /**
     * @param OrgOpentravelOta200305TravelerInformationType[] $airTravelerAvail
     *
     * @return self
     */
    public function setAirTravelerAvail(?array $airTravelerAvail): self
    {
        $this->airTravelerAvail = $airTravelerAvail;

        return $this;
    }

    /**
     * Identify pricing source, if negotiated fares are requested and if it is a reprice request.
     *
     * @return OrgOpentravelOta200305PriceRequestInformationType
     */
    public function getPriceRequestInformation(): ?OrgOpentravelOta200305PriceRequestInformationType
    {
        return $this->priceRequestInformation;
    }

    /**
     * Identify pricing source, if negotiated fares are requested and if it is a reprice request.
     *
     * @param OrgOpentravelOta200305PriceRequestInformationType $priceRequestInformation
     *
     * @return self
     */
    public function setPriceRequestInformation(?OrgOpentravelOta200305PriceRequestInformationType $priceRequestInformation): self
    {
        $this->priceRequestInformation = $priceRequestInformation;

        return $this;
    }

    /**
     * @return int[]
     */
    public function getSeatsRequested(): ?array
    {
        return $this->seatsRequested;
    }

    /**
     * @param int[] $seatsRequested
     *
     * @return self
     */
    public function setSeatsRequested(?array $seatsRequested): self
    {
        $this->seatsRequested = $seatsRequested;

        return $this;
    }

    /**
     * If true, this request is for a specific PTC and only fares applicable to that PTC will be checked and returned. It is the same as XOFares flag in Intellisell request.
     *
     * @return bool
     */
    public function getSpecificPTCIndicator(): ?bool
    {
        return $this->specificPTCIndicator;
    }

    /**
     * If true, this request is for a specific PTC and only fares applicable to that PTC will be checked and returned. It is the same as XOFares flag in Intellisell request.
     *
     * @param bool $specificPTCIndicator
     *
     * @return self
     */
    public function setSpecificPTCIndicator(?bool $specificPTCIndicator): self
    {
        $this->specificPTCIndicator = $specificPTCIndicator;

        return $this;
    }

    /**
     * Additional elements and attributes to be included if required, per Trading Partner Agreement (TPA).
     *
     * @return OrgOpentravelOta200305TravelerInfoSummaryTPAExtensionsType
     */
    public function getTPAExtensions(): ?OrgOpentravelOta200305TravelerInfoSummaryTPAExtensionsType
    {
        return $this->tPAExtensions;
    }

    /**
     * Additional elements and attributes to be included if required, per Trading Partner Agreement (TPA).
     *
     * @param OrgOpentravelOta200305TravelerInfoSummaryTPAExtensionsType $tPAExtensions
     *
     * @return self
     */
    public function setTPAExtensions(?OrgOpentravelOta200305TravelerInfoSummaryTPAExtensionsType $tPAExtensions): self
    {
        $this->tPAExtensions = $tPAExtensions;

        return $this;
    }
}
