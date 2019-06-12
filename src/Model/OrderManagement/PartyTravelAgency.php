<?php

namespace Ammonkc\SabreApi\Model\OrderManagement;

use Ammonkc\SabreApi\AbstractModel;

class PartyTravelAgency extends AbstractModel
{
    /**
     * The Travel Agency's assigned IATA number.
     *
     * @var string
     */
    protected $iataNumber;
    /**
     * The travel agency's pseudo city code (PCC).
     *
     * @var string
     */
    protected $pseudoCityCode;
    /**
     * The unique identifier of the Travel Agency Seller.
     *
     * @var string
     */
    protected $agencyId;
    /**
     * The Travel Agency Seller's name.
     *
     * @var string
     */
    protected $name;

    /**
     * The Travel Agency's assigned IATA number.
     *
     * @return string
     */
    public function getIataNumber(): ?string
    {
        return $this->iataNumber;
    }

    /**
     * The Travel Agency's assigned IATA number.
     *
     * @param string $iataNumber
     *
     * @return self
     */
    public function setIataNumber(?string $iataNumber): self
    {
        $this->iataNumber = $iataNumber;

        return $this;
    }

    /**
     * The travel agency's pseudo city code (PCC).
     *
     * @return string
     */
    public function getPseudoCityCode(): ?string
    {
        return $this->pseudoCityCode;
    }

    /**
     * The travel agency's pseudo city code (PCC).
     *
     * @param string $pseudoCityCode
     *
     * @return self
     */
    public function setPseudoCityCode(?string $pseudoCityCode): self
    {
        $this->pseudoCityCode = $pseudoCityCode;

        return $this;
    }

    /**
     * The unique identifier of the Travel Agency Seller.
     *
     * @return string
     */
    public function getAgencyId(): ?string
    {
        return $this->agencyId;
    }

    /**
     * The unique identifier of the Travel Agency Seller.
     *
     * @param string $agencyId
     *
     * @return self
     */
    public function setAgencyId(?string $agencyId): self
    {
        $this->agencyId = $agencyId;

        return $this;
    }

    /**
     * The Travel Agency Seller's name.
     *
     * @return string
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * The Travel Agency Seller's name.
     *
     * @param string $name
     *
     * @return self
     */
    public function setName(?string $name): self
    {
        $this->name = $name;

        return $this;
    }
}
