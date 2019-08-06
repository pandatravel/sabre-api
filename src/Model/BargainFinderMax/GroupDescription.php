<?php

namespace Ammonkc\SabreApi\Model\BargainFinderMax;

use Ammonkc\SabreApi\AbstractModel;

class GroupDescription extends AbstractModel
{
    /**
     * @var string
     */
    protected $itineraryType;
    /**
     * @var LegDescriptionType[]
     */
    protected $legDescriptions;

    /**
     * @return string
     */
    public function getItineraryType(): string
    {
        return $this->itineraryType;
    }

    /**
     * @param string $itineraryType
     *
     * @return self
     */
    public function setItineraryType(string $itineraryType): self
    {
        $this->itineraryType = $itineraryType;

        return $this;
    }

    /**
     * @return LegDescriptionType[]
     */
    public function getLegDescriptions(): array
    {
        return $this->legDescriptions;
    }

    /**
     * @param LegDescriptionType[] $legDescriptions
     *
     * @return self
     */
    public function setLegDescriptions(array $legDescriptions): self
    {
        $this->legDescriptions = $legDescriptions;

        return $this;
    }
}
