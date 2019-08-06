<?php

namespace Ammonkc\SabreApi\Model\BargainFinderMax;

use Ammonkc\SabreApi\AbstractModel;

class OrgOpentravelOta200305CabinPrefType extends AbstractModel
{
    /**
     * Specify cabin type.
     *
     * @var string
     */
    protected $cabin;
    /**
     * Used to specify a preference level for something that is or will be requested (e.g. a supplier of a service, a type of service, a form of payment, etc.).
     *
     * @var string
     */
    protected $preferLevel;

    /**
     * Specify cabin type.
     *
     * @return string
     */
    public function getCabin(): string
    {
        return $this->cabin;
    }

    /**
     * Specify cabin type.
     *
     * @param string $cabin
     *
     * @return self
     */
    public function setCabin(string $cabin): self
    {
        $this->cabin = $cabin;

        return $this;
    }

    /**
     * Used to specify a preference level for something that is or will be requested (e.g. a supplier of a service, a type of service, a form of payment, etc.).
     *
     * @return string
     */
    public function getPreferLevel(): string
    {
        return $this->preferLevel;
    }

    /**
     * Used to specify a preference level for something that is or will be requested (e.g. a supplier of a service, a type of service, a form of payment, etc.).
     *
     * @param string $preferLevel
     *
     * @return self
     */
    public function setPreferLevel(string $preferLevel): self
    {
        $this->preferLevel = $preferLevel;

        return $this;
    }
}
