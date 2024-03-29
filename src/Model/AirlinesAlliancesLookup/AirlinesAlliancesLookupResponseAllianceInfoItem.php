<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Ammonkc\SabreApi\Model\AirlinesAlliancesLookup;

use Ammonkc\SabreApi\AbstractModel;

class AirlinesAlliancesLookupResponseAllianceInfoItem extends AbstractModel
{
    /**
     * Returns the specified airline alliance group code(s).
     *
     * @var string
     */
    protected $allianceCode;
    /**
     * The name that corresponds to the specified airline alliance group code(s).
     *
     * @var string
     */
    protected $allianceName;
    /**
     * @var AirlinesAlliancesLookupResponseAllianceInfoItemAirlineInfoItem[]
     */
    protected $airlineInfo;

    /**
     * Returns the specified airline alliance group code(s).
     *
     * @return string
     */
    public function getAllianceCode(): ?string
    {
        return $this->allianceCode;
    }

    /**
     * Returns the specified airline alliance group code(s).
     *
     * @param string $allianceCode
     *
     * @return self
     */
    public function setAllianceCode(?string $allianceCode): self
    {
        $this->allianceCode = $allianceCode;

        return $this;
    }

    /**
     * The name that corresponds to the specified airline alliance group code(s).
     *
     * @return string
     */
    public function getAllianceName(): ?string
    {
        return $this->allianceName;
    }

    /**
     * The name that corresponds to the specified airline alliance group code(s).
     *
     * @param string $allianceName
     *
     * @return self
     */
    public function setAllianceName(?string $allianceName): self
    {
        $this->allianceName = $allianceName;

        return $this;
    }

    /**
     * @return AirlinesAlliancesLookupResponseAllianceInfoItemAirlineInfoItem[]
     */
    public function getAirlineInfo(): ?array
    {
        return $this->airlineInfo;
    }

    /**
     * @param AirlinesAlliancesLookupResponseAllianceInfoItemAirlineInfoItem[] $airlineInfo
     *
     * @return self
     */
    public function setAirlineInfo(?array $airlineInfo): self
    {
        $this->airlineInfo = $airlineInfo;

        return $this;
    }
}
