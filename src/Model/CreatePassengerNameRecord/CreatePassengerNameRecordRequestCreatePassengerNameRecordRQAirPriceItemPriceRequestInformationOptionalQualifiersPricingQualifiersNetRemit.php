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
     * Car code.
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
     * Net remit code.
     *
     * @var string
     */
    protected $code;

    /**
     * Car code.
     *
     * @return CreatePassengerNameRecordRequestCreatePassengerNameRecordRQAirPriceItemPriceRequestInformationOptionalQualifiersPricingQualifiersNetRemitCAR
     */
    public function getCAR(): ?CreatePassengerNameRecordRequestCreatePassengerNameRecordRQAirPriceItemPriceRequestInformationOptionalQualifiersPricingQualifiersNetRemitCAR
    {
        return $this->cAR;
    }

    /**
     * Car code.
     *
     * @param CreatePassengerNameRecordRequestCreatePassengerNameRecordRQAirPriceItemPriceRequestInformationOptionalQualifiersPricingQualifiersNetRemitCAR $cAR
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
     * @return CreatePassengerNameRecordRequestCreatePassengerNameRecordRQAirPriceItemPriceRequestInformationOptionalQualifiersPricingQualifiersNetRemitCash
     */
    public function getCash(): ?CreatePassengerNameRecordRequestCreatePassengerNameRecordRQAirPriceItemPriceRequestInformationOptionalQualifiersPricingQualifiersNetRemitCash
    {
        return $this->cash;
    }

    /**
     * Used to specify the amount of net cash.
     *
     * @param CreatePassengerNameRecordRequestCreatePassengerNameRecordRQAirPriceItemPriceRequestInformationOptionalQualifiersPricingQualifiersNetRemitCash $cash
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
     * @return CreatePassengerNameRecordRequestCreatePassengerNameRecordRQAirPriceItemPriceRequestInformationOptionalQualifiersPricingQualifiersNetRemitCredit
     */
    public function getCredit(): ?CreatePassengerNameRecordRequestCreatePassengerNameRecordRQAirPriceItemPriceRequestInformationOptionalQualifiersPricingQualifiersNetRemitCredit
    {
        return $this->credit;
    }

    /**
     * Used to specify the amount of credit.
     *
     * @param CreatePassengerNameRecordRequestCreatePassengerNameRecordRQAirPriceItemPriceRequestInformationOptionalQualifiersPricingQualifiersNetRemitCredit $credit
     *
     * @return self
     */
    public function setCredit(?CreatePassengerNameRecordRequestCreatePassengerNameRecordRQAirPriceItemPriceRequestInformationOptionalQualifiersPricingQualifiersNetRemitCredit $credit): self
    {
        $this->credit = $credit;

        return $this;
    }

    /**
     * Net remit code.
     *
     * @return string
     */
    public function getCode(): ?string
    {
        return $this->code;
    }

    /**
     * Net remit code.
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