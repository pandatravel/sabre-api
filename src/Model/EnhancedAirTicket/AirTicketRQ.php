<?php

namespace Ammonkc\SabreApi\Model\EnhancedAirTicket;

use Ammonkc\SabreApi\AbstractModel;

class AirTicketRQ extends AbstractModel
{
    /**
     * Version of the payload message.
     *
     * @var string
     */
    protected $version;
    /**
     * "TargetCity" is used to specify to which city service should change context using ContextChange (AAA) and the rest of the service uses new security.

    If empty or equals current city the context doesn't change.

     *
     * @var string
     */
    protected $targetCity;
    /**
     * @var DesignatePrinter
     */
    protected $designatePrinter;
    /**
     * @var Itinerary
     */
    protected $itinerary;
    /**
     * @var AccountingLines
     */
    protected $accountingLines;
    /**
     * @var TicketingItem[]
     */
    protected $ticketing;
    /**
     * @var PostProcessing
     */
    protected $postProcessing;

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

    /**
     * "TargetCity" is used to specify to which city service should change context using ContextChange (AAA) and the rest of the service uses new security.

    If empty or equals current city the context doesn't change.

     *
     * @return string
     */
    public function getTargetCity(): ?string
    {
        return $this->targetCity;
    }

    /**
     * "TargetCity" is used to specify to which city service should change context using ContextChange (AAA) and the rest of the service uses new security.

    If empty or equals current city the context doesn't change.

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
     * @return DesignatePrinter
     */
    public function getDesignatePrinter(): ?DesignatePrinter
    {
        return $this->designatePrinter;
    }

    /**
     * @param DesignatePrinter $designatePrinter
     *
     * @return self
     */
    public function setDesignatePrinter(?DesignatePrinter $designatePrinter): self
    {
        $this->designatePrinter = $designatePrinter;

        return $this;
    }

    /**
     * @return Itinerary
     */
    public function getItinerary(): ?Itinerary
    {
        return $this->itinerary;
    }

    /**
     * @param Itinerary $itinerary
     *
     * @return self
     */
    public function setItinerary(?Itinerary $itinerary): self
    {
        $this->itinerary = $itinerary;

        return $this;
    }

    /**
     * @return AccountingLines
     */
    public function getAccountingLines(): ?AccountingLines
    {
        return $this->accountingLines;
    }

    /**
     * @param AccountingLines $accountingLines
     *
     * @return self
     */
    public function setAccountingLines(?AccountingLines $accountingLines): self
    {
        $this->accountingLines = $accountingLines;

        return $this;
    }

    /**
     * @return TicketingItem[]
     */
    public function getTicketing(): ?array
    {
        return $this->ticketing;
    }

    /**
     * @param TicketingItem[] $ticketing
     *
     * @return self
     */
    public function setTicketing(?array $ticketing): self
    {
        $this->ticketing = $ticketing;

        return $this;
    }

    /**
     * @return PostProcessing
     */
    public function getPostProcessing(): ?PostProcessing
    {
        return $this->postProcessing;
    }

    /**
     * @param PostProcessing $postProcessing
     *
     * @return self
     */
    public function setPostProcessing(?PostProcessing $postProcessing): self
    {
        $this->postProcessing = $postProcessing;

        return $this;
    }
}
