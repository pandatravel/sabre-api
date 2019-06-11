<?php

namespace Ammonkc\SabreApi\Model\EnhancedAirTicket;

use Ammonkc\SabreApi\AbstractModel;

class TicketingItemMiscQualifiers extends AbstractModel
{
    /**
     * @var TicketingItemMiscQualifiersAirExtrasItem[]
     */
    protected $airExtras;
    /**
     * Cannot combine with PhaseIV.
     *
     * @var TicketingItemMiscQualifiersBaggageAllowance
     */
    protected $baggageAllowance;
    /**
     * @var TicketingItemMiscQualifiersCertificateItem[]
     */
    protected $certificate;
    /**
     * @var TicketingItemMiscQualifiersCommission
     */
    protected $commission;
    /**
     * "DOB" is used to instruct the system to take the passenger's date of birth-related information from the SSR PNR field, and pass it into the host-based ticketing application.

    This is required for clients based in the Russian Federation.

     *
     * @var string
     */
    protected $dateOfBirth;
    /**
     * @var TicketingItemMiscQualifiersEndorsement
     */
    protected $endorsement;
    /**
     * @var TicketingItemMiscQualifiersFutureTicket
     */
    protected $futureTicket;
    /**
     * Both parameters will print a passenger electronic ticketing receipt as well as an invoice.
     *
     * @var TicketingItemMiscQualifiersInvoice
     */
    protected $invoice;
    /**
     * Please note that only two of the three attributes can be set to true simultaneously.
     *
     * @var TicketingItemMiscQualifiersNeedPrint
     */
    protected $needPrint;
    /**
     * @var TicketingItemMiscQualifiersNetRemit
     */
    protected $netRemit;
    /**
     * @var TicketingItemMiscQualifiersTicket
     */
    protected $ticket;
    /**
     * @var TicketingItemMiscQualifiersTourCode
     */
    protected $tourCode;

    /**
     * @return TicketingItemMiscQualifiersAirExtrasItem[]
     */
    public function getAirExtras(): ?array
    {
        return $this->airExtras;
    }

    /**
     * @param TicketingItemMiscQualifiersAirExtrasItem[] $airExtras
     *
     * @return self
     */
    public function setAirExtras(?array $airExtras): self
    {
        $this->airExtras = $airExtras;

        return $this;
    }

    /**
     * Cannot combine with PhaseIV.
     *
     * @return TicketingItemMiscQualifiersBaggageAllowance
     */
    public function getBaggageAllowance(): ?TicketingItemMiscQualifiersBaggageAllowance
    {
        return $this->baggageAllowance;
    }

    /**
     * Cannot combine with PhaseIV.
     *
     * @param TicketingItemMiscQualifiersBaggageAllowance $baggageAllowance
     *
     * @return self
     */
    public function setBaggageAllowance(?TicketingItemMiscQualifiersBaggageAllowance $baggageAllowance): self
    {
        $this->baggageAllowance = $baggageAllowance;

        return $this;
    }

    /**
     * @return TicketingItemMiscQualifiersCertificateItem[]
     */
    public function getCertificate(): ?array
    {
        return $this->certificate;
    }

    /**
     * @param TicketingItemMiscQualifiersCertificateItem[] $certificate
     *
     * @return self
     */
    public function setCertificate(?array $certificate): self
    {
        $this->certificate = $certificate;

        return $this;
    }

    /**
     * @return TicketingItemMiscQualifiersCommission
     */
    public function getCommission(): ?TicketingItemMiscQualifiersCommission
    {
        return $this->commission;
    }

    /**
     * @param TicketingItemMiscQualifiersCommission $commission
     *
     * @return self
     */
    public function setCommission(?TicketingItemMiscQualifiersCommission $commission): self
    {
        $this->commission = $commission;

        return $this;
    }

    /**
     * "DOB" is used to instruct the system to take the passenger's date of birth-related information from the SSR PNR field, and pass it into the host-based ticketing application.

    This is required for clients based in the Russian Federation.

     *
     * @return string
     */
    public function getDateOfBirth(): ?string
    {
        return $this->dateOfBirth;
    }

    /**
     * "DOB" is used to instruct the system to take the passenger's date of birth-related information from the SSR PNR field, and pass it into the host-based ticketing application.

    This is required for clients based in the Russian Federation.

     *
     * @param string $dateOfBirth
     *
     * @return self
     */
    public function setDateOfBirth(?string $dateOfBirth): self
    {
        $this->dateOfBirth = $dateOfBirth;

        return $this;
    }

    /**
     * @return TicketingItemMiscQualifiersEndorsement
     */
    public function getEndorsement(): ?TicketingItemMiscQualifiersEndorsement
    {
        return $this->endorsement;
    }

    /**
     * @param TicketingItemMiscQualifiersEndorsement $endorsement
     *
     * @return self
     */
    public function setEndorsement(?TicketingItemMiscQualifiersEndorsement $endorsement): self
    {
        $this->endorsement = $endorsement;

        return $this;
    }

    /**
     * @return TicketingItemMiscQualifiersFutureTicket
     */
    public function getFutureTicket(): ?TicketingItemMiscQualifiersFutureTicket
    {
        return $this->futureTicket;
    }

    /**
     * @param TicketingItemMiscQualifiersFutureTicket $futureTicket
     *
     * @return self
     */
    public function setFutureTicket(?TicketingItemMiscQualifiersFutureTicket $futureTicket): self
    {
        $this->futureTicket = $futureTicket;

        return $this;
    }

    /**
     * Both parameters will print a passenger electronic ticketing receipt as well as an invoice.
     *
     * @return TicketingItemMiscQualifiersInvoice
     */
    public function getInvoice(): ?TicketingItemMiscQualifiersInvoice
    {
        return $this->invoice;
    }

    /**
     * Both parameters will print a passenger electronic ticketing receipt as well as an invoice.
     *
     * @param TicketingItemMiscQualifiersInvoice $invoice
     *
     * @return self
     */
    public function setInvoice(?TicketingItemMiscQualifiersInvoice $invoice): self
    {
        $this->invoice = $invoice;

        return $this;
    }

    /**
     * Please note that only two of the three attributes can be set to true simultaneously.
     *
     * @return TicketingItemMiscQualifiersNeedPrint
     */
    public function getNeedPrint(): ?TicketingItemMiscQualifiersNeedPrint
    {
        return $this->needPrint;
    }

    /**
     * Please note that only two of the three attributes can be set to true simultaneously.
     *
     * @param TicketingItemMiscQualifiersNeedPrint $needPrint
     *
     * @return self
     */
    public function setNeedPrint(?TicketingItemMiscQualifiersNeedPrint $needPrint): self
    {
        $this->needPrint = $needPrint;

        return $this;
    }

    /**
     * @return TicketingItemMiscQualifiersNetRemit
     */
    public function getNetRemit(): ?TicketingItemMiscQualifiersNetRemit
    {
        return $this->netRemit;
    }

    /**
     * @param TicketingItemMiscQualifiersNetRemit $netRemit
     *
     * @return self
     */
    public function setNetRemit(?TicketingItemMiscQualifiersNetRemit $netRemit): self
    {
        $this->netRemit = $netRemit;

        return $this;
    }

    /**
     * @return TicketingItemMiscQualifiersTicket
     */
    public function getTicket(): ?TicketingItemMiscQualifiersTicket
    {
        return $this->ticket;
    }

    /**
     * @param TicketingItemMiscQualifiersTicket $ticket
     *
     * @return self
     */
    public function setTicket(?TicketingItemMiscQualifiersTicket $ticket): self
    {
        $this->ticket = $ticket;

        return $this;
    }

    /**
     * @return TicketingItemMiscQualifiersTourCode
     */
    public function getTourCode(): ?TicketingItemMiscQualifiersTourCode
    {
        return $this->tourCode;
    }

    /**
     * @param TicketingItemMiscQualifiersTourCode $tourCode
     *
     * @return self
     */
    public function setTourCode(?TicketingItemMiscQualifiersTourCode $tourCode): self
    {
        $this->tourCode = $tourCode;

        return $this;
    }
}
