<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Ammonkc\SabreApi\Model\CreatePassengerNameRecord;

use Ammonkc\SabreApi\AbstractModel;

class CreatePassengerNameRecordRequestCreatePassengerNameRecordRQHotelBookPaymentInformationFormOfPaymentAgencyAddressCountryCodesCodeItem extends AbstractModel
{
    /**
     * The agency country code.
     *
     * @var string
     */
    protected $content;
    /**
     * The agency country code context.
     *
     * @var string
     */
    protected $codeContext;

    /**
     * The agency country code.
     *
     * @return string
     */
    public function getContent(): string
    {
        return $this->content;
    }

    /**
     * The agency country code.
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
     * The agency country code context.
     *
     * @return string
     */
    public function getCodeContext(): string
    {
        return $this->codeContext;
    }

    /**
     * The agency country code context.
     *
     * @param string $codeContext
     *
     * @return self
     */
    public function setCodeContext(string $codeContext): self
    {
        $this->codeContext = $codeContext;

        return $this;
    }
}
