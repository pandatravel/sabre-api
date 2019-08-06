<?php

namespace Ammonkc\SabreApi\Model\BargainFinderMax;

use Ammonkc\SabreApi\AbstractModel;

class ScheduleMessageType extends AbstractModel
{
    /**
     * @var string
     */
    protected $destination;
    /**
     * @var string
     */
    protected $origin;
    /**
     * @var string
     */
    protected $pricingSource;
    /**
     * @var string
     */
    protected $text;
    /**
     * @var string
     */
    protected $type;

    /**
     * @return string
     */
    public function getDestination(): string
    {
        return $this->destination;
    }

    /**
     * @param string $destination
     *
     * @return self
     */
    public function setDestination(string $destination): self
    {
        $this->destination = $destination;

        return $this;
    }

    /**
     * @return string
     */
    public function getOrigin(): string
    {
        return $this->origin;
    }

    /**
     * @param string $origin
     *
     * @return self
     */
    public function setOrigin(string $origin): self
    {
        $this->origin = $origin;

        return $this;
    }

    /**
     * @return string
     */
    public function getPricingSource(): string
    {
        return $this->pricingSource;
    }

    /**
     * @param string $pricingSource
     *
     * @return self
     */
    public function setPricingSource(string $pricingSource): self
    {
        $this->pricingSource = $pricingSource;

        return $this;
    }

    /**
     * @return string
     */
    public function getText(): string
    {
        return $this->text;
    }

    /**
     * @param string $text
     *
     * @return self
     */
    public function setText(string $text): self
    {
        $this->text = $text;

        return $this;
    }

    /**
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }

    /**
     * @param string $type
     *
     * @return self
     */
    public function setType(string $type): self
    {
        $this->type = $type;

        return $this;
    }
}
