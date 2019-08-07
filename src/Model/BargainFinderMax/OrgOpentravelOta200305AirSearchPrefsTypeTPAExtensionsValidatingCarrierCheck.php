<?php

namespace Ammonkc\SabreApi\Model\BargainFinderMax;

use Ammonkc\SabreApi\AbstractModel;

class OrgOpentravelOta200305AirSearchPrefsTypeTPAExtensionsValidatingCarrierCheck extends AbstractModel
{
    /**
     * @var OrgOpentravelOta200305AirSearchPrefsTypeTPAExtensionsValidatingCarrierCheckCarrier[]
     */
    protected $carrier;
    /**
     * @var OrgOpentravelOta200305AirSearchPrefsTypeTPAExtensionsValidatingCarrierCheckCountry[]
     */
    protected $country;
    /**
     * If set to true validate IET agreement for listed countries.
     *
     * @var OrgOpentravelOta200305AirSearchPrefsTypeTPAExtensionsValidatingCarrierCheckIETValidation
     */
    protected $iETValidation;
    /**
     * If set to true validate BSP agreement for given carriers.
     *
     * @var OrgOpentravelOta200305AirSearchPrefsTypeTPAExtensionsValidatingCarrierCheckSettlementValidation
     */
    protected $settlementValidation;

    /**
     * @return OrgOpentravelOta200305AirSearchPrefsTypeTPAExtensionsValidatingCarrierCheckCarrier[]
     */
    public function getCarrier(): ?array
    {
        return $this->carrier;
    }

    /**
     * @param OrgOpentravelOta200305AirSearchPrefsTypeTPAExtensionsValidatingCarrierCheckCarrier[] $carrier
     *
     * @return self
     */
    public function setCarrier(?array $carrier): self
    {
        $this->carrier = $carrier;

        return $this;
    }

    /**
     * @return OrgOpentravelOta200305AirSearchPrefsTypeTPAExtensionsValidatingCarrierCheckCountry[]
     */
    public function getCountry(): ?array
    {
        return $this->country;
    }

    /**
     * @param OrgOpentravelOta200305AirSearchPrefsTypeTPAExtensionsValidatingCarrierCheckCountry[] $country
     *
     * @return self
     */
    public function setCountry(?array $country): self
    {
        $this->country = $country;

        return $this;
    }

    /**
     * If set to true validate IET agreement for listed countries.
     *
     * @return OrgOpentravelOta200305AirSearchPrefsTypeTPAExtensionsValidatingCarrierCheckIETValidation
     */
    public function getIETValidation(): ?OrgOpentravelOta200305AirSearchPrefsTypeTPAExtensionsValidatingCarrierCheckIETValidation
    {
        return $this->iETValidation;
    }

    /**
     * If set to true validate IET agreement for listed countries.
     *
     * @param OrgOpentravelOta200305AirSearchPrefsTypeTPAExtensionsValidatingCarrierCheckIETValidation $iETValidation
     *
     * @return self
     */
    public function setIETValidation(?OrgOpentravelOta200305AirSearchPrefsTypeTPAExtensionsValidatingCarrierCheckIETValidation $iETValidation): self
    {
        $this->iETValidation = $iETValidation;

        return $this;
    }

    /**
     * If set to true validate BSP agreement for given carriers.
     *
     * @return OrgOpentravelOta200305AirSearchPrefsTypeTPAExtensionsValidatingCarrierCheckSettlementValidation
     */
    public function getSettlementValidation(): ?OrgOpentravelOta200305AirSearchPrefsTypeTPAExtensionsValidatingCarrierCheckSettlementValidation
    {
        return $this->settlementValidation;
    }

    /**
     * If set to true validate BSP agreement for given carriers.
     *
     * @param OrgOpentravelOta200305AirSearchPrefsTypeTPAExtensionsValidatingCarrierCheckSettlementValidation $settlementValidation
     *
     * @return self
     */
    public function setSettlementValidation(?OrgOpentravelOta200305AirSearchPrefsTypeTPAExtensionsValidatingCarrierCheckSettlementValidation $settlementValidation): self
    {
        $this->settlementValidation = $settlementValidation;

        return $this;
    }
}
