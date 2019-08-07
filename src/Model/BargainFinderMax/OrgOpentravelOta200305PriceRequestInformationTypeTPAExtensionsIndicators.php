<?php

namespace Ammonkc\SabreApi\Model\BargainFinderMax;

use Ammonkc\SabreApi\AbstractModel;

class OrgOpentravelOta200305PriceRequestInformationTypeTPAExtensionsIndicators extends AbstractModel
{
    /**
     * If set to true, fares that have a min/max stay can be included in the responses. If set to false, then no fares that include a min/max stay requirement will be included in the response.
     *
     * @var OrgOpentravelOta200305PriceRequestInformationTypeTPAExtensionsIndicatorsMinMaxStay
     */
    protected $minMaxStay;
    /**
     * If set to true, fares that have a refund penalty can be included in the responses. If set to false, then no fares that include a refund penalty requirement will be included in the response.
     *
     * @var OrgOpentravelOta200305PriceRequestInformationTypeTPAExtensionsIndicatorsRefundPenalty
     */
    protected $refundPenalty;
    /**
     * If set to true, fares that have a reservation/ticketing can be included in the responses. If set to false, then no fares that include reservation/ticketing requirement will be included in the response.
     *
     * @var OrgOpentravelOta200305PriceRequestInformationTypeTPAExtensionsIndicatorsResTicketing
     */
    protected $resTicketing;
    /**
     * Currently must be set to true.
     *
     * @var OrgOpentravelOta200305PriceRequestInformationTypeTPAExtensionsIndicatorsRetainFare
     */
    protected $retainFare;
    /**
     * This element is currently ignored whether it is true or false.
     *
     * @var OrgOpentravelOta200305PriceRequestInformationTypeTPAExtensionsIndicatorsTravelPolicy
     */
    protected $travelPolicy;

    /**
     * If set to true, fares that have a min/max stay can be included in the responses. If set to false, then no fares that include a min/max stay requirement will be included in the response.
     *
     * @return OrgOpentravelOta200305PriceRequestInformationTypeTPAExtensionsIndicatorsMinMaxStay
     */
    public function getMinMaxStay(): ?OrgOpentravelOta200305PriceRequestInformationTypeTPAExtensionsIndicatorsMinMaxStay
    {
        return $this->minMaxStay;
    }

    /**
     * If set to true, fares that have a min/max stay can be included in the responses. If set to false, then no fares that include a min/max stay requirement will be included in the response.
     *
     * @param OrgOpentravelOta200305PriceRequestInformationTypeTPAExtensionsIndicatorsMinMaxStay $minMaxStay
     *
     * @return self
     */
    public function setMinMaxStay(?OrgOpentravelOta200305PriceRequestInformationTypeTPAExtensionsIndicatorsMinMaxStay $minMaxStay): self
    {
        $this->minMaxStay = $minMaxStay;

        return $this;
    }

    /**
     * If set to true, fares that have a refund penalty can be included in the responses. If set to false, then no fares that include a refund penalty requirement will be included in the response.
     *
     * @return OrgOpentravelOta200305PriceRequestInformationTypeTPAExtensionsIndicatorsRefundPenalty
     */
    public function getRefundPenalty(): ?OrgOpentravelOta200305PriceRequestInformationTypeTPAExtensionsIndicatorsRefundPenalty
    {
        return $this->refundPenalty;
    }

    /**
     * If set to true, fares that have a refund penalty can be included in the responses. If set to false, then no fares that include a refund penalty requirement will be included in the response.
     *
     * @param OrgOpentravelOta200305PriceRequestInformationTypeTPAExtensionsIndicatorsRefundPenalty $refundPenalty
     *
     * @return self
     */
    public function setRefundPenalty(?OrgOpentravelOta200305PriceRequestInformationTypeTPAExtensionsIndicatorsRefundPenalty $refundPenalty): self
    {
        $this->refundPenalty = $refundPenalty;

        return $this;
    }

    /**
     * If set to true, fares that have a reservation/ticketing can be included in the responses. If set to false, then no fares that include reservation/ticketing requirement will be included in the response.
     *
     * @return OrgOpentravelOta200305PriceRequestInformationTypeTPAExtensionsIndicatorsResTicketing
     */
    public function getResTicketing(): ?OrgOpentravelOta200305PriceRequestInformationTypeTPAExtensionsIndicatorsResTicketing
    {
        return $this->resTicketing;
    }

    /**
     * If set to true, fares that have a reservation/ticketing can be included in the responses. If set to false, then no fares that include reservation/ticketing requirement will be included in the response.
     *
     * @param OrgOpentravelOta200305PriceRequestInformationTypeTPAExtensionsIndicatorsResTicketing $resTicketing
     *
     * @return self
     */
    public function setResTicketing(?OrgOpentravelOta200305PriceRequestInformationTypeTPAExtensionsIndicatorsResTicketing $resTicketing): self
    {
        $this->resTicketing = $resTicketing;

        return $this;
    }

    /**
     * Currently must be set to true.
     *
     * @return OrgOpentravelOta200305PriceRequestInformationTypeTPAExtensionsIndicatorsRetainFare
     */
    public function getRetainFare(): ?OrgOpentravelOta200305PriceRequestInformationTypeTPAExtensionsIndicatorsRetainFare
    {
        return $this->retainFare;
    }

    /**
     * Currently must be set to true.
     *
     * @param OrgOpentravelOta200305PriceRequestInformationTypeTPAExtensionsIndicatorsRetainFare $retainFare
     *
     * @return self
     */
    public function setRetainFare(?OrgOpentravelOta200305PriceRequestInformationTypeTPAExtensionsIndicatorsRetainFare $retainFare): self
    {
        $this->retainFare = $retainFare;

        return $this;
    }

    /**
     * This element is currently ignored whether it is true or false.
     *
     * @return OrgOpentravelOta200305PriceRequestInformationTypeTPAExtensionsIndicatorsTravelPolicy
     */
    public function getTravelPolicy(): ?OrgOpentravelOta200305PriceRequestInformationTypeTPAExtensionsIndicatorsTravelPolicy
    {
        return $this->travelPolicy;
    }

    /**
     * This element is currently ignored whether it is true or false.
     *
     * @param OrgOpentravelOta200305PriceRequestInformationTypeTPAExtensionsIndicatorsTravelPolicy $travelPolicy
     *
     * @return self
     */
    public function setTravelPolicy(?OrgOpentravelOta200305PriceRequestInformationTypeTPAExtensionsIndicatorsTravelPolicy $travelPolicy): self
    {
        $this->travelPolicy = $travelPolicy;

        return $this;
    }
}
