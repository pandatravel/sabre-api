<?php

namespace Ammonkc\SabreApi\Model\EnhancedAirTicket;

use Ammonkc\SabreApi\AbstractModel;

class SummaryItemReservation extends AbstractModel
{
    /**
     * Passenger Name Record(PNR) locator of the PNR containing this document. Returned if the document is a part of a PNR.
     *
     * @var string
     */
    protected $content;
    /**
     * Reservation create date.
     *
     * @var string
     */
    protected $createDate;
    /**
     * Attribute provider informs about the code of the airline that owns the PNR. Optional.
     *
     * @var string
     */
    protected $provider;
    /**
     * Reservation purge date.
     *
     * @var string
     */
    protected $purgeDate;

    /**
     * Passenger Name Record(PNR) locator of the PNR containing this document. Returned if the document is a part of a PNR.
     *
     * @return string
     */
    public function getContent(): ?string
    {
        return $this->content;
    }

    /**
     * Passenger Name Record(PNR) locator of the PNR containing this document. Returned if the document is a part of a PNR.
     *
     * @param string $content
     *
     * @return self
     */
    public function setContent(?string $content): self
    {
        $this->content = $content;

        return $this;
    }

    /**
     * Reservation create date.
     *
     * @return string
     */
    public function getCreateDate(): ?string
    {
        return $this->createDate;
    }

    /**
     * Reservation create date.
     *
     * @param string $createDate
     *
     * @return self
     */
    public function setCreateDate(?string $createDate): self
    {
        $this->createDate = $createDate;

        return $this;
    }

    /**
     * Attribute provider informs about the code of the airline that owns the PNR. Optional.
     *
     * @return string
     */
    public function getProvider(): ?string
    {
        return $this->provider;
    }

    /**
     * Attribute provider informs about the code of the airline that owns the PNR. Optional.
     *
     * @param string $provider
     *
     * @return self
     */
    public function setProvider(?string $provider): self
    {
        $this->provider = $provider;

        return $this;
    }

    /**
     * Reservation purge date.
     *
     * @return string
     */
    public function getPurgeDate(): ?string
    {
        return $this->purgeDate;
    }

    /**
     * Reservation purge date.
     *
     * @param string $purgeDate
     *
     * @return self
     */
    public function setPurgeDate(?string $purgeDate): self
    {
        $this->purgeDate = $purgeDate;

        return $this;
    }
}
