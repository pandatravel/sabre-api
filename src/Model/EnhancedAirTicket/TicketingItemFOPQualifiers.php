<?php

namespace Ammonkc\SabreApi\Model\EnhancedAirTicket;

use Ammonkc\SabreApi\AbstractModel;

class TicketingItemFOPQualifiers extends AbstractModel
{
    /**
     * BasicFOP cannot combine with .../BSP_Ticketing, or .../SabreSonicTicketing, or .../Multiple CC_FOP.
     *
     * @var TicketingItemFOPQualifiersBasicFOP
     */
    protected $basicFOP;
    /**
     * BSP_Ticketing is only valid for BSP-based clients.

    BSP_Ticketing cannot combine with .../SabreSonicTicketing, or .../Multiple CC_FOP.

     *
     * @var TicketingItemFOPQualifiersBSPTicketing
     */
    protected $bSPTicketing;
    /**
     * Multiple CC_FOP cannot combine with .../BSP_Ticketing, or .../SabreSonicTicketing.
     *
     * @var TicketingItemFOPQualifiersMultipleCCFOP
     */
    protected $multipleCCFOP;
    /**
     * SabreSonicTicketing is only valid for SabreSonic-based airlines.
    SabreSonicTicketing cannot combine with .../BSP_Ticketing, or .../Multiple CC_FOP.
     *
     * @var TicketingItemFOPQualifiersSabreSonicTicketing
     */
    protected $sabreSonicTicketing;

    /**
     * BasicFOP cannot combine with .../BSP_Ticketing, or .../SabreSonicTicketing, or .../Multiple CC_FOP.
     *
     * @return TicketingItemFOPQualifiersBasicFOP
     */
    public function getBasicFOP(): ?TicketingItemFOPQualifiersBasicFOP
    {
        return $this->basicFOP;
    }

    /**
     * BasicFOP cannot combine with .../BSP_Ticketing, or .../SabreSonicTicketing, or .../Multiple CC_FOP.
     *
     * @param TicketingItemFOPQualifiersBasicFOP $basicFOP
     *
     * @return self
     */
    public function setBasicFOP(?TicketingItemFOPQualifiersBasicFOP $basicFOP): self
    {
        $this->basicFOP = $basicFOP;

        return $this;
    }

    /**
     * BSP_Ticketing is only valid for BSP-based clients.

    BSP_Ticketing cannot combine with .../SabreSonicTicketing, or .../Multiple CC_FOP.

     *
     * @return TicketingItemFOPQualifiersBSPTicketing
     */
    public function getBSPTicketing(): ?TicketingItemFOPQualifiersBSPTicketing
    {
        return $this->bSPTicketing;
    }

    /**
     * BSP_Ticketing is only valid for BSP-based clients.

    BSP_Ticketing cannot combine with .../SabreSonicTicketing, or .../Multiple CC_FOP.

     *
     * @param TicketingItemFOPQualifiersBSPTicketing $bSPTicketing
     *
     * @return self
     */
    public function setBSPTicketing(?TicketingItemFOPQualifiersBSPTicketing $bSPTicketing): self
    {
        $this->bSPTicketing = $bSPTicketing;

        return $this;
    }

    /**
     * Multiple CC_FOP cannot combine with .../BSP_Ticketing, or .../SabreSonicTicketing.
     *
     * @return TicketingItemFOPQualifiersMultipleCCFOP
     */
    public function getMultipleCCFOP(): ?TicketingItemFOPQualifiersMultipleCCFOP
    {
        return $this->multipleCCFOP;
    }

    /**
     * Multiple CC_FOP cannot combine with .../BSP_Ticketing, or .../SabreSonicTicketing.
     *
     * @param TicketingItemFOPQualifiersMultipleCCFOP $multipleCCFOP
     *
     * @return self
     */
    public function setMultipleCCFOP(?TicketingItemFOPQualifiersMultipleCCFOP $multipleCCFOP): self
    {
        $this->multipleCCFOP = $multipleCCFOP;

        return $this;
    }

    /**
     * SabreSonicTicketing is only valid for SabreSonic-based airlines.
    SabreSonicTicketing cannot combine with .../BSP_Ticketing, or .../Multiple CC_FOP.
     *
     * @return TicketingItemFOPQualifiersSabreSonicTicketing
     */
    public function getSabreSonicTicketing(): ?TicketingItemFOPQualifiersSabreSonicTicketing
    {
        return $this->sabreSonicTicketing;
    }

    /**
     * SabreSonicTicketing is only valid for SabreSonic-based airlines.
    SabreSonicTicketing cannot combine with .../BSP_Ticketing, or .../Multiple CC_FOP.
     *
     * @param TicketingItemFOPQualifiersSabreSonicTicketing $sabreSonicTicketing
     *
     * @return self
     */
    public function setSabreSonicTicketing(?TicketingItemFOPQualifiersSabreSonicTicketing $sabreSonicTicketing): self
    {
        $this->sabreSonicTicketing = $sabreSonicTicketing;

        return $this;
    }
}
