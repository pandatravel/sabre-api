<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Ammonkc\SabreApi\Model\AdvancedCalendarSearch;

use Ammonkc\SabreApi\AbstractModel;

class AdvancedCalendarSearchRequestOTAAirLowFareSearchRQTravelerInfoSummaryPriceRequestInformation extends AbstractModel
{
    /**
     * @var mixed
     */
    protected $tPAExtensions;

    /**
     * @return mixed
     */
    public function getTPAExtensions()
    {
        return $this->tPAExtensions;
    }

    /**
     * @param mixed $tPAExtensions
     *
     * @return self
     */
    public function setTPAExtensions($tPAExtensions): self
    {
        $this->tPAExtensions = $tPAExtensions;

        return $this;
    }
}