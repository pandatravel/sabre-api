<?php

namespace Ammonkc\SabreApi\Model\OrderManagement;

use Ammonkc\SabreApi\AbstractModel;

class Journey extends AbstractModel
{
    /**
     * The unique identifier of the journey.
     *
     * @var string
     */
    protected $id;
    /**
     * A list of segments by id that apply to the journey.
     *
     * @var string[]
     */
    protected $segmentRefIds;

    /**
     * The unique identifier of the journey.
     *
     * @return string
     */
    public function getId(): ?string
    {
        return $this->id;
    }

    /**
     * The unique identifier of the journey.
     *
     * @param string $id
     *
     * @return self
     */
    public function setId(?string $id): self
    {
        $this->id = $id;

        return $this;
    }

    /**
     * A list of segments by id that apply to the journey.
     *
     * @return string[]
     */
    public function getSegmentRefIds(): ?array
    {
        return $this->segmentRefIds;
    }

    /**
     * A list of segments by id that apply to the journey.
     *
     * @param string[] $segmentRefIds
     *
     * @return self
     */
    public function setSegmentRefIds(?array $segmentRefIds): self
    {
        $this->segmentRefIds = $segmentRefIds;

        return $this;
    }
}
