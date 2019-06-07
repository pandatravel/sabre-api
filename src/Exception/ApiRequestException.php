<?php

namespace Ammonkc\SabreApi\Exception;

use GuzzleHttp\Exception\RequestException;

class ApiRequestException extends RequestException
{
    public function __construct($message, RequestException $previous)
    {
        parent::__construct($message, $previous->getRequest(), $previous->getResponse(), $previous, $previous->getHandlerContext());
    }

    public function __toString()
    {
        $string = parent::__toString();
        $string .= "\n{$this->request}";
        $string .= "\n{$this->response}";

        return $string;
    }
}
