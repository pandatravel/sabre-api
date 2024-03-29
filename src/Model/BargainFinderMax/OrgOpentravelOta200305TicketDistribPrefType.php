<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Ammonkc\SabreApi\Model\BargainFinderMax;

use Ammonkc\SabreApi\AbstractModel;

class OrgOpentravelOta200305TicketDistribPrefType extends AbstractModel
{
    /**
     * @var string
     */
    protected $distribType;
    /**
     * Used to specify a preference level for something that is or will be requested (e.g. a supplier of a service, a type of service, a form of payment, etc.).
     *
     * @var string
     */
    protected $preferLevel;
    /**
     * Ticket turnaround time desired, amount of time requested to deliver tickets.
     *
     * @var string
     */
    protected $ticketTime;
    /**
     * @var string
     */
    protected $content;

    /**
     * @return string|null
     */
    public function getDistribType(): ?string
    {
        return $this->distribType;
    }

    /**
     * @param string|null $distribType
     *
     * @return self
     */
    public function setDistribType(?string $distribType): self
    {
        $this->distribType = $distribType;

        return $this;
    }

    /**
     * Used to specify a preference level for something that is or will be requested (e.g. a supplier of a service, a type of service, a form of payment, etc.).
     *
     * @return string|null
     */
    public function getPreferLevel(): ?string
    {
        return $this->preferLevel;
    }

    /**
     * Used to specify a preference level for something that is or will be requested (e.g. a supplier of a service, a type of service, a form of payment, etc.).
     *
     * @param string|null $preferLevel
     *
     * @return self
     */
    public function setPreferLevel(?string $preferLevel): self
    {
        $this->preferLevel = $preferLevel;

        return $this;
    }

    /**
     * Ticket turnaround time desired, amount of time requested to deliver tickets.
     *
     * @return string|null
     */
    public function getTicketTime(): ?string
    {
        return $this->ticketTime;
    }

    /**
     * Ticket turnaround time desired, amount of time requested to deliver tickets.
     *
     * @param string|null $ticketTime
     *
     * @return self
     */
    public function setTicketTime(?string $ticketTime): self
    {
        $this->ticketTime = $ticketTime;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getContent(): ?string
    {
        return $this->content;
    }

    /**
     * @param string|null $content
     *
     * @return self
     */
    public function setContent(?string $content): self
    {
        $this->content = $content;

        return $this;
    }
}
