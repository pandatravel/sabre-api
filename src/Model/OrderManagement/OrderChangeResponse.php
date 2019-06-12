<?php

namespace Ammonkc\SabreApi\Model\OrderManagement;

use Ammonkc\SabreApi\AbstractModel;

class OrderChangeResponse extends AbstractModel
{
    /**
     * Contains details of an order.
     *
     * @var Order
     */
    protected $order;
    /**
     * @var Error[]
     */
    protected $errors;
    /**
     * @var Warning[]
     */
    protected $warnings;

    /**
     * Contains details of an order.
     *
     * @return Order
     */
    public function getOrder(): ?Order
    {
        return $this->order;
    }

    /**
     * Contains details of an order.
     *
     * @param Order $order
     *
     * @return self
     */
    public function setOrder(?Order $order): self
    {
        $this->order = $order;

        return $this;
    }

    /**
     * @return Error[]
     */
    public function getErrors(): ?array
    {
        return $this->errors;
    }

    /**
     * @param Error[] $errors
     *
     * @return self
     */
    public function setErrors(?array $errors): self
    {
        $this->errors = $errors;

        return $this;
    }

    /**
     * @return Warning[]
     */
    public function getWarnings(): ?array
    {
        return $this->warnings;
    }

    /**
     * @param Warning[] $warnings
     *
     * @return self
     */
    public function setWarnings(?array $warnings): self
    {
        $this->warnings = $warnings;

        return $this;
    }
}
