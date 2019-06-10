<?php

namespace Ammonkc\SabreApi\Model\CreatePassengerNameRecord\Exception;

use GuzzleHttp\Exception\RequestException;

class CreatePassengerNameRecordBadRequestException extends ApiRequestException implements ClientException
{
    public function __construct(RequestException $previous)
    {
        parent::__construct('Bad Request

- The request was not valid.
', $previous);
    }
}
