<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Ammonkc\SabreApi\Model\BargainFinderMax;

use Ammonkc\SabreApi\AbstractModel;

class Offer extends AbstractModel
{
    /**
     * @var string
     */
    protected $offerId;
    /**
     * @var string
     */
    protected $source;
    /**
     * @var int
     */
    protected $ttl;

    /**
     * @return string
     */
    public function getOfferId(): ?string
    {
        return $this->offerId;
    }

    /**
     * @param string $offerId
     *
     * @return self
     */
    public function setOfferId(?string $offerId): self
    {
        $this->offerId = $offerId;

        return $this;
    }

    /**
     * @return string
     */
    public function getSource(): ?string
    {
        return $this->source;
    }

    /**
     * @param string $source
     *
     * @return self
     */
    public function setSource(?string $source): self
    {
        $this->source = $source;

        return $this;
    }

    /**
     * @return int
     */
    public function getTtl(): ?int
    {
        return $this->ttl;
    }

    /**
     * @param int $ttl
     *
     * @return self
     */
    public function setTtl(?int $ttl): self
    {
        $this->ttl = $ttl;

        return $this;
    }
}
