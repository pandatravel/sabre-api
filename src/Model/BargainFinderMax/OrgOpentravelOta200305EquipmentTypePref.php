<?php

namespace Ammonkc\SabreApi\Model\BargainFinderMax;

use Ammonkc\SabreApi\AbstractModel;

class OrgOpentravelOta200305EquipmentTypePref extends AbstractModel
{
    /**
     * @var string
     */
    protected $airEquipType;
    /**
     * Indicates there is an equipment change.
     *
     * @var bool
     */
    protected $changeofGauge;
    /**
     * Used to specify a preference level for something that is or will be requested (e.g. a supplier of a service, a type of service, a form of payment, etc.).
     *
     * @var string
     */
    protected $preferLevel;
    /**
     * Specify if equipment should have a wide body or not.
     *
     * @var bool
     */
    protected $wideBody;
    /**
     * @var string
     */
    protected $content;

    /**
     * @return string
     */
    public function getAirEquipType(): ?string
    {
        return $this->airEquipType;
    }

    /**
     * @param string $airEquipType
     *
     * @return self
     */
    public function setAirEquipType(?string $airEquipType): self
    {
        $this->airEquipType = $airEquipType;

        return $this;
    }

    /**
     * Indicates there is an equipment change.
     *
     * @return bool
     */
    public function getChangeofGauge(): ?bool
    {
        return $this->changeofGauge;
    }

    /**
     * Indicates there is an equipment change.
     *
     * @param bool $changeofGauge
     *
     * @return self
     */
    public function setChangeofGauge(?bool $changeofGauge): self
    {
        $this->changeofGauge = $changeofGauge;

        return $this;
    }

    /**
     * Used to specify a preference level for something that is or will be requested (e.g. a supplier of a service, a type of service, a form of payment, etc.).
     *
     * @return string
     */
    public function getPreferLevel(): ?string
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
    public function setPreferLevel(?string $preferLevel): self
    {
        $this->preferLevel = $preferLevel;

        return $this;
    }

    /**
     * Specify if equipment should have a wide body or not.
     *
     * @return bool
     */
    public function getWideBody(): ?bool
    {
        return $this->wideBody;
    }

    /**
     * Specify if equipment should have a wide body or not.
     *
     * @param bool $wideBody
     *
     * @return self
     */
    public function setWideBody(?bool $wideBody): self
    {
        $this->wideBody = $wideBody;

        return $this;
    }

    /**
     * @return string
     */
    public function getContent(): ?string
    {
        return $this->content;
    }

    /**
     * @param string $content
     *
     * @return self
     */
    public function setContent(?string $content): self
    {
        $this->content = $content;

        return $this;
    }
}
