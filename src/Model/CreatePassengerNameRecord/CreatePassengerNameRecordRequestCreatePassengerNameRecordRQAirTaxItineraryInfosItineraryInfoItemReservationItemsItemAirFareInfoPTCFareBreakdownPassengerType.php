<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Ammonkc\SabreApi\Model\CreatePassengerNameRecord;

use Ammonkc\SabreApi\AbstractModel;

class CreatePassengerNameRecordRequestCreatePassengerNameRecordRQAirTaxItineraryInfosItineraryInfoItemReservationItemsItemAirFareInfoPTCFareBreakdownPassengerType extends AbstractModel
{
    /**
     * The passenger quantity.
     *
     * @var int
     */
    protected $quantity;
    /**
     * The passenger type code.
     *
     * @var string
     */
    protected $code;
    /**
     * The passenger age.
     *
     * @var int
     */
    protected $age;

    /**
     * The passenger quantity.
     *
     * @return int|null
     */
    public function getQuantity(): ?int
    {
        return $this->quantity;
    }

    /**
     * The passenger quantity.
     *
     * @param int|null $quantity
     *
     * @return self
     */
    public function setQuantity(?int $quantity): self
    {
        $this->quantity = $quantity;

        return $this;
    }

    /**
     * The passenger type code.
     *
     * @return string|null
     */
    public function getCode(): ?string
    {
        return $this->code;
    }

    /**
     * The passenger type code.
     *
     * @param string|null $code
     *
     * @return self
     */
    public function setCode(?string $code): self
    {
        $this->code = $code;

        return $this;
    }

    /**
     * The passenger age.
     *
     * @return int|null
     */
    public function getAge(): ?int
    {
        return $this->age;
    }

    /**
     * The passenger age.
     *
     * @param int|null $age
     *
     * @return self
     */
    public function setAge(?int $age): self
    {
        $this->age = $age;

        return $this;
    }
}
