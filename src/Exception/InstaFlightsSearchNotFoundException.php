<?php

namespace Ammonkc\SabreApi\Model\InstaFlightsSearch\Exception;

use GuzzleHttp\Exception\RequestException;

class InstaFlightsSearchNotFoundException extends ApiRequestException implements ClientException
{
    public function __construct(RequestException $previous)
    {
        parent::__construct('Not Found

No results were found.
', $previous);
    }
}