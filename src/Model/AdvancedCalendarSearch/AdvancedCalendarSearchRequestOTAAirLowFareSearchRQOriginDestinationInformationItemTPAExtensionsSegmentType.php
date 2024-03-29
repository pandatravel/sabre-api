<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Ammonkc\SabreApi\Model\AdvancedCalendarSearch;

use Ammonkc\SabreApi\AbstractModel;

class AdvancedCalendarSearchRequestOTAAirLowFareSearchRQOriginDestinationInformationItemTPAExtensionsSegmentType extends AbstractModel
{
    /**
     * @var string
     */
    protected $code;

    /**
     * @return string
     */
    public function getCode(): ?string
    {
        return $this->code;
    }

    /**
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
