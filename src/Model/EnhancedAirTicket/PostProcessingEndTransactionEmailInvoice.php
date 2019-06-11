<?php

namespace Ammonkc\SabreApi\Model\EnhancedAirTicket;

use Ammonkc\SabreApi\AbstractModel;

class PostProcessingEndTransactionEmailInvoice extends AbstractModel
{
    /**
     * "Invoice" is used to send an email notification containing a text-based copy of the invoice.
     *
     * @var bool
     */
    protected $ind;

    /**
     * "Invoice" is used to send an email notification containing a text-based copy of the invoice.
     *
     * @return bool
     */
    public function getInd(): ?bool
    {
        return $this->ind;
    }

    /**
     * "Invoice" is used to send an email notification containing a text-based copy of the invoice.
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
