<?php

namespace Ammonkc\SabreApi\Model\BargainFinderMax;

use Ammonkc\SabreApi\AbstractModel;

class OrgOpentravelOta200305TransactionTypeAirStreaming extends AbstractModel
{
    /**
     * The MaxItinsPerChunk attribute is set individually by customers and configures the maximum number of itineraries per one chunk.
     *
     * @var int
     */
    protected $maxItinsPerChunk;
    /**
     * Method value should be “Services" or “WholeResponse”.
     *
     * @var string
     */
    protected $method;

    /**
     * The MaxItinsPerChunk attribute is set individually by customers and configures the maximum number of itineraries per one chunk.
     *
     * @return int
     */
    public function getMaxItinsPerChunk(): int
    {
        return $this->maxItinsPerChunk;
    }

    /**
     * The MaxItinsPerChunk attribute is set individually by customers and configures the maximum number of itineraries per one chunk.
     *
     * @param int $maxItinsPerChunk
     *
     * @return self
     */
    public function setMaxItinsPerChunk(int $maxItinsPerChunk): self
    {
        $this->maxItinsPerChunk = $maxItinsPerChunk;

        return $this;
    }

    /**
     * Method value should be “Services" or “WholeResponse”.
     *
     * @return string
     */
    public function getMethod(): string
    {
        return $this->method;
    }

    /**
     * Method value should be “Services" or “WholeResponse”.
     *
     * @param string $method
     *
     * @return self
     */
    public function setMethod(string $method): self
    {
        $this->method = $method;

        return $this;
    }
}
