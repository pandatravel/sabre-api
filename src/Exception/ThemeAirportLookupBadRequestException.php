<?php

namespace Ammonkc\SabreApi\Exception;

use GuzzleHttp\Exception\RequestException;

class ThemeAirportLookupBadRequestException extends ApiRequestException implements ClientException
{
    public function __construct(RequestException $previous)
    {
        parent::__construct('Bad Request

- Parameter \'theme\' must be one of \'{BEACH,DISNEY,GAMBLING,HISTORIC,MOUNTAINS,NATIONAL-PARKS,OUTDOORS,ROMANTIC,SHOPPING,SKIING,THEME-PARK,CARIBBEAN}\'.
', $previous);
    }
}
