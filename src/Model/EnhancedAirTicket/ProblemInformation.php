<?php

namespace Ammonkc\SabreApi\Model\EnhancedAirTicket;

use Ammonkc\SabreApi\AbstractModel;

class ProblemInformation extends AbstractModel
{
    /**
     * @var ProblemInformationSystemSpecificResultsItem[]
     */
    protected $systemSpecificResults;
    /**
     * An indication of the source of error or warning when processing the request.
     *
     * @var string
     */
    protected $type;
    /**
     * Transaction time stamp in "yyyy-mm-ddThh:mm:ss.SSSZ" format.
     *
     * @var string
     */
    protected $timeStamp;

    /**
     * @return ProblemInformationSystemSpecificResultsItem[]
     */
    public function getSystemSpecificResults(): ?array
    {
        return $this->systemSpecificResults;
    }

    /**
     * @param ProblemInformationSystemSpecificResultsItem[] $systemSpecificResults
     *
     * @return self
     */
    public function setSystemSpecificResults(?array $systemSpecificResults): self
    {
        $this->systemSpecificResults = $systemSpecificResults;

        return $this;
    }

    /**
     * An indication of the source of error or warning when processing the request.
     *
     * @return string
     */
    public function getType(): ?string
    {
        return $this->type;
    }

    /**
     * An indication of the source of error or warning when processing the request.
     *
     * @param string $type
     *
     * @return self
     */
    public function setType(?string $type): self
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Transaction time stamp in "yyyy-mm-ddThh:mm:ss.SSSZ" format.
     *
     * @return string
     */
    public function getTimeStamp(): ?string
    {
        return $this->timeStamp;
    }

    /**
     * Transaction time stamp in "yyyy-mm-ddThh:mm:ss.SSSZ" format.
     *
     * @param string $timeStamp
     *
     * @return self
     */
    public function setTimeStamp(?string $timeStamp): self
    {
        $this->timeStamp = $timeStamp;

        return $this;
    }
}
