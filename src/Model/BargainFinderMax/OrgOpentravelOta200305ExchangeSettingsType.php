<?php

namespace Ammonkc\SabreApi\Model\BargainFinderMax;

use Ammonkc\SabreApi\AbstractModel;

class OrgOpentravelOta200305ExchangeSettingsType extends AbstractModel
{
    /**
     * If set to ''true'', adds exchange-specific information to the response. The information includes richer Tax elements, ReissueVsExchange attribute and currency conversion rates.
     *
     * @var bool
     */
    protected $attachExchangeInfo;
    /**
     * Enables branded results (if brands are available for returned options).
     *
     * @var bool
     */
    protected $brandedResults;
    /**
     * Hints MIP that it should return options within this amount of time (in seconds),Used to specify if the request is an usual Exchange request (basic) or an Exchange Context Shopping request (context). When not specified, basic is assumed.
     *
     * @var float
     */
    protected $mIPTimeoutThreshold;
    /**
     * @var string
     */
    protected $reissueExchange;
    /**
     * If set to ''false'', disables processing of Current Itin path.
     *
     * @var bool
     */
    protected $repriceCurrentItin;
    /**
     * @var string
     */
    protected $requestType;

    /**
     * If set to ''true'', adds exchange-specific information to the response. The information includes richer Tax elements, ReissueVsExchange attribute and currency conversion rates.
     *
     * @return bool
     */
    public function getAttachExchangeInfo(): bool
    {
        return $this->attachExchangeInfo;
    }

    /**
     * If set to ''true'', adds exchange-specific information to the response. The information includes richer Tax elements, ReissueVsExchange attribute and currency conversion rates.
     *
     * @param bool $attachExchangeInfo
     *
     * @return self
     */
    public function setAttachExchangeInfo(bool $attachExchangeInfo): self
    {
        $this->attachExchangeInfo = $attachExchangeInfo;

        return $this;
    }

    /**
     * Enables branded results (if brands are available for returned options).
     *
     * @return bool
     */
    public function getBrandedResults(): bool
    {
        return $this->brandedResults;
    }

    /**
     * Enables branded results (if brands are available for returned options).
     *
     * @param bool $brandedResults
     *
     * @return self
     */
    public function setBrandedResults(bool $brandedResults): self
    {
        $this->brandedResults = $brandedResults;

        return $this;
    }

    /**
     * Hints MIP that it should return options within this amount of time (in seconds),Used to specify if the request is an usual Exchange request (basic) or an Exchange Context Shopping request (context). When not specified, basic is assumed.
     *
     * @return float
     */
    public function getMIPTimeoutThreshold(): float
    {
        return $this->mIPTimeoutThreshold;
    }

    /**
     * Hints MIP that it should return options within this amount of time (in seconds),Used to specify if the request is an usual Exchange request (basic) or an Exchange Context Shopping request (context). When not specified, basic is assumed.
     *
     * @param float $mIPTimeoutThreshold
     *
     * @return self
     */
    public function setMIPTimeoutThreshold(float $mIPTimeoutThreshold): self
    {
        $this->mIPTimeoutThreshold = $mIPTimeoutThreshold;

        return $this;
    }

    /**
     * @return string
     */
    public function getReissueExchange(): string
    {
        return $this->reissueExchange;
    }

    /**
     * @param string $reissueExchange
     *
     * @return self
     */
    public function setReissueExchange(string $reissueExchange): self
    {
        $this->reissueExchange = $reissueExchange;

        return $this;
    }

    /**
     * If set to ''false'', disables processing of Current Itin path.
     *
     * @return bool
     */
    public function getRepriceCurrentItin(): bool
    {
        return $this->repriceCurrentItin;
    }

    /**
     * If set to ''false'', disables processing of Current Itin path.
     *
     * @param bool $repriceCurrentItin
     *
     * @return self
     */
    public function setRepriceCurrentItin(bool $repriceCurrentItin): self
    {
        $this->repriceCurrentItin = $repriceCurrentItin;

        return $this;
    }

    /**
     * @return string
     */
    public function getRequestType(): string
    {
        return $this->requestType;
    }

    /**
     * @param string $requestType
     *
     * @return self
     */
    public function setRequestType(string $requestType): self
    {
        $this->requestType = $requestType;

        return $this;
    }
}
