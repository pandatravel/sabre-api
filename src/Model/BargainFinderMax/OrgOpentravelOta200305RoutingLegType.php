<?php

namespace Ammonkc\SabreApi\Model\BargainFinderMax;

use Ammonkc\SabreApi\AbstractModel;

class OrgOpentravelOta200305RoutingLegType extends AbstractModel
{
    /**
     * @var string[]
     */
    protected $connectPoint;
    /**
     * @var string[]
     */
    protected $inboundCarrier;
    /**
     * @var string[]
     */
    protected $inboundOutboundCarrier;
    /**
     * @var string[]
     */
    protected $outboundCarrier;

    /**
     * @return string[]
     */
    public function getConnectPoint(): array
    {
        return $this->connectPoint;
    }

    /**
     * @param string[] $connectPoint
     *
     * @return self
     */
    public function setConnectPoint(array $connectPoint): self
    {
        $this->connectPoint = $connectPoint;

        return $this;
    }

    /**
     * @return string[]
     */
    public function getInboundCarrier(): array
    {
        return $this->inboundCarrier;
    }

    /**
     * @param string[] $inboundCarrier
     *
     * @return self
     */
    public function setInboundCarrier(array $inboundCarrier): self
    {
        $this->inboundCarrier = $inboundCarrier;

        return $this;
    }

    /**
     * @return string[]
     */
    public function getInboundOutboundCarrier(): array
    {
        return $this->inboundOutboundCarrier;
    }

    /**
     * @param string[] $inboundOutboundCarrier
     *
     * @return self
     */
    public function setInboundOutboundCarrier(array $inboundOutboundCarrier): self
    {
        $this->inboundOutboundCarrier = $inboundOutboundCarrier;

        return $this;
    }

    /**
     * @return string[]
     */
    public function getOutboundCarrier(): array
    {
        return $this->outboundCarrier;
    }

    /**
     * @param string[] $outboundCarrier
     *
     * @return self
     */
    public function setOutboundCarrier(array $outboundCarrier): self
    {
        $this->outboundCarrier = $outboundCarrier;

        return $this;
    }
}
