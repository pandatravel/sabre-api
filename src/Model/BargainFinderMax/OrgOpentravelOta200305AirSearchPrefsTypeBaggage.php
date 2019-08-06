<?php

namespace Ammonkc\SabreApi\Model\BargainFinderMax;

use Ammonkc\SabreApi\AbstractModel;

class OrgOpentravelOta200305AirSearchPrefsTypeBaggage extends AbstractModel
{
    /**
     * Turns on additional text output in response, see Description1 (D01) and Description2 (D02) in response.,Free baggage piece is required on the whole journey.
     *
     * @var bool
     */
    protected $description;
    /**
     * @var bool
     */
    protected $freePieceRequired;
    /**
     * @var string
     */
    protected $requestType;
    /**
     * Number of baggage pieces requested,Determines type of baggage processing result.
     *
     * @var int
     */
    protected $requestedPieces;

    /**
     * Turns on additional text output in response, see Description1 (D01) and Description2 (D02) in response.,Free baggage piece is required on the whole journey.
     *
     * @return bool
     */
    public function getDescription(): bool
    {
        return $this->description;
    }

    /**
     * Turns on additional text output in response, see Description1 (D01) and Description2 (D02) in response.,Free baggage piece is required on the whole journey.
     *
     * @param bool $description
     *
     * @return self
     */
    public function setDescription(bool $description): self
    {
        $this->description = $description;

        return $this;
    }

    /**
     * @return bool
     */
    public function getFreePieceRequired(): bool
    {
        return $this->freePieceRequired;
    }

    /**
     * @param bool $freePieceRequired
     *
     * @return self
     */
    public function setFreePieceRequired(bool $freePieceRequired): self
    {
        $this->freePieceRequired = $freePieceRequired;

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

    /**
     * Number of baggage pieces requested,Determines type of baggage processing result.
     *
     * @return int
     */
    public function getRequestedPieces(): int
    {
        return $this->requestedPieces;
    }

    /**
     * Number of baggage pieces requested,Determines type of baggage processing result.
     *
     * @param int $requestedPieces
     *
     * @return self
     */
    public function setRequestedPieces(int $requestedPieces): self
    {
        $this->requestedPieces = $requestedPieces;

        return $this;
    }
}
