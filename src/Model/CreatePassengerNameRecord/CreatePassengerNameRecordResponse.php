<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Ammonkc\SabreApi\Model\CreatePassengerNameRecord;

use Ammonkc\SabreApi\AbstractModel;

class CreatePassengerNameRecordResponse extends AbstractModel
{
    /**
     * @var CreatePassengerNameRecordResponseLinksItem[]
     */
    protected $links;
    /**
     * @var CreatePassengerNameRecordResponseCreatePassengerNameRecordRS
     */
    protected $createPassengerNameRecordRS;

    /**
     * @return CreatePassengerNameRecordResponseLinksItem[]
     */
    public function getLinks(): ?array
    {
        return $this->links;
    }

    /**
     * @param CreatePassengerNameRecordResponseLinksItem[] $links
     *
     * @return self
     */
    public function setLinks(?array $links): self
    {
        $this->links = $links;

        return $this;
    }

    /**
     * @return CreatePassengerNameRecordResponseCreatePassengerNameRecordRS
     */
    public function getCreatePassengerNameRecordRS(): ?CreatePassengerNameRecordResponseCreatePassengerNameRecordRS
    {
        return $this->createPassengerNameRecordRS;
    }

    /**
     * @param CreatePassengerNameRecordResponseCreatePassengerNameRecordRS $createPassengerNameRecordRS
     *
     * @return self
     */
    public function setCreatePassengerNameRecordRS(?CreatePassengerNameRecordResponseCreatePassengerNameRecordRS $createPassengerNameRecordRS): self
    {
        $this->createPassengerNameRecordRS = $createPassengerNameRecordRS;

        return $this;
    }
}
