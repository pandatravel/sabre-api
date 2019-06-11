<?php

namespace Ammonkc\SabreApi\Model\EnhancedAirTicket;

use Ammonkc\SabreApi\AbstractModel;

class PostProcessingEndTransactionEmailPersonName extends AbstractModel
{
    /**
     * "NameNumber" is used to specify a particular passenger name number to send the email notification to.

    Please note that the email address in the PNR's email field must be name associated to the specified name number.

     *
     * @var string
     */
    protected $nameNumber;

    /**
     * "NameNumber" is used to specify a particular passenger name number to send the email notification to.

    Please note that the email address in the PNR's email field must be name associated to the specified name number.

     *
     * @return string
     */
    public function getNameNumber(): ?string
    {
        return $this->nameNumber;
    }

    /**
     * "NameNumber" is used to specify a particular passenger name number to send the email notification to.

    Please note that the email address in the PNR's email field must be name associated to the specified name number.

     *
     * @param string $nameNumber
     *
     * @return self
     */
    public function setNameNumber(?string $nameNumber): self
    {
        $this->nameNumber = $nameNumber;

        return $this;
    }
}
