<?php

namespace Ammonkc\SabreApi\Model\BargainFinderMax;

use Ammonkc\SabreApi\AbstractModel;

class OrgOpentravelOta200305StreetNmbrType extends AbstractModel
{
    /**
     * Defines a Post Office Box number.
     *
     * @var string
     */
    protected $pOBox;
    /**
     * @var string
     */
    protected $content;

    /**
     * Defines a Post Office Box number.
     *
     * @return string
     */
    public function getPOBox(): ?string
    {
        return $this->pOBox;
    }

    /**
     * Defines a Post Office Box number.
     *
     * @param string $pOBox
     *
     * @return self
     */
    public function setPOBox(?string $pOBox): self
    {
        $this->pOBox = $pOBox;

        return $this;
    }

    /**
     * @return string
     */
    public function getContent(): ?string
    {
        return $this->content;
    }

    /**
     * @param string $content
     *
     * @return self
     */
    public function setContent(?string $content): self
    {
        $this->content = $content;

        return $this;
    }
}
