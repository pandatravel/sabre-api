<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Ammonkc\SabreApi\Model\BargainFinderMax;

class OrgOpentravelOta200305PriceRequestInformationTypeTPAExtensionsPriorityElapsedTime
{
    /**
     * @var int
     */
    protected $priority;

    /**
     * @return int
     */
    public function getPriority(): ?int
    {
        return $this->priority;
    }

    /**
     * @param int $priority
     *
     * @return self
     */
    public function setPriority(?int $priority): self
    {
        $this->priority = $priority;

        return $this;
    }
}
