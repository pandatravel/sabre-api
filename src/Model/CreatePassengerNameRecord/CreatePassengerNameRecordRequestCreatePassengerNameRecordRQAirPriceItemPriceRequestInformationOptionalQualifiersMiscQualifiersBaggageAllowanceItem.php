<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Ammonkc\SabreApi\Model\CreatePassengerNameRecord;

use Ammonkc\SabreApi\AbstractModel;

class CreatePassengerNameRecordRequestCreatePassengerNameRecordRQAirPriceItemPriceRequestInformationOptionalQualifiersMiscQualifiersBaggageAllowanceItem extends AbstractModel
{
    /**
     * Used to specify the relevant itinerary segments.
     *
     * @var CreatePassengerNameRecordRequestCreatePassengerNameRecordRQAirPriceItemPriceRequestInformationOptionalQualifiersMiscQualifiersBaggageAllowanceItemSegment
     */
    protected $segment;
    /**
     * Used to specify the quantity of checked bags.
    'Number' and 'Weight' cannot combine.

     *
     * @var string
     */
    protected $number;
    /**
     * Used to specify the weight in kilos of checked bags.
    'Number' and 'Weight' cannot combine.

     *
     * @var string
     */
    protected $weight;

    /**
     * Used to specify the relevant itinerary segments.
     *
     * @return CreatePassengerNameRecordRequestCreatePassengerNameRecordRQAirPriceItemPriceRequestInformationOptionalQualifiersMiscQualifiersBaggageAllowanceItemSegment|null
     */
    public function getSegment(): ?CreatePassengerNameRecordRequestCreatePassengerNameRecordRQAirPriceItemPriceRequestInformationOptionalQualifiersMiscQualifiersBaggageAllowanceItemSegment
    {
        return $this->segment;
    }

    /**
     * Used to specify the relevant itinerary segments.
     *
     * @param CreatePassengerNameRecordRequestCreatePassengerNameRecordRQAirPriceItemPriceRequestInformationOptionalQualifiersMiscQualifiersBaggageAllowanceItemSegment|null $segment
     *
     * @return self
     */
    public function setSegment(?CreatePassengerNameRecordRequestCreatePassengerNameRecordRQAirPriceItemPriceRequestInformationOptionalQualifiersMiscQualifiersBaggageAllowanceItemSegment $segment): self
    {
        $this->segment = $segment;

        return $this;
    }

    /**
     * Used to specify the quantity of checked bags.
    'Number' and 'Weight' cannot combine.

     *
     * @return string|null
     */
    public function getNumber(): ?string
    {
        return $this->number;
    }

    /**
     * Used to specify the quantity of checked bags.
    'Number' and 'Weight' cannot combine.

     *
     * @param string|null $number
     *
     * @return self
     */
    public function setNumber(?string $number): self
    {
        $this->number = $number;

        return $this;
    }

    /**
     * Used to specify the weight in kilos of checked bags.
    'Number' and 'Weight' cannot combine.

     *
     * @return string|null
     */
    public function getWeight(): ?string
    {
        return $this->weight;
    }

    /**
     * Used to specify the weight in kilos of checked bags.
    'Number' and 'Weight' cannot combine.

     *
     * @param string|null $weight
     *
     * @return self
     */
    public function setWeight(?string $weight): self
    {
        $this->weight = $weight;

        return $this;
    }
}
