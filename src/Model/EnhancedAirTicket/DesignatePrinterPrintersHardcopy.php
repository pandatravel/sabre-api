<?php

namespace Ammonkc\SabreApi\Model\EnhancedAirTicket;

use Ammonkc\SabreApi\AbstractModel;

class DesignatePrinterPrintersHardcopy extends AbstractModel
{
    /**
     * "LNIATA" is used to specify a boarding pass printer address.
     *
     * @var string
     */
    protected $lNIATA;
    /**
     * "Spacing" is used to specify the spacing, either 1, or 2.
     *
     * @var string
     */
    protected $spacing;

    /**
     * "LNIATA" is used to specify a boarding pass printer address.
     *
     * @return string
     */
    public function getLNIATA(): ?string
    {
        return $this->lNIATA;
    }

    /**
     * "LNIATA" is used to specify a boarding pass printer address.
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
     * "Spacing" is used to specify the spacing, either 1, or 2.
     *
     * @return string
     */
    public function getSpacing(): ?string
    {
        return $this->spacing;
    }

    /**
     * "Spacing" is used to specify the spacing, either 1, or 2.
     *
     * @param string $spacing
     *
     * @return self
     */
    public function setSpacing(?string $spacing): self
    {
        $this->spacing = $spacing;

        return $this;
    }
}
