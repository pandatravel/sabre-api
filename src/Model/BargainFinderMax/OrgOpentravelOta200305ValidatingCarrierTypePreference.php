<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Ammonkc\SabreApi\Model\BargainFinderMax;

class OrgOpentravelOta200305ValidatingCarrierTypePreference
{
    /**
     * Two-character code for the preferred validating carrier.
     *
     * @var string
     */
    protected $code;
    /**
     * Preference level for the validating carrier. Valid values are - Preferred or Unacceptable.
     *
     * @var string
     */
    protected $level;

    /**
     * Two-character code for the preferred validating carrier.
     *
     * @return string
     */
    public function getCode(): ?string
    {
        return $this->code;
    }

    /**
     * Two-character code for the preferred validating carrier.
     *
     * @param string $code
     *
     * @return self
     */
    public function setCode(?string $code): self
    {
        $this->code = $code;

        return $this;
    }

    /**
     * Preference level for the validating carrier. Valid values are - Preferred or Unacceptable.
     *
     * @return string
     */
    public function getLevel(): ?string
    {
        return $this->level;
    }

    /**
     * Preference level for the validating carrier. Valid values are - Preferred or Unacceptable.
     *
     * @param string $level
     *
     * @return self
     */
    public function setLevel(?string $level): self
    {
        $this->level = $level;

        return $this;
    }
}
