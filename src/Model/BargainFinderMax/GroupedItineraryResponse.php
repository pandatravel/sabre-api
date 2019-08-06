<?php

namespace Ammonkc\SabreApi\Model\BargainFinderMax;

use Ammonkc\SabreApi\AbstractModel;

class GroupedItineraryResponse extends AbstractModel
{
    /**
     * @var GroupedItineraryResponseGroupedItineraryResponse
     */
    protected $groupedItineraryResponse;

    /**
     * @return GroupedItineraryResponseGroupedItineraryResponse
     */
    public function getGroupedItineraryResponse(): GroupedItineraryResponseGroupedItineraryResponse
    {
        return $this->groupedItineraryResponse;
    }

    /**
     * @param GroupedItineraryResponseGroupedItineraryResponse $groupedItineraryResponse
     *
     * @return self
     */
    public function setGroupedItineraryResponse(GroupedItineraryResponseGroupedItineraryResponse $groupedItineraryResponse): self
    {
        $this->groupedItineraryResponse = $groupedItineraryResponse;

        return $this;
    }
}
