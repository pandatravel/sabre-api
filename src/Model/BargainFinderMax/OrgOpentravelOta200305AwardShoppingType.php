<?php

namespace Ammonkc\SabreApi\Model\BargainFinderMax;

use Ammonkc\SabreApi\AbstractModel;

class OrgOpentravelOta200305AwardShoppingType extends AbstractModel
{
    /**
     * Enable award shopping.
     *
     * @var bool
     */
    protected $enable;
    /**
     * Use Redemption Availability Service.
     *
     * @var bool
     */
    protected $useRAS;

    /**
     * Enable award shopping.
     *
     * @return bool
     */
    public function getEnable(): bool
    {
        return $this->enable;
    }

    /**
     * Enable award shopping.
     *
     * @param bool $enable
     *
     * @return self
     */
    public function setEnable(bool $enable): self
    {
        $this->enable = $enable;

        return $this;
    }

    /**
     * Use Redemption Availability Service.
     *
     * @return bool
     */
    public function getUseRAS(): bool
    {
        return $this->useRAS;
    }

    /**
     * Use Redemption Availability Service.
     *
     * @param bool $useRAS
     *
     * @return self
     */
    public function setUseRAS(bool $useRAS): self
    {
        $this->useRAS = $useRAS;

        return $this;
    }
}
