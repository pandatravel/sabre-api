<?php

namespace Ammonkc\SabreApi\Exception;

use GuzzleHttp\Exception\RequestException;

class GeoAutocompleteBadRequestException extends ApiRequestException implements ClientException
{
    public function __construct(RequestException $previous)
    {
        parent::__construct('Bad Request

- Required string parameter `query` is not present.
- Unable to convert `limit` to required type number.
', $previous);
    }
}
