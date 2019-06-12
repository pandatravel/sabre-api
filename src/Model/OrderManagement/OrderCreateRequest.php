<?php

namespace Ammonkc\SabreApi\Model\OrderManagement;

use Ammonkc\SabreApi\AbstractModel;

class OrderCreateRequest extends AbstractModel
{
    /**
     * Contains the sender of the request.
     *
     * @var Party
     */
    protected $party;
    /**
     * @var CreateOrder[]
     */
    protected $createOrders;
    /**
     * @var ContactInfo[]
     */
    protected $contactInfos;
    /**
     * @var Passenger[]
     */
    protected $passengers;
    /**
     * Contains the customer's DK number.
     *
     * @var CustomerNumber
     */
    protected $customerNumber;

    /**
     * Contains the sender of the request.
     *
     * @return Party
     */
    public function getParty(): ?Party
    {
        return $this->party;
    }

    /**
     * Contains the sender of the request.
     *
     * @param Party $party
     *
     * @return self
     */
    public function setParty(?Party $party): self
    {
        $this->party = $party;

        return $this;
    }

    /**
     * @return CreateOrder[]
     */
    public function getCreateOrders(): ?array
    {
        return $this->createOrders;
    }

    /**
     * @param CreateOrder[] $createOrders
     *
     * @return self
     */
    public function setCreateOrders(?array $createOrders): self
    {
        $this->createOrders = $createOrders;

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
}
