<?php

namespace Ammonkc\SabreApi\Model\InstaFlightsSearch;

use Ammonkc\SabreApi\AbstractModel;

class AirItineraryOriginDestinationOptionsOriginDestinationOptionItemFlightSegmentItemMarketingAirline extends AbstractModel
{
    /**
     * Standard IATA code of the marketing airline company for the flight segment.

    For codeshare flights, the marketing airline of the flight.

    The IATA code of the airline company that markets this fare to the consumer and collects the payment.

    If the operating and marketing airlines are the same, the values in `OperatingAirline` and `MarketingAirline` match.

    This is required for use with scheduled airline messages, but may be omitted for requests by tour operators.

     *
     * @var string
     */
    protected $code;

    /**
     * Standard IATA code of the marketing airline company for the flight segment.

    For codeshare flights, the marketing airline of the flight.

    The IATA code of the airline company that markets this fare to the consumer and collects the payment.

    If the operating and marketing airlines are the same, the values in `OperatingAirline` and `MarketingAirline` match.

    This is required for use with scheduled airline messages, but may be omitted for requests by tour operators.

     *
     * @return string
     */
    public function getCode(): ?string
    {
        return $this->code;
    }

    /**
     * Standard IATA code of the marketing airline company for the flight segment.

    For codeshare flights, the marketing airline of the flight.

    The IATA code of the airline company that markets this fare to the consumer and collects the payment.

    If the operating and marketing airlines are the same, the values in `OperatingAirline` and `MarketingAirline` match.

    This is required for use with scheduled airline messages, but may be omitted for requests by tour operators.

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
