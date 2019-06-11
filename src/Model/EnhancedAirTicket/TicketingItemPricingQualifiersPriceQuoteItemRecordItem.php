<?php

namespace Ammonkc\SabreApi\Model\EnhancedAirTicket;

use Ammonkc\SabreApi\AbstractModel;

class TicketingItemPricingQualifiersPriceQuoteItemRecordItem extends AbstractModel
{
    /**
     * "EndNumber" is used to specify the ending PQ number in a range.
     *
     * @var int
     */
    protected $endNumber;
    /**
     * "Number" is used to specify a PQ number.
     *
     * @var int
     */
    protected $number;
    /**
     * "Reissue" is used to indicate that the particular PQ record is a PQ Reissue record.

    In order to specify multiple PQR records to be issued please specify a range or specific record numbers by means of the object repetition in an array of Records

    .../Ticketing/PricingQualifiers/PriceQuote/Record/Reissue cannot be combined with .../Ticketing/MiscQualifiers/Ticket

     *
     * @var bool
     */
    protected $reissue;

    /**
     * "EndNumber" is used to specify the ending PQ number in a range.
     *
     * @return int
     */
    public function getEndNumber(): ?int
    {
        return $this->endNumber;
    }

    /**
     * "EndNumber" is used to specify the ending PQ number in a range.
     *
     * @param int $endNumber
     *
     * @return self
     */
    public function setEndNumber(?int $endNumber): self
    {
        $this->endNumber = $endNumber;

        return $this;
    }

    /**
     * "Number" is used to specify a PQ number.
     *
     * @return int
     */
    public function getNumber(): ?int
    {
        return $this->number;
    }

    /**
     * "Number" is used to specify a PQ number.
     *
     * @param int $number
     *
     * @return self
     */
    public function setNumber(?int $number): self
    {
        $this->number = $number;

        return $this;
    }

    /**
     * "Reissue" is used to indicate that the particular PQ record is a PQ Reissue record.

    In order to specify multiple PQR records to be issued please specify a range or specific record numbers by means of the object repetition in an array of Records

    .../Ticketing/PricingQualifiers/PriceQuote/Record/Reissue cannot be combined with .../Ticketing/MiscQualifiers/Ticket

     *
     * @return bool
     */
    public function getReissue(): ?bool
    {
        return $this->reissue;
    }

    /**
     * "Reissue" is used to indicate that the particular PQ record is a PQ Reissue record.

    In order to specify multiple PQR records to be issued please specify a range or specific record numbers by means of the object repetition in an array of Records

    .../Ticketing/PricingQualifiers/PriceQuote/Record/Reissue cannot be combined with .../Ticketing/MiscQualifiers/Ticket

     *
     * @param bool $reissue
     *
     * @return self
     */
    public function setReissue(?bool $reissue): self
    {
        $this->reissue = $reissue;

        return $this;
    }
}
