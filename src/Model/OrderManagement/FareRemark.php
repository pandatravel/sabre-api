<?php

namespace Ammonkc\SabreApi\Model\OrderManagement;

use Ammonkc\SabreApi\AbstractModel;

class FareRemark extends AbstractModel
{
    /**
     * Identifies the remark type.
     *
     * @var string
     */
    protected $type;
    /**
     * If true, displays the remark to the passenger.
     *
     * @var bool
     */
    protected $displayInd;

    /**
     * Identifies the remark type.
     *
     * @return string
     */
    public function getType(): ?string
    {
        return $this->type;
    }

    /**
     * Identifies the remark type.
     *
     * @param string $type
     *
     * @return self
     */
    public function setType(?string $type): self
    {
        $this->type = $type;

        return $this;
    }

    /**
     * If true, displays the remark to the passenger.
     *
     * @return bool
     */
    public function getDisplayInd(): ?bool
    {
        return $this->displayInd;
    }

    /**
     * If true, displays the remark to the passenger.
     *
     * @param bool $displayInd
     *
     * @return self
     */
    public function setDisplayInd(?bool $displayInd): self
    {
        $this->displayInd = $displayInd;

        return $this;
    }
}
