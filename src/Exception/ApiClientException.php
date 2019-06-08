<?php

namespace Ammonkc\SabreApi\Exception;

use GuzzleHttp\Exception\ClientException;

class ApiClientException extends ClientException
{
    public function __construct($message, ClientException $previous)
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
