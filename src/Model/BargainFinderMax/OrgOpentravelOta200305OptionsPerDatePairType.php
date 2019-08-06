<?php

namespace Ammonkc\SabreApi\Model\BargainFinderMax;

use Ammonkc\SabreApi\AbstractModel;

class OrgOpentravelOta200305OptionsPerDatePairType extends AbstractModel
{
    /**
     * Departure date.
     *
     * @var string
     */
    protected $departure;
    /**
     * Maximum number of options per date/date pair.
     *
     * @var int
     */
    protected $max;
    /**
     * Minimum number of options per date/date pair.
     *
     * @var int
     */
    protected $min;
    /**
     * Return date.
     *
     * @var string
     */
    protected $return;

    /**
     * Departure date.
     *
     * @return string
     */
    public function getDeparture(): string
    {
        return $this->departure;
    }

    /**
     * Departure date.
     *
     * @param string $departure
     *
     * @return self
     */
    public function setDeparture(string $departure): self
    {
        $this->departure = $departure;

        return $this;
    }

    /**
     * Maximum number of options per date/date pair.
     *
     * @return int
     */
    public function getMax(): int
    {
        return $this->max;
    }

    /**
     * Maximum number of options per date/date pair.
     *
     * @param int $max
     *
     * @return self
     */
    public function setMax(int $max): self
    {
        $this->max = $max;

        return $this;
    }

    /**
     * Minimum number of options per date/date pair.
     *
     * @return int
     */
    public function getMin(): int
    {
        return $this->min;
    }

    /**
     * Minimum number of options per date/date pair.
     *
     * @param int $min
     *
     * @return self
     */
    public function setMin(int $min): self
    {
        $this->min = $min;

        return $this;
    }

    /**
     * Return date.
     *
     * @return string
     */
    public function getReturn(): string
    {
        return $this->return;
    }

    /**
     * Return date.
     *
     * @param string $return
     *
     * @return self
     */
    public function setReturn(string $return): self
    {
        $this->return = $return;

        return $this;
    }
}
