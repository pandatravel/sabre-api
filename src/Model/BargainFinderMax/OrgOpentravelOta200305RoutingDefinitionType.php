<?php

namespace Ammonkc\SabreApi\Model\BargainFinderMax;

use Ammonkc\SabreApi\AbstractModel;

class OrgOpentravelOta200305RoutingDefinitionType extends AbstractModel
{
    /**
     * If true, wildcards will be automatically inserted between each two leg (RoutingLeg) elements. Will be set to 'false' if not present.
     *
     * @var bool
     */
    protected $addWildcards;
    /**
     * @var OrgOpentravelOta200305RoutingLegType[]
     */
    protected $routingLeg;

    /**
     * If true, wildcards will be automatically inserted between each two leg (RoutingLeg) elements. Will be set to 'false' if not present.
     *
     * @return bool
     */
    public function getAddWildcards(): ?bool
    {
        return $this->addWildcards;
    }

    /**
     * If true, wildcards will be automatically inserted between each two leg (RoutingLeg) elements. Will be set to 'false' if not present.
     *
     * @param bool $addWildcards
     *
     * @return self
     */
    public function setAddWildcards(?bool $addWildcards): self
    {
        $this->addWildcards = $addWildcards;

        return $this;
    }

    /**
     * @return OrgOpentravelOta200305RoutingLegType[]
     */
    public function getRoutingLeg(): ?array
    {
        return $this->routingLeg;
    }

    /**
     * @param OrgOpentravelOta200305RoutingLegType[] $routingLeg
     *
     * @return self
     */
    public function setRoutingLeg(?array $routingLeg): self
    {
        $this->routingLeg = $routingLeg;

        return $this;
    }
}
