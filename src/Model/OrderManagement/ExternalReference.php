<?php

namespace Ammonkc\SabreApi\Model\OrderManagement;

use Ammonkc\SabreApi\AbstractModel;

class ExternalReference extends AbstractModel
{
    /**
     * Unique reference id received from external service provider.
     *
     * @var string
     */
    protected $id;
    /**
     * External service provider.
     *
     * @var string
     */
    protected $system;

    /**
     * Unique reference id received from external service provider.
     *
     * @return string
     */
    public function getId(): ?string
    {
        return $this->id;
    }

    /**
     * Unique reference id received from external service provider.
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
     * External service provider.
     *
     * @return string
     */
    public function getSystem(): ?string
    {
        return $this->system;
    }

    /**
     * External service provider.
     *
     * @param string $system
     *
     * @return self
     */
    public function setSystem(?string $system): self
    {
        $this->system = $system;

        return $this;
    }
}
