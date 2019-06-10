<?php

namespace Ammonkc\SabreApi\Model\CountriesLookup\Exception;

use GuzzleHttp\Exception\RequestException;

class CountriesLookupRequestEntityTooLargeException extends ApiRequestException implements ClientException
{
    public function __construct(RequestException $previous)
    {
        parent::__construct('FULL Head

- The API returns this error when a request URI is too long. For example, the HTTP request query string exceeds the server limit.
- The response will be empty as a result.
- Please consider reducing the number of request parameters in the URI or separating parameters into multiple HTTP requests.
', $previous);
    }
}
