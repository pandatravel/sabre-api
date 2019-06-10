<?php

namespace Ammonkc\SabreApi\Model\BargainFinderMax;

use Ammonkc\SabreApi\AbstractModel;

class OrgOpentravelOta200305ExchangeOriginDestinationInformationTypeConnectionTime extends AbstractModel
{
    /**
     * Enable excluded connection time (default: true).
     *
     * @var bool
     */
    protected $enableExcludedConnection;
    /**
     * Excluded connection time begin in format HHMM.
     *
     * @var string
     */
    protected $excludedConnectionBegin;
    /**
     * Excluded connection time end in format HHMM.
     *
     * @var string
     */
    protected $excludedConnectionEnd;
    /**
     * @var int
     */
    protected $max;
    /**
     * @var int
     */
    protected $min;

    /**
     * Enable excluded connection time (default: true).
     *
     * @return bool
     */
    public function getEnableExcludedConnection(): ?bool
    {
        return $this->enableExcludedConnection;
    }

    /**
     * Enable excluded connection time (default: true).
     *
     * @param bool $enableExcludedConnection
     *
     * @return self
     */
    public function setEnableExcludedConnection(?bool $enableExcludedConnection): self
    {
        $this->enableExcludedConnection = $enableExcludedConnection;

        return $this;
    }

    /**
     * Excluded connection time begin in format HHMM.
     *
     * @return string
     */
    public function getExcludedConnectionBegin(): ?string
    {
        return $this->excludedConnectionBegin;
    }

    /**
     * Excluded connection time begin in format HHMM.
     *
     * @param string $excludedConnectionBegin
     *
     * @return self
     */
    public function setExcludedConnectionBegin(?string $excludedConnectionBegin): self
    {
        $this->excludedConnectionBegin = $excludedConnectionBegin;

        return $this;
    }

    /**
     * Excluded connection time end in format HHMM.
     *
     * @return string
     */
    public function getExcludedConnectionEnd(): ?string
    {
        return $this->excludedConnectionEnd;
    }

    /**
     * Excluded connection time end in format HHMM.
     *
     * @param string $excludedConnectionEnd
     *
     * @return self
     */
    public function setExcludedConnectionEnd(?string $excludedConnectionEnd): self
    {
        $this->excludedConnectionEnd = $excludedConnectionEnd;

        return $this;
    }

    /**
     * @return int
     */
    public function getMax(): ?int
    {
        return $this->max;
    }

    /**
     * @param int $max
     *
     * @return self
     */
    public function setMax(?int $max): self
    {
        $this->max = $max;

        return $this;
    }

    /**
     * @return int
     */
    public function getMin(): ?int
    {
        return $this->min;
    }

    /**
     * @param int $min
     *
     * @return self
     */
    public function setMin(?int $min): self
    {
        $this->min = $min;

        return $this;
    }
}
