<?php

namespace Ammonkc\SabreApi\Exception;

use GuzzleHttp\Exception\RequestException;

class DestinationFinderRequestEntityTooLargeException extends ApiRequestException implements ClientException
{
    public function __construct(RequestException $previous)
    {
        parent::__construct('FULL head

- The API returns this error when a request URI is too long. For example,The HTTP request query string exceeds the server limit.
- The response will be empty as a result.
- Please consider reducing the number of request parameters in the URI or separating parameters into multiple HTTP requests.
', $previous);
    }
}
