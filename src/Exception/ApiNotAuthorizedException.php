<?php

namespace Ammonkc\SabreApi\Exception;

use GuzzleHttp\Exception\ClientException;

class ApiNotAuthorizedException extends ApiClientException
{
    public function __construct(ClientException $previous)
    {
        parent::__construct('Not Authorized', $previous);
    }
}
