<?php

namespace Ammonkc\SabreApi\Model\BargainFinderMax;

use Ammonkc\SabreApi\AbstractModel;

class ItineraryType extends AbstractModel
{
    /**
     * @var bool
     */
    protected $currentItinerary;
    /**
     * @var DiversitySwapperType
     */
    protected $diversitySwapper;
    /**
     * @var FailedType
     */
    protected $failed;
    /**
     * @var int
     */
    protected $id;
    /**
     * @var string
     */
    protected $itinSource;
    /**
     * @var LegIDType[]
     */
    protected $legs;
    /**
     * @var PricingInformationType[]
     */
    protected $pricingInformation;
    /**
     * @var string
     */
    protected $pricingSource;
    /**
     * @var bool
     */
    protected $routingItinerary;

    /**
     * @return bool
     */
    public function getCurrentItinerary(): bool
    {
        return $this->currentItinerary;
    }

    /**
     * @param bool $currentItinerary
     *
     * @return self
     */
    public function setCurrentItinerary(bool $currentItinerary): self
    {
        $this->currentItinerary = $currentItinerary;

        return $this;
    }

    /**
     * @return DiversitySwapperType
     */
    public function getDiversitySwapper(): DiversitySwapperType
    {
        return $this->diversitySwapper;
    }

    /**
     * @param DiversitySwapperType $diversitySwapper
     *
     * @return self
     */
    public function setDiversitySwapper(DiversitySwapperType $diversitySwapper): self
    {
        $this->diversitySwapper = $diversitySwapper;

        return $this;
    }

    /**
     * @return FailedType
     */
    public function getFailed(): FailedType
    {
        return $this->failed;
    }

    /**
     * @param FailedType $failed
     *
     * @return self
     */
    public function setFailed(FailedType $failed): self
    {
        $this->failed = $failed;

        return $this;
    }

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param int $id
     *
     * @return self
     */
    public function setId(int $id): self
    {
        $this->id = $id;

        return $this;
    }

    /**
     * @return string
     */
    public function getItinSource(): string
    {
        return $this->itinSource;
    }

    /**
     * @param string $itinSource
     *
     * @return self
     */
    public function setItinSource(string $itinSource): self
    {
        $this->itinSource = $itinSource;

        return $this;
    }

    /**
     * @return LegIDType[]
     */
    public function getLegs(): array
    {
        return $this->legs;
    }

    /**
     * @param LegIDType[] $legs
     *
     * @return self
     */
    public function setLegs(array $legs): self
    {
        $this->legs = $legs;

        return $this;
    }

    /**
     * @return PricingInformationType[]
     */
    public function getPricingInformation(): array
    {
        return $this->pricingInformation;
    }

    /**
     * @param PricingInformationType[] $pricingInformation
     *
     * @return self
     */
    public function setPricingInformation(array $pricingInformation): self
    {
        $this->pricingInformation = $pricingInformation;

        return $this;
    }

    /**
     * @return string
     */
    public function getPricingSource(): string
    {
        return $this->pricingSource;
    }

    /**
     * @param string $pricingSource
     *
     * @return self
     */
    public function setPricingSource(string $pricingSource): self
    {
        $this->pricingSource = $pricingSource;

        return $this;
    }

    /**
     * @return bool
     */
    public function getRoutingItinerary(): bool
    {
        return $this->routingItinerary;
    }

    /**
     * @param bool $routingItinerary
     *
     * @return self
     */
    public function setRoutingItinerary(bool $routingItinerary): self
    {
        $this->routingItinerary = $routingItinerary;

        return $this;
    }
}
