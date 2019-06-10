<?php

namespace Ammonkc\SabreApi\Model\BargainFinderMax;

use Ammonkc\SabreApi\AbstractModel;

class OrgOpentravelOta200305TravelDateTimeTypeArrivalDatesDay extends AbstractModel
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
