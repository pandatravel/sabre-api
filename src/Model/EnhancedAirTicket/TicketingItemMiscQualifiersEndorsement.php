<?php

namespace Ammonkc\SabreApi\Model\EnhancedAirTicket;

use Ammonkc\SabreApi\AbstractModel;

class TicketingItemMiscQualifiersEndorsement extends AbstractModel
{
    /**
     * Endorsement Override.
     *
     * @var bool
     */
    protected $override;
    /**
     * "Text" is used to pass miscellaneous text in the endorsements field.
     *
     * @var string
     */
    protected $text;

    /**
     * Endorsement Override.
     *
     * @return bool
     */
    public function getOverride(): ?bool
    {
        return $this->override;
    }

    /**
     * Endorsement Override.
     *
     * @param bool $override
     *
     * @return self
     */
    public function setOverride(?bool $override): self
    {
        $this->override = $override;

        return $this;
    }

    /**
     * "Text" is used to pass miscellaneous text in the endorsements field.
     *
     * @return string
     */
    public function getText(): ?string
    {
        return $this->text;
    }

    /**
     * "Text" is used to pass miscellaneous text in the endorsements field.
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
