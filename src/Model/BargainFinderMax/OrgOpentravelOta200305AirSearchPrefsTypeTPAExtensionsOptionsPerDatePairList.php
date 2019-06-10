<?php

namespace Ammonkc\SabreApi\Model\BargainFinderMax;

use Ammonkc\SabreApi\AbstractModel;

class OrgOpentravelOta200305AirSearchPrefsTypeTPAExtensionsOptionsPerDatePairList extends AbstractModel
{
    /**
     * @var OrgOpentravelOta200305OptionsPerDatePairType[]
     */
    protected $optionsPerDatePair;

    /**
     * @return OrgOpentravelOta200305OptionsPerDatePairType[]
     */
    public function getOptionsPerDatePair(): ?array
    {
        return $this->optionsPerDatePair;
    }

    /**
     * @param OrgOpentravelOta200305OptionsPerDatePairType[] $optionsPerDatePair
     *
     * @return self
     */
    public function setOptionsPerDatePair(?array $optionsPerDatePair): self
    {
        $this->optionsPerDatePair = $optionsPerDatePair;

        return $this;
    }
}
