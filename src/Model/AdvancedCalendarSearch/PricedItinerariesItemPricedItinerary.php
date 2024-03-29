<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Ammonkc\SabreApi\Model\AdvancedCalendarSearch;

use Ammonkc\SabreApi\AbstractModel;

class PricedItinerariesItemPricedItinerary extends AbstractModel
{
    /**
     * @var int
     */
    protected $sequenceNumber;
    /**
     * Please see full specification in json schema and json schema description files - API resources.
     *
     * @var mixed
     */
    protected $airItinerary;
    /**
     * Please see full specification in json schema and json schema description files - API resources.
     *
     * @var mixed[]
     */
    protected $airItineraryPricingInfo;
    /**
     * Please see full specification in json schema and json schema description files - API resources.
     *
     * @var mixed
     */
    protected $ticketingInfo;
    /**
     * Please see full specification in json schema and json schema description files - API resources.
     *
     * @var mixed
     */
    protected $tPAExtensions;

    /**
     * @return int
     */
    public function getSequenceNumber(): ?int
    {
        return $this->sequenceNumber;
    }

    /**
     * @param int $sequenceNumber
     *
     * @return self
     */
    public function setSequenceNumber(?int $sequenceNumber): self
    {
        $this->sequenceNumber = $sequenceNumber;

        return $this;
    }

    /**
     * Please see full specification in json schema and json schema description files - API resources.
     *
     * @return mixed
     */
    public function getAirItinerary()
    {
        return $this->airItinerary;
    }

    /**
     * Please see full specification in json schema and json schema description files - API resources.
     *
     * @param mixed $airItinerary
     *
     * @return self
     */
    public function setAirItinerary($airItinerary): self
    {
        $this->airItinerary = $airItinerary;

        return $this;
    }

    /**
     * Please see full specification in json schema and json schema description files - API resources.
     *
     * @return mixed[]
     */
    public function getAirItineraryPricingInfo(): ?array
    {
        return $this->airItineraryPricingInfo;
    }

    /**
     * Please see full specification in json schema and json schema description files - API resources.
     *
     * @param mixed[] $airItineraryPricingInfo
     *
     * @return self
     */
    public function setAirItineraryPricingInfo(?array $airItineraryPricingInfo): self
    {
        $this->airItineraryPricingInfo = $airItineraryPricingInfo;

        return $this;
    }

    /**
     * Please see full specification in json schema and json schema description files - API resources.
     *
     * @return mixed
     */
    public function getTicketingInfo()
    {
        return $this->ticketingInfo;
    }

    /**
     * Please see full specification in json schema and json schema description files - API resources.
     *
     * @param mixed $ticketingInfo
     *
     * @return self
     */
    public function setTicketingInfo($ticketingInfo): self
    {
        $this->ticketingInfo = $ticketingInfo;

        return $this;
    }

    /**
     * Please see full specification in json schema and json schema description files - API resources.
     *
     * @return mixed
     */
    public function getTPAExtensions()
    {
        return $this->tPAExtensions;
    }

    /**
     * Please see full specification in json schema and json schema description files - API resources.
     *
     * @param mixed $tPAExtensions
     *
     * @return self
     */
    public function setTPAExtensions($tPAExtensions): self
    {
        $this->tPAExtensions = $tPAExtensions;

        return $this;
    }
}
