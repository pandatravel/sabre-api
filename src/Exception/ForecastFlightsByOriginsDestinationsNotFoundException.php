<?php

namespace Ammonkc\SabreApi\Exception;

use GuzzleHttp\Exception\RequestException;

class ForecastFlightsByOriginsDestinationsNotFoundException extends ApiRequestException implements ClientException
{
    public function __construct(RequestException $previous)
    {
        parent::__construct('Not Found

- The service cannot find data to fulfill the request using the filters that you applied.
', $previous);
    }
}
