<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Ammonkc\SabreApi\Model\CreatePassengerNameRecord;

use Ammonkc\SabreApi\AbstractModel;

class CreatePassengerNameRecordRequestCreatePassengerNameRecordRQPostProcessingEndTransactionEmail extends AbstractModel
{
    /**
     * 'eTicket' related e-mail request information.
     *
     * @var CreatePassengerNameRecordRequestCreatePassengerNameRecordRQPostProcessingEndTransactionEmailETicket
     */
    protected $eTicket;
    /**
     * 'Invoice' is used to send an email notification containing a text-based copy of the invoice.
    'Invoice' cannot be combined with 'eTicket', or 'Itinerary'.

     *
     * @var CreatePassengerNameRecordRequestCreatePassengerNameRecordRQPostProcessingEndTransactionEmailInvoice
     */
    protected $invoice;
    /**
     * 'Itinerary' is used to send an email notification containing a text-based copy of the itinerary.
    The itinerary cannot be combined with 'eTicket', or .'Invoice'.

     *
     * @var CreatePassengerNameRecordRequestCreatePassengerNameRecordRQPostProcessingEndTransactionEmailItinerary
     */
    protected $itinerary;
    /**
     * 'NameNumber' is used to specify a particular passenger name number to send the email notification to.
    Please note that the email address in the PNR's email field must be the name associated with the specified name number.

     *
     * @var CreatePassengerNameRecordRequestCreatePassengerNameRecordRQPostProcessingEndTransactionEmailPersonName
     */
    protected $personName;
    /**
     * Used to send an email notification upon end transaction to any email addresses contained within the particular record.
     *
     * @var bool
     */
    protected $ind;

    /**
     * 'eTicket' related e-mail request information.
     *
     * @return CreatePassengerNameRecordRequestCreatePassengerNameRecordRQPostProcessingEndTransactionEmailETicket|null
     */
    public function getETicket(): ?CreatePassengerNameRecordRequestCreatePassengerNameRecordRQPostProcessingEndTransactionEmailETicket
    {
        return $this->eTicket;
    }

    /**
     * 'eTicket' related e-mail request information.
     *
     * @param CreatePassengerNameRecordRequestCreatePassengerNameRecordRQPostProcessingEndTransactionEmailETicket|null $eTicket
     *
     * @return self
     */
    public function setETicket(?CreatePassengerNameRecordRequestCreatePassengerNameRecordRQPostProcessingEndTransactionEmailETicket $eTicket): self
    {
        $this->eTicket = $eTicket;

        return $this;
    }

    /**
     * 'Invoice' is used to send an email notification containing a text-based copy of the invoice.
    'Invoice' cannot be combined with 'eTicket', or 'Itinerary'.

     *
     * @return CreatePassengerNameRecordRequestCreatePassengerNameRecordRQPostProcessingEndTransactionEmailInvoice|null
     */
    public function getInvoice(): ?CreatePassengerNameRecordRequestCreatePassengerNameRecordRQPostProcessingEndTransactionEmailInvoice
    {
        return $this->invoice;
    }

    /**
     * 'Invoice' is used to send an email notification containing a text-based copy of the invoice.
    'Invoice' cannot be combined with 'eTicket', or 'Itinerary'.

     *
     * @param CreatePassengerNameRecordRequestCreatePassengerNameRecordRQPostProcessingEndTransactionEmailInvoice|null $invoice
     *
     * @return self
     */
    public function setInvoice(?CreatePassengerNameRecordRequestCreatePassengerNameRecordRQPostProcessingEndTransactionEmailInvoice $invoice): self
    {
        $this->invoice = $invoice;

        return $this;
    }

    /**
     * 'Itinerary' is used to send an email notification containing a text-based copy of the itinerary.
    The itinerary cannot be combined with 'eTicket', or .'Invoice'.

     *
     * @return CreatePassengerNameRecordRequestCreatePassengerNameRecordRQPostProcessingEndTransactionEmailItinerary|null
     */
    public function getItinerary(): ?CreatePassengerNameRecordRequestCreatePassengerNameRecordRQPostProcessingEndTransactionEmailItinerary
    {
        return $this->itinerary;
    }

    /**
     * 'Itinerary' is used to send an email notification containing a text-based copy of the itinerary.
    The itinerary cannot be combined with 'eTicket', or .'Invoice'.

     *
     * @param CreatePassengerNameRecordRequestCreatePassengerNameRecordRQPostProcessingEndTransactionEmailItinerary|null $itinerary
     *
     * @return self
     */
    public function setItinerary(?CreatePassengerNameRecordRequestCreatePassengerNameRecordRQPostProcessingEndTransactionEmailItinerary $itinerary): self
    {
        $this->itinerary = $itinerary;

        return $this;
    }

    /**
     * 'NameNumber' is used to specify a particular passenger name number to send the email notification to.
    Please note that the email address in the PNR's email field must be the name associated with the specified name number.

     *
     * @return CreatePassengerNameRecordRequestCreatePassengerNameRecordRQPostProcessingEndTransactionEmailPersonName|null
     */
    public function getPersonName(): ?CreatePassengerNameRecordRequestCreatePassengerNameRecordRQPostProcessingEndTransactionEmailPersonName
    {
        return $this->personName;
    }

    /**
     * 'NameNumber' is used to specify a particular passenger name number to send the email notification to.
    Please note that the email address in the PNR's email field must be the name associated with the specified name number.

     *
     * @param CreatePassengerNameRecordRequestCreatePassengerNameRecordRQPostProcessingEndTransactionEmailPersonName|null $personName
     *
     * @return self
     */
    public function setPersonName(?CreatePassengerNameRecordRequestCreatePassengerNameRecordRQPostProcessingEndTransactionEmailPersonName $personName): self
    {
        $this->personName = $personName;

        return $this;
    }

    /**
     * Used to send an email notification upon end transaction to any email addresses contained within the particular record.
     *
     * @return bool|null
     */
    public function getInd(): ?bool
    {
        return $this->ind;
    }

    /**
     * Used to send an email notification upon end transaction to any email addresses contained within the particular record.
     *
     * @param bool|null $ind
     *
     * @return self
     */
    public function setInd(?bool $ind): self
    {
        $this->ind = $ind;

        return $this;
    }
}
