<?php

namespace Ammonkc\SabreApi\Model\BargainFinderMax;

use Ammonkc\SabreApi\AbstractModel;

class OrgOpentravelOta200305TransactionType extends AbstractModel
{
    /**
     * Allows ATSE Team to test new features. This element and its content is meant to never be published.
     *
     * @var OrgOpentravelOta200305TransactionTypeATSETest
     */
    protected $aTSETest;
    /**
     * @var OrgOpentravelOta200305TransactionTypeAirStreaming
     */
    protected $airStreaming;
    /**
     * @var OrgOpentravelOta200305TransactionTypeAvailableLevel
     */
    protected $availableLevel;
    /**
     * Attribute of the Rule that can be passed in to selectively target a rule. This has been deprecated.
     *
     * @var OrgOpentravelOta200305TransactionTypeBranch
     */
    protected $branch;
    /**
     * Helps Forwarder in keeping track of response parts generated as a result of request processing (AB only).
     *
     * @var string
     */
    protected $chunkNumber;
    /**
     * A unique identifier to relate all transactions within a single session. Used by AirShop/LFE transactions.
     *
     * @var OrgOpentravelOta200305TransactionTypeClientSessionID
     */
    protected $clientSessionID;
    /**
     * @var OrgOpentravelOta200305TransactionTypeCompressResponse
     */
    protected $compressResponse;
    /**
     * Alternative configuration selector.
     *
     * @var string
     */
    protected $configSet;
    /**
     * Turns on or off debug mode.
     *
     * @var bool
     */
    protected $debug;
    /**
     * Key unlocking disabled debug mode.
     *
     * @var string
     */
    protected $debugKey;
    /**
     * For internal use.
     *
     * @var OrgOpentravelOta200305TransactionTypeDiagnostics
     */
    protected $diagnostics;
    /**
     * Disables itinerary cache for this request (if it is enabled in this service).
     *
     * @var bool
     */
    protected $disableCache;
    /**
     * Contains a sequence of fare overrides.
     *
     * @var OrgOpentravelOta200305TransactionTypeFareOverrides
     */
    protected $fareOverrides;
    /**
     * @var OrgOpentravelOta200305TransactionTypePurchaseType
     */
    protected $purchaseType;
    /**
     * @var OrgOpentravelOta200305TransactionTypeRequestType
     */
    protected $requestType;
    /**
     * Settings for IntelliSell merchandising.
     *
     * @var OrgOpentravelOta200305TransactionTypeResponseSorting
     */
    protected $responseSorting;
    /**
     * Sabre authentication ID (ATH) - passed into the request to keep session information when communicating with TPF. The use of this element had been deprecated and is achieved by session pooling mechanism in Intellisell.
     *
     * @var OrgOpentravelOta200305TransactionTypeSabreAth
     */
    protected $sabreAth;
    /**
     * @var OrgOpentravelOta200305SeatStatusSimType
     */
    protected $seatStatusSim;
    /**
     * Identifier of the transaction path.
     *
     * @var OrgOpentravelOta200305TransactionTypeServiceTag
     */
    protected $serviceTag;
    /**
     * If enabled, Intellisell will return source for each itinerary.,Identifier of the type of request.
     *
     * @var bool
     */
    protected $showItinSource;
    /**
     * Subagent data for LFE transactions.
     *
     * @var OrgOpentravelOta200305TransactionTypeSubagentData
     */
    protected $subagentData;
    /**
     * Transaction ID.
     *
     * @var OrgOpentravelOta200305TransactionTypeTranID
     */
    protected $tranID;
    /**
     * @var OrgOpentravelOta200305TransactionTypeTravelerPersona
     */
    protected $travelerPersona;

    /**
     * Allows ATSE Team to test new features. This element and its content is meant to never be published.
     *
     * @return OrgOpentravelOta200305TransactionTypeATSETest
     */
    public function getATSETest(): OrgOpentravelOta200305TransactionTypeATSETest
    {
        return $this->aTSETest;
    }

    /**
     * Allows ATSE Team to test new features. This element and its content is meant to never be published.
     *
     * @param OrgOpentravelOta200305TransactionTypeATSETest $aTSETest
     *
     * @return self
     */
    public function setATSETest(OrgOpentravelOta200305TransactionTypeATSETest $aTSETest): self
    {
        $this->aTSETest = $aTSETest;

        return $this;
    }

    /**
     * @return OrgOpentravelOta200305TransactionTypeAirStreaming
     */
    public function getAirStreaming(): OrgOpentravelOta200305TransactionTypeAirStreaming
    {
        return $this->airStreaming;
    }

    /**
     * @param OrgOpentravelOta200305TransactionTypeAirStreaming $airStreaming
     *
     * @return self
     */
    public function setAirStreaming(OrgOpentravelOta200305TransactionTypeAirStreaming $airStreaming): self
    {
        $this->airStreaming = $airStreaming;

        return $this;
    }

    /**
     * @return OrgOpentravelOta200305TransactionTypeAvailableLevel
     */
    public function getAvailableLevel(): OrgOpentravelOta200305TransactionTypeAvailableLevel
    {
        return $this->availableLevel;
    }

    /**
     * @param OrgOpentravelOta200305TransactionTypeAvailableLevel $availableLevel
     *
     * @return self
     */
    public function setAvailableLevel(OrgOpentravelOta200305TransactionTypeAvailableLevel $availableLevel): self
    {
        $this->availableLevel = $availableLevel;

        return $this;
    }

    /**
     * Attribute of the Rule that can be passed in to selectively target a rule. This has been deprecated.
     *
     * @return OrgOpentravelOta200305TransactionTypeBranch
     */
    public function getBranch(): OrgOpentravelOta200305TransactionTypeBranch
    {
        return $this->branch;
    }

    /**
     * Attribute of the Rule that can be passed in to selectively target a rule. This has been deprecated.
     *
     * @param OrgOpentravelOta200305TransactionTypeBranch $branch
     *
     * @return self
     */
    public function setBranch(OrgOpentravelOta200305TransactionTypeBranch $branch): self
    {
        $this->branch = $branch;

        return $this;
    }

    /**
     * Helps Forwarder in keeping track of response parts generated as a result of request processing (AB only).
     *
     * @return string
     */
    public function getChunkNumber(): string
    {
        return $this->chunkNumber;
    }

    /**
     * Helps Forwarder in keeping track of response parts generated as a result of request processing (AB only).
     *
     * @param string $chunkNumber
     *
     * @return self
     */
    public function setChunkNumber(string $chunkNumber): self
    {
        $this->chunkNumber = $chunkNumber;

        return $this;
    }

    /**
     * A unique identifier to relate all transactions within a single session. Used by AirShop/LFE transactions.
     *
     * @return OrgOpentravelOta200305TransactionTypeClientSessionID
     */
    public function getClientSessionID(): OrgOpentravelOta200305TransactionTypeClientSessionID
    {
        return $this->clientSessionID;
    }

    /**
     * A unique identifier to relate all transactions within a single session. Used by AirShop/LFE transactions.
     *
     * @param OrgOpentravelOta200305TransactionTypeClientSessionID $clientSessionID
     *
     * @return self
     */
    public function setClientSessionID(OrgOpentravelOta200305TransactionTypeClientSessionID $clientSessionID): self
    {
        $this->clientSessionID = $clientSessionID;

        return $this;
    }

    /**
     * @return OrgOpentravelOta200305TransactionTypeCompressResponse
     */
    public function getCompressResponse(): OrgOpentravelOta200305TransactionTypeCompressResponse
    {
        return $this->compressResponse;
    }

    /**
     * @param OrgOpentravelOta200305TransactionTypeCompressResponse $compressResponse
     *
     * @return self
     */
    public function setCompressResponse(OrgOpentravelOta200305TransactionTypeCompressResponse $compressResponse): self
    {
        $this->compressResponse = $compressResponse;

        return $this;
    }

    /**
     * Alternative configuration selector.
     *
     * @return string
     */
    public function getConfigSet(): string
    {
        return $this->configSet;
    }

    /**
     * Alternative configuration selector.
     *
     * @param string $configSet
     *
     * @return self
     */
    public function setConfigSet(string $configSet): self
    {
        $this->configSet = $configSet;

        return $this;
    }

    /**
     * Turns on or off debug mode.
     *
     * @return bool
     */
    public function getDebug(): bool
    {
        return $this->debug;
    }

    /**
     * Turns on or off debug mode.
     *
     * @param bool $debug
     *
     * @return self
     */
    public function setDebug(bool $debug): self
    {
        $this->debug = $debug;

        return $this;
    }

    /**
     * Key unlocking disabled debug mode.
     *
     * @return string
     */
    public function getDebugKey(): string
    {
        return $this->debugKey;
    }

    /**
     * Key unlocking disabled debug mode.
     *
     * @param string $debugKey
     *
     * @return self
     */
    public function setDebugKey(string $debugKey): self
    {
        $this->debugKey = $debugKey;

        return $this;
    }

    /**
     * For internal use.
     *
     * @return OrgOpentravelOta200305TransactionTypeDiagnostics
     */
    public function getDiagnostics(): OrgOpentravelOta200305TransactionTypeDiagnostics
    {
        return $this->diagnostics;
    }

    /**
     * For internal use.
     *
     * @param OrgOpentravelOta200305TransactionTypeDiagnostics $diagnostics
     *
     * @return self
     */
    public function setDiagnostics(OrgOpentravelOta200305TransactionTypeDiagnostics $diagnostics): self
    {
        $this->diagnostics = $diagnostics;

        return $this;
    }

    /**
     * Disables itinerary cache for this request (if it is enabled in this service).
     *
     * @return bool
     */
    public function getDisableCache(): bool
    {
        return $this->disableCache;
    }

    /**
     * Disables itinerary cache for this request (if it is enabled in this service).
     *
     * @param bool $disableCache
     *
     * @return self
     */
    public function setDisableCache(bool $disableCache): self
    {
        $this->disableCache = $disableCache;

        return $this;
    }

    /**
     * Contains a sequence of fare overrides.
     *
     * @return OrgOpentravelOta200305TransactionTypeFareOverrides
     */
    public function getFareOverrides(): OrgOpentravelOta200305TransactionTypeFareOverrides
    {
        return $this->fareOverrides;
    }

    /**
     * Contains a sequence of fare overrides.
     *
     * @param OrgOpentravelOta200305TransactionTypeFareOverrides $fareOverrides
     *
     * @return self
     */
    public function setFareOverrides(OrgOpentravelOta200305TransactionTypeFareOverrides $fareOverrides): self
    {
        $this->fareOverrides = $fareOverrides;

        return $this;
    }

    /**
     * @return OrgOpentravelOta200305TransactionTypePurchaseType
     */
    public function getPurchaseType(): OrgOpentravelOta200305TransactionTypePurchaseType
    {
        return $this->purchaseType;
    }

    /**
     * @param OrgOpentravelOta200305TransactionTypePurchaseType $purchaseType
     *
     * @return self
     */
    public function setPurchaseType(OrgOpentravelOta200305TransactionTypePurchaseType $purchaseType): self
    {
        $this->purchaseType = $purchaseType;

        return $this;
    }

    /**
     * @return OrgOpentravelOta200305TransactionTypeRequestType
     */
    public function getRequestType(): OrgOpentravelOta200305TransactionTypeRequestType
    {
        return $this->requestType;
    }

    /**
     * @param OrgOpentravelOta200305TransactionTypeRequestType $requestType
     *
     * @return self
     */
    public function setRequestType(OrgOpentravelOta200305TransactionTypeRequestType $requestType): self
    {
        $this->requestType = $requestType;

        return $this;
    }

    /**
     * Settings for IntelliSell merchandising.
     *
     * @return OrgOpentravelOta200305TransactionTypeResponseSorting
     */
    public function getResponseSorting(): OrgOpentravelOta200305TransactionTypeResponseSorting
    {
        return $this->responseSorting;
    }

    /**
     * Settings for IntelliSell merchandising.
     *
     * @param OrgOpentravelOta200305TransactionTypeResponseSorting $responseSorting
     *
     * @return self
     */
    public function setResponseSorting(OrgOpentravelOta200305TransactionTypeResponseSorting $responseSorting): self
    {
        $this->responseSorting = $responseSorting;

        return $this;
    }

    /**
     * Sabre authentication ID (ATH) - passed into the request to keep session information when communicating with TPF. The use of this element had been deprecated and is achieved by session pooling mechanism in Intellisell.
     *
     * @return OrgOpentravelOta200305TransactionTypeSabreAth
     */
    public function getSabreAth(): OrgOpentravelOta200305TransactionTypeSabreAth
    {
        return $this->sabreAth;
    }

    /**
     * Sabre authentication ID (ATH) - passed into the request to keep session information when communicating with TPF. The use of this element had been deprecated and is achieved by session pooling mechanism in Intellisell.
     *
     * @param OrgOpentravelOta200305TransactionTypeSabreAth $sabreAth
     *
     * @return self
     */
    public function setSabreAth(OrgOpentravelOta200305TransactionTypeSabreAth $sabreAth): self
    {
        $this->sabreAth = $sabreAth;

        return $this;
    }

    /**
     * @return OrgOpentravelOta200305SeatStatusSimType
     */
    public function getSeatStatusSim(): OrgOpentravelOta200305SeatStatusSimType
    {
        return $this->seatStatusSim;
    }

    /**
     * @param OrgOpentravelOta200305SeatStatusSimType $seatStatusSim
     *
     * @return self
     */
    public function setSeatStatusSim(OrgOpentravelOta200305SeatStatusSimType $seatStatusSim): self
    {
        $this->seatStatusSim = $seatStatusSim;

        return $this;
    }

    /**
     * Identifier of the transaction path.
     *
     * @return OrgOpentravelOta200305TransactionTypeServiceTag
     */
    public function getServiceTag(): OrgOpentravelOta200305TransactionTypeServiceTag
    {
        return $this->serviceTag;
    }

    /**
     * Identifier of the transaction path.
     *
     * @param OrgOpentravelOta200305TransactionTypeServiceTag $serviceTag
     *
     * @return self
     */
    public function setServiceTag(OrgOpentravelOta200305TransactionTypeServiceTag $serviceTag): self
    {
        $this->serviceTag = $serviceTag;

        return $this;
    }

    /**
     * If enabled, Intellisell will return source for each itinerary.,Identifier of the type of request.
     *
     * @return bool
     */
    public function getShowItinSource(): bool
    {
        return $this->showItinSource;
    }

    /**
     * If enabled, Intellisell will return source for each itinerary.,Identifier of the type of request.
     *
     * @param bool $showItinSource
     *
     * @return self
     */
    public function setShowItinSource(bool $showItinSource): self
    {
        $this->showItinSource = $showItinSource;

        return $this;
    }

    /**
     * Subagent data for LFE transactions.
     *
     * @return OrgOpentravelOta200305TransactionTypeSubagentData
     */
    public function getSubagentData(): OrgOpentravelOta200305TransactionTypeSubagentData
    {
        return $this->subagentData;
    }

    /**
     * Subagent data for LFE transactions.
     *
     * @param OrgOpentravelOta200305TransactionTypeSubagentData $subagentData
     *
     * @return self
     */
    public function setSubagentData(OrgOpentravelOta200305TransactionTypeSubagentData $subagentData): self
    {
        $this->subagentData = $subagentData;

        return $this;
    }

    /**
     * Transaction ID.
     *
     * @return OrgOpentravelOta200305TransactionTypeTranID
     */
    public function getTranID(): OrgOpentravelOta200305TransactionTypeTranID
    {
        return $this->tranID;
    }

    /**
     * Transaction ID.
     *
     * @param OrgOpentravelOta200305TransactionTypeTranID $tranID
     *
     * @return self
     */
    public function setTranID(OrgOpentravelOta200305TransactionTypeTranID $tranID): self
    {
        $this->tranID = $tranID;

        return $this;
    }

    /**
     * @return OrgOpentravelOta200305TransactionTypeTravelerPersona
     */
    public function getTravelerPersona(): OrgOpentravelOta200305TransactionTypeTravelerPersona
    {
        return $this->travelerPersona;
    }

    /**
     * @param OrgOpentravelOta200305TransactionTypeTravelerPersona $travelerPersona
     *
     * @return self
     */
    public function setTravelerPersona(OrgOpentravelOta200305TransactionTypeTravelerPersona $travelerPersona): self
    {
        $this->travelerPersona = $travelerPersona;

        return $this;
    }
}
