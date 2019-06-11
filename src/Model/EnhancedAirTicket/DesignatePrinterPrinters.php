<?php

namespace Ammonkc\SabreApi\Model\EnhancedAirTicket;

use Ammonkc\SabreApi\AbstractModel;

class DesignatePrinterPrinters extends AbstractModel
{
    /**
     * @var DesignatePrinterPrintersBagTag
     */
    protected $bagTag;
    /**
     * @var DesignatePrinterPrintersBoardingPass
     */
    protected $boardingPass;
    /**
     * @var DesignatePrinterPrintersHardcopy
     */
    protected $hardcopy;
    /**
     * @var DesignatePrinterPrintersInvoiceItinerary
     */
    protected $invoiceItinerary;
    /**
     * @var DesignatePrinterPrintersListLabel
     */
    protected $listLabel;
    /**
     * @var DesignatePrinterPrintersMiniItinerary
     */
    protected $miniItinerary;
    /**
     * @var DesignatePrinterPrintersReport
     */
    protected $report;
    /**
     * Clients should only associate 255 sessions to a single printer address.

    Additional sessions beyond the initial 255 need to be designated to a different printer address.

     *
     * @var DesignatePrinterPrintersTicket
     */
    protected $ticket;

    /**
     * @return DesignatePrinterPrintersBagTag
     */
    public function getBagTag(): ?DesignatePrinterPrintersBagTag
    {
        return $this->bagTag;
    }

    /**
     * @param DesignatePrinterPrintersBagTag $bagTag
     *
     * @return self
     */
    public function setBagTag(?DesignatePrinterPrintersBagTag $bagTag): self
    {
        $this->bagTag = $bagTag;

        return $this;
    }

    /**
     * @return DesignatePrinterPrintersBoardingPass
     */
    public function getBoardingPass(): ?DesignatePrinterPrintersBoardingPass
    {
        return $this->boardingPass;
    }

    /**
     * @param DesignatePrinterPrintersBoardingPass $boardingPass
     *
     * @return self
     */
    public function setBoardingPass(?DesignatePrinterPrintersBoardingPass $boardingPass): self
    {
        $this->boardingPass = $boardingPass;

        return $this;
    }

    /**
     * @return DesignatePrinterPrintersHardcopy
     */
    public function getHardcopy(): ?DesignatePrinterPrintersHardcopy
    {
        return $this->hardcopy;
    }

    /**
     * @param DesignatePrinterPrintersHardcopy $hardcopy
     *
     * @return self
     */
    public function setHardcopy(?DesignatePrinterPrintersHardcopy $hardcopy): self
    {
        $this->hardcopy = $hardcopy;

        return $this;
    }

    /**
     * @return DesignatePrinterPrintersInvoiceItinerary
     */
    public function getInvoiceItinerary(): ?DesignatePrinterPrintersInvoiceItinerary
    {
        return $this->invoiceItinerary;
    }

    /**
     * @param DesignatePrinterPrintersInvoiceItinerary $invoiceItinerary
     *
     * @return self
     */
    public function setInvoiceItinerary(?DesignatePrinterPrintersInvoiceItinerary $invoiceItinerary): self
    {
        $this->invoiceItinerary = $invoiceItinerary;

        return $this;
    }

    /**
     * @return DesignatePrinterPrintersListLabel
     */
    public function getListLabel(): ?DesignatePrinterPrintersListLabel
    {
        return $this->listLabel;
    }

    /**
     * @param DesignatePrinterPrintersListLabel $listLabel
     *
     * @return self
     */
    public function setListLabel(?DesignatePrinterPrintersListLabel $listLabel): self
    {
        $this->listLabel = $listLabel;

        return $this;
    }

    /**
     * @return DesignatePrinterPrintersMiniItinerary
     */
    public function getMiniItinerary(): ?DesignatePrinterPrintersMiniItinerary
    {
        return $this->miniItinerary;
    }

    /**
     * @param DesignatePrinterPrintersMiniItinerary $miniItinerary
     *
     * @return self
     */
    public function setMiniItinerary(?DesignatePrinterPrintersMiniItinerary $miniItinerary): self
    {
        $this->miniItinerary = $miniItinerary;

        return $this;
    }

    /**
     * @return DesignatePrinterPrintersReport
     */
    public function getReport(): ?DesignatePrinterPrintersReport
    {
        return $this->report;
    }

    /**
     * @param DesignatePrinterPrintersReport $report
     *
     * @return self
     */
    public function setReport(?DesignatePrinterPrintersReport $report): self
    {
        $this->report = $report;

        return $this;
    }

    /**
     * Clients should only associate 255 sessions to a single printer address.

    Additional sessions beyond the initial 255 need to be designated to a different printer address.

     *
     * @return DesignatePrinterPrintersTicket
     */
    public function getTicket(): ?DesignatePrinterPrintersTicket
    {
        return $this->ticket;
    }

    /**
     * Clients should only associate 255 sessions to a single printer address.

    Additional sessions beyond the initial 255 need to be designated to a different printer address.

     *
     * @param DesignatePrinterPrintersTicket $ticket
     *
     * @return self
     */
    public function setTicket(?DesignatePrinterPrintersTicket $ticket): self
    {
        $this->ticket = $ticket;

        return $this;
    }
}
