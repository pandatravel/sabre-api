<?php

namespace Ammonkc\SabreApi\Model\OrderManagement;

use Ammonkc\SabreApi\AbstractModel;

class PaymentMethod extends AbstractModel
{
    /**
     * Contains credit card information.
     *
     * @var PaymentCreditCard
     */
    protected $paymentCard;

    /**
     * Contains credit card information.
     *
     * @return PaymentCreditCard
     */
    public function getPaymentCard(): ?PaymentCreditCard
    {
        return $this->paymentCard;
    }

    /**
     * Contains credit card information.
     *
     * @param PaymentCreditCard $paymentCard
     *
     * @return self
     */
    public function setPaymentCard(?PaymentCreditCard $paymentCard): self
    {
        $this->paymentCard = $paymentCard;

        return $this;
    }
}
