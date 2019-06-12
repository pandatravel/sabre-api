<?php

namespace Ammonkc\SabreApi\Model\OrderManagement;

use Ammonkc\SabreApi\AbstractModel;

class FulfillOrder extends AbstractModel
{
    /**
     * The unique identifier of the external order.
     *
     * @var string
     */
    protected $externalOrderId;
    /**
     * @var PaymentInfo
     */
    protected $paymentInfo;

    /**
     * The unique identifier of the external order.
     *
     * @return string
     */
    public function getExternalOrderId(): ?string
    {
        return $this->externalOrderId;
    }

    /**
     * The unique identifier of the external order.
     *
     * @param string $externalOrderId
     *
     * @return self
     */
    public function setExternalOrderId(?string $externalOrderId): self
    {
        $this->externalOrderId = $externalOrderId;

        return $this;
    }

    /**
     * @return PaymentInfo
     */
    public function getPaymentInfo(): ?PaymentInfo
    {
        return $this->paymentInfo;
    }

    /**
     * @param PaymentInfo $paymentInfo
     *
     * @return self
     */
    public function setPaymentInfo(?PaymentInfo $paymentInfo): self
    {
        $this->paymentInfo = $paymentInfo;

        return $this;
    }
}
