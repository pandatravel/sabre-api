<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Ammonkc\SabreApi\Model\CreatePassengerNameRecord;

use Ammonkc\SabreApi\AbstractModel;

class CreatePassengerNameRecordResponseCreatePassengerNameRecordRSAirPriceItemPriceQuotePricedItineraryAirItineraryPricingInfoItemFareCalculationBreakdownItemMileage extends AbstractModel
{
    /**
     * The returned when an extra mileage allowance is applicable.
     *
     * @var string
     */
    protected $extraAllowanceInd;
    /**
     * Returned when a ticketed point is excluded from mileage calculation of a fare.
     *
     * @var string
     */
    protected $mileageExclusionInd;
    /**
     * Returned when there is a reduction on the fare based on mileage.
     *
     * @var string
     */
    protected $mileageReductionPTInd;
    /**
     * Returned when a fare is applicable to more than one destination.
     *
     * @var string
     */
    protected $mileageEqualizationInd;
    /**
     * Indicates that the fare was computed on the mileage system.
     *
     * @var string
     */
    protected $mileageSymbol;
    /**
     * Indicates the percentage of a mileage surcharge applied.
     *
     * @var string
     */
    protected $mileageSurchargeInd;
    /**
     * The Construction City Code associated with the higher intermediate point.
     *
     * @var string
     */
    protected $hIPConstructionCityCode;
    /**
     * The City Codes associated with the higher intermediate point.
     *
     * @var string
     */
    protected $hIPCityCodes;

    /**
     * The returned when an extra mileage allowance is applicable.
     *
     * @return string|null
     */
    public function getExtraAllowanceInd(): ?string
    {
        return $this->extraAllowanceInd;
    }

    /**
     * The returned when an extra mileage allowance is applicable.
     *
     * @param string|null $extraAllowanceInd
     *
     * @return self
     */
    public function setExtraAllowanceInd(?string $extraAllowanceInd): self
    {
        $this->extraAllowanceInd = $extraAllowanceInd;

        return $this;
    }

    /**
     * Returned when a ticketed point is excluded from mileage calculation of a fare.
     *
     * @return string|null
     */
    public function getMileageExclusionInd(): ?string
    {
        return $this->mileageExclusionInd;
    }

    /**
     * Returned when a ticketed point is excluded from mileage calculation of a fare.
     *
     * @param string|null $mileageExclusionInd
     *
     * @return self
     */
    public function setMileageExclusionInd(?string $mileageExclusionInd): self
    {
        $this->mileageExclusionInd = $mileageExclusionInd;

        return $this;
    }

    /**
     * Returned when there is a reduction on the fare based on mileage.
     *
     * @return string|null
     */
    public function getMileageReductionPTInd(): ?string
    {
        return $this->mileageReductionPTInd;
    }

    /**
     * Returned when there is a reduction on the fare based on mileage.
     *
     * @param string|null $mileageReductionPTInd
     *
     * @return self
     */
    public function setMileageReductionPTInd(?string $mileageReductionPTInd): self
    {
        $this->mileageReductionPTInd = $mileageReductionPTInd;

        return $this;
    }

    /**
     * Returned when a fare is applicable to more than one destination.
     *
     * @return string|null
     */
    public function getMileageEqualizationInd(): ?string
    {
        return $this->mileageEqualizationInd;
    }

    /**
     * Returned when a fare is applicable to more than one destination.
     *
     * @param string|null $mileageEqualizationInd
     *
     * @return self
     */
    public function setMileageEqualizationInd(?string $mileageEqualizationInd): self
    {
        $this->mileageEqualizationInd = $mileageEqualizationInd;

        return $this;
    }

    /**
     * Indicates that the fare was computed on the mileage system.
     *
     * @return string|null
     */
    public function getMileageSymbol(): ?string
    {
        return $this->mileageSymbol;
    }

    /**
     * Indicates that the fare was computed on the mileage system.
     *
     * @param string|null $mileageSymbol
     *
     * @return self
     */
    public function setMileageSymbol(?string $mileageSymbol): self
    {
        $this->mileageSymbol = $mileageSymbol;

        return $this;
    }

    /**
     * Indicates the percentage of a mileage surcharge applied.
     *
     * @return string|null
     */
    public function getMileageSurchargeInd(): ?string
    {
        return $this->mileageSurchargeInd;
    }

    /**
     * Indicates the percentage of a mileage surcharge applied.
     *
     * @param string|null $mileageSurchargeInd
     *
     * @return self
     */
    public function setMileageSurchargeInd(?string $mileageSurchargeInd): self
    {
        $this->mileageSurchargeInd = $mileageSurchargeInd;

        return $this;
    }

    /**
     * The Construction City Code associated with the higher intermediate point.
     *
     * @return string|null
     */
    public function getHIPConstructionCityCode(): ?string
    {
        return $this->hIPConstructionCityCode;
    }

    /**
     * The Construction City Code associated with the higher intermediate point.
     *
     * @param string|null $hIPConstructionCityCode
     *
     * @return self
     */
    public function setHIPConstructionCityCode(?string $hIPConstructionCityCode): self
    {
        $this->hIPConstructionCityCode = $hIPConstructionCityCode;

        return $this;
    }

    /**
     * The City Codes associated with the higher intermediate point.
     *
     * @return string|null
     */
    public function getHIPCityCodes(): ?string
    {
        return $this->hIPCityCodes;
    }

    /**
     * The City Codes associated with the higher intermediate point.
     *
     * @param string|null $hIPCityCodes
     *
     * @return self
     */
    public function setHIPCityCodes(?string $hIPCityCodes): self
    {
        $this->hIPCityCodes = $hIPCityCodes;

        return $this;
    }
}
