<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Ammonkc\SabreApi\Exception;

class FlightsByTagIdBadRequestException extends \RuntimeException implements ClientException
{
    public function __construct($previous = null)
    {
        parent::__construct('Bad Request

- View does not exist.
', 400, $previous);
    }
}
