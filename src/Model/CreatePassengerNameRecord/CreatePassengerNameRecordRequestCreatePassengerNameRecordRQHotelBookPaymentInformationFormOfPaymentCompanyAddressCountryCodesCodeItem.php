<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Ammonkc\SabreApi\Model\CreatePassengerNameRecord;

use Ammonkc\SabreApi\AbstractModel;

class CreatePassengerNameRecordRequestCreatePassengerNameRecordRQHotelBookPaymentInformationFormOfPaymentCompanyAddressCountryCodesCodeItem extends AbstractModel
{
    /**
     * The company country code.
     *
     * @var string
     */
    protected $content;
    /**
     * The company country code context.
     *
     * @var string
     */
    protected $codeContext;

    /**
     * The company country code.
     *
     * @return string
     */
    public function getContent(): string
    {
        return $this->content;
    }

    /**
     * The company country code.
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
     * The company country code context.
     *
     * @return string
     */
    public function getCodeContext(): string
    {
        return $this->codeContext;
    }

    /**
     * The company country code context.
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
