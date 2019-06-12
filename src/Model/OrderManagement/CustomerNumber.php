<?php

namespace Ammonkc\SabreApi\Model\OrderManagement;

use Ammonkc\SabreApi\AbstractModel;

class CustomerNumber extends AbstractModel
{
    /**
     * The customer's DK number.
     *
     * @var string
     */
    protected $number;

    /**
     * The customer's DK number.
     *
     * @return string
     */
    public function getNumber(): ?string
    {
        return $this->number;
    }

    /**
     * The customer's DK number.
     *
     * @param string $number
     *
     * @return self
     */
    public function setNumber(?string $number): self
    {
        $this->number = $number;

        return $this;
    }
}
