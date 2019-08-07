<?php

namespace Ammonkc\SabreApi\Model\BargainFinderMax;

use Ammonkc\SabreApi\AbstractModel;

class OrgOpentravelOta200305AirSearchPrefsTypeTPAExtensionsValidatingCarrierCheckCountry extends AbstractModel
{
    /**
     * 2 character country code as defined in ISO3166.
     *
     * @var string
     */
    protected $code;

    /**
     * 2 character country code as defined in ISO3166.
     *
     * @return string
     */
    public function getCode(): ?string
    {
        return $this->code;
    }

    /**
     * 2 character country code as defined in ISO3166.
     *
     * @param string $code
     *
     * @return self
     */
    public function setCode(?string $code): self
    {
        $this->code = $code;

        return $this;
    }
}
