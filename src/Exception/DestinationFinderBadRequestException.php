<?php

namespace Ammonkc\SabreApi\Exception;

use GuzzleHttp\Exception\RequestException;

class DestinationFinderBadRequestException extends ApiRequestException implements ClientException
{
    public function __construct(RequestException $previous)
    {
        parent::__construct('Bad Request

  - Parameter \'origin\' must be specified.
  - Parameter \'departuredate\' must be specified.
  - Parameter \'lengthofstay\' must be specified.
  - Parameter \'returndate\'  must be specified.
  - Parameter \'latestdeparturedate\' must be specified.

  - Parameter \'departuredate\' must have exactly one value.
  - Parameter \'lengthofstay\' must have exactly one value.

  - Parameter \'pointofsalecountry\' has an unsupported value.

  - One of the \'region\' has an unsupported or invalid value.
  - One of the \'location\' has an unsupported or invalid value.

  - Parameter \'lengthofstay\' must be of type \'number\'.
  - Parameter \'maxfare\' must be of type \'number\'
  - Parameter \'minfare\' must be of type \'number\'.
  - Parameter \'topdestinations\' must be of type \'number\'.
  - Parameter \'pricepermile\' must be of type \'number\'.

  - Parameter \'departuredate\' must be today or a future date.
  - Parameter \'returndate\' must be today or a future date.
  - Parameter \'earliestdeparturedate\' must be today or a future date.
  - Parameter \'latestdeparturedate\' must be today or a future date.

  - Parameter \'departuredate\' must have a format of \'yyyy-MM-dd\' and be a valid date.
  - Parameter \'returndate\' must have a format of \'yyyy-MM-dd\' and be a valid date.
  - Parameter \'earliestdeparturedate\' must have a format of \'yyyy-MM-dd\' and be a valid date.
  - Parameter \'latestdeparturedate\' must have a format of \'yyyy-MM-dd\' and be a valid date.

  - Parameter \'departuredate\' must be before \'returndate\'.
  - Parameter \'earliestdeparturedate\' must be before \'latestreturndate\'.

  - Parameter \'departuredate\' exceeds the maximum days allowed.
  - Parameter \'returndate\' exceeds the maximum days allowed.
  - Parameter \'earliestdeparturedate\' exceeds the maximum days allowed.
  - Parameter \'latestdeparturedate\' exceeds the maximum days allowed.

  - Date range in \'departuredate\' and \'returndate\' exceeds the maximum allowed.
  - Date range in \'earliestdeparturedate\' exceeds the maximum allowed
  - Date range in \'earliestdeparturedate\' and \'latestdeparturedate\' exceeds the maximum allowed.

  - Parameter \'lengthofstay\' must be between 0 and 16.
  - Parameter \'maxfare\' must be greater than or equal to \'minfare\'.
  - Parameter \'minfare\' must be greater than or equal to 0.0.
  - Parameter \'maxfare\' must be greater than 0.0.
  - Parameter \'topdestinations\' must be between 1 and 50.
  - Parameter \'lengthofstay\' must not have more than 10 elements.
  - Parameter \'theme\' must be a valid value.
', $previous);
    }
}
