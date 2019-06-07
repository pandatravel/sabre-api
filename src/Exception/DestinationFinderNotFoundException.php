<?php

namespace Ammonkc\SabreApi\Exception;

use GuzzleHttp\Exception\RequestException;

class DestinationFinderNotFoundException extends ApiRequestException implements ClientException
{
    public function __construct(RequestException $previous)
    {
        parent::__construct('Not Found

- The service cannot find data to fulfill the parameters in the request. For example, data is not available for the origin or dates.
', $previous);
    }
}
