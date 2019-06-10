<?php

namespace Ammonkc\SabreApi\Model\BargainFinderMax;

use Ammonkc\SabreApi\AbstractModel;

class PlusUpInformationType extends AbstractModel
{
    /**
     * @var float
     */
    protected $amount;
    /**
     * @var string
     */
    protected $countryOfPayment;
    /**
     * @var string
     */
    protected $destination;
    /**
     * @var string
     */
    protected $fareDestination;
    /**
     * @var string
     */
    protected $fareOrigin;
    /**
     * @var string
     */
    protected $message;
    /**
     * @var string
     */
    protected $origin;
    /**
     * @var string
     */
    protected $viaCity;

    /**
     * @return float
     */
    public function getAmount(): ?float
    {
        return $this->amount;
    }

    /**
     * @param float $amount
     *
     * @return self
     */
    public function setAmount(?float $amount): self
    {
        $this->amount = $amount;

        return $this;
    }

    /**
     * @return string
     */
    public function getCountryOfPayment(): ?string
    {
        return $this->countryOfPayment;
    }

    /**
     * @param string $countryOfPayment
     *
     * @return self
     */
    public function setCountryOfPayment(?string $countryOfPayment): self
    {
        $this->countryOfPayment = $countryOfPayment;

        return $this;
    }

    /**
     * @return string
     */
    public function getDestination(): ?string
    {
        return $this->destination;
    }

    /**
     * @param string $destination
     *
     * @return self
     */
    public function setDestination(?string $destination): self
    {
        $this->destination = $destination;

        return $this;
    }

    /**
     * @return string
     */
    public function getFareDestination(): ?string
    {
        return $this->fareDestination;
    }

    /**
     * @param string $fareDestination
     *
     * @return self
     */
    public function setFareDestination(?string $fareDestination): self
    {
        $this->fareDestination = $fareDestination;

        return $this;
    }

    /**
     * @return string
     */
    public function getFareOrigin(): ?string
    {
        return $this->fareOrigin;
    }

    /**
     * @param string $fareOrigin
     *
     * @return self
     */
    public function setFareOrigin(?string $fareOrigin): self
    {
        $this->fareOrigin = $fareOrigin;

        return $this;
    }

    /**
     * @return string
     */
    public function getMessage(): ?string
    {
        return $this->message;
    }

    /**
     * @param string $message
     *
     * @return self
     */
    public function setMessage(?string $message): self
    {
        $this->message = $message;

        return $this;
    }

    /**
     * @return string
     */
    public function getOrigin(): ?string
    {
        return $this->origin;
    }

    /**
     * @param string $origin
     *
     * @return self
     */
    public function setOrigin(?string $origin): self
    {
        $this->origin = $origin;

        return $this;
    }

    /**
     * @return string
     */
    public function getViaCity(): ?string
    {
        return $this->viaCity;
    }

    /**
     * @param string $viaCity
     *
     * @return self
     */
    public function setViaCity(?string $viaCity): self
    {
        $this->viaCity = $viaCity;

        return $this;
    }
}
