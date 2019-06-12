<?php

namespace Ammonkc\SabreApi\Model\OrderManagement;

use Ammonkc\SabreApi\AbstractModel;

class OrderChangeRequest extends AbstractModel
{
    /**
     * The unique identifier of an Order within the context of one message.
     *
     * @var string
     */
    protected $id;
    /**
     * @var Action[]
     */
    protected $actions;
    /**
     * Contains the sender of the request.
     *
     * @var Party
     */
    protected $party;

    /**
     * The unique identifier of an Order within the context of one message.
     *
     * @return string
     */
    public function getId(): ?string
    {
        return $this->id;
    }

    /**
     * The unique identifier of an Order within the context of one message.
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
     * @return Action[]
     */
    public function getActions(): ?array
    {
        return $this->actions;
    }

    /**
     * @param Action[] $actions
     *
     * @return self
     */
    public function setActions(?array $actions): self
    {
        $this->actions = $actions;

        return $this;
    }

    /**
     * Contains the sender of the request.
     *
     * @return Party
     */
    public function getParty(): ?Party
    {
        return $this->party;
    }

    /**
     * Contains the sender of the request.
     *
     * @param Party $party
     *
     * @return self
     */
    public function setParty(?Party $party): self
    {
        $this->party = $party;

        return $this;
    }
}
