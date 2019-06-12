<?php

namespace Ammonkc\SabreApi\Model\OrderManagement;

use Ammonkc\SabreApi\AbstractModel;

class PaymentInfo extends AbstractModel
{
    /**
     * The `PaymentInfo` unique identifier.
     *
     * @var string
     */
    protected $id;
    /**
     * Contains monetary information.
     *
     * @var AmountCurrency
     */
    protected $amount;
    /**
     * Contains payment method details.
     *
     * @var PaymentMethod
     */
    protected $paymentMethod;
    /**
     * A list of `OrderItem` unique identifiers associated with the payment.
     *
     * @var string[]
     */
    protected $orderItemRefIds;

    /**
     * The `PaymentInfo` unique identifier.
     *
     * @return string
     */
    public function getId(): ?string
    {
        return $this->id;
    }

    /**
     * The `PaymentInfo` unique identifier.
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
     * Contains monetary information.
     *
     * @return AmountCurrency
     */
    public function getAmount(): ?AmountCurrency
    {
        return $this->amount;
    }

    /**
     * Contains monetary information.
     *
     * @param AmountCurrency $amount
     *
     * @return self
     */
    public function setAmount(?AmountCurrency $amount): self
    {
        $this->amount = $amount;

        return $this;
    }

    /**
     * Contains payment method details.
     *
     * @return PaymentMethod
     */
    public function getPaymentMethod(): ?PaymentMethod
    {
        return $this->paymentMethod;
    }

    /**
     * Contains payment method details.
     *
     * @param PaymentMethod $paymentMethod
     *
     * @return self
     */
    public function setPaymentMethod(?PaymentMethod $paymentMethod): self
    {
        $this->paymentMethod = $paymentMethod;

        return $this;
    }

    /**
     * A list of `OrderItem` unique identifiers associated with the payment.
     *
     * @return string[]
     */
    public function getOrderItemRefIds(): ?array
    {
        return $this->orderItemRefIds;
    }

    /**
     * A list of `OrderItem` unique identifiers associated with the payment.
     *
     * @param string[] $orderItemRefIds
     *
     * @return self
     */
    public function setOrderItemRefIds(?array $orderItemRefIds): self
    {
        $this->orderItemRefIds = $orderItemRefIds;

        return $this;
    }
}
