<?php

namespace Ammonkc\SabreApi\Model\BargainFinderMax;

use Ammonkc\SabreApi\AbstractModel;

class OrgOpentravelOta200305ExchangeAirSearchPrefsType extends AbstractModel
{
    /**
     * @var OrgOpentravelOta200305ExchangeTravelPreferencesTPAExtensionsType
     */
    protected $tPAExtensions;
    /**
     * Request itins that are validated on base of interline ticketing aggrement.
     *
     * @var bool
     */
    protected $validInterlineTicket;

    /**
     * @return OrgOpentravelOta200305ExchangeTravelPreferencesTPAExtensionsType
     */
    public function getTPAExtensions(): ?OrgOpentravelOta200305ExchangeTravelPreferencesTPAExtensionsType
    {
        return $this->tPAExtensions;
    }

    /**
     * @param OrgOpentravelOta200305ExchangeTravelPreferencesTPAExtensionsType $tPAExtensions
     *
     * @return self
     */
    public function setTPAExtensions(?OrgOpentravelOta200305ExchangeTravelPreferencesTPAExtensionsType $tPAExtensions): self
    {
        $this->tPAExtensions = $tPAExtensions;

        return $this;
    }

    /**
     * Request itins that are validated on base of interline ticketing aggrement.
     *
     * @return bool
     */
    public function getValidInterlineTicket(): ?bool
    {
        return $this->validInterlineTicket;
    }

    /**
     * Request itins that are validated on base of interline ticketing aggrement.
     *
     * @param bool $validInterlineTicket
     *
     * @return self
     */
    public function setValidInterlineTicket(?bool $validInterlineTicket): self
    {
        $this->validInterlineTicket = $validInterlineTicket;

        return $this;
    }
}
