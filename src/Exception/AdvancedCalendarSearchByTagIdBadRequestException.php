<?php

namespace Ammonkc\SabreApi\Exception;

use GuzzleHttp\Exception\RequestException;

class AdvancedCalendarSearchByTagIdBadRequestException extends ApiRequestException implements ClientException
{
    public function __construct(RequestException $previous)
    {
        parent::__construct('Bad Request

- View does not exist.
', $previous);
    }
}
