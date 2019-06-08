<?php

namespace Ammonkc\SabreApi\Exception;

use GuzzleHttp\Exception\RequestException;

class AircraftEquipmentLookupBadRequestException extends ApiRequestException implements ClientException
{
    public function __construct(RequestException $previous)
    {
        parent::__construct('Bad Request
   - Parameter \'aircraftcode\' must be a valid value.
', $previous);
    }
}
