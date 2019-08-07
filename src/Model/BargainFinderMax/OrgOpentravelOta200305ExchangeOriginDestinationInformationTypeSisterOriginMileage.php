<?php

namespace Ammonkc\SabreApi\Model\BargainFinderMax;

use Ammonkc\SabreApi\AbstractModel;

class OrgOpentravelOta200305ExchangeOriginDestinationInformationTypeSisterOriginMileage extends AbstractModel
{
    /**
     * @var bool
     */
    protected $allowBorderCross;
    /**
     * "Code" can be "ARUNK", "O" for normal, or "X" for connection.
     *
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
     * "Code" can be "ARUNK", "O" for normal, or "X" for connection.
     *
     * @return int
     */
    public function getNumber(): ?int
    {
        return $this->number;
    }

    /**
     * "Code" can be "ARUNK", "O" for normal, or "X" for connection.
     *
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
