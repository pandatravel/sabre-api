<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Ammonkc\SabreApi\Model\CreatePassengerNameRecord;

use Ammonkc\SabreApi\AbstractModel;

class CreatePassengerNameRecordResponseCreatePassengerNameRecordRSTravelItineraryReadTravelItinerarySpecialServiceInfoItemServicePersonNameItem extends AbstractModel
{
    /**
     * The passenger name.
     *
     * @var string
     */
    protected $content;
    /**
     * The passenger name number associated with the particular passenger.
     *
     * @var string
     */
    protected $nameNumber;

    /**
     * The passenger name.
     *
     * @return string|null
     */
    public function getContent(): ?string
    {
        return $this->content;
    }

    /**
     * The passenger name.
     *
     * @param string|null $content
     *
     * @return self
     */
    public function setContent(?string $content): self
    {
        $this->content = $content;

        return $this;
    }

    /**
     * The passenger name number associated with the particular passenger.
     *
     * @return string|null
     */
    public function getNameNumber(): ?string
    {
        return $this->nameNumber;
    }

    /**
     * The passenger name number associated with the particular passenger.
     *
     * @param string|null $nameNumber
     *
     * @return self
     */
    public function setNameNumber(?string $nameNumber): self
    {
        $this->nameNumber = $nameNumber;

        return $this;
    }
}
