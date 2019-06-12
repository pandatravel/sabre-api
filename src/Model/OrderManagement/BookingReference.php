<?php

namespace Ammonkc\SabreApi\Model\OrderManagement;

use Ammonkc\SabreApi\AbstractModel;

class BookingReference extends AbstractModel
{
    /**
     * The existing booking reference Identifier.
     *
     * @var string
     */
    protected $id;
    /**
     * The booking reference type. Follows the [IATA PADIS](https://www.iata.org/whatwedo/workgroups/Pages/padis.aspx) Codeset encoding scheme.
     *
     * @var string
     */
    protected $typeCode;
    /**
     * The code of the carrier issuing the ticket and all carriers responsible for the passenger and baggage.
     *
     * @var string
     */
    protected $carrierCode;
    /**
     * The date when the booking was created (local to the system).
     *
     * @var string
     */
    protected $createDate;

    /**
     * The existing booking reference Identifier.
     *
     * @return string
     */
    public function getId(): ?string
    {
        return $this->id;
    }

    /**
     * The existing booking reference Identifier.
     *
     * @param string $id
     *
     * @return self
     */
    public function setId(?string $id): self
    {
        $this->id = $id;

        return $this;
    }

    /**
     * The booking reference type. Follows the [IATA PADIS](https://www.iata.org/whatwedo/workgroups/Pages/padis.aspx) Codeset encoding scheme.
     *
     * @return string
     */
    public function getTypeCode(): ?string
    {
        return $this->typeCode;
    }

    /**
     * The booking reference type. Follows the [IATA PADIS](https://www.iata.org/whatwedo/workgroups/Pages/padis.aspx) Codeset encoding scheme.
     *
     * @param string $typeCode
     *
     * @return self
     */
    public function setTypeCode(?string $typeCode): self
    {
        $this->typeCode = $typeCode;

        return $this;
    }

    /**
     * The code of the carrier issuing the ticket and all carriers responsible for the passenger and baggage.
     *
     * @return string
     */
    public function getCarrierCode(): ?string
    {
        return $this->carrierCode;
    }

    /**
     * The code of the carrier issuing the ticket and all carriers responsible for the passenger and baggage.
     *
     * @param string $carrierCode
     *
     * @return self
     */
    public function setCarrierCode(?string $carrierCode): self
    {
        $this->carrierCode = $carrierCode;

        return $this;
    }

    /**
     * The date when the booking was created (local to the system).
     *
     * @return string
     */
    public function getCreateDate(): ?string
    {
        return $this->createDate;
    }

    /**
     * The date when the booking was created (local to the system).
     *
     * @param string $createDate
     *
     * @return self
     */
    public function setCreateDate(?string $createDate): self
    {
        $this->createDate = $createDate;

        return $this;
    }
}
