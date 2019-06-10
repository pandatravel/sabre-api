<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Ammonkc\SabreApi\Model\CreatePassengerNameRecord;

use Ammonkc\SabreApi\AbstractModel;

class CreatePassengerNameRecordResponseCreatePassengerNameRecordRSAirPriceItemPriceQuotePricedItineraryAirItineraryPricingInfoItemPTCFareBreakdownItemFareBasis extends AbstractModel
{
    /**
     * Fare basis code.
     *
     * @var string
     */
    protected $code;
    /**
     * Contract number.
     *
     * @var string
     */
    protected $contractNumber;
    /**
     * Corporate ID.
     *
     * @var string
     */
    protected $corporateID;
    /**
     * Fare Amount.
     *
     * @var string
     */
    protected $fareAmount;
    /**
     * Passenger type associated with the fare basis code.
     *
     * @var string
     */
    protected $farePassengerType;
    /**
     * Fare Type.
     *
     * @var string
     */
    protected $fareType;
    /**
     * Filing carrier.
     *
     * @var string
     */
    protected $filingCarrier;
    /**
     * Global indicator.
     *
     * @var string
     */
    protected $globalInd;
    /**
     * Market.
     *
     * @var string
     */
    protected $market;
    /**
     * Indicates that the particular fare basis is associated with an ARNK segment.
     *
     * @var string
     */
    protected $surfaceSegment;
    /**
     * TicketDesignator associated with the particular fare basis code.
     *
     * @var string
     */
    protected $ticketDesignator;

    /**
     * Fare basis code.
     *
     * @return string
     */
    public function getCode(): ?string
    {
        return $this->code;
    }

    /**
     * Fare basis code.
     *
     * @param string $code
     *
     * @return self
     */
    public function setCode(?string $code): self
    {
        $this->code = $code;

        return $this;
    }

    /**
     * Contract number.
     *
     * @return string
     */
    public function getContractNumber(): ?string
    {
        return $this->contractNumber;
    }

    /**
     * Contract number.
     *
     * @param string $contractNumber
     *
     * @return self
     */
    public function setContractNumber(?string $contractNumber): self
    {
        $this->contractNumber = $contractNumber;

        return $this;
    }

    /**
     * Corporate ID.
     *
     * @return string
     */
    public function getCorporateID(): ?string
    {
        return $this->corporateID;
    }

    /**
     * Corporate ID.
     *
     * @param string $corporateID
     *
     * @return self
     */
    public function setCorporateID(?string $corporateID): self
    {
        $this->corporateID = $corporateID;

        return $this;
    }

    /**
     * Fare Amount.
     *
     * @return string
     */
    public function getFareAmount(): ?string
    {
        return $this->fareAmount;
    }

    /**
     * Fare Amount.
     *
     * @param string $fareAmount
     *
     * @return self
     */
    public function setFareAmount(?string $fareAmount): self
    {
        $this->fareAmount = $fareAmount;

        return $this;
    }

    /**
     * Passenger type associated with the fare basis code.
     *
     * @return string
     */
    public function getFarePassengerType(): ?string
    {
        return $this->farePassengerType;
    }

    /**
     * Passenger type associated with the fare basis code.
     *
     * @param string $farePassengerType
     *
     * @return self
     */
    public function setFarePassengerType(?string $farePassengerType): self
    {
        $this->farePassengerType = $farePassengerType;

        return $this;
    }

    /**
     * Fare Type.
     *
     * @return string
     */
    public function getFareType(): ?string
    {
        return $this->fareType;
    }

    /**
     * Fare Type.
     *
     * @param string $fareType
     *
     * @return self
     */
    public function setFareType(?string $fareType): self
    {
        $this->fareType = $fareType;

        return $this;
    }

    /**
     * Filing carrier.
     *
     * @return string
     */
    public function getFilingCarrier(): ?string
    {
        return $this->filingCarrier;
    }

    /**
     * Filing carrier.
     *
     * @param string $filingCarrier
     *
     * @return self
     */
    public function setFilingCarrier(?string $filingCarrier): self
    {
        $this->filingCarrier = $filingCarrier;

        return $this;
    }

    /**
     * Global indicator.
     *
     * @return string
     */
    public function getGlobalInd(): ?string
    {
        return $this->globalInd;
    }

    /**
     * Global indicator.
     *
     * @param string $globalInd
     *
     * @return self
     */
    public function setGlobalInd(?string $globalInd): self
    {
        $this->globalInd = $globalInd;

        return $this;
    }

    /**
     * Market.
     *
     * @return string
     */
    public function getMarket(): ?string
    {
        return $this->market;
    }

    /**
     * Market.
     *
     * @param string $market
     *
     * @return self
     */
    public function setMarket(?string $market): self
    {
        $this->market = $market;

        return $this;
    }

    /**
     * Indicates that the particular fare basis is associated with an ARNK segment.
     *
     * @return string
     */
    public function getSurfaceSegment(): ?string
    {
        return $this->surfaceSegment;
    }

    /**
     * Indicates that the particular fare basis is associated with an ARNK segment.
     *
     * @param string $surfaceSegment
     *
     * @return self
     */
    public function setSurfaceSegment(?string $surfaceSegment): self
    {
        $this->surfaceSegment = $surfaceSegment;

        return $this;
    }

    /**
     * TicketDesignator associated with the particular fare basis code.
     *
     * @return string
     */
    public function getTicketDesignator(): ?string
    {
        return $this->ticketDesignator;
    }

    /**
     * TicketDesignator associated with the particular fare basis code.
     *
     * @param string $ticketDesignator
     *
     * @return self
     */
    public function setTicketDesignator(?string $ticketDesignator): self
    {
        $this->ticketDesignator = $ticketDesignator;

        return $this;
    }
}
