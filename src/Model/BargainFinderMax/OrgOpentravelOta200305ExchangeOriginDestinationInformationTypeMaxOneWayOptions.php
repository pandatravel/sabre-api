<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Ammonkc\SabreApi\Model\BargainFinderMax;

class OrgOpentravelOta200305ExchangeOriginDestinationInformationTypeMaxOneWayOptions
{
    /**
     * @var int
     */
    protected $value;

    /**
     * @return int
     */
    public function getValue(): ?int
    {
        return $this->value;
    }

    /**
     * @param int $value
     *
     * @return self
     */
    public function setValue(?int $value): self
    {
        $this->value = $value;

        return $this;
    }
}