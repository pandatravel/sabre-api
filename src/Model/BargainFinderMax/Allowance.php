<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Ammonkc\SabreApi\Model\BargainFinderMax;

use Ammonkc\SabreApi\AbstractModel;

class Allowance extends AbstractModel
{
    /**
     * @var int
     */
    protected $ref;

    /**
     * @return int
     */
    public function getRef(): ?int
    {
        return $this->ref;
    }

    /**
     * @param int $ref
     *
     * @return self
     */
    public function setRef(?int $ref): self
    {
        $this->ref = $ref;

        return $this;
    }
}
