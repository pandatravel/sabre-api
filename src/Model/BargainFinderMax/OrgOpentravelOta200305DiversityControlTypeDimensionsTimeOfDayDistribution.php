<?php

namespace Ammonkc\SabreApi\Model\BargainFinderMax;

use Ammonkc\SabreApi\AbstractModel;

class OrgOpentravelOta200305DiversityControlTypeDimensionsTimeOfDayDistribution extends AbstractModel
{
    /**
     * @var string
     */
    protected $direction;
    /**
     * @var string
     */
    protected $endpoint;
    /**
     * @var int
     */
    protected $leg;
    /**
     * @var OrgOpentravelOta200305DiversityControlTypeDimensionsTimeOfDayDistributionRange[]
     */
    protected $range;

    /**
     * @return string
     */
    public function getDirection(): ?string
    {
        return $this->direction;
    }

    /**
     * @param string $direction
     *
     * @return self
     */
    public function setDirection(?string $direction): self
    {
        $this->direction = $direction;

        return $this;
    }

    /**
     * @return string
     */
    public function getEndpoint(): ?string
    {
        return $this->endpoint;
    }

    /**
     * @param string $endpoint
     *
     * @return self
     */
    public function setEndpoint(?string $endpoint): self
    {
        $this->endpoint = $endpoint;

        return $this;
    }

    /**
     * @return int
     */
    public function getLeg(): ?int
    {
        return $this->leg;
    }

    /**
     * @param int $leg
     *
     * @return self
     */
    public function setLeg(?int $leg): self
    {
        $this->leg = $leg;

        return $this;
    }

    /**
     * @return OrgOpentravelOta200305DiversityControlTypeDimensionsTimeOfDayDistributionRange[]
     */
    public function getRange(): ?array
    {
        return $this->range;
    }

    /**
     * @param OrgOpentravelOta200305DiversityControlTypeDimensionsTimeOfDayDistributionRange[] $range
     *
     * @return self
     */
    public function setRange(?array $range): self
    {
        $this->range = $range;

        return $this;
    }
}
