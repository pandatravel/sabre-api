<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Ammonkc\SabreApi\Model\CreatePassengerNameRecord;

use Ammonkc\SabreApi\AbstractModel;

class CreatePassengerNameRecordResponseCreatePassengerNameRecordRSAirPriceItemPriceQuotePricedItineraryAirItineraryPricingInfoItemTicketingFeesItemFeeInformation extends AbstractModel
{
    /**
     * Returns ticketing fee account-related information.
     *
     * @var string
     */
    protected $accountData;
    /**
     * Ticketing fee amount.
     *
     * @var string
     */
    protected $amount;
    /**
     * Ticketing fee function code.
     *
     * @var string
     */
    protected $functionCode;
    /**
     * Ticketing fee service type.
     *
     * @var string
     */
    protected $serviceType;

    /**
     * Returns ticketing fee account-related information.
     *
     * @return string
     */
    public function getAccountData(): ?string
    {
        return $this->accountData;
    }

    /**
     * Returns ticketing fee account-related information.
     *
     * @param string $accountData
     *
     * @return self
     */
    public function setAccountData(?string $accountData): self
    {
        $this->accountData = $accountData;

        return $this;
    }

    /**
     * Ticketing fee amount.
     *
     * @return string
     */
    public function getAmount(): ?string
    {
        return $this->amount;
    }

    /**
     * Ticketing fee amount.
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
     * Ticketing fee function code.
     *
     * @return string
     */
    public function getFunctionCode(): ?string
    {
        return $this->functionCode;
    }

    /**
     * Ticketing fee function code.
     *
     * @param string $functionCode
     *
     * @return self
     */
    public function setFunctionCode(?string $functionCode): self
    {
        $this->functionCode = $functionCode;

        return $this;
    }

    /**
     * Ticketing fee service type.
     *
     * @return string
     */
    public function getServiceType(): ?string
    {
        return $this->serviceType;
    }

    /**
     * Ticketing fee service type.
     *
     * @param string $serviceType
     *
     * @return self
     */
    public function setServiceType(?string $serviceType): self
    {
        $this->serviceType = $serviceType;

        return $this;
    }
}