<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

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
     * @return string|null
     */
    public function getDKNumber(): ?string
    {
        return $this->dKNumber;
    }

    /**
     * DK number.
     *
     * @param string|null $dKNumber
     *
     * @return self
     */
    public function setDKNumber(?string $dKNumber): self
    {
        $this->dKNumber = $dKNumber;

        return $this;
    }
}
