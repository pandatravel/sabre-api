<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Ammonkc\SabreApi\Model\BargainFinderMax;

class OrgOpentravelOta200305TravelDateTimeTypeArrivalDatesDay
{
    /**
     * IntelliSell Date type (required format: YYYY-MM-DD).
     *
     * @var string
     */
    protected $date;

    /**
     * IntelliSell Date type (required format: YYYY-MM-DD).
     *
     * @return string
     */
    public function getDate(): ?string
    {
        return $this->date;
    }

    /**
     * IntelliSell Date type (required format: YYYY-MM-DD).
     *
     * @param string $date
     *
     * @return self
     */
    public function setDate(?string $date): self
    {
        $this->date = $date;

        return $this;
    }
}
