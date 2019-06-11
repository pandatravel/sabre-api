<?php

namespace Ammonkc\SabreApi\Model\EnhancedAirTicket;

use Ammonkc\SabreApi\AbstractModel;

class DesignatePrinterPrintersTicket extends AbstractModel
{
    /**
     * Country Code.
     *
     * @var string
     */
    protected $countryCode;
    /**
     * "LNIATA" is used to specify a ticket printer address.
     *
     * @var string
     */
    protected $lNIATA;
    /**
     * @var DesignatePrinterPrintersTicketMiniItinerary
     */
    protected $miniItinerary;
    /**
     * @var DesignatePrinterPrintersTicketRemote
     */
    protected $remote;

    /**
     * Country Code.
     *
     * @return string
     */
    public function getCountryCode(): ?string
    {
        return $this->countryCode;
    }

    /**
     * Country Code.
     *
     * @param string $countryCode
     *
     * @return self
     */
    public function setCountryCode(?string $countryCode): self
    {
        $this->countryCode = $countryCode;

        return $this;
    }

    /**
     * "LNIATA" is used to specify a ticket printer address.
     *
     * @return string
     */
    public function getLNIATA(): ?string
    {
        return $this->lNIATA;
    }

    /**
     * "LNIATA" is used to specify a ticket printer address.
     *
     * @param string $lNIATA
     *
     * @return self
     */
    public function setLNIATA(?string $lNIATA): self
    {
        $this->lNIATA = $lNIATA;

        return $this;
    }

    /**
     * @return DesignatePrinterPrintersTicketMiniItinerary
     */
    public function getMiniItinerary(): ?DesignatePrinterPrintersTicketMiniItinerary
    {
        return $this->miniItinerary;
    }

    /**
     * @param DesignatePrinterPrintersTicketMiniItinerary $miniItinerary
     *
     * @return self
     */
    public function setMiniItinerary(?DesignatePrinterPrintersTicketMiniItinerary $miniItinerary): self
    {
        $this->miniItinerary = $miniItinerary;

        return $this;
    }

    /**
     * @return DesignatePrinterPrintersTicketRemote
     */
    public function getRemote(): ?DesignatePrinterPrintersTicketRemote
    {
        return $this->remote;
    }

    /**
     * @param DesignatePrinterPrintersTicketRemote $remote
     *
     * @return self
     */
    public function setRemote(?DesignatePrinterPrintersTicketRemote $remote): self
    {
        $this->remote = $remote;

        return $this;
    }
}
