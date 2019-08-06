<?php

namespace Ammonkc\SabreApi\Model\BargainFinderMax;

use Ammonkc\SabreApi\AbstractModel;

class OrgOpentravelOta200305PriceRequestInformationTypeTPAExtensionsPriorityConnectionTime extends AbstractModel
{
    /**
     * @var int
     */
    protected $leg;
    /**
     * @var int
     */
    protected $priority;

    /**
     * @return int
     */
    public function getLeg(): int
    {
        return $this->leg;
    }

    /**
     * @param int $leg
     *
     * @return self
     */
    public function setLeg(int $leg): self
    {
        $this->leg = $leg;

        return $this;
    }

    /**
     * @return int
     */
    public function getPriority(): int
    {
        return $this->priority;
    }

    /**
     * @param int $priority
     *
     * @return self
     */
    public function setPriority(int $priority): self
    {
        $this->priority = $priority;

        return $this;
    }
}
