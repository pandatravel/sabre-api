<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Ammonkc\SabreApi\Model\CreatePassengerNameRecord;

use Ammonkc\SabreApi\AbstractModel;

class CreatePassengerNameRecordRequestCreatePassengerNameRecordRQSpecialReqDetailsAddRemarkRemarkInfoRemarkItem extends AbstractModel
{
    /**
     * Used to specify remark-related text.
     *
     * @var string
     */
    protected $text;
    /**
     * Used to specify an alpha sorting character such as: "H".
     *
     * @var string
     */
    protected $code;
    /**
     * Used to specify a segment number.
     *
     * @var string
     */
    protected $segmentNumber;
    /**
     * Used to specify the type of remark. Acceptable values are: Alpha-Coded, Client Address, Corporate, Delivery Address, General, Group Name, Hidden, Historical, Invoice, or Itinerary.
     *
     * @var string
     */
    protected $type;

    /**
     * Used to specify remark-related text.
     *
     * @return string
     */
    public function getText(): ?string
    {
        return $this->text;
    }

    /**
     * Used to specify remark-related text.
     *
     * @param string $text
     *
     * @return self
     */
    public function setText(?string $text): self
    {
        $this->text = $text;

        return $this;
    }

    /**
     * Used to specify an alpha sorting character such as: "H".
     *
     * @return string
     */
    public function getCode(): ?string
    {
        return $this->code;
    }

    /**
     * Used to specify an alpha sorting character such as: "H".
     *
     * @param string $code
     *
     * @return self
     */
    public function setCode(?string $code): self
    {
        $this->code = $code;

        return $this;
    }

    /**
     * Used to specify a segment number.
     *
     * @return string
     */
    public function getSegmentNumber(): ?string
    {
        return $this->segmentNumber;
    }

    /**
     * Used to specify a segment number.
     *
     * @param string $segmentNumber
     *
     * @return self
     */
    public function setSegmentNumber(?string $segmentNumber): self
    {
        $this->segmentNumber = $segmentNumber;

        return $this;
    }

    /**
     * Used to specify the type of remark. Acceptable values are: Alpha-Coded, Client Address, Corporate, Delivery Address, General, Group Name, Hidden, Historical, Invoice, or Itinerary.
     *
     * @return string
     */
    public function getType(): ?string
    {
        return $this->type;
    }

    /**
     * Used to specify the type of remark. Acceptable values are: Alpha-Coded, Client Address, Corporate, Delivery Address, General, Group Name, Hidden, Historical, Invoice, or Itinerary.
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
}
