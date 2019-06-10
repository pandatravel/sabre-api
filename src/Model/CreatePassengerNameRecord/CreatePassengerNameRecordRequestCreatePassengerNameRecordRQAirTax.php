<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Ammonkc\SabreApi\Model\CreatePassengerNameRecord;

use Ammonkc\SabreApi\AbstractModel;

class CreatePassengerNameRecordRequestCreatePassengerNameRecordRQAirTax extends AbstractModel
{
    /**
     * Itinerary information.
     *
     * @var CreatePassengerNameRecordRequestCreatePassengerNameRecordRQAirTaxItineraryInfos
     */
    protected $itineraryInfos;
    /**
     * Point of Sale details.
     *
     * @var CreatePassengerNameRecordRequestCreatePassengerNameRecordRQAirTaxPOS
     */
    protected $pOS;

    /**
     * Itinerary information.
     *
     * @return CreatePassengerNameRecordRequestCreatePassengerNameRecordRQAirTaxItineraryInfos
     */
    public function getItineraryInfos(): ?CreatePassengerNameRecordRequestCreatePassengerNameRecordRQAirTaxItineraryInfos
    {
        return $this->itineraryInfos;
    }

    /**
     * Itinerary information.
     *
     * @param CreatePassengerNameRecordRequestCreatePassengerNameRecordRQAirTaxItineraryInfos $itineraryInfos
     *
     * @return self
     */
    public function setItineraryInfos(?CreatePassengerNameRecordRequestCreatePassengerNameRecordRQAirTaxItineraryInfos $itineraryInfos): self
    {
        $this->itineraryInfos = $itineraryInfos;

        return $this;
    }

    /**
     * Point of Sale details.
     *
     * @return CreatePassengerNameRecordRequestCreatePassengerNameRecordRQAirTaxPOS
     */
    public function getPOS(): ?CreatePassengerNameRecordRequestCreatePassengerNameRecordRQAirTaxPOS
    {
        return $this->pOS;
    }

    /**
     * Point of Sale details.
     *
     * @param CreatePassengerNameRecordRequestCreatePassengerNameRecordRQAirTaxPOS $pOS
     *
     * @return self
     */
    public function setPOS(?CreatePassengerNameRecordRequestCreatePassengerNameRecordRQAirTaxPOS $pOS): self
    {
        $this->pOS = $pOS;

        return $this;
    }
}
