<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Ammonkc\SabreApi\Model\CreatePassengerNameRecord;

use Ammonkc\SabreApi\AbstractModel;

class CreatePassengerNameRecordRequestCreatePassengerNameRecordRQAirPriceItemPriceRequestInformationOptionalQualifiersPricingQualifiersValidityDatesItemSegment extends AbstractModel
{
    /**
     * The segment number.
     *
     * @var string
     */
    protected $number;
    /**
     * The segment end number in range.
     *
     * @var string
     */
    protected $endNumber;

    /**
     * The segment number.
     *
     * @return string
     */
    public function getNumber(): string
    {
        return $this->number;
    }

    /**
     * The segment number.
     *
     * @param string $number
     *
     * @return self
     */
    public function setNumber(string $number): self
    {
        $this->number = $number;

        return $this;
    }

    /**
     * The segment end number in range.
     *
     * @return string
     */
    public function getEndNumber(): string
    {
        return $this->endNumber;
    }

    /**
     * The segment end number in range.
     *
     * @param string $endNumber
     *
     * @return self
     */
    public function setEndNumber(string $endNumber): self
    {
        $this->endNumber = $endNumber;

        return $this;
    }
}
