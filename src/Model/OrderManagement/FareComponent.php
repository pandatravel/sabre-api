<?php

namespace Ammonkc\SabreApi\Model\OrderManagement;

use Ammonkc\SabreApi\AbstractModel;

class FareComponent extends AbstractModel
{
    /**
     * The alpha-numeric code used by airlines to identify a fare type, which specific rules are applied to.
     *
     * @var string
     */
    protected $fareBasisCode;
    /**
     * Origin + Destination + Carrier code.
     *
     * @var string
     */
    protected $fareBasisCityPair;
    /**
     * The cabin code.
     *
     * @var string
     */
    protected $cabinTypeCode;
    /**
     * Indicates if the fare is one way, round trip, or none. Can be O-one way, R-round trip, X-none.".
     *
     * @var string
     */
    protected $type;
    /**
     * The fare type can be P-published, or N-negotiated.
     *
     * @var string
     */
    protected $fareType;
    /**
     * Contains the amount of money expected, required, or given in payment.
     *
     * @var Price
     */
    protected $price;
    /**
     * The code belonging to the account used to select the fare.
     *
     * @var string
     */
    protected $accountCode;

    /**
     * The alpha-numeric code used by airlines to identify a fare type, which specific rules are applied to.
     *
     * @return string
     */
    public function getFareBasisCode(): ?string
    {
        return $this->fareBasisCode;
    }

    /**
     * The alpha-numeric code used by airlines to identify a fare type, which specific rules are applied to.
     *
     * @param string $fareBasisCode
     *
     * @return self
     */
    public function setFareBasisCode(?string $fareBasisCode): self
    {
        $this->fareBasisCode = $fareBasisCode;

        return $this;
    }

    /**
     * Origin + Destination + Carrier code.
     *
     * @return string
     */
    public function getFareBasisCityPair(): ?string
    {
        return $this->fareBasisCityPair;
    }

    /**
     * Origin + Destination + Carrier code.
     *
     * @param string $fareBasisCityPair
     *
     * @return self
     */
    public function setFareBasisCityPair(?string $fareBasisCityPair): self
    {
        $this->fareBasisCityPair = $fareBasisCityPair;

        return $this;
    }

    /**
     * The cabin code.
     *
     * @return string
     */
    public function getCabinTypeCode(): ?string
    {
        return $this->cabinTypeCode;
    }

    /**
     * The cabin code.
     *
     * @param string $cabinTypeCode
     *
     * @return self
     */
    public function setCabinTypeCode(?string $cabinTypeCode): self
    {
        $this->cabinTypeCode = $cabinTypeCode;

        return $this;
    }

    /**
     * Indicates if the fare is one way, round trip, or none. Can be O-one way, R-round trip, X-none.".
     *
     * @return string
     */
    public function getType(): ?string
    {
        return $this->type;
    }

    /**
     * Indicates if the fare is one way, round trip, or none. Can be O-one way, R-round trip, X-none.".
     *
     * @param string $type
     *
     * @return self
     */
    public function setType(?string $type): self
    {
        $this->type = $type;

        return $this;
    }

    /**
     * The fare type can be P-published, or N-negotiated.
     *
     * @return string
     */
    public function getFareType(): ?string
    {
        return $this->fareType;
    }

    /**
     * The fare type can be P-published, or N-negotiated.
     *
     * @param string $fareType
     *
     * @return self
     */
    public function setFareType(?string $fareType): self
    {
        $this->fareType = $fareType;

        return $this;
    }

    /**
     * Contains the amount of money expected, required, or given in payment.
     *
     * @return Price
     */
    public function getPrice(): ?Price
    {
        return $this->price;
    }

    /**
     * Contains the amount of money expected, required, or given in payment.
     *
     * @param Price $price
     *
     * @return self
     */
    public function setPrice(?Price $price): self
    {
        $this->price = $price;

        return $this;
    }

    /**
     * The code belonging to the account used to select the fare.
     *
     * @return string
     */
    public function getAccountCode(): ?string
    {
        return $this->accountCode;
    }

    /**
     * The code belonging to the account used to select the fare.
     *
     * @param string $accountCode
     *
     * @return self
     */
    public function setAccountCode(?string $accountCode): self
    {
        $this->accountCode = $accountCode;

        return $this;
    }
}
