<?php

namespace Ammonkc\SabreApi\Model\OrderManagement;

use Ammonkc\SabreApi\AbstractModel;

class EmailAddress extends AbstractModel
{
    /**
     * Used to differentiate multiple email addresses for one contact.
     *
     * @var string
     */
    protected $label;
    /**
     * The contact email address.
     *
     * @var string
     */
    protected $address;

    /**
     * Used to differentiate multiple email addresses for one contact.
     *
     * @return string
     */
    public function getLabel(): ?string
    {
        return $this->label;
    }

    /**
     * Used to differentiate multiple email addresses for one contact.
     *
     * @param string $label
     *
     * @return self
     */
    public function setLabel(?string $label): self
    {
        $this->label = $label;

        return $this;
    }

    /**
     * The contact email address.
     *
     * @return string
     */
    public function getAddress(): ?string
    {
        return $this->address;
    }

    /**
     * The contact email address.
     *
     * @param string $address
     *
     * @return self
     */
    public function setAddress(?string $address): self
    {
        $this->address = $address;

        return $this;
    }
}
