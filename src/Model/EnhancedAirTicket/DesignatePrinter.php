<?php

namespace Ammonkc\SabreApi\Model\EnhancedAirTicket;

use Ammonkc\SabreApi\AbstractModel;

class DesignatePrinter extends AbstractModel
{
    /**
     * @var DesignatePrinterPrinters
     */
    protected $printers;
    /**
     * @var DesignatePrinterProfile
     */
    protected $profile;

    /**
     * @return DesignatePrinterPrinters
     */
    public function getPrinters(): ?DesignatePrinterPrinters
    {
        return $this->printers;
    }

    /**
     * @param DesignatePrinterPrinters $printers
     *
     * @return self
     */
    public function setPrinters(?DesignatePrinterPrinters $printers): self
    {
        $this->printers = $printers;

        return $this;
    }

    /**
     * @return DesignatePrinterProfile
     */
    public function getProfile(): ?DesignatePrinterProfile
    {
        return $this->profile;
    }

    /**
     * @param DesignatePrinterProfile $profile
     *
     * @return self
     */
    public function setProfile(?DesignatePrinterProfile $profile): self
    {
        $this->profile = $profile;

        return $this;
    }
}
