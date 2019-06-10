<?php

namespace Ammonkc\SabreApi\Model\BargainFinderMax;

use Ammonkc\SabreApi\AbstractModel;

class OrgOpentravelOta200305OTAAirLowFareSearchRQTPAExtensionsReservationData extends AbstractModel
{
    /**
     * DK number.
     *
     * @var string
     */
    protected $dKNumber;

    /**
     * DK number.
     *
     * @return string
     */
    public function getDKNumber(): ?string
    {
        return $this->dKNumber;
    }

    /**
     * DK number.
     *
     * @param string $dKNumber
     *
     * @return self
     */
    public function setDKNumber(?string $dKNumber): self
    {
        $this->dKNumber = $dKNumber;

        return $this;
    }
}
