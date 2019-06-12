<?php

namespace Ammonkc\SabreApi\Model\OrderManagement;

use Ammonkc\SabreApi\AbstractModel;

class Action extends AbstractModel
{
    /**
     * The unique identifier of the action.
     *
     * @var string
     */
    protected $id;
    /**
     * Contains information related to the settlement of a transaction through monetary or other compensations.
     *
     * @var FulfillOrder
     */
    protected $fulfillOrder;

    /**
     * The unique identifier of the action.
     *
     * @return string
     */
    public function getId(): ?string
    {
        return $this->id;
    }

    /**
     * The unique identifier of the action.
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
     * Contains information related to the settlement of a transaction through monetary or other compensations.
     *
     * @return FulfillOrder
     */
    public function getFulfillOrder(): ?FulfillOrder
    {
        return $this->fulfillOrder;
    }

    /**
     * Contains information related to the settlement of a transaction through monetary or other compensations.
     *
     * @param FulfillOrder $fulfillOrder
     *
     * @return self
     */
    public function setFulfillOrder(?FulfillOrder $fulfillOrder): self
    {
        $this->fulfillOrder = $fulfillOrder;

        return $this;
    }
}
