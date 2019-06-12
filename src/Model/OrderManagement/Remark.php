<?php

namespace Ammonkc\SabreApi\Model\OrderManagement;

use Ammonkc\SabreApi\AbstractModel;

class Remark extends AbstractModel
{
    /**
     * The unique identifier of the remark.
     *
     * @var string
     */
    protected $id;
    /**
     * Free text describing the remark.
     *
     * @var string
     */
    protected $text;

    /**
     * The unique identifier of the remark.
     *
     * @return string
     */
    public function getId(): ?string
    {
        return $this->id;
    }

    /**
     * The unique identifier of the remark.
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
     * Free text describing the remark.
     *
     * @return string
     */
    public function getText(): ?string
    {
        return $this->text;
    }

    /**
     * Free text describing the remark.
     *
     * @param string $text
     *
     * @return self
     */
    public function setText(?string $text): self
    {
        $this->text = $text;

        return $this;
    }
}
