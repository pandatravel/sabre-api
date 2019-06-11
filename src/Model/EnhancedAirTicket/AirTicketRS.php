<?php

namespace Ammonkc\SabreApi\Model\EnhancedAirTicket;

use Ammonkc\SabreApi\AbstractModel;

class AirTicketRS extends AbstractModel
{
    /**
     * Version of the payload message.
     *
     * @var string
     */
    protected $version;
    /**
     * @var ApplicationResults
     */
    protected $applicationResults;
    /**
     * @var SummaryItem[]
     */
    protected $summary;

    /**
     * Version of the payload message.
     *
     * @return string
     */
    public function getVersion(): ?string
    {
        return $this->version;
    }

    /**
     * Version of the payload message.
     *
     * @param string $version
     *
     * @return self
     */
    public function setVersion(?string $version): self
    {
        $this->version = $version;

        return $this;
    }

    /**
     * @return ApplicationResults
     */
    public function getApplicationResults(): ?ApplicationResults
    {
        return $this->applicationResults;
    }

    /**
     * @param ApplicationResults $applicationResults
     *
     * @return self
     */
    public function setApplicationResults(?ApplicationResults $applicationResults): self
    {
        $this->applicationResults = $applicationResults;

        return $this;
    }

    /**
     * @return SummaryItem[]
     */
    public function getSummary(): ?array
    {
        return $this->summary;
    }

    /**
     * @param SummaryItem[] $summary
     *
     * @return self
     */
    public function setSummary(?array $summary): self
    {
        $this->summary = $summary;

        return $this;
    }
}
