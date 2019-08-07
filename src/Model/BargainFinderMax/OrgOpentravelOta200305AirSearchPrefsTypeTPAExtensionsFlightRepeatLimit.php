<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Ammonkc\SabreApi\Model\BargainFinderMax;

use Ammonkc\SabreApi\AbstractModel;

class OrgOpentravelOta200305AirSearchPrefsTypeTPAExtensionsFlightRepeatLimit extends AbstractModel
{
    /**
     * Flight Repeat Limit for DSF. Expected value 1-100.
     *
     * @var int
     */
    protected $value;

    /**
     * Flight Repeat Limit for DSF. Expected value 1-100.
     *
     * @return int|null
     */
    public function getValue(): ?int
    {
        return $this->value;
    }

    /**
     * Flight Repeat Limit for DSF. Expected value 1-100.
     *
     * @param int|null $value
     *
     * @return self
     */
    public function setValue(?int $value): self
    {
        $this->value = $value;

        return $this;
    }
}
