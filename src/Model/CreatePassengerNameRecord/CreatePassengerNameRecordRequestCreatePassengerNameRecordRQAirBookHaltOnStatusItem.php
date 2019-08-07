<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Ammonkc\SabreApi\Model\CreatePassengerNameRecord;

use Ammonkc\SabreApi\AbstractModel;

class CreatePassengerNameRecordRequestCreatePassengerNameRecordRQAirBookHaltOnStatusItem extends AbstractModel
{
    /**
     * Used to specify values that cause subsequent pricing, and beyond processing to stop if they appear.
     * In order to successfully price an air itinerary the status code associated with the individual segments cannot be 'NN', 'NO', 'UC' or 'US'.
     * After successfully booking flights, the system will compare the status codes returned from the carrier against the client-specified codes to determine if subsequent pricing, and beyond processing should occur.
     *
     * @var string
     */
    protected $code;

    /**
     * Used to specify values that cause subsequent pricing, and beyond processing to stop if they appear.
     * In order to successfully price an air itinerary the status code associated with the individual segments cannot be 'NN', 'NO', 'UC' or 'US'.
     * After successfully booking flights, the system will compare the status codes returned from the carrier against the client-specified codes to determine if subsequent pricing, and beyond processing should occur.
     *
     * @return string
     */
    public function getCode(): string
    {
        return $this->code;
    }

    /**
     * Used to specify values that cause subsequent pricing, and beyond processing to stop if they appear.
     * In order to successfully price an air itinerary the status code associated with the individual segments cannot be 'NN', 'NO', 'UC' or 'US'.
     * After successfully booking flights, the system will compare the status codes returned from the carrier against the client-specified codes to determine if subsequent pricing, and beyond processing should occur.
     *
     * @param string $code
     *
     * @return self
     */
    public function setCode(string $code): self
    {
        $this->code = $code;

        return $this;
    }
}
