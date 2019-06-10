<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Ammonkc\SabreApi\Model\CreatePassengerNameRecord;

use Ammonkc\SabreApi\AbstractModel;

class CreatePassengerNameRecordRequestCreatePassengerNameRecordRQAirPriceItemPriceRequestInformationOptionalQualifiers extends AbstractModel
{
    /**
     * Used to define carrier specific variables.
     *
     * @var CreatePassengerNameRecordRequestCreatePassengerNameRecordRQAirPriceItemPriceRequestInformationOptionalQualifiersFlightQualifiers
     */
    protected $flightQualifiers;
    /**
     * Used to define form of payment variables.
     *
     * @var CreatePassengerNameRecordRequestCreatePassengerNameRecordRQAirPriceItemPriceRequestInformationOptionalQualifiersFOPQualifiers
     */
    protected $fOPQualifiers;
    /**
     * Used to define miscellaneous variables.
     *
     * @var CreatePassengerNameRecordRequestCreatePassengerNameRecordRQAirPriceItemPriceRequestInformationOptionalQualifiersMiscQualifiers
     */
    protected $miscQualifiers;
    /**
     * All the price specific variables.
     *
     * @var CreatePassengerNameRecordRequestCreatePassengerNameRecordRQAirPriceItemPriceRequestInformationOptionalQualifiersPricingQualifiers
     */
    protected $pricingQualifiers;

    /**
     * Used to define carrier specific variables.
     *
     * @return CreatePassengerNameRecordRequestCreatePassengerNameRecordRQAirPriceItemPriceRequestInformationOptionalQualifiersFlightQualifiers
     */
    public function getFlightQualifiers(): ?CreatePassengerNameRecordRequestCreatePassengerNameRecordRQAirPriceItemPriceRequestInformationOptionalQualifiersFlightQualifiers
    {
        return $this->flightQualifiers;
    }

    /**
     * Used to define carrier specific variables.
     *
     * @param CreatePassengerNameRecordRequestCreatePassengerNameRecordRQAirPriceItemPriceRequestInformationOptionalQualifiersFlightQualifiers $flightQualifiers
     *
     * @return self
     */
    public function setFlightQualifiers(?CreatePassengerNameRecordRequestCreatePassengerNameRecordRQAirPriceItemPriceRequestInformationOptionalQualifiersFlightQualifiers $flightQualifiers): self
    {
        $this->flightQualifiers = $flightQualifiers;

        return $this;
    }

    /**
     * Used to define form of payment variables.
     *
     * @return CreatePassengerNameRecordRequestCreatePassengerNameRecordRQAirPriceItemPriceRequestInformationOptionalQualifiersFOPQualifiers
     */
    public function getFOPQualifiers(): ?CreatePassengerNameRecordRequestCreatePassengerNameRecordRQAirPriceItemPriceRequestInformationOptionalQualifiersFOPQualifiers
    {
        return $this->fOPQualifiers;
    }

    /**
     * Used to define form of payment variables.
     *
     * @param CreatePassengerNameRecordRequestCreatePassengerNameRecordRQAirPriceItemPriceRequestInformationOptionalQualifiersFOPQualifiers $fOPQualifiers
     *
     * @return self
     */
    public function setFOPQualifiers(?CreatePassengerNameRecordRequestCreatePassengerNameRecordRQAirPriceItemPriceRequestInformationOptionalQualifiersFOPQualifiers $fOPQualifiers): self
    {
        $this->fOPQualifiers = $fOPQualifiers;

        return $this;
    }

    /**
     * Used to define miscellaneous variables.
     *
     * @return CreatePassengerNameRecordRequestCreatePassengerNameRecordRQAirPriceItemPriceRequestInformationOptionalQualifiersMiscQualifiers
     */
    public function getMiscQualifiers(): ?CreatePassengerNameRecordRequestCreatePassengerNameRecordRQAirPriceItemPriceRequestInformationOptionalQualifiersMiscQualifiers
    {
        return $this->miscQualifiers;
    }

    /**
     * Used to define miscellaneous variables.
     *
     * @param CreatePassengerNameRecordRequestCreatePassengerNameRecordRQAirPriceItemPriceRequestInformationOptionalQualifiersMiscQualifiers $miscQualifiers
     *
     * @return self
     */
    public function setMiscQualifiers(?CreatePassengerNameRecordRequestCreatePassengerNameRecordRQAirPriceItemPriceRequestInformationOptionalQualifiersMiscQualifiers $miscQualifiers): self
    {
        $this->miscQualifiers = $miscQualifiers;

        return $this;
    }

    /**
     * All the price specific variables.
     *
     * @return CreatePassengerNameRecordRequestCreatePassengerNameRecordRQAirPriceItemPriceRequestInformationOptionalQualifiersPricingQualifiers
     */
    public function getPricingQualifiers(): ?CreatePassengerNameRecordRequestCreatePassengerNameRecordRQAirPriceItemPriceRequestInformationOptionalQualifiersPricingQualifiers
    {
        return $this->pricingQualifiers;
    }

    /**
     * All the price specific variables.
     *
     * @param CreatePassengerNameRecordRequestCreatePassengerNameRecordRQAirPriceItemPriceRequestInformationOptionalQualifiersPricingQualifiers $pricingQualifiers
     *
     * @return self
     */
    public function setPricingQualifiers(?CreatePassengerNameRecordRequestCreatePassengerNameRecordRQAirPriceItemPriceRequestInformationOptionalQualifiersPricingQualifiers $pricingQualifiers): self
    {
        $this->pricingQualifiers = $pricingQualifiers;

        return $this;
    }
}