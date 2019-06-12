<?php

namespace Ammonkc\SabreApi\Model\OrderManagement;

use Ammonkc\SabreApi\AbstractModel;

class TicketingDocumentInfo extends AbstractModel
{
    /**
     * Contains details of the ticketing document.
     *
     * @var TicketingDocument
     */
    protected $document;
    /**
     * Contains the amount of money expected, required, or given in payment.
     *
     * @var Price
     */
    protected $price;
    /**
     * Reference to the passenger.
     *
     * @var string
     */
    protected $paxRefId;

    /**
     * Contains details of the ticketing document.
     *
     * @return TicketingDocument
     */
    public function getDocument(): ?TicketingDocument
    {
        return $this->document;
    }

    /**
     * Contains details of the ticketing document.
     *
     * @param TicketingDocument $document
     *
     * @return self
     */
    public function setDocument(?TicketingDocument $document): self
    {
        $this->document = $document;

        return $this;
    }

    /**
     * Contains the amount of money expected, required, or given in payment.
     *
     * @return Price
     */
    public function getPrice(): ?Price
    {
        return $this->price;
    }

    /**
     * Contains the amount of money expected, required, or given in payment.
     *
     * @param Price $price
     *
     * @return self
     */
    public function setPrice(?Price $price): self
    {
        $this->price = $price;

        return $this;
    }

    /**
     * Reference to the passenger.
     *
     * @return string
     */
    public function getPaxRefId(): ?string
    {
        return $this->paxRefId;
    }

    /**
     * Reference to the passenger.
     *
     * @param string $paxRefId
     *
     * @return self
     */
    public function setPaxRefId(?string $paxRefId): self
    {
        $this->paxRefId = $paxRefId;

        return $this;
    }
}
