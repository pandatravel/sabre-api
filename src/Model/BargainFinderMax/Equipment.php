<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

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
     * @return bool|null
     */
    public function getChange(): ?bool
    {
        return $this->change;
    }

    /**
     * Change of equipment.
     *
     * @param bool|null $change
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
     * @return string|null
     */
    public function getCode(): ?string
    {
        return $this->code;
    }

    /**
     * Equipment code.
     *
     * @param string|null $code
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
     * @return string|null
     */
    public function getTypeForFirstLeg(): ?string
    {
        return $this->typeForFirstLeg;
    }

    /**
     * Equipment type for first leg.
     *
     * @param string|null $typeForFirstLeg
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
     * @return string|null
     */
    public function getTypeForLastLeg(): ?string
    {
        return $this->typeForLastLeg;
    }

    /**
     * Equipment type for last leg.
     *
     * @param string|null $typeForLastLeg
     *
     * @return self
     */
    public function setTypeForLastLeg(?string $typeForLastLeg): self
    {
        $this->typeForLastLeg = $typeForLastLeg;

        return $this;
    }
}
