<?php

namespace Ammonkc\SabreApi\Model\OrderManagement;

use Ammonkc\SabreApi\AbstractModel;

class PriceClass extends AbstractModel
{
    /**
     * The unique identifier of the price class.
     *
     * @var string
     */
    protected $id;
    /**
     * The ID of the price class.
     *
     * @var string
     */
    protected $code;
    /**
     * The marketing name of the price class.
     *
     * @var string
     */
    protected $name;

    /**
     * The unique identifier of the price class.
     *
     * @return string
     */
    public function getId(): ?string
    {
        return $this->id;
    }

    /**
     * The unique identifier of the price class.
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
     * The ID of the price class.
     *
     * @return string
     */
    public function getCode(): ?string
    {
        return $this->code;
    }

    /**
     * The ID of the price class.
     *
     * @param string $code
     *
     * @return self
     */
    public function setCode(?string $code): self
    {
        $this->code = $code;

        return $this;
    }

    /**
     * The marketing name of the price class.
     *
     * @return string
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * The marketing name of the price class.
     *
     * @param string $name
     *
     * @return self
     */
    public function setName(?string $name): self
    {
        $this->name = $name;

        return $this;
    }
}
