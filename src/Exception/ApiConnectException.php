<?php

namespace Ammonkc\SabreApi\Exception;

use GuzzleHttp\Exception\ConnectException;

class ApiConnectException extends ConnectException
{
    public function __construct($message, RequestException $previous)
    {
        parent::__construct($message, $previous->getRequest(), $previous, $previous->getHandlerContext());
    }

    public function __toString()
    {
        $string = parent::__toString();
        $string .= "\n{$this->request}";
        $string .= "\n{$this->response}";

        return $string;
    }
}
