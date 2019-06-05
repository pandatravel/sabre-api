<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Ammonkc\SabreApi\Exception;

class DestinationFinderRequestEntityTooLargeException extends \RuntimeException implements ClientException
{
    public function __construct()
    {
        parent::__construct('FULL head

- The API returns this error when a request URI is too long. For example,The HTTP request query string exceeds the server limit.
- The response will be empty as a result.
- Please consider reducing the number of request parameters in the URI or separating parameters into multiple HTTP requests.
', 413);
    }
}
