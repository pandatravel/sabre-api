<?php

namespace Ammonkc\SabreApi\Model\OrderManagement;

use Ammonkc\SabreApi\AbstractModel;

class Party extends AbstractModel
{
    /**
     * Contains the Travel Agency sender.
     *
     * @var PartySender
     */
    protected $sender;

    /**
     * Contains the Travel Agency sender.
     *
     * @return PartySender
     */
    public function getSender(): ?PartySender
    {
        return $this->sender;
    }

    /**
     * Contains the Travel Agency sender.
     *
     * @param PartySender $sender
     *
     * @return self
     */
    public function setSender(?PartySender $sender): self
    {
        $this->sender = $sender;

        return $this;
    }
}
