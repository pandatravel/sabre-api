<?php

namespace Ammonkc\SabreApi\Exception;

use GuzzleHttp\Exception\RequestException;

class AirlinesLookupBadRequestException extends ApiRequestException implements ClientException
{
    public function __construct(RequestException $previous)
    {
        parent::__construct('Bad Request
 - Parameter \'airlinecode\' must be a valid value.
', $previous);
    }
}
