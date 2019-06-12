<?php

namespace Ammonkc\SabreApi\Model\OrderManagement;

use Ammonkc\SabreApi\AbstractModel;

class CreateOrder extends AbstractModel
{
    /**
     * The unique identifier of the selected Offer (either a standard Offer or an a-la-carte Offer) returned in a previous shopping response.
     *
     * @var string
     */
    protected $offerId;
    /**
     * The `offerItem` selected by the passenger for inclusion in the requested Order. Repeats (once per passenger) if different passengers want to select different service options, different quantities of a-la-carte items, or different seat locations.
     *
     * @var SelectedOfferItem[]
     */
    protected $selectedOfferItems;

    /**
     * The unique identifier of the selected Offer (either a standard Offer or an a-la-carte Offer) returned in a previous shopping response.
     *
     * @return string
     */
    public function getOfferId(): ?string
    {
        return $this->offerId;
    }

    /**
     * The unique identifier of the selected Offer (either a standard Offer or an a-la-carte Offer) returned in a previous shopping response.
     *
     * @param string $offerId
     *
     * @return self
     */
    public function setOfferId(?string $offerId): self
    {
        $this->offerId = $offerId;

        return $this;
    }

    /**
     * The `offerItem` selected by the passenger for inclusion in the requested Order. Repeats (once per passenger) if different passengers want to select different service options, different quantities of a-la-carte items, or different seat locations.
     *
     * @return SelectedOfferItem[]
     */
    public function getSelectedOfferItems(): ?array
    {
        return $this->selectedOfferItems;
    }

    /**
     * The `offerItem` selected by the passenger for inclusion in the requested Order. Repeats (once per passenger) if different passengers want to select different service options, different quantities of a-la-carte items, or different seat locations.
     *
     * @param SelectedOfferItem[] $selectedOfferItems
     *
     * @return self
     */
    public function setSelectedOfferItems(?array $selectedOfferItems): self
    {
        $this->selectedOfferItems = $selectedOfferItems;

        return $this;
    }
}
