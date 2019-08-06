<?php

namespace Ammonkc\SabreApi\Model\BargainFinderMax;

use Ammonkc\SabreApi\AbstractModel;

class FareType extends AbstractModel
{
    /**
     * @var AncillaryFeeGroupType
     */
    protected $ancillaryFeeGroup;
    /**
     * @var bool
     */
    protected $divideByParty;
    /**
     * @var bool
     */
    protected $eTicketable;
    /**
     * @var string
     */
    protected $governingCarriers;
    /**
     * @var string
     */
    protected $lastTicketDate;
    /**
     * @var string
     */
    protected $offerItemId;
    /**
     * @var PassengerInfoListElementType[]
     */
    protected $passengerInfoList;
    /**
     * @var bool
     */
    protected $reissue;
    /**
     * @var string
     */
    protected $reissueText;
    /**
     * @var string
     */
    protected $serviceId;
    /**
     * @var bool
     */
    protected $simultaneousReservation;
    /**
     * @var string
     */
    protected $spanishFamilyDiscount;
    /**
     * @var TotalFareType
     */
    protected $totalFare;
    /**
     * @var string
     */
    protected $validatingCarrierCode;
    /**
     * @var ValidatingCarrierIDType[]
     */
    protected $validatingCarriers;
    /**
     * @var bool
     */
    protected $vita;

    /**
     * @return AncillaryFeeGroupType
     */
    public function getAncillaryFeeGroup(): AncillaryFeeGroupType
    {
        return $this->ancillaryFeeGroup;
    }

    /**
     * @param AncillaryFeeGroupType $ancillaryFeeGroup
     *
     * @return self
     */
    public function setAncillaryFeeGroup(AncillaryFeeGroupType $ancillaryFeeGroup): self
    {
        $this->ancillaryFeeGroup = $ancillaryFeeGroup;

        return $this;
    }

    /**
     * @return bool
     */
    public function getDivideByParty(): bool
    {
        return $this->divideByParty;
    }

    /**
     * @param bool $divideByParty
     *
     * @return self
     */
    public function setDivideByParty(bool $divideByParty): self
    {
        $this->divideByParty = $divideByParty;

        return $this;
    }

    /**
     * @return bool
     */
    public function getETicketable(): bool
    {
        return $this->eTicketable;
    }

    /**
     * @param bool $eTicketable
     *
     * @return self
     */
    public function setETicketable(bool $eTicketable): self
    {
        $this->eTicketable = $eTicketable;

        return $this;
    }

    /**
     * @return string
     */
    public function getGoverningCarriers(): string
    {
        return $this->governingCarriers;
    }

    /**
     * @param string $governingCarriers
     *
     * @return self
     */
    public function setGoverningCarriers(string $governingCarriers): self
    {
        $this->governingCarriers = $governingCarriers;

        return $this;
    }

    /**
     * @return string
     */
    public function getLastTicketDate(): string
    {
        return $this->lastTicketDate;
    }

    /**
     * @param string $lastTicketDate
     *
     * @return self
     */
    public function setLastTicketDate(string $lastTicketDate): self
    {
        $this->lastTicketDate = $lastTicketDate;

        return $this;
    }

    /**
     * @return string
     */
    public function getOfferItemId(): string
    {
        return $this->offerItemId;
    }

    /**
     * @param string $offerItemId
     *
     * @return self
     */
    public function setOfferItemId(string $offerItemId): self
    {
        $this->offerItemId = $offerItemId;

        return $this;
    }

    /**
     * @return PassengerInfoListElementType[]
     */
    public function getPassengerInfoList(): array
    {
        return $this->passengerInfoList;
    }

    /**
     * @param PassengerInfoListElementType[] $passengerInfoList
     *
     * @return self
     */
    public function setPassengerInfoList(array $passengerInfoList): self
    {
        $this->passengerInfoList = $passengerInfoList;

        return $this;
    }

    /**
     * @return bool
     */
    public function getReissue(): bool
    {
        return $this->reissue;
    }

    /**
     * @param bool $reissue
     *
     * @return self
     */
    public function setReissue(bool $reissue): self
    {
        $this->reissue = $reissue;

        return $this;
    }

    /**
     * @return string
     */
    public function getReissueText(): string
    {
        return $this->reissueText;
    }

    /**
     * @param string $reissueText
     *
     * @return self
     */
    public function setReissueText(string $reissueText): self
    {
        $this->reissueText = $reissueText;

        return $this;
    }

    /**
     * @return string
     */
    public function getServiceId(): string
    {
        return $this->serviceId;
    }

    /**
     * @param string $serviceId
     *
     * @return self
     */
    public function setServiceId(string $serviceId): self
    {
        $this->serviceId = $serviceId;

        return $this;
    }

    /**
     * @return bool
     */
    public function getSimultaneousReservation(): bool
    {
        return $this->simultaneousReservation;
    }

    /**
     * @param bool $simultaneousReservation
     *
     * @return self
     */
    public function setSimultaneousReservation(bool $simultaneousReservation): self
    {
        $this->simultaneousReservation = $simultaneousReservation;

        return $this;
    }

    /**
     * @return string
     */
    public function getSpanishFamilyDiscount(): string
    {
        return $this->spanishFamilyDiscount;
    }

    /**
     * @param string $spanishFamilyDiscount
     *
     * @return self
     */
    public function setSpanishFamilyDiscount(string $spanishFamilyDiscount): self
    {
        $this->spanishFamilyDiscount = $spanishFamilyDiscount;

        return $this;
    }

    /**
     * @return TotalFareType
     */
    public function getTotalFare(): TotalFareType
    {
        return $this->totalFare;
    }

    /**
     * @param TotalFareType $totalFare
     *
     * @return self
     */
    public function setTotalFare(TotalFareType $totalFare): self
    {
        $this->totalFare = $totalFare;

        return $this;
    }

    /**
     * @return string
     */
    public function getValidatingCarrierCode(): string
    {
        return $this->validatingCarrierCode;
    }

    /**
     * @param string $validatingCarrierCode
     *
     * @return self
     */
    public function setValidatingCarrierCode(string $validatingCarrierCode): self
    {
        $this->validatingCarrierCode = $validatingCarrierCode;

        return $this;
    }

    /**
     * @return ValidatingCarrierIDType[]
     */
    public function getValidatingCarriers(): array
    {
        return $this->validatingCarriers;
    }

    /**
     * @param ValidatingCarrierIDType[] $validatingCarriers
     *
     * @return self
     */
    public function setValidatingCarriers(array $validatingCarriers): self
    {
        $this->validatingCarriers = $validatingCarriers;

        return $this;
    }

    /**
     * @return bool
     */
    public function getVita(): bool
    {
        return $this->vita;
    }

    /**
     * @param bool $vita
     *
     * @return self
     */
    public function setVita(bool $vita): self
    {
        $this->vita = $vita;

        return $this;
    }
}
