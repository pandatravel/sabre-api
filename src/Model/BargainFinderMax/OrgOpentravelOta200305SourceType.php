<?php

namespace Ammonkc\SabreApi\Model\BargainFinderMax;

use Ammonkc\SabreApi\AbstractModel;

class OrgOpentravelOta200305SourceType extends AbstractModel
{
    /**
     * Abacus user.
     *
     * @var bool
     */
    protected $abacusUser;
    /**
     * Accounting Code part of Office Accounting Code.
     *
     * @var string
     */
    protected $accountingCode;
    /**
     * Agent city.
     *
     * @var string
     */
    protected $agentCity;
    /**
     * Agent department code.
     *
     * @var string
     */
    protected $agentDepartmentCode;
    /**
     * Agent duty.
     *
     * @var string
     */
    protected $agentDuty;
    /**
     * An authority code assigned to a requestor.
     *
     * @var string
     */
    protected $agentDutyCode;
    /**
     * Agent function.
     *
     * @var string
     */
    protected $agentFunction;
    /**
     * Agent IATA.
     *
     * @var string
     */
    protected $agentIATA;
    /**
     * Identifies the party within the requesting entity.
     *
     * @var string
     */
    protected $agentSine;
    /**
     * Airline Channel Code.
     *
     * @var string
     */
    protected $airlineChannelCode;
    /**
     * The IATA assigned airline code.
     *
     * @var string
     */
    protected $airlineVendorID;
    /**
     * The IATA assigned airport code.
     *
     * @var string
     */
    protected $airportCode;
    /**
     * Specifies the booking channel type and whether it is the primary means of connectivity of the source.
     *
     * @var OrgOpentravelOta200305SourceBookingChannelType
     */
    protected $bookingChannel;
    /**
     * Carrier.
     *
     * @var string
     */
    protected $carrier;
    /**
     * @var string
     */
    protected $defaultTicketingCarrier;
    /**
     * Electronic Reservation Service Provider (ERSP) assigned identifier used to identify the individual using the ERSP system.
     *
     * @var string
     */
    protected $eRSPUserID;
    /**
     * The point of first departure in a trip.
     *
     * @var string
     */
    protected $firstDepartPoint;
    /**
     * Home agency IATA.
     *
     * @var string
     */
    protected $homeAgencyIATA;
    /**
     * Home PCC.
     *
     * @var string
     */
    protected $homePCC;
    /**
     * The country code of the requesting party.
     *
     * @var string
     */
    protected $iSOCountry;
    /**
     * The currency code in which the reservation will be ticketed.
     *
     * @var string
     */
    protected $iSOCurrency;
    /**
     * Main travel agency PCC.
     *
     * @var string
     */
    protected $mainTravelAgencyPCC;
    /**
     * Office Code part of Office Accounting Code.
     *
     * @var string
     */
    protected $officeCode;
    /**
     * City code part of Office Accounting Code.
     *
     * @var string
     */
    protected $personalCityCode;
    /**
     * Used to identify geospatial postion of the requesting entity.
     *
     * @var OrgOpentravelOta200305PositionType
     */
    protected $position;
    /**
     * @var string
     */
    protected $pseudoCityCode;
    /**
     * An identifier used to uniquely reference an object in a system (e.g. an airline reservation reference, customer profile reference, booking confirmation number, or a reference to a previous availability quote).
     *
     * @var OrgOpentravelOta200305UniqueIDType
     */
    protected $requestorID;
    /**
     * Travel agency IATA.
     *
     * @var string
     */
    protected $travelAgencyIATA;
    /**
     * Vendor CRS code.
     *
     * @var string
     */
    protected $vendorCRSCode;

    /**
     * Abacus user.
     *
     * @return bool
     */
    public function getAbacusUser(): ?bool
    {
        return $this->abacusUser;
    }

    /**
     * Abacus user.
     *
     * @param bool $abacusUser
     *
     * @return self
     */
    public function setAbacusUser(?bool $abacusUser): self
    {
        $this->abacusUser = $abacusUser;

        return $this;
    }

    /**
     * Accounting Code part of Office Accounting Code.
     *
     * @return string
     */
    public function getAccountingCode(): ?string
    {
        return $this->accountingCode;
    }

    /**
     * Accounting Code part of Office Accounting Code.
     *
     * @param string $accountingCode
     *
     * @return self
     */
    public function setAccountingCode(?string $accountingCode): self
    {
        $this->accountingCode = $accountingCode;

        return $this;
    }

    /**
     * Agent city.
     *
     * @return string
     */
    public function getAgentCity(): ?string
    {
        return $this->agentCity;
    }

    /**
     * Agent city.
     *
     * @param string $agentCity
     *
     * @return self
     */
    public function setAgentCity(?string $agentCity): self
    {
        $this->agentCity = $agentCity;

        return $this;
    }

    /**
     * Agent department code.
     *
     * @return string
     */
    public function getAgentDepartmentCode(): ?string
    {
        return $this->agentDepartmentCode;
    }

    /**
     * Agent department code.
     *
     * @param string $agentDepartmentCode
     *
     * @return self
     */
    public function setAgentDepartmentCode(?string $agentDepartmentCode): self
    {
        $this->agentDepartmentCode = $agentDepartmentCode;

        return $this;
    }

    /**
     * Agent duty.
     *
     * @return string
     */
    public function getAgentDuty(): ?string
    {
        return $this->agentDuty;
    }

    /**
     * Agent duty.
     *
     * @param string $agentDuty
     *
     * @return self
     */
    public function setAgentDuty(?string $agentDuty): self
    {
        $this->agentDuty = $agentDuty;

        return $this;
    }

    /**
     * An authority code assigned to a requestor.
     *
     * @return string
     */
    public function getAgentDutyCode(): ?string
    {
        return $this->agentDutyCode;
    }

    /**
     * An authority code assigned to a requestor.
     *
     * @param string $agentDutyCode
     *
     * @return self
     */
    public function setAgentDutyCode(?string $agentDutyCode): self
    {
        $this->agentDutyCode = $agentDutyCode;

        return $this;
    }

    /**
     * Agent function.
     *
     * @return string
     */
    public function getAgentFunction(): ?string
    {
        return $this->agentFunction;
    }

    /**
     * Agent function.
     *
     * @param string $agentFunction
     *
     * @return self
     */
    public function setAgentFunction(?string $agentFunction): self
    {
        $this->agentFunction = $agentFunction;

        return $this;
    }

    /**
     * Agent IATA.
     *
     * @return string
     */
    public function getAgentIATA(): ?string
    {
        return $this->agentIATA;
    }

    /**
     * Agent IATA.
     *
     * @param string $agentIATA
     *
     * @return self
     */
    public function setAgentIATA(?string $agentIATA): self
    {
        $this->agentIATA = $agentIATA;

        return $this;
    }

    /**
     * Identifies the party within the requesting entity.
     *
     * @return string
     */
    public function getAgentSine(): ?string
    {
        return $this->agentSine;
    }

    /**
     * Identifies the party within the requesting entity.
     *
     * @param string $agentSine
     *
     * @return self
     */
    public function setAgentSine(?string $agentSine): self
    {
        $this->agentSine = $agentSine;

        return $this;
    }

    /**
     * Airline Channel Code.
     *
     * @return string
     */
    public function getAirlineChannelCode(): ?string
    {
        return $this->airlineChannelCode;
    }

    /**
     * Airline Channel Code.
     *
     * @param string $airlineChannelCode
     *
     * @return self
     */
    public function setAirlineChannelCode(?string $airlineChannelCode): self
    {
        $this->airlineChannelCode = $airlineChannelCode;

        return $this;
    }

    /**
     * The IATA assigned airline code.
     *
     * @return string
     */
    public function getAirlineVendorID(): ?string
    {
        return $this->airlineVendorID;
    }

    /**
     * The IATA assigned airline code.
     *
     * @param string $airlineVendorID
     *
     * @return self
     */
    public function setAirlineVendorID(?string $airlineVendorID): self
    {
        $this->airlineVendorID = $airlineVendorID;

        return $this;
    }

    /**
     * The IATA assigned airport code.
     *
     * @return string
     */
    public function getAirportCode(): ?string
    {
        return $this->airportCode;
    }

    /**
     * The IATA assigned airport code.
     *
     * @param string $airportCode
     *
     * @return self
     */
    public function setAirportCode(?string $airportCode): self
    {
        $this->airportCode = $airportCode;

        return $this;
    }

    /**
     * Specifies the booking channel type and whether it is the primary means of connectivity of the source.
     *
     * @return OrgOpentravelOta200305SourceBookingChannelType
     */
    public function getBookingChannel(): ?OrgOpentravelOta200305SourceBookingChannelType
    {
        return $this->bookingChannel;
    }

    /**
     * Specifies the booking channel type and whether it is the primary means of connectivity of the source.
     *
     * @param OrgOpentravelOta200305SourceBookingChannelType $bookingChannel
     *
     * @return self
     */
    public function setBookingChannel(?OrgOpentravelOta200305SourceBookingChannelType $bookingChannel): self
    {
        $this->bookingChannel = $bookingChannel;

        return $this;
    }

    /**
     * Carrier.
     *
     * @return string
     */
    public function getCarrier(): ?string
    {
        return $this->carrier;
    }

    /**
     * Carrier.
     *
     * @param string $carrier
     *
     * @return self
     */
    public function setCarrier(?string $carrier): self
    {
        $this->carrier = $carrier;

        return $this;
    }

    /**
     * @return string
     */
    public function getDefaultTicketingCarrier(): ?string
    {
        return $this->defaultTicketingCarrier;
    }

    /**
     * @param string $defaultTicketingCarrier
     *
     * @return self
     */
    public function setDefaultTicketingCarrier(?string $defaultTicketingCarrier): self
    {
        $this->defaultTicketingCarrier = $defaultTicketingCarrier;

        return $this;
    }

    /**
     * Electronic Reservation Service Provider (ERSP) assigned identifier used to identify the individual using the ERSP system.
     *
     * @return string
     */
    public function getERSPUserID(): ?string
    {
        return $this->eRSPUserID;
    }

    /**
     * Electronic Reservation Service Provider (ERSP) assigned identifier used to identify the individual using the ERSP system.
     *
     * @param string $eRSPUserID
     *
     * @return self
     */
    public function setERSPUserID(?string $eRSPUserID): self
    {
        $this->eRSPUserID = $eRSPUserID;

        return $this;
    }

    /**
     * The point of first departure in a trip.
     *
     * @return string
     */
    public function getFirstDepartPoint(): ?string
    {
        return $this->firstDepartPoint;
    }

    /**
     * The point of first departure in a trip.
     *
     * @param string $firstDepartPoint
     *
     * @return self
     */
    public function setFirstDepartPoint(?string $firstDepartPoint): self
    {
        $this->firstDepartPoint = $firstDepartPoint;

        return $this;
    }

    /**
     * Home agency IATA.
     *
     * @return string
     */
    public function getHomeAgencyIATA(): ?string
    {
        return $this->homeAgencyIATA;
    }

    /**
     * Home agency IATA.
     *
     * @param string $homeAgencyIATA
     *
     * @return self
     */
    public function setHomeAgencyIATA(?string $homeAgencyIATA): self
    {
        $this->homeAgencyIATA = $homeAgencyIATA;

        return $this;
    }

    /**
     * Home PCC.
     *
     * @return string
     */
    public function getHomePCC(): ?string
    {
        return $this->homePCC;
    }

    /**
     * Home PCC.
     *
     * @param string $homePCC
     *
     * @return self
     */
    public function setHomePCC(?string $homePCC): self
    {
        $this->homePCC = $homePCC;

        return $this;
    }

    /**
     * The country code of the requesting party.
     *
     * @return string
     */
    public function getISOCountry(): ?string
    {
        return $this->iSOCountry;
    }

    /**
     * The country code of the requesting party.
     *
     * @param string $iSOCountry
     *
     * @return self
     */
    public function setISOCountry(?string $iSOCountry): self
    {
        $this->iSOCountry = $iSOCountry;

        return $this;
    }

    /**
     * The currency code in which the reservation will be ticketed.
     *
     * @return string
     */
    public function getISOCurrency(): ?string
    {
        return $this->iSOCurrency;
    }

    /**
     * The currency code in which the reservation will be ticketed.
     *
     * @param string $iSOCurrency
     *
     * @return self
     */
    public function setISOCurrency(?string $iSOCurrency): self
    {
        $this->iSOCurrency = $iSOCurrency;

        return $this;
    }

    /**
     * Main travel agency PCC.
     *
     * @return string
     */
    public function getMainTravelAgencyPCC(): ?string
    {
        return $this->mainTravelAgencyPCC;
    }

    /**
     * Main travel agency PCC.
     *
     * @param string $mainTravelAgencyPCC
     *
     * @return self
     */
    public function setMainTravelAgencyPCC(?string $mainTravelAgencyPCC): self
    {
        $this->mainTravelAgencyPCC = $mainTravelAgencyPCC;

        return $this;
    }

    /**
     * Office Code part of Office Accounting Code.
     *
     * @return string
     */
    public function getOfficeCode(): ?string
    {
        return $this->officeCode;
    }

    /**
     * Office Code part of Office Accounting Code.
     *
     * @param string $officeCode
     *
     * @return self
     */
    public function setOfficeCode(?string $officeCode): self
    {
        $this->officeCode = $officeCode;

        return $this;
    }

    /**
     * City code part of Office Accounting Code.
     *
     * @return string
     */
    public function getPersonalCityCode(): ?string
    {
        return $this->personalCityCode;
    }

    /**
     * City code part of Office Accounting Code.
     *
     * @param string $personalCityCode
     *
     * @return self
     */
    public function setPersonalCityCode(?string $personalCityCode): self
    {
        $this->personalCityCode = $personalCityCode;

        return $this;
    }

    /**
     * Used to identify geospatial postion of the requesting entity.
     *
     * @return OrgOpentravelOta200305PositionType
     */
    public function getPosition(): ?OrgOpentravelOta200305PositionType
    {
        return $this->position;
    }

    /**
     * Used to identify geospatial postion of the requesting entity.
     *
     * @param OrgOpentravelOta200305PositionType $position
     *
     * @return self
     */
    public function setPosition(?OrgOpentravelOta200305PositionType $position): self
    {
        $this->position = $position;

        return $this;
    }

    /**
     * @return string
     */
    public function getPseudoCityCode(): ?string
    {
        return $this->pseudoCityCode;
    }

    /**
     * @param string $pseudoCityCode
     *
     * @return self
     */
    public function setPseudoCityCode(?string $pseudoCityCode): self
    {
        $this->pseudoCityCode = $pseudoCityCode;

        return $this;
    }

    /**
     * An identifier used to uniquely reference an object in a system (e.g. an airline reservation reference, customer profile reference, booking confirmation number, or a reference to a previous availability quote).
     *
     * @return OrgOpentravelOta200305UniqueIDType
     */
    public function getRequestorID(): ?OrgOpentravelOta200305UniqueIDType
    {
        return $this->requestorID;
    }

    /**
     * An identifier used to uniquely reference an object in a system (e.g. an airline reservation reference, customer profile reference, booking confirmation number, or a reference to a previous availability quote).
     *
     * @param OrgOpentravelOta200305UniqueIDType $requestorID
     *
     * @return self
     */
    public function setRequestorID(?OrgOpentravelOta200305UniqueIDType $requestorID): self
    {
        $this->requestorID = $requestorID;

        return $this;
    }

    /**
     * Travel agency IATA.
     *
     * @return string
     */
    public function getTravelAgencyIATA(): ?string
    {
        return $this->travelAgencyIATA;
    }

    /**
     * Travel agency IATA.
     *
     * @param string $travelAgencyIATA
     *
     * @return self
     */
    public function setTravelAgencyIATA(?string $travelAgencyIATA): self
    {
        $this->travelAgencyIATA = $travelAgencyIATA;

        return $this;
    }

    /**
     * Vendor CRS code.
     *
     * @return string
     */
    public function getVendorCRSCode(): ?string
    {
        return $this->vendorCRSCode;
    }

    /**
     * Vendor CRS code.
     *
     * @param string $vendorCRSCode
     *
     * @return self
     */
    public function setVendorCRSCode(?string $vendorCRSCode): self
    {
        $this->vendorCRSCode = $vendorCRSCode;

        return $this;
    }
}
