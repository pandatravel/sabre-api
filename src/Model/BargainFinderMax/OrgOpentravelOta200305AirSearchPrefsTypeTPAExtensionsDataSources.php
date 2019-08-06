<?php

namespace Ammonkc\SabreApi\Model\BargainFinderMax;

use Ammonkc\SabreApi\AbstractModel;

class OrgOpentravelOta200305AirSearchPrefsTypeTPAExtensionsDataSources extends AbstractModel
{
    /**
     * Toggle processing of ATPCO data source.
     *
     * @var string
     */
    protected $aTPCO;
    /**
     * Toggle processing of Low Cost Carriers data source.
     *
     * @var string
     */
    protected $lCC;
    /**
     * Toggle processing of New Distribution Capability data source.
     *
     * @var string
     */
    protected $nDC;

    /**
     * Toggle processing of ATPCO data source.
     *
     * @return string
     */
    public function getATPCO(): string
    {
        return $this->aTPCO;
    }

    /**
     * Toggle processing of ATPCO data source.
     *
     * @param string $aTPCO
     *
     * @return self
     */
    public function setATPCO(string $aTPCO): self
    {
        $this->aTPCO = $aTPCO;

        return $this;
    }

    /**
     * Toggle processing of Low Cost Carriers data source.
     *
     * @return string
     */
    public function getLCC(): string
    {
        return $this->lCC;
    }

    /**
     * Toggle processing of Low Cost Carriers data source.
     *
     * @param string $lCC
     *
     * @return self
     */
    public function setLCC(string $lCC): self
    {
        $this->lCC = $lCC;

        return $this;
    }

    /**
     * Toggle processing of New Distribution Capability data source.
     *
     * @return string
     */
    public function getNDC(): string
    {
        return $this->nDC;
    }

    /**
     * Toggle processing of New Distribution Capability data source.
     *
     * @param string $nDC
     *
     * @return self
     */
    public function setNDC(string $nDC): self
    {
        $this->nDC = $nDC;

        return $this;
    }
}
