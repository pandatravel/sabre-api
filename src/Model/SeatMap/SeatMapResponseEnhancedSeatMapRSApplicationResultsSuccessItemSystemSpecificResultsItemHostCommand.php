<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Ammonkc\SabreApi\Model\SeatMap\Model;

class SeatMapResponseEnhancedSeatMapRSApplicationResultsSuccessItemSystemSpecificResultsItemHostCommand
{
    /**
     * @var string
     */
    protected $content;
    /**
     * @var string
     */
    protected $lNIATA;

    /**
     * @return string
     */
    public function getContent(): ?string
    {
        return $this->content;
    }

    /**
     * @param string $content
     *
     * @return self
     */
    public function setContent(?string $content): self
    {
        $this->content = $content;

        return $this;
    }

    /**
     * @return string
     */
    public function getLNIATA(): ?string
    {
        return $this->lNIATA;
    }

    /**
     * @param string $lNIATA
     *
     * @return self
     */
    public function setLNIATA(?string $lNIATA): self
    {
        $this->lNIATA = $lNIATA;

        return $this;
    }
}
