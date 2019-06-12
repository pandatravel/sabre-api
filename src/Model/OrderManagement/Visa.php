<?php

namespace Ammonkc\SabreApi\Model\OrderManagement;

use Ammonkc\SabreApi\AbstractModel;

class Visa extends AbstractModel
{
    /**
     * Visa ID value. Example: NY122345.
     *
     * @var string
     */
    protected $id;
    /**
     * The type of visa. Business, Tourist, Work, etc.
     *
     * @var string
     */
    protected $typeCode;

    /**
     * Visa ID value. Example: NY122345.
     *
     * @return string
     */
    public function getId(): ?string
    {
        return $this->id;
    }

    /**
     * Visa ID value. Example: NY122345.
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
     * The type of visa. Business, Tourist, Work, etc.
     *
     * @return string
     */
    public function getTypeCode(): ?string
    {
        return $this->typeCode;
    }

    /**
     * The type of visa. Business, Tourist, Work, etc.
     *
     * @param string $typeCode
     *
     * @return self
     */
    public function setTypeCode(?string $typeCode): self
    {
        $this->typeCode = $typeCode;

        return $this;
    }
}
