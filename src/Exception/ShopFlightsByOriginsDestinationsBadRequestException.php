<?php

namespace Ammonkc\SabreApi\Exception;

use GuzzleHttp\Exception\RequestException;

class ShopFlightsByOriginsDestinationsBadRequestException extends ApiRequestException implements ClientException
{
    public function __construct(RequestException $previous)
    {
        parent::__construct('Bad Request

- Parameter \'origincountry\' must be country code.
- Parameter \'destinationcountry\' must be country code.
- Parameter \'destinationregion\' must be one of \'{Africa,Asia Pacific,Europe,Latin America,Middle East,North America}\'.
- Parameter \'originregion\' must be one of \'{Africa,Asia Pacific,Europe,Latin America,Middle East,North America}\'.
- Parameter \'pointofsalecountry\' has an unsupported value.
', $previous);
    }
}
