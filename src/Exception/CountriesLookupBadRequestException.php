<?php

namespace Ammonkc\SabreApi\Model\CountriesLookup\Exception;

use GuzzleHttp\Exception\RequestException;

class CountriesLookupBadRequestException extends ApiRequestException implements ClientException
{
    public function __construct(RequestException $previous)
    {
        parent::__construct('Bad Request

 - Parameter \'pointofsalecountry\' has an unsupported value
', $previous);
    }
}
