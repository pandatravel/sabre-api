<?php

namespace Ammonkc\SabreApi\Model\EnhancedAirTicket;

use Ammonkc\SabreApi\AbstractModel;

class PostProcessingEndTransactionSource extends AbstractModel
{
    /**
     * "ReceivedFrom" is used to receive the record.
     *
     * @var string
     */
    protected $receivedFrom;

    /**
     * "ReceivedFrom" is used to receive the record.
     *
     * @return string
     */
    public function getReceivedFrom(): ?string
    {
        return $this->receivedFrom;
    }

    /**
     * "ReceivedFrom" is used to receive the record.
     *
     * @param string $receivedFrom
     *
     * @return self
     */
    public function setReceivedFrom(?string $receivedFrom): self
    {
        $this->receivedFrom = $receivedFrom;

        return $this;
    }
}
