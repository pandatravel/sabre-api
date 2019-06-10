<?php

namespace Ammonkc\SabreApi\Model\BargainFinderMax;

use Ammonkc\SabreApi\AbstractModel;

class Equipment extends AbstractModel
{
    /**
     * Change of equipment.
     *
     * @var bool
     */
    protected $change;
    /**
     * Equipment code.
     *
     * @var string
     */
    protected $code;
    /**
     * Equipment type for first leg.
     *
     * @var string
     */
    protected $typeForFirstLeg;
    /**
     * Equipment type for last leg.
     *
     * @var string
     */
    protected $typeForLastLeg;

    /**
     * Change of equipment.
     *
     * @return bool
     */
    public function getChange(): ?bool
    {
        return $this->change;
    }

    /**
     * Change of equipment.
     *
     * @param bool $change
     *
     * @return self
     */
    public function setChange(?bool $change): self
    {
        $this->change = $change;

        return $this;
    }

    /**
     * Equipment code.
     *
     * @return string
     */
    public function getCode(): ?string
    {
        return $this->code;
    }

    /**
     * Equipment code.
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
     * Equipment type for first leg.
     *
     * @return string
     */
    public function getTypeForFirstLeg(): ?string
    {
        return $this->typeForFirstLeg;
    }

    /**
     * Equipment type for first leg.
     *
     * @param string $typeForFirstLeg
     *
     * @return self
     */
    public function setTypeForFirstLeg(?string $typeForFirstLeg): self
    {
        $this->typeForFirstLeg = $typeForFirstLeg;

        return $this;
    }

    /**
     * Equipment type for last leg.
     *
     * @return string
     */
    public function getTypeForLastLeg(): ?string
    {
        return $this->typeForLastLeg;
    }

    /**
     * Equipment type for last leg.
     *
     * @param string $typeForLastLeg
     *
     * @return self
     */
    public function setTypeForLastLeg(?string $typeForLastLeg): self
    {
        $this->typeForLastLeg = $typeForLastLeg;

        return $this;
    }
}
