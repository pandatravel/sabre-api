<?php

namespace Ammonkc\SabreApi\Model\CountriesLookup\Exception;

use GuzzleHttp\Exception\RequestException;

class CountriesLookupNotFoundException extends ApiRequestException implements ClientException
{
    public function __construct(RequestException $previous)
    {
        parent::__construct('Not Found

- No results were found.
', $previous);
    }
}
