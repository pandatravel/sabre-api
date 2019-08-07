<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Ammonkc\SabreApi\Model\CreatePassengerNameRecord;

use Ammonkc\SabreApi\AbstractModel;

class CreatePassengerNameRecordResponseCreatePassengerNameRecordRSTravelItineraryReadTravelItineraryCustomerInfoPersonNameItemProfileIndexItem extends AbstractModel
{
    /**
     * The profile index.
     *
     * @var string
     */
    protected $content;
    /**
     * The profile index ID.
     *
     * @var string
     */
    protected $id;

    /**
     * The profile index.
     *
     * @return string
     */
    public function getContent(): string
    {
        return $this->content;
    }

    /**
     * The profile index.
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
     * The profile index ID.
     *
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }

    /**
     * The profile index ID.
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
}
