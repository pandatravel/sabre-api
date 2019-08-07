<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Ammonkc\SabreApi\Model\CreatePassengerNameRecord;

use Ammonkc\SabreApi\AbstractModel;

class CreatePassengerNameRecordRequestCreatePassengerNameRecordRQAirPriceItemPriceRequestInformationOptionalQualifiersMiscQualifiersEndorsements extends AbstractModel
{
    /**
     * Used to specify miscellaneous text in the endorsements field.
     *
     * @var string
     */
    protected $text;
    /**
     * Used to override any endorsement.
     *
     * @var bool
     */
    protected $override;

    /**
     * Used to specify miscellaneous text in the endorsements field.
     *
     * @return string
     */
    public function getText(): string
    {
        return $this->text;
    }

    /**
     * Used to specify miscellaneous text in the endorsements field.
     *
     * @param string $text
     *
     * @return self
     */
    public function setText(string $text): self
    {
        $this->text = $text;

        return $this;
    }

    /**
     * Used to override any endorsement.
     *
     * @return bool
     */
    public function getOverride(): bool
    {
        return $this->override;
    }

    /**
     * Used to override any endorsement.
     *
     * @param bool $override
     *
     * @return self
     */
    public function setOverride(bool $override): self
    {
        $this->override = $override;

        return $this;
    }
}
