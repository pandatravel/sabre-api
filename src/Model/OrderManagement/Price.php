<?php

namespace Ammonkc\SabreApi\Model\OrderManagement;

use Ammonkc\SabreApi\AbstractModel;

class Price extends AbstractModel
{
    /**
     * Contains monetary information.
     *
     * @var AmountCurrency
     */
    protected $baseAmount;
    /**
     * Contains monetary information.
     *
     * @var AmountCurrency
     */
    protected $totalAmount;
    /**
     * Contains monetary information.
     *
     * @var AmountCurrency
     */
    protected $totalTaxAmount;
    /**
     * @var Tax[]
     */
    protected $taxBreakdowns;

    /**
     * Contains monetary information.
     *
     * @return AmountCurrency
     */
    public function getBaseAmount(): ?AmountCurrency
    {
        return $this->baseAmount;
    }

    /**
     * Contains monetary information.
     *
     * @param AmountCurrency $baseAmount
     *
     * @return self
     */
    public function setBaseAmount(?AmountCurrency $baseAmount): self
    {
        $this->baseAmount = $baseAmount;

        return $this;
    }

    /**
     * Contains monetary information.
     *
     * @return AmountCurrency
     */
    public function getTotalAmount(): ?AmountCurrency
    {
        return $this->totalAmount;
    }

    /**
     * Contains monetary information.
     *
     * @param AmountCurrency $totalAmount
     *
     * @return self
     */
    public function setTotalAmount(?AmountCurrency $totalAmount): self
    {
        $this->totalAmount = $totalAmount;

        return $this;
    }

    /**
     * Contains monetary information.
     *
     * @return AmountCurrency
     */
    public function getTotalTaxAmount(): ?AmountCurrency
    {
        return $this->totalTaxAmount;
    }

    /**
     * Contains monetary information.
     *
     * @param AmountCurrency $totalTaxAmount
     *
     * @return self
     */
    public function setTotalTaxAmount(?AmountCurrency $totalTaxAmount): self
    {
        $this->totalTaxAmount = $totalTaxAmount;

        return $this;
    }

    /**
     * @return Tax[]
     */
    public function getTaxBreakdowns(): ?array
    {
        return $this->taxBreakdowns;
    }

    /**
     * @param Tax[] $taxBreakdowns
     *
     * @return self
     */
    public function setTaxBreakdowns(?array $taxBreakdowns): self
    {
        $this->taxBreakdowns = $taxBreakdowns;

        return $this;
    }
}
