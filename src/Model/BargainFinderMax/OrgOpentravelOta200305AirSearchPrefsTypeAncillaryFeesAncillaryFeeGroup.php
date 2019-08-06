<?php

namespace Ammonkc\SabreApi\Model\BargainFinderMax;

use Ammonkc\SabreApi\AbstractModel;

class OrgOpentravelOta200305AirSearchPrefsTypeAncillaryFeesAncillaryFeeGroup extends AbstractModel
{
    /**
     * Group code.
     *
     * @var string
     */
    protected $code;
    /**
     * Number of items.
     *
     * @var string
     */
    protected $count;

    /**
     * Group code.
     *
     * @return string
     */
    public function getCode(): string
    {
        return $this->code;
    }

    /**
     * Group code.
     *
     * @param string $code
     *
     * @return self
     */
    public function setCode(string $code): self
    {
        $this->code = $code;

        return $this;
    }

    /**
     * Number of items.
     *
     * @return string
     */
    public function getCount(): string
    {
        return $this->count;
    }

    /**
     * Number of items.
     *
     * @param string $count
     *
     * @return self
     */
    public function setCount(string $count): self
    {
        $this->count = $count;

        return $this;
    }
}
