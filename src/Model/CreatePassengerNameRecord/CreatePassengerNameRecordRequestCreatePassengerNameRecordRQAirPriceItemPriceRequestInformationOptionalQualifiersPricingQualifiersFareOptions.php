<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Ammonkc\SabreApi\Model\CreatePassengerNameRecord;

use Ammonkc\SabreApi\AbstractModel;

class CreatePassengerNameRecordRequestCreatePassengerNameRecordRQAirPriceItemPriceRequestInformationOptionalQualifiersPricingQualifiersFareOptions extends AbstractModel
{
    /**
     * Used to display the original base fare and GST (when applicable), along with new information displaying the ASL amounts and any applicable GST.
     *
     * @var bool
     */
    protected $aSLBreakdown;
    /**
     * Used to instruct the system to ignore Adjusted Selling Level processing logic.
     *
     * @var bool
     */
    protected $aSLIgnore;
    /**
     * Used to instruct the system to price the itinerary with an excursion fare.
     *
     * @var bool
     */
    protected $excursion;
    /**
     * Used to to display the original base fare and GST (when applicable), along with new information displaying all handling fees (with applicable GST) in the response.
     *
     * @var bool
     */
    protected $handlingFees;
    /**
     * Used to instruct the system to price the itinerary with a net fare.
     *
     * @var bool
     */
    protected $net;
    /**
     * Used to instruct the system to price the itinerary with a private fare.
     *
     * @var bool
     */
    protected $private;
    /**
     * Used to instruct the system to price the itinerary with a public fare.
     *
     * @var bool
     */
    protected $public;

    /**
     * Used to display the original base fare and GST (when applicable), along with new information displaying the ASL amounts and any applicable GST.
     *
     * @return bool
     */
    public function getASLBreakdown(): bool
    {
        return $this->aSLBreakdown;
    }

    /**
     * Used to display the original base fare and GST (when applicable), along with new information displaying the ASL amounts and any applicable GST.
     *
     * @param bool $aSLBreakdown
     *
     * @return self
     */
    public function setASLBreakdown(bool $aSLBreakdown): self
    {
        $this->aSLBreakdown = $aSLBreakdown;

        return $this;
    }

    /**
     * Used to instruct the system to ignore Adjusted Selling Level processing logic.
     *
     * @return bool
     */
    public function getASLIgnore(): bool
    {
        return $this->aSLIgnore;
    }

    /**
     * Used to instruct the system to ignore Adjusted Selling Level processing logic.
     *
     * @param bool $aSLIgnore
     *
     * @return self
     */
    public function setASLIgnore(bool $aSLIgnore): self
    {
        $this->aSLIgnore = $aSLIgnore;

        return $this;
    }

    /**
     * Used to instruct the system to price the itinerary with an excursion fare.
     *
     * @return bool
     */
    public function getExcursion(): bool
    {
        return $this->excursion;
    }

    /**
     * Used to instruct the system to price the itinerary with an excursion fare.
     *
     * @param bool $excursion
     *
     * @return self
     */
    public function setExcursion(bool $excursion): self
    {
        $this->excursion = $excursion;

        return $this;
    }

    /**
     * Used to to display the original base fare and GST (when applicable), along with new information displaying all handling fees (with applicable GST) in the response.
     *
     * @return bool
     */
    public function getHandlingFees(): bool
    {
        return $this->handlingFees;
    }

    /**
     * Used to to display the original base fare and GST (when applicable), along with new information displaying all handling fees (with applicable GST) in the response.
     *
     * @param bool $handlingFees
     *
     * @return self
     */
    public function setHandlingFees(bool $handlingFees): self
    {
        $this->handlingFees = $handlingFees;

        return $this;
    }

    /**
     * Used to instruct the system to price the itinerary with a net fare.
     *
     * @return bool
     */
    public function getNet(): bool
    {
        return $this->net;
    }

    /**
     * Used to instruct the system to price the itinerary with a net fare.
     *
     * @param bool $net
     *
     * @return self
     */
    public function setNet(bool $net): self
    {
        $this->net = $net;

        return $this;
    }

    /**
     * Used to instruct the system to price the itinerary with a private fare.
     *
     * @return bool
     */
    public function getPrivate(): bool
    {
        return $this->private;
    }

    /**
     * Used to instruct the system to price the itinerary with a private fare.
     *
     * @param bool $private
     *
     * @return self
     */
    public function setPrivate(bool $private): self
    {
        $this->private = $private;

        return $this;
    }

    /**
     * Used to instruct the system to price the itinerary with a public fare.
     *
     * @return bool
     */
    public function getPublic(): bool
    {
        return $this->public;
    }

    /**
     * Used to instruct the system to price the itinerary with a public fare.
     *
     * @param bool $public
     *
     * @return self
     */
    public function setPublic(bool $public): self
    {
        $this->public = $public;

        return $this;
    }
}
