<?php

namespace Ammonkc\SabreApi\Model\BargainFinderMax;

use Ammonkc\SabreApi\AbstractModel;

class LegType extends AbstractModel
{
    /**
     * @var int
     */
    protected $id;
    /**
     * @var ScheduleType[]
     */
    protected $schedules;

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param int $id
     *
     * @return self
     */
    public function setId(int $id): self
    {
        $this->id = $id;

        return $this;
    }

    /**
     * @return ScheduleType[]
     */
    public function getSchedules(): array
    {
        return $this->schedules;
    }

    /**
     * @param ScheduleType[] $schedules
     *
     * @return self
     */
    public function setSchedules(array $schedules): self
    {
        $this->schedules = $schedules;

        return $this;
    }
}
