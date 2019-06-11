<?php

namespace Ammonkc\SabreApi\Model\EnhancedAirTicket;

use Ammonkc\SabreApi\AbstractModel;

class PostProcessingEndTransactionEmailItineraryPDF extends AbstractModel
{
    /**
     * "PDF" is used to send an email notification containing a PDF-based copy of the itinerary.
     *
     * @var bool
     */
    protected $ind;

    /**
     * "PDF" is used to send an email notification containing a PDF-based copy of the itinerary.
     *
     * @return bool
     */
    public function getInd(): ?bool
    {
        return $this->ind;
    }

    /**
     * "PDF" is used to send an email notification containing a PDF-based copy of the itinerary.
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
}
