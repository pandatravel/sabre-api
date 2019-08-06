<?php

namespace Ammonkc\SabreApi\Model\BargainFinderMax;

use Ammonkc\SabreApi\AbstractModel;

class OrgOpentravelOta200305OTAAirLowFareSearchRQTPAExtensionsMultiTicket extends AbstractModel
{
    /**
     * Display Option Policy, takes values: - SOW - Show OneWays separately - GOW2RT - Group OneWays and match to RoundTrip - SCHS - Group OneWays, match to RoundTrip and show cheaper solution.
     *
     * @var string
     */
    protected $displayPolicy;
    /**
     * Allow to set requested number of OneWays in MultiTicket processing.
     *
     * @var int
     */
    protected $requestedOneWays;

    /**
     * Display Option Policy, takes values: - SOW - Show OneWays separately - GOW2RT - Group OneWays and match to RoundTrip - SCHS - Group OneWays, match to RoundTrip and show cheaper solution.
     *
     * @return string
     */
    public function getDisplayPolicy(): string
    {
        return $this->displayPolicy;
    }

    /**
     * Display Option Policy, takes values: - SOW - Show OneWays separately - GOW2RT - Group OneWays and match to RoundTrip - SCHS - Group OneWays, match to RoundTrip and show cheaper solution.
     *
     * @param string $displayPolicy
     *
     * @return self
     */
    public function setDisplayPolicy(string $displayPolicy): self
    {
        $this->displayPolicy = $displayPolicy;

        return $this;
    }

    /**
     * Allow to set requested number of OneWays in MultiTicket processing.
     *
     * @return int
     */
    public function getRequestedOneWays(): int
    {
        return $this->requestedOneWays;
    }

    /**
     * Allow to set requested number of OneWays in MultiTicket processing.
     *
     * @param int $requestedOneWays
     *
     * @return self
     */
    public function setRequestedOneWays(int $requestedOneWays): self
    {
        $this->requestedOneWays = $requestedOneWays;

        return $this;
    }
}
