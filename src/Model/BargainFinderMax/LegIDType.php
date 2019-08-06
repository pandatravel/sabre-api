<?php

namespace Ammonkc\SabreApi\Model\BargainFinderMax;

use Ammonkc\SabreApi\AbstractModel;

class LegIDType extends AbstractModel
{
    /**
     * @var string
     */
    protected $departureDate;
    /**
     * @var int
     */
    protected $ref;

    /**
     * @return string
     */
    public function getDepartureDate(): string
    {
        return $this->departureDate;
    }

    /**
     * @param string $departureDate
     *
     * @return self
     */
    public function setDepartureDate(string $departureDate): self
    {
        $this->departureDate = $departureDate;

        return $this;
    }

    /**
     * @return int
     */
    public function getRef(): int
    {
        return $this->ref;
    }

    /**
     * @param int $ref
     *
     * @return self
     */
    public function setRef(int $ref): self
    {
        $this->ref = $ref;

        return $this;
    }
}
