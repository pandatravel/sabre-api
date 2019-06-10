<?php

namespace Ammonkc\SabreApi\Model\BargainFinderMax;

use Ammonkc\SabreApi\AbstractModel;

class OrgOpentravelOta200305ReservationType extends AbstractModel
{
    /**
     * Real reservation status.
     *
     * @var string
     */
    protected $realStatus;
    /**
     * Reservation status.
     *
     * @var string
     */
    protected $status;

    /**
     * Real reservation status.
     *
     * @return string
     */
    public function getRealStatus(): ?string
    {
        return $this->realStatus;
    }

    /**
     * Real reservation status.
     *
     * @param string $realStatus
     *
     * @return self
     */
    public function setRealStatus(?string $realStatus): self
    {
        $this->realStatus = $realStatus;

        return $this;
    }

    /**
     * Reservation status.
     *
     * @return string
     */
    public function getStatus(): ?string
    {
        return $this->status;
    }

    /**
     * Reservation status.
     *
     * @param string $status
     *
     * @return self
     */
    public function setStatus(?string $status): self
    {
        $this->status = $status;

        return $this;
    }
}
