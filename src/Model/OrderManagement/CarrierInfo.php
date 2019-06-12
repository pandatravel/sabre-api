<?php

namespace Ammonkc\SabreApi\Model\OrderManagement;

use Ammonkc\SabreApi\AbstractModel;

class CarrierInfo extends AbstractModel
{
    /**
     * The two-letter [IATA](https://www.iata.org/publications/Pages/code-search.aspx) airline code.
     *
     * @var string
     */
    protected $carrierCode;

    /**
     * The two-letter [IATA](https://www.iata.org/publications/Pages/code-search.aspx) airline code.
     *
     * @return string
     */
    public function getCarrierCode(): ?string
    {
        return $this->carrierCode;
    }

    /**
     * The two-letter [IATA](https://www.iata.org/publications/Pages/code-search.aspx) airline code.
     *
     * @param string $carrierCode
     *
     * @return self
     */
    public function setCarrierCode(?string $carrierCode): self
    {
        $this->carrierCode = $carrierCode;

        return $this;
    }
}
