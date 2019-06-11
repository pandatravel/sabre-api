<?php

namespace Ammonkc\SabreApi\Model\EnhancedAirTicket;

use Ammonkc\SabreApi\AbstractModel;

class PostProcessingEndTransactionEmailETicket extends AbstractModel
{
    /**
     * "eTicket" is used to send an email notification containing a text-based copy of the eTicket.
     *
     * @var bool
     */
    protected $ind;
    /**
     * @var PostProcessingEndTransactionEmailETicketPDF
     */
    protected $pDF;

    /**
     * "eTicket" is used to send an email notification containing a text-based copy of the eTicket.
     *
     * @return bool
     */
    public function getInd(): ?bool
    {
        return $this->ind;
    }

    /**
     * "eTicket" is used to send an email notification containing a text-based copy of the eTicket.
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
     * @return PostProcessingEndTransactionEmailETicketPDF
     */
    public function getPDF(): ?PostProcessingEndTransactionEmailETicketPDF
    {
        return $this->pDF;
    }

    /**
     * @param PostProcessingEndTransactionEmailETicketPDF $pDF
     *
     * @return self
     */
    public function setPDF(?PostProcessingEndTransactionEmailETicketPDF $pDF): self
    {
        $this->pDF = $pDF;

        return $this;
    }
}
