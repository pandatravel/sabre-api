<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Ammonkc\SabreApi\Model\AdvancedCalendarSearch;

use Ammonkc\SabreApi\AbstractModel;

class AdvancedCalendarSearchRequestOTAAirLowFareSearchRQOriginDestinationInformationItemTPAExtensions extends AbstractModel
{
    /**
     * @var AdvancedCalendarSearchRequestOTAAirLowFareSearchRQOriginDestinationInformationItemTPAExtensionsSegmentType
     */
    protected $segmentType;

    /**
     * @return AdvancedCalendarSearchRequestOTAAirLowFareSearchRQOriginDestinationInformationItemTPAExtensionsSegmentType
     */
    public function getSegmentType(): ?AdvancedCalendarSearchRequestOTAAirLowFareSearchRQOriginDestinationInformationItemTPAExtensionsSegmentType
    {
        return $this->segmentType;
    }

    /**
     * @param AdvancedCalendarSearchRequestOTAAirLowFareSearchRQOriginDestinationInformationItemTPAExtensionsSegmentType $segmentType
     *
     * @return self
     */
    public function setSegmentType(?AdvancedCalendarSearchRequestOTAAirLowFareSearchRQOriginDestinationInformationItemTPAExtensionsSegmentType $segmentType): self
    {
        $this->segmentType = $segmentType;

        return $this;
    }
}