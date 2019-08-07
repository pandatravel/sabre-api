<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Ammonkc\SabreApi\Model\CreatePassengerNameRecord;

use Ammonkc\SabreApi\AbstractModel;

class CreatePassengerNameRecordResponseCreatePassengerNameRecordRSTravelItineraryReadTravelItineraryCustomerInfoAddressAddressLineItem extends AbstractModel
{
    /**
     * The customer address information.
     *
     * @var string
     */
    protected $content;
    /**
     * The reference ID.
     *
     * @var string
     */
    protected $id;
    /**
     * Indicates type of information.
     * Ex. O  - Other, N - Name, A - Address, C - City and State, Z - Zip code, B - Business.
     *
     * @var string
     */
    protected $type;

    /**
     * The customer address information.
     *
     * @return string
     */
    public function getContent(): string
    {
        return $this->content;
    }

    /**
     * The customer address information.
     *
     * @param string $content
     *
     * @return self
     */
    public function setContent(string $content): self
    {
        $this->content = $content;

        return $this;
    }

    /**
     * The reference ID.
     *
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }

    /**
     * The reference ID.
     *
     * @param string $id
     *
     * @return self
     */
    public function setId(string $id): self
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Indicates type of information.
     * Ex. O  - Other, N - Name, A - Address, C - City and State, Z - Zip code, B - Business.
     *
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }

    /**
     * Indicates type of information.
     * Ex. O  - Other, N - Name, A - Address, C - City and State, Z - Zip code, B - Business.
     *
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
