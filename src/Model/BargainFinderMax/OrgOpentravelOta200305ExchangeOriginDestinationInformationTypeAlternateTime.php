<?php

namespace Ammonkc\SabreApi\Model\BargainFinderMax;

use Ammonkc\SabreApi\AbstractModel;

class OrgOpentravelOta200305ExchangeOriginDestinationInformationTypeAlternateTime extends AbstractModel
{
    /**
     * Maximum number of hours before desired time.
     *
     * @var int
     */
    protected $minus;
    /**
     * Maximum number of hours after desired time.
     *
     * @var int
     */
    protected $plus;
    /**
     * Maximum time difference between actual and desired time.
     *
     * @var int
     */
    protected $plusMinus;

    /**
     * Maximum number of hours before desired time.
     *
     * @return int
     */
    public function getMinus(): ?int
    {
        return $this->minus;
    }

    /**
     * Maximum number of hours before desired time.
     *
     * @param int $minus
     *
     * @return self
     */
    public function setMinus(?int $minus): self
    {
        $this->minus = $minus;

        return $this;
    }

    /**
     * Maximum number of hours after desired time.
     *
     * @return int
     */
    public function getPlus(): ?int
    {
        return $this->plus;
    }

    /**
     * Maximum number of hours after desired time.
     *
     * @param int $plus
     *
     * @return self
     */
    public function setPlus(?int $plus): self
    {
        $this->plus = $plus;

        return $this;
    }

    /**
     * Maximum time difference between actual and desired time.
     *
     * @return int
     */
    public function getPlusMinus(): ?int
    {
        return $this->plusMinus;
    }

    /**
     * Maximum time difference between actual and desired time.
     *
     * @param int $plusMinus
     *
     * @return self
     */
    public function setPlusMinus(?int $plusMinus): self
    {
        $this->plusMinus = $plusMinus;

        return $this;
    }
}
