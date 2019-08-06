<?php

namespace Ammonkc\SabreApi\Model\BargainFinderMax;

use Ammonkc\SabreApi\AbstractModel;

class ItineraryGroupType extends AbstractModel
{
    /**
     * @var GroupDescription
     */
    protected $groupDescription;
    /**
     * @var ItineraryType[]
     */
    protected $itineraries;
    /**
     * @var ProcessingMessageType[]
     */
    protected $processingMessages;

    /**
     * @return GroupDescription
     */
    public function getGroupDescription(): GroupDescription
    {
        return $this->groupDescription;
    }

    /**
     * @param GroupDescription $groupDescription
     *
     * @return self
     */
    public function setGroupDescription(GroupDescription $groupDescription): self
    {
        $this->groupDescription = $groupDescription;

        return $this;
    }

    /**
     * @return ItineraryType[]
     */
    public function getItineraries(): array
    {
        return $this->itineraries;
    }

    /**
     * @param ItineraryType[] $itineraries
     *
     * @return self
     */
    public function setItineraries(array $itineraries): self
    {
        $this->itineraries = $itineraries;

        return $this;
    }

    /**
     * @return ProcessingMessageType[]
     */
    public function getProcessingMessages(): array
    {
        return $this->processingMessages;
    }

    /**
     * @param ProcessingMessageType[] $processingMessages
     *
     * @return self
     */
    public function setProcessingMessages(array $processingMessages): self
    {
        $this->processingMessages = $processingMessages;

        return $this;
    }
}
