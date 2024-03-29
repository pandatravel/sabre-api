<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Ammonkc\SabreApi\Model\BargainFinderMax;

use Ammonkc\SabreApi\AbstractModel;

class OrgOpentravelOta200305DiversityControlTypeDimensionsOperatingDuplicate extends AbstractModel
{
    /**
     * @var OrgOpentravelOta200305DiversityControlTypeDimensionsOperatingDuplicatePreferredCarrier[]
     */
    protected $preferredCarrier;
    /**
     * @var float
     */
    protected $weight;

    /**
     * @return OrgOpentravelOta200305DiversityControlTypeDimensionsOperatingDuplicatePreferredCarrier[]|null
     */
    public function getPreferredCarrier(): ?array
    {
        return $this->preferredCarrier;
    }

    /**
     * @param OrgOpentravelOta200305DiversityControlTypeDimensionsOperatingDuplicatePreferredCarrier[]|null $preferredCarrier
     *
     * @return self
     */
    public function setPreferredCarrier(?array $preferredCarrier): self
    {
        $this->preferredCarrier = $preferredCarrier;

        return $this;
    }

    /**
     * @return float|null
     */
    public function getWeight(): ?float
    {
        return $this->weight;
    }

    /**
     * @param float|null $weight
     *
     * @return self
     */
    public function setWeight(?float $weight): self
    {
        $this->weight = $weight;

        return $this;
    }
}
