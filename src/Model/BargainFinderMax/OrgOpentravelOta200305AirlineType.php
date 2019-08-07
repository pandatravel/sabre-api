<?php

namespace Ammonkc\SabreApi\Model\BargainFinderMax;

use Ammonkc\SabreApi\AbstractModel;

class OrgOpentravelOta200305AirlineType extends AbstractModel
{
    /**
     * Marketing airline code.
     *
     * @var string
     */
    protected $marketing;
    /**
     * Operating airline code.
     *
     * @var string
     */
    protected $operating;

    /**
     * Marketing airline code.
     *
     * @return string
     */
    public function getMarketing(): ?string
    {
        return $this->marketing;
    }

    /**
     * Marketing airline code.
     *
     * @param string $marketing
     *
     * @return self
     */
    public function setMarketing(?string $marketing): self
    {
        $this->marketing = $marketing;

        return $this;
    }

    /**
     * Operating airline code.
     *
     * @return string
     */
    public function getOperating(): ?string
    {
        return $this->operating;
    }

    /**
     * Operating airline code.
     *
     * @param string $operating
     *
     * @return self
     */
    public function setOperating(?string $operating): self
    {
        $this->operating = $operating;

        return $this;
    }
}
