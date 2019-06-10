<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Ammonkc\SabreApi\Model\CreatePassengerNameRecord;

use Ammonkc\SabreApi\AbstractModel;

class CreatePassengerNameRecordRequestCreatePassengerNameRecordRQSpecialReqDetailsSpecialServiceSpecialServiceInfoAdvancePassengerItemDocument extends AbstractModel
{
    /**
     * Issue country.
     *
     * @var string
     */
    protected $issueCountry;
    /**
     * Nationality country.
     *
     * @var string
     */
    protected $nationalityCountry;
    /**
     * Visa document details.
     *
     * @var CreatePassengerNameRecordRequestCreatePassengerNameRecordRQSpecialReqDetailsSpecialServiceSpecialServiceInfoAdvancePassengerItemDocumentVisa
     */
    protected $visa;
    /**
     * Used to specify the document expiration date.
     *
     * @var string
     */
    protected $expirationDate;
    /**
     * Used to specify the document number.
     *
     * @var string
     */
    protected $number;
    /**
     * Used to specify the document type. Acceptable values include: "A" - Alien resident card, "C" - Permanent resident card, "F" - Facilitation document, "I" - National ID card, "IN" - Nexus Card. Also: "M" - Military, "N" - Naturalization certificate, "P" - Passport, "T" - Refugee travel document and re-entry permit, US Travel document, "V" - Border crossing card.
     *
     * @var string
     */
    protected $type;

    /**
     * Issue country.
     *
     * @return string
     */
    public function getIssueCountry(): ?string
    {
        return $this->issueCountry;
    }

    /**
     * Issue country.
     *
     * @param string $issueCountry
     *
     * @return self
     */
    public function setIssueCountry(?string $issueCountry): self
    {
        $this->issueCountry = $issueCountry;

        return $this;
    }

    /**
     * Nationality country.
     *
     * @return string
     */
    public function getNationalityCountry(): ?string
    {
        return $this->nationalityCountry;
    }

    /**
     * Nationality country.
     *
     * @param string $nationalityCountry
     *
     * @return self
     */
    public function setNationalityCountry(?string $nationalityCountry): self
    {
        $this->nationalityCountry = $nationalityCountry;

        return $this;
    }

    /**
     * Visa document details.
     *
     * @return CreatePassengerNameRecordRequestCreatePassengerNameRecordRQSpecialReqDetailsSpecialServiceSpecialServiceInfoAdvancePassengerItemDocumentVisa
     */
    public function getVisa(): ?CreatePassengerNameRecordRequestCreatePassengerNameRecordRQSpecialReqDetailsSpecialServiceSpecialServiceInfoAdvancePassengerItemDocumentVisa
    {
        return $this->visa;
    }

    /**
     * Visa document details.
     *
     * @param CreatePassengerNameRecordRequestCreatePassengerNameRecordRQSpecialReqDetailsSpecialServiceSpecialServiceInfoAdvancePassengerItemDocumentVisa $visa
     *
     * @return self
     */
    public function setVisa(?CreatePassengerNameRecordRequestCreatePassengerNameRecordRQSpecialReqDetailsSpecialServiceSpecialServiceInfoAdvancePassengerItemDocumentVisa $visa): self
    {
        $this->visa = $visa;

        return $this;
    }

    /**
     * Used to specify the document expiration date.
     *
     * @return string
     */
    public function getExpirationDate(): ?string
    {
        return $this->expirationDate;
    }

    /**
     * Used to specify the document expiration date.
     *
     * @param string $expirationDate
     *
     * @return self
     */
    public function setExpirationDate(?string $expirationDate): self
    {
        $this->expirationDate = $expirationDate;

        return $this;
    }

    /**
     * Used to specify the document number.
     *
     * @return string
     */
    public function getNumber(): ?string
    {
        return $this->number;
    }

    /**
     * Used to specify the document number.
     *
     * @param string $number
     *
     * @return self
     */
    public function setNumber(?string $number): self
    {
        $this->number = $number;

        return $this;
    }

    /**
     * Used to specify the document type. Acceptable values include: "A" - Alien resident card, "C" - Permanent resident card, "F" - Facilitation document, "I" - National ID card, "IN" - Nexus Card. Also: "M" - Military, "N" - Naturalization certificate, "P" - Passport, "T" - Refugee travel document and re-entry permit, US Travel document, "V" - Border crossing card.
     *
     * @return string
     */
    public function getType(): ?string
    {
        return $this->type;
    }

    /**
     * Used to specify the document type. Acceptable values include: "A" - Alien resident card, "C" - Permanent resident card, "F" - Facilitation document, "I" - National ID card, "IN" - Nexus Card. Also: "M" - Military, "N" - Naturalization certificate, "P" - Passport, "T" - Refugee travel document and re-entry permit, US Travel document, "V" - Border crossing card.
     *
     * @param string $type
     *
     * @return self
     */
    public function setType(?string $type): self
    {
        $this->type = $type;

        return $this;
    }
}