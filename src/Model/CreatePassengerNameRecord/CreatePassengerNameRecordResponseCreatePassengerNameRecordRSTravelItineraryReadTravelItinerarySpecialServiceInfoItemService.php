<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Ammonkc\SabreApi\Model\CreatePassengerNameRecord;

use Ammonkc\SabreApi\AbstractModel;

class CreatePassengerNameRecordResponseCreatePassengerNameRecordRSTravelItineraryReadTravelItinerarySpecialServiceInfoItemService extends AbstractModel
{
    /**
     * The airline information.
     *
     * @var CreatePassengerNameRecordResponseCreatePassengerNameRecordRSTravelItineraryReadTravelItinerarySpecialServiceInfoItemServiceAirline
     */
    protected $airline;
    /**
     * The passenger name information.
     *
     * @var CreatePassengerNameRecordResponseCreatePassengerNameRecordRSTravelItineraryReadTravelItinerarySpecialServiceInfoItemServicePersonNameItem[]
     */
    protected $personName;
    /**
     * The miscellaneous SSR-related text information.
     *
     * @var string[]
     */
    protected $text;
    /**
     * The SSR code associated with the particular SSR segment.
     *
     * @var string
     */
    protected $sSRCode;
    /**
     * The SSR type associated with the particular SSR segment.
     * Example: WCHR.
     *
     * @var string
     */
    protected $sSRType;

    /**
     * The airline information.
     *
     * @return CreatePassengerNameRecordResponseCreatePassengerNameRecordRSTravelItineraryReadTravelItinerarySpecialServiceInfoItemServiceAirline
     */
    public function getAirline(): CreatePassengerNameRecordResponseCreatePassengerNameRecordRSTravelItineraryReadTravelItinerarySpecialServiceInfoItemServiceAirline
    {
        return $this->airline;
    }

    /**
     * The airline information.
     *
     * @param CreatePassengerNameRecordResponseCreatePassengerNameRecordRSTravelItineraryReadTravelItinerarySpecialServiceInfoItemServiceAirline $airline
     *
     * @return self
     */
    public function setAirline(CreatePassengerNameRecordResponseCreatePassengerNameRecordRSTravelItineraryReadTravelItinerarySpecialServiceInfoItemServiceAirline $airline): self
    {
        $this->airline = $airline;

        return $this;
    }

    /**
     * The passenger name information.
     *
     * @return CreatePassengerNameRecordResponseCreatePassengerNameRecordRSTravelItineraryReadTravelItinerarySpecialServiceInfoItemServicePersonNameItem[]
     */
    public function getPersonName(): array
    {
        return $this->personName;
    }

    /**
     * The passenger name information.
     *
     * @param CreatePassengerNameRecordResponseCreatePassengerNameRecordRSTravelItineraryReadTravelItinerarySpecialServiceInfoItemServicePersonNameItem[] $personName
     *
     * @return self
     */
    public function setPersonName(array $personName): self
    {
        $this->personName = $personName;

        return $this;
    }

    /**
     * The miscellaneous SSR-related text information.
     *
     * @return string[]
     */
    public function getText(): array
    {
        return $this->text;
    }

    /**
     * The miscellaneous SSR-related text information.
     *
     * @param string[] $text
     *
     * @return self
     */
    public function setText(array $text): self
    {
        $this->text = $text;

        return $this;
    }

    /**
     * The SSR code associated with the particular SSR segment.
     *
     * @return string
     */
    public function getSSRCode(): string
    {
        return $this->sSRCode;
    }

    /**
     * The SSR code associated with the particular SSR segment.
     *
     * @param string $sSRCode
     *
     * @return self
     */
    public function setSSRCode(string $sSRCode): self
    {
        $this->sSRCode = $sSRCode;

        return $this;
    }

    /**
     * The SSR type associated with the particular SSR segment.
     * Example: WCHR.
     *
     * @return string
     */
    public function getSSRType(): string
    {
        return $this->sSRType;
    }

    /**
     * The SSR type associated with the particular SSR segment.
     * Example: WCHR.
     *
     * @param string $sSRType
     *
     * @return self
     */
    public function setSSRType(string $sSRType): self
    {
        $this->sSRType = $sSRType;

        return $this;
    }
}
