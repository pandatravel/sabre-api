<?php

namespace Ammonkc\SabreApi\Model\OrderManagement;

use Ammonkc\SabreApi\AbstractModel;

class OrderItem extends AbstractModel
{
    /**
     * Unique identifier of the order item.
     *
     * @var string
     */
    protected $id;
    /**
     * The two-letter [IATA](https://www.iata.org/publications/Pages/code-search.aspx) airline code validating the offer.
     *
     * @var string
     */
    protected $validatingCarrierCode;
    /**
     * The unique identifier of the order item in an external system.
     *
     * @var string
     */
    protected $externalId;
    /**
     * The unique identifier of the order in an external system.
     *
     * @var string
     */
    protected $externalOrderRefId;
    /**
     * Contains a list of all products associated with the order.
     *
     * @var string[]
     */
    protected $productRefIds;
    /**
     * Current status code of the order item.
     *
     * @var string
     */
    protected $statusCode;
    /**
     * The creation date and time of the order item.
     *
     * @var \DateTime
     */
    protected $creationDateTime;
    /**
     * The date and time by which the passenger must secure tickets or other accountable documents.
     *
     * @var \DateTime
     */
    protected $ticketingTimeLimit;
    /**
     * @var FareDetail[]
     */
    protected $fareDetails;
    /**
     * Contains the amount of money expected, required, or given in payment.
     *
     * @var Price
     */
    protected $price;
    /**
     * @var Service[]
     */
    protected $services;
    /**
     * The unique identifier assigned to the offer item.
     *
     * @var string
     */
    protected $offerItemId;
    /**
     * The unique identifier of the offer in an external system.
     *
     * @var string
     */
    protected $externalOfferItemId;

    /**
     * Unique identifier of the order item.
     *
     * @return string
     */
    public function getId(): ?string
    {
        return $this->id;
    }

    /**
     * Unique identifier of the order item.
     *
     * @param string $id
     *
     * @return self
     */
    public function setId(?string $id): self
    {
        $this->id = $id;

        return $this;
    }

    /**
     * The two-letter [IATA](https://www.iata.org/publications/Pages/code-search.aspx) airline code validating the offer.
     *
     * @return string
     */
    public function getValidatingCarrierCode(): ?string
    {
        return $this->validatingCarrierCode;
    }

    /**
     * The two-letter [IATA](https://www.iata.org/publications/Pages/code-search.aspx) airline code validating the offer.
     *
     * @param string $validatingCarrierCode
     *
     * @return self
     */
    public function setValidatingCarrierCode(?string $validatingCarrierCode): self
    {
        $this->validatingCarrierCode = $validatingCarrierCode;

        return $this;
    }

    /**
     * The unique identifier of the order item in an external system.
     *
     * @return string
     */
    public function getExternalId(): ?string
    {
        return $this->externalId;
    }

    /**
     * The unique identifier of the order item in an external system.
     *
     * @param string $externalId
     *
     * @return self
     */
    public function setExternalId(?string $externalId): self
    {
        $this->externalId = $externalId;

        return $this;
    }

    /**
     * The unique identifier of the order in an external system.
     *
     * @return string
     */
    public function getExternalOrderRefId(): ?string
    {
        return $this->externalOrderRefId;
    }

    /**
     * The unique identifier of the order in an external system.
     *
     * @param string $externalOrderRefId
     *
     * @return self
     */
    public function setExternalOrderRefId(?string $externalOrderRefId): self
    {
        $this->externalOrderRefId = $externalOrderRefId;

        return $this;
    }

    /**
     * Contains a list of all products associated with the order.
     *
     * @return string[]
     */
    public function getProductRefIds(): ?array
    {
        return $this->productRefIds;
    }

    /**
     * Contains a list of all products associated with the order.
     *
     * @param string[] $productRefIds
     *
     * @return self
     */
    public function setProductRefIds(?array $productRefIds): self
    {
        $this->productRefIds = $productRefIds;

        return $this;
    }

    /**
     * Current status code of the order item.
     *
     * @return string
     */
    public function getStatusCode(): ?string
    {
        return $this->statusCode;
    }

    /**
     * Current status code of the order item.
     *
     * @param string $statusCode
     *
     * @return self
     */
    public function setStatusCode(?string $statusCode): self
    {
        $this->statusCode = $statusCode;

        return $this;
    }

    /**
     * The creation date and time of the order item.
     *
     * @return \DateTime
     */
    public function getCreationDateTime(): ?\DateTime
    {
        return $this->creationDateTime;
    }

    /**
     * The creation date and time of the order item.
     *
     * @param \DateTime $creationDateTime
     *
     * @return self
     */
    public function setCreationDateTime(?\DateTime $creationDateTime): self
    {
        $this->creationDateTime = $creationDateTime;

        return $this;
    }

    /**
     * The date and time by which the passenger must secure tickets or other accountable documents.
     *
     * @return \DateTime
     */
    public function getTicketingTimeLimit(): ?\DateTime
    {
        return $this->ticketingTimeLimit;
    }

    /**
     * The date and time by which the passenger must secure tickets or other accountable documents.
     *
     * @param \DateTime $ticketingTimeLimit
     *
     * @return self
     */
    public function setTicketingTimeLimit(?\DateTime $ticketingTimeLimit): self
    {
        $this->ticketingTimeLimit = $ticketingTimeLimit;

        return $this;
    }

    /**
     * @return FareDetail[]
     */
    public function getFareDetails(): ?array
    {
        return $this->fareDetails;
    }

    /**
     * @param FareDetail[] $fareDetails
     *
     * @return self
     */
    public function setFareDetails(?array $fareDetails): self
    {
        $this->fareDetails = $fareDetails;

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
     * @return Service[]
     */
    public function getServices(): ?array
    {
        return $this->services;
    }

    /**
     * @param Service[] $services
     *
     * @return self
     */
    public function setServices(?array $services): self
    {
        $this->services = $services;

        return $this;
    }

    /**
     * The unique identifier assigned to the offer item.
     *
     * @return string
     */
    public function getOfferItemId(): ?string
    {
        return $this->offerItemId;
    }

    /**
     * The unique identifier assigned to the offer item.
     *
     * @param string $offerItemId
     *
     * @return self
     */
    public function setOfferItemId(?string $offerItemId): self
    {
        $this->offerItemId = $offerItemId;

        return $this;
    }

    /**
     * The unique identifier of the offer in an external system.
     *
     * @return string
     */
    public function getExternalOfferItemId(): ?string
    {
        return $this->externalOfferItemId;
    }

    /**
     * The unique identifier of the offer in an external system.
     *
     * @param string $externalOfferItemId
     *
     * @return self
     */
    public function setExternalOfferItemId(?string $externalOfferItemId): self
    {
        $this->externalOfferItemId = $externalOfferItemId;

        return $this;
    }
}
