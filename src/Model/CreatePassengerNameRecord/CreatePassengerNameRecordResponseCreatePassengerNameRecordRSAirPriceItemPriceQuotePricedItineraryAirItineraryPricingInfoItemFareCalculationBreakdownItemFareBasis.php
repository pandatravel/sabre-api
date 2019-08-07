<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Ammonkc\SabreApi\Model\CreatePassengerNameRecord;

use Ammonkc\SabreApi\AbstractModel;

class CreatePassengerNameRecordResponseCreatePassengerNameRecordRSAirPriceItemPriceQuotePricedItineraryAirItineraryPricingInfoItemFareCalculationBreakdownItemFareBasis extends AbstractModel
{
    /**
     * The fare basis code.
     *
     * @var string
     */
    protected $code;
    /**
     * The contract number.
     *
     * @var string
     */
    protected $contractNumber;
    /**
     * The corporate ID.
     *
     * @var string
     */
    protected $corporateID;
    /**
     * The inclusive tour code.
     *
     * @var string
     */
    protected $inclusiveTour;
    /**
     * The fare amount.
     *
     * @var string
     */
    protected $fareAmount;
    /**
     * The passenger type associated with the particular fare basis code.
     *
     * @var string
     */
    protected $farePassengerType;
    /**
     * Fare type associated with the particular fare basis code.
     *
     * @var string
     */
    protected $fareType;
    /**
     * The filing carrier.
     *
     * @var string
     */
    protected $filingCarrier;
    /**
     * The global indicator.
     *
     * @var string
     */
    protected $globalInd;
    /**
     * The trip type indicator.
     *
     * @var string
     */
    protected $tripTypeInd;
    /**
     * The market.
     *
     * @var string
     */
    protected $market;
    /**
     * Indicates that the fare basis is associated with an ARNK segment.
     *
     * @var string
     */
    protected $surfaceSegment;
    /**
     * The ticket designator.
     *
     * @var string
     */
    protected $ticketDesignator;
    /**
     * The cabin code.
     *
     * @var string
     */
    protected $cabin;

    /**
     * The fare basis code.
     *
     * @return string|null
     */
    public function getCode(): ?string
    {
        return $this->code;
    }

    /**
     * The fare basis code.
     *
     * @param string|null $code
     *
     * @return self
     */
    public function setCode(?string $code): self
    {
        $this->code = $code;

        return $this;
    }

    /**
     * The contract number.
     *
     * @return string|null
     */
    public function getContractNumber(): ?string
    {
        return $this->contractNumber;
    }

    /**
     * The contract number.
     *
     * @param string|null $contractNumber
     *
     * @return self
     */
    public function setContractNumber(?string $contractNumber): self
    {
        $this->contractNumber = $contractNumber;

        return $this;
    }

    /**
     * The corporate ID.
     *
     * @return string|null
     */
    public function getCorporateID(): ?string
    {
        return $this->corporateID;
    }

    /**
     * The corporate ID.
     *
     * @param string|null $corporateID
     *
     * @return self
     */
    public function setCorporateID(?string $corporateID): self
    {
        $this->corporateID = $corporateID;

        return $this;
    }

    /**
     * The inclusive tour code.
     *
     * @return string|null
     */
    public function getInclusiveTour(): ?string
    {
        return $this->inclusiveTour;
    }

    /**
     * The inclusive tour code.
     *
     * @param string|null $inclusiveTour
     *
     * @return self
     */
    public function setInclusiveTour(?string $inclusiveTour): self
    {
        $this->inclusiveTour = $inclusiveTour;

        return $this;
    }

    /**
     * The fare amount.
     *
     * @return string|null
     */
    public function getFareAmount(): ?string
    {
        return $this->fareAmount;
    }

    /**
     * The fare amount.
     *
     * @param string|null $fareAmount
     *
     * @return self
     */
    public function setFareAmount(?string $fareAmount): self
    {
        $this->fareAmount = $fareAmount;

        return $this;
    }

    /**
     * The passenger type associated with the particular fare basis code.
     *
     * @return string|null
     */
    public function getFarePassengerType(): ?string
    {
        return $this->farePassengerType;
    }

    /**
     * The passenger type associated with the particular fare basis code.
     *
     * @param string|null $farePassengerType
     *
     * @return self
     */
    public function setFarePassengerType(?string $farePassengerType): self
    {
        $this->farePassengerType = $farePassengerType;

        return $this;
    }

    /**
     * Fare type associated with the particular fare basis code.
     *
     * @return string|null
     */
    public function getFareType(): ?string
    {
        return $this->fareType;
    }

    /**
     * Fare type associated with the particular fare basis code.
     *
     * @param string|null $fareType
     *
     * @return self
     */
    public function setFareType(?string $fareType): self
    {
        $this->fareType = $fareType;

        return $this;
    }

    /**
     * The filing carrier.
     *
     * @return string|null
     */
    public function getFilingCarrier(): ?string
    {
        return $this->filingCarrier;
    }

    /**
     * The filing carrier.
     *
     * @param string|null $filingCarrier
     *
     * @return self
     */
    public function setFilingCarrier(?string $filingCarrier): self
    {
        $this->filingCarrier = $filingCarrier;

        return $this;
    }

    /**
     * The global indicator.
     *
     * @return string|null
     */
    public function getGlobalInd(): ?string
    {
        return $this->globalInd;
    }

    /**
     * The global indicator.
     *
     * @param string|null $globalInd
     *
     * @return self
     */
    public function setGlobalInd(?string $globalInd): self
    {
        $this->globalInd = $globalInd;

        return $this;
    }

    /**
     * The trip type indicator.
     *
     * @return string|null
     */
    public function getTripTypeInd(): ?string
    {
        return $this->tripTypeInd;
    }

    /**
     * The trip type indicator.
     *
     * @param string|null $tripTypeInd
     *
     * @return self
     */
    public function setTripTypeInd(?string $tripTypeInd): self
    {
        $this->tripTypeInd = $tripTypeInd;

        return $this;
    }

    /**
     * The market.
     *
     * @return string|null
     */
    public function getMarket(): ?string
    {
        return $this->market;
    }

    /**
     * The market.
     *
     * @param string|null $market
     *
     * @return self
     */
    public function setMarket(?string $market): self
    {
        $this->market = $market;

        return $this;
    }

    /**
     * Indicates that the fare basis is associated with an ARNK segment.
     *
     * @return string|null
     */
    public function getSurfaceSegment(): ?string
    {
        return $this->surfaceSegment;
    }

    /**
     * Indicates that the fare basis is associated with an ARNK segment.
     *
     * @param string|null $surfaceSegment
     *
     * @return self
     */
    public function setSurfaceSegment(?string $surfaceSegment): self
    {
        $this->surfaceSegment = $surfaceSegment;

        return $this;
    }

    /**
     * The ticket designator.
     *
     * @return string|null
     */
    public function getTicketDesignator(): ?string
    {
        return $this->ticketDesignator;
    }

    /**
     * The ticket designator.
     *
     * @param string|null $ticketDesignator
     *
     * @return self
     */
    public function setTicketDesignator(?string $ticketDesignator): self
    {
        $this->ticketDesignator = $ticketDesignator;

        return $this;
    }

    /**
     * The cabin code.
     *
     * @return string|null
     */
    public function getCabin(): ?string
    {
        return $this->cabin;
    }

    /**
     * The cabin code.
     *
     * @param string|null $cabin
     *
     * @return self
     */
    public function setCabin(?string $cabin): self
    {
        $this->cabin = $cabin;

        return $this;
    }
}
