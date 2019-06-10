<?php

namespace Ammonkc\SabreApi\Model\BargainFinderMax;

use Ammonkc\SabreApi\AbstractModel;

class OrgOpentravelOta200305ExchangeOriginDestinationInformationTypeSisterDestinationMileage extends AbstractModel
{
    /**
     * @var bool
     */
    protected $allowBorderCross;
    /**
     * @var int
     */
    protected $number;

    /**
     * @return bool
     */
    public function getAllowBorderCross(): ?bool
    {
        return $this->allowBorderCross;
    }

    /**
     * @param bool $allowBorderCross
     *
     * @return self
     */
    public function setAllowBorderCross(?bool $allowBorderCross): self
    {
        $this->allowBorderCross = $allowBorderCross;

        return $this;
    }

    /**
     * @return int
     */
    public function getNumber(): ?int
    {
        return $this->number;
    }

    /**
     * @param int $number
     *
     * @return self
     */
    public function setNumber(?int $number): self
    {
        $this->number = $number;

        return $this;
    }
}
