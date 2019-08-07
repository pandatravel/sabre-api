<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Ammonkc\SabreApi\Model\CreatePassengerNameRecord;

use Ammonkc\SabreApi\AbstractModel;

class CreatePassengerNameRecordRequestCreatePassengerNameRecordRQAirPriceItemPriceRequestInformationOptionalQualifiersPricingQualifiersCommandPricingItemFareBasis extends AbstractModel
{
    /**
     * The fare basis code.
     *
     * @var string
     */
    protected $code;
    /**
     * Used to specify a ticket designator.
     *
     * @var string
     */
    protected $ticketDesignator;

    /**
     * The fare basis code.
     *
     * @return string|null
     */
    public function getCode(): ?string
    {
        return $this->code;
    }

    /**
     * The fare basis code.
     *
     * @param string|null $code
     *
     * @return self
     */
    public function setCode(?string $code): self
    {
        $this->code = $code;

        return $this;
    }

    /**
     * Used to specify a ticket designator.
     *
     * @return string|null
     */
    public function getTicketDesignator(): ?string
    {
        return $this->ticketDesignator;
    }

    /**
     * Used to specify a ticket designator.
     *
     * @param string|null $ticketDesignator
     *
     * @return self
     */
    public function setTicketDesignator(?string $ticketDesignator): self
    {
        $this->ticketDesignator = $ticketDesignator;

        return $this;
    }
}
