<?php

namespace Ammonkc\SabreApi\Model\EnhancedAirTicket;

use Ammonkc\SabreApi\AbstractModel;

class PostProcessingEndTransactionEmailItinerarySegmentItem extends AbstractModel
{
    /**
     * "EndNumber" is used to specify an ending segment in the range to include in the email message.
     *
     * @var int
     */
    protected $endNumber;
    /**
     * "Number" is used to specify a segment number to include in the email message.
     *
     * @var int
     */
    protected $number;

    /**
     * "EndNumber" is used to specify an ending segment in the range to include in the email message.
     *
     * @return int
     */
    public function getEndNumber(): ?int
    {
        return $this->endNumber;
    }

    /**
     * "EndNumber" is used to specify an ending segment in the range to include in the email message.
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
     * "Number" is used to specify a segment number to include in the email message.
     *
     * @return int
     */
    public function getNumber(): ?int
    {
        return $this->number;
    }

    /**
     * "Number" is used to specify a segment number to include in the email message.
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
}
