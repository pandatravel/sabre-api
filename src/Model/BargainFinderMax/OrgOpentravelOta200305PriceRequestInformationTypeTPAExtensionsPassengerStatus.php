<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Ammonkc\SabreApi\Model\BargainFinderMax;

use Ammonkc\SabreApi\AbstractModel;

class OrgOpentravelOta200305PriceRequestInformationTypeTPAExtensionsPassengerStatus extends AbstractModel
{
    /**
     * @var string
     */
    protected $cityCode;
    /**
     * 2-character country code as defined in ISO3166. No lowercase letters.
     *
     * @var string
     */
    protected $countryCode;
    /**
     * 2-letter state code.
     *
     * @var string
     */
    protected $stateCode;
    /**
     * @var string
     */
    protected $type;

    /**
     * @return string|null
     */
    public function getCityCode(): ?string
    {
        return $this->cityCode;
    }

    /**
     * @param string|null $cityCode
     *
     * @return self
     */
    public function setCityCode(?string $cityCode): self
    {
        $this->cityCode = $cityCode;

        return $this;
    }

    /**
     * 2-character country code as defined in ISO3166. No lowercase letters.
     *
     * @return string|null
     */
    public function getCountryCode(): ?string
    {
        return $this->countryCode;
    }

    /**
     * 2-character country code as defined in ISO3166. No lowercase letters.
     *
     * @param string|null $countryCode
     *
     * @return self
     */
    public function setCountryCode(?string $countryCode): self
    {
        $this->countryCode = $countryCode;

        return $this;
    }

    /**
     * 2-letter state code.
     *
     * @return string|null
     */
    public function getStateCode(): ?string
    {
        return $this->stateCode;
    }

    /**
     * 2-letter state code.
     *
     * @param string|null $stateCode
     *
     * @return self
     */
    public function setStateCode(?string $stateCode): self
    {
        $this->stateCode = $stateCode;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getType(): ?string
    {
        return $this->type;
    }

    /**
     * @param string|null $type
     *
     * @return self
     */
    public function setType(?string $type): self
    {
        $this->type = $type;

        return $this;
    }
}
