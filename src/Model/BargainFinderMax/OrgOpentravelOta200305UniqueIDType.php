<?php

namespace Ammonkc\SabreApi\Model\BargainFinderMax;

use Ammonkc\SabreApi\AbstractModel;

class OrgOpentravelOta200305UniqueIDType extends AbstractModel
{
    /**
     * This element indicates the supplier associated with a negotiated fare code.
     *
     * @var OrgOpentravelOta200305CompanyNameType
     */
    protected $companyName;
    /**
     * A unique identifying value assigned by the creating system. The ID attribute may be used to reference a primary-key value within a database or in a particular implementation.
     *
     * @var string
     */
    protected $iD;
    /**
     * Used to identify the source of the identifier (e.g. IATA, ABTA, etc.).
     *
     * @var string
     */
    protected $iDContext;
    /**
     * The identification of a record as it exists at a point in time. An instance is used in update messages where the sender must assure the server that the update sent refers to the most recent modification level of the object being updated.
     *
     * @var string
     */
    protected $instance;
    /**
     * @var string
     */
    protected $type;
    /**
     * URL that identifies the location associated with the record identified by the UniqueID.
     *
     * @var string
     */
    protected $uRL;

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
     * A unique identifying value assigned by the creating system. The ID attribute may be used to reference a primary-key value within a database or in a particular implementation.
     *
     * @return string
     */
    public function getID(): string
    {
        return $this->iD;
    }

    /**
     * A unique identifying value assigned by the creating system. The ID attribute may be used to reference a primary-key value within a database or in a particular implementation.
     *
     * @param string $iD
     *
     * @return self
     */
    public function setID(string $iD): self
    {
        $this->iD = $iD;

        return $this;
    }

    /**
     * Used to identify the source of the identifier (e.g. IATA, ABTA, etc.).
     *
     * @return string
     */
    public function getIDContext(): string
    {
        return $this->iDContext;
    }

    /**
     * Used to identify the source of the identifier (e.g. IATA, ABTA, etc.).
     *
     * @param string $iDContext
     *
     * @return self
     */
    public function setIDContext(string $iDContext): self
    {
        $this->iDContext = $iDContext;

        return $this;
    }

    /**
     * The identification of a record as it exists at a point in time. An instance is used in update messages where the sender must assure the server that the update sent refers to the most recent modification level of the object being updated.
     *
     * @return string
     */
    public function getInstance(): string
    {
        return $this->instance;
    }

    /**
     * The identification of a record as it exists at a point in time. An instance is used in update messages where the sender must assure the server that the update sent refers to the most recent modification level of the object being updated.
     *
     * @param string $instance
     *
     * @return self
     */
    public function setInstance(string $instance): self
    {
        $this->instance = $instance;

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

    /**
     * URL that identifies the location associated with the record identified by the UniqueID.
     *
     * @return string
     */
    public function getURL(): string
    {
        return $this->uRL;
    }

    /**
     * URL that identifies the location associated with the record identified by the UniqueID.
     *
     * @param string $uRL
     *
     * @return self
     */
    public function setURL(string $uRL): self
    {
        $this->uRL = $uRL;

        return $this;
    }
}
