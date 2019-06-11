<?php

namespace Ammonkc\SabreApi\Model\EnhancedAirTicket;

use Ammonkc\SabreApi\AbstractModel;

class TicketingItemMiscQualifiersTourCode extends AbstractModel
{
    /**
     * @var TicketingItemMiscQualifiersTourCodeSuppressFareReplaceWithBT
     */
    protected $suppressFareReplaceWithBT;
    /**
     * @var TicketingItemMiscQualifiersTourCodeSuppressFareReplaceWithIT
     */
    protected $suppressFareReplaceWithIT;
    /**
     * @var TicketingItemMiscQualifiersTourCodeSuppressIT
     */
    protected $suppressIT;
    /**
     * @var TicketingItemMiscQualifiersTourCodeSuppressITSupressFare
     */
    protected $suppressITSupressFare;
    /**
     * "Text" is used to specify tour code.
     *
     * @var string
     */
    protected $text;

    /**
     * @return TicketingItemMiscQualifiersTourCodeSuppressFareReplaceWithBT
     */
    public function getSuppressFareReplaceWithBT(): ?TicketingItemMiscQualifiersTourCodeSuppressFareReplaceWithBT
    {
        return $this->suppressFareReplaceWithBT;
    }

    /**
     * @param TicketingItemMiscQualifiersTourCodeSuppressFareReplaceWithBT $suppressFareReplaceWithBT
     *
     * @return self
     */
    public function setSuppressFareReplaceWithBT(?TicketingItemMiscQualifiersTourCodeSuppressFareReplaceWithBT $suppressFareReplaceWithBT): self
    {
        $this->suppressFareReplaceWithBT = $suppressFareReplaceWithBT;

        return $this;
    }

    /**
     * @return TicketingItemMiscQualifiersTourCodeSuppressFareReplaceWithIT
     */
    public function getSuppressFareReplaceWithIT(): ?TicketingItemMiscQualifiersTourCodeSuppressFareReplaceWithIT
    {
        return $this->suppressFareReplaceWithIT;
    }

    /**
     * @param TicketingItemMiscQualifiersTourCodeSuppressFareReplaceWithIT $suppressFareReplaceWithIT
     *
     * @return self
     */
    public function setSuppressFareReplaceWithIT(?TicketingItemMiscQualifiersTourCodeSuppressFareReplaceWithIT $suppressFareReplaceWithIT): self
    {
        $this->suppressFareReplaceWithIT = $suppressFareReplaceWithIT;

        return $this;
    }

    /**
     * @return TicketingItemMiscQualifiersTourCodeSuppressIT
     */
    public function getSuppressIT(): ?TicketingItemMiscQualifiersTourCodeSuppressIT
    {
        return $this->suppressIT;
    }

    /**
     * @param TicketingItemMiscQualifiersTourCodeSuppressIT $suppressIT
     *
     * @return self
     */
    public function setSuppressIT(?TicketingItemMiscQualifiersTourCodeSuppressIT $suppressIT): self
    {
        $this->suppressIT = $suppressIT;

        return $this;
    }

    /**
     * @return TicketingItemMiscQualifiersTourCodeSuppressITSupressFare
     */
    public function getSuppressITSupressFare(): ?TicketingItemMiscQualifiersTourCodeSuppressITSupressFare
    {
        return $this->suppressITSupressFare;
    }

    /**
     * @param TicketingItemMiscQualifiersTourCodeSuppressITSupressFare $suppressITSupressFare
     *
     * @return self
     */
    public function setSuppressITSupressFare(?TicketingItemMiscQualifiersTourCodeSuppressITSupressFare $suppressITSupressFare): self
    {
        $this->suppressITSupressFare = $suppressITSupressFare;

        return $this;
    }

    /**
     * "Text" is used to specify tour code.
     *
     * @return string
     */
    public function getText(): ?string
    {
        return $this->text;
    }

    /**
     * "Text" is used to specify tour code.
     *
     * @param string $text
     *
     * @return self
     */
    public function setText(?string $text): self
    {
        $this->text = $text;

        return $this;
    }
}
