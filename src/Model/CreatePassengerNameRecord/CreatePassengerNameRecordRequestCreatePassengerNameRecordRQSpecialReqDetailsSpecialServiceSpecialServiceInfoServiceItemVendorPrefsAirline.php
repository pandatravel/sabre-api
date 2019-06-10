<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Ammonkc\SabreApi\Model\CreatePassengerNameRecord;

use Ammonkc\SabreApi\AbstractModel;

class CreatePassengerNameRecordRequestCreatePassengerNameRecordRQSpecialReqDetailsSpecialServiceSpecialServiceInfoServiceItemVendorPrefsAirline extends AbstractModel
{
    /**
     * Applicable to the "OSI" SSRCode, and is used to specify the airline that the SSR needs to be sent to.
     *
     * @var string
     */
    protected $code;
    /**
     * Defines if the receiving airline is Sabre hosted carrier.
     *
     * @var bool
     */
    protected $hosted;

    /**
     * Applicable to the "OSI" SSRCode, and is used to specify the airline that the SSR needs to be sent to.
     *
     * @return string
     */
    public function getCode(): ?string
    {
        return $this->code;
    }

    /**
     * Applicable to the "OSI" SSRCode, and is used to specify the airline that the SSR needs to be sent to.
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
     * Defines if the receiving airline is Sabre hosted carrier.
     *
     * @return bool
     */
    public function getHosted(): ?bool
    {
        return $this->hosted;
    }

    /**
     * Defines if the receiving airline is Sabre hosted carrier.
     *
     * @param bool $hosted
     *
     * @return self
     */
    public function setHosted(?bool $hosted): self
    {
        $this->hosted = $hosted;

        return $this;
    }
}