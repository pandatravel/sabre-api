<?php

namespace Ammonkc\SabreApi\Model\BargainFinderMax;

use Ammonkc\SabreApi\AbstractModel;

class OrgOpentravelOta200305ExchangeOriginDestinationInformationTypeDateFlexibility extends AbstractModel
{
    /**
     * Number of alternate dates after requested travel date.
     *
     * @var int
     */
    protected $minus;
    /**
     * Number of alternate dates before and after requested travel date.
     *
     * @var int
     */
    protected $nbrOfDays;
    /**
     * Number of alternate dates before requested travel date.
     *
     * @var int
     */
    protected $plus;
    /**
     * This attribute enables the date tolerance in Calendar Cross Mode. Shopping will combine X dates (instead of just 1) from this leg with all dates from other leg. X value is derived from rule setting.
     *
     * @var bool
     */
    protected $tolerance;
    /**
     * Flag telling if dates within the specified range should be processed in the validate path.
     *
     * @var bool
     */
    protected $validate;

    /**
     * Number of alternate dates after requested travel date.
     *
     * @return int
     */
    public function getMinus(): ?int
    {
        return $this->minus;
    }

    /**
     * Number of alternate dates after requested travel date.
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
     * Number of alternate dates before and after requested travel date.
     *
     * @return int
     */
    public function getNbrOfDays(): ?int
    {
        return $this->nbrOfDays;
    }

    /**
     * Number of alternate dates before and after requested travel date.
     *
     * @param int $nbrOfDays
     *
     * @return self
     */
    public function setNbrOfDays(?int $nbrOfDays): self
    {
        $this->nbrOfDays = $nbrOfDays;

        return $this;
    }

    /**
     * Number of alternate dates before requested travel date.
     *
     * @return int
     */
    public function getPlus(): ?int
    {
        return $this->plus;
    }

    /**
     * Number of alternate dates before requested travel date.
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
     * This attribute enables the date tolerance in Calendar Cross Mode. Shopping will combine X dates (instead of just 1) from this leg with all dates from other leg. X value is derived from rule setting.
     *
     * @return bool
     */
    public function getTolerance(): ?bool
    {
        return $this->tolerance;
    }

    /**
     * This attribute enables the date tolerance in Calendar Cross Mode. Shopping will combine X dates (instead of just 1) from this leg with all dates from other leg. X value is derived from rule setting.
     *
     * @param bool $tolerance
     *
     * @return self
     */
    public function setTolerance(?bool $tolerance): self
    {
        $this->tolerance = $tolerance;

        return $this;
    }

    /**
     * Flag telling if dates within the specified range should be processed in the validate path.
     *
     * @return bool
     */
    public function getValidate(): ?bool
    {
        return $this->validate;
    }

    /**
     * Flag telling if dates within the specified range should be processed in the validate path.
     *
     * @param bool $validate
     *
     * @return self
     */
    public function setValidate(?bool $validate): self
    {
        $this->validate = $validate;

        return $this;
    }
}
