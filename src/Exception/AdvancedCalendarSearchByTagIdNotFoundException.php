<?php

namespace Ammonkc\SabreApi\Exception;

use GuzzleHttp\Exception\RequestException;

class AdvancedCalendarSearchByTagIdNotFoundException extends ApiRequestException implements ClientException
{
    public function __construct(RequestException $previous)
    {
        parent::__construct('Not Found

- No tag ID named \'tagid\' is defined
', $previous);
    }
}
