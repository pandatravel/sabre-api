<?php

namespace Ammonkc\SabreApi\Model\BargainFinderMax;

use Ammonkc\SabreApi\AbstractModel;

class OrgOpentravelOta200305TravelerInfoSummaryTPAExtensionsTypeTravelerRatingScore extends AbstractModel
{
    /**
     * @var string
     */
    protected $carrier;
    /**
     * @var int
     */
    protected $value;

    /**
     * @return string
     */
    public function getCarrier(): string
    {
        return $this->carrier;
    }

    /**
     * @param string $carrier
     *
     * @return self
     */
    public function setCarrier(string $carrier): self
    {
        $this->carrier = $carrier;

        return $this;
    }

    /**
     * @return int
     */
    public function getValue(): int
    {
        return $this->value;
    }

    /**
     * @param int $value
     *
     * @return self
     */
    public function setValue(int $value): self
    {
        $this->value = $value;

        return $this;
    }
}
