<?php

namespace Ammonkc\SabreApi\Model\InstaFlightsSearch;

use Ammonkc\SabreApi\AbstractModel;

class TPAExtensionsValidatingCarrier extends AbstractModel
{
    /**
     * The IATA code of the airline company that issues the ticket, holds the payment for the flight, and reimburses other airlines, such as marketing and operating airlines.

    1 to 8 characters.

     *
     * @var string
     */
    protected $code;

    /**
     * The IATA code of the airline company that issues the ticket, holds the payment for the flight, and reimburses other airlines, such as marketing and operating airlines.

    1 to 8 characters.

     *
     * @return string
     */
    public function getCode(): ?string
    {
        return $this->code;
    }

    /**
     * The IATA code of the airline company that issues the ticket, holds the payment for the flight, and reimburses other airlines, such as marketing and operating airlines.

    1 to 8 characters.

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
}
