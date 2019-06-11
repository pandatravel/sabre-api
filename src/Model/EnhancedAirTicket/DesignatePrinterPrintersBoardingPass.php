<?php

namespace Ammonkc\SabreApi\Model\EnhancedAirTicket;

use Ammonkc\SabreApi\AbstractModel;

class DesignatePrinterPrintersBoardingPass extends AbstractModel
{
    /**
     * "HostedCarrier" is used by airline customers to indicate that this request is for an airline-based boarding pass printer.
     *
     * @var bool
     */
    protected $hostedCarrier;
    /**
     * "LNIATA" is used to specify a boarding pass printer address.
     *
     * @var string
     */
    protected $lNIATA;

    /**
     * "HostedCarrier" is used by airline customers to indicate that this request is for an airline-based boarding pass printer.
     *
     * @return bool
     */
    public function getHostedCarrier(): ?bool
    {
        return $this->hostedCarrier;
    }

    /**
     * "HostedCarrier" is used by airline customers to indicate that this request is for an airline-based boarding pass printer.
     *
     * @param bool $hostedCarrier
     *
     * @return self
     */
    public function setHostedCarrier(?bool $hostedCarrier): self
    {
        $this->hostedCarrier = $hostedCarrier;

        return $this;
    }

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
}
