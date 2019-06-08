<?php

namespace Ammonkc\SabreApi\Exception;

use GuzzleHttp\Exception\ConnectException;

class ApiConnectException extends ConnectException
{
    public function __construct($message, ConnectException $previous)
    {
        parent::__construct($message, $previous->getRequest(), $previous, $previous->getHandlerContext());
    }

    /**
     * Get the code that caused the exception
     *
     * @return int
     */
    public function getErrorCode()
    {
        if ($this->getCode() === 0) {
            return $this->getHandlerContext()['errno'];
        }
        return;
    }

    public function __toString()
    {
        $string = parent::__toString();
        $string .= "\n{$this->request}";
        $string .= "\n{$this->response}";

        return $string;
    }
}
