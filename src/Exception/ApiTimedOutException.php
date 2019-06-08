<?php

namespace Ammonkc\SabreApi\Exception;

use GuzzleHttp\Exception\ConnectException;

class ApiTimedOutException extends ApiConnectException implements ClientException
{
    public function __construct(ConnectException $previous)
    {
        parent::__construct('Connection Timed Out', $previous);
    }
}
