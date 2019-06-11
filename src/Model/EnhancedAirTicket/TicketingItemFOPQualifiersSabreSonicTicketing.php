<?php

namespace Ammonkc\SabreApi\Model\EnhancedAirTicket;

use Ammonkc\SabreApi\AbstractModel;

class TicketingItemFOPQualifiersSabreSonicTicketing extends AbstractModel
{
    /**
     * BasicFOP cannot combine with .../EnhancedMultipleFOP, or .../MultipleFOP.
     *
     * @var TicketingItemFOPQualifiersSabreSonicTicketingBasicFOP
     */
    protected $basicFOP;
    /**
     * EnhancedMultipleFOP is only valid for SabreSonic-based airlines who have activated the enhanced multiple form of payment option.

    EnhancedMultipleFOP cannot combine with .../MultipleFOP.

     *
     * @var TicketingItemFOPQualifiersSabreSonicTicketingEnhancedMultipleFOP
     */
    protected $enhancedMultipleFOP;
    /**
     * MultipleFOP cannot combine with .../EnhancedMultipleFOP.
     *
     * @var TicketingItemFOPQualifiersSabreSonicTicketingMultipleFOP
     */
    protected $multipleFOP;

    /**
     * BasicFOP cannot combine with .../EnhancedMultipleFOP, or .../MultipleFOP.
     *
     * @return TicketingItemFOPQualifiersSabreSonicTicketingBasicFOP
     */
    public function getBasicFOP(): ?TicketingItemFOPQualifiersSabreSonicTicketingBasicFOP
    {
        return $this->basicFOP;
    }

    /**
     * BasicFOP cannot combine with .../EnhancedMultipleFOP, or .../MultipleFOP.
     *
     * @param TicketingItemFOPQualifiersSabreSonicTicketingBasicFOP $basicFOP
     *
     * @return self
     */
    public function setBasicFOP(?TicketingItemFOPQualifiersSabreSonicTicketingBasicFOP $basicFOP): self
    {
        $this->basicFOP = $basicFOP;

        return $this;
    }

    /**
     * EnhancedMultipleFOP is only valid for SabreSonic-based airlines who have activated the enhanced multiple form of payment option.

    EnhancedMultipleFOP cannot combine with .../MultipleFOP.

     *
     * @return TicketingItemFOPQualifiersSabreSonicTicketingEnhancedMultipleFOP
     */
    public function getEnhancedMultipleFOP(): ?TicketingItemFOPQualifiersSabreSonicTicketingEnhancedMultipleFOP
    {
        return $this->enhancedMultipleFOP;
    }

    /**
     * EnhancedMultipleFOP is only valid for SabreSonic-based airlines who have activated the enhanced multiple form of payment option.

    EnhancedMultipleFOP cannot combine with .../MultipleFOP.

     *
     * @param TicketingItemFOPQualifiersSabreSonicTicketingEnhancedMultipleFOP $enhancedMultipleFOP
     *
     * @return self
     */
    public function setEnhancedMultipleFOP(?TicketingItemFOPQualifiersSabreSonicTicketingEnhancedMultipleFOP $enhancedMultipleFOP): self
    {
        $this->enhancedMultipleFOP = $enhancedMultipleFOP;

        return $this;
    }

    /**
     * MultipleFOP cannot combine with .../EnhancedMultipleFOP.
     *
     * @return TicketingItemFOPQualifiersSabreSonicTicketingMultipleFOP
     */
    public function getMultipleFOP(): ?TicketingItemFOPQualifiersSabreSonicTicketingMultipleFOP
    {
        return $this->multipleFOP;
    }

    /**
     * MultipleFOP cannot combine with .../EnhancedMultipleFOP.
     *
     * @param TicketingItemFOPQualifiersSabreSonicTicketingMultipleFOP $multipleFOP
     *
     * @return self
     */
    public function setMultipleFOP(?TicketingItemFOPQualifiersSabreSonicTicketingMultipleFOP $multipleFOP): self
    {
        $this->multipleFOP = $multipleFOP;

        return $this;
    }
}
