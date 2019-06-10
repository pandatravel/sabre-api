<?php

namespace Ammonkc\SabreApi\Model\InstaFlightsSearch;

use Ammonkc\SabreApi\AbstractModel;

class TPAExtensions extends AbstractModel
{
    /**
     * The tag ID for the respective itinerary.

    A tag ID is returned when enabletagging=true is used in a previous InstaFlights Search API request.

     *
     * @var string
     */
    protected $tagID;
    /**
     * @var TPAExtensionsValidatingCarrier
     */
    protected $validatingCarrier;

    /**
     * The tag ID for the respective itinerary.

    A tag ID is returned when enabletagging=true is used in a previous InstaFlights Search API request.

     *
     * @return string
     */
    public function getTagID(): ?string
    {
        return $this->tagID;
    }

    /**
     * The tag ID for the respective itinerary.

    A tag ID is returned when enabletagging=true is used in a previous InstaFlights Search API request.

     *
     * @param string $tagID
     *
     * @return self
     */
    public function setTagID(?string $tagID): self
    {
        $this->tagID = $tagID;

        return $this;
    }

    /**
     * @return TPAExtensionsValidatingCarrier
     */
    public function getValidatingCarrier(): ?TPAExtensionsValidatingCarrier
    {
        return $this->validatingCarrier;
    }

    /**
     * @param TPAExtensionsValidatingCarrier $validatingCarrier
     *
     * @return self
     */
    public function setValidatingCarrier(?TPAExtensionsValidatingCarrier $validatingCarrier): self
    {
        $this->validatingCarrier = $validatingCarrier;

        return $this;
    }
}
