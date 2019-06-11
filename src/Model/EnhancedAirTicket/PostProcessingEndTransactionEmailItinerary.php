<?php

namespace Ammonkc\SabreApi\Model\EnhancedAirTicket;

use Ammonkc\SabreApi\AbstractModel;

class PostProcessingEndTransactionEmailItinerary extends AbstractModel
{
    /**
     * "Itinerary" is used to send an email notification containing a text-based copy of the itinerary.
     *
     * @var bool
     */
    protected $ind;
    /**
     * @var PostProcessingEndTransactionEmailItineraryPDF
     */
    protected $pDF;
    /**
     * @var PostProcessingEndTransactionEmailItinerarySegmentItem[]
     */
    protected $segment;

    /**
     * "Itinerary" is used to send an email notification containing a text-based copy of the itinerary.
     *
     * @return bool
     */
    public function getInd(): ?bool
    {
        return $this->ind;
    }

    /**
     * "Itinerary" is used to send an email notification containing a text-based copy of the itinerary.
     *
     * @param bool $ind
     *
     * @return self
     */
    public function setInd(?bool $ind): self
    {
        $this->ind = $ind;

        return $this;
    }

    /**
     * @return PostProcessingEndTransactionEmailItineraryPDF
     */
    public function getPDF(): ?PostProcessingEndTransactionEmailItineraryPDF
    {
        return $this->pDF;
    }

    /**
     * @param PostProcessingEndTransactionEmailItineraryPDF $pDF
     *
     * @return self
     */
    public function setPDF(?PostProcessingEndTransactionEmailItineraryPDF $pDF): self
    {
        $this->pDF = $pDF;

        return $this;
    }

    /**
     * @return PostProcessingEndTransactionEmailItinerarySegmentItem[]
     */
    public function getSegment(): ?array
    {
        return $this->segment;
    }

    /**
     * @param PostProcessingEndTransactionEmailItinerarySegmentItem[] $segment
     *
     * @return self
     */
    public function setSegment(?array $segment): self
    {
        $this->segment = $segment;

        return $this;
    }
}
