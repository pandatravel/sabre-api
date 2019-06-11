<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Ammonkc\SabreApi\Model\SeatMap\Model;

class SeatMapRequestEnhancedSeatMapRQSeatMapQueryEnhancedFareAvailQualifiersItemSeatReqReqType
{
    /**
     * A string used for an open enumeration literal value.Place a literal in this attribute if you have selected the "other_" value in the enumerated list. Note that this value should be known to your trading partners.
     *
     * @var string
     */
    protected $extension;
    /**
     * @var string
     */
    protected $extensionPointSummary;

    /**
     * A string used for an open enumeration literal value.Place a literal in this attribute if you have selected the "other_" value in the enumerated list. Note that this value should be known to your trading partners.
     *
     * @return string
     */
    public function getExtension(): ?string
    {
        return $this->extension;
    }

    /**
     * A string used for an open enumeration literal value.Place a literal in this attribute if you have selected the "other_" value in the enumerated list. Note that this value should be known to your trading partners.
     *
     * @param string $extension
     *
     * @return self
     */
    public function setExtension(?string $extension): self
    {
        $this->extension = $extension;

        return $this;
    }

    /**
     * @return string
     */
    public function getExtensionPointSummary(): ?string
    {
        return $this->extensionPointSummary;
    }

    /**
     * @param string $extensionPointSummary
     *
     * @return self
     */
    public function setExtensionPointSummary(?string $extensionPointSummary): self
    {
        $this->extensionPointSummary = $extensionPointSummary;

        return $this;
    }
}
