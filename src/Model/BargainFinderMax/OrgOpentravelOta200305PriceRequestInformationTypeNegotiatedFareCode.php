<?php

namespace Ammonkc\SabreApi\Model\BargainFinderMax;

use Ammonkc\SabreApi\AbstractModel;

class OrgOpentravelOta200305PriceRequestInformationTypeNegotiatedFareCode extends AbstractModel
{
    /**
     * Any code used to specify an item, for example, type of traveler, service code, room amenity, etc.
     *
     * @var string
     */
    protected $code;
    /**
     * Identifies the source authority for the code.
     *
     * @var string
     */
    protected $codeContext;
    /**
     * Used to define a quantity of an associated element or attribute.
     *
     * @var int
     */
    protected $quantity;
    /**
     * An additional attribute to allow flexibility for particular organizations who require an additional code.
     *
     * @var string
     */
    protected $secondaryCode;
    /**
     * @var OrgOpentravelOta200305CompanyNameType[]
     */
    protected $supplier;
    /**
     * An additional attribute to allow flexibility for particular organizations who require an additional supplier code.
     *
     * @var string
     */
    protected $supplierCode;
    /**
     * @var string[]
     */
    protected $tPAExtensions;
    /**
     * Identifies the location of the code table.
     *
     * @var string
     */
    protected $uRI;

    /**
     * Any code used to specify an item, for example, type of traveler, service code, room amenity, etc.
     *
     * @return string
     */
    public function getCode(): string
    {
        return $this->code;
    }

    /**
     * Any code used to specify an item, for example, type of traveler, service code, room amenity, etc.
     *
     * @param string $code
     *
     * @return self
     */
    public function setCode(string $code): self
    {
        $this->code = $code;

        return $this;
    }

    /**
     * Identifies the source authority for the code.
     *
     * @return string
     */
    public function getCodeContext(): string
    {
        return $this->codeContext;
    }

    /**
     * Identifies the source authority for the code.
     *
     * @param string $codeContext
     *
     * @return self
     */
    public function setCodeContext(string $codeContext): self
    {
        $this->codeContext = $codeContext;

        return $this;
    }

    /**
     * Used to define a quantity of an associated element or attribute.
     *
     * @return int
     */
    public function getQuantity(): int
    {
        return $this->quantity;
    }

    /**
     * Used to define a quantity of an associated element or attribute.
     *
     * @param int $quantity
     *
     * @return self
     */
    public function setQuantity(int $quantity): self
    {
        $this->quantity = $quantity;

        return $this;
    }

    /**
     * An additional attribute to allow flexibility for particular organizations who require an additional code.
     *
     * @return string
     */
    public function getSecondaryCode(): string
    {
        return $this->secondaryCode;
    }

    /**
     * An additional attribute to allow flexibility for particular organizations who require an additional code.
     *
     * @param string $secondaryCode
     *
     * @return self
     */
    public function setSecondaryCode(string $secondaryCode): self
    {
        $this->secondaryCode = $secondaryCode;

        return $this;
    }

    /**
     * @return OrgOpentravelOta200305CompanyNameType[]
     */
    public function getSupplier(): array
    {
        return $this->supplier;
    }

    /**
     * @param OrgOpentravelOta200305CompanyNameType[] $supplier
     *
     * @return self
     */
    public function setSupplier(array $supplier): self
    {
        $this->supplier = $supplier;

        return $this;
    }

    /**
     * An additional attribute to allow flexibility for particular organizations who require an additional supplier code.
     *
     * @return string
     */
    public function getSupplierCode(): string
    {
        return $this->supplierCode;
    }

    /**
     * An additional attribute to allow flexibility for particular organizations who require an additional supplier code.
     *
     * @param string $supplierCode
     *
     * @return self
     */
    public function setSupplierCode(string $supplierCode): self
    {
        $this->supplierCode = $supplierCode;

        return $this;
    }

    /**
     * @return string[]
     */
    public function getTPAExtensions(): array
    {
        return $this->tPAExtensions;
    }

    /**
     * @param string[] $tPAExtensions
     *
     * @return self
     */
    public function setTPAExtensions(array $tPAExtensions): self
    {
        $this->tPAExtensions = $tPAExtensions;

        return $this;
    }

    /**
     * Identifies the location of the code table.
     *
     * @return string
     */
    public function getURI(): string
    {
        return $this->uRI;
    }

    /**
     * Identifies the location of the code table.
     *
     * @param string $uRI
     *
     * @return self
     */
    public function setURI(string $uRI): self
    {
        $this->uRI = $uRI;

        return $this;
    }
}
