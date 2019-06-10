<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Ammonkc\SabreApi\Model\CreatePassengerNameRecord;

use Ammonkc\SabreApi\AbstractModel;

class CreatePassengerNameRecordRequestCreatePassengerNameRecordRQAirPriceItemPriceRequestInformationOptionalQualifiersFOPQualifiersBSPTicketingMultipleMiscFOPTaxesTaxItem extends AbstractModel
{
    /**
     * Used to specify the tax amount.
     *
     * @var string
     */
    protected $amount;
    /**
     * Used to specify the tax code.
     *
     * @var string
     */
    protected $taxCode;

    /**
     * Used to specify the tax amount.
     *
     * @return string
     */
    public function getAmount(): ?string
    {
        return $this->amount;
    }

    /**
     * Used to specify the tax amount.
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
     * Used to specify the tax code.
     *
     * @return string
     */
    public function getTaxCode(): ?string
    {
        return $this->taxCode;
    }

    /**
     * Used to specify the tax code.
     *
     * @param string $taxCode
     *
     * @return self
     */
    public function setTaxCode(?string $taxCode): self
    {
        $this->taxCode = $taxCode;

        return $this;
    }
}
