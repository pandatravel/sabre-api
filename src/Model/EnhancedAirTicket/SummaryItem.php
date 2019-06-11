<?php

namespace Ammonkc\SabreApi\Model\EnhancedAirTicket;

use Ammonkc\SabreApi\AbstractModel;

class SummaryItem extends AbstractModel
{
    /**
     * Document number.
     *
     * @var string
     */
    protected $documentNumber;
    /**
     * Document issue date and time - in local time zone of the station that issued it. In 'yyyy-mm-ddThh:mm:ss' format.
     *
     * @var string
     */
    protected $localIssueDateTime;
    /**
     * Document type. Possible values are TKT, MSR and EMD.
     *
     * @var string
     */
    protected $documentType;
    /**
     * Station location code (usually city code) of the station that issued the document.
     *
     * @var string
     */
    protected $issuingLocation;
    /**
     * @var SummaryItemReservation
     */
    protected $reservation;
    /**
     * First name of the customer.
     *
     * @var string
     */
    protected $firstName;
    /**
     * Last name (family name or surname) of the customer. Required.
     *
     * @var string
     */
    protected $lastName;
    /**
     * Status of the document found (of the whole document, not particular coupon). Possible values:.

      V - VOIDED

      E - EXCHANGED

      R - REFUNDED

     *
     * @var string
     */
    protected $documentStatus;
    /**
     * @var SummaryItemTotalAmount
     */
    protected $totalAmount;

    /**
     * Document number.
     *
     * @return string
     */
    public function getDocumentNumber(): ?string
    {
        return $this->documentNumber;
    }

    /**
     * Document number.
     *
     * @param string $documentNumber
     *
     * @return self
     */
    public function setDocumentNumber(?string $documentNumber): self
    {
        $this->documentNumber = $documentNumber;

        return $this;
    }

    /**
     * Document issue date and time - in local time zone of the station that issued it. In 'yyyy-mm-ddThh:mm:ss' format.
     *
     * @return string
     */
    public function getLocalIssueDateTime(): ?string
    {
        return $this->localIssueDateTime;
    }

    /**
     * Document issue date and time - in local time zone of the station that issued it. In 'yyyy-mm-ddThh:mm:ss' format.
     *
     * @param string $localIssueDateTime
     *
     * @return self
     */
    public function setLocalIssueDateTime(?string $localIssueDateTime): self
    {
        $this->localIssueDateTime = $localIssueDateTime;

        return $this;
    }

    /**
     * Document type. Possible values are TKT, MSR and EMD.
     *
     * @return string
     */
    public function getDocumentType(): ?string
    {
        return $this->documentType;
    }

    /**
     * Document type. Possible values are TKT, MSR and EMD.
     *
     * @param string $documentType
     *
     * @return self
     */
    public function setDocumentType(?string $documentType): self
    {
        $this->documentType = $documentType;

        return $this;
    }

    /**
     * Station location code (usually city code) of the station that issued the document.
     *
     * @return string
     */
    public function getIssuingLocation(): ?string
    {
        return $this->issuingLocation;
    }

    /**
     * Station location code (usually city code) of the station that issued the document.
     *
     * @param string $issuingLocation
     *
     * @return self
     */
    public function setIssuingLocation(?string $issuingLocation): self
    {
        $this->issuingLocation = $issuingLocation;

        return $this;
    }

    /**
     * @return SummaryItemReservation
     */
    public function getReservation(): ?SummaryItemReservation
    {
        return $this->reservation;
    }

    /**
     * @param SummaryItemReservation $reservation
     *
     * @return self
     */
    public function setReservation(?SummaryItemReservation $reservation): self
    {
        $this->reservation = $reservation;

        return $this;
    }

    /**
     * First name of the customer.
     *
     * @return string
     */
    public function getFirstName(): ?string
    {
        return $this->firstName;
    }

    /**
     * First name of the customer.
     *
     * @param string $firstName
     *
     * @return self
     */
    public function setFirstName(?string $firstName): self
    {
        $this->firstName = $firstName;

        return $this;
    }

    /**
     * Last name (family name or surname) of the customer. Required.
     *
     * @return string
     */
    public function getLastName(): ?string
    {
        return $this->lastName;
    }

    /**
     * Last name (family name or surname) of the customer. Required.
     *
     * @param string $lastName
     *
     * @return self
     */
    public function setLastName(?string $lastName): self
    {
        $this->lastName = $lastName;

        return $this;
    }

    /**
     * Status of the document found (of the whole document, not particular coupon). Possible values:.

      V - VOIDED

      E - EXCHANGED

      R - REFUNDED

     *
     * @return string
     */
    public function getDocumentStatus(): ?string
    {
        return $this->documentStatus;
    }

    /**
     * Status of the document found (of the whole document, not particular coupon). Possible values:.

      V - VOIDED

      E - EXCHANGED

      R - REFUNDED

     *
     * @param string $documentStatus
     *
     * @return self
     */
    public function setDocumentStatus(?string $documentStatus): self
    {
        $this->documentStatus = $documentStatus;

        return $this;
    }

    /**
     * @return SummaryItemTotalAmount
     */
    public function getTotalAmount(): ?SummaryItemTotalAmount
    {
        return $this->totalAmount;
    }

    /**
     * @param SummaryItemTotalAmount $totalAmount
     *
     * @return self
     */
    public function setTotalAmount(?SummaryItemTotalAmount $totalAmount): self
    {
        $this->totalAmount = $totalAmount;

        return $this;
    }
}
