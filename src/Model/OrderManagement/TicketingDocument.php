<?php

namespace Ammonkc\SabreApi\Model\OrderManagement;

use Ammonkc\SabreApi\AbstractModel;

class TicketingDocument extends AbstractModel
{
    /**
     * The ticket document number.
     *
     * @var string
     */
    protected $number;
    /**
     * The document Type. [IATA PADIS](https://www.iata.org/whatwedo/workgroups/Pages/padis.aspx) Codeset 1001.
     *
     * @var string
     */
    protected $type;
    /**
     * Date and time of documentation issuance in the ticketing location's time zone.
     *
     * @var \DateTime
     */
    protected $issueDateTime;
    /**
     * The three-letter ticketing location code.
     *
     * @var string
     */
    protected $ticketingLocation;
    /**
     * Number of booklets issued.
     *
     * @var int
     */
    protected $numberOfBooklets;
    /**
     * Determines if the route is domestic or international. Can be D-Domestic, I-International.
     *
     * @var string
     */
    protected $routingCode;
    /**
     * The document reconciliation method. Can be BSP, ARC, or directly via ORA.
     *
     * @var string
     */
    protected $reportingType;
    /**
     * If true, indicates that the document is a primary document.
     *
     * @var bool
     */
    protected $primaryDocumentInd;
    /**
     * Connected document number.
     *
     * @var string
     */
    protected $inConnectionDocumentNumber;
    /**
     * @var TicketingDocumentCoupon[]
     */
    protected $coupons;

    /**
     * The ticket document number.
     *
     * @return string
     */
    public function getNumber(): ?string
    {
        return $this->number;
    }

    /**
     * The ticket document number.
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
     * The document Type. [IATA PADIS](https://www.iata.org/whatwedo/workgroups/Pages/padis.aspx) Codeset 1001.
     *
     * @return string
     */
    public function getType(): ?string
    {
        return $this->type;
    }

    /**
     * The document Type. [IATA PADIS](https://www.iata.org/whatwedo/workgroups/Pages/padis.aspx) Codeset 1001.
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

    /**
     * Date and time of documentation issuance in the ticketing location's time zone.
     *
     * @return \DateTime
     */
    public function getIssueDateTime(): ?\DateTime
    {
        return $this->issueDateTime;
    }

    /**
     * Date and time of documentation issuance in the ticketing location's time zone.
     *
     * @param \DateTime $issueDateTime
     *
     * @return self
     */
    public function setIssueDateTime(?\DateTime $issueDateTime): self
    {
        $this->issueDateTime = $issueDateTime;

        return $this;
    }

    /**
     * The three-letter ticketing location code.
     *
     * @return string
     */
    public function getTicketingLocation(): ?string
    {
        return $this->ticketingLocation;
    }

    /**
     * The three-letter ticketing location code.
     *
     * @param string $ticketingLocation
     *
     * @return self
     */
    public function setTicketingLocation(?string $ticketingLocation): self
    {
        $this->ticketingLocation = $ticketingLocation;

        return $this;
    }

    /**
     * Number of booklets issued.
     *
     * @return int
     */
    public function getNumberOfBooklets(): ?int
    {
        return $this->numberOfBooklets;
    }

    /**
     * Number of booklets issued.
     *
     * @param int $numberOfBooklets
     *
     * @return self
     */
    public function setNumberOfBooklets(?int $numberOfBooklets): self
    {
        $this->numberOfBooklets = $numberOfBooklets;

        return $this;
    }

    /**
     * Determines if the route is domestic or international. Can be D-Domestic, I-International.
     *
     * @return string
     */
    public function getRoutingCode(): ?string
    {
        return $this->routingCode;
    }

    /**
     * Determines if the route is domestic or international. Can be D-Domestic, I-International.
     *
     * @param string $routingCode
     *
     * @return self
     */
    public function setRoutingCode(?string $routingCode): self
    {
        $this->routingCode = $routingCode;

        return $this;
    }

    /**
     * The document reconciliation method. Can be BSP, ARC, or directly via ORA.
     *
     * @return string
     */
    public function getReportingType(): ?string
    {
        return $this->reportingType;
    }

    /**
     * The document reconciliation method. Can be BSP, ARC, or directly via ORA.
     *
     * @param string $reportingType
     *
     * @return self
     */
    public function setReportingType(?string $reportingType): self
    {
        $this->reportingType = $reportingType;

        return $this;
    }

    /**
     * If true, indicates that the document is a primary document.
     *
     * @return bool
     */
    public function getPrimaryDocumentInd(): ?bool
    {
        return $this->primaryDocumentInd;
    }

    /**
     * If true, indicates that the document is a primary document.
     *
     * @param bool $primaryDocumentInd
     *
     * @return self
     */
    public function setPrimaryDocumentInd(?bool $primaryDocumentInd): self
    {
        $this->primaryDocumentInd = $primaryDocumentInd;

        return $this;
    }

    /**
     * Connected document number.
     *
     * @return string
     */
    public function getInConnectionDocumentNumber(): ?string
    {
        return $this->inConnectionDocumentNumber;
    }

    /**
     * Connected document number.
     *
     * @param string $inConnectionDocumentNumber
     *
     * @return self
     */
    public function setInConnectionDocumentNumber(?string $inConnectionDocumentNumber): self
    {
        $this->inConnectionDocumentNumber = $inConnectionDocumentNumber;

        return $this;
    }

    /**
     * @return TicketingDocumentCoupon[]
     */
    public function getCoupons(): ?array
    {
        return $this->coupons;
    }

    /**
     * @param TicketingDocumentCoupon[] $coupons
     *
     * @return self
     */
    public function setCoupons(?array $coupons): self
    {
        $this->coupons = $coupons;

        return $this;
    }
}
