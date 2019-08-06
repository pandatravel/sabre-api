<?php

namespace Ammonkc\SabreApi\Model\BargainFinderMax;

use Ammonkc\SabreApi\AbstractModel;

class OrgOpentravelOta200305AirSearchPrefsTypeTPAExtensionsSellingLevels extends AbstractModel
{
    /**
     * @var OrgOpentravelOta200305AirSearchPrefsTypeTPAExtensionsSellingLevelsSellingLevelRules
     */
    protected $sellingLevelRules;
    /**
     * @var OrgOpentravelOta200305AirSearchPrefsTypeTPAExtensionsSellingLevelsShowFareAmounts
     */
    protected $showFareAmounts;

    /**
     * @return OrgOpentravelOta200305AirSearchPrefsTypeTPAExtensionsSellingLevelsSellingLevelRules
     */
    public function getSellingLevelRules(): OrgOpentravelOta200305AirSearchPrefsTypeTPAExtensionsSellingLevelsSellingLevelRules
    {
        return $this->sellingLevelRules;
    }

    /**
     * @param OrgOpentravelOta200305AirSearchPrefsTypeTPAExtensionsSellingLevelsSellingLevelRules $sellingLevelRules
     *
     * @return self
     */
    public function setSellingLevelRules(OrgOpentravelOta200305AirSearchPrefsTypeTPAExtensionsSellingLevelsSellingLevelRules $sellingLevelRules): self
    {
        $this->sellingLevelRules = $sellingLevelRules;

        return $this;
    }

    /**
     * @return OrgOpentravelOta200305AirSearchPrefsTypeTPAExtensionsSellingLevelsShowFareAmounts
     */
    public function getShowFareAmounts(): OrgOpentravelOta200305AirSearchPrefsTypeTPAExtensionsSellingLevelsShowFareAmounts
    {
        return $this->showFareAmounts;
    }

    /**
     * @param OrgOpentravelOta200305AirSearchPrefsTypeTPAExtensionsSellingLevelsShowFareAmounts $showFareAmounts
     *
     * @return self
     */
    public function setShowFareAmounts(OrgOpentravelOta200305AirSearchPrefsTypeTPAExtensionsSellingLevelsShowFareAmounts $showFareAmounts): self
    {
        $this->showFareAmounts = $showFareAmounts;

        return $this;
    }
}
