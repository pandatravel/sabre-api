<?php

namespace Ammonkc\SabreApi\Model\BargainFinderMax;

use Ammonkc\SabreApi\AbstractModel;

class OrgOpentravelOta200305TransactionTypeTravelerPersona extends AbstractModel
{
    /**
     * Traveler persona name.,A target available for user, that can be used to create specific rules. For example, if the client wants to target preferred customer request, we can use this element to achieve this.
     *
     * @var string
     */
    protected $name;

    /**
     * Traveler persona name.,A target available for user, that can be used to create specific rules. For example, if the client wants to target preferred customer request, we can use this element to achieve this.
     *
     * @return string
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * Traveler persona name.,A target available for user, that can be used to create specific rules. For example, if the client wants to target preferred customer request, we can use this element to achieve this.
     *
     * @param string $name
     *
     * @return self
     */
    public function setName(?string $name): self
    {
        $this->name = $name;

        return $this;
    }
}
