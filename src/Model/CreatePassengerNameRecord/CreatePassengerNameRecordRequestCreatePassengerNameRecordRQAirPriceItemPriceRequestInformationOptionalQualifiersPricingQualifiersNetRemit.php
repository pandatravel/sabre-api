<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Ammonkc\SabreApi\Model\CreatePassengerNameRecord;

use Ammonkc\SabreApi\AbstractModel;

class CreatePassengerNameRecordRequestCreatePassengerNameRecordRQAirPriceItemPriceRequestInformationOptionalQualifiersPricingQualifiersNetRemit extends AbstractModel
{
    /**
     * The 'CAR' code.
     *
     * @var CreatePassengerNameRecordRequestCreatePassengerNameRecordRQAirPriceItemPriceRequestInformationOptionalQualifiersPricingQualifiersNetRemitCAR
     */
    protected $cAR;
    /**
     * Used to specify the amount of net cash.
     *
     * @var CreatePassengerNameRecordRequestCreatePassengerNameRecordRQAirPriceItemPriceRequestInformationOptionalQualifiersPricingQualifiersNetRemitCash
     */
    protected $cash;
    /**
     * Used to specify the amount of credit.
     *
     * @var CreatePassengerNameRecordRequestCreatePassengerNameRecordRQAirPriceItemPriceRequestInformationOptionalQualifiersPricingQualifiersNetRemitCredit
     */
    protected $credit;
    /**
     * The net remit code.
     *
     * @var string
     */
    protected $code;

    /**
     * The 'CAR' code.
     *
     * @return CreatePassengerNameRecordRequestCreatePassengerNameRecordRQAirPriceItemPriceRequestInformationOptionalQualifiersPricingQualifiersNetRemitCAR|null
     */
    public function getCAR(): ?CreatePassengerNameRecordRequestCreatePassengerNameRecordRQAirPriceItemPriceRequestInformationOptionalQualifiersPricingQualifiersNetRemitCAR
    {
        return $this->cAR;
    }

    /**
     * The 'CAR' code.
     *
     * @param CreatePassengerNameRecordRequestCreatePassengerNameRecordRQAirPriceItemPriceRequestInformationOptionalQualifiersPricingQualifiersNetRemitCAR|null $cAR
     *
     * @return self
     */
    public function setCAR(?CreatePassengerNameRecordRequestCreatePassengerNameRecordRQAirPriceItemPriceRequestInformationOptionalQualifiersPricingQualifiersNetRemitCAR $cAR): self
    {
        $this->cAR = $cAR;

        return $this;
    }

    /**
     * Used to specify the amount of net cash.
     *
     * @return CreatePassengerNameRecordRequestCreatePassengerNameRecordRQAirPriceItemPriceRequestInformationOptionalQualifiersPricingQualifiersNetRemitCash|null
     */
    public function getCash(): ?CreatePassengerNameRecordRequestCreatePassengerNameRecordRQAirPriceItemPriceRequestInformationOptionalQualifiersPricingQualifiersNetRemitCash
    {
        return $this->cash;
    }

    /**
     * Used to specify the amount of net cash.
     *
     * @param CreatePassengerNameRecordRequestCreatePassengerNameRecordRQAirPriceItemPriceRequestInformationOptionalQualifiersPricingQualifiersNetRemitCash|null $cash
     *
     * @return self
     */
    public function setCash(?CreatePassengerNameRecordRequestCreatePassengerNameRecordRQAirPriceItemPriceRequestInformationOptionalQualifiersPricingQualifiersNetRemitCash $cash): self
    {
        $this->cash = $cash;

        return $this;
    }

    /**
     * Used to specify the amount of credit.
     *
     * @return CreatePassengerNameRecordRequestCreatePassengerNameRecordRQAirPriceItemPriceRequestInformationOptionalQualifiersPricingQualifiersNetRemitCredit|null
     */
    public function getCredit(): ?CreatePassengerNameRecordRequestCreatePassengerNameRecordRQAirPriceItemPriceRequestInformationOptionalQualifiersPricingQualifiersNetRemitCredit
    {
        return $this->credit;
    }

    /**
     * Used to specify the amount of credit.
     *
     * @param CreatePassengerNameRecordRequestCreatePassengerNameRecordRQAirPriceItemPriceRequestInformationOptionalQualifiersPricingQualifiersNetRemitCredit|null $credit
     *
     * @return self
     */
    public function setCredit(?CreatePassengerNameRecordRequestCreatePassengerNameRecordRQAirPriceItemPriceRequestInformationOptionalQualifiersPricingQualifiersNetRemitCredit $credit): self
    {
        $this->credit = $credit;

        return $this;
    }

    /**
     * The net remit code.
     *
     * @return string|null
     */
    public function getCode(): ?string
    {
        return $this->code;
    }

    /**
     * The net remit code.
     *
     * @param string|null $code
     *
     * @return self
     */
    public function setCode(?string $code): self
    {
        $this->code = $code;

        return $this;
    }
}
