<?php

namespace Ammonkc\SabreApi\Model\OrderManagement;

use Ammonkc\SabreApi\AbstractModel;

class LoyaltyProgramAccount extends AbstractModel
{
    /**
     * The frequent flyer account number.
     *
     * @var string
     */
    protected $accountNumber;
    /**
     * @var CarrierInfo
     */
    protected $carrier;

    /**
     * The frequent flyer account number.
     *
     * @return string
     */
    public function getAccountNumber(): ?string
    {
        return $this->accountNumber;
    }

    /**
     * The frequent flyer account number.
     *
     * @param string $accountNumber
     *
     * @return self
     */
    public function setAccountNumber(?string $accountNumber): self
    {
        $this->accountNumber = $accountNumber;

        return $this;
    }

    /**
     * @return CarrierInfo
     */
    public function getCarrier(): ?CarrierInfo
    {
        return $this->carrier;
    }

    /**
     * @param CarrierInfo $carrier
     *
     * @return self
     */
    public function setCarrier(?CarrierInfo $carrier): self
    {
        $this->carrier = $carrier;

        return $this;
    }
}
