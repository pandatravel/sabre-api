<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Ammonkc\SabreApi\Model\CreatePassengerNameRecord;

use Ammonkc\SabreApi\AbstractModel;

class CreatePassengerNameRecordResponseCreatePassengerNameRecordRSAirPriceItemPriceQuotePricedItineraryAirItineraryPricingInfoItemPTCFareBreakdownItemBrandedFareInformation extends AbstractModel
{
    /**
     * Brand code.
     *
     * @var string
     */
    protected $brandCode;
    /**
     * Brand name.
     *
     * @var string
     */
    protected $brandName;
    /**
     * Program code.
     *
     * @var string
     */
    protected $programCode;
    /**
     * Program name.
     *
     * @var string
     */
    protected $programName;

    /**
     * Brand code.
     *
     * @return string
     */
    public function getBrandCode(): ?string
    {
        return $this->brandCode;
    }

    /**
     * Brand code.
     *
     * @param string $brandCode
     *
     * @return self
     */
    public function setBrandCode(?string $brandCode): self
    {
        $this->brandCode = $brandCode;

        return $this;
    }

    /**
     * Brand name.
     *
     * @return string
     */
    public function getBrandName(): ?string
    {
        return $this->brandName;
    }

    /**
     * Brand name.
     *
     * @param string $brandName
     *
     * @return self
     */
    public function setBrandName(?string $brandName): self
    {
        $this->brandName = $brandName;

        return $this;
    }

    /**
     * Program code.
     *
     * @return string
     */
    public function getProgramCode(): ?string
    {
        return $this->programCode;
    }

    /**
     * Program code.
     *
     * @param string $programCode
     *
     * @return self
     */
    public function setProgramCode(?string $programCode): self
    {
        $this->programCode = $programCode;

        return $this;
    }

    /**
     * Program name.
     *
     * @return string
     */
    public function getProgramName(): ?string
    {
        return $this->programName;
    }

    /**
     * Program name.
     *
     * @param string $programName
     *
     * @return self
     */
    public function setProgramName(?string $programName): self
    {
        $this->programName = $programName;

        return $this;
    }
}