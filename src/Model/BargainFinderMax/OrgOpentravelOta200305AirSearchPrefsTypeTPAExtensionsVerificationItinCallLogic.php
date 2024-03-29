<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Ammonkc\SabreApi\Model\BargainFinderMax;

use Ammonkc\SabreApi\AbstractModel;

class OrgOpentravelOta200305AirSearchPrefsTypeTPAExtensionsVerificationItinCallLogic extends AbstractModel
{
    /**
     * Check availability for repriced itin.
     *
     * @var bool
     */
    protected $alwaysCheckAvailability;
    /**
     * Define how the current itinerary is priced.
     *
     * @var string
     */
    protected $value;

    /**
     * Check availability for repriced itin.
     *
     * @return bool|null
     */
    public function getAlwaysCheckAvailability(): ?bool
    {
        return $this->alwaysCheckAvailability;
    }

    /**
     * Check availability for repriced itin.
     *
     * @param bool|null $alwaysCheckAvailability
     *
     * @return self
     */
    public function setAlwaysCheckAvailability(?bool $alwaysCheckAvailability): self
    {
        $this->alwaysCheckAvailability = $alwaysCheckAvailability;

        return $this;
    }

    /**
     * Define how the current itinerary is priced.
     *
     * @return string|null
     */
    public function getValue(): ?string
    {
        return $this->value;
    }

    /**
     * Define how the current itinerary is priced.
     *
     * @param string|null $value
     *
     * @return self
     */
    public function setValue(?string $value): self
    {
        $this->value = $value;

        return $this;
    }
}
