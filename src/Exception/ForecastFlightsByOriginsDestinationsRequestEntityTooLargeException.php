<?php

namespace Ammonkc\SabreApi\Exception;

use GuzzleHttp\Exception\RequestException;

class ForecastFlightsByOriginsDestinationsRequestEntityTooLargeException extends ApiRequestException implements ClientException
{
    public function __construct(RequestException $previous)
    {
        parent::__construct('Full Head

- The API returns this error when a request URI is too long.
- For example, the HTTP request\'s query string exceeds the server limit. The response will be empty as a result.
- Please consider reducing the number of request parameters in the URI or separating parameters into multiple HTTP requests.
', $previous);
    }
}
