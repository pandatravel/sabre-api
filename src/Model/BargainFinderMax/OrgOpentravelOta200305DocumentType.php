<?php

namespace Ammonkc\SabreApi\Model\BargainFinderMax;

use Ammonkc\SabreApi\AbstractModel;

class OrgOpentravelOta200305DocumentType extends AbstractModel
{
    /**
     * Indicates the date of birth as indicated in the document, in ISO 8601 prescribed format.
     *
     * @var string
     */
    protected $birthDate;
    /**
     * Specify document holder name.
     *
     * @var string
     */
    protected $docHolderName;
    /**
     * Unique number assigned by authorities to document.
     *
     * @var string
     */
    protected $docID;
    /**
     * Indicates the group or association that granted the document.
     *
     * @var string
     */
    protected $docIssueAuthority;
    /**
     * Indicates the location where the document was issued.
     *
     * @var string
     */
    protected $docIssueLocation;
    /**
     * @var string[]
     */
    protected $docLimitations;
    /**
     * @var string
     */
    protected $docType;
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
     * @var string
     */
    protected $gender;
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
     * Indicates the date of birth as indicated in the document, in ISO 8601 prescribed format.
     *
     * @return string
     */
    public function getBirthDate(): string
    {
        return $this->birthDate;
    }

    /**
     * Indicates the date of birth as indicated in the document, in ISO 8601 prescribed format.
     *
     * @param string $birthDate
     *
     * @return self
     */
    public function setBirthDate(string $birthDate): self
    {
        $this->birthDate = $birthDate;

        return $this;
    }

    /**
     * Specify document holder name.
     *
     * @return string
     */
    public function getDocHolderName(): string
    {
        return $this->docHolderName;
    }

    /**
     * Specify document holder name.
     *
     * @param string $docHolderName
     *
     * @return self
     */
    public function setDocHolderName(string $docHolderName): self
    {
        $this->docHolderName = $docHolderName;

        return $this;
    }

    /**
     * Unique number assigned by authorities to document.
     *
     * @return string
     */
    public function getDocID(): string
    {
        return $this->docID;
    }

    /**
     * Unique number assigned by authorities to document.
     *
     * @param string $docID
     *
     * @return self
     */
    public function setDocID(string $docID): self
    {
        $this->docID = $docID;

        return $this;
    }

    /**
     * Indicates the group or association that granted the document.
     *
     * @return string
     */
    public function getDocIssueAuthority(): string
    {
        return $this->docIssueAuthority;
    }

    /**
     * Indicates the group or association that granted the document.
     *
     * @param string $docIssueAuthority
     *
     * @return self
     */
    public function setDocIssueAuthority(string $docIssueAuthority): self
    {
        $this->docIssueAuthority = $docIssueAuthority;

        return $this;
    }

    /**
     * Indicates the location where the document was issued.
     *
     * @return string
     */
    public function getDocIssueLocation(): string
    {
        return $this->docIssueLocation;
    }

    /**
     * Indicates the location where the document was issued.
     *
     * @param string $docIssueLocation
     *
     * @return self
     */
    public function setDocIssueLocation(string $docIssueLocation): self
    {
        $this->docIssueLocation = $docIssueLocation;

        return $this;
    }

    /**
     * @return string[]
     */
    public function getDocLimitations(): array
    {
        return $this->docLimitations;
    }

    /**
     * @param string[] $docLimitations
     *
     * @return self
     */
    public function setDocLimitations(array $docLimitations): self
    {
        $this->docLimitations = $docLimitations;

        return $this;
    }

    /**
     * @return string
     */
    public function getDocType(): string
    {
        return $this->docType;
    }

    /**
     * @param string $docType
     *
     * @return self
     */
    public function setDocType(string $docType): self
    {
        $this->docType = $docType;

        return $this;
    }

    /**
     * Indicates the starting date.
     *
     * @return string
     */
    public function getEffectiveDate(): string
    {
        return $this->effectiveDate;
    }

    /**
     * Indicates the starting date.
     *
     * @param string $effectiveDate
     *
     * @return self
     */
    public function setEffectiveDate(string $effectiveDate): self
    {
        $this->effectiveDate = $effectiveDate;

        return $this;
    }

    /**
     * Indicates the ending date.
     *
     * @return string
     */
    public function getExpireDate(): string
    {
        return $this->expireDate;
    }

    /**
     * Indicates the ending date.
     *
     * @param string $expireDate
     *
     * @return self
     */
    public function setExpireDate(string $expireDate): self
    {
        $this->expireDate = $expireDate;

        return $this;
    }

    /**
     * @return string
     */
    public function getGender(): string
    {
        return $this->gender;
    }

    /**
     * @param string $gender
     *
     * @return self
     */
    public function setGender(string $gender): self
    {
        $this->gender = $gender;

        return $this;
    }

    /**
     * value="Inherit" Permission for sharing data for marketing purposes.
     *
     * @return string
     */
    public function getShareMarketInd(): string
    {
        return $this->shareMarketInd;
    }

    /**
     * value="Inherit" Permission for sharing data for marketing purposes.
     *
     * @param string $shareMarketInd
     *
     * @return self
     */
    public function setShareMarketInd(string $shareMarketInd): self
    {
        $this->shareMarketInd = $shareMarketInd;

        return $this;
    }

    /**
     * value="Inherit" Permission for sharing data for synchronization of information held by other travel service providers.
     *
     * @return string
     */
    public function getShareSynchInd(): string
    {
        return $this->shareSynchInd;
    }

    /**
     * value="Inherit" Permission for sharing data for synchronization of information held by other travel service providers.
     *
     * @param string $shareSynchInd
     *
     * @return self
     */
    public function setShareSynchInd(string $shareSynchInd): self
    {
        $this->shareSynchInd = $shareSynchInd;

        return $this;
    }
}
