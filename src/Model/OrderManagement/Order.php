<?php

namespace Ammonkc\SabreApi\Model\OrderManagement;

use Ammonkc\SabreApi\AbstractModel;

class Order extends AbstractModel
{
    /**
     * The unique identifier of the order.
     *
     * @var string
     */
    protected $id;
    /**
     * The PNR locator.
     *
     * @var string
     */
    protected $pnrLocator;
    /**
     * Order owner code, this value can be eg. 1S, 1F or 1B.
     *
     * @var string
     */
    protected $orderOwner;
    /**
     * @var OrderItem[]
     */
    protected $orderItems;
    /**
     * @var ContactInfo[]
     */
    protected $contactInfos;
    /**
     * @var Product[]
     */
    protected $products;
    /**
     * @var Passenger[]
     */
    protected $passengers;
    /**
     * @var Journey[]
     */
    protected $journeys;
    /**
     * @var Segment[]
     */
    protected $segments;
    /**
     * @var PriceClass[]
     */
    protected $priceClasses;
    /**
     * Contains the customer's DK number.
     *
     * @var CustomerNumber
     */
    protected $customerNumber;
    /**
     * The date by which a payment must be made for the confirmed items in the order.
     *
     * @var \DateTime
     */
    protected $paymentTimeLimit;
    /**
     * @var ExternalOrder[]
     */
    protected $externalOrders;
    /**
     * @var TicketingDocumentInfo[]
     */
    protected $ticketingDocumentInfo;
    /**
     * Contains the amount of money expected, required, or given in payment.
     *
     * @var Price
     */
    protected $totalPrice;

    /**
     * The unique identifier of the order.
     *
     * @return string
     */
    public function getId(): ?string
    {
        return $this->id;
    }

    /**
     * The unique identifier of the order.
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
     * The PNR locator.
     *
     * @return string
     */
    public function getPnrLocator(): ?string
    {
        return $this->pnrLocator;
    }

    /**
     * The PNR locator.
     *
     * @param string $pnrLocator
     *
     * @return self
     */
    public function setPnrLocator(?string $pnrLocator): self
    {
        $this->pnrLocator = $pnrLocator;

        return $this;
    }

    /**
     * Order owner code, this value can be eg. 1S, 1F or 1B.
     *
     * @return string
     */
    public function getOrderOwner(): ?string
    {
        return $this->orderOwner;
    }

    /**
     * Order owner code, this value can be eg. 1S, 1F or 1B.
     *
     * @param string $orderOwner
     *
     * @return self
     */
    public function setOrderOwner(?string $orderOwner): self
    {
        $this->orderOwner = $orderOwner;

        return $this;
    }

    /**
     * @return OrderItem[]
     */
    public function getOrderItems(): ?array
    {
        return $this->orderItems;
    }

    /**
     * @param OrderItem[] $orderItems
     *
     * @return self
     */
    public function setOrderItems(?array $orderItems): self
    {
        $this->orderItems = $orderItems;

        return $this;
    }

    /**
     * @return ContactInfo[]
     */
    public function getContactInfos(): ?array
    {
        return $this->contactInfos;
    }

    /**
     * @param ContactInfo[] $contactInfos
     *
     * @return self
     */
    public function setContactInfos(?array $contactInfos): self
    {
        $this->contactInfos = $contactInfos;

        return $this;
    }

    /**
     * @return Product[]
     */
    public function getProducts(): ?array
    {
        return $this->products;
    }

    /**
     * @param Product[] $products
     *
     * @return self
     */
    public function setProducts(?array $products): self
    {
        $this->products = $products;

        return $this;
    }

    /**
     * @return Passenger[]
     */
    public function getPassengers(): ?array
    {
        return $this->passengers;
    }

    /**
     * @param Passenger[] $passengers
     *
     * @return self
     */
    public function setPassengers(?array $passengers): self
    {
        $this->passengers = $passengers;

        return $this;
    }

    /**
     * @return Journey[]
     */
    public function getJourneys(): ?array
    {
        return $this->journeys;
    }

    /**
     * @param Journey[] $journeys
     *
     * @return self
     */
    public function setJourneys(?array $journeys): self
    {
        $this->journeys = $journeys;

        return $this;
    }

    /**
     * @return Segment[]
     */
    public function getSegments(): ?array
    {
        return $this->segments;
    }

    /**
     * @param Segment[] $segments
     *
     * @return self
     */
    public function setSegments(?array $segments): self
    {
        $this->segments = $segments;

        return $this;
    }

    /**
     * @return PriceClass[]
     */
    public function getPriceClasses(): ?array
    {
        return $this->priceClasses;
    }

    /**
     * @param PriceClass[] $priceClasses
     *
     * @return self
     */
    public function setPriceClasses(?array $priceClasses): self
    {
        $this->priceClasses = $priceClasses;

        return $this;
    }

    /**
     * Contains the customer's DK number.
     *
     * @return CustomerNumber
     */
    public function getCustomerNumber(): ?CustomerNumber
    {
        return $this->customerNumber;
    }

    /**
     * Contains the customer's DK number.
     *
     * @param CustomerNumber $customerNumber
     *
     * @return self
     */
    public function setCustomerNumber(?CustomerNumber $customerNumber): self
    {
        $this->customerNumber = $customerNumber;

        return $this;
    }

    /**
     * The date by which a payment must be made for the confirmed items in the order.
     *
     * @return \DateTime
     */
    public function getPaymentTimeLimit(): ?\DateTime
    {
        return $this->paymentTimeLimit;
    }

    /**
     * The date by which a payment must be made for the confirmed items in the order.
     *
     * @param \DateTime $paymentTimeLimit
     *
     * @return self
     */
    public function setPaymentTimeLimit(?\DateTime $paymentTimeLimit): self
    {
        $this->paymentTimeLimit = $paymentTimeLimit;

        return $this;
    }

    /**
     * @return ExternalOrder[]
     */
    public function getExternalOrders(): ?array
    {
        return $this->externalOrders;
    }

    /**
     * @param ExternalOrder[] $externalOrders
     *
     * @return self
     */
    public function setExternalOrders(?array $externalOrders): self
    {
        $this->externalOrders = $externalOrders;

        return $this;
    }

    /**
     * @return TicketingDocumentInfo[]
     */
    public function getTicketingDocumentInfo(): ?array
    {
        return $this->ticketingDocumentInfo;
    }

    /**
     * @param TicketingDocumentInfo[] $ticketingDocumentInfo
     *
     * @return self
     */
    public function setTicketingDocumentInfo(?array $ticketingDocumentInfo): self
    {
        $this->ticketingDocumentInfo = $ticketingDocumentInfo;

        return $this;
    }

    /**
     * Contains the amount of money expected, required, or given in payment.
     *
     * @return Price
     */
    public function getTotalPrice(): ?Price
    {
        return $this->totalPrice;
    }

    /**
     * Contains the amount of money expected, required, or given in payment.
     *
     * @param Price $totalPrice
     *
     * @return self
     */
    public function setTotalPrice(?Price $totalPrice): self
    {
        $this->totalPrice = $totalPrice;

        return $this;
    }
}
