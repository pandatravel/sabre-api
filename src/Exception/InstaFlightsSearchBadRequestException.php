<?php

namespace Ammonkc\SabreApi\Exception;

use GuzzleHttp\Exception\RequestException;

class InstaFlightsSearchBadRequestException extends ApiRequestException implements ClientException
{
    public function __construct(RequestException $previous)
    {
        parent::__construct('Bad Request

- Parameter \'origin\' must be specified.
- Parameter \'returndate\' must be specified.
- Parameter \'returndate\' must have a format of \'yyyy-MM-dd\' and be a valid date.
- Parameter \'returndate\' exceeds the maximum days allowed.
- Parameter \'departuredate\' must be specified.
- Parameter \'departuredate\' must have a format of \'yyyy-MM-dd\' and be a valid date.
- Parameter \'departuredate\' exceeds the maximum days allowed.
- Parameter \'departuredate\' must have exactly one value.
- Parameter \'departuredate\' must be before \'returndate\'.
- Parameter \'departuredate\' must be today or a future date.
- Date range in \'departuredate\' and \'returndate\' exceeds the maximum allowed.
- Parameter \'excludedcarriers\' must be specified.
- Parameter \'includedcarriers\' must be specified.
- Parameter \'outboundflightstops\' must be of type \'number\'.
- Parameter \'outboundflightstops\' must be between 0 and 99.
- Parameter \'inboundflightstops\' must be of type \'number\'.
- Parameter \'inboundflightstops\' must be between 0 and 99.
- Parameter \'includedconnectpoints\' must be specified.
- Parameter \'excludedconnectpoints\' must be specified.
- Parameter \'includedconnectpoints\' must not have more than 3 elements.
- Parameter \'excludedconnectpoints\' must not have more than 3 elements.
- Parameter \'outboundstopduration\' must be of type \'number\'.
- Parameter \'outboundstopduration\' must be between 0 and 9999.
- Parameter \'inboundstopduration\' must be of type \'number\'.
- Parameter \'inboundstopduration\' must be between 0 and 9999.
- Parameter \'outbounddeparturewindow\' must have a format of \'HHmmHHmm\' and be a valid time range.
- Parameter \'outboundarrivalwindow\' must have a format of \'HHmmHHmm\' and be a valid time range.
- Parameter \'inbounddeparturewindow\' must have a format of \'HHmmHHmm\' and be a valid time range.
- Parameter \'inboundarrivalwindow\' must have a format of \'HHmmHHmm\' and be a valid time range.
- Parameter \'onlineitinerariesonly\' must contain either a \'y\' or \'n\' value.
- Parameter \'eticketsonly\' must contain either a \'y\' or \'n\' value.
- Parameter \'limit\' must be between 1 and 2147483647.
- Parameter \'limit\' must be of type \'number\'.
- Parameter \'offset\' must be between 1 and 2147483647.
- Parameter \'offset\' must be of type \'number\'.
- Parameter \'sortby\' must be one of \'{totalfare,departuretime,elapsedtime}.
- Parameter \'sortby2\' must be one of \'{totalfare,departuretime,elapsedtime}.
- Parameter \'order\' must be one of \'{asc,dsc}\'.
- Parameter \'order2\' must be one of \'{asc,dsc}\'.
- Parameter \'maxfare\' must be greater than or equal to \'minfare\'.
- Parameter \'minfare\' must be greater than or equal to 0.0.
- Parameter \'maxfare\' must be greater than 0.0.
- Parameter \'minfare\' must be of type \'number\'.
- Parameter \'maxfare\' must be of type \'number\'.
- Parameter \'passengercount\' must be of type \'number\'.
- Parameter \'passengercount\' must be between 0 and 10.
- Missing or invalid required parameter(s).
- No view named \'{view}\' is defined.
- Return date is blank while inbound parameter(s) are present. Please specify round-trip parameters or do not use inbound parameter(s).
', $previous);
    }
}
