<?php

namespace Ammonkc\SabreApi\Model\BargainFinderMax;

use Ammonkc\SabreApi\AbstractModel;

class PricingInformationType extends AbstractModel
{
    /**
     * @var string
     */
    protected $poSCountryCode;
    /**
     * @var string
     */
    protected $brand;
    /**
     * @var bool
     */
    protected $brandsOnAnyMarket;
    /**
     * @var Cached
     */
    protected $cached;
    /**
     * @var FareType
     */
    protected $fare;
    /**
     * @var int
     */
    protected $flexibleFare;
    /**
     * @var Offer
     */
    protected $offer;
    /**
     * @var int
     */
    protected $passengerGroup;
    /**
     * @var string
     */
    protected $pricingSubsource;
    /**
     * @var string
     */
    protected $program;
    /**
     * @var string
     */
    protected $pseudoCityCode;
    /**
     * @var bool
     */
    protected $revalidated;
    /**
     * @var SoldOutType
     */
    protected $soldOut;
    /**
     * @var TicketType[]
     */
    protected $tickets;

    /**
     * @return string
     */
    public function getPoSCountryCode(): ?string
    {
        return $this->poSCountryCode;
    }

    /**
     * @param string $poSCountryCode
     *
     * @return self
     */
    public function setPoSCountryCode(?string $poSCountryCode): self
    {
        $this->poSCountryCode = $poSCountryCode;

        return $this;
    }

    /**
     * @return string
     */
    public function getBrand(): ?string
    {
        return $this->brand;
    }

    /**
     * @param string $brand
     *
     * @return self
     */
    public function setBrand(?string $brand): self
    {
        $this->brand = $brand;

        return $this;
    }

    /**
     * @return bool
     */
    public function getBrandsOnAnyMarket(): ?bool
    {
        return $this->brandsOnAnyMarket;
    }

    /**
     * @param bool $brandsOnAnyMarket
     *
     * @return self
     */
    public function setBrandsOnAnyMarket(?bool $brandsOnAnyMarket): self
    {
        $this->brandsOnAnyMarket = $brandsOnAnyMarket;

        return $this;
    }

    /**
     * @return Cached
     */
    public function getCached(): ?Cached
    {
        return $this->cached;
    }

    /**
     * @param Cached $cached
     *
     * @return self
     */
    public function setCached(?Cached $cached): self
    {
        $this->cached = $cached;

        return $this;
    }

    /**
     * @return FareType
     */
    public function getFare(): ?FareType
    {
        return $this->fare;
    }

    /**
     * @param FareType $fare
     *
     * @return self
     */
    public function setFare(?FareType $fare): self
    {
        $this->fare = $fare;

        return $this;
    }

    /**
     * @return int
     */
    public function getFlexibleFare(): ?int
    {
        return $this->flexibleFare;
    }

    /**
     * @param int $flexibleFare
     *
     * @return self
     */
    public function setFlexibleFare(?int $flexibleFare): self
    {
        $this->flexibleFare = $flexibleFare;

        return $this;
    }

    /**
     * @return Offer
     */
    public function getOffer(): ?Offer
    {
        return $this->offer;
    }

    /**
     * @param Offer $offer
     *
     * @return self
     */
    public function setOffer(?Offer $offer): self
    {
        $this->offer = $offer;

        return $this;
    }

    /**
     * @return int
     */
    public function getPassengerGroup(): ?int
    {
        return $this->passengerGroup;
    }

    /**
     * @param int $passengerGroup
     *
     * @return self
     */
    public function setPassengerGroup(?int $passengerGroup): self
    {
        $this->passengerGroup = $passengerGroup;

        return $this;
    }

    /**
     * @return string
     */
    public function getPricingSubsource(): ?string
    {
        return $this->pricingSubsource;
    }

    /**
     * @param string $pricingSubsource
     *
     * @return self
     */
    public function setPricingSubsource(?string $pricingSubsource): self
    {
        $this->pricingSubsource = $pricingSubsource;

        return $this;
    }

    /**
     * @return string
     */
    public function getProgram(): ?string
    {
        return $this->program;
    }

    /**
     * @param string $program
     *
     * @return self
     */
    public function setProgram(?string $program): self
    {
        $this->program = $program;

        return $this;
    }

    /**
     * @return string
     */
    public function getPseudoCityCode(): ?string
    {
        return $this->pseudoCityCode;
    }

    /**
     * @param string $pseudoCityCode
     *
     * @return self
     */
    public function setPseudoCityCode(?string $pseudoCityCode): self
    {
        $this->pseudoCityCode = $pseudoCityCode;

        return $this;
    }

    /**
     * @return bool
     */
    public function getRevalidated(): ?bool
    {
        return $this->revalidated;
    }

    /**
     * @param bool $revalidated
     *
     * @return self
     */
    public function setRevalidated(?bool $revalidated): self
    {
        $this->revalidated = $revalidated;

        return $this;
    }

    /**
     * @return SoldOutType
     */
    public function getSoldOut(): ?SoldOutType
    {
        return $this->soldOut;
    }

    /**
     * @param SoldOutType $soldOut
     *
     * @return self
     */
    public function setSoldOut(?SoldOutType $soldOut): self
    {
        $this->soldOut = $soldOut;

        return $this;
    }

    /**
     * @return TicketType[]
     */
    public function getTickets(): ?array
    {
        return $this->tickets;
    }

    /**
     * @param TicketType[] $tickets
     *
     * @return self
     */
    public function setTickets(?array $tickets): self
    {
        $this->tickets = $tickets;

        return $this;
    }
}
