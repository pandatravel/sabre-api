<?php

namespace Ammonkc\SabreApi\Model\EnhancedAirTicket;

use Ammonkc\SabreApi\AbstractModel;

class TicketingItemMiscQualifiersNetRemit extends AbstractModel
{
    /**
     * "Amount" is used to enter manual/NET amount.
     *
     * @var float
     */
    protected $amount;
    /**
     * "ContractAgreementCode" is used to enter manual NET/net code with contract agreement reference code.
     *
     * @var string
     */
    protected $contractAgreementCode;
    /**
     * "NetCreditAmount" is used to enter credit card amount.
     *
     * @var float
     */
    protected $netCreditAmount;
    /**
     * "ValueCode" is used to enter manual NET/net code with value code.
     *
     * @var string
     */
    protected $valueCode;

    /**
     * "Amount" is used to enter manual/NET amount.
     *
     * @return float
     */
    public function getAmount(): ?float
    {
        return $this->amount;
    }

    /**
     * "Amount" is used to enter manual/NET amount.
     *
     * @param float $amount
     *
     * @return self
     */
    public function setAmount(?float $amount): self
    {
        $this->amount = $amount;

        return $this;
    }

    /**
     * "ContractAgreementCode" is used to enter manual NET/net code with contract agreement reference code.
     *
     * @return string
     */
    public function getContractAgreementCode(): ?string
    {
        return $this->contractAgreementCode;
    }

    /**
     * "ContractAgreementCode" is used to enter manual NET/net code with contract agreement reference code.
     *
     * @param string $contractAgreementCode
     *
     * @return self
     */
    public function setContractAgreementCode(?string $contractAgreementCode): self
    {
        $this->contractAgreementCode = $contractAgreementCode;

        return $this;
    }

    /**
     * "NetCreditAmount" is used to enter credit card amount.
     *
     * @return float
     */
    public function getNetCreditAmount(): ?float
    {
        return $this->netCreditAmount;
    }

    /**
     * "NetCreditAmount" is used to enter credit card amount.
     *
     * @param float $netCreditAmount
     *
     * @return self
     */
    public function setNetCreditAmount(?float $netCreditAmount): self
    {
        $this->netCreditAmount = $netCreditAmount;

        return $this;
    }

    /**
     * "ValueCode" is used to enter manual NET/net code with value code.
     *
     * @return string
     */
    public function getValueCode(): ?string
    {
        return $this->valueCode;
    }

    /**
     * "ValueCode" is used to enter manual NET/net code with value code.
     *
     * @param string $valueCode
     *
     * @return self
     */
    public function setValueCode(?string $valueCode): self
    {
        $this->valueCode = $valueCode;

        return $this;
    }
}
