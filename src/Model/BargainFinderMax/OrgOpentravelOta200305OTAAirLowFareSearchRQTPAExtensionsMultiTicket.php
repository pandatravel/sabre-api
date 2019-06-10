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
     * Display Option Policy, takes values: - SOW - Show OneWays separately - GOW2RT - Group OneWays and match to RoundTrip - SCHS - Group OneWays, match to RoundTrip and show cheaper solution.
     *
     * @return string
     */
    public function getDisplayPolicy(): ?string
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
    public function setDisplayPolicy(?string $displayPolicy): self
    {
        $this->displayPolicy = $displayPolicy;

        return $this;
    }
}
