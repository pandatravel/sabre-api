<?php

namespace Ammonkc\SabreApi\Model\EnhancedAirTicket;

use Ammonkc\SabreApi\AbstractModel;

class PostProcessingEndTransactionEmail extends AbstractModel
{
    /**
     * "Email" is used to send an email notification upon end transaction to any email addresses contained within the particular record.
     *
     * @var bool
     */
    protected $ind;
    /**
     * eTicket cannot combine with .../Invoice, or .../Itinerary.
     *
     * @var PostProcessingEndTransactionEmailETicket
     */
    protected $eTicket;
    /**
     * Invoice cannot combine with .../eTicket, or .../Itinerary.
     *
     * @var PostProcessingEndTransactionEmailInvoice
     */
    protected $invoice;
    /**
     * Itinerary cannot combine with .../eTicket, or .../Invoice.
     *
     * @var PostProcessingEndTransactionEmailItinerary
     */
    protected $itinerary;
    /**
     * @var PostProcessingEndTransactionEmailPersonName
     */
    protected $personName;

    /**
     * "Email" is used to send an email notification upon end transaction to any email addresses contained within the particular record.
     *
     * @return bool
     */
    public function getInd(): ?bool
    {
        return $this->ind;
    }

    /**
     * "Email" is used to send an email notification upon end transaction to any email addresses contained within the particular record.
     *
     * @param bool $ind
     *
     * @return self
     */
    public function setInd(?bool $ind): self
    {
        $this->ind = $ind;

        return $this;
    }

    /**
     * eTicket cannot combine with .../Invoice, or .../Itinerary.
     *
     * @return PostProcessingEndTransactionEmailETicket
     */
    public function getETicket(): ?PostProcessingEndTransactionEmailETicket
    {
        return $this->eTicket;
    }

    /**
     * eTicket cannot combine with .../Invoice, or .../Itinerary.
     *
     * @param PostProcessingEndTransactionEmailETicket $eTicket
     *
     * @return self
     */
    public function setETicket(?PostProcessingEndTransactionEmailETicket $eTicket): self
    {
        $this->eTicket = $eTicket;

        return $this;
    }

    /**
     * Invoice cannot combine with .../eTicket, or .../Itinerary.
     *
     * @return PostProcessingEndTransactionEmailInvoice
     */
    public function getInvoice(): ?PostProcessingEndTransactionEmailInvoice
    {
        return $this->invoice;
    }

    /**
     * Invoice cannot combine with .../eTicket, or .../Itinerary.
     *
     * @param PostProcessingEndTransactionEmailInvoice $invoice
     *
     * @return self
     */
    public function setInvoice(?PostProcessingEndTransactionEmailInvoice $invoice): self
    {
        $this->invoice = $invoice;

        return $this;
    }

    /**
     * Itinerary cannot combine with .../eTicket, or .../Invoice.
     *
     * @return PostProcessingEndTransactionEmailItinerary
     */
    public function getItinerary(): ?PostProcessingEndTransactionEmailItinerary
    {
        return $this->itinerary;
    }

    /**
     * Itinerary cannot combine with .../eTicket, or .../Invoice.
     *
     * @param PostProcessingEndTransactionEmailItinerary $itinerary
     *
     * @return self
     */
    public function setItinerary(?PostProcessingEndTransactionEmailItinerary $itinerary): self
    {
        $this->itinerary = $itinerary;

        return $this;
    }

    /**
     * @return PostProcessingEndTransactionEmailPersonName
     */
    public function getPersonName(): ?PostProcessingEndTransactionEmailPersonName
    {
        return $this->personName;
    }

    /**
     * @param PostProcessingEndTransactionEmailPersonName $personName
     *
     * @return self
     */
    public function setPersonName(?PostProcessingEndTransactionEmailPersonName $personName): self
    {
        $this->personName = $personName;

        return $this;
    }
}
