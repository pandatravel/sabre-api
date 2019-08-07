<?php

namespace Ammonkc\SabreApi\Model\BargainFinderMax;

use Ammonkc\SabreApi\AbstractModel;

/**
 * The Low Fare Search Request message requests priced itinerary options for
 * flights between specific city pairs on specific dates for specific
 * numbers and types of passengers. Optional request information can
 * include: - Time / Time Window - Connecting cities. - Client Preferences
 * (airlines, cabin, flight types etc.) The Low Fare Search request contains
 * similar information to a Low Fare Search entry on an airline CRS or GDS.
 *
 */
class BargainFinderMaxRequestOTAAirLowFareSearchRQ extends AbstractModel
{
    /**
     * @var string
     */
    protected $altLangID;
    /**
     * Include only flights with available booking codes (when True or when attribute not present).
     *
     * @var bool
     */
    protected $availableFlightsOnly;
    /**
     * Request direct flights between given locations. This defaults to false.
     *
     * @var bool
     */
    protected $directFlightsOnly;
    /**
     * A sequence number for additional message identification, assigned by the requesting host system. When a request message includes an echo token the corresponding response message MUST include an echo token with an identical value.
     *
     * @var string
     */
    protected $echoToken;
    /**
     * A positive integer value that indicates the maximum number of responses desired in the return.
     *
     * @var string
     */
    protected $maxResponses;
    /**
     * @var OrgOpentravelOta200305OTAAirLowFareSearchRQOriginDestinationInformation[]
     */
    protected $originDestinationInformation;
    /**
     * Point of sale object.
     *
     * @var OrgOpentravelOta200305POSType
     */
    protected $pOS;
    /**
     * Identifes the primary language preference for the form of travel represented in a collection. The human language is identified by ISO 639 codes.
     *
     * @var string
     */
    protected $primaryLangID;
    /**
     * @var string
     */
    protected $responseType;
    /**
     * @var string
     */
    protected $responseVersion;
    /**
     * Whether all messages should be printed in separate MTP element or not. Works only with PSS response serializers.
     *
     * @var bool
     */
    protected $separateMessages;
    /**
     * Used to identify the sequence number of the transaction as assigned by the sending system; allows for an application to process messages in a certain order or to request a resynchronization of messages in the event that a system has been off-line and needs to retrieve messages that were missed.
     *
     * @var string
     */
    protected $sequenceNmbr;
    /**
     * Additional elements and attributes to be included if required, per Trading Partner Agreement (TPA).
     *
     * @var OrgOpentravelOta200305OTAAirLowFareSearchRQTPAExtensions
     */
    protected $tPAExtensions;
    /**
     * Used to indicate whether the request is for the Test or Production system.
     *
     * @var string
     */
    protected $target;
    /**
     * Indicates the creation date and time of the message in UTC using the following format specified by ISO 8601; YYYY-MM-DDThh:mm:ssZ with time values using the 24 hour clock (e.g. 20 November 2003, 1:59:38 pm UTC becomes 2003-11-20T13:59:38Z).
     *
     * @var string
     */
    protected $timeStamp;
    /**
     * A unique identifier to relate all messages within a transaction (e.g. this would be sent in all request and response messages that are part of an on-going transaction).
     *
     * @var string
     */
    protected $transactionIdentifier;
    /**
     * This indicates where this message falls within a sequence of messages.
     *
     * @var string
     */
    protected $transactionStatusCode;
    /**
     * Air Low Fare Search Request preference information.
     *
     * @var OrgOpentravelOta200305AirSearchPrefsType
     */
    protected $travelPreferences;
    /**
     * Specifies passenger numbers and types.
     *
     * @var OrgOpentravelOta200305TravelerInfoSummaryType
     */
    protected $travelerInfoSummary;
    /**
     * Whether each MTP content should be truncated to specified length or not. Works only with PSS response serializers.
     *
     * @var bool
     */
    protected $truncateMessages;
    /**
     * @var string
     */
    protected $version;

    /**
     * @return string
     */
    public function getAltLangID(): ?string
    {
        return $this->altLangID;
    }

    /**
     * @param string $altLangID
     *
     * @return self
     */
    public function setAltLangID(?string $altLangID): self
    {
        $this->altLangID = $altLangID;

        return $this;
    }

    /**
     * Include only flights with available booking codes (when True or when attribute not present).
     *
     * @return bool
     */
    public function getAvailableFlightsOnly(): ?bool
    {
        return $this->availableFlightsOnly;
    }

    /**
     * Include only flights with available booking codes (when True or when attribute not present).
     *
     * @param bool $availableFlightsOnly
     *
     * @return self
     */
    public function setAvailableFlightsOnly(?bool $availableFlightsOnly): self
    {
        $this->availableFlightsOnly = $availableFlightsOnly;

        return $this;
    }

    /**
     * Request direct flights between given locations. This defaults to false.
     *
     * @return bool
     */
    public function getDirectFlightsOnly(): ?bool
    {
        return $this->directFlightsOnly;
    }

    /**
     * Request direct flights between given locations. This defaults to false.
     *
     * @param bool $directFlightsOnly
     *
     * @return self
     */
    public function setDirectFlightsOnly(?bool $directFlightsOnly): self
    {
        $this->directFlightsOnly = $directFlightsOnly;

        return $this;
    }

    /**
     * A sequence number for additional message identification, assigned by the requesting host system. When a request message includes an echo token the corresponding response message MUST include an echo token with an identical value.
     *
     * @return string
     */
    public function getEchoToken(): ?string
    {
        return $this->echoToken;
    }

    /**
     * A sequence number for additional message identification, assigned by the requesting host system. When a request message includes an echo token the corresponding response message MUST include an echo token with an identical value.
     *
     * @param string $echoToken
     *
     * @return self
     */
    public function setEchoToken(?string $echoToken): self
    {
        $this->echoToken = $echoToken;

        return $this;
    }

    /**
     * A positive integer value that indicates the maximum number of responses desired in the return.
     *
     * @return string
     */
    public function getMaxResponses(): ?string
    {
        return $this->maxResponses;
    }

    /**
     * A positive integer value that indicates the maximum number of responses desired in the return.
     *
     * @param string $maxResponses
     *
     * @return self
     */
    public function setMaxResponses(?string $maxResponses): self
    {
        $this->maxResponses = $maxResponses;

        return $this;
    }

    /**
     * @return OrgOpentravelOta200305OTAAirLowFareSearchRQOriginDestinationInformation[]
     */
    public function getOriginDestinationInformation(): ?array
    {
        return $this->originDestinationInformation;
    }

    /**
     * @param OrgOpentravelOta200305OTAAirLowFareSearchRQOriginDestinationInformation[] $originDestinationInformation
     *
     * @return self
     */
    public function setOriginDestinationInformation(?array $originDestinationInformation): self
    {
        $this->originDestinationInformation = $originDestinationInformation;

        return $this;
    }

    /**
     * Point of sale object.
     *
     * @return OrgOpentravelOta200305POSType
     */
    public function getPOS(): ?OrgOpentravelOta200305POSType
    {
        return $this->pOS;
    }

    /**
     * Point of sale object.
     *
     * @param OrgOpentravelOta200305POSType $pOS
     *
     * @return self
     */
    public function setPOS(?OrgOpentravelOta200305POSType $pOS): self
    {
        $this->pOS = $pOS;

        return $this;
    }

    /**
     * Identifes the primary language preference for the form of travel represented in a collection. The human language is identified by ISO 639 codes.
     *
     * @return string
     */
    public function getPrimaryLangID(): ?string
    {
        return $this->primaryLangID;
    }

    /**
     * Identifes the primary language preference for the form of travel represented in a collection. The human language is identified by ISO 639 codes.
     *
     * @param string $primaryLangID
     *
     * @return self
     */
    public function setPrimaryLangID(?string $primaryLangID): self
    {
        $this->primaryLangID = $primaryLangID;

        return $this;
    }

    /**
     * @return string
     */
    public function getResponseType(): ?string
    {
        return $this->responseType;
    }

    /**
     * @param string $responseType
     *
     * @return self
     */
    public function setResponseType(?string $responseType): self
    {
        $this->responseType = $responseType;

        return $this;
    }

    /**
     * @return string
     */
    public function getResponseVersion(): ?string
    {
        return $this->responseVersion;
    }

    /**
     * @param string $responseVersion
     *
     * @return self
     */
    public function setResponseVersion(?string $responseVersion): self
    {
        $this->responseVersion = $responseVersion;

        return $this;
    }

    /**
     * Whether all messages should be printed in separate MTP element or not. Works only with PSS response serializers.
     *
     * @return bool
     */
    public function getSeparateMessages(): ?bool
    {
        return $this->separateMessages;
    }

    /**
     * Whether all messages should be printed in separate MTP element or not. Works only with PSS response serializers.
     *
     * @param bool $separateMessages
     *
     * @return self
     */
    public function setSeparateMessages(?bool $separateMessages): self
    {
        $this->separateMessages = $separateMessages;

        return $this;
    }

    /**
     * Used to identify the sequence number of the transaction as assigned by the sending system; allows for an application to process messages in a certain order or to request a resynchronization of messages in the event that a system has been off-line and needs to retrieve messages that were missed.
     *
     * @return string
     */
    public function getSequenceNmbr(): ?string
    {
        return $this->sequenceNmbr;
    }

    /**
     * Used to identify the sequence number of the transaction as assigned by the sending system; allows for an application to process messages in a certain order or to request a resynchronization of messages in the event that a system has been off-line and needs to retrieve messages that were missed.
     *
     * @param string $sequenceNmbr
     *
     * @return self
     */
    public function setSequenceNmbr(?string $sequenceNmbr): self
    {
        $this->sequenceNmbr = $sequenceNmbr;

        return $this;
    }

    /**
     * Additional elements and attributes to be included if required, per Trading Partner Agreement (TPA).
     *
     * @return OrgOpentravelOta200305OTAAirLowFareSearchRQTPAExtensions
     */
    public function getTPAExtensions(): ?OrgOpentravelOta200305OTAAirLowFareSearchRQTPAExtensions
    {
        return $this->tPAExtensions;
    }

    /**
     * Additional elements and attributes to be included if required, per Trading Partner Agreement (TPA).
     *
     * @param OrgOpentravelOta200305OTAAirLowFareSearchRQTPAExtensions $tPAExtensions
     *
     * @return self
     */
    public function setTPAExtensions(?OrgOpentravelOta200305OTAAirLowFareSearchRQTPAExtensions $tPAExtensions): self
    {
        $this->tPAExtensions = $tPAExtensions;

        return $this;
    }

    /**
     * Used to indicate whether the request is for the Test or Production system.
     *
     * @return string
     */
    public function getTarget(): ?string
    {
        return $this->target;
    }

    /**
     * Used to indicate whether the request is for the Test or Production system.
     *
     * @param string $target
     *
     * @return self
     */
    public function setTarget(?string $target): self
    {
        $this->target = $target;

        return $this;
    }

    /**
     * Indicates the creation date and time of the message in UTC using the following format specified by ISO 8601; YYYY-MM-DDThh:mm:ssZ with time values using the 24 hour clock (e.g. 20 November 2003, 1:59:38 pm UTC becomes 2003-11-20T13:59:38Z).
     *
     * @return string
     */
    public function getTimeStamp(): ?string
    {
        return $this->timeStamp;
    }

    /**
     * Indicates the creation date and time of the message in UTC using the following format specified by ISO 8601; YYYY-MM-DDThh:mm:ssZ with time values using the 24 hour clock (e.g. 20 November 2003, 1:59:38 pm UTC becomes 2003-11-20T13:59:38Z).
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

    /**
     * A unique identifier to relate all messages within a transaction (e.g. this would be sent in all request and response messages that are part of an on-going transaction).
     *
     * @return string
     */
    public function getTransactionIdentifier(): ?string
    {
        return $this->transactionIdentifier;
    }

    /**
     * A unique identifier to relate all messages within a transaction (e.g. this would be sent in all request and response messages that are part of an on-going transaction).
     *
     * @param string $transactionIdentifier
     *
     * @return self
     */
    public function setTransactionIdentifier(?string $transactionIdentifier): self
    {
        $this->transactionIdentifier = $transactionIdentifier;

        return $this;
    }

    /**
     * This indicates where this message falls within a sequence of messages.
     *
     * @return string
     */
    public function getTransactionStatusCode(): ?string
    {
        return $this->transactionStatusCode;
    }

    /**
     * This indicates where this message falls within a sequence of messages.
     *
     * @param string $transactionStatusCode
     *
     * @return self
     */
    public function setTransactionStatusCode(?string $transactionStatusCode): self
    {
        $this->transactionStatusCode = $transactionStatusCode;

        return $this;
    }

    /**
     * Air Low Fare Search Request preference information.
     *
     * @return OrgOpentravelOta200305AirSearchPrefsType
     */
    public function getTravelPreferences(): ?OrgOpentravelOta200305AirSearchPrefsType
    {
        return $this->travelPreferences;
    }

    /**
     * Air Low Fare Search Request preference information.
     *
     * @param OrgOpentravelOta200305AirSearchPrefsType $travelPreferences
     *
     * @return self
     */
    public function setTravelPreferences(?OrgOpentravelOta200305AirSearchPrefsType $travelPreferences): self
    {
        $this->travelPreferences = $travelPreferences;

        return $this;
    }

    /**
     * Specifies passenger numbers and types.
     *
     * @return OrgOpentravelOta200305TravelerInfoSummaryType
     */
    public function getTravelerInfoSummary(): ?OrgOpentravelOta200305TravelerInfoSummaryType
    {
        return $this->travelerInfoSummary;
    }

    /**
     * Specifies passenger numbers and types.
     *
     * @param OrgOpentravelOta200305TravelerInfoSummaryType $travelerInfoSummary
     *
     * @return self
     */
    public function setTravelerInfoSummary(?OrgOpentravelOta200305TravelerInfoSummaryType $travelerInfoSummary): self
    {
        $this->travelerInfoSummary = $travelerInfoSummary;

        return $this;
    }

    /**
     * Whether each MTP content should be truncated to specified length or not. Works only with PSS response serializers.
     *
     * @return bool
     */
    public function getTruncateMessages(): ?bool
    {
        return $this->truncateMessages;
    }

    /**
     * Whether each MTP content should be truncated to specified length or not. Works only with PSS response serializers.
     *
     * @param bool $truncateMessages
     *
     * @return self
     */
    public function setTruncateMessages(?bool $truncateMessages): self
    {
        $this->truncateMessages = $truncateMessages;

        return $this;
    }

    /**
     * @return string
     */
    public function getVersion(): ?string
    {
        return $this->version;
    }

    /**
     * @param string $version
     *
     * @return self
     */
    public function setVersion(?string $version): self
    {
        $this->version = $version;

        return $this;
    }
}
