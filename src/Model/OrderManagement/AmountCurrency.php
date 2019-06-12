<?php

namespace Ammonkc\SabreApi\Model\OrderManagement;

use Ammonkc\SabreApi\AbstractModel;

class AmountCurrency extends AbstractModel
{
    /**
     * The monetary amount.
     *
     * @var string
     */
    protected $amount;
    /**
     * The three-letter [ISO 4217](https://www.iso.org/iso-4217-currency-codes.html) currency code.
     *
     * @var string
     */
    protected $code;

    /**
     * The monetary amount.
     *
     * @return string
     */
    public function getAmount(): ?string
    {
        return $this->amount;
    }

    /**
     * The monetary amount.
     *
     * @param string $amount
     *
     * @return self
     */
    public function setAmount(?string $amount): self
    {
        $this->amount = $amount;

        return $this;
    }

    /**
     * The three-letter [ISO 4217](https://www.iso.org/iso-4217-currency-codes.html) currency code.
     *
     * @return string
     */
    public function getCode(): ?string
    {
        return $this->code;
    }

    /**
     * The three-letter [ISO 4217](https://www.iso.org/iso-4217-currency-codes.html) currency code.
     *
     * @param string $code
     *
     * @return self
     */
    public function setCode(?string $code): self
    {
        $this->code = $code;

        return $this;
    }
}
