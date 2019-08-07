<?php

namespace Ammonkc\SabreApi\Model\BargainFinderMax;

use Ammonkc\SabreApi\AbstractModel;

class OrgOpentravelOta200305AirSearchPrefsTypeAncillaryFees extends AbstractModel
{
    /**
     * @var OrgOpentravelOta200305AirSearchPrefsTypeAncillaryFeesAncillaryFeeGroup[]
     */
    protected $ancillaryFeeGroup;
    /**
     * Enable Ancillary Fees processing path.
     *
     * @var bool
     */
    protected $enable;
    /**
     * Flag whether this is a summary request.
     *
     * @var bool
     */
    protected $summary;

    /**
     * @return OrgOpentravelOta200305AirSearchPrefsTypeAncillaryFeesAncillaryFeeGroup[]
     */
    public function getAncillaryFeeGroup(): ?array
    {
        return $this->ancillaryFeeGroup;
    }

    /**
     * @param OrgOpentravelOta200305AirSearchPrefsTypeAncillaryFeesAncillaryFeeGroup[] $ancillaryFeeGroup
     *
     * @return self
     */
    public function setAncillaryFeeGroup(?array $ancillaryFeeGroup): self
    {
        $this->ancillaryFeeGroup = $ancillaryFeeGroup;

        return $this;
    }

    /**
     * Enable Ancillary Fees processing path.
     *
     * @return bool
     */
    public function getEnable(): ?bool
    {
        return $this->enable;
    }

    /**
     * Enable Ancillary Fees processing path.
     *
     * @param bool $enable
     *
     * @return self
     */
    public function setEnable(?bool $enable): self
    {
        $this->enable = $enable;

        return $this;
    }

    /**
     * Flag whether this is a summary request.
     *
     * @return bool
     */
    public function getSummary(): ?bool
    {
        return $this->summary;
    }

    /**
     * Flag whether this is a summary request.
     *
     * @param bool $summary
     *
     * @return self
     */
    public function setSummary(?bool $summary): self
    {
        $this->summary = $summary;

        return $this;
    }
}
