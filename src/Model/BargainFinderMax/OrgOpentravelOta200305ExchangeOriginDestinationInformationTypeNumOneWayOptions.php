<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Ammonkc\SabreApi\Model\BargainFinderMax;

use Ammonkc\SabreApi\AbstractModel;

class OrgOpentravelOta200305ExchangeOriginDestinationInformationTypeNumOneWayOptions extends AbstractModel
{
    /**
     * @var int
     */
    protected $number;

    /**
     * @return int|null
     */
    public function getNumber(): ?int
    {
        return $this->number;
    }

    /**
     * @param int|null $number
     *
     * @return self
     */
    public function setNumber(?int $number): self
    {
        $this->number = $number;

        return $this;
    }
}
