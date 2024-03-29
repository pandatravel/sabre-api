<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Ammonkc\SabreApi\Model\BargainFinderMax;

use Ammonkc\SabreApi\AbstractModel;

class OrgOpentravelOta200305CustLoyaltyType extends AbstractModel
{
    /**
     * Indicates the starting date.
     *
     * @var string
     */
    protected $effectiveDate;
    /**
     * Indicates the ending date.
     *
     * @var string
     */
    protected $expireDate;
    /**
     * Indicates special privileges in program assigned to individual.
     *
     * @var string
     */
    protected $loyalLevel;
    /**
     * Unique identifier of the member in the program (membership number, account number, etc.).
     *
     * @var string
     */
    protected $membershipID;
    /**
     * Identifier to indicate the company owner of the loyalty program.
     *
     * @var string
     */
    protected $programID;
    /**
     * Reference place holder, to reference it back in the response.
     *
     * @var string
     */
    protected $rPH;
    /**
     * value="Inherit" Permission for sharing data for marketing purposes.
     *
     * @var string
     */
    protected $shareMarketInd;
    /**
     * value="Inherit" Permission for sharing data for synchronization of information held by other travel service providers.
     *
     * @var string
     */
    protected $shareSynchInd;
    /**
     * Indicates when the member signed up for the loyalty program.
     *
     * @var string
     */
    protected $signupDate;
    /**
     * Indicates if program is affiliated with a group of related offers accumulating credits.
     *
     * @var string
     */
    protected $singleVendorInd;
    /**
     * Identifies the travel sector. Refer to OTA Code List Travel Sector (TVS).
     *
     * @var string
     */
    protected $travelSector;

    /**
     * Indicates the starting date.
     *
     * @return string|null
     */
    public function getEffectiveDate(): ?string
    {
        return $this->effectiveDate;
    }

    /**
     * Indicates the starting date.
     *
     * @param string|null $effectiveDate
     *
     * @return self
     */
    public function setEffectiveDate(?string $effectiveDate): self
    {
        $this->effectiveDate = $effectiveDate;

        return $this;
    }

    /**
     * Indicates the ending date.
     *
     * @return string|null
     */
    public function getExpireDate(): ?string
    {
        return $this->expireDate;
    }

    /**
     * Indicates the ending date.
     *
     * @param string|null $expireDate
     *
     * @return self
     */
    public function setExpireDate(?string $expireDate): self
    {
        $this->expireDate = $expireDate;

        return $this;
    }

    /**
     * Indicates special privileges in program assigned to individual.
     *
     * @return string|null
     */
    public function getLoyalLevel(): ?string
    {
        return $this->loyalLevel;
    }

    /**
     * Indicates special privileges in program assigned to individual.
     *
     * @param string|null $loyalLevel
     *
     * @return self
     */
    public function setLoyalLevel(?string $loyalLevel): self
    {
        $this->loyalLevel = $loyalLevel;

        return $this;
    }

    /**
     * Unique identifier of the member in the program (membership number, account number, etc.).
     *
     * @return string|null
     */
    public function getMembershipID(): ?string
    {
        return $this->membershipID;
    }

    /**
     * Unique identifier of the member in the program (membership number, account number, etc.).
     *
     * @param string|null $membershipID
     *
     * @return self
     */
    public function setMembershipID(?string $membershipID): self
    {
        $this->membershipID = $membershipID;

        return $this;
    }

    /**
     * Identifier to indicate the company owner of the loyalty program.
     *
     * @return string|null
     */
    public function getProgramID(): ?string
    {
        return $this->programID;
    }

    /**
     * Identifier to indicate the company owner of the loyalty program.
     *
     * @param string|null $programID
     *
     * @return self
     */
    public function setProgramID(?string $programID): self
    {
        $this->programID = $programID;

        return $this;
    }

    /**
     * Reference place holder, to reference it back in the response.
     *
     * @return string|null
     */
    public function getRPH(): ?string
    {
        return $this->rPH;
    }

    /**
     * Reference place holder, to reference it back in the response.
     *
     * @param string|null $rPH
     *
     * @return self
     */
    public function setRPH(?string $rPH): self
    {
        $this->rPH = $rPH;

        return $this;
    }

    /**
     * value="Inherit" Permission for sharing data for marketing purposes.
     *
     * @return string|null
     */
    public function getShareMarketInd(): ?string
    {
        return $this->shareMarketInd;
    }

    /**
     * value="Inherit" Permission for sharing data for marketing purposes.
     *
     * @param string|null $shareMarketInd
     *
     * @return self
     */
    public function setShareMarketInd(?string $shareMarketInd): self
    {
        $this->shareMarketInd = $shareMarketInd;

        return $this;
    }

    /**
     * value="Inherit" Permission for sharing data for synchronization of information held by other travel service providers.
     *
     * @return string|null
     */
    public function getShareSynchInd(): ?string
    {
        return $this->shareSynchInd;
    }

    /**
     * value="Inherit" Permission for sharing data for synchronization of information held by other travel service providers.
     *
     * @param string|null $shareSynchInd
     *
     * @return self
     */
    public function setShareSynchInd(?string $shareSynchInd): self
    {
        $this->shareSynchInd = $shareSynchInd;

        return $this;
    }

    /**
     * Indicates when the member signed up for the loyalty program.
     *
     * @return string|null
     */
    public function getSignupDate(): ?string
    {
        return $this->signupDate;
    }

    /**
     * Indicates when the member signed up for the loyalty program.
     *
     * @param string|null $signupDate
     *
     * @return self
     */
    public function setSignupDate(?string $signupDate): self
    {
        $this->signupDate = $signupDate;

        return $this;
    }

    /**
     * Indicates if program is affiliated with a group of related offers accumulating credits.
     *
     * @return string|null
     */
    public function getSingleVendorInd(): ?string
    {
        return $this->singleVendorInd;
    }

    /**
     * Indicates if program is affiliated with a group of related offers accumulating credits.
     *
     * @param string|null $singleVendorInd
     *
     * @return self
     */
    public function setSingleVendorInd(?string $singleVendorInd): self
    {
        $this->singleVendorInd = $singleVendorInd;

        return $this;
    }

    /**
     * Identifies the travel sector. Refer to OTA Code List Travel Sector (TVS).
     *
     * @return string|null
     */
    public function getTravelSector(): ?string
    {
        return $this->travelSector;
    }

    /**
     * Identifies the travel sector. Refer to OTA Code List Travel Sector (TVS).
     *
     * @param string|null $travelSector
     *
     * @return self
     */
    public function setTravelSector(?string $travelSector): self
    {
        $this->travelSector = $travelSector;

        return $this;
    }
}
