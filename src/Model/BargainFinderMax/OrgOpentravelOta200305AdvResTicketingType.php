<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Ammonkc\SabreApi\Model\BargainFinderMax;

use Ammonkc\SabreApi\AbstractModel;

class OrgOpentravelOta200305AdvResTicketingType extends AbstractModel
{
    /**
     * Indicator for identifying whether or not advance reservation
     * restrictions are involved in the request or response.
     *
     * @var bool
     */
    protected $advResInd;
    /**
     * Specifies constraints on date of advance reservations.
     *
     * @var OrgOpentravelOta200305AdvResTicketingTypeAdvReservation
     */
    protected $advReservation;
    /**
     * Specifies advance ticketing restrictions.
     *
     * @var OrgOpentravelOta200305AdvResTicketingTypeAdvTicketing
     */
    protected $advTicketing;
    /**
     * Indicator for identifying whether or not advance ticketing
     * restrictions are involved in the request or response.
     *
     * @var bool
     */
    protected $advTicketingInd;

    /**
     * Indicator for identifying whether or not advance reservation
     * restrictions are involved in the request or response.
     *
     * @return bool|null
     */
    public function getAdvResInd(): ?bool
    {
        return $this->advResInd;
    }

    /**
     * Indicator for identifying whether or not advance reservation
     * restrictions are involved in the request or response.
     *
     * @param bool|null $advResInd
     *
     * @return self
     */
    public function setAdvResInd(?bool $advResInd): self
    {
        $this->advResInd = $advResInd;

        return $this;
    }

    /**
     * Specifies constraints on date of advance reservations.
     *
     * @return OrgOpentravelOta200305AdvResTicketingTypeAdvReservation|null
     */
    public function getAdvReservation(): ?OrgOpentravelOta200305AdvResTicketingTypeAdvReservation
    {
        return $this->advReservation;
    }

    /**
     * Specifies constraints on date of advance reservations.
     *
     * @param OrgOpentravelOta200305AdvResTicketingTypeAdvReservation|null $advReservation
     *
     * @return self
     */
    public function setAdvReservation(?OrgOpentravelOta200305AdvResTicketingTypeAdvReservation $advReservation): self
    {
        $this->advReservation = $advReservation;

        return $this;
    }

    /**
     * Specifies advance ticketing restrictions.
     *
     * @return OrgOpentravelOta200305AdvResTicketingTypeAdvTicketing|null
     */
    public function getAdvTicketing(): ?OrgOpentravelOta200305AdvResTicketingTypeAdvTicketing
    {
        return $this->advTicketing;
    }

    /**
     * Specifies advance ticketing restrictions.
     *
     * @param OrgOpentravelOta200305AdvResTicketingTypeAdvTicketing|null $advTicketing
     *
     * @return self
     */
    public function setAdvTicketing(?OrgOpentravelOta200305AdvResTicketingTypeAdvTicketing $advTicketing): self
    {
        $this->advTicketing = $advTicketing;

        return $this;
    }

    /**
     * Indicator for identifying whether or not advance ticketing
     * restrictions are involved in the request or response.
     *
     * @return bool|null
     */
    public function getAdvTicketingInd(): ?bool
    {
        return $this->advTicketingInd;
    }

    /**
     * Indicator for identifying whether or not advance ticketing
     * restrictions are involved in the request or response.
     *
     * @param bool|null $advTicketingInd
     *
     * @return self
     */
    public function setAdvTicketingInd(?bool $advTicketingInd): self
    {
        $this->advTicketingInd = $advTicketingInd;

        return $this;
    }
}
