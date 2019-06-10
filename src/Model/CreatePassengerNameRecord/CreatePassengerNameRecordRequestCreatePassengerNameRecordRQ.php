<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Ammonkc\SabreApi\Model\CreatePassengerNameRecord;

use Ammonkc\SabreApi\AbstractModel;

class CreatePassengerNameRecordRequestCreatePassengerNameRecordRQ extends AbstractModel
{
    /**
     * Used to add profile information.
     *
     * @var CreatePassengerNameRecordRequestCreatePassengerNameRecordRQProfile
     */
    protected $profile;
    /**
     * Used to add passenger/agency information.
     *
     * @var CreatePassengerNameRecordRequestCreatePassengerNameRecordRQTravelItineraryAddInfo
     */
    protected $travelItineraryAddInfo;
    /**
     * Used to add air segments.
     *
     * @var CreatePassengerNameRecordRequestCreatePassengerNameRecordRQAirBook
     */
    protected $airBook;
    /**
     * Used to price air segments.
     *
     * @var CreatePassengerNameRecordRequestCreatePassengerNameRecordRQAirPriceItem[]
     */
    protected $airPrice;
    /**
     * Used to request air tax information.
     *
     * @var CreatePassengerNameRecordRequestCreatePassengerNameRecordRQAirTax
     */
    protected $airTax;
    /**
     * Used to book GDS or Aggregator chain hotels. Please note that for the successful PNR creation .../TravelItineraryAddInfo/AgencyInfo/Address and .../TravelItineraryAddInfo/CustomerInfo/PersonName need to be provided.
     *
     * @var CreatePassengerNameRecordRequestCreatePassengerNameRecordRQHotelBook
     */
    protected $hotelBook;
    /**
     * Used to book miscellaneous segments such as Miscellaneous Charge Orders, Insurance Segments, Other product segments.
     *
     * @var CreatePassengerNameRecordRequestCreatePassengerNameRecordRQMiscSegment
     */
    protected $miscSegment;
    /**
     * Used to add additional special requests such as seats, remarks, SSRs.
     *
     * @var CreatePassengerNameRecordRequestCreatePassengerNameRecordRQSpecialReqDetails
     */
    protected $specialReqDetails;
    /**
     * Additional variables used to finalize the PNR creation.
     *
     * @var CreatePassengerNameRecordRequestCreatePassengerNameRecordRQPostProcessing
     */
    protected $postProcessing;
    /**
     * Used for internal processing.
     *
     * @var string
     */
    protected $sPInternal;
    /**
     * Used to specify to which city service should change context using ContextChange (AAA) and the rest of the service uses new security. If empty or equals current city the context doesn't change.
     *
     * @var string
     */
    protected $targetCity;
    /**
     * Used to specify whether the service should stop processing upon encountering a pricing error.
     *
     * @var bool
     */
    protected $haltOnAirPriceError;
    /**
     * Used to specify whether the service should stop processing upon encountering a hotel book error.
     *
     * @var bool
     */
    protected $haltOnHotelBookError;
    /**
     * Version of the payload message.
     *
     * @var string
     */
    protected $version;

    /**
     * Used to add profile information.
     *
     * @return CreatePassengerNameRecordRequestCreatePassengerNameRecordRQProfile
     */
    public function getProfile(): ?CreatePassengerNameRecordRequestCreatePassengerNameRecordRQProfile
    {
        return $this->profile;
    }

    /**
     * Used to add profile information.
     *
     * @param CreatePassengerNameRecordRequestCreatePassengerNameRecordRQProfile $profile
     *
     * @return self
     */
    public function setProfile(?CreatePassengerNameRecordRequestCreatePassengerNameRecordRQProfile $profile): self
    {
        $this->profile = $profile;

        return $this;
    }

    /**
     * Used to add passenger/agency information.
     *
     * @return CreatePassengerNameRecordRequestCreatePassengerNameRecordRQTravelItineraryAddInfo
     */
    public function getTravelItineraryAddInfo(): ?CreatePassengerNameRecordRequestCreatePassengerNameRecordRQTravelItineraryAddInfo
    {
        return $this->travelItineraryAddInfo;
    }

    /**
     * Used to add passenger/agency information.
     *
     * @param CreatePassengerNameRecordRequestCreatePassengerNameRecordRQTravelItineraryAddInfo $travelItineraryAddInfo
     *
     * @return self
     */
    public function setTravelItineraryAddInfo(?CreatePassengerNameRecordRequestCreatePassengerNameRecordRQTravelItineraryAddInfo $travelItineraryAddInfo): self
    {
        $this->travelItineraryAddInfo = $travelItineraryAddInfo;

        return $this;
    }

    /**
     * Used to add air segments.
     *
     * @return CreatePassengerNameRecordRequestCreatePassengerNameRecordRQAirBook
     */
    public function getAirBook(): ?CreatePassengerNameRecordRequestCreatePassengerNameRecordRQAirBook
    {
        return $this->airBook;
    }

    /**
     * Used to add air segments.
     *
     * @param CreatePassengerNameRecordRequestCreatePassengerNameRecordRQAirBook $airBook
     *
     * @return self
     */
    public function setAirBook(?CreatePassengerNameRecordRequestCreatePassengerNameRecordRQAirBook $airBook): self
    {
        $this->airBook = $airBook;

        return $this;
    }

    /**
     * Used to price air segments.
     *
     * @return CreatePassengerNameRecordRequestCreatePassengerNameRecordRQAirPriceItem[]
     */
    public function getAirPrice(): ?array
    {
        return $this->airPrice;
    }

    /**
     * Used to price air segments.
     *
     * @param CreatePassengerNameRecordRequestCreatePassengerNameRecordRQAirPriceItem[] $airPrice
     *
     * @return self
     */
    public function setAirPrice(?array $airPrice): self
    {
        $this->airPrice = $airPrice;

        return $this;
    }

    /**
     * Used to request air tax information.
     *
     * @return CreatePassengerNameRecordRequestCreatePassengerNameRecordRQAirTax
     */
    public function getAirTax(): ?CreatePassengerNameRecordRequestCreatePassengerNameRecordRQAirTax
    {
        return $this->airTax;
    }

    /**
     * Used to request air tax information.
     *
     * @param CreatePassengerNameRecordRequestCreatePassengerNameRecordRQAirTax $airTax
     *
     * @return self
     */
    public function setAirTax(?CreatePassengerNameRecordRequestCreatePassengerNameRecordRQAirTax $airTax): self
    {
        $this->airTax = $airTax;

        return $this;
    }

    /**
     * Used to book GDS or Aggregator chain hotels. Please note that for the successful PNR creation .../TravelItineraryAddInfo/AgencyInfo/Address and .../TravelItineraryAddInfo/CustomerInfo/PersonName need to be provided.
     *
     * @return CreatePassengerNameRecordRequestCreatePassengerNameRecordRQHotelBook
     */
    public function getHotelBook(): ?CreatePassengerNameRecordRequestCreatePassengerNameRecordRQHotelBook
    {
        return $this->hotelBook;
    }

    /**
     * Used to book GDS or Aggregator chain hotels. Please note that for the successful PNR creation .../TravelItineraryAddInfo/AgencyInfo/Address and .../TravelItineraryAddInfo/CustomerInfo/PersonName need to be provided.
     *
     * @param CreatePassengerNameRecordRequestCreatePassengerNameRecordRQHotelBook $hotelBook
     *
     * @return self
     */
    public function setHotelBook(?CreatePassengerNameRecordRequestCreatePassengerNameRecordRQHotelBook $hotelBook): self
    {
        $this->hotelBook = $hotelBook;

        return $this;
    }

    /**
     * Used to book miscellaneous segments such as Miscellaneous Charge Orders, Insurance Segments, Other product segments.
     *
     * @return CreatePassengerNameRecordRequestCreatePassengerNameRecordRQMiscSegment
     */
    public function getMiscSegment(): ?CreatePassengerNameRecordRequestCreatePassengerNameRecordRQMiscSegment
    {
        return $this->miscSegment;
    }

    /**
     * Used to book miscellaneous segments such as Miscellaneous Charge Orders, Insurance Segments, Other product segments.
     *
     * @param CreatePassengerNameRecordRequestCreatePassengerNameRecordRQMiscSegment $miscSegment
     *
     * @return self
     */
    public function setMiscSegment(?CreatePassengerNameRecordRequestCreatePassengerNameRecordRQMiscSegment $miscSegment): self
    {
        $this->miscSegment = $miscSegment;

        return $this;
    }

    /**
     * Used to add additional special requests such as seats, remarks, SSRs.
     *
     * @return CreatePassengerNameRecordRequestCreatePassengerNameRecordRQSpecialReqDetails
     */
    public function getSpecialReqDetails(): ?CreatePassengerNameRecordRequestCreatePassengerNameRecordRQSpecialReqDetails
    {
        return $this->specialReqDetails;
    }

    /**
     * Used to add additional special requests such as seats, remarks, SSRs.
     *
     * @param CreatePassengerNameRecordRequestCreatePassengerNameRecordRQSpecialReqDetails $specialReqDetails
     *
     * @return self
     */
    public function setSpecialReqDetails(?CreatePassengerNameRecordRequestCreatePassengerNameRecordRQSpecialReqDetails $specialReqDetails): self
    {
        $this->specialReqDetails = $specialReqDetails;

        return $this;
    }

    /**
     * Additional variables used to finalize the PNR creation.
     *
     * @return CreatePassengerNameRecordRequestCreatePassengerNameRecordRQPostProcessing
     */
    public function getPostProcessing(): ?CreatePassengerNameRecordRequestCreatePassengerNameRecordRQPostProcessing
    {
        return $this->postProcessing;
    }

    /**
     * Additional variables used to finalize the PNR creation.
     *
     * @param CreatePassengerNameRecordRequestCreatePassengerNameRecordRQPostProcessing $postProcessing
     *
     * @return self
     */
    public function setPostProcessing(?CreatePassengerNameRecordRequestCreatePassengerNameRecordRQPostProcessing $postProcessing): self
    {
        $this->postProcessing = $postProcessing;

        return $this;
    }

    /**
     * Used for internal processing.
     *
     * @return string
     */
    public function getSPInternal(): ?string
    {
        return $this->sPInternal;
    }

    /**
     * Used for internal processing.
     *
     * @param string $sPInternal
     *
     * @return self
     */
    public function setSPInternal(?string $sPInternal): self
    {
        $this->sPInternal = $sPInternal;

        return $this;
    }

    /**
     * Used to specify to which city service should change context using ContextChange (AAA) and the rest of the service uses new security. If empty or equals current city the context doesn't change.
     *
     * @return string
     */
    public function getTargetCity(): ?string
    {
        return $this->targetCity;
    }

    /**
     * Used to specify to which city service should change context using ContextChange (AAA) and the rest of the service uses new security. If empty or equals current city the context doesn't change.
     *
     * @param string $targetCity
     *
     * @return self
     */
    public function setTargetCity(?string $targetCity): self
    {
        $this->targetCity = $targetCity;

        return $this;
    }

    /**
     * Used to specify whether the service should stop processing upon encountering a pricing error.
     *
     * @return bool
     */
    public function getHaltOnAirPriceError(): ?bool
    {
        return $this->haltOnAirPriceError;
    }

    /**
     * Used to specify whether the service should stop processing upon encountering a pricing error.
     *
     * @param bool $haltOnAirPriceError
     *
     * @return self
     */
    public function setHaltOnAirPriceError(?bool $haltOnAirPriceError): self
    {
        $this->haltOnAirPriceError = $haltOnAirPriceError;

        return $this;
    }

    /**
     * Used to specify whether the service should stop processing upon encountering a hotel book error.
     *
     * @return bool
     */
    public function getHaltOnHotelBookError(): ?bool
    {
        return $this->haltOnHotelBookError;
    }

    /**
     * Used to specify whether the service should stop processing upon encountering a hotel book error.
     *
     * @param bool $haltOnHotelBookError
     *
     * @return self
     */
    public function setHaltOnHotelBookError(?bool $haltOnHotelBookError): self
    {
        $this->haltOnHotelBookError = $haltOnHotelBookError;

        return $this;
    }

    /**
     * Version of the payload message.
     *
     * @return string
     */
    public function getVersion(): ?string
    {
        return $this->version;
    }

    /**
     * Version of the payload message.
     *
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
