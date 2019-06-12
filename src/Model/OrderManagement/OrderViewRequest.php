<?php

namespace Ammonkc\SabreApi\Model\OrderManagement;

use Ammonkc\SabreApi\AbstractModel;

class OrderViewRequest extends AbstractModel
{
    /**
     * Unique identifier of the order or PNR locator.
     *
     * @var string
     */
    protected $id;

    /**
     * Unique identifier of the order or PNR locator.
     *
     * @return string
     */
    public function getId(): ?string
    {
        return $this->id;
    }

    /**
     * Unique identifier of the order or PNR locator.
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
