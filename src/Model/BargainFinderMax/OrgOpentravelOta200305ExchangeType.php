<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Ammonkc\SabreApi\Model\BargainFinderMax;

use Ammonkc\SabreApi\AbstractModel;

class OrgOpentravelOta200305ExchangeType extends AbstractModel
{
    /**
     * @var OrgOpentravelOta200305ArunkType[]
     */
    protected $arunk;
    /**
     * Bypass Advance Purchase Option.
     *
     * @var string
     */
    protected $bypassAdvancePurchaseOption;
    /**
     * Exchanged ticket issue date and time.
     *
     * @var string
     */
    protected $exchangedTktIssueDateTime;
    /**
     * @var OrgOpentravelOta200305ExchangeFareType
     */
    protected $fare;
    /**
     * Number of tax boxes.
     *
     * @var float
     */
    protected $numberOfTaxBoxes;
    /**
     * @var OrgOpentravelOta200305ExchangeOriginDestinationInformationType[]
     */
    protected $originDestinationInformation;
    /**
     * Original ticket issue date and time.
     *
     * @var string
     */
    protected $originalTktIssueDateTime;
    /**
     * @var OrgOpentravelOta200305ExchangePOSType
     */
    protected $pOS;
    /**
     * Previous exchange date and time.
     *
     * @var string
     */
    protected $previousExchangeDateTime;
    /**
     * @var OrgOpentravelOta200305ExchangeTPAExtensionsType
     */
    protected $tPAExtensions;
    /**
     * @var OrgOpentravelOta200305ExchangeAirSearchPrefsType
     */
    protected $travelPreferences;
    /**
     * Specifies passenger numbers and types.
     *
     * @var OrgOpentravelOta200305TravelerInfoSummaryType
     */
    protected $travelerInfoSummary;

    /**
     * @return OrgOpentravelOta200305ArunkType[]|null
     */
    public function getArunk(): ?array
    {
        return $this->arunk;
    }

    /**
     * @param OrgOpentravelOta200305ArunkType[]|null $arunk
     *
     * @return self
     */
    public function setArunk(?array $arunk): self
    {
        $this->arunk = $arunk;

        return $this;
    }

    /**
     * Bypass Advance Purchase Option.
     *
     * @return string|null
     */
    public function getBypassAdvancePurchaseOption(): ?string
    {
        return $this->bypassAdvancePurchaseOption;
    }

    /**
     * Bypass Advance Purchase Option.
     *
     * @param string|null $bypassAdvancePurchaseOption
     *
     * @return self
     */
    public function setBypassAdvancePurchaseOption(?string $bypassAdvancePurchaseOption): self
    {
        $this->bypassAdvancePurchaseOption = $bypassAdvancePurchaseOption;

        return $this;
    }

    /**
     * Exchanged ticket issue date and time.
     *
     * @return string|null
     */
    public function getExchangedTktIssueDateTime(): ?string
    {
        return $this->exchangedTktIssueDateTime;
    }

    /**
     * Exchanged ticket issue date and time.
     *
     * @param string|null $exchangedTktIssueDateTime
     *
     * @return self
     */
    public function setExchangedTktIssueDateTime(?string $exchangedTktIssueDateTime): self
    {
        $this->exchangedTktIssueDateTime = $exchangedTktIssueDateTime;

        return $this;
    }

    /**
     * @return OrgOpentravelOta200305ExchangeFareType|null
     */
    public function getFare(): ?OrgOpentravelOta200305ExchangeFareType
    {
        return $this->fare;
    }

    /**
     * @param OrgOpentravelOta200305ExchangeFareType|null $fare
     *
     * @return self
     */
    public function setFare(?OrgOpentravelOta200305ExchangeFareType $fare): self
    {
        $this->fare = $fare;

        return $this;
    }

    /**
     * Number of tax boxes.
     *
     * @return float|null
     */
    public function getNumberOfTaxBoxes(): ?float
    {
        return $this->numberOfTaxBoxes;
    }

    /**
     * Number of tax boxes.
     *
     * @param float|null $numberOfTaxBoxes
     *
     * @return self
     */
    public function setNumberOfTaxBoxes(?float $numberOfTaxBoxes): self
    {
        $this->numberOfTaxBoxes = $numberOfTaxBoxes;

        return $this;
    }

    /**
     * @return OrgOpentravelOta200305ExchangeOriginDestinationInformationType[]|null
     */
    public function getOriginDestinationInformation(): ?array
    {
        return $this->originDestinationInformation;
    }

    /**
     * @param OrgOpentravelOta200305ExchangeOriginDestinationInformationType[]|null $originDestinationInformation
     *
     * @return self
     */
    public function setOriginDestinationInformation(?array $originDestinationInformation): self
    {
        $this->originDestinationInformation = $originDestinationInformation;

        return $this;
    }

    /**
     * Original ticket issue date and time.
     *
     * @return string|null
     */
    public function getOriginalTktIssueDateTime(): ?string
    {
        return $this->originalTktIssueDateTime;
    }

    /**
     * Original ticket issue date and time.
     *
     * @param string|null $originalTktIssueDateTime
     *
     * @return self
     */
    public function setOriginalTktIssueDateTime(?string $originalTktIssueDateTime): self
    {
        $this->originalTktIssueDateTime = $originalTktIssueDateTime;

        return $this;
    }

    /**
     * @return OrgOpentravelOta200305ExchangePOSType|null
     */
    public function getPOS(): ?OrgOpentravelOta200305ExchangePOSType
    {
        return $this->pOS;
    }

    /**
     * @param OrgOpentravelOta200305ExchangePOSType|null $pOS
     *
     * @return self
     */
    public function setPOS(?OrgOpentravelOta200305ExchangePOSType $pOS): self
    {
        $this->pOS = $pOS;

        return $this;
    }

    /**
     * Previous exchange date and time.
     *
     * @return string|null
     */
    public function getPreviousExchangeDateTime(): ?string
    {
        return $this->previousExchangeDateTime;
    }

    /**
     * Previous exchange date and time.
     *
     * @param string|null $previousExchangeDateTime
     *
     * @return self
     */
    public function setPreviousExchangeDateTime(?string $previousExchangeDateTime): self
    {
        $this->previousExchangeDateTime = $previousExchangeDateTime;

        return $this;
    }

    /**
     * @return OrgOpentravelOta200305ExchangeTPAExtensionsType|null
     */
    public function getTPAExtensions(): ?OrgOpentravelOta200305ExchangeTPAExtensionsType
    {
        return $this->tPAExtensions;
    }

    /**
     * @param OrgOpentravelOta200305ExchangeTPAExtensionsType|null $tPAExtensions
     *
     * @return self
     */
    public function setTPAExtensions(?OrgOpentravelOta200305ExchangeTPAExtensionsType $tPAExtensions): self
    {
        $this->tPAExtensions = $tPAExtensions;

        return $this;
    }

    /**
     * @return OrgOpentravelOta200305ExchangeAirSearchPrefsType|null
     */
    public function getTravelPreferences(): ?OrgOpentravelOta200305ExchangeAirSearchPrefsType
    {
        return $this->travelPreferences;
    }

    /**
     * @param OrgOpentravelOta200305ExchangeAirSearchPrefsType|null $travelPreferences
     *
     * @return self
     */
    public function setTravelPreferences(?OrgOpentravelOta200305ExchangeAirSearchPrefsType $travelPreferences): self
    {
        $this->travelPreferences = $travelPreferences;

        return $this;
    }

    /**
     * Specifies passenger numbers and types.
     *
     * @return OrgOpentravelOta200305TravelerInfoSummaryType|null
     */
    public function getTravelerInfoSummary(): ?OrgOpentravelOta200305TravelerInfoSummaryType
    {
        return $this->travelerInfoSummary;
    }

    /**
     * Specifies passenger numbers and types.
     *
     * @param OrgOpentravelOta200305TravelerInfoSummaryType|null $travelerInfoSummary
     *
     * @return self
     */
    public function setTravelerInfoSummary(?OrgOpentravelOta200305TravelerInfoSummaryType $travelerInfoSummary): self
    {
        $this->travelerInfoSummary = $travelerInfoSummary;

        return $this;
    }
}
