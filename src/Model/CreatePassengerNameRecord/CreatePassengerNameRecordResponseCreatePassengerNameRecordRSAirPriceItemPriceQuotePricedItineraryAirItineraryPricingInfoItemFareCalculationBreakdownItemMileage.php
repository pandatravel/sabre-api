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
     * Returned when an extra mileage allowance is applicable.
     *
     * @var string
     */
    protected $extraAllowanceInd;
    /**
     * Returned when a ticketed point is excluded from mileage calculation of a fare if applicable.
     *
     * @var string
     */
    protected $mileageExclusionInd;
    /**
     * Returned when there is a reduction on the fare based on mileage if applicable.
     *
     * @var string
     */
    protected $mileageReductionPTInd;
    /**
     * Returned when a fare is applicable to more than one destination if applicable.
     *
     * @var string
     */
    protected $mileageEqualizationInd;
    /**
     * Indicates that the fare was computed on the mileage system if applicable.
     *
     * @var string
     */
    protected $mileageSymbol;
    /**
     * Indicates the percentage of a mileage surcharge applied if applicable.
     *
     * @var string
     */
    protected $mileageSurchargeInd;
    /**
     * Used to return the Construction City Code associated with the higher intermediate point if applicable.
     *
     * @var string
     */
    protected $hIPConstructionCityCode;
    /**
     * Used to return the City Codes associated with the higher intermediate point if applicable.
     *
     * @var string
     */
    protected $hIPCityCodes;

    /**
     * Returned when an extra mileage allowance is applicable.
     *
     * @return string
     */
    public function getExtraAllowanceInd(): ?string
    {
        return $this->extraAllowanceInd;
    }

    /**
     * Returned when an extra mileage allowance is applicable.
     *
     * @param string $extraAllowanceInd
     *
     * @return self
     */
    public function setExtraAllowanceInd(?string $extraAllowanceInd): self
    {
        $this->extraAllowanceInd = $extraAllowanceInd;

        return $this;
    }

    /**
     * Returned when a ticketed point is excluded from mileage calculation of a fare if applicable.
     *
     * @return string
     */
    public function getMileageExclusionInd(): ?string
    {
        return $this->mileageExclusionInd;
    }

    /**
     * Returned when a ticketed point is excluded from mileage calculation of a fare if applicable.
     *
     * @param string $mileageExclusionInd
     *
     * @return self
     */
    public function setMileageExclusionInd(?string $mileageExclusionInd): self
    {
        $this->mileageExclusionInd = $mileageExclusionInd;

        return $this;
    }

    /**
     * Returned when there is a reduction on the fare based on mileage if applicable.
     *
     * @return string
     */
    public function getMileageReductionPTInd(): ?string
    {
        return $this->mileageReductionPTInd;
    }

    /**
     * Returned when there is a reduction on the fare based on mileage if applicable.
     *
     * @param string $mileageReductionPTInd
     *
     * @return self
     */
    public function setMileageReductionPTInd(?string $mileageReductionPTInd): self
    {
        $this->mileageReductionPTInd = $mileageReductionPTInd;

        return $this;
    }

    /**
     * Returned when a fare is applicable to more than one destination if applicable.
     *
     * @return string
     */
    public function getMileageEqualizationInd(): ?string
    {
        return $this->mileageEqualizationInd;
    }

    /**
     * Returned when a fare is applicable to more than one destination if applicable.
     *
     * @param string $mileageEqualizationInd
     *
     * @return self
     */
    public function setMileageEqualizationInd(?string $mileageEqualizationInd): self
    {
        $this->mileageEqualizationInd = $mileageEqualizationInd;

        return $this;
    }

    /**
     * Indicates that the fare was computed on the mileage system if applicable.
     *
     * @return string
     */
    public function getMileageSymbol(): ?string
    {
        return $this->mileageSymbol;
    }

    /**
     * Indicates that the fare was computed on the mileage system if applicable.
     *
     * @param string $mileageSymbol
     *
     * @return self
     */
    public function setMileageSymbol(?string $mileageSymbol): self
    {
        $this->mileageSymbol = $mileageSymbol;

        return $this;
    }

    /**
     * Indicates the percentage of a mileage surcharge applied if applicable.
     *
     * @return string
     */
    public function getMileageSurchargeInd(): ?string
    {
        return $this->mileageSurchargeInd;
    }

    /**
     * Indicates the percentage of a mileage surcharge applied if applicable.
     *
     * @param string $mileageSurchargeInd
     *
     * @return self
     */
    public function setMileageSurchargeInd(?string $mileageSurchargeInd): self
    {
        $this->mileageSurchargeInd = $mileageSurchargeInd;

        return $this;
    }

    /**
     * Used to return the Construction City Code associated with the higher intermediate point if applicable.
     *
     * @return string
     */
    public function getHIPConstructionCityCode(): ?string
    {
        return $this->hIPConstructionCityCode;
    }

    /**
     * Used to return the Construction City Code associated with the higher intermediate point if applicable.
     *
     * @param string $hIPConstructionCityCode
     *
     * @return self
     */
    public function setHIPConstructionCityCode(?string $hIPConstructionCityCode): self
    {
        $this->hIPConstructionCityCode = $hIPConstructionCityCode;

        return $this;
    }

    /**
     * Used to return the City Codes associated with the higher intermediate point if applicable.
     *
     * @return string
     */
    public function getHIPCityCodes(): ?string
    {
        return $this->hIPCityCodes;
    }

    /**
     * Used to return the City Codes associated with the higher intermediate point if applicable.
     *
     * @param string $hIPCityCodes
     *
     * @return self
     */
    public function setHIPCityCodes(?string $hIPCityCodes): self
    {
        $this->hIPCityCodes = $hIPCityCodes;

        return $this;
    }
}
