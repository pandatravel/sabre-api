<?php

namespace Ammonkc\SabreApi\Model\OrderManagement;

use Ammonkc\SabreApi\AbstractModel;

class OrderCancelRequest extends AbstractModel
{
    /**
     * The unique identifier of the Order.
     *
     * @var string
     */
    protected $id;

    /**
     * The unique identifier of the Order.
     *
     * @return string
     */
    public function getId(): ?string
    {
        return $this->id;
    }

    /**
     * The unique identifier of the Order.
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
