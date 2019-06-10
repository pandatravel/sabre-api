<?php

namespace Ammonkc\SabreApi\Model\BargainFinderMax;

use Ammonkc\SabreApi\AbstractModel;

class ProcessingMessageType extends AbstractModel
{
    /**
     * @var string
     */
    protected $pricingSource;
    /**
     * @var string
     */
    protected $text;

    /**
     * @return string
     */
    public function getPricingSource(): ?string
    {
        return $this->pricingSource;
    }

    /**
     * @param string $pricingSource
     *
     * @return self
     */
    public function setPricingSource(?string $pricingSource): self
    {
        $this->pricingSource = $pricingSource;

        return $this;
    }

    /**
     * @return string
     */
    public function getText(): ?string
    {
        return $this->text;
    }

    /**
     * @param string $text
     *
     * @return self
     */
    public function setText(?string $text): self
    {
        $this->text = $text;

        return $this;
    }
}
