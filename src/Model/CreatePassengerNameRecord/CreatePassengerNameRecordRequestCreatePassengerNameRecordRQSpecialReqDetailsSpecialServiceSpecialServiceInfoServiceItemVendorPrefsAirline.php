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
     * The airline code.
    Applicable to the 'OSI' SSRCode, and is used to specify the airline that the SSR needs to be sent to.

     *
     * @var string
     */
    protected $code;
    /**
     * Defines if the receiving airline is a Sabre hosted carrier.
     *
     * @var bool
     */
    protected $hosted;

    /**
     * The airline code.
    Applicable to the 'OSI' SSRCode, and is used to specify the airline that the SSR needs to be sent to.

     *
     * @return string|null
     */
    public function getCode(): ?string
    {
        return $this->code;
    }

    /**
     * The airline code.
    Applicable to the 'OSI' SSRCode, and is used to specify the airline that the SSR needs to be sent to.

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
     * Defines if the receiving airline is a Sabre hosted carrier.
     *
     * @return bool|null
     */
    public function getHosted(): ?bool
    {
        return $this->hosted;
    }

    /**
     * Defines if the receiving airline is a Sabre hosted carrier.
     *
     * @param bool|null $hosted
     *
     * @return self
     */
    public function setHosted(?bool $hosted): self
    {
        $this->hosted = $hosted;

        return $this;
    }
}
