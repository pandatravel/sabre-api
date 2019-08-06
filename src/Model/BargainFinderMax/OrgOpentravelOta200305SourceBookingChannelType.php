<?php

namespace Ammonkc\SabreApi\Model\BargainFinderMax;

use Ammonkc\SabreApi\AbstractModel;

class OrgOpentravelOta200305SourceBookingChannelType extends AbstractModel
{
    /**
     * This element indicates the supplier associated with a negotiated fare code.
     *
     * @var OrgOpentravelOta200305CompanyNameType
     */
    protected $companyName;
    /**
     * Indicates whether the enumerated booking channel is the primary means of connectivity used by the source.
     *
     * @var bool
     */
    protected $primary;
    /**
     * @var string
     */
    protected $type;

    /**
     * This element indicates the supplier associated with a negotiated fare code.
     *
     * @return OrgOpentravelOta200305CompanyNameType
     */
    public function getCompanyName(): OrgOpentravelOta200305CompanyNameType
    {
        return $this->companyName;
    }

    /**
     * This element indicates the supplier associated with a negotiated fare code.
     *
     * @param OrgOpentravelOta200305CompanyNameType $companyName
     *
     * @return self
     */
    public function setCompanyName(OrgOpentravelOta200305CompanyNameType $companyName): self
    {
        $this->companyName = $companyName;

        return $this;
    }

    /**
     * Indicates whether the enumerated booking channel is the primary means of connectivity used by the source.
     *
     * @return bool
     */
    public function getPrimary(): bool
    {
        return $this->primary;
    }

    /**
     * Indicates whether the enumerated booking channel is the primary means of connectivity used by the source.
     *
     * @param bool $primary
     *
     * @return self
     */
    public function setPrimary(bool $primary): self
    {
        $this->primary = $primary;

        return $this;
    }

    /**
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }

    /**
     * @param string $type
     *
     * @return self
     */
    public function setType(string $type): self
    {
        $this->type = $type;

        return $this;
    }
}
