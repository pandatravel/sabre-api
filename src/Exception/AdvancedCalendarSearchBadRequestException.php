<?php

namespace Ammonkc\SabreApi\Exception;

use GuzzleHttp\Exception\RequestException;

class AdvancedCalendarSearchBadRequestException extends ApiRequestException implements ClientException
{
    public function __construct(RequestException $previous)
    {
        parent::__construct('Bad Request

- Parameter \'limit\' must be of type \'number\', or string equal to \'None\'.
- Parameter \'limit\' must be between 1 and 2147483647.
- Parameter \'offset\' must be of type \'number\'.
- Parameter \'offset\' must be between 1 and 2147483647.
- View does not exist.
', $previous);
    }
}
