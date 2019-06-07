<?php

namespace Ammonkc\SabreApi\Exception;

use GuzzleHttp\Exception\RequestException;

class ApiTimedOutException extends ApiConnectException implements ClientException
{
    public function __construct(RequestException $previous)
    {
        parent::__construct('Connection Timed Out', $previous);
    }
}
