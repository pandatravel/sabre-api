<?php

namespace Ammonkc\SabreApi\Model\OrderManagement;

use Ammonkc\SabreApi\AbstractModel;

class SelectedOfferItem extends AbstractModel
{
    /**
     * The unique identifier of the selected Offer (either a standard Offer or an a-la-carte Offer) returned in a previous shopping response.
     *
     * @var string
     */
    protected $id;

    /**
     * The unique identifier of the selected Offer (either a standard Offer or an a-la-carte Offer) returned in a previous shopping response.
     *
     * @return string
     */
    public function getId(): ?string
    {
        return $this->id;
    }

    /**
     * The unique identifier of the selected Offer (either a standard Offer or an a-la-carte Offer) returned in a previous shopping response.
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
}
