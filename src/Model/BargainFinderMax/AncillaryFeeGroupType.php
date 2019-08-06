<?php

namespace Ammonkc\SabreApi\Model\BargainFinderMax;

use Ammonkc\SabreApi\AbstractModel;

class AncillaryFeeGroupType extends AbstractModel
{
    /**
     * @var AncillaryFeeType[]
     */
    protected $ancillaryFees;
    /**
     * @var string
     */
    protected $message;
    /**
     * @var OrderStandardBag
     */
    protected $orderStandardBag;

    /**
     * @return AncillaryFeeType[]
     */
    public function getAncillaryFees(): array
    {
        return $this->ancillaryFees;
    }

    /**
     * @param AncillaryFeeType[] $ancillaryFees
     *
     * @return self
     */
    public function setAncillaryFees(array $ancillaryFees): self
    {
        $this->ancillaryFees = $ancillaryFees;

        return $this;
    }

    /**
     * @return string
     */
    public function getMessage(): string
    {
        return $this->message;
    }

    /**
     * @param string $message
     *
     * @return self
     */
    public function setMessage(string $message): self
    {
        $this->message = $message;

        return $this;
    }

    /**
     * @return OrderStandardBag
     */
    public function getOrderStandardBag(): OrderStandardBag
    {
        return $this->orderStandardBag;
    }

    /**
     * @param OrderStandardBag $orderStandardBag
     *
     * @return self
     */
    public function setOrderStandardBag(OrderStandardBag $orderStandardBag): self
    {
        $this->orderStandardBag = $orderStandardBag;

        return $this;
    }
}
