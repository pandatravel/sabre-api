<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Ammonkc\SabreApi\Model\CreatePassengerNameRecord;

use Ammonkc\SabreApi\AbstractModel;

class CreatePassengerNameRecordRequestCreatePassengerNameRecordRQSpecialReqDetailsSpecialServiceSpecialServiceInfoAdvancePassengerItemResidentDestinationAddress extends AbstractModel
{
    /**
     * The city name.
     *
     * @var string
     */
    protected $city;
    /**
     * The country code.
     *
     * @var string
     */
    protected $country;
    /**
     * The street address.
     *
     * @var string
     */
    protected $street;
    /**
     * The state code.
     *
     * @var string
     */
    protected $state;
    /**
     * The zip or postal code.
     *
     * @var string
     */
    protected $zip;
    /**
     * Used to specify the address type.
    Acceptable values are "R" - residence address, "D" - destination address.

     *
     * @var string
     */
    protected $type;

    /**
     * The city name.
     *
     * @return string|null
     */
    public function getCity(): ?string
    {
        return $this->city;
    }

    /**
     * The city name.
     *
     * @param string|null $city
     *
     * @return self
     */
    public function setCity(?string $city): self
    {
        $this->city = $city;

        return $this;
    }

    /**
     * The country code.
     *
     * @return string|null
     */
    public function getCountry(): ?string
    {
        return $this->country;
    }

    /**
     * The country code.
     *
     * @param string|null $country
     *
     * @return self
     */
    public function setCountry(?string $country): self
    {
        $this->country = $country;

        return $this;
    }

    /**
     * The street address.
     *
     * @return string|null
     */
    public function getStreet(): ?string
    {
        return $this->street;
    }

    /**
     * The street address.
     *
     * @param string|null $street
     *
     * @return self
     */
    public function setStreet(?string $street): self
    {
        $this->street = $street;

        return $this;
    }

    /**
     * The state code.
     *
     * @return string|null
     */
    public function getState(): ?string
    {
        return $this->state;
    }

    /**
     * The state code.
     *
     * @param string|null $state
     *
     * @return self
     */
    public function setState(?string $state): self
    {
        $this->state = $state;

        return $this;
    }

    /**
     * The zip or postal code.
     *
     * @return string|null
     */
    public function getZip(): ?string
    {
        return $this->zip;
    }

    /**
     * The zip or postal code.
     *
     * @param string|null $zip
     *
     * @return self
     */
    public function setZip(?string $zip): self
    {
        $this->zip = $zip;

        return $this;
    }

    /**
     * Used to specify the address type.
    Acceptable values are "R" - residence address, "D" - destination address.

     *
     * @return string|null
     */
    public function getType(): ?string
    {
        return $this->type;
    }

    /**
     * Used to specify the address type.
    Acceptable values are "R" - residence address, "D" - destination address.

     *
     * @param string|null $type
     *
     * @return self
     */
    public function setType(?string $type): self
    {
        $this->type = $type;

        return $this;
    }
}
