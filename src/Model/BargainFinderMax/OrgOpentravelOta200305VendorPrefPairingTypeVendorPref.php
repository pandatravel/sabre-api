<?php

namespace Ammonkc\SabreApi\Model\BargainFinderMax;

use Ammonkc\SabreApi\AbstractModel;

class OrgOpentravelOta200305VendorPrefPairingTypeVendorPref extends AbstractModel
{
    /**
     * Used to specify if carrier type is marketing or operating.,Defines preferred flight characteristics to be used in a search.,Identifies a particular type of flight - Direct, Stopover etc.,Used to specify a preference level for something that is or will be requested (e.g. a supplier of a service, a type of service, a form of payment, etc.).,Indicates that if connection is chosen, then this attribute defines the maximum number of connections preferred.
     *
     * @var string
     */
    protected $code;
    /**
     * @var string
     */
    protected $type;

    /**
     * Used to specify if carrier type is marketing or operating.,Defines preferred flight characteristics to be used in a search.,Identifies a particular type of flight - Direct, Stopover etc.,Used to specify a preference level for something that is or will be requested (e.g. a supplier of a service, a type of service, a form of payment, etc.).,Indicates that if connection is chosen, then this attribute defines the maximum number of connections preferred.
     *
     * @return string
     */
    public function getCode(): ?string
    {
        return $this->code;
    }

    /**
     * Used to specify if carrier type is marketing or operating.,Defines preferred flight characteristics to be used in a search.,Identifies a particular type of flight - Direct, Stopover etc.,Used to specify a preference level for something that is or will be requested (e.g. a supplier of a service, a type of service, a form of payment, etc.).,Indicates that if connection is chosen, then this attribute defines the maximum number of connections preferred.
     *
     * @param string $code
     *
     * @return self
     */
    public function setCode(?string $code): self
    {
        $this->code = $code;

        return $this;
    }

    /**
     * @return string
     */
    public function getType(): ?string
    {
        return $this->type;
    }

    /**
     * @param string $type
     *
     * @return self
     */
    public function setType(?string $type): self
    {
        $this->type = $type;

        return $this;
    }
}
