<?php

namespace Ammonkc\SabreApi\Model\BargainFinderMax;

use Ammonkc\SabreApi\AbstractModel;

class OrgOpentravelOta200305PlusUpType extends AbstractModel
{
    /**
     * Amount.
     *
     * @var float
     */
    protected $amount;
    /**
     * Country of payment.
     *
     * @var string
     */
    protected $countryOfPayment;
    /**
     * Destination City.
     *
     * @var string
     */
    protected $destinationCity;
    /**
     * Fare Destination City.
     *
     * @var string
     */
    protected $fareDestinationCity;
    /**
     * Fare Origin City.
     *
     * @var string
     */
    protected $fareOriginCity;
    /**
     * Message.
     *
     * @var string
     */
    protected $message;
    /**
     * Origin City.
     *
     * @var string
     */
    protected $originCity;
    /**
     * Via City.
     *
     * @var string
     */
    protected $viaCity;

    /**
     * Amount.
     *
     * @return float
     */
    public function getAmount(): ?float
    {
        return $this->amount;
    }

    /**
     * Amount.
     *
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
     * Country of payment.
     *
     * @return string
     */
    public function getCountryOfPayment(): ?string
    {
        return $this->countryOfPayment;
    }

    /**
     * Country of payment.
     *
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
     * Destination City.
     *
     * @return string
     */
    public function getDestinationCity(): ?string
    {
        return $this->destinationCity;
    }

    /**
     * Destination City.
     *
     * @param string $destinationCity
     *
     * @return self
     */
    public function setDestinationCity(?string $destinationCity): self
    {
        $this->destinationCity = $destinationCity;

        return $this;
    }

    /**
     * Fare Destination City.
     *
     * @return string
     */
    public function getFareDestinationCity(): ?string
    {
        return $this->fareDestinationCity;
    }

    /**
     * Fare Destination City.
     *
     * @param string $fareDestinationCity
     *
     * @return self
     */
    public function setFareDestinationCity(?string $fareDestinationCity): self
    {
        $this->fareDestinationCity = $fareDestinationCity;

        return $this;
    }

    /**
     * Fare Origin City.
     *
     * @return string
     */
    public function getFareOriginCity(): ?string
    {
        return $this->fareOriginCity;
    }

    /**
     * Fare Origin City.
     *
     * @param string $fareOriginCity
     *
     * @return self
     */
    public function setFareOriginCity(?string $fareOriginCity): self
    {
        $this->fareOriginCity = $fareOriginCity;

        return $this;
    }

    /**
     * Message.
     *
     * @return string
     */
    public function getMessage(): ?string
    {
        return $this->message;
    }

    /**
     * Message.
     *
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
     * Origin City.
     *
     * @return string
     */
    public function getOriginCity(): ?string
    {
        return $this->originCity;
    }

    /**
     * Origin City.
     *
     * @param string $originCity
     *
     * @return self
     */
    public function setOriginCity(?string $originCity): self
    {
        $this->originCity = $originCity;

        return $this;
    }

    /**
     * Via City.
     *
     * @return string
     */
    public function getViaCity(): ?string
    {
        return $this->viaCity;
    }

    /**
     * Via City.
     *
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
